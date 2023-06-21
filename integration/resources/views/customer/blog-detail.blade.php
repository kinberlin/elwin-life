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
        <div id="content-wrapper">
            <div class="container-fluid">
                <section class="blog-page section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-title">
                                    <h6>Blog Détail</h6>
                                </div>
                            </div>
                            @if (count($article) > 0)
                                <div class="col-md-8">
                                    <div class="card blog mb-4">
                                        <div class="blog-header">
                                            <a href="#"><img class="card-img-top"
                                                    src="{{ $article[0]->cover_image }}" alt="Card image cap"></a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">{{ $article[0]->titre }}</a></h5>
                                            <div class="entry-meta">
                                                <ul class="tag-info list-inline">
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fas fa-calendar"></i>
                                                            {{ $article[0]->fmt_date }}</a>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fas fa-folder"></i> <a
                                                            rel="category tag"
                                                            href="#">{{ $article[0]->name }}</a>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fas fa-tag"></i>
                                                        @foreach ($tag as $t)
                                                            <a rel="tag" href="#">{{ $t->name }}</a> ,
                                                        @endforeach
                                                        .
                                                    </li>
                                                    <li class="list-inline-item"><i class="fas fa-comment"></i> <a
                                                            href="#">0 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div id="editor">
                                                {!! $article[0]->bloc1 !!}
                                            </div>
                                            <div class="gallery mb-4">
                                                <div class="row">
                                                    <div class="col-sm-4"><img class="rounded" alt
                                                            src="{{ $article[0]->image1 }}">
                                                    </div>
                                                    <div class="col-sm-4"><img class="rounded" alt
                                                            src="{{ $article[0]->image2 }}">
                                                    </div>
                                                    <div class="col-sm-4"><img class="rounded" alt
                                                            src="{{ $article[0]->image3 }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="editor1">
                                                {!! $article[0]->bloc2 !!}
                                            </div>
                                            <div class="gallery mt-4 mb-4">
                                                <div class="row">
                                                    <div class="col-sm-6"><img alt class="rounded"
                                                            src="{{ $article[0]->image4 }}">
                                                    </div>
                                                    <div class="col-sm-6"><img alt class="rounded"
                                                            src="{{ $article[0]->image5 }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="editor2">
                                                {!! $article[0]->bloc3 !!}
                                            </div>
                                            <footer class="entry-footer">
                                                <div class="blog-post-tags">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fas fa-tag"></i> Tags:
                                                        </li>
                                                        @foreach ($tag as $t)
                                                            <li class="list-inline-item"><a rel="tag"
                                                                    href="#">{{ $t->name }}</a> </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </footer>
                                        </div>
                                    </div>
                                    <div class="card padding-card reviews-card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">{{$com->coms}} Commentaire</h5>
                                            @foreach($coms as $c)
                                            <div class="media mb-4">
                                                <img alt src="{{$c->image}}" class="d-flex mr-3 rounded">
                                                <div class="media-body">
                                                    <h5 class="mt-0">{{$c->firstname . ' '. $c->lastname}}<small> {{' '.$c->fmt_date}}</small>
                                                    </h5>
                                                    <p>{{$c->message}}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card blog">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Laisser un Commentaire</h5>
                                            <form name="sentMessage" action="/comment/article/{{ $article[0]->id }}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{Auth::user()->id}}" name="user">
                                                <div class="row">
                                                    <div class="control-group form-group col-lg-6 col-md-6">
                                                        <div class="controls">
                                                            <label>Nom <span class="text-danger">*</span></label>
                                                            <input type="text" value="{{Auth::user()->firstname}}" readonly class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="control-group form-group col-lg-6 col-md-6">
                                                        <div class="controls">
                                                            <label>Your Email <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" value="{{Auth::user()->email}}" readonly class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="control-group form-group">
                                                    <div class="controls">
                                                        <label>Commentaire <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="message" minlength="10" maxlength="100" cols="100" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success" type="submit">Publier le Commentaire</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <h3>Dommage, nous ne retrouvons pas cette article. Elle a peut être été supprimer.</h3>
                            @endif
                            <div class="col-md-4">
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search For" class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary">Search <i
                                                        class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Categories</h5>
                                        <ul class="sidebar-card-list">
                                            @foreach ($cats as $c)
                                                <li><a href="/blog/{{ $c->category_id }}"><i
                                                            class="fas fa-chevron-right"></i> {{ $c->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Chaînes</h5>
                                        <ul class="sidebar-card-list">
                                            @foreach ($channels as $ch)
                                                <li><a href="/channel/{{ $ch->id }}"><i
                                                            class="fas fa-chevron-right"></i> {{ $ch->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Tags</h5>
                                        <div class="tagcloud">
                                            @foreach($tags as $t)
                                            <a class="tag-cloud-link" href="#">{{$t->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Post Similaires</h5>
                                        @foreach($recom as $r)
                                        <a href="/blog/article/{{$r->id}}">
                                            <h6>{{$r->titre}}</h6>
                                        </a>
                                        <p class="mb-0"><i class="fas fa-calendar-text"></i> {{$r->fmt_date}}</p>
                                        <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">LEVEGI SARL</strong>.
                                All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="https://levegi.com/">Levegi
                                        Sarl</a>
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
<script>
    var qlEditorDiv = document.querySelector('.ql-editor');
    qlEditorDiv.setAttribute('contenteditable', 'false');
</script>

</html>
