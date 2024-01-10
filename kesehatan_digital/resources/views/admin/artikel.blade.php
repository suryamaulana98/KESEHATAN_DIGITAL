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
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Data Artikel</li>
                            </ol>
                            <a href="{{ route('artikelAdmin.create') }}"
                                class="btn btn-info d-none d-lg-block m-l-15 text-white">+ Tambah
                                Artikel</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between;">
                                <h4 class="card-title">Data Artikel</h4>
                                <form action="{{ route('cariArtikel') }}" method="get">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="Cari Artikel Disini..."
                                            name="cariArtikel" id="search-input">
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Penulis</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="search-results">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->kategori->kategori }}</td>
                                                <td>{{ $item->penulis }}</td>
                                                <td><img src="{{ asset('foto/' . $item->foto) }}" width="30px"
                                                        height="30px">
                                                </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('artikelAdmin.destroy', $item->id) }}"
                                                        method="POST" id="myId{{ $item->id }}">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('artikelAdmin.edit', $item->id) }}"
                                                            class="btn btn-outline-success btn-icon-text"
                                                            title="edit data"><i
                                                                class="mdi mdi-file-check btn-icon-append"></i>
                                                        </a>
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-icon-text"
                                                            title="hapus data">
                                                            <i class="mdi mdi-delete btn-icon-prepend"></i></button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').keyup(function(event) {
                event.preventDefault(); // Mencegah perilaku bawaan formulir

                var searchTerm = $('#search-input').val();

                $.ajax({
                    url: "{{ route('cariArtikel') }}",
                    type: "GET",
                    data: {
                        cariArtikel: searchTerm
                    },
                    success: function(response) {
                        var resultsContainer = $('#search-results');
                        resultsContainer.empty();

                        $.each(response, function(index, data) {
                            var editUrl = "/artikelAdmin/" + data.id + "/edit";
                            var deleteUrl = "/artikelAdmin/" + data.id;
                            var iteration = index + 1;
                            var row = `<tr>
                                <td>${iteration}</td>
                                <td>${data.judul}</td>
                                <td>${data.kategori.kategori}</td>
                                <td>${data.penulis}</td>
                                <td><img src="{{ asset('foto/') }}/${data.foto}" width="30px" height="30px"></td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="${deleteUrl}" method="POST" id="myId${data.id}">
                                        @csrf
                                        @method('delete')
                                        <a href="${editUrl}" class="btn btn-outline-success btn-icon-text" title="edit data">
                                            <i class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>
                                        <button type="submit" class="btn btn-outline-danger btn-icon-text" title="hapus data">
                                            <i class="mdi mdi-delete btn-icon-prepend"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>`;

                            resultsContainer.append(row);
                        });
                    }
                });
            });
        });
    </script>

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
