        <!-- start topbar area -->

        <!-- end of topbar area -->
        <!-- start topbar area -->
        <!-- navbare area -->
        <!-- Bootstrap CSS -->

        <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-area v2">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle blacknav collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}"
                            alt="theimran.com"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav menu navbar-right navbar-nav">
                        <li class="{{ request()->routeIs('home2') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('home2') }}">Beranda</a>
                        </li>

                        <li class="{{ request()->routeIs('about') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('about') }}">Tentang Kami</a>
                        </li>

                        <li class="{{ request()->routeIs('berita', 'detail_berita') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li class="{{ request()->routeIs('kontak') ? 'current-menu-item' : '' }}"><a
                                href="{{ route('kontak') }}">Kontak</a>

                        </li>
                        <li><a href="#">Akun<span class="fa fa-angle-down"></span></a>
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </li>
                        @auth
                            <li>
                                <a href="#">
                                    <img src="{{ asset('img/testimonial-1.png') }}" class="rounded"
                                        style="margin-left: 20px;" width="50px" srcset="">
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <a href="#" data-toggle="modal" data-target="#modalutama"
                                                style="background: none">Profile</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <form action="{{ route('logout') }}"
                                                onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST"
                                                id="logout-form">
                                                @csrf
                                                <button type="submit" class="dropdown-item d-none">Logout</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Modal -->

            <!-- end of navbare area -->
            <!-- end of topbar area -->
            <div class="modal fade" id="modalutama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('updateProfile', Auth::user()->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label"><span class="help">Masukan Nama</span></label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', Auth::user()->name) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><span class="help">Masukan Email</span></label>
                                    <input type="text" class="form-control" name="email"
                                        value="{{ old('email', Auth::user()->email) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><span class="help">Masukan NISN</span></label>
                                    <input type="text" class="form-control" name="nis"
                                        value="{{ old('nis', Auth::user()->nis) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><span class="help">Masukan Tinggi
                                            Badam</span></label>
                                    <input type="text" class="form-control" name="tinggi_badan"
                                        value="{{ old('tinggi_badan', Auth::user()->tinggi_badan) }}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label"><span class="help">Masukan Berat
                                            Badan</span></label>
                                    <input type="text" class="form-control" name="berat_badan"
                                        value="{{ old('berat_badan', Auth::user()->berat_badan) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><span class="help">Pilih Data
                                            Vaksin</span></label><br>
                                    <select class="form-select" name="d_vaksin" aria-label="Default select example">
                                        <option selected disabled>{{ Auth::user()->d_vaksin }}</option>
                                        <option value="Vaksin Pertama"
                                            {{ old('d_vaksin') === 'Vaksin Pertama' ? 'selected' : '' }}>Vaksin
                                            Pertama</option>
                                        <option value="Vaksin Kedua"
                                            {{ old('d_vaksin') === 'Vaksin Kedua' ? 'selected' : '' }}>Vaksin
                                            Kedua</option>
                                        <option value="Vaksin Ketiga"
                                            {{ old('d_vaksin') === 'Vaksin Ketiga' ? 'selected' : '' }}>Vaksin
                                            Ketiga</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" id="cetakKartuButton"
                                        data-toggle="modal" data-target="#modalcetak">
                                        Cetak Kartu
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>


                <style>
                    /* CSS untuk tampilan kartu pelajar di dalam modal */
                    .carde {
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
                        margin-bottom: 0.3rem;
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

                        .carde,
                        .carde * {
                            visibility: visible;
                        }

                        .carde {
                            /* Sesuaikan posisi dan gaya latar belakang sesuai kebutuhan */
                            left: 10px;
                            top: 10px;
                            position: absolute;
                            background-image: url('{{ asset('img/background1.png') }}');
                            background-size: cover;
                        }
                    }
                </style>

                <!-- Modal -->
                <div class="modal fade" id="modalcetak" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Kartu Pelajar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="carde">
                                    <div class="card-body">
                                        <p class="card-text text-center" style="margin-top:29%; margin-right:-18%;">
                                            {{ old('name', Auth::user()->name) }}"</p>
                                        <p class="card-text" style="margin-left:55%;">
                                            {{ old('name', Auth::user()->nis) }}"</p>
                                        <p class="card-text" style="margin-left:55%;">
                                            {{ old('name', Auth::user()->tinggi_badan) }}"</p>
                                        <p class="card-text" style="margin-left:55%;">
                                            {{ old('name', Auth::user()->berat_badan) }}"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    id="closeButton">Close</button>
                                <button type="button" id="cetakPdfBtn2" class="btn btn-primary">Cetak ke PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth

            <script>
                document.getElementById('cetakPdfBtn2').addEventListener('click', function() {
                    window.print();
                });
            </script>
