<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

    <head>

        <meta charset="utf-8">
        <title>Tebel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Tebel - ecommerce website" name="description">
        <meta content="Themesbrand" name="author">

        <!-- App favicon -->
        <link rel="shortcut icon" href="front/images/favicon.ico">

        <!--Swiper slider css-->
        <link href="front/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

           <!-- Bootstrap Css -->
           <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
           <!-- Icons Css -->
           <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css">
           <!-- App Css-->
           <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css">
           <!-- custom Css-->
           <link href="{{asset('css/custom.min.css')}}" rel="stylesheet" type="text/css">


    </head>

    <body>
        <nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
            <div class="container">
                <a class="navbar-brand d-none d-lg-block" href="index.html">
                    <div class="logo-dark">
                        <img src="front/images/prodin.png" alt="" height="25">
                    </div>
                    <div class="logo-light">
                        <img src="front/images/logo-light.png" alt="" height="25">
                    </div>
                </a>
                <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list fs-20"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                        <li class="nav-item d-block d-lg-none">
                            <a class="d-block p-3 h-auto text-center" href="index.html">
                                <img src="front/images/logo-dark.png" alt="" height="25" class="card-logo-dark mx-auto">
                                <img src="front/images/logo-light.png" alt="" height="25" class="card-logo-light mx-auto">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" data-key="t-contact">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" data-key="t-pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                                <li class="nav-item dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-products">Products</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="nav-link" href="product-details.html" data-key="t-product-details">Escolares</a></li>
                                        <li><a class="nav-link" href="product-details.html" data-key="t-product-details">Limpieza</a></li>
                                        <li><a class="nav-link" href="product-details.html" data-key="t-product-details">Varios</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('products') }}" class="nav-link" data-key="t-categories">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link" data-key="t-about">About us</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}" data-key="t-contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent.show"></div>

                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="offcanvas" data-bs-target="#ecommerceCart" aria-controls="ecommerceCart">
                            <i class="ph-shopping-cart fs-18"></i>
                            <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-danger">4</span>
                        </button>
                    </div>

                    <div class="dropdown header-item dropdown-hover-end">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="front/images/users/user-dummy-img.jpg" alt="Header Avatar">
                        </button>
                        <!-- <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ph-user-circle fs-22"></i>
                        </button>    -->
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome User</h6>
                            <a class="dropdown-item" href="order-history.html"><i class="bi bi-cart4 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Order History</span></a>
                            <a class="dropdown-item" href="track-order.html"><i class="bi bi-truck text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Track Orders</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="account.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                            <a class="dropdown-item" href="{{ route('login') }}"><i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!--cart -->
        <div class="offcanvas offcanvas-end product-list" tabindex="-1" id="ecommerceCart" aria-labelledby="ecommerceCartLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="ecommerceCartLabel">My Cart <span class="badge bg-danger align-middle ms-1 cartitem-badge">4</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body px-0">
                <div data-simplebar  class="h-100">
                    <ul class="list-group list-group-flush cartlist">
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-warning-subtle rounded-3">
                                            <img src="front/images/products/img-4.png" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Borosil Paper Cup</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$<span class="product-price">24.00</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">48.00</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-info-subtle rounded-3">
                                            <img src="front/images/products/img-1.png" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Rockerz Ear Bluetooth Hea...</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$<span class="product-price">160.00</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">160.00</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-danger-subtle rounded-3">
                                            <img src="front/images/products/img-6.png" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Monte Carlo Sweaters</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$ <span class="product-price">244.99</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">734.97</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-primary-subtle rounded-3">
                                            <img src="front/images/products/img-8.png" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Men's Running Shoes Act...</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$<span class="product-price">120.30</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">240.60</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="table-responsive mx-2 border-top border-top-dashed">
                        <table class="table table-borderless mb-0 fs-14 fw-semibold">
                            <tbody>
                                <tr>
                                    <td>Sub Total :</td>
                                    <td class="text-end cart-subtotal">$1183.57</td>
                                </tr>
                                <tr>
                                    <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                    <td class="text-end cart-discount">- $177.54</td>
                                </tr>
                                <tr>
                                    <td>Shipping Charge :</td>
                                    <td class="text-end cart-shipping">$65.00</td>
                                </tr>
                                <tr>
                                    <td>Estimated Tax (12.5%) : </td>
                                    <td class="text-end cart-tax">$147.95</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="m-0 fs-16 text-muted">Total:</h6>
                    <div class="px-2">
                        <h6 class="m-0 fs-16 cart-total">$1218.98</h6>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">View Cart</button>
                    </div>
                    <div class="col-6">
                        <a href="#!" target="_blank" class="btn btn-info w-100">Continue to Checkout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded">
                    <div class="modal-header p-3">
                        <div class="position-relative w-100">
                            <input type="text" class="form-control form-control-lg border-2" placeholder="Search for Toner..." autocomplete="off" id="search-options" value="">
                            <span class="bi bi-search search-widget-icon fs-17"></span>
                            <a href="javascript:void(0);" class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none" id="search-close-options">Clear</a>
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                        <div class="dropdown-head rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                            </div>
                        </div>

                        <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                            <div class="list-group list-group-flush border-dashed">
                                <div class="notification-group-list">
                                    <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>Toner.psd</span></a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>Toner.zip</span></a>
                                </div>

                                <div class="notification-group-list">
                                    <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                                </div>

                                <div class="notification-group-list">
                                    <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                        <div class="d-flex align-items-center">
                                            <img src="front/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                            <div>
                                                <h6 class="mb-0">Ayaan Bowen</h6>
                                                <span class="fs-12 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                        <div class="d-flex align-items-center">
                                            <img src="front/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                            <div>
                                                <h6 class="mb-0">Alexander Kristi</h6>
                                                <span class="fs-12 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                        <div class="d-flex align-items-center">
                                            <img src="front/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                            <div>
                                                <h6 class="mb-0">Alan Carla</h6>
                                                <span class="fs-12 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- removeItemModal -->
        <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="remove-product">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

		<div class="main-container">
            @yield('content')
        </div>

        <section class="section footer-landing pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-info">
                            <img src="front/images/prodi.png" alt="" height="28" class="logo-light">
                            <img src="front/images/logo-dark.png" alt="" height="28" class="logo-dark">
                            <p class="footer-desc mt-4 mb-2 me-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="footer-social mt-4">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#!" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#!" class="text-reset"><i class="mdi mdi-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row ps-0 ps-lg-3">
                            <div class="col-md-3">
                                <div class="mt-lg-0 mt-4">
                                    <h5 class="footer-title">Categories</h5>
                                    <ul class="list-unstyled footer-link mt-3">
                                        <li><a href="#!">Escolares</a></li>
                                        <li><a href="#!">Limpieza</a></li>
                                        <li><a href="#!">Varios</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-lg-0 mt-4">
                                    <h5 class="footer-title">Information</h5>
                                    <ul class="list-unstyled footer-link mt-3">
                                        <li><a href="#!">About us</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mt-lg-0 mt-4">
                                    <h5 class="footer-title">My Account</h5>
                                    <ul class="list-unstyled footer-link mt-3">
                                        <li><a href="#!">Sign In</a></li>
                                        <li><a href="#!">View Cart</a></li>
                                        <li><a href="#!">Track My Order</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mt-lg-0 mt-4">
                                    <h5 class="footer-title">Customer Service</h5>
                                    <ul class="list-unstyled footer-link mt-3">
                                        <li><a href="#!">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row footer-border-alt mt-4 align-items-center fs-15">
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#!"><img src="front/images/ecommerce/payment/visa.png" alt="" height="30"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img src="front/images/ecommerce/payment/discover.png" alt="" height="30"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img src="front/images/ecommerce/payment/american-express.png" alt="" height="30"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img src="front/images/ecommerce/payment/paypal.png" alt="" height="30"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JAVASCRIPT -->
        <script src="front/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="front/libs/simplebar/simplebar.min.js"></script>
        <script src="front/js/plugins.js"></script>

        <script src="front/js/frontend/menu.init.js"></script>

    </body>

</html>
