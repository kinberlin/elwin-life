@include('customer.partials.header')
<!-- Fonts -->
<style>
    @media (min-width: 768px) {
  .my-div {
    width: 100vh;
  }
}
</style>
<link
    href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/animate/animate.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/animate/custom-animate.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/bxslider/jquery.bxslider.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/fontawesome/css/all.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/nice-select/nice-select.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/nouislider/nouislider.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/nouislider/nouislider.pips.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/odometer/odometer.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/owl-carousel/owl.carousel.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/owl-carousel/owl.theme.default.min.css') !!}" />
<link rel="stylesheet" href="{!! url('welcome/assets/vendors/swiper/swiper.min.css') !!}" />

<link href="{!! url('css/single-channel.css') !!}" rel="stylesheet">

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
        @include('customer.partials.navbar', ['infos' => $subinfo, 'actif'=>6])
        <div id="content-wrapper">
            <div class="container-fluid pb-0">
                @include('customer.partials.mobile-search')
                <div class="top-category section-padding mb-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp;
                                            Top
                                            Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i>
                                            &nbsp;
                                            Viewed</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-fw fa-times-circle"></i>
                                            &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Détail de Produit</h6>
                            </div>
                        </div>
                        <div class="row" >
                            <!--Start Shop Details Img Box-->
                            <div class="col-xl-6 my-div">
                                <div class="shop-details__img-box">
                                    <div class="shop-details__img-box-inner">

                                        <div class="shop-details__img-box-thumb">
                                            <div class="swiper-container" id="shop-details-one__thumb">
                                                <div class="swiper-wrapper">
                                                    @if ($pro->image !== null)
                                                        <div class="swiper-slide">
                                                            <div class="shop-details__img-box-thumb-img">
                                                                <img src="{{ $pro->image }}" alt="#">
                                                            </div>
                                                        </div><!-- /.swiper-slide -->
                                                    @endif
                                                    @if ($pro->image1 !== null)
                                                        <div class="swiper-slide">
                                                            <div class="shop-details__img-box-thumb-img">
                                                                <img src="{{ $pro->image1 }}" alt="#">
                                                            </div>
                                                        </div><!-- /.swiper-slide -->
                                                    @endif
                                                    @if ($pro->image2 !== null)
                                                        <div class="swiper-slide">
                                                            <div class="shop-details__img-box-thumb-img">
                                                                <img src="{{ $pro->image2 }}" alt="#">
                                                            </div>
                                                        </div><!-- /.swiper-slide -->
                                                    @endif
                                                    @if ($pro->image3 !== null)
                                                        <div class="swiper-slide">
                                                            <div class="shop-details__img-box-thumb-img">
                                                                <img src="{{ $pro->image3 }}" alt="#">
                                                            </div>
                                                        </div><!-- /.swiper-slide -->
                                                    @endif
                                                </div>
                                            </div>

                                        </div>

                                        <div class="shop-details__img-box-img">
                                            <div class="slider-container">
                                                <div class="slider">
                                                    <div class="slides">
                                                        @if ($pro->image !== null)
                                                            <img src="{{ $pro->image }}">
                                                        @endif
                                                        @if ($pro->image1 !== null)
                                                            <img src="{{ $pro->image1 }}">
                                                        @endif
                                                        @if ($pro->image2 !== null)
                                                            <img src="{{ $pro->image2 }}">
                                                        @endif
                                                        @if ($pro->image3 !== null)
                                                            <img src="{{ $pro->image3 }}">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="swip-controls">
                                                    <button class="prev">&#10094;</button>
                                                    <button class="next">&#10095;</button>
                                                </div>
                                                <div class="pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Shop Details Img Box-->

                            <!--Start Shop Details Content-->
                            <div class="col-xl-6">
                                <br>
                                <br>
                                <div class="shop-details__content">
                                    <div class="title">
                                        <h2> {{ $pro->name }}</h2>
                                    </div>

                                    <div class="shop-details__content-text1">
                                        <h3>{{ $pro->price }}XAF
                                        </h3>
                                    </div>

                                    <div class="shop-details__review">
                                        <ul>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li>
                                                <p>(1 Customer Review)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="shop-details__content-text2">
                                        <p><b>Frais de livraison :</b><br> Les frais de livraison peuvent varier
                                            selon le poids, le volume et la destination de votre commande. Ses frais
                                            sont à la charge du client.
                                        </p>
                                        <p><br><b>**** Description ****</b><br>{{ $pro->description }}

                                            <!--<ul>
                                            <li>
                                                <p> <span class="icon-tick"></span> Excellent audio performance</p>
                                            </li>

                                            <li>
                                                <p> <span class="icon-tick"></span>Lorem ipsum available, but the
                                                    majority have
                                                    suffered.</p>
                                            </li>
                                        </ul>-->
                                    </div>

                                    <div class="shop-details__content-text3">
                                        <form method="post" action="/addwish">
                                            @csrf
                                            <div class="title">
                                                <p>Quantité</p>
                                            </div>
                                            <div class="inner">

                                                <div class="product-quantity">
                                                    <div class="product-quantity-box">

                                                        <div class="input-box">
                                                            <input class="quantity-spinner" type="text"
                                                                value="1" min="1" name="quantity">
                                                            <input type="hidden" value="{{ $pro->product_id }}"
                                                                name="id">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="btn-box">
                                                    <button type="submit"><a>Ajouter au panier</a></button>
                                                </div>

                                                <div class="icon-box">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="shop-details__content-text4">
                                        <ul>
                                            <li>
                                                <div class="text">
                                                    <p> <i class="icon-tick"></i> <span>Livraison : </span>
                                                        {{ $pro->delivery_period }} jours
                                                        au Cameroun</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Shop Details Content-->
                        </div>

                        <div class="col-md-12">
                            <div class="owl-carousel owl-carousel-category">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">Digitech media sarl </strong>. All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="#">Digitech</a>
                                </small>
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right">
                            <div class="app">
                                <a href="#"><img alt src="img/google.png"></a>
                                <a href="#"><img alt src="img/apple.png"></a>
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
    <script src="{!! url('welcome/assets/vendors/jquery/jquery-3.6.0.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/bxslider/jquery.bxslider.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/circleType/jquery.circleType.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/circleType/jquery.lettering.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/isotope/isotope.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-appear/jquery.appear.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-migrate/jquery-migrate.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-ui/jquery-ui.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-validate/jquery.validate.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/nice-select/jquery.nice-select.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/nouislider/nouislider.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/odometer/odometer.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/owl-carousel/owl.carousel.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/parallax/parallax.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/swiper/swiper.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/tiny-slider/tiny-slider.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/typed-2.0.11/typed-2.0.11.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/vegas/vegas.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/wnumb/wNumb.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/wow/wow.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/language-switcher/jquery.polyglot.language.switcher.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jarallax/jarallax.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/slick-slider/slick.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') !!}"></script>
    <script src="{!! url('welcome/assets/vendors/progress-bar/knob.js') !!}"></script>

    <script>
        const slider = document.querySelector(".slider");
        const slides = slider.querySelector(".slides");
        const prevBtn = document.querySelector(".prev");
        const nextBtn = document.querySelector(".next");
        const pagination = document.querySelector(".pagination");
        const slideCount = slides.querySelectorAll("img").length;
        const slideHeight = slider.clientHeight;
        let slideIndex = 0;

        // Set slider height and slide positions
        slides.style.height = `${slideCount * slideHeight}px`;
        slides.style.transform = `translateY(-${slideIndex * slideHeight}px)`;

        // Create pagination buttons
        for (let i = 0; i < slideCount; i++) {
            const button = document.createElement("button");
            button.addEventListener("click", () => {
                slideIndex = i;
                updateSlides();
            });
            pagination.appendChild(button);
        }

        updateSlides();

        function updateSlides() {
            // Update slide positions
            slides.style.transform = `translateY(-${slideIndex * slideHeight}px)`;

            // Update pagination
            pagination.querySelectorAll("button").forEach((button, i) => {
                if (i === slideIndex) {
                    button.classList.add("active");
                } else {
                    button.classList.remove("active");
                }
            });
        }

        prevBtn.addEventListener("click", () => {
            slideIndex = (slideIndex - 1 + slideCount) % slideCount;
            updateSlides();
        });

        nextBtn.addEventListener("click", () => {
            slideIndex = (slideIndex + 1) % slideCount;
            updateSlides();
        });

        function thmSwiperInit() {
            // swiper slider
            if ($(".thm-swiper__slider").length) {
                $(".thm-swiper__slider").each(function() {
                    let elm = $(this);
                    let options = elm.data('swiper-options');
                    let thmSwiperSlider = new Swiper(elm, options);
                });
            }
        }
        $(window).on("load", function() {
            thmSwiperInit();
        });


        // ===Shop Details One Thumb Carousel===
        if ($("#shop-details-one__thumb").length) {
            let testimonialsThumb = new Swiper("#shop-details-one__thumb", {
                slidesPerView: 3,
                spaceBetween: 10,
                speed: 1400,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                loop: true,
                "navigation": {
                    "nextEl": "#shop-details-thumb__swiper-button-next",
                    "prevEl": "#shop-details-thumb__swiper-button-prev"
                },
                autoplay: {
                    delay: 5000
                }
            });

            let testimonialsCarousel = new Swiper("#shop-details-one__carousel", {
                loop: true,
                speed: 1400,
                slidesPerView: 1,
                autoplay: {
                    delay: 5000
                },
                "navigation": {
                    "nextEl": "#shop-details-top__swiper-button-next",
                    "prevEl": "#shop-details-top__swiper-button-prev"
                },

            });

        }
    </script>

</body>

</html>
