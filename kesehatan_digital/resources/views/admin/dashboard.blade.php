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
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
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
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-grid"></i></h3>
                                                <p class="text-muted">Data Kategori</p>
                                            </div>
                                            <div class="ms-auto">
                                                <h2 class="counter text-primary">{{ $kategori }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress" id="kategoriProgressBar">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $kategori }}%; height: 6px;" aria-valuenow="{{ $kategori }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <script>
                                            // Simpan nilai counter dan inisialisasi progress bar
                                            var counterValue = {{ $kategori }};
                                            var progressBar = $('#kategoriProgressBar .progress-bar');

                                            // Fungsi untuk mengupdate nilai dan lebar progress bar
                                            function updateProgressBar() {
                                                // Menghitung persentase nilai terhadap maksimum (misal, 100)
                                                var percentage = (counterValue / 100) * 100;

                                                // Mengupdate nilai dan lebar progress bar
                                                progressBar.attr('aria-valuenow', counterValue).css('width', percentage + '%');

                                                // Mengupdate teks counter
                                                $('#kategoriCounter').text(counterValue);
                                            }

                                            // Panggil fungsi untuk pertama kali
                                            updateProgressBar();

                                            // Contoh: Update counter setiap 1 detik
                                            setInterval(function() {
                                                // Simulasikan peningkatan nilai counter
                                                counterValue += 5;

                                                // Batasi nilai maksimal (misal, 100)
                                                counterValue = Math.min(counterValue, 100);

                                                // Panggil fungsi untuk mengupdate progress bar
                                                updateProgressBar();
                                            }, 1000);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-note"></i></h3>
                                                <p class="text-muted">Data Vaksin</p>
                                            </div>
                                            <div class="ms-auto">
                                                <h2 class="counter text-cyan">{{ $jumlahSudahVaksin }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress" id="vaksinProgressBar">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $jumlahSudahVaksin }}%; height: 6px;" aria-valuenow="{{ $jumlahSudahVaksin }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <script>
                                            var counterValue = {{ $jumlahSudahVaksin }};
                                            var progressBar = $('#vaksinProgressBar .progress-bar');
                                            function updateProgressBar() {
                                                var percentage = (counterValue / 100) * 100;
                                                progressBar.attr('aria-valuenow', counterValue).css('width', percentage + '%');
                                                $('#vaksinCounter').text(counterValue);
                                            }
                                            updateProgressBar();
                                            setInterval(function() {
                                                counterValue += 5;
                                                counterValue = Math.min(counterValue, 100);
                                                updateProgressBar();
                                            }, 1000);
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-doc"></i></h3>
                                                <p class="text-muted">Data Artikel</p>
                                            </div>
                                            <div class="ms-auto">
                                                <h2 class="counter text-purple">{{ $artikel }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress" id="artikelProgressBar">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $artikel }}%; height: 6px;" aria-valuenow="{{ $artikel }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <script>
                                            var counterValue = {{ $artikel }};
                                            var progressBar = $('#artikelProgressBar .progress-bar');
                                            function updateProgressBar() {
                                                var percentage = (counterValue / 100) * 100;
                                                progressBar.attr('aria-valuenow', counterValue).css('width', percentage + '%');
                                                $('#artikelCounter').text(counterValue);
                                            }
                                            updateProgressBar();
                                            setInterval(function() {
                                                counterValue += 5;
                                                counterValue = Math.min(counterValue, 100);
                                                updateProgressBar();
                                            }, 1000);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-user"></i></h3>
                                                <p class="text-muted">Data User</p>
                                            </div>
                                            <div class="ms-auto">
                                                <h2 class="counter text-success">{{ $user }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress" id="userProgressBar">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $user }}%; height: 6px;" aria-valuenow="{{ $user }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                      <script>
                                            var counterValue = {{ $user }};
                                            var progressBar = $('#userProgressBar .progress-bar');
                                            function updateProgressBar() {
                                                var percentage = (counterValue / 100) * 100;
                                                progressBar.attr('aria-valuenow', counterValue).css('width', percentage + '%');
                                                $('#userCounter').text(counterValue);
                                            }
                                            updateProgressBar();
                                            setInterval(function() {
                                                counterValue += 5;
                                                counterValue = Math.min(counterValue, 100);
                                                updateProgressBar();
                                            }, 1000);
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-40 align-items-center no-block">
                                    <h5 class="card-title ">Data Tahunan Artikel</h5>
                                    <div class="ms-auto">
                                    </div>
                                </div>
                                <div id="morris-area-chart" style="height: 340px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->

                </div>
            </div>
            @extends('partials.footer_admin')
        </div>
    </div>

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
