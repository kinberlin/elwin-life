@include('customer.partials.header')
<style type="text/css">
    .bgd-danger {
        background: linear-gradient(30deg, red, yellow);
    }

    .btn-n {
        color: white;
        background: gray;
        transition: .2s ease;
        transform: skew(0deg);
    }

    .btn-n:hover {
        background: red;
        color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, .8);
        transition: .2s ease;
        transform: scale(1.08) translateY(-3px);
    }

    .btn-y {
        background: gray;
        color: white;
        transition: .2s ease;
    }

    .btn-y:hover {
        background: green;
        color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, .8);
        transition: .2s ease;
        transform: scale(1.08) translateY(-3px);
    }

    .card-bg {
        transition: 1s ease;
    }

    .card-bg:hover {
        transform: skew(-10deg) scale(1.05);
        transition: 1s ease;
    }

    .icons {
        transition: .8s ease;
        cursor: pointer;
    }

    .icons:hover {
        color: #007BFF;
        transform: scale(1.05) translateY(-5px);
        transition: .8s ease;
    }

    .iconck {
        color: #007BFF;
        transform: scale(1.05) translateY(-5px);
    }

    .icon {
        transition: 1s ease;
    }

    .icon:hover {
        transform: scale(1.2);
        transition: 1s ease;
    }

    .text-trans {
        transition: .5s ease;
    }

    .text-trans:hover {
        transform: skew(-15deg);
        transition: .5s ease;
    }

    .btns {
        background: #007BFF;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 1s ease;
    }

    .btns:hover {
        text-decoration: none;
        color: white;
        box-shadow: 5px 5px 7px rgba(0, 0, 0, .8);
        transform: scale(1.05) translateY(-8px) skew(-10deg);
        transition: 1s ease;
    }

    .bg-alert {
        box-shadow: 0 0 3px rgba(0, 0, 0, .8);
    }

    .bg-alert-bg {
        box-shadow: 0 0 10px rgba(0, 0, 0, .8);
        transform: scale(1.05);
    }

    .w-35 {
        width: 36% !important;
    }

    .mrg-ct {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .int-chagne {
        transition: 1s ease;
    }

    .int-chagne:hover {
        transform: skew(-15deg);
        transition: 1s ease;
    }

    .turn {
        display: block;
        transform: none;
        transition: .5s ease;
    }

    .turnb {
        display: block;
        transform: rotate(-180deg);
        transition: .5s ease;
    }

    .clps {
        color: #007BFF;
        text-decoration: none !important;
    }

    .clps:hover {
        color: #007BFF;
    }

    .clps-btn-style {
        transition: .5s ease;
    }

    .clps-btn-style:hover {
        color: #007BFF;
        transform: skew(-15deg);
        transition: .5s ease;
    }

    p {
        margin-bottom: .5px !important;
    }
</style>

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
                @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="container-fluid upload-details">
                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h6>Mon Panier</h6>
                        </div>
                    </div>
                </div>
            -->
                <div class="row">
                    <div class="container">
                        <h1 class="text-center my-5">Mon Panier</h1>
                        <div class="tab-content">
                            <div class="tab-pane active" id="step1">
                                <div class="row text-center">
                                    <div class="col-sm col-12">
                                        <div class="alert alert-primary bg-alert-bg" role="alert">
                                            1 . Verification des Informations
                                        </div>
                                    </div>
                                    <div class="col-sm col-12">
                                        <div class="alert alert-secondary" role="alert">
                                            2 . Cash Payment
                                        </div>
                                    </div>
                                    <div class="col-sm col-12">
                                        <div class="alert alert-secondary" role="alert">
                                            3 . Complete
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="card border-0">
                                                            <div class="card-header d-flex justify-content-between"
                                                                id="headingOne">
                                                                <h2 class="mb-0">
                                                                    <button id="turnbf"
                                                                        class="btn btn-link d-flex turnaf clps"
                                                                        type="button" data-toggle="collapse"
                                                                        data-target="#collapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        <p class="clps-btn-style">Voir les articles
                                                                        </p>
                                                                        <span class="mx-1"><i
                                                                                class="far fa-chevron-double-down"></i></span>
                                                                    </button>
                                                                </h2>
                                                                <span class="my-2 text-danger h4">{{ $total->total }}
                                                                    XAF</span>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show"
                                                                aria-labelledby="headingOne"
                                                                data-parent="#accordionExample">
                                                                <div class="card-body p-0">
                                                                    <div class="card-body">
                                                                        <table id="datatables-orders"
                                                                            class="table table-striped"
                                                                            style="margin-bottom: 40px ; width:100%">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Detail</th>
                                                                                    <th>Prix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Actions</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($wishlist as $u)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="rounded"
                                                                                                style="background-image: url({{ $u->image }}); width: 60px; height: 60px; background-size: cover;">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td><b>{{ $u->name }}
                                                                                                x{{ $u->quantity }}
                                                                                            </b><br>le :
                                                                                            {{ $u->fmt_date }}</td>
                                                                                        <td>{{ $u->price }} FCFA
                                                                                        </td>
                                                                                        <td>{{ $u->quantity * $u->price }}
                                                                                            XAF</td>
                                                                                        <td>
                                                                                            <a class="btn btn-primary btn-sm"
                                                                                                data-toggle="modal"
                                                                                                data-target="#editcartModal{{ $u->id }}"><i
                                                                                                    class="fas fa-fw fa-edit "></i></a>
                                                                                            <button type="button"
                                                                                                class="btn btn-danger btn-sm "
                                                                                                data-toggle="modal"
                                                                                                data-target="#delcartModal{{ $u->id }}"><i
                                                                                                    class="fas fa-fw fa-trash "></i></button>
                                                                                            <div class="modal fade"
                                                                                                id="editcartModal{{ $u->id }}"
                                                                                                tabindex="-1"
                                                                                                role="dialog"
                                                                                                aria-labelledby="exampleModalLabel"
                                                                                                aria-hidden="true">
                                                                                                <div class="modal-dialog modal-sm modal-dialog-centered"
                                                                                                    role="document">
                                                                                                    <div
                                                                                                        class="modal-content">
                                                                                                        <form
                                                                                                            method="post"
                                                                                                            action="/editwish">
                                                                                                            @csrf
                                                                                                            <div
                                                                                                                class="modal-header">
                                                                                                                <h5 class="modal-title"
                                                                                                                    id="exampleModalLabel">
                                                                                                                    Modifier
                                                                                                                    la
                                                                                                                    quantité
                                                                                                                    ?
                                                                                                                </h5>
                                                                                                                <button
                                                                                                                    class="close"
                                                                                                                    type="button"
                                                                                                                    data-dismiss="modal"
                                                                                                                    aria-label="Close">
                                                                                                                    <span
                                                                                                                        aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="modal-body">
                                                                                                                Cliquez
                                                                                                                sur
                                                                                                                "Modifier"
                                                                                                                en
                                                                                                                dessous
                                                                                                                si
                                                                                                                vous
                                                                                                                voulez
                                                                                                                modifier
                                                                                                                <b>{{ $u->name }}
                                                                                                                    x{{ $u->quantity }}</b>
                                                                                                                dans le
                                                                                                                panier.
                                                                                                                <input
                                                                                                                    class="form-control border-form-control"
                                                                                                                    name="quantity"
                                                                                                                    value="{{ $u->quantity }}"
                                                                                                                    type="number"
                                                                                                                    required
                                                                                                                    min="1">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="modal-footer">

                                                                                                                <button
                                                                                                                    class="btn btn-secondary"
                                                                                                                    type="button"
                                                                                                                    data-dismiss="modal">Cancel</button>
                                                                                                                <button
                                                                                                                    class="btn btn-primary"
                                                                                                                    name="wishlistitem_id"
                                                                                                                    value="{{ $u->id }}"
                                                                                                                    type="submit">Modifier</button>

                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="alert alert-secondary border-0 h4 text-center bg-alert rounded-0"
                                                                role="alert">
                                                                Données sur le Client
                                                            </div>
                                                            <form class="needs-validation" novalidate>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="name">Nom</label>
                                                                        <input type="text"
                                                                            class="form-control space" id="name"
                                                                            placeholder="please enter your name  . . ."
                                                                            name="name"
                                                                            value="{{ Auth::user()->fistname . ' ' . Auth::user()->lastname }}"
                                                                            required>
                                                                        <div class="valid-feedback">
                                                                            Bien!
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Entrez votre nom
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="email">Email</label>
                                                                        <input type="text"
                                                                            class="form-control space" id="email"
                                                                            placeholder="please enter your email . . ."
                                                                            value="{{ Auth::user()->email }}"
                                                                            required>
                                                                        <div class="valid-feedback">
                                                                            Correct format!
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Champ obligatoire . . .
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="email">Telephone / Local
                                                                            phone</label>
                                                                        <input type="tel"
                                                                            class="form-control space" id="email"
                                                                            placeholder="Tél . . ."
                                                                            value="{{ Auth::user()->phone }}"
                                                                            required>
                                                                        <div class="valid-feedback">
                                                                            Correct format!
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Champ Obligatoire
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="country">Pays</label>
                                                                        <input type="text"
                                                                            class="form-control space" id="email"
                                                                            placeholder="Pays . . ."
                                                                            value="{{ Auth::user()->country }}"
                                                                            required>
                                                                        <div class="valid-feedback">
                                                                            Correct format!
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Champ Obligatoire
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="city">Ville</label>
                                                                        <input type="text"
                                                                            class="form-control space" id="city"
                                                                            placeholder="please enter your city . . ."
                                                                            value="{{ Auth::user()->city }}" required>
                                                                        <div class="valid-feedback">
                                                                            Correct format !
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please enter your city . . .
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="address">Addresse de
                                                                            Livraison</label>
                                                                        <input type="text"
                                                                            class="form-control space" id="address"
                                                                            placeholder="Quartier, Rue, Carrefour, établissement/etc..  . ."
                                                                            required>
                                                                        <div class="valid-feedback">
                                                                            Correct format !
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Votre address . . .
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-center">
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Commander</button>
                                                                </div>
                                                            </form>
                                                            <div class="list-group mt-5 p-0 justify-content-center"
                                                                id="allList" role="tablist"
                                                                style="flex-direction: row;">
                                                                <a href="#step2"
                                                                    class="list-group-item-dark w-35 py-2  rounded text-center btns"
                                                                    data-toggle="list" role="tab">
                                                                    Next <i class="fal fa-arrow-circle-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="step2">
                                <div class="row text-center">
                                    <div class="col-sm col-12">
                                        <div class="alert alert-secondary " role="alert">
                                            1 . Verification des Informations
                                        </div>
                                    </div>
                                    <div class="col-sm col-12">
                                        <div class="alert alert-primary bg-alert-bg" role="alert">
                                            2 . Cash Payment
                                        </div>
                                    </div>
                                    <div class="col-sm col-12">
                                        <div class="alert alert-secondary" role="alert">
                                            3 . Complete
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card my-5 text-center border-0">
                                                            <div class="card-header bg-transparent" id="card">
                                                                <ul class="nav nav-tabs card-header-tabs">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" href="#act1"
                                                                            data-toggle="tab" role="tab">
                                                                            <p class="card-bg h6">Carte de Crédit</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="#act2"
                                                                            data-toggle="tab" role="tab">
                                                                            <p class="card-bg h6">Paiement Cellulaire
                                                                            </p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="#act3"
                                                                            data-toggle="tab" role="tab">
                                                                            <p class="card-bg h6">ATM</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="act1">
                                                                    <div
                                                                        class="card-body border border-top-0 rounded-bottom">
                                                                        <div class="d-sm-flex justify-content-around">
                                                                            <i class="fab fa-cc-visa fa-7x icons"></i>
                                                                            <i
                                                                                class="fab fa-cc-mastercard fa-7x icons"></i>
                                                                            <i
                                                                                class="fab fa-cc-paypal fa-7x icons"></i>
                                                                            <i class="fab fa-cc-jcb fa-7x icons"></i>
                                                                        </div>
                                                                        <h5 class="card-title mt-2">Choose your card
                                                                            type</h5>
                                                                        <p class="card-text text-danger">Ces moyens de
                                                                            paiements seront bientôt disponible</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="act2">
                                                                    <div
                                                                        class="card-body border border-top-0 rounded-bottom">
                                                                        <form action=""
                                                                            class="d-sm-flex justify-content-around">
                                                                            <label
                                                                                class="btn btn-dark d-block d-flex justify-content-center">
                                                                                <input type="radio" name="options"
                                                                                    id="option3"
                                                                                    class="mrg-ct mr-2">
                                                                                <p class="int-chagne">MTN (Momo)</p>
                                                                            </label>
                                                                            <label
                                                                                class="btn btn-dark d-block d-flex justify-content-center">
                                                                                <input type="radio" name="options"
                                                                                    id="option3"
                                                                                    class="mrg-ct mr-2">
                                                                                <p class="int-chagne">Orange (OM)</p>
                                                                            </label>
                                                                        </form>
                                                                        <h5 class="card-title mt-3">Choisissez votre
                                                                            opérateur télephonique</h5>
                                                                        <p class="card-text text-danger">En cas de
                                                                            problème rencontrée, contactez nous.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="act3">
                                                                    <div
                                                                        class="card-body border border-top-0 rounded-bottom">
                                                                        <h5 class="card-title">Please transfer cash to
                                                                            the below account</h5>
                                                                        <span class="d-block my-2">Seller's bank
                                                                            account number</span>
                                                                        <span
                                                                            class="d-block text-danger font-weight-bold my-2">123-XXXXXXXXXXXXXXXX</span>
                                                                        <p class="card-text">We will tell to seller
                                                                            your transfer account message<br>Then please
                                                                            him shipping for you</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group my-5 p-0 justify-content-center" id="allList"
                                                    role="tablist" style="flex-direction: row;">
                                                    <a href="#step1"
                                                        class="list-group-item-dark mr-3 w-35 px-0 py-2 rounded text-center btns"
                                                        data-toggle="list" role="tab">
                                                        <i class="fal fa-arrow-circle-left"></i> Previous
                                                    </a>
                                                    <a href="#step3"
                                                        class="list-group-item-dark ml-3 w-35 px-0 py-2  rounded text-center btns"
                                                        data-toggle="list" role="tab">
                                                        Next <i class="fal fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="step3">
                                <div class="row text-center">
                                    <div class="col-sm col-12">
                                        <div class="alert alert-secondary" role="alert">
                                            1 . Verification des Informations
                                        </div>
                                    </div>
                                    <div class="col-sm col-12">
                                        <div class="alert alert-secondary" role="alert">
                                            2 . Cash Payment
                                        </div>
                                    </div>
                                    <div class="col-sm col-12">
                                        <div class="alert alert-primary bg-alert-bg" role="alert">
                                            3 . Complete
                                        </div>
                                    </div>

                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h2 class="text-center my-3">Bought information</h2>
                                                    <div class="card-body">
                                                        <table id="datatables-orders" class="table table-striped"
                                                            style="margin-bottom: 40px ; width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Detail</th>
                                                                    <th>Prix</th>
                                                                    <th>Total</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($wishlist as $u)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="rounded"
                                                                                style="background-image: url({{ $u->image }}); width: 60px; height: 60px; background-size: cover;">
                                                                            </div>
                                                                        </td>
                                                                        <td><b>{{ $u->name }}
                                                                                x{{ $u->quantity }}
                                                                            </b><br>le : {{ $u->fmt_date }}</td>
                                                                        <td>{{ $u->price }} FCFA</td>
                                                                        <td>{{ $u->quantity * $u->price }} XAF</td>
                                                                        <td>
                                                                            <a class="btn btn-primary btn-sm"
                                                                                data-toggle="modal"
                                                                                data-target="#editcartModal{{ $u->id }}"><i
                                                                                    class="fas fa-fw fa-edit "></i></a>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm "
                                                                                data-toggle="modal"
                                                                                data-target="#delcartModal{{ $u->id }}"><i
                                                                                    class="fas fa-fw fa-trash "></i></button>
                                                                            <div class="modal fade"
                                                                                id="editcartModal{{ $u->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="exampleModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog modal-sm modal-dialog-centered"
                                                                                    role="document">
                                                                                    <div class="modal-content">
                                                                                        <form method="post"
                                                                                            action="/editwish">
                                                                                            @csrf
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    Modifier
                                                                                                    la quantité ?</h5>
                                                                                                <button class="close"
                                                                                                    type="button"
                                                                                                    data-dismiss="modal"
                                                                                                    aria-label="Close">
                                                                                                    <span
                                                                                                        aria-hidden="true">×</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                Cliquez sur "Modifier"
                                                                                                en dessous si
                                                                                                vous voulez modifier
                                                                                                <b>{{ $u->name }}
                                                                                                    x{{ $u->quantity }}</b>
                                                                                                dans le panier.
                                                                                                <input
                                                                                                    class="form-control border-form-control"
                                                                                                    name="quantity"
                                                                                                    value="{{ $u->quantity }}"
                                                                                                    type="number"
                                                                                                    required
                                                                                                    min="1">
                                                                                            </div>
                                                                                            <div class="modal-footer">

                                                                                                <button
                                                                                                    class="btn btn-secondary"
                                                                                                    type="button"
                                                                                                    data-dismiss="modal">Cancel</button>
                                                                                                <button
                                                                                                    class="btn btn-primary"
                                                                                                    name="wishlistitem_id"
                                                                                                    value="{{ $u->id }}"
                                                                                                    type="submit">Modifier</button>

                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <h2 class="text-center my-3">Profile</h2>
                                                    <div class="">
                                                        <table class="table table-sm">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="35%" class="align-middle text-left">
                                                                        Name</td>
                                                                    <td class="text-left">Alick</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-left">Telephone</td>
                                                                    <td class="align-middle text-left">0966-666666</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-left">Email</td>
                                                                    <td class="align-middle text-left">A12345@gmail.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-left">Address</td>
                                                                    <td class="align-middle text-left">xxBlock xxRoad
                                                                        123</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group mt-5 p-0 mb-3 justify-content-center"
                                                id="allList" role="tablist" style="flex-direction: row;">
                                                <a href="#step1"
                                                    class="list-group-item-dark ml-3 w-35 py-2  rounded text-center btns home"
                                                    data-toggle="list" role="tab">
                                                    <i class="fas fa-home"></i> Back
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-success border-none" data-toggle="modal"
                            data-target="#checkcartModal"> Passez au Paiement </button>
                        <div class="modal fade" id="checkcartModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form method="post" action="/editwish">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Paiement</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Cliquer sur "<b>Continuer</b>" pour procéder au
                                            paiement
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-success" name="wishlistitem_id" value=""
                                                type="submit">Continuer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.lowbar', ['infos' => $personal])
    <!-- JavaScript code to load towns from the web API -->

    @include('customer.partials.footer')
    <script src="{!! url('js/datatables.js') !!}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Orders
            $("#datatables-orders").DataTable({
                responsive: true,
                aoColumnDefs: [{
                    bSortable: false,
                    aTargets: [-1]
                }]
            });
        });
    </script>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        var btns = document.querySelector('.home')
        btns.addEventListener('click', function() {
            alert('Thank for your order !');
        }, false);
        $(document).ready(function() {
            $('#delete').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var item = button.data('title')
                var modal = $(this)
                modal.find('.modal-title').text(item)
            })
            $(function() {
                $('#allList').tab('show')
            })
            $(function() {
                $('#card').tab('show')
            })
            $('.icons').click(function() {
                $(this).toggleClass('iconck').siblings().removeClass('iconck')
            })
            $('#turnbf').click(function() {
                $('#turnbf span').addClass('turn')
            })
            $('.turnaf').click(function() {
                $('.turnaf span').toggleClass('turnb')
            })
        });
    </script>
</body>

</html>
