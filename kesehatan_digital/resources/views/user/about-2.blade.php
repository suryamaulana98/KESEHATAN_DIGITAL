<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:17 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medicare | Responsive HTML5 Template</title>
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
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">
    <div id="preloader"></div>
    @include('partials.topbar_user')
    <section class="home-area v2 single-title-area">
        <!-- navbare area -->

        <!-- end of navbare area -->
        <!-- start single page title area -->
        <div class="single-page-title">
            <div class="page-title-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><a href="#">About Us</a></li>
                                </ol>
                                <h2>Tentang <span>Kami</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of get quote area -->
    <section class="aboutUs-area v2 singlepage section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="aboutUs-contant">
                        <div class="about-title">
                            <h4>UKS</h4>
                            <h1>Tentang <span>UKS</span></h1>
                        </div>
                        <h4><span class="fa fa-check"></span>Pelayanan Kesehatan Preventif</h4>
                        <p>UKS fokus pada pencegahan penyakit dengan memberikan imunisasi, distribusi vitamin, dan
                            program-program preventif lainnya. Langkah ini diambil untuk menciptakan lingkungan sekolah
                            yang bersih dan sehat.</p>
                        <h4><span class="fa fa-check"></span>Konseling Kesehatan Mental</h4>
                        <p>UKS SMKN 1 Lumajang juga menyediakan layanan konseling kesehatan mental. Tujuannya adalah
                            memberikan dukungan dan pemahaman kepada siswa terkait masalah kesehatan mental, stres, atau
                            tekanan psikologis.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="aboutv2-imaage-slider">
                        <div class="singleAbv2-slider">
                            <img src="img/news.png" alt="jigsawlab">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row margin-top">

                <div class="col-sm-6">
                    <div class="whychoseus-img">
                        <img src="{{ asset('img/aboutv2img-2.jpg') }}" alt="jigsawlab">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="aboutUs-contant">
                        <div class="about-title">
                            <h4>Tentang UKS</h4>
                            <h1>mengapa <span>harus uKS</span></h1>
                        </div>

                        <p>Menggunakan website UKS SMKN 1 Lumajang memiliki beberapa keuntungan dan alasan yang
                            mendukung efektivitas dan kualitas layanan kesehatan di sekolah:</p>
                            <p>
                            Akses Informasi Cepat:
                            Website UKS menyediakan akses cepat dan mudah untuk mendapatkan informasi terkini mengenai
                            program-program kesehatan, kegiatan-kegiatan UKS, serta berita-berita terkait kesehatan di
                            SMKN 1 Lumajang.
                            </p>
                            <p>

                            Penyebaran Informasi Secara Luas:
                            Dengan website, informasi kesehatan dapat disebarkan secara luas kepada seluruh komunitas
                            sekolah, termasuk siswa, orang tua, dan tenaga pendidik. Hal ini memastikan transparansi dan
                            partisipasi aktif dari semua pihak terkait.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us section -->
    
    <!-- end of specialist area -->
    
    
    <!-- end of latest news event section -->
    @include('partials.footer_user')
    <div class="copyriht-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <div class="footer-social-link">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-tumblr"></a>
                        <a href="#" class="fa fa-skype"></a>
                        <a href="#" class="fa fa-vimeo"></a>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="copyright-text">
                        <p>Jigsawlab © All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:18 GMT -->

</html>
