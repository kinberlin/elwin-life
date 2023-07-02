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

        <!--Start Blog One -->
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Résultats de la recherche</h6>
                    </div>
                    <h4 class="sec-title__title">80 Résultats trouvés </h4>
                </div>
                <div class="row">
                  <div class="container mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h1>Home</h1>
                        <div class="row">
                          <div class="col-md-12">
                              <div class="search-item">
                                  <h4 class="mb-1"><a href="#">Bootdey.com - Responsive Admin Template</a></h4>
                                  <div class="font-13 text-success mb-3">https://www.bootdey.com</div>
                                  <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                              </div>
                              <div class="search-item">
                                  <h4 class="mb-1"><a href="#">Uplon - Responsive Bootstrap 4 Web App Kit</a></h4>
                                  <div class="font-13 text-success mb-3">https://www.bootdey.com/bootstrap-snippets?utf8=%E2%9C%93&q=snippet</div>
                                  <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                              </div>
                              <div class="search-item">
                                  <div class="media"><img class="d-flex mr-3 rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Generic placeholder image" height="54">
                                      <div class="media-body">
                                          <h5 class="media-heading mt-0"><a href="#" class="text-dark">Chadengle</a></h5>
                                          <p class="font-13"><b>Email:</b> <span><a href="#" class="text-muted">mediaheader@mail.com</a></span></p>
                                          <p class="mb-0 font-13"><b>Bio:</b>
                                              <br><span class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</span></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="search-item">
                                  <h4 class="mb-1"><a href="#">Zircos - Responsive Admin Template</a></h4>
                                  <div class="font-13 text-success mb-3">https://www.bootdey.com/</div>
                                  <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                              </div>
                              <div class="search-item">
                                  <h4 class="mb-1"><a href="#">Uplon - Responsive Bootstrap 4 Web App Kit</a></h4>
                                  <div class="font-13 text-success mb-3">https://www.bootdey.com/bootstrap-snippets?utf8=%E2%9C%93&q=snippet</div>
                                  <div class="">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" height="48" alt="image"> 
                                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png" height="48" alt="image"> 
                                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" height="48" alt="image"> 
                                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png" height="48" alt="image">
                                  </div>
                              </div>
                              <div class="search-item">
                                  <h4 class="mb-1"><a href="#">Zircos - Responsive Admin Template</a></h4>
                                  <div class="font-13 text-success mb-3">https://www.bootdey.com/</div>
                                  <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                              </div>
                              <div class="search-item">
                                  <h4 class="mb-1"><a href="#">Uplon - Responsive Bootstrap 4 Web App Kit</a></h4>
                                  <div class="font-13 text-success mb-3">https://www.bootdey.com/bootstrap-snippets?utf8=%E2%9C%93&q=snippet</div>
                                  <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                              </div>
                              <ul class="pagination justify-content-end pagination-split mt-0">
                                  <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                                  <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                              </ul>
                              <div class="clearfix"></div>
                          </div>
                      </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h1>Profile</h1>
                        <p>This is the profile tab.</p>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h1>Contact</h1>
                        <p>This is the contact tab.</p>
                      </div>
                    </div>
                  </div>
                
                </div>
            </div>
        </section>
        <!--End Blog One -->
        @include('customer.welcome.partials.footer', ['welcome' => $welcome, 'links' => $links])
</body>

</html>
