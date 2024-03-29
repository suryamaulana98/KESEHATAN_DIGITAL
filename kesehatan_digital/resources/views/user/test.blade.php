<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Siswa</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        }

        .card-title {
            font-size: 1px;
            font-weight: bold;
            margin-bottom: 0.5rem;
            /* Jarak antara judul dan konten */
        }

        @media screen and (max-width: 768px) {
            .bg-container {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 90%;
                border: 2px solid #17a2b8;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                z-index: 0;
            }
            #content-wrapper {
                display: flex;
                justify-content: space-between;
                width: 40rem;
                height: 22rem;
                align-items:center;
                position: relative;
                /* background: rgba(0, 0, 0, .5); */
            }

            #content-wrapper img {
                width: 8rem;
                height: 8rem;
                border-radius: 100%;
            }

            #content-wrapper li {
                list-style: none;
            }

            #content-wrapper .col {
                width: 35%;
            }

            .card-text {
                font-size: 1rem;
                color: #05486b;
                font-weight: bold;
                margin-bottom: 0.1rem;
                /* Jarak antara konten */
            }
        }

        @media screen and (min-width: 1200px) {
            .bg-container {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 64rem;
                border: 2px solid #17a2b8;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                z-index: 0;
            }
            #content-wrapper {
                display: flex;
                justify-content: space-between;
                height: 44rem;
                align-items:center;
                position: relative;
                /* background: rgba(0, 0, 0, .5); */
            }

            #content-wrapper .col {
                width: 40%;
            }

            #content-wrapper img {
                width: 16rem;
                height: 16rem;
                border-radius: 100%;
            }

            #content-wrapper li {
                list-style: none;
            }

            .card-text {
                font-size: 15px;
                color: #05486b;
                font-weight: bold;
                margin-bottom: 0.1rem;
                /* Jarak antara konten */
            }
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
                                src="{{ asset('foto/' . Auth::user()->foto) }}" style="width: 12rem; height: 12rem;" alt>
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
                            <label class="form-label"><span class="help">Nama Lengkap</span></label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" class="form-control"
                                name="name" value="{{ old('name', Auth::user()->name) }}">
                        </div>

                        <div class="row gx-5 mb-3 form-group">

                            <div class="col-md-6">
                                <label class="mb-1" for="inputFirstName">NISN</label>
                                <input type="text" placeholder="Masukkan Nisn" class="form-control" name="nisn"
                                    value="{{ old('nisn', Auth::user()->nisn) }}">
                            </div>

                            <div class="col-md-6">
                                <label class=" mb-1" for="inputLastName">NIS</label>
                                <input type="text" placeholder="Masukkan Nis" class="form-control" name="nis"
                                    value="{{ old('nis', Auth::user()->nis) }}">
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputOrgName">Tinggi Badan</label>
                                <input type="text" class="form-control" placeholder="CM" name="tinggi_badan"
                                    value="{{ old('tinggi_badan', Auth::user()->tinggi_badan) }}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputLocation">Berat Badan</label>
                                <input type="text" class="form-control" placeholder="KG" name="berat_badan"
                                    value="{{ old('berat_badan', Auth::user()->berat_badan) }}">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputOrgName">Lingkar Kepala</label>
                                <input type="number" class="form-control" placeholder="Masukkan Lingkar Kepala"
                                    name="lingkar_kepala"
                                    value="{{ old('lingkar_kepala', Auth::user()->lingkar_kepala) }}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputLocation">Jumlah Saudara</label>
                                <input type="number" class="form-control"
                                    placeholder="Masukkan Jumlah Saudara Kandung" name="jumlah_saudara"
                                    value="{{ old('jumlah_saudara', Auth::user()->jumlah_saudara) }}">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputOrgName">Jarak Rumah Ke Sekolah</label>
                                <input type="number" class="form-control" placeholder="KM" name="jarak_rumah"
                                    value="{{ old('jarak_rumah', Auth::user()->jarak_rumah) }}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class=" mb-1" for="inputLocation">Waktu Tempuh Ke Sekolah</label>
                                <input type="time" class="form-control" placeholder="Menit" name="waktu_tempuh"
                                    value="{{ old('waktu_tempuh', Auth::user()->waktu_tempuh) }}">
                            </div>
                        </div>

                        <div class="mb-3 form-group">
                            <label class=" mb-1" for="inputEmailAddress">Email</label>
                            <input type="text" class="form-control" placeholder="Masukkan Email Yang valid"
                                name="email" value="{{ old('email', Auth::user()->email) }}">
                        </div>

                        <div class="mb-3 form-group">
                            <label class=" mb-1" for="inputEmailAddress">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Masukka Tanggal lahir"
                                name="tanggal_lahir" value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir) }}">
                        </div>

                        <div class="row gx-3 mb-3 form-group">

                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label class=" mb-1" for="inputEmailAddress">Pilih Data Vaksin Covid-19</label>
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
                            <div class="bg-container">
                                <img src="{{ asset('img/background1.png') }}" alt="">
                            </div>
                            <div class="row d-flex" id="content-wrapper">
                                <div class="col">
                                    <img src="{{ asset('foto/' . Auth::user()->foto) }}" alt="">
                                </div>
                                <div class="col" id="data-siswa">
                                    <br><br><br>
                                    <li>
                                        <p class="card-text text-uppercase">{{ Auth::user()->name }}</p>
                                    </li>
                                    <li>
                                        <p class="card-text text-uppercase">{{ Auth::user()->nisn }}</p>
                                    </li>
                                    <li>
                                        <p class="card-text text-uppercase">{{ Auth::user()->nis }}</p>
                                    </li>
                                    @if (Auth::user()->kelas !== null)
                                        <li>
                                            <p class="card-text text-uppercase">{{ Auth::user()->kelas->kelas }}</p>
                                        </li>
                                    @elseif(Auth::user()->kelas === null)
                                        <li>-</li>
                                    @endif
                                    <li>
                                        <p class="card-text text-uppercase">{{ Auth::user()->tanggal_lahir }}</p>
                                    </li>
                                    <li>
                                        <p class="card-text text-uppercase">{{ Auth::user()->jenis_kelamin }}</p>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-block btn-secondary" data-bs-dismiss="modal"
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
