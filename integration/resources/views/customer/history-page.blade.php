@include('customer.partials.header')
<body id="page-top">
    @include('customer.partials.topbar',['infos' => $personal])
    <div id="wrapper">
                @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="container-fluid">
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
                                            &nbsp; Top Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i>
                                            &nbsp; Viewed</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Watch History</h6>
                            </div>
                        </div>
                        @foreach($his as $h)
                        @if($h->type === 'video')
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card history-video">
                                <div class="video-card-image">
                                    <a class="video-close" href="blog/article/{{$h->id}}"><i class="fas fa-times-circle"></i></a>
                                    <a class="play-icon" href="blog/article/{{$h->id}}"><i class="fas fa-play-circle"></i></a>
                                    <a href="blog/article/{{$h->id}}"><img class="img-fluid" src="{{$h->cover_image}}" alt></a>
                                    <div class="time">{{$h->duration}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$h->duration}}</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="blog/article/{{$h->id}}">{{$h->titre}}</a>
                                    </div>
                                    <div class="video-page text-success">
                                    {{$h->authors}} <a title data-placement="top" data-toggle="tooltip" href="blog/article/{{$h->id}}"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        {{$h->cats}} &nbsp;<i class="fas fa-calendar-alt"></i> {{$h->fmt_date}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card history-video">
                                <div class="video-card-image">
                                    <a class="video-close" href="blog/video/{{$h->id}}"><i class="fas fa-times-circle"></i></a>
                                    <a class="play-icon" href="blog/video/{{$h->id}}"><i class="fas fa-play-circle"></i></a>
                                    <a href="blog/video/{{$h->id}}"><img class="img-fluid" src="{{$h->cover_image}}" alt></a>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="blog/video/{{$h->id}}">{{$h->titre}}</a>
                                    </div>
                                    <div class="video-page text-success">
                                    {{$h->authors}} <a title data-placement="top" data-toggle="tooltip" href="blog/video/{{$h->id}}"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        {{$h->cats}} &nbsp;{{$h->fmt_date}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    
                </div>
            </div>


            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">LEVEGI SARL</strong>. All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="https://levegi.com/">Ask
                                        Bootstrap</a>
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
    @include('customer.partials.lowbar',['infos' => $personal])
    @include('customer.partials.footer')
</body>

</html>
