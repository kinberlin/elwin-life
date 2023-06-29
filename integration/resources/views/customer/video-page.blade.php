@include('customer.partials.header')
<style>
    .ql-editor {
        user-select: none;
        pointer-events: none;
    }
</style>

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
        @include('customer.partials.navbar', ['infos' => $subinfo])
        @if (count($video) > 0)
            <div id="content-wrapper">
                <div class="container-fluid pb-0">
                    <div class="video-block-right-list section-padding">
                        <div class="row mb-4">
                            <div class="col-md-8">
                                <div class="single-video">
                                    <iframe width="100%" height="315" src="{{ $video[0]->video }}" frameborder="0"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="video-slider-right-list">
                                    @foreach ($recom as $r)
                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="/blog/video/{{$r->id}}"><i
                                                        class="fas fa-play-circle"></i></a>
                                                <a href="/blog/video/{{$r->id}}"><img class="img-fluid" src="{{ $r->cover_image }}"
                                                        alt></a>
                                                <div class="time">{{ $r->duration }}</div>
                                            </div>
                                            <div class="video-card-body">
                                                <div class="btn-group float-right right-action">
                                                    <a href="/blog/video/{{$r->id}}" class="right-action-link text-gray"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="video-title">
                                                    <a href="/blog/video/{{$r->id}}">{{ $r->titre }}</a>
                                                </div>
                                                <div class="video-page text-success">
                                                    {{ $r->channel }} <a title data-placement="top"
                                                        data-toggle="tooltip" href="#"
                                                        data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                                </div>
                                                <div class="video-view">
                                                    {{ $r->cat }} &nbsp;<i class="fas fa-calendar-alt"></i>
                                                    @if ($r->month < 1)
                                                    < 1 Mois @else {{ $r->month }} @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-block section-padding">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="single-video-left">
                                    <div class="single-video-title box mb-3">
                                        <h2><a href="#">{{ $video[0]->titre }}</a></h2>
                                        <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                                    </div>
                                    <div class="single-video-author box mb-3">
                                        <div class="float-right"><button class="btn btn-danger" type="button">Subscribe
                                                <strong>{{ $sub->subscribers }}</strong></button> <button
                                                class="btn btn btn-outline-danger" type="button"><i
                                                    class="fas fa-bell"></i></button></div>
                                        <img class="img-fluid" src="{{ $video[0]->channel_image }}" alt>
                                        <p><a href="#"><strong>{{ $video[0]->name }}</strong></a> <span title
                                                data-placement="top" data-toggle="tooltip"
                                                data-original-title="Verified"><i
                                                    class="fas fa-check-circle text-success"></i></span></p>
                                        <small>Published on {{ $video[0]->fmt_date }}</small>
                                    </div>
                                    <div class="single-video-info-content box mb-3">
                                        <h6>Cast:</h6>
                                        <p>{{ $video[0]->authors }}</p>
                                        <h6>A Propos :</h6>
                                        <p>{!! $video[0]->bloc1 !!}</p>
                                        <h6>Tags :</h6>
                                        <p class="tags mb-0">
                                            @foreach ($tag as $t)
                                                <span><a href="#"> {{ $t->name }} </a></span>
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="box mb-3 single-video-comment-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="retro-comments-tab" data-toggle="tab"
                                                    href="#retro-comments" role="tab" aria-controls="retro"
                                                    aria-selected="false">video Comments</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <form action="/comment/video/{{ $video[0]->id }}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{ Auth::user()->id }}" name="user">
                                                <div class="tab-pane fade show active" id="retro-comments"
                                                    role="tabpanel" aria-labelledby="retro-comments-tab">
                                                    <div class="reviews-members pt-0">
                                                        <div class="media">
                                                            <a href="#"><img class="mr-3"
                                                                    src="{{ Auth::user()->image }}"
                                                                    alt="{{ Auth::user()->firstname }}"></a>
                                                            <div class="media-body">
                                                                <div class="form-members-body">

                                                                    <textarea rows="1" placeholder="Add a public comment..." class="form-control" name="message"></textarea>
                                            </form>
                                        </div>
                                        <div class="form-members-footer text-right mt-2">
                                            <b class="float-left">{{ $com->coms }} commentaires
                                            </b>
                                            <button class="btn btn-primary btn-sm" type="submit">Commenter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($coms as $c)
                                <div class="reviews-members">
                                    <div class="media">

                                        <a href="#"><img class="mr-3" src="{{ $c->image }}"
                                                alt="{{ $c->firstname }}"></a>
                                        <div class="media-body">
                                            <div class="reviews-members-header">
                                                <h6 class="mb-1"><a class="text-black">{{ $c->firstname }} </a>
                                                </h6>
                                            </div>
                                            <div class="reviews-members-body">
                                                <p> {{ $c->message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-md-4">
        <div class="single-video-right">
            <div class="row">
                <div class="col-md-12">
                    @if(count($pubs) > 1)
                    <div class="adblock" style="background-image: url({{ $pubs[1]['image'] }})">
                        <div class="img">
                            Google AdSense<br>
                            336 x 280
                        </div>
                    </div>
                    @endif
                    <div class="main-title">
                        <div class="btn-group float-right right-action">
                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i>
                                    &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                    Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                    &nbsp; Close</a>
                            </div>
                        </div>
                        <h6>Up Next</h6>
                    </div>
                </div>
                <div class="col-md-12">
                    @foreach ($next as $n)
                        <div class="video-card video-card-list">
                            <div class="video-card-image">
                                <a class="play-icon" href="/blog/video/{{$n->id}}"><i class="fas fa-play-circle"></i></a>
                                <a href="/blog/video/{{$n->id}}"><img class="img-fluid" src="{{ $n->cover_image }}" alt></a>
                                <div class="time">{{ $n->duration }}</div>
                            </div>
                            <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <!--<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-fw fa-times-circle"></i> &nbsp;
                                                                Close</a>
                                                        </div>-->
                                </div>
                                <div class="video-title">
                                    <a href="/blog/video/{{$n->id}}">{{ $n->titre }}</a>
                                </div>
                                <div class="video-page text-success">
                                    {{ $n->channel }} <a title data-placement="top" data-toggle="tooltip"
                                        href="/blog/video/{{$n->id}}" data-original-title="Verified"><i
                                            class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    {{ $n->cat }} &nbsp;<i class="fas fa-calendar-alt"></i>
                                    @if ($n->month < 1)
                                    < 1 Mois @else {{ $n->month }} Months @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if(count($pubs) > 0)
                    <div class="adblock mt-0" style="background-image: url({{ $pubs[0]['image'] }})">
                        <div class="img">
                            Google AdSense<br>
                            336 x 280
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <footer class="sticky-footer">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-6">
                    <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">Digitech media sarl </strong>.
                        All
                        Rights Reserved<br>
                        <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                class="text-primary" target="_blank" href="#">Ask
                                Bootstrap</a>
                        </small>
                    </p>
                </div>
                <div class="col-lg-6 col-sm-6 text-right">
                    <div class="app">
                        <a href="#"><img alt src="{!! url('img/google.png') !!}"></a>
                        <a href="#"><img alt src="{!! url('img/apple.png') !!}"></a>
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
