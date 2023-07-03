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
<link href="{!! url('css/single-channel.css') !!}" rel="stylesheet">

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
        @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="container-fluid pb-0">
                <div class="top-category section-padding mb-4">
                        <section class="blog-one">
                            <div class="container">
                                <div class="sec-title text-center">
                                    <div class="sec-title__tagline">
                                        <h6>Résultats de la recherche</h6>
                                    </div>
                                    @if ($total > 0)
                                        <h4 class="sec-title__title">{{ $total }} Résultats trouvés </h4>
                                    @else
                                        <h4 class="sec-title__title">Aucun Résultats trouvés </h4>
                                    @endif
                                </div>
                                @if ($total > 0)
                                    <div class="row">
                                        <div class="container mt-5">
                                            <ul class="nav nav-tabs card-header-tabs">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" href="#act1"
                                                    data-toggle="tab" role="tab">Article <span
                                                            style=" color:green">{{ count($articles) }}</span></button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" href="#act2"
                                                    data-toggle="tab" role="tab">Video
                                                        <span style=" color:green">{{ count($videos) }}</span></button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="contact-tab" href="#act3"
                                                    data-toggle="tab" role="tab">Produits
                                                        <span style=" color:green">{{ count($produits) }}</span></button>
                                                </li>
                                            </ul>
                                            <!--<div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                    aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            @if (count($articles) > 0)
                                                                @foreach ($articles as $a)
                                                                    <div class="search-item">
                                                                        <h4 class="mb-1"><a
                                                                                href="/iblog/article/{{ $a->id }}">{{ $a->titre }}</a>
                                                                        </h4>
                                                                        <p class="mb-0 text-muted">
                                                                            {!! $a->bloc1 !!}</p>
                                                                    </div>
                                                                    <br>
                                                                @endforeach
                                                            @else
                                                                <h4>Aucun résultat trouvé</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                                    aria-labelledby="profile-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            @if (count($videos) > 0)
                                                                @foreach ($videos as $v)
                                                                    <div class="search-item">
                                                                        <h4 class="mb-1"><a
                                                                                href="/iblog/video/{{ $v->id }}">{{ $v->titre }}</a>
                                                                        </h4>
                                                                        <p class="mb-0 text-muted">
                                                                            {!! $v->bloc1 !!}</p>
                                                                    </div>
                                                                    <br>
                                                                @endforeach
                                                            @else
                                                                <h4>Aucun résultat trouvé</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                                    aria-labelledby="contact-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            @if (count($produits) > 0)
                                                                @foreach ($produits as $p)
                                                                    <div class="search-item">
                                                                        <h4 class="mb-1"><a
                                                                                href="/shopdetail/{{ $p->product_id }}">{{ $p->name }}</a>
                                                                        </h4>
                                                                        <p class="mb-0 text-muted">
                                                                            {!! $p->description !!}</p>
                                                                    </div>
                                                                    <br>
                                                                @endforeach
                                                            @else
                                                                <h4>Aucun résultat trouvé</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="act1">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            @if (count($articles) > 0)
                                                                @foreach ($articles as $a)
                                                                    <div class="search-item">
                                                                        <h4 class="mb-1"><a
                                                                                href="/blog/article/{{ $a->id }}">{{ $a->titre }}</a>
                                                                        </h4>
                                                                        <p class="mb-0 text-muted">{!! $a->bloc1 !!}</p>
                                                                    </div>
                                                                    <br>
                                                                @endforeach
                                                            @else
                                                                <h4>Aucun résultat trouvé</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="act2">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            @if (count($videos) > 0)
                                                                @foreach ($videos as $v)
                                                                    <div class="search-item">
                                                                        <h4 class="mb-1"><a
                                                                                href="/blog/video/{{ $v->id }}">{{ $v->titre }}</a>
                                                                        </h4>
                                                                        <p class="mb-0 text-muted">{!! $v->bloc1 !!}</p>
                                                                    </div>
                                                                    <br>
                                                                @endforeach
                                                            @else
                                                                <h4>Aucun résultat trouvé</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="act3">
                                                    <div
                                                    class="card-body border border-top-0 rounded-bottom">
                                                    <div
                                                        class="d-sm-flex justify-content-around">
                                                        <label
                                                            class="btn btn-dark d-block d-flex justify-content-center">
                                                            <input type="radio"
                                                                name="payment" value="Livraison" id="option3"
                                                                class="mrg-ct mr-2">
                                                            <p class="int-chagne">A la Livraison
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <h5 class="card-title mt-3">Pensez à vérifier l'état de vos commandes constamment.</h5>
                                                    <p class="card-text text-danger">Vous serez avisé du jour de la livraison.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endif
                            </div>
       
                    <hr>
                </div>
                <footer class="sticky-footer ml-0">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-sm-6">
                                <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">Digitech media
                                        sarl </strong>.
                                    All
                                    Rights Reserved<br>
                                    <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by
                                        <a class="text-primary" target="_blank" href="#">Digitech</a>
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
        @include('customer.partials.lowbar', ['infos' => $personal])
        @include('customer.partials.footer')
        <script>
            $(document).ready(function() {
                // Show the first step by default
                $('.tab-pane:first-child').addClass('in active');
            });
        </script>
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
