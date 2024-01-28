<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 01:01:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>

    <!-- page css -->
    <link href="{{ asset('template_admin/inverse/dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template_admin/inverse/dist/css/style.min.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar"
        style="background-image:url(template_admin/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material text-center" id="loginform" action="{{ route('login') }}"
                    method="POST">
                    @csrf
                    <a href="javascript:void(0)" class="db"><img
                            src="{{ asset('template_admin/assets/images/logo-icon.png') }}" alt="Home" /><br /><img
                            src="{{ asset('template_admin/assets/images/logo-text.png') }}" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" required=""
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required=""
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">Remember me</label>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i
                                            class="fas fa-lock m-r-5"></i> Forgot pwd?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg w-100 text-uppercase btn-rounded text-white"
                                type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign
                                    Up</b></a>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform"
                    action="https://eliteadmin.themedesigner.in/demos/bt4/inverse/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light"
                                type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('template_admin/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template_admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 01:01:39 GMT -->

</html>






{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
