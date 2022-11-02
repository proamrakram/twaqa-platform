<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/chroma/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jul 2021 09:49:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chroma Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper auth p-0 theme-two">
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                        <div class="slide-content bg-1">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 h-100 bg-white">
                        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <h3 class="mr-auto">Login</h3>
                                <p class="mb-5 mr-auto"></p>

                                @if ($errors->has('email'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"
                                    style="margin-top: 15px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="mdi mdi-account-outline"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control" placeholder="Email"
                                            name="email" value="{{ old('email') }}" required autofocus
                                            style="height: auto;">

                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            required placeholder="Password" style="height: auto;">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn">SIGN IN</button>
                                </div>
                                <div class="wrapper mt-5 text-gray">
                                    <p class="footer-text">Copyright © 2022 Twaqa. All rights reserved.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('asset/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('asset/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('asset/js/off-canvas.js') }}"></script>
    <script src="{{ asset('asset/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('asset/js/misc.js') }}"></script>
    <script src="{{ asset('asset/js/settings.js') }}"></script>
    <script src="{{ asset('asset/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/chroma/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jul 2021 09:49:09 GMT -->

</html>
