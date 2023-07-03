@include('customer.welcome.partials.header')
<style type="text/css">
    .card-box {
        padding: 20px;
        border-radius: 3px;
        margin-bottom: 30px;
        background-color: #fff;
    }

    .search-result-box .tab-content {
        padding: 30px 30px 10px 30px;
        -webkit-box-shadow: none;
        box-shadow: none;
        -moz-box-shadow: none;
    }

    .search-result-box .search-item {
        padding-bottom: 20px;
        border-bottom: 1px solid #e3eaef;
        margin-bottom: 20px;
    }

    .text-success {
        color: #0acf97 !important;
    }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }

    .btn-custom {
        background-color: #02c0ce;
        border-color: #02c0ce;
    }

    .btn-custom,
    .btn-danger,
    .btn-info,
    .btn-inverse,
    .btn-pink,
    .btn-primary,
    .btn-purple,
    .btn-success,
    .btn-warning {
        color: #fff !important;
    }
</style>

<body>
    <div class="page-wrapper">

        <!--Start Main Header One-->
        @include('customer.welcome.partials.topbar', ['welcome' => $welcome])
        <!--End Main Header One-->

        <div class="stricky-header stricky-header--one style2 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Start Blog One -->
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Résultats de la recherche</h6>
                    </div>
                    @if ($total > 0)
                        <h4 class="sec-title__title">{{ $total }} Résultats trouvés </h4>
                    @else
                        <h4 class="sec-title__title">Aucun Résultats trouvés </h4>
                    @endif
                </div>
                @if ($total > 0)
                    <div class="row">
                        <div class="container mt-5">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Article <span
                                            style=" color:green">{{ count($articles) }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Video
                                        <span style=" color:green">{{ count($videos) }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Produits
                                        <span style=" color:green">{{ count($produits) }}</span></button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if (count($articles) > 0)
                                                @foreach ($articles as $a)
                                                    <div class="search-item">
                                                        <h4 class="mb-1"><a
                                                                href="/iblog/article/{{ $a->id }}">{{ $a->titre }}</a>
                                                        </h4>
                                                        <p class="mb-0 text-muted">{!! $a->bloc1 !!}</p>
                                                    </div>
                                                    <br>
                                                @endforeach
                                            @else
                                                <h4>Aucun résultat trouvé</h4>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if (count($videos) > 0)
                                                @foreach ($videos as $v)
                                                    <div class="search-item">
                                                        <h4 class="mb-1"><a
                                                                href="/iblog/video/{{ $v->id }}">{{ $v->titre }}</a>
                                                        </h4>
                                                        <p class="mb-0 text-muted">{!! $v->bloc1 !!}</p>
                                                    </div>
                                                    <br>
                                                @endforeach
                                            @else
                                                <h4>Aucun résultat trouvé</h4>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                    <!-- List group-->
                                    <ul class="list-group shadow">
                                        <!-- list group item-->
                                        @if (count($produits) > 0)
                                            @foreach ($produits as $p)
                                                <li class="list-group-item">
                                                    <!-- Custom content-->
                                                    <div
                                                        class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                        <div class="media-body order-2 order-lg-1">
                                                            <a href="/shopdetail/{{ $p->product_id }}"
                                                                class="mt-0 font-weight-bold mb-2">
                                                                <h5 class="mt-0 font-weight-bold mb-2">
                                                                    {{ $p->name }}
                                                            </a>
                                                            </h5>
                                                            <p class="font-italic text-muted mb-0 small">
                                                                <a href="/shopdetail/{{ $p->product_id }}"
                                                                    class="mt-0 font-weight-bold mb-2">{{ $p->description }}</a>
                                                            </p>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between mt-1">
                                                                <h6 class="font-weight-bold my-2">{{ $p->price }}
                                                                    XAF
                                                                </h6>
                                                            </div>
                                                        </div><a href="/shopdetail/{{ $p->product_id }}"><img
                                                                src="{{ $p->image }}"
                                                                alt="Generic placeholder image" width="200"
                                                                height="500" class="ml-lg-5 order-1 order-lg-2"></a>
                                                    </div> <!-- End -->
                                                </li> <!-- End -->
                                            @endforeach
                                        @else
                                            <h4>Aucun résultat trouvé</h4>
                                        @endif

                                    </ul> <!-- End -->

                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </section>
        <!--End Blog One -->
        @include('customer.welcome.partials.footer', ['welcome' => $welcome, 'links' => $links])
</body>

</html>
