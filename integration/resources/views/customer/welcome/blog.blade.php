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
      <section class="blog-one blog-one--blog">
        <div
          class="blog-one--blog__bg"
          style="
            background-image: url(assets/images/pattern/blog-page-pattern.jpg);
          "
        ></div>
        <div class="container">
          <div class="row">
            <!--Start Blog One Single-->
            @foreach($final as $f)
            @if($f->type === 'article')
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="blog-one__single">
                <div class="blog-one__single-img">
                  <div class="inner">
                    <img src="{{$f->cover_image}}" style="height : 240px" alt="#" />
                  </div>
                  <ul class="overlay-text">
                    <li>
                      <p>{{$f->cats}}</p>
                    </li>
                    <li class="style2">
                      <p>{{$f->fmt_date}}</p>
                    </li>
                  </ul>
                </div>

                <div class="blog-one__single-content">
                  <div class="white-bg"></div>
                  <div class="left-bg"></div>
                  <div class="right-bg"></div>
                  <ul class="meta-box">
                    <li>
                      <div class="icon">
                        <span class="icon-user"></span>
                      </div>
                      <div class="text">
                        <p><a href="/iblog/article/{{$f->id}}">{{$f->authors}}</a></p>
                      </div>
                    </li>

                    <li>
                      <div class="icon">
                        <span class="icon-comment-outline"></span>
                      </div>
                      <div class="text">
                        <p><a href="/iblog/article/{{$f->id}}">{{$f->comments}} Commentaires</a></p>
                      </div>
                    </li>
                  </ul>

                  <h2>
                    <a href="/iblog/article/{{$f->id}}"
                      >{{$f->titre}}</a
                    >
                  </h2>

                  <div class="blog-one__single-content-bottom">
                    <div class="btn-box">
                      <a href="/iblog/article/{{$f->id}}"
                        >Plus de Détails <span class="icon-right-arrow21"></span
                      ></a>
                    </div>
                    <div class="icon-box">
                      <span class="icon-bookmark"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @else
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="blog-one__single">
                <div class="blog-one__single-img">
                  <div class="inner">
                    <img src="{{$f->cover_image}}" style="height : 240px" alt="#" />
                  </div>
                  <ul class="overlay-text">
                    <li>
                      <p>{{$f->cats}}</p>
                    </li>
                    <li class="style2">
                      <p>{{$f->fmt_date}}</p>
                    </li>
                  </ul>
                </div>

                <div class="blog-one__single-content">
                  <div class="white-bg"></div>
                  <div class="left-bg"></div>
                  <div class="right-bg"></div>
                  <ul class="meta-box">
                    <li>
                      <div class="icon">
                        <span class="icon-user"></span>
                      </div>
                      <div class="text">
                        <p><a href="/iblog/video/{{$f->id}}">{{$f->authors}}</a></p>
                      </div>
                    </li>

                    <li>
                      <div class="icon">
                        <span class="icon-comment-outline"></span>
                      </div>
                      <div class="text">
                        <p><a href="/iblog/video/{{$f->id}}">{{$f->comments}} Commentaires</a></p>
                      </div>
                    </li>
                  </ul>

                  <h2>
                    <a href="blog-details.html"
                      >{{$f->titre}}</a
                    >
                  </h2>

                  <div class="blog-one__single-content-bottom">
                    <div class="btn-box">
                      <a href="/iblog/video/{{$f->id}}"
                        >Plus de Détails <span class="icon-right-arrow21"></span
                      ></a>
                    </div>
                    <div class="icon-box">
                      <span class="icon-bookmark"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
            <!--End Blog One Single-->

          </div>
        </div>
      </section>
      <!--End Blog One -->
      <section class="gallery-one__bottom style2">
        <div class="auto-container">
          <div class="row">
            <!--Start Gallery One Single-->
            <div
              class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="gallery-one__single">
                <div class="gallery-one__single-img">
                  <img
                    src="{!! url('welcome/assets/images/gallery/gallery-v1-img1.jpg') !!}"
                    alt="#"
                  />
                  <div class="text-box">
                    <h2><a href="/formation">Formations</a></h2>
                  </div>
                </div>
              </div>
            </div>
            <!--End Gallery One Single-->

            <!--Start Gallery One Single-->
            <div
              class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight"
              data-wow-delay="100ms"
              data-wow-duration="1500ms"
            >
              <div class="gallery-one__single">
                <div class="gallery-one__single-img bg2">
                  <img
                    src="{!! url('welcome/assets/images/gallery/gallery-v1-img2.jpg') !!}"
                    alt="#"
                  />
                  <div class="text-box">
                    <h2><a href="/art">Culture</a></h2>
                  </div>
                </div>
              </div>
            </div>
            <!--End Gallery One Single-->

            <!--Start Gallery One Single-->
            <div
              class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft"
              data-wow-delay="200ms"
              data-wow-duration="1500ms"
            >
              <div class="gallery-one__single">
                <div class="gallery-one__single-img bg3">
                  <img
                    src="{!! url('welcome/assets/images/gallery/gallery-v1-img3.jpg') !!}"
                    alt="#"
                  />
                  <div class="text-box">
                    <h2><a href="/jeux">Education</a></h2>
                  </div>
                </div>
              </div>
            </div>
            <!--End Gallery One Single-->

            <!--Start Gallery One Single-->
            <div
              class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight"
              data-wow-delay="300ms"
              data-wow-duration="1500ms"
            >
              <div class="gallery-one__single">
                <div class="gallery-one__single-img bg4">
                  <img
                    src="{!! url('welcome/assets/images/gallery/gallery-v1-img4.jpg') !!}"
                    alt="#"
                  />
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
        @include('customer.welcome.partials.footer',['welcome' => $welcome, 'links'=>$links])
</body>

</html>
