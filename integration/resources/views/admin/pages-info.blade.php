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
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-xl-10">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="account" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">

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
