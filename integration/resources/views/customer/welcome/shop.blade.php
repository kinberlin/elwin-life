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
        <iframe src="{{ route('index.mobilepub')}}" class="carousel slide" style="width: 100%" height="500"></iframe>
        <!--<section class="main-slider main-slider-one style3 largescreens">
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
                        "navText":  "",
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
                    @foreach ($pubs as $p)
                        <div class="main-slider-one__single largescreens">
                            <div class="page-header__bg" style="background-image: url({{ $p->image }}); height:300px; position : relative">                       
                                <img src="{{$p->image}}" style="" alt="C'est la Pub" height="300"/>
                            </div>
                            
                            <div class="container">
                                <div class="page-header__inner text-center">
                                    <h2>{{ $p->description }}</h2>
                                    <ul class="thm-breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li><span>-</span></li>
                                        <li><a href="/shop">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>-->
        <!--End Main Slider Three-->

        <!--Start Shop Page -->
        <section class="shop-page">
            <div class="container">
                <div class="shop-page__top">
                    <div class="shop-page__top-inner">
                        <div class="shop-page__top-left">
                            <p>Showing {{ count($pro) }} of {{ count($pro) }} results</p>
                        </div>


                        <div class="shop-page__top-right">
                            <div class="select-box">
                                <select class="wide" id="my-select">
                                    @foreach ($cat as $c)
                                        <option value="{{ $c->category_id }}">{{ $c->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="my-div">
                    @foreach ($pro as $p)
                        <!--Start Shop Page Single-->
                        <div class="{{ $p->category_id }} col-xl-4 col-lg-4 wow animated fadeInUp "
                            data-wow-delay="0.1s">
                            <div class="shop-page__single">
                                <div class="shop-page__single-img">
                                    <img src="{{ $p->image }}" style="height : 240px" alt="#">
                                    <div class="text">Sale</div>
                                </div>

                                <div class="shop-page__single-content">
                                    <div class="btn-box text-center">
                                        <a href="/shopdetail/{{ $p->product_id }}">Aperçu </a>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="text-text">
                                            <h4><a href="/shopdetail/{{ $p->product_id }}">{{ $p->name }}</a></h4>
                                            <p>XAF{{ $p->price }}</p>
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
                    {{ $pro->links('customer.partials.custom-pagination') }}
                </ul>
            </div>
        </section>
        <script>
            const mySelect = document.getElementById('my-select');

            mySelect.addEventListener('change', function() {
                const index = mySelect.selectedIndex;
                const selectedOption = mySelect.options[index];
                const selectedValue = selectedOption.value;
                console.log(`Selected option value: ${selectedValue}`);
                filterDiv(selectedValue);
            });

            function filterDiv(filter) {
                const divs = document.querySelectorAll('#my-div > div');
                console.log(filter);
                divs.forEach(div => {
                    if (div.classList.contains(filter)) {
                        div.style.display = 'block';
                    } else {
                        div.style.display = 'none';
                    }
                });
            }
        </script>
        @include('customer.welcome.partials.footer',['welcome' => $welcome, 'links'=>$links])

</body>

</html>
