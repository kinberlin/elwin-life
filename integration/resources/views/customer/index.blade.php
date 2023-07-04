@include('customer.partials.header')

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
                @include('customer.partials.navbar', ['infos' => $subinfo, 'actif'=>1])
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
                                <h6>Nos Chaînes de Publication</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="owl-carousel owl-carousel-category">
                                @foreach ($channels as $c)
                                    <div class="item">
                                        <div class="category-item">
                                            <a href="/channel/{{ $c->id }}">
                                                <img class="img-fluid" src="{{ $c->image }}" alt>
                                                <h6>{{ $c->name }}</h6>
                                                <p>{{ $c->posts }} Publications</p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
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
                                <h6>Publications Récentes</h6>
                            </div>
                        </div>
                        @foreach ($article as $a)
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="play-icon" href="/blog/article/{{ $a->id }}"><i
                                                class="fas fa-play-circle"></i></a>
                                        <a href="/blog/article/{{ $a->id }}"><img class="img-fluid"
                                                src="{{ $a->cover_image }}" style="height: 180px" alt></a>
                                        <div class="time"></div> 
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="/blog/article/{{ $a->id }}">{{ $a->titre }}</a>
                                        </div>
                                        <div class="video-page text-success">
                                            {{ $a->name }} <a title data-placement="top" data-toggle="tooltip"
                                                href="#" data-original-title="Verified"><i
                                                    class="fas fa-check-circle text-success"></i></a>
                                        </div>
                                        <div class="video-view">
                                            @if ($a->month < 1)
                                                &nbsp;<i class="fas fa-calendar-alt"></i>
                                            < 1 Mois @else &nbsp;<i class="fas fa-calendar-alt"></i> Il y
                                                    a {{ $a->month }} Mois
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <hr class="mt-0">
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i>
                                            &nbsp; Top
                                            Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i>
                                            &nbsp;
                                            Viewed</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-fw fa-times-circle"></i>
                                            &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Popular Channels</h6>
                            </div>
                        </div>
                        @foreach ($channels as $c)
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="channels-card">
                                    <div class="channels-card-image">
                                        <a href="/channel/{{ $c->id }}"><img class="img-fluid"
                                                src="{{ $c->image }}" alt></a>
                                        <div class="channels-card-image-btn">
                                            @php
                                                $exist = false;
                                            @endphp
                                            @foreach ($subs as $s)
                                                @if ($s->channel == $c->id)
                                                    <a href="/unsubscribe/{{ $s->id }}"><button type="button"
                                                            class="btn btn-outline-danger btn-sm">Desabonner
                                                            <strong>{{ $c->posts }}</strong></button></a>
                                                    @php
                                                        $exist = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if (!$exist)
                                                <a href="/subscribe/{{ $c->id }}"><button type="button"
                                                        class="btn btn-outline-success btn-sm">S'abonner
                                                        <strong>{{ $c->posts }}</strong></button></a>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="channels-card-body">
                                        <div class="channels-title">
                                            <a href="/channel/{{ $c->id }}">{{ $c->name }}</a>
                                        </div>
                                        <div class="channels-view">
                                            {{ $c->subscribers }} subscribers
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">Digitech media sarl </strong>. All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="#">Digitech</a>
                                </small>
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right">
                            <div class="app">
                                <a href="#"><img alt src="img/google.png"></a>
                                <a href="#"><img alt src="img/apple.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.lowbar', ['infos' => $personal])
    @include('customer.partials.footer')
</body>

</html>
