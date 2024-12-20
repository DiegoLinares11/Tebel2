@extends('templates.frontend')

@section('content')
<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

<head>

    <meta charset="utf-8">
    <title>Shop Cart | Toner eCommerce + Admin HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
        <div class="container">
            <a class="navbar-brand d-none d-lg-block" href="index.html">
                <div class="logo-dark">
                    <img src="../assets/images/logo-dark.png" alt="" height="25">
                </div>
                <div class="logo-light">
                    <img src="../assets/images/logo-light.png" alt="" height="25">
                </div>
            </a>
            <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-20"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                    <li class="nav-item d-block d-lg-none">
                        <a class="d-block p-3 h-auto text-center" href="index.html">
                            <img src="../assets/images/logo-dark.png" alt="" height="25" class="card-logo-dark mx-auto">
                            <img src="../assets/images/logo-light.png" alt="" height="25" class="card-logo-light mx-auto">
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" data-key="t-demos" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Demos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link" data-key="t-main-layout">Main Layout</a>
                            </li>
                            <li class="nav-item">
                                <a href="watch-main-layout.html" class="nav-link" data-key="t-unique-watches">Unique Watches</a>
                            </li>
                            <li class="nav-item">
                                <a href="modern-fashion.html" class="nav-link" data-key="t-modern-fashion">Modern Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a href="trend-fashion.html" class="nav-link" data-key="t-trend-fashion">Trend Fashion</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                        <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalog
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0 g-lg-4">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('../assets/images/ecommerce/img-1.jpg');background-size: cover;">
                                        <div class="bg-overlay bg-light bg-opacity-25"></div>
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <a href="product-grid-sidebar-banner.html" class="btn btn-secondary btn-hover"><i class="ph-storefront align-middle me-1"></i> <span data-key="t-shop-now">Shop Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-men">Men</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-sidebar-banner.html" class="nav-link" data-key="t-clothing">Clothing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-right.html" class="nav-link" data-key="t-watches">Watches</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list-left.html" class="nav-link" data-key="t-bags-Luggage">Bags & Luggage</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-right.html" class="nav-link" data-key="t-footwear">Footwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.html" class="nav-link" data-key="t-innerwear">Innerwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list-right.html" class="nav-link" data-key="t-other-accessories">Other Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-women">Women</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list-defualt.html" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list-left.html" class="nav-link" data-key="t-handbags-clutches">Handbags & Clutches</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-right.html" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-sidebar-banner.html" class="nav-link" data-key="t-footwear">Footwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-defualt.html" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion & Silver Jewellery</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-accessories-others">Accessories & Others</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-right.html" class="nav-link" data-key="t-home-kitchen-pets">Home, Kitchen, Pets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list-left.html" class="nav-link" data-key="t-beauty-health-grocery">Beauty, Health, Grocery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-grid-sidebar-banner.html" class="nav-link" data-key="t-sports-fitness-bags-luggage">Sports, Fitness, Bags, Luggage</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.html" class="nav-link" data-key="t-car-motorbike-industrial">Car, Motorbike, Industrial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list-right.html" class="nav-link" data-key="t-books">Books</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-others">Others</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-basic.html" class="nav-link" data-key="t-sign-up">Sign Up</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-basic.html" class="nav-link" data-key="t-sign-in">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-passowrd-reset">Reset Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404.html" class="nav-link" data-key="t-error-404">Error 404</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="p-3">
                                        <p class="mb-3 text-uppercase fs-11 fw-medium text-muted" data-key="t-top-brands">Top Brands</p>
                                        <div class="row g-2">
                                            <div class="col-lg-4">
                                                <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                    <img src="../assets/images/brands/img-8.png" alt="" class="avatar-sm">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                    <img src="../assets/images/brands/img-2.png" alt="" class="avatar-sm">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                    <img src="../assets/images/brands/img-3.png" alt="" class="avatar-sm">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                    <img src="../assets/images/brands/img-4.png" alt="" class="avatar-sm">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                    <img src="../assets/images/brands/img-5.png" alt="" class="avatar-sm">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                    <img src="../assets/images/brands/img-6.png" alt="" class="avatar-sm">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-shop">
                            Shop
                        </a>
                        <div class="dropdown-menu dropdown-mega-menu-xl dropdown-menu-center p-0">
                            <div class="row g-0 g-lg-4">
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('../assets/images/ecommerce/img-2.jpg'); background-size: cover;">
                                        <div class="bg-overlay bg-primary" style="opacity: 0.90;"></div>
                                        <div class="card-body d-flex align-items-center justify-content-center position-relative">
                                            <div class="text-center">
                                                <h6 class="card-title text-white">Welcome to Toner</h6>
                                                <p class="text-white-75">See all the products at once.</p>
                                                <a href="#!" class="btn btn-light btn-sm btn-hover">Shop Now <i class="ph-arrow-right align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row g-0 g-lg-4">
                                        <div class="col-lg-6">
                                            <div class="py-3">
                                                <ul class="dropdown-menu-list list-unstyled mb-0">
                                                    <li>
                                                        <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-checkout-pages">Checkout Pages</p>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="address.html" class="nav-link" data-key="t-address"> Address</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="track-order.html" class="nav-link" data-key="t-track-order">Track Order</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="payment.html" class="nav-link" data-key="t-payment">Payment</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="review.html" class="nav-link" data-key="t-review">Review</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="confirmation.html" class="nav-link" data-key="t-confirmation">Confirmation</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="order-history.html" class="nav-link" data-key="t-my-orders-order-history">My Orders / Order History</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                                <li>
                                                    <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-support">Support</p>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="shop-cart.html" class="nav-link" data-key="t-shopping-cart">Shopping Cart</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="checkout.html" class="nav-link" data-key="t-checkout">Checkout</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="wishlist.html" class="nav-link" data-key="t-wishlist">Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" data-key="t-pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                            <li class="nav-item dropdown dropdown-hover">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-products">Products</a>
                                <ul class="dropdown-menu submenu">
                                    <li class="dropdown dropdown-hover">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-grid-view">Grid View</a>
                                        <ul class="dropdown-menu submenu">
                                            <li><a class="nav-link" href="product-grid-defualt.html" data-key="t-default">default</a></li>
                                            <li><a class="nav-link" href="product-grid-sidebar-banner.html" data-key="t-sidebar-with-banner">Sidebar with Banner</a></li>
                                            <li><a class="nav-link" href="product-grid-right.html" data-key="t-right-sidebar">Right Sidebar</a></li>
                                            <li><a class="nav-link" href="product-grid.html" data-key="t-no-sidebar">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-hover">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-list-view">List View</a>
                                        <ul class="dropdown-menu submenu">
                                            <li><a class="nav-link" href="product-list-defualt.html" data-key="t-default">default</a></li>
                                            <li><a class="nav-link" href="product-list-left.html" data-key="t-left-sidebar">Left Sidebar</a></li>
                                            <li><a class="nav-link" href="product-list-right.html" data-key="t-right-sidebar">Right Sidebar</a></li>
                                            <li><a class="nav-link" href="product-list.html" data-key="t-no-sidebar">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link" href="product-details.html" data-key="t-product-details">Product Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-users">Users</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="nav-link" href="account.html" data-key="t-my-account">My Account</a></li>
                                    <li><a class="nav-link" href="auth-signin-basic.html" data-key="t-sign-in">Sign In</a></li>
                                    <li><a class="nav-link" href="auth-signup-basic.html" data-key="t-sign-up">Sign Up</a></li>
                                    <li><a class="nav-link" href="auth-pass-reset-basic.html" data-key="t-password-reset">Password Reset</a></li>
                                    <li><a class="nav-link" href="auth-pass-change-basic.html" data-key="t-create-password">Password Create</a></li>
                                    <li><a class="nav-link" href="auth-success-msg-basic.html" data-key="t-success-message">Success Message</a></li>
                                    <li><a class="nav-link" href="auth-twostep-basic.html" data-key="t-two-step-verify">Two Step Verify</a></li>
                                    <li><a class="nav-link" href="auth-logout-basic.html" data-key="t-logout">Logout</a></li>
                                    <li><a class="nav-link" href="auth-404.html" data-key="t-error-404">Error 404</a></li>
                                    <li><a class="nav-link" href="auth-500.html" data-key="t-error-500">Error 500</a></li>
                                    <li><a class="nav-link" href="coming-soon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="products-category.html" class="nav-link" data-key="t-categories">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="about-us.html" class="nav-link" data-key="t-about">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="purchase-guide.html" class="nav-link" data-key="t-purchase-guide">Purchase Guide</a>
                            </li>
                            <li class="nav-item">
                                <a href="terms-conditions.html" class="nav-link" data-key="t-terms-of-service">Terms of Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="privacy-policy.html" class="nav-link" data-key="t-privacy-policy">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a href="store-locator.html" class="nav-link" data-key="t-store-locator">Store Locator</a>
                            </li>
                            <li class="nav-item">
                                <a href="ecommerce-faq.html" class="nav-link" data-key="t-faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="invoice.html" class="nav-link" data-key="t-invoice">Invoice</a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-email-template">Email Template</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="nav-link" href="email-black-friday.html" data-key="t-black-friday">Black Friday</a></li>
                                    <li><a class="nav-link" href="email-flash-sale.html" data-key="t-flash-sale">Flash Sale</a></li>
                                    <li><a class="nav-link" href="email-order-success.html" data-key="t-order-success">Order Success</a></li>
                                    <li><a class="nav-link" href="email-order-success-2.html" data-key="t-order-success-2">Order Success 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="../components/index.html" class="nav-link" target="_blank" data-key="t-components">Components <span class="badge bg-danger align-bottom ms-1">1.0</span></a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-multi-level">Multi Level</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="nav-link" href="#" data-key="t-level-1.1">Level 1.1</a></li>
                                    <li><a class="nav-link" href="#" data-key="t-level-1.2">Level 1.2</a></li>
                                    <li class="dropdown dropdown-hover">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-level-1.3">Level 1.3</a>
                                        <ul class="dropdown-menu submenu">
                                            <li><a class="nav-link" href="#" data-key="t-level-2.1">Level 2.1</a></li>
                                            <li><a class="nav-link" href="#" data-key="t-level-2.2">Level 2.2</a></li>
                                            <li class="dropdown dropdown-hover">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-level-2.3">Level 2.3</a>
                                                <ul class="dropdown-menu submenu">
                                                    <li><a class="nav-link" href="#" data-key="t-level-3.1">Level 3.1</a></li>
                                                    <li><a class="nav-link" href="#" data-key="t-level-3.2">Level 3.2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html" data-key="t-contact">Contact</a>
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
    
                <div class="dropdown topbar-head-dropdown ms-2 header-item dropdown-hover-end">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-sun align-middle fs-20"></i>
                    </button>
                    <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                        <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                        <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                        <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                    </div>
                </div>
                <div class="dropdown header-item dropdown-hover-end">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    </button>
                    <!-- <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ph-user-circle fs-22"></i>
                    </button>    -->
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Diana!</h6>
                        <a class="dropdown-item" href="order-history.html"><i class="bi bi-cart4 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Order History</span></a>
                        <a class="dropdown-item" href="track-order.html"><i class="bi bi-truck text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Track Orders</span></a>
                        <a class="dropdown-item" href="../backend/index.html"><i class="bi bi-speedometer2 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Dashboard</span></a>
                        <a class="dropdown-item" href="ecommerce-faq.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="account.html"><i class="bi bi-coin text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                        <a class="dropdown-item" href="account.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-logout-basic.html"><i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
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
                                        <img src="../assets/images/products/img-4.png" alt="" class="avatar-sm">
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
                                        <img src="../assets/images/products/img-1.png" alt="" class="avatar-sm">
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
                                        <img src="../assets/images/products/img-6.png" alt="" class="avatar-sm">
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
                                        <img src="../assets/images/products/img-8.png" alt="" class="avatar-sm">
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
                                        <img src="../assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                        <div>
                                            <h6 class="mb-0">Ayaan Bowen</h6>
                                            <span class="fs-12 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                        <div>
                                            <h6 class="mb-0">Alexander Kristi</h6>
                                            <span class="fs-12 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
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

    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-body p-0 bg-info-subtle rounded">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6">
                            <div class="p-4 h-100">
                                <span class="badge bg-info-subtle text-info  fs-13">GET 10% SALE OFF</span>
                                <h2 class="display-6 mt-2 mb-3">Subscribe & Get <b>50% Special</b> Discount On Email</h2>
                                <p class="mb-4 pb-lg-2 fs-16">Join our newsletter to receive the latest updates and promotion</p>
                                <form action="#!">
                                    <div class="position-relative ecommerce-subscript">
                                        <input type="email" class="form-control rounded-pill border-0" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 pb-0">
                                <img src="../assets/images/subscribe.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <a href="../backend/index.html" class="btn btn-warning position-fixed bottom-0 start-0 m-5 z-3 btn-hover d-none d-lg-block"><i class="bi bi-database align-middle me-1"></i> Backend</a>

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse" href="#chatBot" aria-expanded="false" aria-controls="chatBot">Online Chat</a>
    <div class="collapse chat-box" id="chatBot">
        <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
            <div class="card-header bg-success d-flex align-items-center border-0">
                <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">Hi, Raquel Murillo 👋</h5>
                <button type="button" class="btn-close btn-close-white flex-shrink-0" onclick="chatBot()" data-bs-dismiss="collapse" aria-label="Close"></button>
            </div>
            <div class="card-body p-0">
                <div id="users-chat-widget">
                    <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 280px;">
                        <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                            <li class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="../assets/images/logo-sm.png" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Welcome to Themesbrand. We are here to help you. You can also directly email us at Support@themesbrand.com to schedule a meeting with our Technology Consultant.</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list right">
                                <div class="conversation-list">
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="../assets/images/logo-sm.png" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                        </ul>
                    </div>
                </div>
                <div class="border-top border-top-dashed">
                    <div class="row g-2 mt-2 mx-3 mb-3">
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                            </div>
                        </div><!-- end col -->
                        <div class="col-auto">
                            <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <section class="page-wrapper bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center d-flex align-items-center justify-content-between">
                        <h4 class="text-white mb-0">Shopping Cart</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section><!--end page-wrapper-->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger text-center text-capitalize mb-4 fs-14">
                        save up to <b>30%</b> to <b>40%</b> off omg! just look at the <b>great deals</b>!
                    </div>
                </div>
            </div>
            <div class="row product-list justify-content-center">
                <div class="col-lg-8">
                <div class="d-flex align-items-center mb-4">
                        <h5 class="mb-0 flex-grow-1 fw-medium">There are <span class="fw-bold product-count"></span> products in your cart</h5>
                        <div class="flex-shrink-0">
                            <a href="#!" class="text-decoration-underline link-secondary">Clear Cart</a>
                        </div>
                    </div>
                @if ($cartItems->isEmpty())
                    <p>No tienes productos en tu carrito.</p>
                @else
                    @foreach ($cartItems as $item)
                        <div class="card product">
                            <div class="card-body p-4">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg h-100">
                                            <div class="avatar-title bg-danger-subtle rounded py-3">
                                                <img src="../assets/images/products/img-12.png" alt="" class="avatar-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <a href="#!">
                                            <h5 class="fs-16 lh-base mb-1">{{ $item->NOMBRE_PRODUCTO }}</h5>
                                        </a>
                                        <ul class="list-inline text-muted fs-13 mb-3">
                                            <li class="list-inline-item">Color : <span class="fw-medium">Red</span></li>
                                            <li class="list-inline-item">Size : <span class="fw-medium">M</span></li>
                                        </ul>
                                        <div class="input-step">
                                            <button type="button" class="minus">–</button>
                                            <input type="number" class="product-quantity" value="{{ $item->CANTIDAD }}" min="0" max="100" readonly>
                                            <button type="button" class="plus">+</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <p class="text-muted mb-1 fs-12">Item Price:</p>
                                            <h5 class="fs-16">$<span class="product-price">{{ $item->PRECIO }}</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <div class="d-flex flex-wrap my-n1">
                                            <div>
                                                <a href="#!" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                            </div>
                                            <div>
                                                <a href="#!" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-2 text-muted">
                                            <div>Total :</div>
                                            <h5 class="fs-14 mb-0">$<span class="product-line-price">{{ $item->CANTIDAD * $item->PRECIO }}</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card footer -->
                        </div>     
                    @endforeach           
                    <!--end card-->
                </div>
                @endif
                <!--end col-->
                <div class="col-lg-4">
                    <div class="sticky-side-div">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3 fs-15">Have a <span class="fw-semibold">promo</span> code ?</h6>
                                </div>
                                <div class="hstack gap-3 px-3 mx-n3">
                                    <input class="form-control me-auto" type="text" placeholder="Enter coupon code" value="Toner15" aria-label="Add Promo Code here...">
                                    <button type="button" class="btn btn-primary w-xs">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0 fs-15">Order Summary</h5>
                            </div>
                            <div class="card-body pt-4">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless mb-0 fs-15">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total :</td>
                                                <td class="text-end cart-subtotal"></td>
                                            </tr>
                                            <tr>
                                                <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                                <td class="text-end cart-discount"></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge :</td>
                                                <td class="text-end cart-shipping"></td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Tax (12.5%) : </td>
                                                <td class="text-end cart-tax"></td>
                                            </tr>
                                            <tr class="table-active">
                                                <th>Total (USD) :</th>
                                                <td class="text-end">
                                                    <span class="fw-semibold cart-total"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-hover btn-danger">Continue Shopping</button>
                            <button type="button" class="btn btn-hover btn-success">Check Out <i class="ri-logout-box-r-line align-bottom ms-1"></i></button>
                        </div>
                    </div>
                    <!-- end sticky -->
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h4 class="flex-grow-1 mb-0">New Branded Products</h4>
                        <div class="flex-shrink-0">
                            <a href="#!" class="link-effect link-primary">All Products <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="../assets/images/products/img-12.png" alt="" style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action" data-bs-toggle="button"><span class="icon-on"><i class="ri-heart-line"></i></span><span class="icon-off"><i class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes10" id="product-color-102"><label class="avatar-xxs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-102"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-103"><label class="avatar-xxs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-103"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-104"><label class="avatar-xxs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-104"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-105"><label class="avatar-xxs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-105"></label></li>
                            </ul>
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Carven Lounge Chair Red</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$209.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="../assets/images/products/img-7.png" alt="" style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action " data-bs-toggle="button"><span class="icon-on"><i class="ri-heart-line"></i></span><span class="icon-off"><i class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <div class="avatar-xxs mb-4">
                                    <div class="avatar-title bg-light text-muted rounded cursor-pointer"><i class="ri-error-warning-line"></i></div>
                                </div>
                                <a href="#!">
                                    <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Innovative education book</h6>
                                </a>
                                <div class="mt-2">
                                    <span class="float-end">4.7 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                    <h5 class="mb-0">$96.26</h5>
                                </div>
                                <div class="mt-3">
                                    <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative"> 
                            <img src="../assets/images/products/img-3.png" alt="" style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2"> 
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action " data-bs-toggle="button"><span class="icon-on"><i class="ri-heart-line"></i></span><span class="icon-off"><i class="ri-heart-fill"></i></span></button> 
                            </div>
                            <div class="avatar-xs label">
                                <div class="avatar-title bg-danger rounded-circle fs-11">20%</div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes11" id="product-color-112"><label class="avatar-xxs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-112"></label></li>
                                <li><input type="radio" name="sizes11" id="product-color-113"><label class="avatar-xxs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-113"></label></li>
                            </ul>
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Ninja Pro Max Smartwatch</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">3.5 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$247.27 <span class="text-muted fs-12"><del>$309.09</del></span></h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative"> 
                            <img src="../assets/images/products/img-2.png" alt="" style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2"> 
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action " data-bs-toggle="button"><span class="icon-on"><i class="ri-heart-line"></i></span><span class="icon-off"><i class="ri-heart-fill"></i></span></button> 
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes12" id="product-color-122"><label class="avatar-xxs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-122"></label></li>
                            </ul> 
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Opinion Striped Round Neck Green T-shirt</h6>
                            </a>
                            <div class="mt-2"> 
                                <span class="float-end">4.1 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$126.99</h5>
                            </div>
                            <div class="mt-3"> 
                                <a href="#!" class="btn btn-primary btn-hover w-100 add-btn"><i class="mdi mdi-cart me-1"></i> Add To Cart</a> 
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end Container-->
    </section>

    <section class="section bg-light bg-opacity-25" style="background-image: url('../assets/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span> off all Products</p>
                        <h1 class="lh-base text-capitalize mb-3">Stay home & get your daily needs from our shop</h1>
                        <p class="fs-15 mb-4 pb-2">Start You'r Daily Shopping with <a href="#!" class="link-primary text-decoration-underline fw-medium">Toner</a></p>
                        <form action="#!">
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" class="form-control rounded-pill" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary btn-hover rounded-pill">Subscript Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="mt-5 mt-lg-0">
                        <img src="../assets/images/ecommerce/subscribe.png" alt="" class="img-fluid">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="position-relative py-5">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/fast-delivery.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                            <p class="text-muted mb-0">Tell about your service.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/returns.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">2 Days Return Policy</h5>
                            <p class="text-muted mb-0">No question ask.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/guarantee-certificate.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Money Back Guarantee</h5>
                            <p class="text-muted mb-0">Within 5 business days</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/24-hours-support.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">24 X 7 Service</h5>
                            <p class="text-muted mb-0">Online service for customer</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- footer -->
    <section class="section footer-landing pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-info">
                        <img src="../assets/images/logo-light.png" alt="" height="28" class="logo-light">
                        <img src="../assets/images/logo-dark.png" alt="" height="28" class="logo-dark">
                        <p class="footer-desc mt-4 mb-2 me-3">Toner provides best fashion experience for both men and women at best pricing. We follow New fashion approach to give best premium feel.</p>

                        <div class="footer-social mt-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
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
                                    <li><a href="#!">Men</a></li>
                                    <li><a href="#!">Jewellers</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">Clothing</a></li>
                                    <li><a href="#!">Beauty Items</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mt-lg-0 mt-4">
                                <h5 class="footer-title">Information</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#!">Custom Service</a></li>
                                    <li><a href="#!">FAQs</a></li>
                                    <li><a href="#!">Ordering</a></li>
                                    <li><a href="#!">Tracking</a></li>
                                    <li><a href="#!">Contacts</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mt-lg-0 mt-4">
                                <h5 class="footer-title">My Account</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#!">Sign In</a></li>
                                    <li><a href="#!">View Cart</a></li>
                                    <li><a href="#!">My Wishlist</a></li>
                                    <li><a href="#!">Track My Order</a></li>
                                    <li><a href="#!">Help</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mt-lg-0 mt-4">
                                <h5 class="footer-title">Customer Service</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#!">Payment Methods</a></li>
                                    <li><a href="#!">Money-back!</a></li>
                                    <li><a href="#!">Returns</a></li>
                                    <li><a href="#!">Shipping</a></li>
                                    <li><a href="#!">Terms and conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row footer-border-alt mt-4 align-items-center fs-15">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Toner. Design &amp; Develop by <a href="https://themesbrand.com/" target="_blank" class="text-reset text-decoration-underline">Themesbrand</a>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#!"><img src="../assets/images/ecommerce/payment/visa.png" alt="" height="30"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><img src="../assets/images/ecommerce/payment/discover.png" alt="" height="30"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><img src="../assets/images/ecommerce/payment/american-express.png" alt="" height="30"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><img src="../assets/images/ecommerce/payment/paypal.png" alt="" height="30"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/plugins.js"></script>

    <!-- landing-index js -->
    <script src="../assets/js/frontend/menu.init.js"></script>
</body>

</html>
@stop