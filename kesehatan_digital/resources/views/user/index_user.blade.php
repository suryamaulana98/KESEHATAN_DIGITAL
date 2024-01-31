<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:16:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">
    <div id="preloader"></div>

    <section class="home-area v2">
        @include('partials.topbar_user')

        <!-- start slider section -->
        <div class="Modern-Slider v2">
            <!-- Item -->
            @forelse ($landing as $item)
                <div class="item">
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 v2  slider-content-area text-center">
                                    <div class="welcome-text">
                                        <h1>{{ $item->judul }}</h1>
                                        <h4>{{ $item->deskripsi }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
            <!-- // Item -->
        </div>
        <!-- end of slider section -->
    </section>

    {{-- <script>
        // Ambil data slider dari database dan simpan dalam variabel dataSlider
        var dataSlider = {!! json_encode($landing) !!};
        console.log(dataSlider); // Cek apakah dataSlider berisi data yang valid
        // Ambil elemen slider
        var slider = document.querySelector('.Modern-Slider.v2');

        // Buat konten slider secara dinamis berdasarkan dataSlider
        dataSlider.forEach(function(item) {
            // Buat elemen <div> untuk setiap item slider
            var slideItem = document.createElement('div');
            slideItem.classList.add('item');

            // Atur latar belakang slideItem menggunakan data dari database
            var backgroundUrl = 'url("' + '{{ asset('foto/') }}' + item.background +
                '") no-repeat center center / cover';
            slideItem.style.background = backgroundUrl;

            // Buat elemen <div> untuk info di dalam slideItem
            var infoDiv = document.createElement('div');
            infoDiv.classList.add('info');

            // Buat elemen <div> untuk container di dalam infoDiv
            var containerDiv = document.createElement('div');
            containerDiv.classList.add('container');

            // Buat elemen <div> untuk row di dalam containerDiv
            var rowDiv = document.createElement('div');
            rowDiv.classList.add('row');

            // Buat elemen <div> untuk kolom di dalam rowDiv
            var colDiv = document.createElement('div');
            colDiv.classList.add('col-xs-12', 'v2', 'slider-content-area', 'text-center');

            // Buat elemen <div> untuk welcome-text di dalam colDiv
            var welcomeDiv = document.createElement('div');
            welcomeDiv.classList.add('welcome-text');

            // Tambahkan judul dan deskripsi dari database ke welcomeDiv
            welcomeDiv.innerHTML = '<h1>' + item.judul + '</h1><h4>' + item.deskripsi + '</h4>';

            // Susun elemen-elemen dalam hierarki yang sesuai
            colDiv.appendChild(welcomeDiv);
            rowDiv.appendChild(colDiv);
            containerDiv.appendChild(rowDiv);
            infoDiv.appendChild(containerDiv);
            slideItem.appendChild(infoDiv);

            // Tambahkan slideItem ke dalam slider
            slider.appendChild(slideItem);
        });
    </script> --}}

    <!-- end of get quote area -->
    <!-- start features area -->
    <section class="features-area v2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="img/v2f1.png" alt="theimran.com">
                            <div class="hover-features">
                                <img src="img/service-3.png" alt="theimran.com">
                            </div>
                        </div>
                        <h4>PELAYANAN</h4>
                        <p>UKS menyediakan berbagai kegiatan dan fasilitas, termasuk penyuluhan kesehatan,
                            pemeriksaan kesehatan rutin, penanganan kasus ringan, dan kolaborasi dengan lembaga
                            kesehatan setempat.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="img/v2f2.png" alt="theimran.com">
                            <div class="hover-features">
                                <img src="img/service-1.png" alt="theimran.com">
                            </div>
                        </div>
                        <h4>Petugas yang terpilih</h4>
                        <p>Petugas UKS yang terpilih dan yang terbaik biasanya memiliki kualifikasi dan karakteristik
                            tertentu yang mendukung efektivitas dan keberhasilan layanan kesehatan di lingkungan
                            sekolah.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="img/v2f3.png" alt="theimran.com">
                            <div class="hover-features">
                                <img src="img/service-2.png" alt="theimran.com">
                            </div>
                        </div>
                        <h4>LAYANAN DARURAT</h4>
                        <p>Layanan darurat Unit Kesehatan Sekolah (UKS) dirancang untuk memberikan tanggapan cepat dan
                            efektif dalam situasi keadaan darurat atau kecelakaan di lingkungan sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of features area -->
    <!-- start about us section -->

    <!-- end of about us section -->
    <!-- start specialist area -->
    <!-- end of specialist  area -->
    <!-- start department section -->

    </section>
    <!-- end of department section -->
    <!-- start testimonial section -->

    <!-- end of testimonial section -->
    <!-- start specialist area -->

    <!-- end of specialist area -->
    <!-- start latest news event section -->
    <section class="latest-news-event-section v2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h1><span>Berita</span> dan acara terkini</h1>
                        <p> Berikut ini adalah rekomendasi berita terbaru</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="version-second-news-slider owl-carousel">
                        @forelse ($data as $item)
                            <div class="single-news-v2">
                                <a href="{{ route('detail_berita', $item->id) }}">
                                    <img src="{{ asset('foto/' . $item->foto) }}" alt="mdimran41"
                                        style="width: 570px; height: 560px;">
                                </a>
                                <div class="news-content-title">
                                    <h2>{{ $item->judul }}</h2>
                                    <p>Dibuat Tanggal : {{ $item->created_at->format('d F Y') }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="single-news-v2">
                                <p>Tidak ada berita yang tersedia.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
                <!-- end of news slider area -->
                <div class="col-sm-12 col-md-6">
                    <div class="nesws-media">
                        @foreach ($data as $item)
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="{{ asset('foto/' . $item->foto) }}"
                                        style="width: 170px; height: 173px;" alt="theimran.com">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{ $item->judul }}</h4>
                                    <p>{!! Str::limit($item->deskripsi, 150) !!}</p>
                                    <div class="about-news">
                                        <a href="#">{{ $item->komentar()->count() }} Komentar <span>/</span></a>
                                        <a href="#">{{ $item->kategori->kategori }} <span>/</span></a>
                                        <a href="{{ route('berita') }}">Baca Selengkapnya >></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="view-alldoctors">
                        <a href="{{ route('berita') }}" class="read-more">Lihat semua berita</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of latest news event section -->
    <!-- start band area -->

    <!-- end of brand area -->
    @include('partials.footer_user')

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:16:58 GMT -->

</html>
