<!--Start Footer One -->
<footer class="footer-one style2">
    <div class="footer-one__bg" style="background-image: url({!! url('welcome/assets/images/pattern/footer-v1-bg.jpg') !!});"></div>
    <div class="shape1"><img src="{!! url('welcome/assets/images/shapes/footer-v1-shape1.png') !!}" alt="#"></div>
    <div class="shape2"><img src="{!! url('welcome/assets/images/shapes/footer-v1-shape2.png') !!}" alt="#"></div>
    <div class="shape3"><img src="{!! url('welcome/assets/images/shapes/footer-v1-shape3.png') !!}" alt="#"></div>
    <!--Start Footer-->
    <div class="footer">
        <div class="container">

            <div class="footer-one__top">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="footer-one__top-text">
                            <h2>Abonnez-vous à notre newsletter</h2>
                            <p>Recevez les dernières nouvelles autres conseils</p>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="footer-one__top-form">
                            <form class="subscribe-form" action="/login" method="get">
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <button type="submit">
                                    <span class="text">S'abonner</span>
                                    <i class="icon-send-message"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-one__middel">
                <div class="row">

                    <!--Start Footer Widget Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6  wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="footer-widget__single">
                            <div class="footer-widget__single-about">
                                <div class="logo-box">
                                    <a href="index.html"><img src="{!! url('welcome/assets/images/resources/logo-2.png') !!}" alt="#"></a>
                                </div>

                                <div class="footer-widget__single-about-text">
                                    <p>L'histoire entrepreneuriale de la Fondation Elwinelife témoigne de la puissance
                                        de la détermination, de l'innovation et de l'engagement envers une cause plus
                                        grande que soi.
                                    </p>
                                </div>

                                <div class="footer-widget__single-about-btn">
                                    <a class="thm-btn" href="/login">
                                        <span class="txt">Rejoignez nous</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Widget Single-->

                    <!--Start Footer One Right Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-one__single footer-one__single-address">
                            <div class="title">
                                <h3>Address</h3>
                            </div>

                            <ul class="footer-one__single-address-box">
                                <li>
                                    <div class="title-box">
                                        <h3>Addresse</h3>
                                    </div>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-location1"></span>
                                        </div>

                                        <div class="content-box">
                                            <p>{{ $welcome['address'] }}<br></p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="title-box">
                                        <h3>Aide Client</h3>
                                    </div>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-phone"></span>
                                        </div>

                                        <div class="content-box">
                                            <p><a href="tel:{{ $welcome['phone'] }}">{{ $welcome['phone'] }}</a></p>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer One Right Single-->

                    <!--Start Footer One Right Single-->
                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="footer-one__single footer-one__single-explore">
                            <div class="title">
                                <h3>Lien utile et Opportunité</h3>
                            </div>
                            
                                <ul class="footer-one__single-explore-list">
                                    @foreach ($links as $l)
                                    <li><a href="{{ $l['lien'] }}">{{ $l['nom'] }}</a></li>
                                    @endforeach
                                </ul>
                                
                        </div>
                    </div>
                    <!--End Footer One Right Single-->

                    <!--Start Footer One Right Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                        <div class="footer-one__single footer-one__single-post">
                            <div class="title">
                                <h3>Dernier Message </h3>
                            </div>

                            <ul class="footer-one__single-post-box">
                                <li>
                                    <div class="img-box">
                                        <img src="{!! url('welcome/assets/images/footer/footer-v1-img1.jpg') !!}" alt="#">
                                    </div>
                                    <div class="content-box">
                                        <span>12 mars 2023</span>
                                        <p><a href="#">campagnes de marketing longrich</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="img-box">
                                        <img src="{!! url('welcome/assets/images/footer/footer-v1-img2.jpg') !!}" alt="#">
                                    </div>
                                    <div class="content-box">
                                        <span>14 mais 2023</span>
                                        <p><a href="#">Aujourd'hui, la Fondation Elwinelife <br>laisse derrière
                                                elle un héritage durable.</a></p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--End Footer One Right Single-->
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->

    <div class="footer-one__bottom">
        <div class="container">
            <div class="bottom-inner">

                <div class="footer-one__bottom-left">
                    <div class="title-box">
                        <h4>Suivre Les Réseaux Sociaux</h4>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="{{ $welcome['facebook'] }}"><span class="icon-facebook-logo"></span></a></li>
                            <li><a href="{{ $welcome['twitter'] }}"><span class="icon-twitter"></span></a></li>
                            <li><a href="{{ $welcome['linkedin'] }}"><span class="icon-linkedin"></span></a></li>
                            <li><a href="{{ $welcome['instagram'] }}"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="copyright">
                    <p>©2023 <a href="#">Digitech media sarl Droits Réservés</p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--End Footer One-->

</div>
<!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="icon-plus"></i>
        </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{!! url('welcome/assets/images/resources/mobile-nav-logo.png') !!}" alt="" />
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@example.com">info@elwinlife.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:123456789">+237-677-551-747</a>
            </li>
        </ul>
        <div class="mobile-nav__social">
            <a href="index-3.html#" class="fab fa-twitter"></a>
            <a href="index-3.html#" class="fab fa-facebook-square"></a>
            <a href="index-3.html#" class="fab fa-pinterest-p"></a>
            <a href="index-3.html#" class="fab fa-instagram"></a>
        </div>

    </div>
</div>

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form action="index-3.html#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search"></i>
            </button>
        </form>
    </div>
</div>

<a href="index-3.html#" data-target="html" class="scroll-to-target scroll-to-top">
    <i class="icon-down-arrow"></i>
</a>

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

<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>

<!-- Template js -->
<script src="{!! url('welcome/assets/js/custom.js') !!}"></script>
