@extends('templates.backend')

@section('sidebar')

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
        

@stop


@section('content')

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
@stop