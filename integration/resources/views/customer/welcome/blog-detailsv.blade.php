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


        <!--Start Page Header-->
        <!--
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            
            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>Blog Details</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </section>-->
        <!--End Page Header-->




        <!--Start Blog Details -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <!--Start Blog Details Content-->
                    <div class="col-xl-8">
                        <div class="blog-details__content">
                            <!--Start Blog List Single-->
                            <div class="blog-list__single">
                                <div class="">
                                    <div class="inner" style="width: 100%; height: 400px; position: relative;">
                                        <video class="video-js" style=" position: absolute; width: 100%; height: 100%; object-fit: cover;" controls preload="auto" data-setup="{}" controls>
                                        <source src="{{ $video->video }}" style="width : 100vh; height:100vh" type="video/mp4">
                                    </video>
                                    </div>
                                    <ul class="overlay-text">
                                        <li>
                                            <p>{{ $video->authors }}</p>
                                        </li>
                                        <li class="style2">
                                            <p>{{ $video->fmt_date }}</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="blog-list__single-content">
                                    <div class="white-bg"></div>

                                    <div class="blog-list__single-content-top">
                                        <ul class="meta-box">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-user"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">{{ $video->name }}</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment-outline"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="#">12 Commentaires</a></p>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="icon-box">
                                            <span class="icon-bookmark"></span>
                                        </div>
                                    </div>


                                    <div class="blog-list__single-content-bottom">
                                        <h2><a href="#">{{ $video->titre }}</a>
                                        </h2>
                                        <div id="editor">
                                            {!! $video->bloc1 !!}
                                        </div>

                                    </div>
                                    <div class="blog-details__content-tag">
                                        <div class="title-box">
                                            <h3>Post Tags:</h3>
                                        </div>

                                        <div class="tag-list">
                                            @foreach ($tag as $t)
                                                <a href="#">{{ $t->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @if (count($recom) > 0)
                                        <div class="blog-details__content-text-box4">
                                            @if (count($recom) > 1)
                                                <div class="single-content">
                                                    <div class="icon-box">
                                                        <a href="/iblog/video/{{ $recom[0]->id }}"><span
                                                                class="icon-right-arrow2"></span></a>
                                                    </div>

                                                    <div class="text-box">
                                                        <h4><a
                                                                href="/iblog/video/{{ $recom[0]->id }}">{{ $recom[0]->titre }}</a>
                                                        </h4>
                                                    </div>
                                                </div>

                                                <div class="single-content style2">
                                                    <div class="text-box">
                                                        <h4>
                                                            <a href="/iblog/video/{{ $recom[1]->id }}">
                                                                {{ $recom[1]->titre }}</a>
                                                        </h4>
                                                    </div>

                                                    <div class="icon-box">
                                                        <a href="/iblog/video/{{ $recom[1]->id }}"><span
                                                                class="icon-right-arrow21"></span></a>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (count($recom) == 1)
                                                <div class="single-content style2">
                                                    <div class="text-box">
                                                        <h4>
                                                            <a href="/iblog/video/{{ $recom[0]->id }}">
                                                                {{ $recom[0]->titre }}</a>
                                                        </h4>
                                                    </div>

                                                    <div class="icon-box">
                                                        <a href="/iblog/video/{{ $recom[0]->id }}"><span
                                                                class="icon-right-arrow21"></span></a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="comment-one">
                                        <h2 class="comment-one__title">Comments ({{count($comments)}})</h2>
                                        @foreach($comments as $c)
                                        <div class="comment-one__single">
                                            <div class="comment-one__single-inner">
                                                <div class="comment-one__image">
                                                    <img src="{{$c->image}}" alt="#">
                                                </div>

                                                <div class="comment-one__content">
                                                    <div class="top-box">
                                                        <div class="text-box">
                                                            <h3>{{$c->firstname}}</h3>
                                                        </div>
                                                    </div>

                                                    <div class="bottom-box">
                                                        <p>{{$c->message}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--End Blog List Single-->
                        </div>
                    </div>
                    <!--End Blog Details Content-->
                </div>
            </div>
        </section>
        <!--End Blog Details -->
        @include('customer.welcome.partials.footer',['welcome' => $welcome, 'links'=>$links])
        <script>
            var qlEditorDiv = document.querySelector('.ql-editor');
            qlEditorDiv.setAttribute('contenteditable', 'false');
            var input = document.querySelector('input[data-formula][data-link][data-video]');
            input.remove();

            var div = document.querySelector('div.ql-clipboard[tabindex="-1"][contenteditable="true"]');
            div.remove();
        </script>
</body>

</html>
