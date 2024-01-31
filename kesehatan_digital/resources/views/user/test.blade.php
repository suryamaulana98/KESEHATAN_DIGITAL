<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medicare | Responsive HTML5 Template</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />
    <!-- google fonts lato -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- google fonts pt-Sans -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- slider custom effects -->
    <link rel="stylesheet" href="{{ asset('css/myslider.css') }}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- reset css -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body {}

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            /* font-weight: 500; */
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        /* .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;

            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        } */

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

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
            font-size: 15px;
            color: #05486b;
            font-weight: bold;
            margin-bottom: 0.1rem;
            /* Jarak antara konten */
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

        /* CSS untuk tampilan cetak */
        @media print {
            body * {
                visibility: hidden;
            }

            .cardd,
            .cardd * {
                visibility: visible;
            }

            .cardd {
                left: 10px;
                top: 10px;
                position:
                    absolute;
                background-image: url('/img/background1.png');
                   /* Tetapkan gambar latar belakang untuk mencetak */
                background-size: cover;
            }

        }
    </style>

</head>

<body class="js">
    @include('partials.topbar_user')
    <div class="container" style="margin-top: 20px; margin-bottom: 50px;">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 mb-md-0" style="padding-bottom: 30px;">
                    <form action="{{ route('updateProfile', Auth::user()->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h4 class="card-header">Profile Picture</h4>
                        <div class="card-body text-center" style="margin-top: 30px;">
                            <img id="previewImg" class="img-account-profile rounded-circle mb-2"
                                src="{{ asset('foto/' . Auth::user()->foto) }}" alt>
                            <div class="small font-italic text-muted mb-4" style="margin-bottom: 10px;">JPG or PNG no
                                larger than 5 MB</div>
                            <button class="btn btn-primary" name="foto" type="button" style="margin-right: 5px;"
                                onclick="document.getElementById('uploadGambar').click();">
                                Upload Gambar
                            </button>
                            <input id="uploadGambar" name="foto" type="file" style="display: none;"
                                onchange="previewImage(event);">

                            <script>
                                function previewImage(event) {
                                    var input = event.target;
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            document.getElementById('previewImg').src = e.target.result;
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                            <input id="uploadGambar" type="file" style="display: none;">
                            <button type="button" class="btn btn-danger" id="modalSukses">
                                Cetak kartu
                            </button>
                        </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <h4 class="card-header">Detail Akun</h4>
                    <div class="card-body p-2" style="padding: 12px;">

                        <div class="form-group">
                            <label class="form-label"><span class="help">Masukan
                                    Username</span></label>
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name', Auth::user()->name) }}">
                        </div>

                        <div class="row gx-5 mb-3 form-group">

                            <div class="col-md-6">
                                <label class="mb-1" for="inputFirstName">Masukan NISN</label>
                                <input type="text" class="form-control" name="nisn"
                                    value="{{ old('nisn', Auth::user()->nisn) }}">
                            </div>

                            <div class="col-md-6">
                                <label class=" mb-1" for="inputLastName">Masukan NIS</label>
                                <input type="text" class="form-control" name="nis"
                                    value="{{ old('nis', Auth::user()->nis) }}">
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputOrgName">Masukan Tinggi Badan</label>
                                <input type="text" class="form-control" name="tinggi_badan"
                                    value="{{ old('tinggi_badan', Auth::user()->tinggi_badan) }}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputLocation">Masukan Berat Badan</label>
                                <input type="text" class="form-control" name="berat_badan"
                                    value="{{ old('berat_badan', Auth::user()->berat_badan) }}">
                            </div>
                        </div>

                        <div class="mb-3 form-group">
                            <label class=" mb-1" for="inputEmailAddress">Masukan Email</label>
                            <input type="text" class="form-control" name="email"
                                value="{{ old('email', Auth::user()->email) }}">
                        </div>

                        <div class="mb-3 form-group">
                            <label class=" mb-1" for="inputEmailAddress">Masukan Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir) }}">
                        </div>

                        <div class="row gx-3 mb-3 form-group">

                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label class=" mb-1" for="inputEmailAddress">Pilih Data Vaksin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="d_vaksin"
                                            id="vaksin_pertama" value="Vaksin Pertama"
                                            {{ old('d_vaksin', Auth::user()->d_vaksin) === 'Vaksin Pertama' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vaksin_pertama">
                                            Vaksin Pertama
                                        </label>

                                        <input class="form-check-input" type="radio" name="d_vaksin"
                                            id="vaksin_kedua" value="Vaksin Kedua"
                                            {{ old('d_vaksin', Auth::user()->d_vaksin) === 'Vaksin Kedua' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vaksin_kedua">
                                            Vaksin Kedua
                                        </label>

                                        <input class="form-check-input" type="radio" name="d_vaksin"
                                            id="vaksin_ketiga" value="Vaksin Ketiga"
                                            {{ old('d_vaksin', Auth::user()->d_vaksin) === 'Vaksin Ketiga' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vaksin_ketiga">
                                            Vaksin Ketiga
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class=" mb-1" for="inputBirthday">Pilih Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="laki_laki" value="Laki - Laki"
                                        {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) === 'Laki - Laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki_laki">
                                        Laki - laki
                                    </label>

                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="perempuan" value="Perempuan"
                                        {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) === 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="subm">Update Profil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalcetak" class="modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h3 class="modal-title text-uppercase" id="exampleModalLabel">
                        Kartu Pelajar</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="cardd">
                        <div class="card-body">
                            <img src="{{ asset('foto/' . Auth::user()->foto) }}" style="border-radius: 80%; width:25%;height:25%; margin-bottom:-65%; margin-left: 5%;" alt="">
                            <p class="card-text text-uppercase" style="margin-left:340px; margin-top: 185px;">
                                {{ Auth::user()->name }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; ">
                                {{ Auth::user()->nisn }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; ">
                                {{ Auth::user()->nis }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px; ">
                                {{ Auth::user()->kelas->kelas }}</p>
                            <p class="card-text text-uppercase" style="margin-left:340px;">
                                {{ Auth::user()->tanggal_lahir }}
                            </p>
                            <p class="card-text text-uppercase" style="margin-left:340px;">
                                {{ Auth::user()->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="closeModal()">Close</button>
                    <a href="{{ route('kartuPdf', Auth::user()->id) }}"><button type="submit" id="cetakPdfBtn"
                            class="btn btn-primary">Cetak ke
                            PDF</button></a>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('modalSukses').addEventListener('click', function() {
            document.getElementById('modalcetak').style.display = 'block';
        });

        function closeModal() {
            var modal = document.getElementById('modalcetak');
            modal.style.display = 'none';
        }
    </script>

    @include('partials.footer_user')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery min js -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jquery easing js -->
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- jquery mignific js -->
    <script type="text/javascript" src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <!-- jquery slick js -->
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <!-- jquery nicescroll -->
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <!-- jquery active js -->
    <script type="text/javascript" src="{{ asset('js/active.js') }}"></script>
</body>

</html>
