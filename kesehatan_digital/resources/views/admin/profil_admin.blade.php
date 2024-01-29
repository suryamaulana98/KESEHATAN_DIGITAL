<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 00:56:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_admin/assets/images/favicon.png') }}">
    <title>Profil admin</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('template_admin/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('template_admin/assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template_admin/inverse/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('template_admin/inverse/dist/css/pages/dashboard1.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <div id="main-wrapper">
        @include('partials.topbar_admin')
        @extends('partials.sidebar_admin')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Detail Profil</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Detail Profil</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card"> <img class="card-img"
                                src="{{ asset('template_admin/assets/images/background/socialbg.jpg') }}" height="456"
                                alt="Card image">
                            <div
                                class="card-img-overlay card-inverse text-white social-profile d-flex no-block justify-content-center">
                                <div class="align-self-center"> <img
                                        src="{{ asset('template_admin/assets/images/users/1.jpg') }}" class="img-circle"
                                        width="100">
                                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                                    <h6 class="card-subtitle text-white">{{ Auth::user()->email }}</h6>
                                    <p class="text-white">Saya seorang admin dan saya penanggung
                                        jawab pada aplikasi ini
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <form action="{{ route('profilAdmin.update', Auth::user()->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="col-md-12">Username</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name"
                                                    value="{{ old('name', Auth::user()->name) }}"
                                                    class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" class="form-control form-control-line"
                                                    name="email" value="{{ old('email', Auth::user()->email) }}"
                                                    id="example-email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password"
                                                    value="{{ old('password', Auth::user()->password) }}"
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success text-white">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @extends('partials.footer_admin')
    </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('template_admin/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template_admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('template_admin/inverse/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('template_admin/inverse/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('template_admin/inverse/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('template_admin/inverse/dist/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('template_admin/assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('template_admin/assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('template_admin/inverse/dist/js/dashboard1.js') }}"></script>
    <script src="{{ asset('template_admin/assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 00:58:42 GMT -->

</html>
