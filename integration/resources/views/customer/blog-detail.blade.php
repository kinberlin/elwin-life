@include('customer.partials.header')
<style>
    .ql-editor {
        user-select: none;
        pointer-events: none;
    }
</style>

<body id="page-top">
    @include('customer.partials.topbar',['infos' => $personal])
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
                            @if (count($article)> 0)
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
                                            <h5 class="card-title mb-4">3 Reviews</h5>
                                            <div class="media mb-4">
                                                <img alt src="{!! url('img/s2.png') !!}" class="d-flex mr-3 rounded">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Stave Martin <small>Feb 12, 2020</small>
                                                        <span class="star-rating float-right">
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i><small
                                                                class="text-success">5/2</small>
                                                        </span>
                                                    </h5>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                                        nisi
                                                        vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img alt src="{!! url('img/s1.png') !!}" class="d-flex mr-3 rounded">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Mark Smith <small>Feb 09, 2020</small> <span
                                                            class="star-rating float-right">
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i><small
                                                                class="text-success">5/1</small>
                                                        </span>
                                                    </h5>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                                        nisi
                                                        vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    <div class="media mt-4">
                                                        <img alt src="{!! url('img/s3.png') !!}"
                                                            class="d-flex mr-3 rounded">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Ryan Printz <small>Nov 13, 2020</small>
                                                                <span class="star-rating float-right">
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <i class="fas fa-star-half text-warning"></i>
                                                                    <i class="fas fa-star-half text-warning"></i>
                                                                    <i class="fas fa-star-half text-warning"></i><small
                                                                        class="text-success">5/5</small>
                                                                </span>
                                                            </h5>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                                metus
                                                                scelerisque ante sollicitudin. Cras purus odio,
                                                                vestibulum
                                                                in vulputate at, tempus viverra turpis. Fusce
                                                                condimentum
                                                                nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                                felis
                                                                in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mt-4">
                                                <img alt src="{!! url('img/s4.png') !!}" class="d-flex mr-3 rounded">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Stave Mark <small>Feb 12, 2020</small>
                                                        <span class="star-rating float-right">
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i>
                                                            <i class="fas fa-star-half text-warning"></i><small
                                                                class="text-success">5/2</small>
                                                        </span>
                                                    </h5>
                                                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla.
                                                        Nulla
                                                        vel metus scelerisque ante sollicitudin. Cras purus odio,
                                                        vestibulum
                                                        in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                                        ac
                                                        nisi vulputate fringilla. Donec lacinia congue felis in
                                                        faucibus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card blog">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Leave a Comment</h5>
                                            <form name="sentMessage">
                                                <div class="row">
                                                    <div class="control-group form-group col-lg-6 col-md-6">
                                                        <div class="controls">
                                                            <label>Your Name <span class="text-danger">*</span></label>
                                                            <input type="text" required class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="control-group form-group col-lg-6 col-md-6">
                                                        <div class="controls">
                                                            <label>Your Email <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="control-group form-group">
                                                    <div class="controls">
                                                        <label>Review <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" cols="100" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success" type="submit">Post Comment</button>
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
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Audio</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Gallery</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Image</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i>
                                                    Uncategorized</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Archives</h5>
                                        <ul class="sidebar-card-list">
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> December,
                                                    2017</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> November,
                                                    2017</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> October,
                                                    2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Tags</h5>
                                        <div class="tagcloud">
                                            <a class="tag-cloud-link" href="#">coupon</a>
                                            <a class="tag-cloud-link" href="#">deals</a>
                                            <a class="tag-cloud-link" href="#">discount</a>
                                            <a class="tag-cloud-link" href="#">envato</a>
                                            <a class="tag-cloud-link" href="#">gallery</a>
                                            <a class="tag-cloud-link" href="#">sale</a>
                                            <a class="tag-cloud-link" href="#">shop</a>
                                            <a class="tag-cloud-link" href="#">stores</a>
                                            <a class="tag-cloud-link" href="#">video</a>
                                            <a class="tag-cloud-link" href="#">vimeo</a>
                                            <a class="tag-cloud-link" href="#">youtube</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Popular Posts</h5>
                                        <a href="#">
                                            <h6>Possimus aut mollitia eum ipsum</h6>
                                        </a>
                                        <p class="mb-0"><i class="fas fa-calendar-text"></i> April 05, 2020</p>
                                        <hr>
                                        <a href="#">
                                            <h6>Nulla malesuada mauris non nulla imperdiet ullamcorper</h6>
                                        </a>
                                        <p class="mb-0"><i class="fas fa-calendar-text"></i> June 20, 2020</p>
                                        <hr>
                                        <a href="#">
                                            <h6 class="text-success">Focus on creating and growing your projects and
                                                websites</h6>
                                        </a>
                                        <p class="mb-0"><i class="fas fa-calendar-text"></i> June 29, 2020</p>
                                        <hr>
                                        <a href="#">
                                            <h6>Vestibulum lobortis urna eu mauris viverra porttitor. Cras consequat
                                            </h6>
                                        </a>
                                        <p class="mb-0"><i class="fas fa-calendar-text"></i> October 10, 2020</p>
                                        <hr>
                                        <a href="#">
                                            <h6>Sed lacinia varius nisi et euismod.</h6>
                                        </a>
                                        <p class="mb-0"><i class="fas fa-calendar-text"></i> April 05, 2020</p>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Newsletter</h5>
                                        <div class="input-group">
                                            <input type="text" placeholder="Your email address"
                                                class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary">Sign up <i
                                                        class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card sidebar-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Meta</h5>
                                        <ul class="sidebar-card-list">
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Log in</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Entries RSS</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i> Comments
                                                    RSS</a></li>
                                            <li><a href="#"><i class="fas fa-chevron-right"></i>
                                                    WordPress.org</a></li>
                                        </ul>
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
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">LEVEGI SARL</strong>. All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask
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
    @include('customer.partials.lowbar',['infos' => $personal])
    @include('customer.partials.footer')
</body>
<script>
    var qlEditorDiv = document.querySelector('.ql-editor');
    qlEditorDiv.setAttribute('contenteditable', 'false');
</script>

</html>
