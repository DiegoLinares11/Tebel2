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
                @stop

            @section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Shipments</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Toner</a></li>
                                            <li class="breadcrumb-item active">Shipments</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="card" id="shipmentsList">
                            <div class="card-header border-bottom-dashed">
                                <div class="row align-items-center g-3">
                                    <div class="col-xxl-3 col-sm-6">
                                        <h6 class="card-title mb-0">Shipping</h6>
                                    </div>
                                    <div class="col-xxl-auto col-sm-auto ms-auto">
                                        <button data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-success add-btn"><i class="bi bi-plus-circle me-1 align-middle"></i> Add Shipping</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header border-bottom-dashed">
                                <div class="row g-3">
                                    <div class="col-xxl-3 col-lg-6">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search for order ID, shipment no, customer, order status or something...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                    </div>
                                    <div class="col-xxl-2 col-lg-6">
                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                            <option value="">Status</option>
                                            <option value="Pickups">Pickups</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Shipping">Shipping</option>
                                            <option value="Delivered">Delivered</option>
                                            <option value="Out Of Delivery">Out Of Delivery</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-lg-6">
                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default">
                                            <option value="">Status</option>
                                            <option value="all" selected>All</option>
                                            <option value="Today">Today</option>
                                            <option value="Yesterday">Yesterday</option>
                                            <option value="Last 7 Days">Last 7 Days</option>
                                            <option value="Last 30 Days">Last 30 Days</option>
                                            <option value="This Month">This Month</option>
                                            <option value="Last Month">Last Month</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-lg-6">
                                        <button type="button" class="btn btn-primary w-100" onclick="filterData();">Filters</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-nowrap align-middle" id="shipmentsTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" data-sort="id">Order ID</th>
                                                <th scope="col" data-sort="shipment_no">Shipment No</th>
                                                <th scope="col" data-sort="customer_name">Customer</th>
                                                <th scope="col" data-sort="supplier">Supplier</th>
                                                <th scope="col" data-sort="location">Location</th>
                                                <th scope="col" data-sort="order_date">Order Date</th>
                                                <th scope="col" data-sort="arrival_date">Arrival Date</th>
                                                <th scope="col" data-sort="status">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <th class="id" scope="row"><a href="javascript:void(0);" class="fw-medium link-primary">#TBSC2830</a></th>
                                                <td class="shipment_no"><a href="javascript:void(0);" class="text-reset">#TBSN15412120001</a></td>
                                                <td class="customer_name">Daniel Gonzalez</td>
                                                <td class="supplier">iTest Factory</td>
                                                <td class="location">Germany</td>
                                                <td class="order_date">23 Dec, 2022</td>
                                                <td class="arrival_date">15 Jan, 2023</td>
                                                <td class="status"><span class="badge bg-success-subtle text-success ">Delivered</span></td>
                                                <td>
                                                    <ul class="hstack gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="#createModal" class="badge bg-primary-subtle text-primary  edit-item-btn" data-bs-toggle="modal">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger  remove-item-btn">Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="noresult" style="display: none">
                                    <div class="text-center py-4">
                                        <div class="avatar-md mx-auto mb-4">
                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                                <i class="bi bi-search"></i>
                                            </div>
                                        </div>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ shipment orders We did not find any shipment orders for you search.</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
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

