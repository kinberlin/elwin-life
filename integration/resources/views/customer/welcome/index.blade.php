@include('customer.welcome.partials.header')

<body>
    <!-- Start Preloader -->
    @include('customer.welcome.partials.preloader')
    <!-- End Preloader -->

    <div class="page-wrapper">

        <!--Start Main Header One-->
        @include('customer.welcome.partials.topbar', ['welcome' => $welcome])
        <!--End Main Header One-->

        <div class="stricky-header stricky-header--one style2 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <iframe src="{{ route('index.mobileslide')}}" class="carousel slide hid" style="width: 100%" height="500"></iframe>
        <!--Start Main Slider Three-->
        <section class="main-slider main-slider-one style3 largescreens">
            <div class="main-slider-one__inner">
                <div class="largescreens owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel nav-style1 dot-style1"
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
                        "navText": "",
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
                    @foreach ($slide as $s)
                        <div class="main-slider-one__single largescreens">
                            <div class="image-layer"
                                style="width:1920px; height:720px; background-image:url({{ $s->src }}) ; justify-content :center">
                            </div>
                            <div class="container">
                                <div class="main-slider-one__content">
                                    <div class="tagline">
                                        <span>{{ $s->min }}
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h2>{{ $s->texte }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--End Main Slider-->
                </div>
            </div>

        </section>
        <!--End Main Slider Three-->

        <!--Start About Two -->
        <section class="about-two about-two--three">
            <div class="shape8 float-bob-y"><img src="{!! url('welcome/assets/images/shapes/about-v3-shape1.png') !!}" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start About Two Img-->
                    <div class="col-xl-5">
                        <div class="about-two__img wow fadeInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms clearfix">
                            <div class="about-two__img-inner clearfix">
                                <img src="{!! url('welcome/assets/images/about/about-v3-img1.jpg') !!}" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--End About Two Img-->

                    <!--Start About Two Content-->
                    <div class="col-xl-7">
                        <div class="about-two__content">
                            <div class="shape5 float-bob-y"></div>
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>Apropos de elwin </h6>
                                </div>
                                <h2 class="sec-title__title"> L'éclosion de l'idée</h2>
                            </div>

                            <div class="about-two__content-text1">
                                <p style="text-align: justify;">dans un monde en quête de progrès et d'égalité, un
                                    groupe de visionnaires réunis autour d'une idée révolutionnaire.
                                    C'est ainsi qu'est née la Fondation Elwin, fruit de l'ambition de jeunes
                                    entrepreneurs déterminés à façonner un avenir économique meilleur pour tous.</p>
                            </div>
                            <br>

                            <div class="about-two__content-text1">
                                <p style="text-align: justify;">Portée par une passion inébranlable et une volonté sans
                                    limites, la Fondation Elwin a commencé son parcours entrepreneurial.
                                    Elle a su mobiliser des ressources, établir des partenariats stratégiques et bâtir
                                    une communauté engagée, prête à soutenir ses efforts.</p>
                            </div>
                            <br>

                            <div class="about-two__content-text1">
                                <p style="text-align: justify;">Au fil du temps, la Fondation Elwin a fait preuve d'une
                                    capacité remarquable à générer un impact positif.
                                    Grâce à des programmes novateurs axés sur l'éducation, l'autonomisation et le
                                    développement économique,
                                    elle a transformé des vies et ouvert de nouvelles perspectives pour les plus
                                    vulnérables.</p>
                            </div>
                            <br>

                            <div class="about-two__content-text1">
                                <p style="text-align: justify;">La Fondation Elwin s'est imposée comme un véritable
                                    moteur de l'innovation. Elle a encouragé l'esprit d'entrepreneuriat chez les jeunes,
                                    stimulé la créativité et soutenu des projets audacieux. En cultivant un écosystème
                                    propice à l'émergence d'idées novatrices, elle a contribué à repousser les limites
                                    du possible.</p>
                            </div>
                        </div>
                    </div>
                    <!--End About Two Content-->
                </div>
            </div>
        </section>
        <!--End About Two -->

        <!--Start Case One -->
        @php($counter = 0)
        @foreach ($channel as $ch)
            <!--Start Events One -->
            @if ($final->where('channel', $ch->id)->count() > 0)
                <section class="events-one events-one--two">
                    <div class="events-one--two__bg" style="background-image: url({!! url('welcome/assets/images/pattern/events-v2-pattern.jpg') !!});"></div>
                    <div class="auto-container">
                        <div class="sec-title text-center">
                            <div class="sec-title__tagline">
                                <h6>les actualités d'aujourd'hui </h6>
                            </div>
                            <h2 class="sec-title__title">les meilleurs information sur {{ $ch->name }}</h2>
                        </div>
                        <div class="row">
                            <!--Start Events One Single-->
                            @foreach ($final as $f)
                                @if ($f->channel == $ch->id)
                                    @php($counter++)
                                    @if ($counter > 7)
                                    @break
                                @endif
                                @if ($f->type == 'video')
                                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="blog-one__single">
                                            <div class="inner"
                                                style="width: 100%; height: 264px; position: relative;">
                                                <video class="video-js" controls preload="auto"
                                                    style=" width: 100%; height: 100%; object-fit: cover;"
                                                    data-setup="{}" controls>
                                                    <source src="{{ $f->cover_image }}" type="video/mp4">
                                                </video>
                                                <div class="blog-one__single-img">

                                                    <ul class="overlay-text">
                                                        <li>
                                                            <p>{{ $f->authors }}.</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="blog-one__single-content" style="width: 100%;">
                                                <div class="white-bg"></div>
                                                <div class="left-bg"></div>
                                                <div class="right-bg"></div>
                                                <h2><a
                                                        href="/iblog/video/{{ $f->id }}">{{ $f->titre }}</a>
                                                </h2>

                                                <div class="blog-one__single-content-bottom">
                                                    <div class="btn-box">
                                                        <a href="/iblog/video/{{ $f->id }}">Details de la
                                                            vidéo <span class="icon-right-arrow21"></span></a>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon-bookmark"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="blog-one__single">
                                            <div class="inner">
                                                <img class="video-js" style="width: 100% ; height:264px"
                                                    src="{{ $f->cover_image }}">
                                                <div class="blog-one__single-img">

                                                    <ul class="overlay-text">
                                                        <li>
                                                            <p>{{ $ch->name }}.</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="blog-one__single-content">
                                                <div class="white-bg"></div>
                                                <div class="left-bg"></div>
                                                <div class="right-bg"></div>
                                                <h2><a
                                                        href="/iblog/article/{{ $f->id }}">{{ $f->titre }}</a>
                                                </h2>

                                                <div class="blog-one__single-content-bottom">
                                                    <div class="btn-box">
                                                        <a href="/iblog/article/{{ $f->id }}">Details sur l'article<span class="icon-right-arrow21"></span></a>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon-bookmark"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                        <!--End Events One Single-->
                    </div>
            </section>
            @php($counter = 0)
        @endif
        <!--End Events One -->
    @endforeach
    <!--End Case One -->

    <!--End Blog One -->
    <section class="gallery-one__bottom style2">
        <div class="auto-container">
            <div class="row">
                <!--Start Gallery One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{!! url('welcome/assets/images/gallery/gallery-v1-img1.jpg') !!}" alt="#" />
                            <div class="text-box">
                                <h2><a href="/formation">Formations</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->

                <!--Start Gallery One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img bg2">
                            <img src="{!! url('welcome/assets/images/gallery/gallery-v1-img2.jpg') !!}" alt="#" />
                            <div class="text-box">
                                <h2><a href="/art">Culture</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->

                <!--Start Gallery One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img bg3">
                            <img src="{!! url('welcome/assets/images/gallery/gallery-v1-img3.jpg') !!}" alt="#" />
                            <div class="text-box">
                                <h2><a href="/jeux">Education</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->

                <!--Start Gallery One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img bg4">
                            <img src="{!! url('welcome/assets/images/gallery/gallery-v1-img4.jpg') !!}" alt="#" />
                            <div class="text-box">
                                <h2><a href="/sante">Medical</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
            </div>
        </div>
    </section>
    @include('customer.welcome.partials.footer', ['welcome' => $welcome, 'links' => $links])
</body>

</html>
