@include('customer.partials.header')
<style type="text/css">
    .form-buttons {
        margin-top: 20px;
    }

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
        @include('customer.partials.navbar', ['infos' => $subinfo, 'actif'=>6])
        <div id="content-wrapper">
            <form method="post" action="/delorder">
                @csrf
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
                            <h1 class="text-center my-5">Mes Commandes</h1>
                            <table id="datatables-orders" class="table table-striped"
                                style="margin-bottom: 40px ; width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Détail</th>
                                        <th>Addresse</th>
                                        <th>Ville</th>
                                        <th>Moyen de Paiement</th>
                                        <th>Réductions</th>
                                        <th>Frais de Livraison</th>
                                        <th>Montant</th>
                                        <th>status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $u)
                                        <tr>
                                            <td>COM{{ $u->order_id }}</td>
                                            <td>Récepteur : <b>{{ $u->name }}</b> <br><b>Tél : {{ $u->phone }}</b>
                                            </td>
                                            <td>{{ $u->address }}</td>
                                            <td>{{ $u->city }} - {{$u->country}}</td>
                                            <td>{{ $u->payment }}</td>
                                            <td>{{ $u->discount }} FCFA</td>
                                            <td>{{ $u->delivery_fee }} FCFA</td>
                                            <td>{{ $u->amount }} FCFA</td>
                                            <td>{{ $u->status}}
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm "
                                                    data-toggle="modal"
                                                    data-target="#delcartModal{{ $u->order_id }}"><i
                                                        class="fas fa-fw fa-trash "></i></button>
                                                <div class="modal fade" id="delcartModal{{ $u->order_id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-sm modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">

                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Supprimer la commande ?
                                                                </h5>
                                                                <button class="close" type="button"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Cliquez sur
                                                                "Supprimer"
                                                                en dessous si
                                                                vous voulez supprimer la commande
                                                                <b>COM{{ $u->order_id }}</b>.
                                                                <input class="form-control border-form-control"
                                                                    name="order" value="{{ $u->order_id }}"
                                                                    type="hidden">
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button class="btn btn-primary" type="button"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button class="btn btn-danger"
                                                                    type="submit">Supprimer</button>

                                                            </div>
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
            </form>
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
</body>

</html>
