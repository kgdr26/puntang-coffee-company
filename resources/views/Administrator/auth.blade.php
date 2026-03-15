<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Adminty - Premium Admin Template by Colorlib</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="https://demo.dashboardpack.com/adminty-html/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&amp;display=swap" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/icon/icofont/css/icofont.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/icon/feather/css/feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/css/theme/style.min.css') }}">
</head>


<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    @if(session('error'))
                        <div class="alert alert-dismissible alert-danger icons-alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <p>
                                <strong>Danger!</strong> 
                                {{ session('error') }}
                            </p>
                        </div>
                    @endif

                    <form class="md-float-material form-material" method="POST" action="{{ route('admin.login.process') }}">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('assets/main-admin/images/logo.png') }}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-body">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="mb-3 form-primary">
                                    <input type="text" name="login" class="form-control" required="" placeholder="Your Username Or Email Address">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="mb-3 form-primary">
                                    <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-start">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label class="form-label">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-end f-right">
                                            <a href="" class="text-end f-w-600">
                                                Forgot Password? 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-md waves-effect waves-light text-center m-b-20">
                                                Sign in
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-start m-b-0">Thank you.</p>
                                        <p class="text-inverse text-start">
                                            <a href="{{ route('home') }}">
                                                <b class="f-w-600">
                                                    Back to website
                                                </b>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/main-admin/images/auth/Logo-small-bottom.png') }}" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Required Jquery -->
    <script src="{{ asset('assets/main-admin/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/plugins/jquery-ui/dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/plugins/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script src="{{ asset('assets/main-admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- i18next -->
    <script src="{{ asset('assets/main-admin/plugins/i18next/dist/umd/i18next.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/plugins/i18next-http-backend/i18nextHttpBackend.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/plugins/i18next-browser-languagedetector/dist/umd/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/plugins/jquery-i18next/jquery-i18next.min.js') }}"></script>
    <script src="{{ asset('assets/main-admin/js/common-pages.js') }}"></script>
</body>

</html>
