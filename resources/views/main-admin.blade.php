<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>
        <title>Admin Panel - Coffee Puntang</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="#">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords"
            content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">
        <!-- Favicon icon -->
        <link rel="icon" href="https://demo.dashboardpack.com/adminty-html/assets/images/favicon.ico" type="image/x-icon">

        @foreach($css as $src)
            <link rel="stylesheet" type="text/css" href="{{ $src }}">
        @endforeach

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
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/plugins/%40fortawesome/fontawesome-free/css/all.min.css') }}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/css/theme/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/main-admin/css/jquery.mCustomScrollbar.css') }}">

        <style>
            /* .ck-editor__editable {
                min-height: 50rem;
            } */

            #ths_text_1 + .ck-editor .ck-editor__editable,
            #ths_text_2 + .ck-editor .ck-editor__editable,
            #ths_text_3 + .ck-editor .ck-editor__editable {
                height: 5rem !important;
            }
            
        </style>
    </head>

    <body>
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

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <!-- Header Start -->
                @include('Administrator.component.header')
                <!-- Header End -->

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">

                        <!-- Sidebar Start -->
                        @include('Administrator.component.sidebar')
                        <!-- Sidebar End -->

                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">

                                    <!-- Main Content Start -->
                                    @yield('content')
                                    <!-- Main Content End -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Required Jquery -->
        <script src="{{ asset('assets/main-admin/plugins/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/main-admin/plugins/jquery-ui/dist/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/main-admin/plugins/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/main-admin/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- jquery slimscroll js -->
        <script src="{{ asset('assets/main-admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

        <script src="{{ asset('assets/main-admin/js/pcoded.min.js') }}"></script>

        <!-- Theme persistence - saves user's dark/light mode preference -->
        <script src="{{ asset('assets/main-admin/js/theme-persistence.html') }}"></script>
        <script src="{{ asset('assets/main-admin/js/vartical-layout.min.js') }}"></script>
        <script src="{{ asset('assets/main-admin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
        </script>

        @foreach($js as $src)
            <script src="{{ $src }}"></script>
        @endforeach

        <script src="{{ asset('assets/main-admin/js/script.js') }}"></script>

    </body>
</html>