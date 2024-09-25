<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-body-image="none">

    <head>

        <meta charset="utf-8">
        <title>Tebel eCommerce</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="eCommerce + Admin HTML Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/favicon.ico">

        <!-- jsvectormap css -->
        <link href="/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

        <!--Swiper slider css-->
        <link href="/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

        <!-- Layout config Js -->
        <script src="/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="/css/app.min.css" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="/css/custom.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="/images/prodin.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="/images/prodin.png" alt="" height="25">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="/images/prodin.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="/images/prodin.png" alt="" height="25">
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
                                                    <img src="/images/brands/img-2.png" alt="Github">
                                                    <!-- <span>GitHub</span> -->
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="/images/brands/img-3.png" alt="Github">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="/images/brands/img-13.png" alt="Github">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="/images/brands/img-5.png" alt="Github">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="/images/brands/img-6.png" alt="Github">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="/images/brands/img-4.png" alt="Github">
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
                                                    <img src="/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
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
                                                    <img src="/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
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
                                                    <img src="/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
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
                                                    <img src="/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
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
                                                    <img src="/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
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
                                                        <img src="/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
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
                                                        <img src="/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
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
                                        <img class="rounded-circle header-profile-user" src="/images/users/avatar-triste.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Nombre de Usuario</span>
                                            <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Usuario</span>
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
                                                <img src="/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                                <div>
                                                    <h6 class="mb-0">Ayaan Bowen</h6>
                                                    <span class="fs-12 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                                <div>
                                                    <h6 class="mb-0">Alexander Kristi</h6>
                                                    <span class="fs-12 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
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
                            <img src="/images/prodin.png" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="/images/prodin.png" alt="" height="26">
                        </span>
                    </a>
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/images/prodin.png" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="/images/prodin.png" alt="" height="24">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    @yield('sidebar')
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>


        
        <!-- END layout-wrapper -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->


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
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('/images/sidebar/body-light-1.png');">
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
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('/images/sidebar/body-light-2.png');">
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
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('/images/sidebar/body-light-3.png');">
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
                                                        <img src="/images/sidebar/img-1.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
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
                                                        <img src="/images/sidebar/img-2.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
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
                                                        <img src="/images/sidebar/img-3.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
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
                                                        <img src="/images/sidebar/img-4.jpg" alt="" class="avatar-sm h-100 object-fit-cover">
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
        
        <div class ="main-container">
            @yield('content')
        </div>
        <!-- JAVASCRIPT -->
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/simplebar/simplebar.min.js"></script>
        <script src="/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="/assets/libs/list.js/list.min.js"></script>

        <!--Swiper slider js-->
        <script src="/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="/js/app.js"></script>

        <script>
            //  Line chart datalabel
                var linechartDatalabelColors = getChartColorsArray("line_chart_datalabel");
                if (linechartDatalabelColors) {
                    var options = {
                        chart: {
                            height: 405,
                            zoom: {
                                enabled: true
                            },
                            toolbar: {
                                show: false
                            }
                        },
                        colors: linechartDatalabelColors,
                        markers: {
                            size: 0,
                            colors: "#ffffff",
                            strokeColors: linechartDatalabelColors,
                            strokeWidth: 1,
                            strokeOpacity: 0.9,
                            fillOpacity: 1,
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            width: [2, 2, 2],
                            curve: 'smooth'
                        },
                        series: [{
                            name: "Orders",
                            type: 'line',
                            data: [180, 274, 346, 290, 370, 420, 490, 542, 510, 580, 636, 745]
                        },
                        {
                            name: "Refunds",
                            type: 'area',
                            data: [100, 154, 302, 411, 300, 284, 273, 232, 187, 174, 152, 122]
                        },
                        {
                            name: "Earnings",
                            type: 'line',
                            data: [260, 360, 320, 345, 436, 527, 641, 715, 832, 794, 865, 933]
                        }
                        ],
                        fill: {
                            type: ['solid', 'gradient', 'solid'],
                            gradient: {
                                shadeIntensity: 1,
                                type: "vertical",
                                inverseColors: false,
                                opacityFrom: 0.3,
                                opacityTo: 0.0,
                                stops: [20, 80, 100, 100]
                            },
                        },
                        grid: {
                            row: {
                                colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.2
                            },
                            borderColor: '#f1f1f1'
                        },
                        xaxis: {
                            categories: [
                                "Jan",
                                "Feb",
                                "Mar",
                                "Apr",
                                "May",
                                "Jun",
                                "Jul",
                                "Aug",
                                "Sep",
                                "Oct",
                                "Nov",
                                "Dec",
                            ],
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            floating: true,
                            offsetY: -25,
                            offsetX: -5
                        },
                        responsive: [{
                            breakpoint: 600,
                            options: {
                                chart: {
                                    toolbar: {
                                        show: false
                                    }
                                },
                                legend: {
                                    show: false
                                },
                            }
                        }]
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#line_chart_datalabel"),
                        options
                    );
                    chart.render();
                }

                // world map with line & markers
                var vectorMapWorldLineColors = getChartColorsArray("world-map-line-markers");
                if (vectorMapWorldLineColors)
                    var worldlinemap = new jsVectorMap({
                        map: "world_merc",
                        selector: "#world-map-line-markers",
                        zoomOnScroll: false,
                        zoomButtons: false,
                        markers: [{
                            name: "Greenland",
                            coords: [71.7069, 42.6043],
                            style: {
                                image: "/images/flags/gl.svg",
                            }
                        },
                        {
                            name: "Canada",
                            coords: [56.1304, -106.3468],
                            style: {
                                image: "/images/flags/ca.svg",
                            }
                        },
                        {
                            name: "Brazil",
                            coords: [-14.2350, -51.9253],
                            style: {
                                image: "/images/flags/br.svg",
                            }
                        },
                        {
                            name: "Serbia",
                            coords: [44.0165, 21.0059],
                            style: {
                                image: "/images/flags/rs.svg",
                            }
                        },
                        {
                            name: "Russia",
                            coords: [61, 105],
                            style: {
                                image: "/images/flags/ru.svg",
                            }
                        },
                        {
                            name: "US",
                            coords: [37.0902, -95.7129],
                            style: {
                                image: "/images/flags/us.svg",
                            }
                        },
                        {
                            name: "Australia",
                            coords: [25.2744, 133.7751],
                            style: {
                                image: "/images/flags/au.svg",
                            }
                        },
                        ],
                        lines: [{
                            from: "Canada",
                            to: "Serbia",
                        },
                        {
                            from: "Russia",
                            to: "Serbia"    
                        },
                        {
                            from: "Greenland",
                            to: "Serbia"
                        },
                        {
                            from: "Brazil",
                            to: "Serbia"
                        },
                        {
                            from: "US",
                            to: "Serbia"
                        },
                        {
                            from: "Australia",
                            to: "Serbia"
                        },
                        ],
                        regionStyle: {
                            initial: {
                                stroke: "#9599ad",
                                strokeWidth: 0.25,
                                fill: vectorMapWorldLineColors,
                                fillOpacity: 1,
                            },
                        },
                        labels: {
                            markers: {
                                render(marker, index) {
                                    return marker.name || marker.labelName || 'Not available'
                                }
                            }
                        },
                        lineStyle: {
                            animation: true,
                            strokeDasharray: "6 3 6",
                        },
                    });
                    

                    // Multi-Radial Bar
