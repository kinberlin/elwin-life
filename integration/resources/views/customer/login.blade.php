@include('customer.partials.header')

<body class="login-main-body">
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-5 p-5 bg-white full-height">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-4">
                            <img src="{!! url('img/favicon.png') !!}" height="120px" width="100px" class="img-fluid"
                                alt="LOGO">
                            <h5 class="mt-3 mb-3">Bienvenue sur Elwin Store</h5>
                            <p>C'est un grand plaisir de vous avoir de retour <br> N'hésitez pas à vous inscrire si vous
                                êtes nouveau.</p>
                        </div>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Adresse Mail</label>
                                <input type="text" class="form-control" name="email"
                                    placeholder="Entrez votre adresse de Connexion">
                            </div>
                            <div class="form-group">
                                <label>Mot de Passe</label>
                                <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
                            </div>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-outline-primary btn-block btn-lg">Connexion</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-5">
                            <p class="light-gray">Mot de Passe oublier ? <a href="/register">Reinitialiser le Mot de
                                    Passe</a></p>
                        </div>
                        <div class="text-center mt-5">
                            <p class="light-gray">Nouveau ? <a href="/register">S'Inscrire</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="login-main-right bg-white p-5 mt-5 mb-5">
                        <div class="owl-carousel owl-carousel-login">
                            @foreach ($pubs as $p)
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
                                    <img src="{!! url('img/login.png') !!}" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">Astuce</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it
                                        to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="{!! url('img/login.png') !!}" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">Produit</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it
                                        to make a type specimen book. It has survived not <br>only five centuries</p>
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
