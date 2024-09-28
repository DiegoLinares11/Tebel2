@extends('templates.frontend')

@section('content')
<section class="page-wrapper bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center d-flex align-items-center justify-content-between">
                        <h4 class="text-white mb-0">Track Order</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Track Order</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- end page title -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4 pb-2">
                        <h5 class="mb-0 text-decoration-underline                                                                                                                                                                                                                                                                   ">Order ID <b>#HY000000</b></h5>
                    </div>
                </div>
            </div><!--end row-->
            <div class="track-orders">
                <div class="row justify-content-between gy-4 gy-md-0">
                    <div class="col-md-2 order-tracking text-start text-md-center ps-4 ps-md-0">
                        <span class="is-complete"></span>
                        <h6 class="fs-15 mt-3 mt-md-4">Order Process</h6>
                        <p class="text-muted fs-14 mb-0">DD, ## MM</p>
                    </div><!--end col-->
                    <div class="col-md-2 order-tracking text-start text-md-center ps-4 ps-md-0">
                        <span class="is-complete"></span>
                        <h6 class="fs-15 mt-3 mt-md-4">Order Shipped</h6>
                        <p class="text-muted fs-14 mb-0">DD, ## MM</p>
                    </div><!--end col-->
                    <div class="col-md-2 order-tracking text-start text-md-center ps-4 ps-md-0">
                        <span class="is-complete"></span>
                        <h6 class="fs-15 mt-3 mt-md-4">Out Of Delivery</h6>
                        <p class="text-muted fs-14 mb-0">DD, ## MM</p>
                    </div><!--end col-->
                    <div class="col-md-2 order-tracking text-start text-md-center ps-4 ps-md-0">
                        <span class="is-complete"></span>
                        <h6 class="fs-15 mt-3 mt-md-4">Delivered</h6>
                        <p class="text-muted fs-14 mb-0">DD, ## MM</p>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div><!--end container-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="card border-dashed">
                <div class="card-body border-bottom border-bottom-dashed p-4">
                    <div class="row g-3">
                        <div class="col-lg-3 col-6">
                            <p class="text-muted mb-2 text-uppercase fw-medium fs-12">Invoice ID</p>
                            <h5 class="fs-14 mb-0">#HYP<span id="invoice-no">000000000</span></h5>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3 col-6">
                            <p class="text-muted mb-2 text-uppercase fw-medium fs-12">Date</p>
                            <h5 class="fs-14 mb-0"><span id="invoice-date">DD, ## MM</span> <small class="text-muted" id="invoice-time">00:00 PM</small></h5>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3 col-6">
                            <p class="text-muted mb-2 text-uppercase fw-medium fs-12">Payment Status</p>
                            <span class="badge bg-success-subtle text-success  fs-11" id="payment-status">Paid</span>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3 col-6">
                            <p class="text-muted mb-2 text-uppercase fw-medium fs-12">Total Amount</p>
                            <h5 class="fs-14 mb-0">$<span id="total-amount">0</span></h5>
                        </div>
                        <!--end col-->
                    </div><!--end row-->
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-6">
                            <h6 class="text-muted text-uppercase fs-12 mb-3">Billing Address</h6>
                            <h6 id="billing-name">Client name</h6>
                            <p class="text-muted mb-1" id="billing-address-line-1">1av, 1ra</p>
                            <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">0000 0000</span></p>
                        </div>
                        <!--end col-->
                        <div class="col-6">
                            <h6 class="text-muted text-uppercase fs-12 mb-3">Shipping Address</h6>
                            <h6 id="shipping-name">Client name</h6>
                            <p class="text-muted mb-1" id="shipping-address-line-1">1av, 1ra</p>
                            <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">0000 000</span></p>
                        </div>
                        <!--end col-->
                    </div><!--end row-->
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col" style="width: 50px;">#</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" class="text-end">Amount</th>
                                </tr>
                            </thead>
                            <tbody id="products-list">
                                <tr>
                                    <th scope="row">01</th>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-success-subtle rounded-3">
                                                    <img src="/front/images/products/img-8.png" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6>Product 1</h6>
                                                <p class="text-muted mb-0">Productos escolares</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Q0.00</td>
                                    <td>01</td>
                                    <td class="text-end">00</td>
                                </tr>
                            </tbody>
                        </table><!--end table-->
                    </div>
                    <div class="border-top border-top-dashed mt-2">
                        <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                            <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-end">Q0.00</td>
                                </tr>
                                <tr class="border-top border-top-dashed fs-15">
                                    <th scope="row">Total Amount</th>
                                    <th class="text-end">Q0.00</th>
                                </tr>
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex mb-3">
                        <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Logistics Details</h5>
                        <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary  fs-11">Track Order</a>
                        </div>
                    </div>
                    <div>
                        <div class="row align-items-center gy-3 gy-md-0">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-start text-end text-md-start">
                                    <div class="">
                                        <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#438eff,secondary:#0ab39c" style="width:70px;height:70px"></lord-icon>
                                    </div>
                                    <div class="ms-2">
                                        <h6>RQK Logistics</h6>
                                        <p class="text-muted mb-0 fs-14">ID: MFDS140045</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-end text-md-start">
                                    <h6>Cash payment</h6>
                                    <p class="text-muted mb-0 fs-14">Payment Mode</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-end">
                                    <button class="btn btn-soft-info"><i class="ri-customer-service-2-line align-bottom me-1"></i> Help Center</button>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-danger btn-hover">Continue Shopping <i class="ri-arrow-right-line align-bottom ms-1"></i></button>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section>
@stop