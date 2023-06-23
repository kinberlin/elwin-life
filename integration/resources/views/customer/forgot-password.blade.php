@include('customer.partials.header')

<body class="login-main-body">
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-5 p-5 bg-white full-height">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-4">
                            <img src="img/favicon.png" height="120px" width="100px" class="img-fluid" alt="LOGO">
                            <h5 class="mt-3 mb-3">Reinitialiser votre Mot de Passe</h5>
                            <p>Vous ne vous souvenez plus de votre mot de passe. <br>Vous verrez c'est facile de récuperer votre compte.</p>
                        </div>
                        <form action="https://levegi.com/preview/vidoe-v2-3/index.html">
                            <div class="form-group">
                                <label>Entrez votre addresse</label>
                                <input type="text" class="form-control" placeholder="Entrez votre addresse mail">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Reinitialiser le
                                    Mot de Passe</button>
                            </div>
                        </form>
                        <div class="text-center mt-5">
                            <p class="light-gray">Pas de Compte ? <a href="register">S'inscrire</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="login-main-right bg-white p-5 mt-5 mb-5">
                        <div class="owl-carousel owl-carousel-login">
                            <@foreach ($pubs as $p)
                                <div class="item">
                                    <div class="carousel-login-card text-center">
                                        <img src="{{ $p->image }}" class="img-fluid" alt="LOGO">
                                        <h5 class="mt-5 mb-3">Publicité</h5>
                                        <p class="mb-4">{{ $p->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                                <div class="item">
                                    <div class="carousel-login-card text-center">
                                        <img src="img/login.png" class="img-fluid" alt="LOGO">
                                        <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                                        <p class="mb-4">when an unknown printer took a galley of type and
                                            scrambled<br> it
                                            to make a type specimen book. It has survived not <br>only five centuries
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-login-card text-center">
                                        <img src="img/login.png" class="img-fluid" alt="LOGO">
                                        <h5 class="mt-5 mb-3">Create GIFs</h5>
                                        <p class="mb-4">when an unknown printer took a galley of type and
                                            scrambled<br> it
                                            to make a type specimen book. It has survived not <br>only five centuries
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('customer.partials.footer')
</body>

</html>
