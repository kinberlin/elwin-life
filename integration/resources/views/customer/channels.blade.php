@include('customer.partials.header')

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
                @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="container-fluid pb-0">
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
                                <h6>Chaînes / Canaux de Publications</h6>
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
        </div>

    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.lowbar', ['infos' => $personal])
    @include('customer.partials.footer')
</body>

</html>
