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
    <div class="page-wrapper">

        <!--Start Main Header One-->
        @include('customer.welcome.partials.topbar', ['welcome' => $welcome])
        <!--End Main Header One-->

        <div class="stricky-header stricky-header--one style2 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Start Blog One -->
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Liens Utiles</h6>
                    </div>
                        <h4 class="sec-title__title">{{ $total }} Liens Utiles</h4>
                </div>
                @if ($total > 0)
                <div class="row">
                    <div class="col-md-12">
                        @if (count($infoutiles) > 0)
                            @foreach ($infoutiles as $in)
                                <div class="search-item">
                                    <h4 class="mb-1"><a
                                            href="{{$in->lien}}">{{ $in->nom }}</a>
                                    </h4>
                                    <h5>{{$in->lien}}</h5>
                                </div>
                                <br>
                            @endforeach
                        @else
                            <h4>Aucun lien utile trouvé</h4>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!--End Blog One -->
        @include('customer.welcome.partials.footer', ['welcome' => $welcome, 'links' => $links])
</body>

</html>
