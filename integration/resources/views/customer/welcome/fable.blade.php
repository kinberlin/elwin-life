@include('customer.welcome.partials.header')

<body>
    <!-- Start Preloader -->
    @include('customer.welcome.partials.preloader')
    <!-- End Preloader -->

    <div class="page-wrapper">

        <!--Start Main Header One-->
        @include('customer.welcome.partials.topbar',['welcome' => $welcome])
        <!--End Main Header One-->

        <div class="stricky-header stricky-header--one style2 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Start Blog One -->
        <section class="blog-one">
            @if (count($final) > 0)
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sec-title__tagline">
                            <h6>les actualités d'aujourd'hui</h6>
                        </div>
                        <h2 class="sec-title__title">Notre riche contenu sur les Fables africains </h2>
                    </div>
                    <div class="row">
                        <!--Start Blog One Single-->

                        @foreach ($final as $f)
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                                <div class="blog-one__single">
                                    <div class="inner">
                                        <div style="position: relative; width: 100%; height: 0; padding-bottom: 75%;">
                                            <img src="{{ $f->cover_image }}"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                        </div>
                                        <div class="blog-one__single-img">

                                            <ul class="overlay-text">
                                                <li>
                                                    <p>{{ $f->authors }}.</p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="blog-one__single-content">
                                        <div class="white-bg"></div>
                                        <div class="left-bg"></div>
                                        <div class="right-bg"></div>
                                        @if ($f->type == 'article')
                                            <h2><a href="/iblog/article/{{ $f->id }}">{{ $f->titre }}</a>
                                            </h2>

                                            <div class="blog-one__single-content-bottom">
                                                <div class="btn-box">
                                                    <a href="/iblog/article/{{ $f->id }}">Détails sur l'article
                                                        <span class="icon-right-arrow21"></span></a>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon-bookmark"></span>
                                                </div>
                                            </div>
                                        @else
                                            <h2><a href="/iblog/video/{{ $f->id }}">{{ $f->titre }}</a></h2>

                                            <div class="blog-one__single-content-bottom">
                                                <div class="btn-box">
                                                    <a href="/iblog/video/{{ $f->id }}">Voir plus ... <span
                                                            class="icon-right-arrow21"></span></a>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon-bookmark"></span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--End Blog One Single-->
                    </div>
                </div>
            @else
                <div class="sec-title text-center">
                    <h2 class="sec-title__title">Rien n'a encore été publier ici. Revennez à un autre moment...</h2>
                </div>
            @endif
        </section>
        <!--End Blog One -->
        @include('customer.welcome.partials.footer',['welcome' => $welcome, 'links'=>$links])
</body>

</html>
