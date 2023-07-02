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
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                        href="#account" role="tab">
                                        Details
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                        href="#password" role="tab">
                                        Cartes
                                    </a>
                                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list"
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
                                            <h5 class="card-title mb-0">Liens Utiles</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="/admin/info_utiles" enctype="multipart/form-data">
                                                @csrf
                                                <div class="container-fluid p-0">

                                                    <div class="row mb-2 mb-xl-3">
                                                        <div class="col-auto d-none d-sm-block">
                                                            <h3><strong>Info Utiles</strong></h3>
                                                        </div>
                                                        <!-- BEGIN success modal -->
                                                        <div class="col-auto ms-auto text-end mt-n1">
                                                            @if(count($infoutiles) <7)
                                                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                                                data-bs-target="#newlink">Nouveau lien utile</a>
                                                            @else
                                                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                                            data-bs-target="#notiflink">Nouveau lien utile</a>
                                                            @endif
                                                        </div>
                                                        <div class="modal fade" id="notiflink"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Attention
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body m-3">
                                                                        <p class="mb-0">Pour des raisons de mises en forme, il vous est impossible
                                                                            d'insérer plus de 6 liens utiles. Veuillez contacter vos développeurs pour plus amples
                                                                            explication concernant ce message.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="newlink" tabindex="-1" role="dialog"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Nouveau Lien</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body m-3">
                                                                        <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h5 class="card-title">Ajouter un nouveau lien</h5>
                                                                                    <h6 class="card-subtitle text-muted">Veuillez à Remplir tout les
                                                                                        champs.</h6>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <form method="post" action="/admin/shop/categorie">
                                                                                        @csrf
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label" for="inputAddress">Nom</label>
                                                                                            <input type="text" class="form-control" name="nom"
                                                                                                id="inputAddress" maxlength="20" placeholder="Nature , ..." required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputAddress2">Lien</label>
                                                                                            <textarea class="form-control" rows="2" name="lien" id="inputAddress2"
                                                                                                placeholder="https://...." required> </textarea>
                                                                                        </div>
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
                                                                        <a class="dropdown-item" href="#">Autre actions</a>
                                                                        <a class="dropdown-item" href="#">Encore plus d'actions</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title mb-0">Links / Liens</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <table id="datatables-orders" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nom</th>
                                                                        <th>Lien</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($infoutiles as $c)
                                                                        <tr>
                                                                            <td><strong>{{ $c->nom }}</strong></td>
                                                                            <td><a href="{{ $c->lien }}">{{ $c->lien }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                                                    data-bs-target="#dellink{{ $c->id }}">Supprimer</a>
                                                                                <a href="#" class="btn btn-primary btn-sm "
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#linkset{{ $c->id }}">Modifier</a>
                                                                                <div class="modal fade" id="dellink{{ $c->id }}"
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
                                                                                                <p class="mb-0">Voulez vous réellement Supprimer ce 
                                                                                                    lien ? Noter que cete action est irréverssible.
                                                                                                </p>
                                                                                            </div>
                                                                                            <form method="get"
                                                                                                action="/admin/info_utiles/delete/{{ $c->id }}">
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
                                                                                <div class="modal fade"
                                                                                    id="linkset{{ $c->id }}" tabindex="-1"
                                                                                    role="dialog" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title">MAJ Lien</h5>
                                                                                                <button type="button" class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body m-3">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="card">
                                                                                                        <div class="card-header">
                                                                                                            <h5 class="card-title">Mettre à Jour un lien</h5>
                                                                                                            <h6 class="card-subtitle text-muted">
                                                                                                                Veuillez à Remplir tout les champs.</h6>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <form method="post"
                                                                                                                action="/admin/info_utiles/update/{{ $c->id }}">
                                                                                                                @csrf
                                                                                                                <div class="mb-3">
                                                                                                                    <label class="form-label"
                                                                                                                        for="inputAddress{{ $c->id }}">Nom</label>
                                                                                                                    <input type="text"
                                                                                                                        class="form-control"
                                                                                                                        name="nom"
                                                                                                                        value="{{ $c->nom }}"
                                                                                                                        id="inputAddress{{ $c->id }}"
                                                                                                                        placeholder="Nature , ..."required>
                                                                                                                </div>
                                                                                                                <div class="mb-3">
                                                                                                                    <label class="form-label"
                                                                                                                        for="inputAddress{{ $c->id }}">Lien</label>
                                                                                                                    <textarea class="form-control" rows="2" name="lien" id="inputAddress{{ $c->id }}" required>{{ $c->lien }} </textarea>
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

                                            <h5 class="card-title mb-0">Liens Publiques</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/info" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputFirstName">Facebook</label>
                                                        <input type="text" class="form-control" name="facebook"
                                                            value="{{ $info->facebook }}" id="inputFirstName"
                                                            placeholder="lien facebook" required>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputFirstName">Twitter</label>
                                                        <input type="text" class="form-control" name="twitter"
                                                            value="{{ $info->twitter }}" id="inputFirstName"
                                                            placeholder="lien vers compte twitter" required>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputFirstName">Linkedin</label>
                                                        <input type="text" class="form-control" name="linkedin"
                                                            value="{{ $info->linkedin }}" id="inputFirstName"
                                                            placeholder="lien vers la page linkedin" required>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputFirstName">Intstagram</label>
                                                        <input type="text" class="form-control" name="instagram"
                                                            value="{{ $info->instagram }}" id="inputFirstName"
                                                            placeholder="lien vers compte instagram" required>
                                                    </div>
                                                    
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
