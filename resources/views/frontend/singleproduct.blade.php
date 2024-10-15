@extends('templates.frontend')

@section('content')

    {{-- Announce Products --}}
    <section class="ecommerce-about" style="background-image: url('../assets/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">Product Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ol>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>


    <section class="section">
        <div class="container">
            <div class="row gx-2">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div thumbsSlider="" class="swiper productSwiper mb-3 mb-lg-0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="../assets/images/products/img-31.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="../assets/images/products/img-33.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="../assets/images/products/img-32.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="../assets/images/products/img-34.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="../assets/images/products/img-34.png" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-10">
                            <div class="bg-light rounded-2 position-relative ribbon-box overflow-hidden">
                                <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                                    <span class="trending-ribbon-text">Trending</span> <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                                </div>
                                <div class="swiper productSwiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ">
                                            <img src="{{asset('images/products/img-12.png') }}" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next bg-transparent"></div>
                                    <div class="swiper-button-prev bg-transparent"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="mt-3">
                                <div class="hstack gap-2">
                                    <button type="button" class="btn btn-success btn-hover w-100">
                                        <i class="bi bi-basket2 me-2"></i> Add To Cart
                                    </button>
                                    <button type="button" class="btn btn-primary btn-hover w-100">
                                        <i class="bi bi-cart2 me-2"></i> Buy Now
                                    </button>
                                    <button class="btn btn-soft-danger custom-toggle btn-hover" data-bs-toggle="button" aria-pressed="true"> <span class="icon-on"><i class="ri-heart-line"></i></span> <span class="icon-off"><i class="ri-heart-fill"></i></span> </button>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
                <div class="col-lg-5 ms-auto">
                    <div class="ecommerce-product-widgets mt-4 mt-lg-0">
                        <div class="mb-4">
                            <div class="d-flex gap-3 mb-2">
                                <div class="fs-15 text-warning">
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-half-fill align-bottom"></i>
                                </div>
                                <span class="fw-medium"> (50 Review)</span>
                            </div>
                            <h4 class="lh-base mb-1">{{ $producto->name }}</h4>
                            <p class="text-muted mb-4">{{ $producto->description }} </p>
                            <h3 class="fs-24 mb-4">Categoria: {{$producto->category->name}}</h3>
                            <h5 class="fs-24 mb-4">Q{{number_format( $producto->price,2) }} <span class="text-muted fs-14"><del>$280.99</del></span> <span class="fs-14 ms-2 text-danger"> (50% off)</span></h5>
                            <ul class="list-unstyled vstack gap-2">
                                <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>In stock</li>
                                <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Free delivery available</li>
                                <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Sales 10% Off Use Code: <b>FASHION10</b></li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <h5 class="fs-15 mb-0">Quantity:</h5>
                            <div class="input-step ms-2">
                                <button type="button" class="minus">–</button>
                                <input type="number" class="product-quantity1" value="1" min="0" max="100" readonly="">
                                <button type="button" class="plus">+</button>
                            </div>
                        </div>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
