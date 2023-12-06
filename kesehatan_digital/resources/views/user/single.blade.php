<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:27 GMT -->


<head>
        <style>
    .custom-comment-card {
        border: 1px solid #ddd;
        background-color: rgb(221, 221, 221);
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px; 
    }
</style>

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
</head>

<body class="js">
    <div id="preloader"></div>
    <!-- start topbar area -->
       @include('partials.topbar_user')
    <!-- end of topbar area -->
    <section class="home-area single-title-area">
        
        <!-- end of navbare area -->
        <!-- start single page title area -->
        <div class="single-page-title">
            <div class="page-title-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <div class="page-title">
                                <h2>Detail Artikel</h2>
                                <ol class="breadcrumb">
                                    <li><a href="#">Artikel</a></li>
                                    <li class="active"><a href="#">Detail</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of get quote area -->

    <section class="constructo-news-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="single-news-active">
                        <div class="single-news-post">
                            <div class="news-post-img">
                                <img src="{{ asset('foto/'.$data->foto) }}" style="width: 60%;" alt="theconstructo.com">
                            </div>
                            <div class="post-title">
                                <h2>{{ $data->judul }}</h2>
                            </div>
                            <div class="date">
                                <p>Ditulis Oleh : <span>{{ $data->penulis }}</span> // Tanggal : <span>{{ $data->created_at }}</span></p>
                            </div>
                            <p>{!! $data->deskripsi !!}</p>
                        </div>

                    <div class="comments-area">
                        <br>
                        <h3>Komentar</h3>
                        <br>
                        @if ($kom->isEmpty())
                            <p>Tidak ada komentar.</p>
                        @else
                            @foreach ($kom as $item)
                                <div class="custom-comment-card">
                                    <h5 class="card-title">{{ $item->user->name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->created_at->format('d M Y H:i') }}</h6>
                                    <p class="card-text">{{ $item->komentar }}</p>
                                </div>
                            @endforeach
                        @endif
                        <div class="comment-form"><br>
                            <h3 class="comment-reply-title">Tinggalkan Komentar</h3><br>
                            <form action="{{ route('komentar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_artikel" value="{{ $data->id }}">
                                <div class="form-group">
                                    <textarea name="komentar" class="form-control" rows="5" placeholder="Tulis komentar Anda"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                            </form>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="sidebar-area">
                        <div class="single-sidebar">
                            <div class="widget-title text-center">
                                <h2>Artikel Terbaru</h2>

                            </div>
                            <div class="widget-sider">
                                @foreach ($data2 as $item)
                                    
                                <div class="widget-single-slider">
                                    <a href="{{ route('detail_berita',$item->id) }}">
                                        <img src="{{ asset('foto/'.$item->foto) }}" style="width: 30%;" alt="theconstructo.com">
                                        <div class="widget-post-title">
                                            <p>{!! Str::limit($item->deskripsi, '100')  !!}</p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <div class="widget-title text-center">
                                <h2>Kategori</h2>

                            </div>
                            <ul>
                                @foreach ($kat as $item)
                                    
                                <li><a href="#">{{ $item->kategori }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of footer top div -->
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


<!-- Mirrored from www.kazierfan.com/themes/medicre/medicre/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 02:17:29 GMT -->

</html>
