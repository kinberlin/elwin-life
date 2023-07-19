@include('admin.partials.header')
<!--
  HOW TO USE:
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        @include('admin.partials.navbar', ["actif"=>2])

        <div class="main">
            @include('admin.partials.topbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>Historique d'</strong>Abonnements</h3>
                        </div>
                        <!-- BEGIN success modal -->
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                data-bs-target="#centeredModalSuccess">Filtrer par Année</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Choisissez une année</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Ajouter une nouvelle Catégorie</h5>
                                                    <h6 class="card-subtitle text-muted">Veuillez à Remplir tout les
                                                        champs.</h6>
                                                </div>
                                                <div class="card-body">
                                                    <form method="get" action="/admin/subscriptions">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputState">Année</label>
                                                            <select id="inputState" name="year" class="form-control">
                                                                @foreach($years as $y)
                                                                <option value="{{$y->year}}">{{$y->year}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Filtrer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning"
                                            data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END success modal -->
                    </div>

                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Abonnements</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Début -> Fin</th>
                                        <th>Id Client</th>
                                        <th>Id Tarif</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($su as $c)
                                        <tr>
                                            <td><strong>#{{ $c->id }}</strong></td>
                                            <td>{{ $c->start_date }} -> {{ $c->end_date }}</td>
                                            <td>{{ $c->user }}</td>
                                            <td>{{ $c->bundle}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#sizedModalSm{{ $c->id }}">Supprimer</a>
                                                    <a class="btn btn-primary btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#durationadd{{ $c->id }}">+
                                                    Durée</a>
                                                <a class="btn btn-warning btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#durationred{{ $c->id}}">-
                                                    Durée</a>
                                                <div class="modal fade" id="sizedModalSm{{ $c->id }}"
                                                    tabindex="-1" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Confirmation de Suppression
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                
                                                                <p class="mb-0"> <span class="mb-0 badge badge-danger-light">ATTENTION :</span> Voulez vous réellement Supprimer cet
                                                                    élément ? Noter que cete action est irréverssible.<br>
                                                                    <b>Et que ce client risque se retrouver sans forfait si celui ci est son seul forfait actif.</b>
                                                                </p>
                                                            </div>
                                                            <form method="get"
                                                                action="/admin/subscriptions/delete/{{ $c->id }}">
                                                                @csrf
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" name="id"
                                                                        value="{{ $c->id }}"
                                                                        class="btn btn-danger">Continuer</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="durationadd{{ $c->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">
                                                                    Ajouter des Jours
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                Ajouter
                                                                                des
                                                                                Jours
                                                                            </h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez
                                                                                à
                                                                                Remplir
                                                                                tout
                                                                                les
                                                                                champs.
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post" action="/admin/subscription/adddays">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress">Nombre
                                                                                        de
                                                                                        Jour
                                                                                        á
                                                                                        ajouter</label>
                                                                                    <input type="hidden" class="form-control"
                                                                                        name="sub"
                                                                                        value="{{ $c->id }}">
                                                                                    <input type="number" class="form-control"
                                                                                        name="add"
                                                                                        placeholder="Nombre de jours..." required>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Ajouter</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-bs-dismiss="modal">Fermer</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="durationred{{ $c->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">
                                                                    Supprimer
                                                                    des Jours de
                                                                    l'abonnement
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                Supprimer
                                                                                des
                                                                                Jours
                                                                            </h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez
                                                                                à
                                                                                Remplir
                                                                                tout
                                                                                les
                                                                                champs.
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post" action="/admin/subscription/deldays">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress">Nombre
                                                                                        de
                                                                                        Jour
                                                                                        á
                                                                                        Supprimer</label>
                                                                                    <input type="hidden" class="form-control"
                                                                                        name="sub"
                                                                                        value="{{ $c->id }}">
                                                                                    <input type="number" class="form-control"
                                                                                        name="add"
                                                                                        placeholder="Nombre de jours..." required>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Supprimer</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-bs-dismiss="modal">Fermer</button>
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
            </main>

            @include('admin.partials.low-footer')
        </div>
    </div>
    @include('admin.partials.footer')
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
