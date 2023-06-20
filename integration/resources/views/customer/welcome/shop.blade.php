@include('customer.welcome.partials.header')
<body>
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
                        <div class="page-header__bg" style="background-image: url({{$p->image}})">
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

    </section>
    <!--End Main Slider Three-->

        <!--Start Shop Page -->
        <section class="shop-page">
            <div class="container">
                <div class="shop-page__top">
                    <div class="shop-page__top-inner">
                        <div class="shop-page__top-left">
                            <p>Showing 12 of 120 results</p>
                        </div>


                        <div class="shop-page__top-right">
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Default sorting">Default sorting</option>
                                    <option value="1">Default sorting 01</option>
                                    <option value="2">Default sorting 02</option>
                                    <option value="3">Default sorting 03</option>
                                </select>
                            </div>

                            <ul class="product-view-style">
                                <li><a href="/shop"><span class="fa fa-th"></span></a></li>
                                <li><a href="/shop"><span class="fa fa-list"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($pro as $p)
                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{$p->image}}" alt="#">
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

                <ul class="styled-pagination style2 text-center clearfix">
                    <li class="prev"><a href="/shop">prec</a>
                    </li>
                    <li class="active"><a href="/shop">01</a></li>
                    <li><a href="/shop">02</a></li>
                    <li><a href="/shop">03</a></li>
                    <li class="next"><a href="/shop">suivant</a>
                    </li>
                </ul>
            </div>
        </section>
        @include('customer.welcome.partials.footer')
</body>

</html>