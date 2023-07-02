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
        @include('customer.welcome.partials.topbar')
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
                        <p>This is the home tab.</p>
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
