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
        @include('admin.partials.navbar', ["actif"=>4])

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
                                                    <form method="post" action="/admin/shop/categorie">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputAddress">Prix</label>
                                                            <input type="number" class="form-control" name="price"
                                                                id="inputAddress" placeholder="Prix en XAF" required>
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label" for="inputState">Type de Tarif</label>
                                                            <select id="inputState" name="category" class="form-control" required>
                                                                <option selected="">Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="inputAddress2">Description</label>
                                                            <textarea class="form-control" rows="3" name="description" id="inputAddress2"
                                                                placeholder="Catégorie de produit de ...." required> </textarea>
                                                        </div>
                                                        <!--
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="inputCity">City</label>
                                                                <input type="text" class="form-control" id="inputCity">
                                                            </div>
                                                            
                                                            <div class="mb-3 col-md-2">
                                                                <label class="form-label" for="inputZip">Zip</label>
                                                                <input type="text" class="form-control" id="inputZip">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">
                                                                <input type="checkbox" class="form-check-input">
                                                                <span class="form-check-label">Check me out</span>
                                                            </label>
                                                        </div>
                                                    -->
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
                                        <th>Nom de Catégorie</th>
                                        <th>Date de Création</th>
                                        <th>Nombre de Produit</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $c)
                                        <tr>
                                            <td><strong>#0{{ $c->category_id }}</strong></td>
                                            <td>{{ $c->name }}</td>
                                            <td>{{ $c->createdat }}</td>
                                            <td><span class="badge badge-success-light">{{ $c->no_produit }}</span>
                                            </td>
                                            <td>{{ $c->description }}</td>
                                            <td>
                                                @if($c->category_id > 25)
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#sizedModalSm{{ $c->category_id }}">Supprimer</a>
                                                @endif
                                                <a href="#" class="btn btn-primary btn-sm "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#centeredModalSuccess{{ $c->category_id }}">Modifier</a>
                                                <div class="modal fade" id="sizedModalSm{{ $c->category_id }}"
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
                                                                    élément ? Noter que cete action est irréverssible.
                                                                </p>
                                                            </div>
                                                            <form method="post"
                                                                action="/admin/shop/categorie/delete/{{ $c->category_id }}">
                                                                @csrf
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" name="id"
                                                                        value="{{ $c->category_id }}"
                                                                        class="btn btn-danger">Continuer</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade"
                                                    id="centeredModalSuccess{{ $c->category_id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">MAJ Catégorie</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">Mettre à Jour une
                                                                                Catégorie</h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez à Remplir tout les champs.</h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post"
                                                                                action="/admin/shop/categorie/{{ $c->category_id }}">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->category_id }}">Nom</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="name"
                                                                                        value="{{ $c->name }}"
                                                                                        id="inputAddress{{ $c->category_id }}"
                                                                                        placeholder="Nature , ..."required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->category_id }}">Description</label>
                                                                                    <textarea class="form-control" rows="3" name="description" id="inputAddress{{ $c->category_id }}" required>{{ $c->description }} </textarea>
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
