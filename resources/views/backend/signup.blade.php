<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-body-image="none">

    <head>

        <meta charset="utf-8">
        <title>Sign In | Toner eCommerce + Admin HTML Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="eCommerce + Admin HTML Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/favicon.ico">

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

        <section class="auth-page-wrapper position-relative bg-light min-vh-100 d-flex align-items-center justify-content-between">
            <div class="auth-header position-fixed top-0 start-0 end-0 bg-body">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-2">
                            <a class="navbar-brand mb-2 mb-sm-0" href="index.html">
                                <img src="/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="22">
                                <img src="/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="22">
                            </a>
                        </div><!---end col-->
                        <div class="col-auto">
                            <ul class="list-unstyled hstack gap-2 mb-0">
                                <li class="me-md-3">
                                    <a href="#!" class="text-body fw-medium fs-15">Become a Selling</a>
                                </li>
                                <li class="d-none d-md-block">
                                    <a href="#!" class="btn btn-soft-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-google-play align-middle me-1"></i> Download App
                                    </a>
                                </li>
                                <li class="d-none d-md-block">
                                    <a href="#!" class="btn btn-soft-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-apple align-middle me-1"></i> Download App
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end row-->
                </div><!--end container-fluid-->
            </div>
            <div class="w-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="auth-card mx-lg-3">
                                <div class="card border-0 mb-0">
                                    <div class="card-header bg-primary border-0">
                                        <div class="row">
                                            <div class="col-lg-4 col-3">
                                                <img src="/images/prodin.png" alt="Logo empresa" class="img-fluid">
                                            </div>
                                            <div class="col-lg-8 col-9">
                                                <h1 class="text-white text-capitalize lh-base fw-lighter">Registrate con nosotros</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted fs-15">Consigue tu cuenta ahora</p>
                                        <div class="p-2">
                                            <form class="needs-validation" novalidate action="index.html">
                                        
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                                                    <div class="invalid-feedback">
                                                        Please enter username
                                                    </div>
                                                </div>
                                        
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Toner <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                </div>
                                        
                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>
                                        
                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                                </div>
                                        
                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                                    </div>
                                        
                                                    <div>
                                                        <button type="button" class="btn btn-soft-primary btn-icon "><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-danger btn-icon "><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-dark btn-icon "><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-info btn-icon "><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Already have an account ? <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->

                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <p class="mb-0 text-muted">©
                                        <script>document.write(new Date().getFullYear())</script> Toner. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </section>

        <!-- JAVASCRIPT -->
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/simplebar/simplebar.min.js"></script>
        <script src="/js/plugins.js"></script>

        <script src="/js/pages/password-match.init.js"></script>
        
        <script src="/js/pages/password-addon.init.js"></script>

    </body>

</html>
