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
        @include('admin.partials.navbar', ['actif' => 4])

        <div class="main">
            @include('admin.partials.topbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>Tarifs</strong> d'Abonnements</h3>
                        </div>
                        <!-- BEGIN success modal -->
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                data-bs-target="#centeredModalSuccess">Nouveau Tarif</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nouveau Tarif</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Ajouter un Nouveau Tarif</h5>
                                                    <h6 class="card-subtitle text-muted">Veuillez à Remplir tout les
                                                        champs.</h6>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" action="/admin/newbundles">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputAddress">Prix</label>
                                                            <input type="number" class="form-control" name="price"
                                                                id="inputAddress" placeholder="Prix en XAF" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputAddress">Durée en
                                                                Jour</label>
                                                            <input type="number" class="form-control" name="duration"
                                                                id="inputAddress" placeholder="365" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputState">Type de
                                                                Tarif</label>
                                                            <select id="inputState" name="category" class="form-control"
                                                                required>
                                                                @foreach ($bundlecat as $bc)
                                                                    <option value="{{ $bc->id }}">
                                                                        {{ $bc->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <span>Vous pourriez ajouter les avantages liés á ce tarif une
                                                            fois le tarif créer.</span>
                                                        <button type="submit" class="btn btn-success">Ajouter</button>
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
                            <h5 class="card-title mb-0">Catégories</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Type Tarif</th>
                                        <th>Durée (Jours)</th>
                                        <th>Montant (XAF)</th>
                                        <th>Avantages</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bundles as $c)
                                        <tr>
                                            <td><strong>#0{{ $c->id }}</strong></td>
                                            <td>{{ $c->name }}</td>
                                            <td>{{ $c->duration }} </td>
                                            <td><span class="badge badge-success-light">{{ $c->price }}</span></td>
                                            <td>

                                                @foreach ($avt->filter(function ($avt)  use ($c) {
        return $avt->bundle === $c->id;
    }) as $a)
                                                    -
                                                    <span class="badge badge-warning-light">{{ $a->name }}</span>
                                                    <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#sizedModalSm{{ $c->id }}">Supprimer</a>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#avt{{ $c->id }}">+ Avantage</a>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#delavt{{ $c->id }}">- Avantage</a>
                                                <div class="modal fade" id="avt{{ $c->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Nouveau Avantage</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">Ajouter un Avantage
                                                                            </h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez à Remplir tout les champs.</h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post"
                                                                                action="/admin/newavt">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputprice{{ $c->id }}">Description</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="name"
                                                                                        id="inputprice{{ $c->id }}"
                                                                                        maxlength="25" minlength="2"
                                                                                        placeholder="Description en moins de 25 lettres"
                                                                                        required>
                                                                                </div>
                                                                                <input type="hidden"
                                                                                    class="form-control"
                                                                                    value="{{ $c->id }}"
                                                                                    name="bundle">
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
                                                <a href="#" class="btn btn-primary btn-sm "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#centeredModalSuccess{{ $c->id }}">Modifier</a>
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
                                                                <p class="mb-0">Voulez vous réellement Supprimer cet
                                                                    élément ? Noter que cete action est irréverssible.<br>
                                                                    <b> NOTE : </b> <strong>La suppression d'un forfait supprimera entrainera la suppression de tout les abonnements liés á celui ci.
                                                                        Présentement, il y a 
                                                                    </strong>
                                                                </p>
                                                            </div>
                                                            <form method="get"
                                                                action="/admin/delbundles/{{ $c->id }}">
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
                                                <div class="modal fade" id="delavt{{ $c->id }}"
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
                                                            <div class="card-body">
                                                                <form method="post"
                                                                    action="/admin/delavt">
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="inputprice{{ $c->id }}">Veuillez Choisir l'avantage a supprimer</label>
                                                                            <select id="inputState" name="id" class="form-control"
                                                                            required>
                                                                            @foreach ($avt->filter(function ($avt) use ($c) {
                                                                                return $avt->bundle === $c->id;
                                                                            }) as $a)
                                                                                                                            -
                                                                                                                            <option value="{{$a->id}}">{{ $a->name }}</option>
                                                                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Supprimer</button>
                                                                </form>
                                                            </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="centeredModalSuccess{{ $c->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">MAJ Tarif</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">Mettre à Jour un
                                                                                Tarif</h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez à Remplir tout les champs.</h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post"
                                                                                action="/admin/updatebundles/{{ $c->id }}">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputprice{{ $c->id }}">Prix</label>
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        value="{{ $c->price }}"
                                                                                        name="price"
                                                                                        id="inputprice{{ $c->id }}"
                                                                                        placeholder="Prix en XAF"
                                                                                        required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->id }}">Durée
                                                                                        en Jour</label>
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        value="{{ $c->duration }}"
                                                                                        name="duration"
                                                                                        id="inputAddress{{ $c->id }}"
                                                                                        placeholder="365" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputState{{ $c->id }}">Type
                                                                                        de
                                                                                        Tarif</label>
                                                                                    <select
                                                                                        id="inputState{{ $c->id }}"
                                                                                        name="category"
                                                                                        class="form-control" required>
                                                                                        @foreach ($bundlecat as $bc)
                                                                                            @if ($bc->id == $c->category)
                                                                                                <option
                                                                                                    value="{{ $bc->id }}"
                                                                                                    selected>
                                                                                                    {{ $bc->name }}
                                                                                                </option>
                                                                                            @else
                                                                                                <option
                                                                                                    value="{{ $bc->id }}">
                                                                                                    {{ $bc->name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Mettre à
                                                                                    Jour</button>
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
