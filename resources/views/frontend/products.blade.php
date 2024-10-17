@extends('templates.frontend')

@section('content')

    {{-- Announce Products --}}
    <section class="ecommerce-about" style="background-image: url('front/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">Nuestros productos</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                                <li class="breadcrumb-item"><a href="#">Todos los productos</a></li>
                            </ol>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <div class="container position-relative section">
        <div class="row">

            {{-- Sidebar de filtros --}}
            <div class="col-lg-3">
                <div class="sidebar small-sidebar flex-shrink-0">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16">Filtros</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="text-decoration-underline" id="clearall">Quitar todos</a>
                                </div>
                            </div>

                            <div class="search-box">
                                <input type="text" class="form-control" id="searchProductList" autocomplete="off" placeholder="Buscar productos...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="accordion accordion-flush filter-accordion">
                            <div class="card-body border-bottom">
                                <div>
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-3">Categorias</p>
                                    <ul class="list-unstyled mb-0 filter-list">
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Utiles escolares</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Limpieza</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">20</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Limpieza domestica</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">10</span>
                                                </div>
                                            </a>
                                        </li>  
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body border-bottom">
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Precio</p>

                                <div id="product-price-range" data-slider-color="info"></div>
                                <div class="formCost d-flex gap-2 align-items-center mt-3">
                                    <input class="form-control form-control-sm" type="text" id="minCost" value="0"> 
                                    <span class="fw-semibold text-muted">to</span> 
                                    <input class="form-control form-control-sm" type="text" id="maxCost" value="1000">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>

            {{-- Products Grid --}}
            <div class="col-lg-9">
                <div class="ecommerce-product gap-4">
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center gap-2 mb-4">
                            <p class="text-muted flex-grow-1 mb-0">Mostrando {{ $products->firstItem() }}-{{ $products->lastItem() }} de {{ $products->total() }} resultados</p>

                            <div class="flex-shrink-0">
                                <select class="form-select w-md" id="sort-elem">
                                    <option value="">All</option>
                                    <option value="low_to_high">Low to High</option>
                                    <option value="high_to_low">High to Low</option>
                                </select>
                            </div>
                        </div>

                        <div class="row" id="product-grid-right">
                        @foreach ($products as $product)
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card overflow-hidden element-item">
                                <div class="bg-dark-subtle py-4">
                                    <div class="gallery-product">
                                        <a href="{{ route('singleproduct', ['id' => $product->id]) }}">
                                            <img src="{{ asset('images/products/' . $product->image_path) }}" alt="{{ $product->name }}" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </a>
                                    </div>
                                    <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">Best Arrival</p>
                                    <div class="gallery-product-actions">
                                        <div class="mb-2">
                                            <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                                <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                                <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                                <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-btn px-3">
                                        <a href="{{ route('singleproduct', ['id' => $product->id]) }}" class="btn btn-primary btn-sm w-75 add-btn">
                                            <i class="mdi mdi-cart me-1"></i> View Product
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="{{ route('singleproduct', ['id' => $product->id]) }}">
                                            <h6 class="fs-16 lh-base text-truncate mb-0">{{ $product->name }}</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">{{ $product->rating }} <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-secondary mb-0">${{ $product->price }} <span class="text-muted fs-12"><del>$0.00</del></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    @endforeach
                        </div><!--end row-->

                        {{-- Paginación --}}
                        <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                            <ul class="pagination">
                                {{-- Link to the previous page --}}
                                @if ($products->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="ri-arrow-left-line"></i></span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">
                                            <i class="ri-arrow-left-line"></i>
                                        </a>
                                    </li>
                                @endif

                                {{-- Paginate through the pages --}}
                                @foreach ($products->links()->elements[0] as $page => $url)
                                    <li class="page-item {{ $products->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                {{-- Link to the next page --}}
                                @if ($products->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="ri-arrow-right-line"></i></span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
@stop
