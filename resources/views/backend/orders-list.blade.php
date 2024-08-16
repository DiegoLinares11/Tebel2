@extends('templates.backend')

@section('content')

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <meta charset="utf-8">
    <title>List View - Orders | Toner eCommerce + Admin HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="../assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="../assets/js/layout.js"></script>
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

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="top-tagbar">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 col-9">
                <div class="fs-14 fw-medium">
                    <i class="bi bi-clock align-middle me-2"></i> <span id="current-time"></span>
                </div>
            </div>
            <div class="col-md-4 col-6 d-none d-xxl-block">
                <div class="d-flex align-items-center justify-content-center gap-3 fs-14 fw-medium">
                    <div>
                        <i class="bi bi-envelope align-middle me-2"></i> support@themesbrand.com
                    </div>
                    <div>
                        <i class="bi bi-globe align-middle me-2"></i> www.themesbrand.com
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-3">
                <div class="d-flex align-items-center justify-content-end gap-3 fs-14">
                    <a href="#!" class="text-reset fw-normal d-none d-lg-block">
                        Balance: <span class="fw-semibold">$8451.36</span>
                    </a>
                    <hr class="vr d-none d-lg-block">
                    <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                        <button type="button" class="btn btn-icon btn-topbar text-reset rounded-circle fs-14 fw-medium" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="../assets/images/flags/us.svg" alt="Header Language" height="16" class="rounded-circle me-2"> <span id="lang-name">English</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                <img src="../assets/images/flags/us.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">English</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                <img src="../assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">Española</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                <img src="../assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded-circle" height="18"> <span class="align-middle">Deutsche</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                <img src="../assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">Italiana</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                <img src="../assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">русский</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                <img src="../assets/images/flags/china.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">中国人</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                <img src="../assets/images/flags/french.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">français</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sa" title="Arabic">
                                <img src="../assets/images/flags/sa.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                <span class="align-middle">عربى</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-dark.png" alt="" height="25">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-light.png" alt="" height="25">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <button type="button" class="btn btn-sm px-3 fs-15 user-name-text header-item d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <span class="bi bi-search me-2"></span> Search for Toner...
                        </button>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="bi bi-search fs-16"></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item dropdown-hover-end">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-grid fs-18'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fw-semibold fs-15"> Top Brands</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="brands.html" class="btn btn-sm btn-soft-primary"> View All Brands
                                                <i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="../assets/images/brands/img-2.png" alt="Github">
                                                <!-- <span>GitHub</span> -->
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="../assets/images/brands/img-3.png" alt="Github">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="../assets/images/brands/img-13.png" alt="Github">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="../assets/images/brands/img-5.png" alt="Github">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="../assets/images/brands/img-6.png" alt="Github">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="../assets/images/brands/img-4.png" alt="Github">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item dropdown-hover-end">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-bag fs-18'></i>
                                <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-info-subtle text-info  fs-13"><span class="cartitem-badge">7</span>
                                                items</span>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 300px;">
                                    <div class="p-2">
                                        <div class="text-center empty-cart" id="empty-cart">
                                            <div class="avatar-md mx-auto my-3">
                                                <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                                    <i class='bx bx-cart'></i>
                                                </div>
                                            </div>
                                            <h5 class="mb-3">Your Cart is Empty!</h5>
                                            <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                                        </div>
                                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-2 fs-15">
                                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                            T-Shirts</a>
                                                    </h6>
                                                    <p class="mb-0 fs-13 text-muted">
                                                        Quantity: <span>10 x $32</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-danger remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-2 fs-15">
                                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                                                    </h6>
                                                    <p class="mb-0 fs-13 text-muted">
                                                        Quantity: <span>5 x $18</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-danger remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-2 fs-15">
                                                        <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                            Borosil Paper Cup</a>
                                                    </h6>
                                                    <p class="mb-0 fs-13 text-muted">
                                                        Quantity: <span>3 x $250</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-danger remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-2 fs-15">
                                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                                            Styled T-Shirt</a>
                                                    </h6>
                                                    <p class="mb-0 fs-13 text-muted">
                                                        Quantity: <span>1 x $1250</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-danger remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-2 fs-15">
                                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                                                    </h6>
                                                    <p class="mb-0 fs-13 text-muted">
                                                        Quantity: <span>2 x $495</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-danger remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <h5 class="m-0 text-muted">Total:</h5>
                                        <div class="px-2">
                                            <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                        </div>
                                    </div>

                                    <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                <i class='bi bi-arrows-fullscreen fs-16'></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item dropdown-hover-end">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-sun align-middle fs-20"></i>
                            </button>
                            <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                                <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item dropdown-hover-end" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-bell fs-18'></i>
                                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head rounded-top">
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 fs-16 fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger  fs-13 notification-badge"> 4</span></h6>
                                                <p class="fs-14 text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                            </div>
                                            <div class="col-auto dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondar2 fs-15"><i class="bi bi-three-dots-vertical"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                    <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                    <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="py-2 ps-2" id="notificationItemsTabContent">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">New</h6>
                                        <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 fs-14 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                            Optimization <span class="text-secondary">reward</span> is ready!
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                        <label class="form-check-label" for="all-notification-check01"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="position-relative me-3 flex-shrink-0">
                                                    <img src="../assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                    <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-14 fw-semibold">Angela Bernier</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                        <label class="form-check-label" for="all-notification-check02"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                        <i class='bx bx-message-square-dots'></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-2 fs-14 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                        <label class="form-check-label" for="all-notification-check03"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">Read Before</h6>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">

                                                <div class="position-relative me-3 flex-shrink-0">
                                                    <img src="../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                    <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-14 fw-semibold">Maureen Gibson</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                        <label class="form-check-label" for="all-notification-check04"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-actions" id="notification-actions">
                                        <div class="d-flex text-muted justify-content-center align-items-center">
                                            Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user topbar-head-dropdown dropdown-hover-end">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Raquel Murillo</span>
                                        <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Raquel!</h6>
                                <a class="dropdown-item" href="account.html"><i class="bi bi-person-circle text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="calendar.html"><i class="bi bi-cart4 text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Order Track</span></a>
                                <a class="dropdown-item" href="product-list.html"><i class="bi bi-box-seam text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Products</span></a>
                                <a class="dropdown-item" href="../frontend/index.html"><span class="badge bg-success-subtle text-success float-end ms-2">New</span><i class="bi bi-cassette text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Frontend</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="account-settings.html"><i class="bi bi-gear text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i class="bi bi-box-arrow-right text-muted fs-15 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


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

                        <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 mt-3">
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

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-4"></i>
                            </div>
                            <div class="mt-4 fs-15">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../assets/images/logo-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/images/logo-dark.png" alt="" height="26">
                    </span>
                </a>
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../assets/images/logo-sm.png" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Dashboard</span> <span class="badge badge-pill bg-danger-subtle text-danger " data-key="t-hot">Hot</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                <i class="bi bi-box-seam"></i> <span data-key="t-products">Products</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProducts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="product-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-create.html" class="nav-link" data-key="t-create-product">Create Product</a>
                                    </li>
                                    <li class="nav-item">       
                                        <a href="categories.html" class="nav-link" data-key="t-categories">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sub-categories.html" class="nav-link" data-key="t-sub-categories">Sub Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                <i class="bi bi-cart4"></i> <span data-key="t-orders">Orders</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarOrders">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="orders-list-view.html" class="nav-link" data-key="t-list-view">List View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="orders-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="calendar.html" class="nav-link menu-link"><i class="bi bi-calendar-week"></i> <span data-key="t-calendar">Calendar</span> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                                <i class="bi bi-binoculars"></i> <span data-key="t-sellers">Sellers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarSellers">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="sellers-list-view.html" class="nav-link" data-key="t-list-view">List View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sellers-grid-view.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="seller-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                                <i class="bi bi-archive"></i> <span data-key="t-invoice">Invoice</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarInvoice">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="invoices-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="invoices-details.html" class="nav-link" data-key="t-overview">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="invoices-create.html" class="nav-link" data-key="t-create-invoice">Create Invoice</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="users-list.html" class="nav-link menu-link"> <i class="bi bi-person-bounding-box"></i> <span data-key="t-users-list">Users List</span> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarShipping" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarShipping">
                                <i class="bi bi-truck"></i> <span data-key="t-shipping">Shipping</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarShipping">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="shipping-list.html" class="nav-link" data-key="t-shipping-list">Shipping List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="shipments.html" class="nav-link" data-key="t-shipments">Shipments</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="coupons.html" class="nav-link menu-link"> <i class="bi bi-tag"></i> <span data-key="t-coupons">Coupons</span> </a>
                        </li>   
                        <li class="nav-item">
                            <a href="reviews-ratings.html" class="nav-link menu-link"><i class="bi bi-star"></i> <span data-key="t-reviews-ratings">Reviews & Ratings</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="brands.html" class="nav-link menu-link"><i class="bi bi-shop"></i> <span data-key="t-brands">Brands</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="statistics.html" class="nav-link menu-link"><i class="bi bi-pie-chart"></i> <span data-key="t-statistics">Statistics</span> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLocalization" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLocalization">
                                <i class="bi bi-coin"></i> <span data-key="t-localization">Localization</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLocalization">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="transactions.html" class="nav-link" data-key="t-transactions">Transactions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="currency-rates.html" class="nav-link" data-key="t-currency-rates">Currency Rates</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAccounts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccounts">
                                <i class="bi bi-person-circle"></i> <span data-key="t-accounts">Accounts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAccounts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="account.html" class="nav-link" data-key="t-my-account">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="account-settings.html" class="nav-link" data-key="t-settings">Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signup-basic.html" class="nav-link" data-key="t-sign-up">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signin-basic.html" class="nav-link" data-key="t-sign-in">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-passowrd-reset">Password Reset</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-create-password">Password Create</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-success-message">Success Message</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-twostep-basic.html" class="nav-link" data-key="t-two-step-verify">Two Step Verify</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-logout-basic.html" class="nav-link" data-key="t-logout">Logout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-404.html" class="nav-link" data-key="t-error-404">Error 404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-500.html" class="nav-link" data-key="t-error-500">Error 500</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link" data-key="t-coming-soon">Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="../components/index.html" target="_blank">
                                <i class="bi bi-layers"></i> <span data-key="t-components">Components</span> <span class="badge badge-pill bg-secondary" data-key="t-v1.0">v1.0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                <i class="bi bi-share"></i> <span data-key="t-multi-level">Multi Level</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                            1.2
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarAccount">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebarCrm">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">List View</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                                        <li class="breadcrumb-item active">List View</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="card shadow-sm border-0 overflow-hidden card-animate">
                                <div class="position-absolute end-0 start-0 top-0 z-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                                        <g mask="url(&quot;#SvgjsMask1530&quot;)" fill="none">
                                            <path d="M209 112L130 191" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M324 10L149 185" stroke-width="8" stroke="url(#SvgjsLinearGradient1532)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M333 35L508 -140" stroke-width="10" stroke="url(#SvgjsLinearGradient1532)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M282 58L131 209" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M290 16L410 -104" stroke-width="6" stroke="url(#SvgjsLinearGradient1532)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M216 186L328 74" stroke-width="6" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M255 53L176 132" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M339 191L519 11" stroke-width="8" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M95 151L185 61" stroke-width="6" stroke="url(#SvgjsLinearGradient1532)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M249 16L342 -77" stroke-width="6" stroke="url(#SvgjsLinearGradient1532)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M129 230L286 73" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M80 216L3 293" stroke-width="6" stroke="url(#SvgjsLinearGradient1531)" stroke-linecap="round" class="BottomLeft"></path>
                                        </g>
                                        <defs>
                                            <mask id="SvgjsMask1530">
                                                <rect width="400" height="250" fill="#ffffff"></rect>
                                            </mask>
                                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="SvgjsLinearGradient1531">
                                                <stop stop-color="rgba(var(--tb-primary-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-primary-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1532">
                                                <stop stop-color="rgba(var(--tb-primary-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-primary-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card-body p-4 z-1 position-relative">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-primary-subtle text-primary fs-3 rounded">
                                                <i class="ph-anchor-simple"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="200.32"></span>k </h4>
                                            <p class="mb-0 fw-medium text-uppercase fs-14">New Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card shadow-sm border-0 overflow-hidden card-animate">
                                <div class="position-absolute end-0 start-0 top-0 z-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                                        <g mask="url(&quot;#SvgjsMask1608&quot;)" fill="none">
                                            <path d="M390 87L269 208" stroke-width="10" stroke="url(#SvgjsLinearGradient1609)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M358 175L273 260" stroke-width="8" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M319 84L189 214" stroke-width="10" stroke="url(#SvgjsLinearGradient1609)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M327 218L216 329" stroke-width="8" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M126 188L8 306" stroke-width="8" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M220 241L155 306" stroke-width="10" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M361 92L427 26" stroke-width="6" stroke="url(#SvgjsLinearGradient1609)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M391 188L275 304" stroke-width="8" stroke="url(#SvgjsLinearGradient1609)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M178 74L248 4" stroke-width="10" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M84 52L-56 192" stroke-width="6" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M183 111L247 47" stroke-width="10" stroke="url(#SvgjsLinearGradient1610)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M46 8L209 -155" stroke-width="6" stroke="url(#SvgjsLinearGradient1609)" stroke-linecap="round" class="TopRight"></path>
                                        </g>
                                        <defs>
                                            <mask id="SvgjsMask1608">
                                                <rect width="400" height="250" fill="#ffffff"></rect>
                                            </mask>
                                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1609">
                                                <stop stop-color="rgba(var(--tb-warning-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-warning-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="SvgjsLinearGradient1610">
                                                <stop stop-color="rgba(var(--tb-warning-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-warning-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card-body p-4 z-1 position-relative">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-warning-subtle text-warning fs-3 rounded">
                                                <i class="ph-clock-clockwise"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="35.21"></span>k </h4>
                                            <p class="mb-0 fw-medium text-uppercase fs-14">Pending Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card shadow-sm border-0 overflow-hidden card-animate">
                                <div class="position-absolute end-0 start-0 bottom-0 z-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                                        <g mask="url(&quot;#SvgjsMask1561&quot;)" fill="none">
                                            <path d="M306 65L446 -75" stroke-width="8" stroke="url(#SvgjsLinearGradient1552)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M399 2L315 86" stroke-width="10" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M83 77L256 -96" stroke-width="6" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M281 212L460 33" stroke-width="6" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M257 62L76 243" stroke-width="6" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M305 123L214 214" stroke-width="6" stroke="url(#SvgjsLinearGradient1552)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M327 222L440 109" stroke-width="6" stroke="url(#SvgjsLinearGradient1552)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M287 109L362 34" stroke-width="10" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M259 194L332 121" stroke-width="8" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M376 186L240 322" stroke-width="8" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M308 153L123 338" stroke-width="6" stroke="url(#SvgjsLinearGradient1553)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M218 62L285 -5" stroke-width="8" stroke="url(#SvgjsLinearGradient1552)" stroke-linecap="round" class="BottomLeft"></path>
                                        </g>
                                        <defs>
                                            <mask id="SvgjsMask1561">
                                                <rect width="400" height="250" fill="#ffffff"></rect>
                                            </mask>
                                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="SvgjsLinearGradient1552">
                                                <stop stop-color="rgba(var(--tb-success-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-success-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1553">
                                                <stop stop-color="rgba(var(--tb-success-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-success-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card-body p-4 z-1 position-relative">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-success-subtle text-success fs-3 rounded">
                                                <i class="ph-truck"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="647.32"></span>k </h4>
                                            <p class="mb-0 fw-medium text-uppercase fs-14">Delivered Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card shadow-sm border-0 overflow-hidden card-animate">
                                <div class="position-absolute end-0 start-0 top-0 z-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                                        <g mask="url(&quot;#SvgjsMask1571&quot;)" fill="none">
                                            <path d="M306 65L446 -75" stroke-width="8" stroke="url(#SvgjsLinearGradient1561)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M399 2L315 86" stroke-width="10" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M83 77L256 -96" stroke-width="6" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M281 212L460 33" stroke-width="6" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M257 62L76 243" stroke-width="6" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M305 123L214 214" stroke-width="6" stroke="url(#SvgjsLinearGradient1561)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M327 222L440 109" stroke-width="6" stroke="url(#SvgjsLinearGradient1561)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M287 109L362 34" stroke-width="10" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M259 194L332 121" stroke-width="8" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M376 186L240 322" stroke-width="8" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M308 153L123 338" stroke-width="6" stroke="url(#SvgjsLinearGradient1562)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M218 62L285 -5" stroke-width="8" stroke="url(#SvgjsLinearGradient1561)" stroke-linecap="round" class="BottomLeft"></path>
                                        </g>
                                        <defs>
                                            <mask id="SvgjsMask1571">
                                                <rect width="400" height="250" fill="#ffffff"></rect>
                                            </mask>
                                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="SvgjsLinearGradient1561">
                                                <stop stop-color="rgba(var(--tb-secondary-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-secondary-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1562">
                                                <stop stop-color="rgba(var(--tb-secondary-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-secondary-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card-body p-4 z-1 position-relative">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-secondary-subtle text-secondary fs-3 rounded">
                                                <i class="ph-cube"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="215.36"></span>k </h4>
                                            <p class="mb-0 fw-medium text-uppercase fs-14">Pickups Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card shadow-sm border-0 overflow-hidden card-animate">
                                <div class="position-absolute end-0 start-0 bottom-0 z-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                                        <g mask="url(&quot;#SvgjsMask1551&quot;)" fill="none">
                                            <path d="M306 65L446 -75" stroke-width="8" stroke="url(#SvgjsLinearGradient1558)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M399 2L315 86" stroke-width="10" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M83 77L256 -96" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M281 212L460 33" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M257 62L76 243" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M305 123L214 214" stroke-width="6" stroke="url(#SvgjsLinearGradient1558)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M327 222L440 109" stroke-width="6" stroke="url(#SvgjsLinearGradient1558)" stroke-linecap="round" class="BottomLeft"></path>
                                            <path d="M287 109L362 34" stroke-width="10" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M259 194L332 121" stroke-width="8" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M376 186L240 322" stroke-width="8" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M308 153L123 338" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)" stroke-linecap="round" class="TopRight"></path>
                                            <path d="M218 62L285 -5" stroke-width="8" stroke="url(#SvgjsLinearGradient1558)" stroke-linecap="round" class="BottomLeft"></path>
                                        </g>
                                        <defs>
                                            <mask id="SvgjsMask1551">
                                                <rect width="400" height="250" fill="#ffffff"></rect>
                                            </mask>
                                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="SvgjsLinearGradient1558">
                                                <stop stop-color="rgba(var(--tb-danger-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-danger-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1559">
                                                <stop stop-color="rgba(var(--tb-danger-rgb), 0)" offset="0"></stop>
                                                <stop stop-color="rgba(var(--tb-danger-rgb), 0.1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card-body p-4 z-1 position-relative">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-danger-subtle text-danger fs-3 rounded">
                                                <i class="ph-trash"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="8649"></span></h4>
                                            <p class="mb-0 fw-medium text-uppercase fs-14">Cancelled Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row" id="orderList">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-6">
                                            <div>
                                                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-6">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                                    <option value="">Status</option>
                                                    <option value="all" selected>All</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Inprogress">Inprogress</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                    <option value="Pickups">Pickups</option>
                                                    <option value="Returns">Returns</option>
                                                    <option value="Delivered">Delivered</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-6">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idPayment">
                                                    <option value="">Select Payment</option>
                                                    <option value="all" selected>All</option>
                                                    <option value="Mastercard">Mastercard</option>
                                                    <option value="Paypal">Paypal</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="COD">COD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-12">
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-primary w-100" onclick="filterData();">
                                                    <i class="bi bi-filter me-1"></i> Filter
                                                </button>
                                                <button type="button" class="btn btn-success w-100 add-btn" data-bs-toggle="modal" data-bs-target="#showModal">
                                                    Add Order
                                                </button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--END ROW-->
                                </div>
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle table-nowrap" id="orderTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort fw-medium" data-sort="id">Order ID</th>
                                                    <th class="sort fw-medium" data-sort="customer_name">Customer</th>
                                                    <th class="sort fw-medium" data-sort="product_name">Product Name</th>
                                                    <th class="sort fw-medium" data-sort="amount">Amount</th>
                                                    <th class="sort fw-medium" data-sort="order_date">Order Date</th>
                                                    <th class="sort fw-medium" data-sort="delivery_date">Delivery Date</th>
                                                    <th class="sort fw-medium" data-sort="payment_method">Payment Method</th>
                                                    <th class="sort fw-medium" data-sort="status">Delivery Status</th>
                                                    <th class="fw-medium" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id"><a href="javascript:void(0);" class="fw-medium link-primary">#TBT42101</a></td>
                                                    <td class="customer_name">Alfred Hurst</td>
                                                    <td class="product_name">Carven Lounge Chair Red</td>
                                                    <td class="amount">$874.30</td>
                                                    <td class="order_date">18 Dec, 2022</td>
                                                    <td class="delivery_date">24 Dec, 2022</td>
                                                    <td class="payment_method">Mastercard</td>
                                                    <td class="status">
                                                        <span class="badge bg-success-subtle text-success  text-uppercase">Delivered</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a class="dropdown-item" href="#!">
                                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal">
                                                                        <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center py-4">
                                                <div class="avatar-md mx-auto mb-4">
                                                    <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                                        <i class="bi bi-search"></i>
                                                    </div>
                                                </div>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                <i class="mdi mdi-chevron-left align-middle me-1"></i> Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next <i class="mdi mdi-chevron-right align-middle ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Toner.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-17 mx-4 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title" id="exampleModalLabel">Create Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>

                <form class="tablelist-form" novalidate autocomplete="off">
                    <div class="modal-body p-4">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field">
    
                        <div class="mb-3" id="modal-id">
                            <label for="orderId" class="form-label">Order ID</label>
                            <input type="text" id="orderId" class="form-control" placeholder="ID" readonly>
                        </div>
    
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">Customer Name</label>
                            <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="productname-field" class="form-label">Product</label>
                            <div>
                                <select class="form-control" id="productname-field" required>
                                    <option value="">Product</option>
                                    <option value="World's Most Expensive T-Shirt">World's Most Expensive T-Shirt</option>
                                    <option value="Ninja Pro Max Smartwatch">Ninja Pro Max Smartwatch</option>
                                    <option value="Carven Lounge Chair Red">Carven Lounge Chair Red</option>
                                    <option value="American egale outfitters Shirt">American egale outfitters Shirt</option>
                                    <option value="Like Style Women Black Handbag">Like Style Women Black Handbag</option>
                                    <option value="Funky Prints T-shirt">Funky Prints T-shirt</option>
                                    <option value="Innovative Education Book">Innovative Education Book</option>
                                    <option value="Leather band Smartwatches">Leather band Smartwatches</option>
                                    <option value="Oxford Button-Down Shirt">Oxford Button-Down Shirt</option>
                                    <option value="Apple Headphone">Apple Headphone</option>
                                    <option value="Borosil Paper Cup">Borosil Paper Cup</option>
                                    <option value="Evolve Smartwatch">Evolve Smartwatch</option>
                                </select>
                            </div>
                        </div>

                        <div class="row gy-4 mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="createdate-field" class="form-label">Order Date</label>
                                    <input type="text" id="createdate-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" required placeholder="Select date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="deliverydate-field" class="form-label">Delivery Date</label>
                                    <input type="text" id="deliverydate-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" required placeholder="Select date">
                                </div>
                            </div>
                        </div>
    
                        <div class="row gy-4 mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="amount-field" class="form-label">Amount</label>
                                    <input type="text" id="amount-field" class="form-control" placeholder="Total amount" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="payment-field" class="form-label">Payment Method</label>
                                    <div>
                                        <select class="form-control"  required id="payment-field">
                                            <option value="">Payment Method</option>
                                            <option value="Mastercard">Mastercard</option>
                                            <option value="Visa">Visa</option>
                                            <option value="COD">COD</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div>
                            <label for="delivered-status" class="form-label">Delivery Status</label>
                            <div>
                                <select class="form-control" required id="delivered-status">
                                    <option value="">Delivery Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Inprogress">Inprogress</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Pickups">Pickups</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Returns">Returns</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse" href="#chatBot" role="button" aria-expanded="false" aria-controls="chatBot">Online Chat</a>
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

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-secondary btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">

                    <!-- <h6 class="mb-1 fs-15 fw-semibold text-uppercase">View Website</h6>
                    <p class="text-muted">Choose your</p> -->

                    <div class="mb-4 hstack gap-2">
                        <a href="../frontend/index.html" target="_blank" class="btn btn-secondary">Visit Your Website</a>
                        <a href="../components/index.html" target="_blank" class="btn btn-success">Components</a>
                    </div>

                    <h6 class="mb-1 fs-15 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-xl w-100" for="customizer-layout01">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-2">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-2"></span>
                                                <span class="bg-light d-block p-2 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-xl w-100" for="customizer-layout02">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="form-check-label p-0 avatar-xl w-100" for="customizer-layout03">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-2">
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-2"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="layout-mode-light">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Light</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check card-radio dark customize-widget">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-xl w-100 bg-dark" for="layout-mode-dark">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light bg-opacity-10 d-block p-1"></span>
                                                    <span class="bg-light bg-opacity-10 d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget" data-bs-toggle="collapse" data-bs-target="#collapseLayoutWidth.show">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="layout-width-fluid">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayoutWidth">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="layout-width-boxed">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div class="collapse" id="collapseLayoutWidth">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Boxed Layout Body Images</h6>
                        <p class="text-muted">Choose image.</p>
                
                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-none" value="none">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-none">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">None</h5>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-1" value="img-1">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-1">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('../assets/images/sidebar/body-light-1.png');">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Img 1</h5>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-2" value="img-2">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-2">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('../assets/images/sidebar/body-light-2.png');">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Img 2</h5>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-3" value="img-3">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-3">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('../assets/images/sidebar/body-light-3.png');">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Img 3</h5>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row gy-3">
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-light">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-dark">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-dark d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Dark</h5>
                        </div>

                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-brand" value="brand">
                                <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-brand">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Brand</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-default">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Default</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-compact">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Compact</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-small">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-small-hover">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-view-default">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-view-detached">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-color-light">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-color-dark">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-dark d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-link avatar-xl w-100 p-0 overflow-hidden border collapsed customize-widget" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-14 text-center mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                    
                        <div class="img-switch">
                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-none">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-2 d-flex align-items-center justify-content-center">
                                                        <i class="ri-close-fill fs-20"></i>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-01">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-1.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-02">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-2.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-03">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-3.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-04">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-4.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="preloader-view-custom">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                        </span>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Enable</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="preloader-view-none">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Disable</h5>
                            </div>
                        </div>

                    </div><!-- end preloader-menu -->
                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/plugins.js"></script>

    <!-- list.js min js -->
    <script src="../assets/libs/list.js/list.min.js"></script>
    <script src="../assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="../assets/js/backend/order-list.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>
@stop