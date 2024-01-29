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
    <title>Data Dapodik</title>
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
                        <h4 class="text-themecolor">Dashboard 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Data Dapodik</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Data Dapodik</h4>
                                <div class="d-flex">
                                    <a href="{{ route('pdf') }}"><button type="submit"
                                            class="btn btn-danger me-3">Export
                                            PDF</button></a>
                                    <a href="{{ route('pdf') }}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><button type="submit"
                                            class="btn btn-success">Import
                                            Excel</button></a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Data Dapodik</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('importExcel') }}" enctype="multipart/form-data"
                                                method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="file" name="excel_file" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nis</th>
                                            <th>Tinggi</th>
                                            <th>Berat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->nis }}</td>
                                                <td>{{ $item->tinggi_badan }}</td>
                                                <td>{{ $item->berat_badan }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Update
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                        Update Data Dapodik
                                                                    </h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ route('dapodikAdmin.update', $item->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('put')
                                                                        <div class="form-group">
                                                                            <label class="form-label">Nama</label>
                                                                            <input type="text"
                                                                                value="{{ $item->name }}"
                                                                                name="berat_badan"
                                                                                class="form-control" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Berat
                                                                                Badan</label>
                                                                            <input type="text"
                                                                                value="{{ $item->berat_badan }}"
                                                                                name="berat_badan"
                                                                                class="form-control"
                                                                                placeholder="Masukkan Bb">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Tinggi
                                                                                Badan</label>
                                                                            <input type="text"
                                                                                value="{{ $item->tinggi_badan }}"
                                                                                name="tinggi_badan"
                                                                                class="form-control"
                                                                                placeholder="Masukkan tinggi">
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#modalcetak">
                                                        Cetak kartu
                                                    </button>

                                                    <style>
                                                        /* CSS untuk tampilan kartu pelajar di dalam modal */
                                                        .cardd {
                                                            width: 640px;
                                                            height: 400px;
                                                            margin: 0 auto;
                                                            /* Posisikan kartu di tengah */
                                                            background-image: url('{{ asset('img/background1.png') }}');
                                                            /* Ganti 'background.jpg' dengan path gambar Anda */
                                                            background-size: cover;
                                                            border: 2px solid #17a2b8;
                                                            /* Warna border kartu */
                                                            border-radius: 10px;
                                                            /* Rounding border kartu */
                                                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                                            /* Efek bayangan kartu */
                                                        }

                                                        .card-title {
                                                            font-size: 1px;
                                                            font-weight: bold;
                                                            margin-bottom: 0.5rem;
                                                            /* Jarak antara judul dan konten */
                                                        }

                                                        .card-text {
                                                            font-size: 14px;
                                                            font-color: blue;
                                                            font-weight: bold;
                                                            margin-bottom: 0.1rem;
                                                            /* Jarak antara konten */
                                                        }

                                                        /* CSS untuk modal */
                                                        .modal-body {
                                                            padding: 2rem;
                                                            /* Padding konten modal */
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            min-height: 300px;
                                                            /* Tinggi minimum konten modal */
                                                        }

                                                        .modal-footer {
                                                            justify-content: center;
                                                        }

                                                        /* CSS untuk tombol cetak */
                                                        #cetakPdfBtn {
                                                            width: 100%;
                                                        }


                                                        /* CSS untuk konten di dalam modal */
                                                        .modal-body,
                                                        .modal-footer {
                                                            background-color: rgba(255, 255, 255, 0.8);
                                                            /* Warna latar belakang konten */
                                                        }
                                                    </style>
                                                    <!-- Modal -->
                                                    <!-- Modal -->
                                                    <style>
    /* CSS untuk tampilan cetak */
    @media print {
        body * {
            visibility: hidden;
        }
        .cardd, .cardd * {
            visibility: visible;
        }
        .cardd {
            left: 10px;
            top: 10px;
            position: 
            absolute;
        }
        
    }
</style>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modalcetak" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Kartu Pelajar</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="cardd">
                                                                        <div class="card-body">
                                                                            <p class="card-text text-center" style="margin-top:28%; margin-right:-18%;">
                                                                                {{ $item->name }}</p>
                                                                            <p class="card-text" style="margin-left:55%;">
                                                                                {{ $item->nis }}</p>
                                                                            <p class="card-text" style="margin-left:55%;">
                                                                                {{ $item->tinggi_badan }}</p>
                                                                            <p class="card-text" style="margin-left:55%;">
                                                                                {{ $item->berat_badan }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" id="cetakPdfBtn"
                                                                        class="btn btn-primary">Cetak ke PDF</button>
                                                                </div>
                                                                <script>
    document.getElementById('cetakPdfBtn').addEventListener('click', function () {
        window.print();
    });
</script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
