@extends('templates.frontend')

@section('content')

    {{-- beggins "cleaner announcement" --}}
    <section class="modern-fashion-home bg-warning-subtle overflow-hidden">
        <div class="font-effect position-absolute ff-fancy text-warning fw-normal text-uppercase">
            New Arrivals FASHION
        </div>
        <div class="container-fluid container-custom">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <p class="fs-18">First text</p>
                    <h1 class="text-capitalize display-5 fw-medium lh-base mb-3">Example <span class="ff-secondary">Text</span> example</h1>
                    <p class="text-muted lead fw-normal mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                </div><!--end col-->
                <div class="col-lg-6 ms-auto">
                    <div class="text-center main-home-img">
                        <img src="front/images/comingsoon.png" alt="">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-fluid-->
    </section>

    {{-- Commerce items --}}
    <section class="py-5 border-bottom">
        <div class="container-fluid container-custom">
            <div class="row g-3">
                <div class="col-lg-3">
                    <div class="card bg-success-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-success bg-opacity-10 text-success rounded fs-22">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">Fast & Free Shipping</h6>
                                <p class="text-muted mb-0">Free Shipping for orders over $100</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card bg-primary-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-primary bg-opacity-10 text-primary rounded fs-22">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">Payment Security</h6>
                                <p class="text-muted mb-0">Within 1 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card bg-danger-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-danger bg-opacity-10 text-danger rounded fs-22">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">Products Quality</h6>
                                <p class="text-muted mb-0">Free Shipping for orders over $100</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card bg-secondary-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-secondary bg-opacity-10 text-secondary rounded fs-22">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">24/7 Support</h6>
                                <p class="text-muted mb-0">24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--end section-->

    {{-- Trending products --}}
    <section class="py-5 border-bottom" style="margin-top: 50px;">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="title fw-normal text-capitalize mb-3"><b>Trending</b> Products</h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1" id="productList">
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-02.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-17.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">URBAN Men Winter Stylish Jacket</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$87.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Success" data-bs-original-title="Success">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate ribbon-box">
                        <div class="ribbon ribbon-danger round-shape fw-normal fs-14">10% Off</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-05.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-01.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Elanhood Full Sleeve Solid Women Jacket</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$120.32 <small class="text-decoration-line-through fs-14 text-muted">$348.24</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-03.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-08.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">American Tourists Blue Polyester Backpack</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$64.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Red" data-bs-original-title="Red">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 ribbon-box card-animate">
                        <div class="ribbon ribbon-info round-shape fw-normal fs-14">Trending</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-18.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-17.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Nike MAG Back to the Future</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$149.57</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-08.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-18.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Girls Printed Shorts</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$124.64</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Green" data-bs-original-title="Green">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Purple" data-bs-original-title="Purple">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 ribbon-box card-animate">
                        <div class="ribbon ribbon-danger round-shape fw-normal fs-14">Up to 15% Off</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-12.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-09.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Stylish Collar Full Sleeve T-shirt</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$241.99 <small class="text-decoration-line-through fs-14 text-muted">119.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Success" data-bs-original-title="Success">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-11.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-13.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Style Women A-line dark Blue Dress</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$120.32</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-13.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-11.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Imported Fabulous Women Top And Bottom Set</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$59.99 <small class="text-decoration-line-through fs-14 text-muted">$249.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Red" data-bs-original-title="Red">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-15.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-14.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Urbanic Women Fit And Flare Black Dress</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$97.49 <small class="text-decoration-line-through fs-14 text-muted">265.37</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Green" data-bs-original-title="Green">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="../assets/images/fashion/product/img-09.png" alt="" class="img-fluid product-img-main">
                                <img src="../assets/images/fashion/product/img-13.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart.html" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.html">
                                    <h6 class="text-capitalize fs-17 text-truncate">Like Style Women pink Shoulder Bag</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$249.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Pink" data-bs-original-title="Pink">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="text-center mt-4">
                <a href="product-grid-sidebar-banner.html" type="button" class="btn btn-warning btn-hover">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div><!--end container-->
    </section>
    <!--end product-->

    {{-- Choose us  --}}
    <!--start why Choose-->
    <section class="section py-0" style="margin-top: 70px;">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5 pb-3">
                        <h2 class="title fw-normal"><span>Why <span class="fw-semibold">Shop</span> with us?</h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>
                            <h5>Products Quality</h5>
                            <p class="text-muted mb-0">Product quality refers to how well a product satisfies customer needs, serves its purpose and meets industry standards. </p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <h5>Fast & Free Shipping</h5>
                            <p class="text-muted mb-0">The cheapest way to ship a package will depend on factors such as package size and weight, as well as distance and delivery speed.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <h5>Payment Security</h5>
                            <p class="text-muted mb-0">Payment security refers to providing rules, regulations, and security measures to protect a customer or partner's privacy.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            </div>
                            <h5>Global Warehouse</h5>
                            <p class="text-muted mb-0">An international warehouse is a warehouse that's set up internationally, typically located in a global trade Houston, or Hong Kong.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-fluid-->
    </section>
    <!--end why Choose-->
@stop
