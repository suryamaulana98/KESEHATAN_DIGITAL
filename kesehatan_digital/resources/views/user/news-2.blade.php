<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/news-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:23 GMT -->

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
                                    <li class="active"><a href="#">Artikel</a></li>
                                </ol>
                                <h2>Artikel <span>& Event Terbaru</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of get quote area -->
    <section class="v2news-page section-padding">
        <div class="container">
            @foreach ($data as $item)
                <div class="row v2single-post">
                    <div class="col-sm-6">
                        <div class="department-img">
                            <img src="{{ asset('foto/' . $item->foto) }}"
                                style="width: 541px; height: 461px; alt="jigsawlab">
                        </div>
                    </div>
                    <div class="col-sm-6 department-content">
                        <h2 class="text-uppercase">{{ $item->judul }}</h2>
                        <div class="date">
                            <p>Penulis : <span>{{ $item->penulis }}</span> // Dibuat :
                                <span>{{ $item->updated_at }}</span>
                            </p>
                        </div>
                        <p>{!! Str::limit($item->deskripsi, 800) !!}</p>
                        <a href="{{ route('detail_berita', $item->id) }}" class="read-more">BACA SELENGKAPNYA</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="{{ $data->previousPageUrl() }}" aria-label="Previous" class="fa fa-angle-left">
                            </a>
                        </li>
                        @for ($i = 1; $i <= $data->lastPage(); $i++)
                            <li class="{{ $i == $data->currentPage() ? 'active' : '' }}">
                                <a href="{{ $data->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li>
                            <a href="{{ $data->nextPageUrl() }}" aria-label="Next" class="fa fa-angle-right">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>
    </section>
    <!-- start footer top section -->
    <section class="constructo-footer-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="footer-top-content">
                        <h2>Ok ! Let's Get Started Now.</h2>
                        <p>Maecenas scelerisque felis ornare placerat tempus. In turpis nisi, viverra hendrerit dolor
                            vel, auctor blandit sapien.</p>
                        <a href="#" class="contat-usf">CONTACT US</a>
                        <a href="#" class="learn-moref">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/news-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:25 GMT -->

</html>
