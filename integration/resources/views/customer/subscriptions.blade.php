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
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                            Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                            Viewed</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                            &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Subscriptions</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s1.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-success btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name <span title data-placement="top" data-toggle="tooltip"
                                                data-original-title="Verified"><i
                                                    class="fas fa-check-circle text-success"></i></span></a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s2.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s3.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-secondary btn-sm border-none">Subscribed
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name <span title data-placement="top" data-toggle="tooltip"
                                                data-original-title="Verified"><i
                                                    class="fas fa-check-circle"></i></span></a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s4.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s6.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s8.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s5.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s6.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s8.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s7.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-secondary btn-sm border-none">Subscribed
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name <span title data-placement="top" data-toggle="tooltip"
                                                data-original-title="Verified"><i
                                                    class="fas fa-check-circle"></i></span></a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s1.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#"><img class="img-fluid" src="img/s2.png" alt></a>
                                    <div class="channels-card-image-btn"><button type="button"
                                            class="btn btn-danger btn-sm border-none">Subscribe
                                            <strong>1.4M</strong></button> <button type="button"
                                            class="btn btn-warning btn-sm border-none"><i
                                                class="fas fa-times-circle"></i></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">Channels Name</a>
                                    </div>
                                    <div class="channels-view">
                                        382,323 subscribers
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
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
    @include('customer.partials.lowbar',['infos' => $personal])
    @include('customer.partials.footer')
</body>
</html>