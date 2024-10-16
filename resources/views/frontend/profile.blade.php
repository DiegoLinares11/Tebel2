@extends('templates.frontend')

@section('content')
<!-- start profile -->
    <section class="position-relative">
            <div class="profile-basic position-relative" style="background-image: url('front/images/profile.jpg');background-size: cover;background-position: center; height: 300px;">
                <div class="bg-overlay bg-primary" style="--bs-bg-opacity: 0.99;"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pt-3">
                            <div class="mt-n5 d-flex gap-3 flex-wrap align-items-end">
                                <img src="front/images/users/user-dummy-img.jpg" alt="" class="avatar-xl rounded p-1 bg-light mt-n3">
                                <div>
                                    <h5 class="fs-18">Raquel Murillo</h5>
                                    <div class="text-muted">
                                        <i class="bi bi-geo-alt"></i> #####, ##
                                    </div>
                                </div>
                                <div class="ms-md-auto">
                                    <!-- <p class="mb-0">Toner Member Since Jan 2020</p> -->
                                    <a href="product-list.html" class="btn btn-success btn-hover"><i class="bi bi-cart4 me-1 align-middle"></i> Shopping Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end profile -->

        <!-- start tab-->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column gap-3" role="tablist">
                                    <li class="nav-item " role="presentation">
                                        <a class="nav-link fs-15 active" data-bs-toggle="tab" href="#custom-v-pills-profile" role="tab" aria-selected="true"><i class="bi bi-person-circle align-middle me-1"></i> Account Info</a>
                                    </li>
                                    <li class="nav-item " role="presentation">
                                        <a class="nav-link fs-15" data-bs-toggle="tab" href="#custom-v-pills-order" role="tab" aria-selected="false" tabindex="-1"><i class="bi bi-bag align-middle me-1"></i> Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fs-15" href="auth-logout-basic.html"><i class="bi bi-box-arrow-right align-middle me-1"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-9">
                        <div class="tab-content text-muted">
                            <div class="tab-pane fade show active" id="custom-v-pills-profile" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                        <div class="card-body">

                                                <div class="d-flex mb-4">
                                                    <h6 class="fs-16 text-decoration-underline flex-grow-1 mb-0">Personal Info</h6>
                                                    <div class="flex-shrink-0">
                                                        <a href="#!" class="badge bg-dark-subtle text-dark ">Edit</a>
                                                    </div>
                                                </div>

                                                <div class="table-responsive table-card px-1">
                                                    <table class="table table-borderless table-sm">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    Customer Name
                                                                </td>
                                                                <td class="fw-medium">
                                                                    Name Placeholder
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Mobile / Phone Number
                                                                </td>
                                                                <td class="fw-medium">
                                                                    +(000) 00000 0000
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Email Address
                                                                </td>
                                                                <td class="fw-medium">
                                                                    email@example.com
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Location
                                                                </td>
                                                                <td class="fw-medium">
                                                                    City, Country
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Since Member
                                                                </td>
                                                                <td class="fw-medium">
                                                                    Jan, 2023
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="mt-4">
                                                    <h6 class="fs-16 text-decoration-underline">Billing & Shipping Address</h6>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <div class="card mb-md-0">
                                                            <div class="card-body">
                                                                <div class="float-end clearfix"> <a href="address.html" class="badge bg-primary-subtle text-primary "><i class="ri-pencil-fill align-bottom me-1"></i> Edit</a> </div>
                                                                <div>
                                                                    <p class="mb-3 fw-semibold fs-12 d-block text-muted text-uppercase">Home Address</p>
                                                                    <h6 class="fs-14 mb-2 d-block">Name Placeholder</h6>
                                                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">123 Main Street, City, Country</span>
                                                                    <span class="text-muted fw-normal d-block">Mo. +(000) 00000 0000</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-end clearfix"> <a href="address.html" class="badge bg-primary-subtle text-primary "><i class="ri-pencil-fill align-bottom me-1"></i> Edit</a> </div>
                                                                <div>
                                                                    <p class="mb-3 fw-semibold fs-12 d-block text-muted text-uppercase">Shipping Address</p>
                                                                    <h6 class="fs-14 mb-2 d-block">Name Placeholder</h6>
                                                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">456 Another Street, City, Country</span>
                                                                    <span class="text-muted fw-normal d-block">Mo. +(000) 00000 0000</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane fade" id="custom-v-pills-list" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table fs-15 align-middle">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Product</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Stock Status</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="avatar-sm flex-shrink-0">
                                                                            <div class="avatar-title bg-dark-subtle rounded">
                                                                                <img src="front/images/products/img-19.png" alt="" class="avatar-xs">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="product-details.html">
                                                                                <h6 class="fs-16">World's Most Expensive T Shirt</h6>
                                                                            </a>
                                                                            <p class="mb-0 text-muted fs-13">Women's Clothes</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$154.49</td>
                                                                <td><span class="badge bg-success-subtle text-success ">In Stock</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled d-flex gap-3 mb-0">
                                                                        <li>
                                                                            <a href="shop-cart.html" class="btn btn-soft-info btn-icon btn-sm"><i class="ri-shopping-cart-2-line fs-13"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!" class="btn btn-soft-danger btn-icon btn-sm"><i class="ri-close-line fs-13"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="avatar-sm flex-shrink-0">
                                                                            <div class="avatar-title bg-danger-subtle rounded">
                                                                                <img src="front/images/products/img-12.png" alt="" class="avatar-xs">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="product-details.html">
                                                                                <h6 class="fs-16">Onyx SmartGRID Chair Red</h6>
                                                                            </a>
                                                                            <p class="mb-0 text-muted fs-13">Furniture &amp; Decor</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$39.99</td>
                                                                <td><span class="badge bg-danger-subtle text-danger ">Out Of Stock</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled d-flex gap-3 mb-0">
                                                                        <li>
                                                                            <a href="shop-cart.html" class="btn btn-soft-info btn-icon btn-sm"><i class="ri-shopping-cart-2-line fs-13"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!" class="btn btn-soft-danger btn-icon btn-sm"><i class="ri-close-line fs-13"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="avatar-sm flex-shrink-0">
                                                                            <div class="avatar-title bg-success-subtle rounded">
                                                                                <img src="front/images/products/img-4.png" alt="" class="avatar-xs">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="product-details.html">
                                                                                <h6 class="fs-16">Slippers Open Toe</h6>
                                                                            </a>
                                                                            <p class="mb-0 text-muted fs-13">Footwear</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$74.32</td>
                                                                <td><span class="badge bg-success-subtle text-success ">In Stock</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled d-flex gap-3 mb-0">
                                                                        <li>
                                                                            <a href="shop-cart.html" class="btn btn-soft-info btn-icon btn-sm"><i class="ri-shopping-cart-2-line fs-13"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!" class="btn btn-soft-danger btn-icon btn-sm"><i class="ri-close-line fs-13"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="avatar-sm flex-shrink-0">
                                                                            <div class="avatar-title bg-secondary-subtle rounded">
                                                                                <img src="front/images/products/img-1.png" alt="" class="avatar-xs">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="product-details.html">
                                                                                <h6 class="fs-16">Hp Trendsetter Backpack</h6>
                                                                            </a>
                                                                            <p class="mb-0 text-muted fs-13">Handbags &amp; Clutches</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$32.00</td>
                                                                <td><span class="badge bg-success-subtle text-success ">In Stock</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled d-flex gap-3 mb-0">
                                                                        <li>
                                                                            <a href="shop-cart.html" class="btn btn-soft-info btn-icon btn-sm"><i class="ri-shopping-cart-2-line fs-13"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!" class="btn btn-soft-danger btn-icon btn-sm"><i class="ri-close-line fs-13"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex gap-3">
                                                                        <div class="avatar-sm flex-shrink-0">
                                                                            <div class="avatar-title bg-info-subtle rounded">
                                                                                <img src="front/images/products/img-7.png" alt="" class="avatar-xs">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="product-details.html">
                                                                                <h6 class="fs-16">Innovative education book</h6>
                                                                            </a>
                                                                            <p class="mb-0 text-muted fs-13">Books</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$18.32</td>
                                                                <td><span class="badge bg-danger-subtle text-danger ">Out Of Stock</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled d-flex gap-3 mb-0">
                                                                        <li>
                                                                            <a href="shop-cart.html" class="btn btn-soft-info btn-icon btn-sm"><i class="ri-shopping-cart-2-line fs-13"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!" class="btn btn-soft-danger btn-icon btn-sm"><i class="ri-close-line fs-13"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="hstack gap-2 justify-content-end mt-4">
                                                    <a href="product-list.html" class="btn btn-hover btn-secondary">Continue Shopping <i class="ri-arrow-right-line align-bottom"></i></a>
                                                    <a href="checkout.html" class="btn btn-hover btn-primary">Check Out <i class="ri-arrow-right-line align-bottom"></i></a>
                                                </div>
                                            </div>
                                            <!-- end card-body -->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane fade" id="custom-v-pills-order" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table fs-15 align-middle table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order ID</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Total Amount</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-body">TBT15454841</a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.html">
                                                                <h6 class="fs-15 mb-1">World's Most Expensive T Shirt</h6>
                                                            </a>
                                                            <p class="mb-0 text-muted fs-13">Women's Clothes</p>
                                                        </td>
                                                        <td><span class="text-muted">01 Jul, 2022</span></td>
                                                        <td class="fw-medium">$287.53</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success ">Delivered</span>
                                                        </td>
                                                        <td>
                                                            <a href="#invoiceModal" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-body">TBT15425012</a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.html">
                                                                <h6 class="fs-15 mb-1">Onyx SmartGRID Chair Red</h6>
                                                            </a>
                                                            <p class="mb-0 text-muted fs-13">Furniture &amp; Decor</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted">01 Feb, 2023</span>
                                                        </td>
                                                        <td class="fw-medium">$39.99</td>
                                                        <td>
                                                            <span class="badge bg-secondary-subtle text-secondary ">Shipping</span>
                                                        </td>
                                                        <td>
                                                            <a href="#invoiceModal" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-body">TBT1524563 </a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.html">
                                                                <h6 class="fs-15 mb-1">Slippers Open Toe</h6>
                                                            </a>
                                                            <p class="mb-0 text-muted fs-13">Footwear</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted">09 Dec, 2022</span>
                                                        </td>
                                                        <td class="fw-medium">$874.00</td>
                                                        <td><span class="badge bg-danger-subtle text-danger ">Out Of Delivery</span></td>
                                                        <td>
                                                            <a href="#invoiceModal" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-body">TBT1524530 </a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.html">
                                                                <h6 class="fs-15 mb-1">Hp Trendsetter Backpack</h6>
                                                            </a>
                                                            <p class="mb-0 text-muted fs-13">Handbags &amp; Clutches</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted">02 Jan, 2023</span>
                                                        </td>
                                                        <td class="fw-medium">$32.00</td>
                                                        <td>
                                                            <span class="badge bg-success-subtle text-success ">Delivered</span>
                                                        </td>
                                                        <td>
                                                            <a href="#invoiceModal" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-body">TBT13642870</a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.html">
                                                                <h6 class="fs-15 mb-1">Innovative education book</h6>
                                                            </a>
                                                            <p class="mb-0 text-muted fs-13">Books</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted">08 Jan, 2023</span>
                                                        </td>
                                                        <td class="fw-medium">$18.32</td>
                                                        <td>
                                                            <span class="badge bg-warning-subtle text-warning ">Pending</span>
                                                        </td>
                                                        <td>
                                                            <a href="#invoiceModal" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Invoice</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-end mt-4">
                                            <a href="product-grid.html" class="btn btn-hover btn-primary">Continue Shopping <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane fade" id="custom-v-pills-setting" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5 class="fs-16 text-decoration-underline mb-4">Personal Details</h5>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">First Name</label>
                                                                <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="Raquel">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="lastnameInput" class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="Murillo">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                                <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="+(253) 01234 5678">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Email Address</label>
                                                                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="raque@toner.com">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="cityInput" class="form-label">City</label>
                                                                <input type="text" class="form-control" id="cityInput" placeholder="City" value="Phoenix">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="countryInput" class="form-label">Country</label>
                                                                <input type="text" class="form-control" id="countryInput" placeholder="Country" value="USA">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="zipcodeInput" class="form-label">Zip Code</label>
                                                                <input type="text" class="form-control" minlength="5" maxlength="6" id="zipcodeInput" placeholder="Enter zipcode" value="90011">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3 pb-2">
                                                                <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter your description" rows="3">Hi I'm Raquel Murillo, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                                <!--end tab-pane-->
                                                <div class="mb-3" id="changePassword">
                                                    <h5 class="fs-16 text-decoration-underline mb-4">Change Password</h5>
                                                    <form action="javascript:void(0);">
                                                        <div class="row g-2">
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                                    <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="newpasswordInput" class="form-label">New Password*</label>
                                                                    <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                                    <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <a href="auth-pass-reset-basic.html" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                                <!--end tab-pane-->
                                                <div class="mb-3" id="privacy">
                                                    <h5 class="fs-16 text-decoration-underline mb-4">Privacy Policy</h5>
                                                    <div class="mb-3">
                                                        <h5 class="fs-15 mb-2">Security:</h5>
                                                        <div class="d-flex flex-column align-items-center flex-sm-row mb-sm-0">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted fs-14 mb-0">Two-factor Authentication</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-sm-3">
                                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor Authentication</a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center flex-sm-row mb-sm-0 mt-2">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted fs-14 mb-0">Secondary Verification</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-sm-3">
                                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up secondary method</a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center flex-sm-row mb-sm-0 mt-2">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted fs-14 mb-0">Backup Codes</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-sm-3">
                                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h5 class="fs-15 mb-2">Application Notifications:</h5>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <label for="directMessage" class="form-check-label fs-14">Direct messages</label>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked="">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex mt-2">
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label fs-14" for="desktopNotification">
                                                                        Show desktop notifications
                                                                    </label>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked="">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex mt-2">
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label fs-14" for="emailNotification">
                                                                        Show email notifications
                                                                    </label>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="emailNotification">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex mt-2">
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label fs-14" for="chatNotification">
                                                                        Show chat notifications
                                                                    </label>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="chatNotification">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex mt-2">
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label fs-14" for="purchaesNotification">
                                                                        Show purchase notifications
                                                                    </label>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="purchaesNotification">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--end tab-pane-->
                                                <div class="text-sm-end">
                                                    <a href="#!" class="btn btn-secondary d-block d-sm-inline-block"><i class="ri-edit-box-line align-middle me-2"></i> Update Profile</a>
                                                </div>
                                            </div>
                                            <!-- end card-body -->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                            <!--end tab-pane-->
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </section>
@stop