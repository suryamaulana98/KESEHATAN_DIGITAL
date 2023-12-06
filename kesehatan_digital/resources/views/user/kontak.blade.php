<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:26 GMT -->

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
                                    <li class="active"><a href="#">Kontak</a></li>
                                </ol>
                                <h2><span>KONTAK</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="v3contact-address section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <div class="contact-title">

                        <h1>Cari <span>Kami Disini</span></h1>
                    </div>
                    <div class="contact-map">
                        <div id="gmap"></div>
                    </div>
                </div>
                <div class="col-sm-6 margin-top-resposnive">
                    <div class="contact-title">
                        <h1>&nbsp;&nbsp;&nbsp;&nbsp;Kontak<span>Tim Kami</span></h1>
                    </div>
                    <div class="row mt30 single-contact">
                        <div class="col-xs-2 contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>Jl. H. O.S. Cokroaminoto No.161, Tompokersan, Kec. Lumajang, Kabupaten Lumajang, Jawa
                                Timur<br>67316</h4>
                        </div>
                    </div>
                    <div class="row single-contact">
                        <div class="col-xs-2 contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>0507815377</h4>
                            <h4>0501725581</h4>
                        </div>
                    </div>
                    <div class="row single-contact">
                        <div class="col-xs-2 contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>info@starclinic.com.sa</h4>
                        </div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs"></script>
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
    <!-- google map -->
    <script type="text/javascript" src="{{ asset('js/gmap.js') }}"></script>
    <!-- jquery active js -->
    <script type="text/javascript" src="{{ asset('js/active.js') }}"></script>
</body>


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:26 GMT -->

</html>
