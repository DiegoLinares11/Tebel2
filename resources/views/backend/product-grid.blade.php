@extends('templates.backend')

@section('sidebar')
    <!-- Aquí va todo el contenido de tu sidebar (menú lateral) tal como lo tienes -->
@stop

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product Grid</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Product Grid</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- Filtros del producto a la izquierda -->
                <div class="col-xl-3 col-lg-4">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mb-0">Filters</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion accordion-flush filter-accordion">
                            <!-- Aquí irán tus filtros -->
                            <!-- Puedes agregar más secciones de filtros si lo deseas -->
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <!-- Grilla de productos -->
                <div class="col-xl-9 col-lg-8">
                    <div class="row g-4 mb-4">
                        <div class="col-sm-auto">
                            <div>
                                <a href="product-create.html" class="btn btn-primary" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" autocomplete="off" id="searchProductList" placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Productos desde la base de datos -->
                    <div class="row" id="product-grid">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <img src="{{ asset('images/products/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                        <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                                        <a href="#" class="btn btn-primary">View Product</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                {{ $products->links() }} <!-- Paginación generada por Laravel -->
                            </div>
                        </div>
                    </div>

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
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Tebel.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Tebel
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@stop
