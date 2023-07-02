@include('customer.welcome.partials.header')

<body>
    <!-- Start Preloader -->
    <!-- Start Preloader -->
    @include('customer.welcome.partials.preloader')
    <!-- End Preloader -->

    <div class="page-wrapper">

        <!--Start Main Header One-->
        @include('customer.welcome.partials.topbar')
        <!--End Main Header One-->

        <div class="stricky-header stricky-header--one style2 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <section class="main-slider main-slider-one style3">
            <div class="main-slider-one__inner">
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel nav-style1 dot-style1"
                    data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 0,
                        "nav": true,
                        "dots": true,
                        "animateOut": "slideOutDown",
                        "animateIn": "fadeIn",
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-arrow-right1\"></span>","<span class=\"icon-arrow-right\"></span>"],
                        "responsive": {
                        "0": {
                        "items": 1
                        },
                        "768": {
                        "items": 1
                        },
                        "992": {
                        "items": 1
                        },
                        "1200": {
                        "items": 1
                        }
                        }
                        }'>
                                            <!--Start Main Slider-->
                    @foreach ($pubs as $p)
                    <div class="main-slider-one__single">
                        <div class="page-header__bg">
                            <img src="{{$p->image}}" style="width: 100%; max-width: 100%;
                             background-size: cover">
                        </div>

                        <div class="container">
                            <div class="page-header__inner text-center">
                                <h2>{{$p->description}}</h2>
                                <ul class="thm-breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li><span>-</span></li>
                                    <li><a href="/shop">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Main Slider-->
            </div>
        </div>


        <!--Start Shop Details-->
        <section class="shop-details">
            <div class="container">
                <div class="row">
                    <!--Start Shop Details Img Box-->
                    <div class="col-xl-6">
                        <div class="shop-details__img-box">
                            <div class="shop-details__img-box-inner">

                                <div class="shop-details__img-box-thumb">
                                    <div class="swiper-container" id="shop-details-one__thumb">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="shop-details__img-box-thumb-img">
                                                    <img src="{{ $pro->image }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="shop-details__img-box-thumb-img">
                                                    <img src="{{ $pro->image1 }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="shop-details__img-box-thumb-img">
                                                    <img src="{{ $pro->image2 }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="shop-details__img-box-thumb-img">
                                                    <img src="{{ $pro->image3 }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                        </div>
                                    </div>

                                </div>

                                <div class="shop-details__img-box-img">
                                    <div class="swiper-container" id="shop-details-one__carousel">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="img-box">
                                                    <img src="{{ $pro->image }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="img-box">
                                                    <img src="{{ $pro->image1 }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="img-box">
                                                    <img src="{{ $pro->image2 }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="img-box">
                                                    <img src="{{ $pro->image3 }}" alt="#">
                                                </div>
                                            </div><!-- /.swiper-slide -->

                                        </div>
                                    </div>

                                    <div class="shop-details-top__nav">
                                        <div class="swiper-button-prev" id="shop-details-top__swiper-button-next">
                                            <i class="icon-arrow-right angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next" id="shop-details-top__swiper-button-prev">
                                            <i class="icon-arrow-right1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Details Img Box-->


                    <!--Start Shop Details Content-->
                    <div class="col-xl-6 ">
                        <div class="shop-details__content">
                            <div class="title">
                                <h2>{{ $pro->name }}</h2>
                            </div>

                            <div class="shop-details__content-text1">
                                <h3>XAF {{ $pro->price }}<span>(In stock)</span>
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
                                        <p>({{$comments}} Commentaire)</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="shop-details__content-text2">
                                <p>{{ $pro->description }}</p>


                            </div>

                            <div class="shop-details__content-text3">
                                <div class="title">
                                    <p>Quantity</p>
                                </div>
                                <div class="inner">
                                    <div class="product-quantity">
                                        <div class="product-quantity-box">
                                            <div class="input-box">
                                                <input class="quantity-spinner" type="text" value="1"
                                                    name="quantity">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-box">
                                        <a href="/pro-detail/{{$pro->product_id}}">Commander</a>
                                    </div>

                                    <div class="icon-box">
                                        <span class="icon-heart"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="shop-details__content-text4">
                                <ul>
                                    <li>
                                        <div class="text">
                                            <p> <i class="icon-tick"></i> <span>Durée de Livraison : {{$pro->delivery_period}} Jours</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <p> <i class="icon-tick"></i> <span>Livraisons :</span>
                                                Au frais du Client</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="shop-details__content-social-links">
                                <div class="title">
                                    <h4>Share:</h4>
                                </div>

                                <ul>
                                    <li>
                                        <a href="/shop-detail#"><span class="fab fa-facebook"></span></a>
                                    </li>

                                    <li>
                                        <a href="/shop-detail#"><span class="fab fa-linkedin"></span></a>
                                    </li>

                                    <li>
                                        <a href="/shop-detail#"><span class="fab fa-pinterest-p"></span></a>
                                    </li>

                                    <li>
                                        <a href="/shop-detail#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Details Content-->
                </div>
            </div>
        </section>
        <br>
                    <br>
        <!--End Shop Details-->


        <!--Start Shop Page -->
        <section class="shop-page shop-page--shop-details">
            <div class="container">
                <div class="title-box">
                    <h2>Autres Suggestions</h2>
                </div>
                <div class="row">
                    @foreach($recom as $p)
                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{$p->image}}" style="height : 240px"  alt="#">
                                <div class="text">Sale</div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="btn-box text-center">
                                    <a href="/shopdetail/{{$p->product_id}}">Aperçu </a>
                                </div>
                                <div class="bottom-text">
                                    <div class="text-text">
                                        <h4><a href="/shopdetail/{{$p->product_id}}">{{$p->name}}</a></h4>
                                        <p>XAF{{$p->price}}</p>
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
                    <!--End Shop Page Single-->
                    @endforeach
                </div>
            </div>
        </section>
        @include('customer.welcome.partials.footer',['welcome' => $welcome, 'links'=>$links])
</body>

</html>
