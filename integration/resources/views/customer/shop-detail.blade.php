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

<link href="{!! url('css/single-channel.css') !!}" rel="stylesheet">

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
        @include('customer.partials.navbar', ['infos' => $subinfo])
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
                        <div class="row">
                            <!--Start Shop Details Img Box-->
                            <div class="col-xl-6">
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
                            <div class="col-xl-6 ">
                                <div class="shop-details__content">
                                    <div class="title">
                                        <h2> {{ $pro->name }}</h2>
                                    </div>

                                    <div class="shop-details__content-text1">
                                        <h3>{{ $pro->price }}XAF<del>{{ $pro->price }}</del>
                                            <span class="text">-30%</span> <span>(In
                                                stock)</span>
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
                                        <p><b>Photos non contractuelles :</b><br> Les photos des produits affichées ici peuvent ne pas être exactement identiques au produit que vous recevrez. Ceux-ci peuvent être différent en terme de couleur et etc...
                                        <br><b>Frais de livraison :</b><br> Les frais de livraison peuvent varier selon le poids, le volume et la destination de votre commande. Ses frais sont à la charge du client.
                                        </p>
                                        <p><br><b>**** Description ****</b><br>{{$pro->description}}

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
                                                    <button type="submit" ><a>Ajouter au panier</a></button>
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


                        <!--Start Shop Details Tab-->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="shop-details__tab tabs-box">

                                    <div class="shop-details__tab-button">
                                        <ul class="tab-buttons clearfix">
                                            <li data-tab="#description" class="tab-btn active-btn">
                                                <h4>Description</h4>
                                            </li>
                                            <li data-tab="#specifications " class="tab-btn">
                                                <h4>Specifications</h4>
                                            </li>
                                            <li data-tab="#reviews" class="tab-btn">
                                                <h4>Reviews (1)</h4>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="tabs-content">
                                        <!--Start Tab-->
                                        <div class="tab active-tab" id="description">
                                            <div class="shop-details__tab-content-item">
                                                <div class="shop-details__tab-description text-center">
                                                    <div class="text-box1">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus
                                                            qui
                                                            blanditiis praesentium voluptatum deleniti atque corrupti
                                                            quos
                                                            dolores et quas molestias excepturi sint occaecati
                                                            cupiditate non
                                                            provident, similique sunt in culpa qui officia deserunt
                                                            mollitia
                                                            animi, id est laborum et dolorum fuga. Et harum quidem rerum
                                                            facilis
                                                            est et expedita distinctio.</p>
                                                    </div>
                                                    <div class="text-box2">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus
                                                            qui
                                                            blanditiis praesentium voluptatum deleniti atque corrupti
                                                            quos
                                                            dolores et quas molestias excepturi sint occaecati
                                                            cupiditate non
                                                            provident, similique sunt in culpa qui officia deserunt
                                                            mollitia
                                                            animi, id est laborum et dolorum fuga. Et </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Tab-->

                                        <!--Start Tab-->
                                        <div class="tab" id="specifications">
                                            <div class="shop-details__tab-content-item">
                                                <div class="shop-details__tab-specifications">
                                                    <div class="text-box1">
                                                        <p>It is a long established fact that a reader will be
                                                            distracted by the
                                                            readable content of a page when looking at its layout. The
                                                            point of
                                                            using Lorem Ipsum is that it has a more-or-less normal
                                                            distribution
                                                            of letters, as opposed to using 'Content here, content
                                                            here', making
                                                            it look like readable English. Many desktop publishing
                                                            packages and
                                                            web page editors now use Lorem Ipsum as their default model
                                                            text,
                                                        </p>
                                                    </div>
                                                    <div class="text-box2">
                                                        <p>There are many variations of passages of Lorem Ipsum
                                                            available, but
                                                            the majority have suffered alteration in some form, by
                                                            injected
                                                            humour, or randomised words which don't look even slightly
                                                            believable. If you are going to use a passage of Lorem
                                                            Ipsum, you
                                                            need to be sure there isn't anything embarrassing hidden in
                                                            the
                                                            middle of text. All the Lorem Ipsum generators on the
                                                            Internet tend
                                                            to repeat predefined chunks as necessary, making this the
                                                            first true
                                                            generator on the Internet. It uses a dictionary of over 200
                                                            Latin
                                                            words, combined with a handful of model sentence structures,
                                                            to
                                                            generate Lorem Ipsum which looks reasonable.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Tab-->


                                        <!--Start Tab-->
                                        <div class="tab" id="reviews">
                                            <div class="shop-details__tab-content-item style2">

                                                <div class="shop-details__tab-reviews">

                                                    <!--Start Review Box Outer-->
                                                    <div class="review-box-outer">
                                                        <div class="row">
                                                            <!--Start Single Review Box Outer-->
                                                            <div class="col-xl-6 col-lg-6">
                                                                <div class="single-review-box-outer">
                                                                    <div class="single-review-box">
                                                                        <div class="img-box">
                                                                            <img src="{!! url('welcome/assets/images/resources/review-img1.jpg') !!}"
                                                                                alt="#">
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <div class="review-box">
                                                                                <ul>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <h3>sourav ahamed, <span>21 Jul 2023</span>
                                                                            </h3>
                                                                            <p>Indignation and dislike men who are so
                                                                                beguiled
                                                                                and demoralized by the charms of
                                                                                pleasure.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Review Box Outer-->

                                                            <!--Start Single Review Box Outer-->
                                                            <div class="col-xl-6 col-lg-6">
                                                                <div class="single-review-box-outer">
                                                                    <div class="single-review-box">
                                                                        <div class="img-box">
                                                                            <img src="{!! url('welcome/assets/images/resources/review-img2.jpg') !!}"
                                                                                alt="#">
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <div class="review-box">
                                                                                <ul>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                    <li><i class="icon-star1"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <h3>Steven Rich, <span>22 Jul 2023</span>
                                                                            </h3>
                                                                            <p>Indignation and dislike men who are so
                                                                                beguiled
                                                                                and demoralized by the charms of
                                                                                pleasure.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Review Box Outer-->

                                                        </div>
                                                    </div>
                                                    <!--End Review Box Outer-->


                                                    <!--Start Review Form-->
                                                    <div class="review-form text-right-rtl">
                                                        <div class="title-box">
                                                            <h2>Add Your Comments</h2>
                                                        </div>
                                                        <form id="review-form" action="/shop-detail#">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-box">
                                                                        <div class="field-label">Comments</div>
                                                                        <textarea name="fcomments" placeholder="" required=""></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="input-box">
                                                                        <div class="field-label">Name*</div>
                                                                        <input type="text" name="fname"
                                                                            placeholder="" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="input-box">
                                                                        <div class="field-label">Email*</div>
                                                                        <input type="email" name="femail"
                                                                            placeholder="" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="input-box">
                                                                        <div class="field-label">Website</div>
                                                                        <input type="text" name="fwebsite"
                                                                            placeholder="" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="add-rating-box">
                                                                        <div class="add-rating-title">
                                                                            <p>Your Rating</p>
                                                                        </div>
                                                                        <div class="review-box">
                                                                            <ul>
                                                                                <li><i class="icon-star1"></i></li>
                                                                                <li><i class="icon-star1"></i></li>
                                                                                <li><i class="icon-star1"></i></li>
                                                                                <li><i class="icon-star1"></i></li>
                                                                                <li><i class="icon-star1"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="button-box">
                                                                        <div class="left">
                                                                            <button class="thm-btn" type="submit">
                                                                                Submit
                                                                            </button>
                                                                        </div>

                                                                        <div class="right">
                                                                            <div class="checked-box2">
                                                                                <input type="checkbox" name="skipper1"
                                                                                    id="skipper" checked="">
                                                                                <label for="skipper"><span></span>
                                                                                    Save my name, email, and website in
                                                                                    this
                                                                                    browser
                                                                                    for the next time I comment.
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <!--End Review Form-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Tab-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Shop Details Tab-->
                        <div class="col-md-12">
                            <div class="owl-carousel owl-carousel-category">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="sticky-footer">
                <section class="section-padding footer-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="footer-logo mb-4"><a class="logo" href="index.html"><img alt
                                            src="{!! url('img/logo.png') !!}" class="img-fluid"></a></div>
                                <p>86 Petersham town, New South wales Waedll Steet, Australia</p>
                                <p class="mb-0"><a href="#" class="text-dark"><i
                                            class="fas fa-mobile fa-fw"></i> +61
                                        525 240 310</a></p>
                                <p class="mb-0"><a href="#" class="text-dark"><i
                                            class="fas fa-envelope fa-fw"></i>
                                        <span class="__cf_email__"
                                            data-cfemail="b6dfd7dbd9c5d7ded7d8f6d1dbd7dfda98d5d9db">[email&#160;protected]</span></a>
                                </p>
                                <p class="mb-0"><a href="#" class="text-dark"><i
                                            class="fas fa-globe fa-fw"></i>
                                        www.askbootstrap.com</a></p>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <h6 class="mb-4">Company</h6>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <h6 class="mb-4">Features</h6>
                                <ul>
                                    <li><a href="#">Retention</a></li>
                                    <li><a href="#">People</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="#">Infrastructure</a></li>
                                    <li><a href="#">Platform</a></li>
                                    <li><a href="#">Funnels</a></li>
                                    <li><a href="#">Live</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <h6 class="mb-4">Solutions</h6>
                                <ul>
                                    <li><a href="#">Enterprise</a></li>
                                    <li><a href="#">Financial Services</a></li>
                                    <li><a href="#">Consumer Tech</a></li>
                                    <li><a href="#">Entertainment</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Analytics</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <h6 class="mb-4">NEWSLETTER</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <small>It is a long established fact that a reader will be distracted by..</small>
                                <h6 class="mb-2 mt-4">DOWNLOAD APP</h6>
                                <div class="app">
                                    <a href="#"><img alt src="{!! url('img/google.png') !!}"></a>
                                    <a href="#"><img alt src="img/apple.png') !!}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
        </div>

    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.lowbar', ['infos' => $personal])
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
    <script src="{!! url('welcome/assets/vendors/timepicker/timePicker.js') !!}"></script>
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
