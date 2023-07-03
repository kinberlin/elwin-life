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
                @include('customer.partials.navbar', ['infos' => $subinfo, 'actif'=>6])
        <div id="content-wrapper">
            <div class="container-fluid pb-0">
                <div class="top-mobile-search">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="mobile-search">
                                <div class="input-group">
                                    <input type="text" placeholder="Search for..." class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="top-category section-padding mb-4">
                    <!--Start Shop Page -->
                    <div class="row">
                        @foreach ($pro as $p)
                            <!--Start product display-->
                            <div class="modal fade" id="cartModal{{ $p->product_id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form method="post" action="/addwish">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Ajoutez {{ $p->name }} au panier ?</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Quantité :
                                                <input type="number" value="1" name="quantity" min="1">
                                                <input type="hidden" value="{{ $p->product_id }}" name="id">
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Annuler</button>
                                                <button class="btn btn-primary" type="submit"
                                                    >Ajouter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 wow animated fadeInUp product" data-wow-delay="0.1s">
                                <div class="shop-page__single">
                                    <div class="shop-page__single-img">
                                        <img src="{{ $p->image }}" style="width:100%; height:240px" alt="#">
                                        <div class="text">Vente</div>
                                    </div>

                                    <div class="shop-page__single-content">
                                        <div class="btn-box text-center">
                                            <a href="/pro-detail/{{ $p->product_id }}">Aperçu</a>
                                        </div>
                                        <div class="bottom-text">
                                            <div class="text-text">
                                                <h4><a href="/pro-detail/{{ $p->product_id }}">{{ $p->name }}</a>
                                                </h4>
                                                <p>XAF{{ $p->price }}</p>
                                            </div>

                                            <div class="rating-box">
                                                <ul>
                                                    <li>
                                                        <span><i class="fas fa-fw fa-star"></i></i></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-fw fa-star"></i></i></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-fw fa-star"></i></i></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-fw fa-star"></i></i></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-fw fa-star"></i></span>
                                                    </li>
                                                    <li data-toggle="modal" data-target="#cartModal{{ $p->product_id }}">
                                                        <span style="color: green">+<i
                                                                class="fas fa-shopping-cart fa-fw"></i></span>
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
                    <ul class="styled-pagination style2 text-center clearfix">
                        {{ $pro->links('customer.partials.custom-pagination') }}
                    </ul>
                    <!-- End shop page -->
                </div>
                <hr>
            </div>
            <footer class="sticky-footer ml-0">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">Digitech media sarl </strong>.
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
