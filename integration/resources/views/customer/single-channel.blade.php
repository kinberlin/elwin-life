@include('customer.partials.header')
<!-- Fonts -->
<link
    href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/animate/animate.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/animate/custom-animate.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/bxslider/jquery.bxslider.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/fontawesome/css/all.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/jquery-ui/jquery-ui.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/nice-select/nice-select.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/nouislider/nouislider.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/nouislider/nouislider.pips.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/odometer/odometer.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/owl-carousel/owl.carousel.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/owl-carousel/owl.theme.default.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/swiper/swiper.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/timepicker/timePicker.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/tiny-slider/tiny-slider.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/vegas/vegas.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/thm-icons/style.css') !!}">
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/slick-slider/slick.css') !!}">
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/language-switcher/polyglot-language-switcher.css') !!}">
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/reey-font/stylesheet.css') !!}">
<link href="{!! url('css/single-channel.css') !!}" rel="stylesheet">

<body id="page-top">
    @include('customer.partials.topbar',['infos' => $personal])
    <div id="wrapper">
                @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="single-channel-page" id="content-wrapper">
                <div class="single-channel-image">
                    <img class="img-fluid" style="height: 70vh" alt src="{{ $channel->cover_image }}">
                    <div class="channel-profile">
                        <img class="channel-profile-img" alt src="{{ $channel->image }}">
                        <div class="social hidden-xs">
                            Social &nbsp;
                            <a class="fb" href="#">Facebook</a>
                            <a class="tw" href="#">Twitter</a>
                            <a class="gp" href="#">Google</a>
                        </div>
                    </div>
                </div>
                <div class="single-channel-nav">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="channel-brand" href="#">{{ $channel->name }} <span title data-placement="top"
                                data-toggle="tooltip" data-original-title="Verified"><i
                                    class="fas fa-check-circle text-success"></i></span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1">Vidéos <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab2">Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab3">Boutique</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab4">A Propos</a>
                                </li>
                                <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Donate
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                -->
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control form-control-sm mr-sm-1" type="search" id="search-bar"
                                    placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success btn-sm my-2 my-sm-0"><i
                                        class="fas fa-search"></i></button> &nbsp;&nbsp;&nbsp; <button
                                    class="btn btn-outline-danger btn-sm" type="button">Subscribe
                                    <strong>S</strong></button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="container-fluid">
                    <div class="video-block section-padding ">
                        <div class="video-block section-padding tab-contents">
                            <div id="tab1"
                                class="row video-block section-padding tab-pane fade show active flex-grow-1">
                                <div class=" row ">
                                    <div class="col-md-12">
                                        <div class="main-title">
                                            <!--<div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i>
                                                &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i>
                                                &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>-->
                                            <h6>Videos</h6>
                                        </div>
                                    </div>
                                    @foreach ($videos as $v)
                                        <div class="col-xl-3 col-sm-6 mb-3 product">
                                            <div class="video-card">
                                                <div class="video-card-image">
                                                    <a class="play-icon" href="/blog/video/{{ $v->id }}"><i
                                                            class="fas fa-play-circle"></i></a>
                                                    <a href="#"><img class="img-fluid" 
                                                            src="{{ $v->cover_image }}" alt></a>
                                                    <div class="time">{{ $v->duration }}</div>
                                                </div>
                                                <div class="video-card-body">
                                                    <div class="video-title">
                                                        <a
                                                            href="/blog/video/{{ $v->id }}">{{ $v->titre }}</a>
                                                    </div>
                                                    <div class="video-page text-success">
                                                        {{ $v->name }} <a title data-placement="top"
                                                            data-toggle="tooltip" href="#"
                                                            data-original-title="Verified"><i
                                                                class="fas fa-check-circle text-success"></i></a>
                                                    </div>
                                                    <div class="video-view">
                                                        @if ($v->month < 1)
                                                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i>
                                                        < 1 Mois @else 1.8M views &nbsp;<i
                                                                class="fas fa-calendar-alt">
                                                                </i> Il y a {{ $v->month }} Mois
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="tab2" class="row video-block section-padding tab-pane fade flex-grow-1">
                                <div class=" row ">
                                    <div class="col-md-12">
                                        <div class="main-title">
                                            <!--<div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i>
                                                &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i>
                                                &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>-->
                                            <h6>Articles</h6>
                                        </div>
                                    </div>
                                    @foreach ($articles as $a)
                                        <div class="col-xl-3 col-sm-6 mb-3 product">
                                            <div class="video-card" style="width: 250px;">
                                                <div class="video-card-image">
                                                    <a class="play-icon" href="/blog/article/{{ $a->id }}"><i
                                                            class="fas fa-play-circle"></i></a>
                                                    <a href="/blog/article/{{ $a->id }}"><img
                                                            class="img-fluid miniatures" src="{{ $a->cover_image }}" alt></a>
                                                    <div class="time"></div>
                                                </div>
                                                <div class="video-card-body">
                                                    <div class="video-title">
                                                        <a
                                                            href="/blog/article/{{ $a->id }}">{{ $a->titre }}</a>
                                                    </div>
                                                    <div class="video-page text-success">
                                                        {{ $a->name }} <a title data-placement="top"
                                                            data-toggle="tooltip" href="#"
                                                            data-original-title="Verified"><i
                                                                class="fas fa-check-circle text-success"></i></a>
                                                    </div>
                                                    <div class="video-view">
                                                        @if ($a->month < 1)
                                                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i>
                                                        < 1 Mois @else 1.8M views &nbsp;<i
                                                                class="fas fa-calendar-alt">
                                                                </i> Il y a {{ $a->month }} Mois
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--<nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a tabindex="-1" href="#" class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">Voir Plus</a>
                                        </li>
                                    </ul>
                                </nav>-->
                            </div>
                            <div id="tab3" class="row tab-pane fade flex-grow-1">
                                <!--Start Shop Page -->
                                <div class="row">
                                    @foreach ($pro as $p)
                                        <!--Start product display-->
                                        <div class="col-xl-4 col-lg-4 wow animated fadeInUp product"
                                            data-wow-delay="0.1s" >
                                            <div class="shop-page__single" style="width: 280px;">
                                                <div class="shop-page__single-img" >
                                                    <img src="{{ $p->image }}" class="miniatures" alt="#">
                                                    <div class="text">Vente</div>
                                                </div>

                                                <div class="shop-page__single-content">
                                                    <div class="btn-box text-center">
                                                        <a href="/pro-detail/{{ $p->product_id }}">Aperçu</a>
                                                    </div>
                                                    <div class="bottom-text">
                                                        <div class="text-text">
                                                            <h4><a
                                                                    href="/pro-detail/{{ $p->product_id }}">{{ $p->name }}</a>
                                                            </h4>
                                                            <p>XAF{{ $p->price }}</p>
                                                        </div>

                                                        <div class="rating-box">
                                                            <ul>
                                                                <li>
                                                                    <span class="icon-star1"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-star1"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-star1"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-star1"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-star1"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Shop Product Display-->
                                    @endforeach
                                </div>
                            </div>
                            <div id="tab4" class="row tab-pane fade flex-grow-1">
                                <h4>{{ $channel->description }}</h4>
                            </div>
                        </div>
                        <!--<nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a tabindex="-1" href="#" class="page-link">Previous</a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link">Voir Plus</a>
                                </li>
                            </ul>
                        </nav>-->
                    </div>
                </div>


                <footer class="sticky-footer ml-0">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-sm-6">
                                <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">LEVEGI SARL</strong>.
                                    All
                                    Rights Reserved<br>
                                    <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by
                                        <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask
                                            Bootstrap</a>
                                    </small>
                                </p>
                            </div>
                            <div class="col-lg-6 col-sm-6 text-right">
                                <div class="app">
                                    <a href="#"><img alt src="{!! url('img/google.png') !!}"></a>
                                    <a href="#"><img alt src="{!! url('img/apple.png') !!}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>


        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('customer.partials.lowbar',['infos' => $personal])
        @include('customer.partials.footer')
        <script>
            $(document).ready(function() {
                $("#search-bar").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $(".product").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>

</html>
