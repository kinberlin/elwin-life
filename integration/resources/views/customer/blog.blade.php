@include('customer.partials.header')
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
                                    <div class="btn-group float-right right-action">
                                        <a aria-expanded="false" aria-haspopup="true" data-toggle="dropdown"
                                            class="right-action-link text-gray" href="#">
                                            Sort by <i aria-hidden="true" class="fa fa-caret-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="fas fa-fw fa-star"></i>
                                                &nbsp; Top Rated</a>
                                            <a href="#" class="dropdown-item"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a href="#" class="dropdown-item"><i
                                                    class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <h6>Blog</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card blog mb-4">
                                    <div class="blog-header">
                                        <a href="#"><img class="card-img-top" src="{!! url('img/blog/1.png') !!}"
                                                alt="Card image cap"></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Aliquam euismod libero eu enim. Nulla
                                                nec felis sed leo.</a></h5>
                                        <div class="entry-meta">
                                            <ul class="tag-info list-inline">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-calendar"></i> March 6, 2020</a></li>
                                                <li class="list-inline-item"><i class="fas fa-folder"></i> <a
                                                        rel="category tag" href="#">Image</a></li>
                                                <li class="list-inline-item"><i class="fas fa-tag"></i> <a
                                                        rel="tag" href="#">envato</a>, <a rel="tag"
                                                        href="#">sale</a>, <a rel="tag"
                                                        href="#">shop</a> </li>
                                                <li class="list-inline-item"><i class="fas fa-comment"></i> <a
                                                        href="#">4 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p class="card-text">Aliquam convallis sollicitudin purus. Praesent aliquam,
                                            enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl
                                            eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
                                            libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit
                                            nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt
                                            mi. Lorem ipsum dolor
                                        </p>
                                        <a href="/blog/article">READ MORE <span class="fas fa-chevron-right"></span></a>
                                    </div>
                                </div>
                                <div class="card blog mb-4">
                                    <div class="blog-header">
                                        <a href="#"><img class="card-img-top" src="{!! url('img/blog/2.png') !!}"
                                                alt="Card image cap"></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Aliquam euismod libero eu enim. Nulla
                                                nec felis sed leo.</a></h5>
                                        <div class="entry-meta">
                                            <ul class="tag-info list-inline">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-calendar"></i> March 6, 2020</a></li>
                                                <li class="list-inline-item"><i class="fas fa-folder"></i> <a
                                                        rel="category tag" href="#">Image</a></li>
                                                <li class="list-inline-item"><i class="fas fa-tag"></i> <a
                                                        rel="tag" href="#">envato</a>, <a rel="tag"
                                                        href="#">sale</a>, <a rel="tag"
                                                        href="#">shop</a> </li>
                                                <li class="list-inline-item"><i class="fas fa-comment"></i> <a
                                                        href="#">4 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p class="card-text">Aliquam convallis sollicitudin purus. Praesent aliquam,
                                            enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl
                                            eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
                                            libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit
                                            nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt
                                            mi. Lorem ipsum dolor
                                        </p>
                                        <a href="/blog/video">READ MORE <span class="fas fa-chevron-right"></span></a>
                                    </div>
                                </div>
                                <div class="card blog mb-4">
                                    <div class="blog-header">
                                        <a href="#"><img class="card-img-top" src="{!! url('img/blog/3.png') !!}"
                                                alt="Card image cap"></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Aliquam euismod libero eu enim. Nulla
                                                nec felis sed leo.</a></h5>
                                        <div class="entry-meta">
                                            <ul class="tag-info list-inline">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-calendar"></i> March 6, 2020</a></li>
                                                <li class="list-inline-item"><i class="fas fa-folder"></i> <a
                                                        rel="category tag" href="#">Image</a></li>
                                                <li class="list-inline-item"><i class="fas fa-tag"></i> <a
                                                        rel="tag" href="#">envato</a>, <a rel="tag"
                                                        href="#">sale</a>, <a rel="tag"
                                                        href="#">shop</a> </li>
                                                <li class="list-inline-item"><i class="fas fa-comment"></i> <a
                                                        href="#">4 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p class="card-text">Aliquam convallis sollicitudin purus. Praesent aliquam,
                                            enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl
                                            eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
                                            libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit
                                            nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt
                                            mi. Lorem ipsum dolor
                                        </p>
                                        <a href="/blog/article">READ MORE <span class="fas fa-chevron-right"></span></a>
                                    </div>
                                </div>
                                <ul class="pagination justify-content-center mt-4 pagination-sm">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item active">
                                        <span class="page-link">
                                            2
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
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
                            <p class="mt-1 mb-0">&copy; Copyright 2020 <strong class="text-dark">Vidoe</strong>. All
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
</html>
