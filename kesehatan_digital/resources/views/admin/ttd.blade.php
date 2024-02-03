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
    <title>Data ttd</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
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
                                <li class="breadcrumb-item active">Data Ttd</li>
                            </ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">+ Tambah
                                Ttd</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Ttd</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('create_ttd') }}" method="POST">
                                                @csrf
                                                <div class="mb-3 row">
                                                    <label for="inlineFormCustomSelect"
                                                        class="col-sm-3 col-form-label">Kelas</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" name="id_kelas"
                                                            id="inlineFormCustomSelect">
                                                            <option selected>--Pilih--</option>
                                                            @foreach ($data as $item)
                                                                <option value="{{ $item->id }}">{{ $item->kelas }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="status" id="flexRadioDefault1" value="sudah">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                SUDAH
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="status" id="flexRadioDefault2" value="belum">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                BELUM
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="jumlah" class="col-sm-3 col-form-label">Jumlah
                                                        Obat</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="jumlah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Data Tablet Tambah Darah</h4>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-success text-white me-3"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="mdi mdi-file-excel"></span> Import Excel
                                    </button>

                                    <button type="button" class="btn btn-danger text-white">
                                        <a href="{{ route('pdf-ttd') }}" class="text-white"><span
                                                class="mdi mdi-file-pdf"></span> Export
                                            Pdf</a>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Status</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ttd as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->kelas->kelas }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <form action="{{ route('destroy_ttd', $item->id) }}"
                                                        method="POST" id="myId{{ $item->id }}">
                                                        @csrf
                                                        @method('delete')
                                                        </a>
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-icon-text">
                                                            <i class="mdi mdi-delete btn-icon-prepend"></i>
                                                            Delete</button>
                                                    </form>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data TTD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('importTtd') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="ttd_file" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
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
    <script src="{{ asset('template_admin/inverse/dist/js/dashboard.js') }}"></script>
    <script src="{{ asset('template_admin/assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 00:58:42 GMT -->

</html>
