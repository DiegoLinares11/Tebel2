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

    {{-- Products Grid --}}
    <div class="position-relative section">
        <div class="container">
            <div class="ecommerce-product gap-4">
                <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <p class="text-muted flex-grow-1 mb-0">Showing 1-12 of 84 results</p>

                        <div class="flex-shrink-0">
                            <select class="form-select w-md" id="sort-elem">
                                <option value="">All</option>
                                <option value="low_to_high">Low to High</option>
                                <option value="high_to_low">High to Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="product-grid-right">
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card overflow-hidden element-item">
                                <div class="bg-dark-subtle py-4">
                                    <div class="gallery-product">
                                        <img src="front/images/products/img-8.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
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
                                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to Cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="#!">
                                            <h6 class="fs-16 lh-base text-truncate mb-0">Producto 1</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-secondary mb-0">$0.00 <span class="text-muted fs-12"><del>$0.00</del></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <!-- Repite lo mismo para los otros productos, cambiando el nombre y asegurando que el precio sea $0.00 -->
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card overflow-hidden element-item">
                                <div class="bg-secondary-subtle py-4">
                                    <div class="gallery-product">
                                        <img src="front/images/products/img-15.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
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
                                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to Cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="#!">
                                            <h6 class="fs-16 lh-base text-truncate mb-0">Producto 2</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-secondary mb-0">$0.00 <span class="text-muted fs-12"><del>$0.00</del></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card overflow-hidden element-item">
                                <div class="bg-secondary-subtle py-4">
                                    <div class="gallery-product">
                                        <img src="front/images/products/img-15.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
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
                                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to Cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="#!">
                                            <h6 class="fs-16 lh-base text-truncate mb-0">Producto 3</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-secondary mb-0">$0.00 <span class="text-muted fs-12"><del>$0.00</del></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card overflow-hidden element-item">
                                <div class="bg-secondary-subtle py-4">
                                    <div class="gallery-product">
                                        <img src="front/images/products/img-15.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
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
                                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to Cart</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="#!">
                                            <h6 class="fs-16 lh-base text-truncate mb-0">Producto 4</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-secondary mb-0">$0.00 <span class="text-muted fs-12"><del>$0.00</del></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    

                    <div class="row" id="pagination-element">
                        <div class="col-lg-12">
                            <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                <div class="page-item">
                                    <a href="javascript:void(0);" class="page-link" id="page-prev">Previous</a>
                                </div>
                                <span id="page-num" class="pagination"></span>
                                <div class="page-item">
                                    <a href="javascript:void(0);" class="page-link" id="page-next">Next</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row d-none" id="search-result-elem">
                        <div class="col-lg-12">
                            <div class="text-center py-5">
                                <div class="avatar-lg mx-auto mb-4">
                                    <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </div>

                                <h5>No matching records found</h5>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>

                <div class="sidebar small-sidebar flex-shrink-0">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16">Filters</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                                </div>
                            </div>

                            <div class="search-box">
                                <input type="text" class="form-control" id="searchProductList" autocomplete="off" placeholder="Search Products...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="accordion accordion-flush filter-accordion">

                            <div class="card-body border-bottom">
                                <div>
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-3">Products</p>
                                    <ul class="list-unstyled mb-0 filter-list">
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Utiles</h5>
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
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                                <div id="product-price-range" data-slider-color="info"></div>
                                <div class="formCost d-flex gap-2 align-items-center mt-3">
                                    <input class="form-control form-control-sm" type="text" id="minCost" value="0"> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div><!--end container-->
    </div>
@stop