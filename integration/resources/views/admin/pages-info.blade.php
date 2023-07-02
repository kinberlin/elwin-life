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
        @include('admin.partials.navbar')

        <div class="main">
            @include('admin.partials.topbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Informations Utiles</h1>

                    <div class="row">
                        <div class="col-md-3 col-xl-2">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Paramètres de Compte</h5>
                                </div>

                                <div class="list-group list-group-flush" role="tablist">
                                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list"
                                        href="#account" role="tab">
                                        Details
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                        href="#password" role="tab">
                                        Cartes
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                        href="#utiles" role="tab">
                                        Liens utiles
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-xl-10">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="account" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">
                                            <span>Les données ci-dessous seront affichés principalement dans les factures/reçus/commandes</span>
                                            <h5 class="card-title mb-0">Données publiques</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="/admin/info" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputbp">Telephone</label>
                                                            <input type="text" class="form-control" name="phone"
                                                                id="inputbp" value="{{ $info->phone }}"
                                                                placeholder="Phone">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputcp">Addresse
                                                                Mail</label>
                                                            <input type="email" class="form-control" name="email"
                                                                id="inputcp" value="{{ $info->email }}"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <img alt="Elwin Logo" id="img-preview"
                                                                src="{!! url('img/favicon.png') !!}"
                                                                class="rounded-circle img-responsive mt-2"
                                                                width="128" height="128" />
                                                            <small>Contactez vos developpeurs si vous souhaitez mettre a
                                                                jour le logo de ce site</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Données Publiques</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/info" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputFirstName">Nom</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $info->name }}" id="inputFirstName"
                                                            placeholder="Nom" required>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputLastName">Ville</label>
                                                        <input type="text" class="form-control" name="city"
                                                            id="inputLastName" value="{{ $info->city }}"
                                                            placeholder="Prenom" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputEmail4">Addresss</label>
                                                    <input type="text" class="form-control" name="address"
                                                        id="inputEmail4" value="{{ $info->address }}"
                                                        placeholder="Address" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputcountry">Country</label>
                                                    <input type="text" class="form-control" name="country"
                                                        id="inputcountry" value="{{ $info->country }}"
                                                        placeholder="Pays" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="password" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Carte</h5>

                                            <form action="/admin/info" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        for="inputPasswordCurrent">Latitude</label>
                                                    <input type="text" name="lat" class="form-control"
                                                        value="{{ $info->lat }}" id="inputPasswordCurrent">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputPasswordNew">Longitude</label>
                                                    <input type="text" name="lon" class="form-control"
                                                        value="{{$info->lon }}" id="inputPasswordNew">
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit"
                                                        class="btn btn-primary">Enregistrer</button>
                                                </div>
                                                    <div class="col-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-title">Aperçu sur la carte</h5>
                                                                <h6 class="card-subtitle text-muted">Affiche un
                                                                    mélange de
                                                                    vues normales et satellites..</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="content" id="markers_map"
                                                                    style="height: 300px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show  show active" id="utiles" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">
                                            <span>Les données ci-dessous seront affichés principalement dans les factures/reçus/commandes</span>
                                            <h5 class="card-title mb-0">Données publiques</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="/admin/info" enctype="multipart/form-data">
                                                @csrf
                                                <div class="container-fluid p-0">

                                                    <div class="row mb-2 mb-xl-3">
                                                        <div class="col-auto d-none d-sm-block">
                                                            <h3><strong>Catégories</strong> de Produit</h3>
                                                        </div>
                                                        <!-- BEGIN success modal -->
                                                        <div class="col-auto ms-auto text-end mt-n1">
                                                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                                                data-bs-target="#centeredModalSuccess">Nouvelle Catégorie</a>
                                                        </div>
                                                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Nouvelle Catégorie</h5>
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
                                                                                    <form method="post" action="/admin/shop/categorie">
                                                                                        @csrf
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="inputAddress">Nom</label>
                                                                                            <input type="text" class="form-control" name="name"
                                                                                                id="inputAddress" placeholder="Nature , ..." required>
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
                                                                                            <div class="mb-3 col-md-4">
                                                                                                <label class="form-label" for="inputState">State</label>
                                                                                                <select id="inputState" class="form-control">
                                                                                                    <option selected="">Choose...</option>
                                                                                                    <option>...</option>
                                                                                                </select>
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
                                            </form>

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Données Publiques</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/info" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputFirstName">Nom</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $info->name }}" id="inputFirstName"
                                                            placeholder="Nom" required>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputLastName">Ville</label>
                                                        <input type="text" class="form-control" name="city"
                                                            id="inputLastName" value="{{ $info->city }}"
                                                            placeholder="Prenom" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputEmail4">Addresss</label>
                                                    <input type="text" class="form-control" name="address"
                                                        id="inputEmail4" value="{{ $info->address }}"
                                                        placeholder="Address" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputcountry">Country</label>
                                                    <input type="text" class="form-control" name="country"
                                                        id="inputcountry" value="{{ $info->country }}"
                                                        placeholder="Pays" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            @include('admin.partials.low-footer')
        </div>

    </div>
    @include('admin.partials.footer')
    <script>
        function getImage(input, name) {
            var file = input.files[0];
            if (file.size > 2000000) {
                alert("La taille du fichier ne doit pas dépasser 2Mb (2048kb) ");
                input.value = "";
                return;
            }
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('' + name);
                output.src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    </script>
    <script>
        function initMaps() {
            var markersMap = {
                zoom: 14,
                center: {
                    lat: {{ $info->lat }}, //lat: 40.712784,
                    lng: {{ $info->lon }} //-74.005941
                },
                mapTypeId: google.maps.MapTypeId.TERRAIN
            };
            var markersMap = new google.maps.Map(document.getElementById("markers_map"), markersMap)
            var marker = new google.maps.Marker({
                position: {
                    lat: 40.712784,
                    lng: -74.005941
                },
                map: markersMap,
                title: "Hello World!"
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTU0Z-xRPDiH08db7P7QASdJ5pASq2CH4&amp;callback=initMaps"
        async defer></script>
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
