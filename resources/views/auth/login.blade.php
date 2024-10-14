<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

    <head>

        <meta charset="utf-8">
        <title>Tebel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="front/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="front/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="front/css/app.min.css" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="front/css/custom.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <section class="auth-page-wrapper position-relative bg-light min-vh-100 d-flex align-items-center justify-content-between">
            <div class="w-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="auth-card mx-lg-3">
                                <div class="card border-0 mb-0">
                                    <div class="card-header bg-primary border-0">
                                        <div class="row">
                                            <div class="col-lg-4 col-3">
                                                <img src="front/images/auth/logo.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-lg-8 col-9">
                                                <h1 class="text-white lh-base fw-lighter">Únete a nosotros</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted fs-15">Sign in to continue to the store.</p>
                                        <div class="p-2">
                                            <form action="/login" method="POST">
                                                @csrf
                
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="email" class="form-control" name="username" placeholder="Enter username">
                                                </div>
                
                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" name="password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>
                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>
                
                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                </div>
                
                                                <div class="mt-4 pt-2 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                    </div>
                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                        <button type="button" class="btn btn-soft-danger btn-icon"><i class="ri-google-fill fs-16"></i></button>
                                                    </div>
                                                </div>

                                            <!-- END FORM -->
                                            </form>
                
                                            <div class="text-center mt-5">
                                                <p class="mb-0">Don't have an account ? <a href="auth-signup-basic.html" class="fw-semibold text-secondary text-decoration-underline"> SignUp</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </section>
        
        <!-- JAVASCRIPT -->
        <script src="front/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="front/libs/simplebar/simplebar.min.js"></script>
        <script src="front/js/plugins.js"></script>

        <script src="front/js/pages/password-addon.init.js"></script>

    </body>

</html>