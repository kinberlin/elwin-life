@include('customer.partials.header')
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        margin-top: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        max-width: 250px;
        height: 380px;
        position: relative;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .h-1 {
        text-transform: uppercase;
    }

    .ribon {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background-color: #008b30;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ribon .fas.fa-spray-can,
    .ribon .fas.fa-broom,
    .ribon .fas.fa-shower,
    .ribon .fas.fa-infinity {
        font-size: 30px;
        color: white;
    }

    .card .price {
        color: #008b30;
        font-size: 30px;
    }

    .card ul {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .card ul li {
        font-size: 12px;
        margin-bottom: 8px;
    }

    .card ul .fa.fa-check {
        font-size: 8px;
        color: gold;
    }

    .card:hover {
        background-color: gold;
    }

    .card:hover .fa.fa-check {
        color: #008b30;
    }

    .card .btn {
        width: 200px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #008b30;
        border: none;
        border-radius: 0px;
        box-shadow: none;
    }

    @media (max-width: 500px) {
        .card {
            max-width: 100%;
        }
    }
</style>

<body class="login-main-body">
    <div class="container">
        <div>
            <h6 class="text-center mb-5">Vous n'avez aucun abonnement actif 🤔🤔</h6>
            <p class="h4 text-center mb-5">Pour continuer la navigation <br>
            <span class="h2 text-center mb-5">Veuillez Choisir un Abonnement</span></p>
        </div>
        <div class="row mt-3">
            @foreach ($bundles as $b)
            @if($loop->iteration % 4 == 0)
            <div class="col-lg-3 col-md-6">
                <div class="card d-flex align-items-center justify-content-center">
                    <div class="ribon">
                        @if($b->name == "Starter")
                        <span class="fas fa-spray-can"></span></div>
                        @elseif($b->name == "Standard")
                        <span class="fas fa-broom"></span></div>
                        @elseif($b->name == "Premium")
                        <span class="fas fa-shower"></span></div>
                        @elseif($b->name == "Platinum")
                        <span class="fas fa-infinity"></span></div>
                        @endif
                    <p class="h-1 pt-5">{{$b->name}}</p>
                    <span class="price">
                        <sup class="sup">XAF</sup> <span class="number">{{$b->price}}</span>
                    </span>
                    <ul class="mb-5 list-unstyled text-muted">
                        @foreach ($avt->filter(function ($avt) use ($b) {
                            return $avt->bundle === $b->id;
                        }) as $a)
                         <li><span class="fa fa-check me-2"></span>{{ $a->name }}</li>
                                                                    @endforeach
                    </ul>
                    <form action="/flutterpay/bundle" method="post">
                        @csrf
                        <input type="hidden" value="{{$b->id}}" name="bumdle" />
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user" />
                        <input type="hidden" value="{{$b->price}}" name="amount" />
                    <button type="submit" class="btn btn-primary">Choisir cette Offre</button>
                    </form>
                </div>
            </div>
            @else 
            <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                <div class="card d-flex align-items-center justify-content-center">
                    <div class="ribon">
                        @if($b->name == "Starter")
                        <span class="fas fa-spray-can"></span></div>
                        @elseif($b->name == "Standard")
                        <span class="fas fa-broom"></span></div>
                        @elseif($b->name == "Premium")
                        <span class="fas fa-shower"></span></div>
                        @elseif($b->name == "Platinum")
                        <span class="fas fa-infinity"></span></div>
                        @endif
                        <p class="h-1 pt-5">{{$b->name}}</p>
                        <span class="price">
                            <sup class="sup">XAF</sup> <span class="number">{{$b->price}}</span>
                        </span>
                        <ul class="mb-5 list-unstyled text-muted">
                            @foreach ($avt->filter(function ($avt) use ($b) {
                                return $avt->bundle === $b->id;
                            }) as $a)
                             <li><span class="fa fa-check me-2"></span>{{ $a->name }}</li>
                                                                        @endforeach
                        </ul>
                        <form action="/flutterpay/bundle" method="post">
                            @csrf
                        <input type="hidden" value="{{$b->id}}" name="bundle" />
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user" />
                        <input type="hidden" value="{{$b->price}}" name="amount" />
                        <button type="submit" class="btn btn-primary">Choisir cette Offre</button>
                        </form>
                </div>
            </div>
            @endif
            @if($loop->iteration % 4 == 0)
        </div>        <div class="row mt-3">>
    @endif
            @endforeach
        </div>
    </div>
    @include('customer.partials.footer')
</body>

</html>