var chartRadialbarMultipleColors = getChartColorsArray("multiple_radialbar");
if (chartRadialbarMultipleColors) {
    var options = {
        series: [85, 69, 45, 78],
        chart: {
            height: 300,
            type: 'radialBar',
        },
        sparkline: {
            enabled: true
        },
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                dataLabels: {
                    name: {
                        fontSize: '22px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        label: 'Sales',
                        formatter: function (w) {
                            return 2922
                        }
                    }
                }
            }
        },
        labels: ['Fashion', 'Electronics', 'Groceries', 'Others'],
        colors: chartRadialbarMultipleColors,
        legend: {
            show: false,
            fontSize: '16px',
            position: 'bottom',
            labels: {
                useSeriesColors: true,
            },
            markers: {
                size: 0
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#multiple_radialbar"), options);
    chart.render();
}


    //  Spline Area Charts
    var areachartSplineColors = getChartColorsArray("area_chart_spline");
    if (areachartSplineColors) {
        var options = {
            series: [{
                name: 'This Month',
                data: [49, 54, 48, 54, 67, 88, 96]
            }, {
                name: 'Last Month',
                data: [57, 66, 74, 63, 55, 70, 85]
            }],
            chart: {
                height: 250,
                type: 'area',
                toolbar: {
                    show: false
                }
            },
            fill: {
                type: ['gradient', 'gradient'],
                gradient: {
                    shadeIntensity: 1,
                    type: "vertical",
                    inverseColors: false,
                    opacityFrom: 0.3,
                    opacityTo: 0.0,
                    stops: [50, 70, 100, 100]
                },
            },
            markers: {
                size: 4,
                colors: "#ffffff",
                strokeColors: areachartSplineColors,
                strokeWidth: 1,
                strokeOpacity: 0.9,
                fillOpacity: 1,
                hover: {
                    size: 6,
                }
            },
            grid: {
                show: false,
                padding: {
                    top: -35,
                    right: 0,
                    bottom: 0,
                    left: -6,
                },
            },
             legend: {
                show: false, 
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: [2, 2],
                curve: 'smooth'
            },
            colors: areachartSplineColors,
            xaxis: {
                 labels: {
                    show: false,
                 }
            },
            yaxis: {
                labels: {
                    show: false,
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#area_chart_spline"), options);
        chart.render();
    }

        </script>
    </body>

</html>