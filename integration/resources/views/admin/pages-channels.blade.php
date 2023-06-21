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

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>Chaînes</strong> de Publication</h3>
                        </div>
                        <!-- BEGIN success modal -->
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                data-bs-target="#centeredModalSuccess">Nouvelle Chaînes</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nouvelle Chaînes</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Ajouter une nouvelle Chaînes</h5>
                                                    <h6 class="card-subtitle text-muted">Veuillez à Remplir tout les
                                                        champs.</h6>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" action="/admin/channel"
                                                        enctype="multipart/form-data">
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
                                                                placeholder="Chaînes de publication de ...." required> </textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="text-center">
                                                                    <img alt="Image Aperçu" src="#"
                                                                        id="img-preview1"
                                                                        class="rounded-circle img-responsive mt-2"
                                                                        width="128" height="128" />
                                                                    <div class="mt-2">
                                                                        <input type="file" name="image"
                                                                            accept=".jpg, .jpeg, .png" id="file1"
                                                                            onchange="getImage(this,'img-preview1')"
                                                                            class="inputfile">
                                                                        <label for="file1" class="btn btn-primary"><i
                                                                                class="fas fa-upload"></i>
                                                                            Choisir une
                                                                            Image</label>
                                                                    </div>
                                                                    <small>For best
                                                                        results, use an
                                                                        image at
                                                                        least 128px by
                                                                        128px in .jpg
                                                                        format</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="text-center">
                                                                    <img alt="Image de Couverture" src="#"
                                                                        id="img-preview2"
                                                                        class="rounded-circle img-responsive mt-2"
                                                                        width="128" height="128" />
                                                                    <div class="mt-2">
                                                                        <input type="file" accept=".jpg, .jpeg, .png"
                                                                            id="file2" name="cover_image"
                                                                            onchange="getImage(this,'img-preview2')"
                                                                            class="inputfile">
                                                                        <label for="file2" class="btn btn-primary"><i
                                                                                class="fas fa-upload"></i>
                                                                            Choisir une
                                                                            Image</label>
                                                                    </div>
                                                                    <small>For best
                                                                        results, use an
                                                                        image at
                                                                        least 128px by
                                                                        128px in .jpg
                                                                        format</small>
                                                                </div>
                                                            </div>
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
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Chaînes</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>#Aperçu</th>
                                        <th>Nom de Chaînes</th>
                                        <th>Visibilité</th>
                                        <th>Date de Création</th>
                                        <th>Nombre de Publication</th>
                                        <th>Nombre d'abonnés</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($channels as $c)
                                        <tr>
                                            <td><strong>#0{{ $c->id }}</strong></td>
                                            <td><img src="{{ $c->image }}" class="rounded-circle my-n1"
                                                    alt="Avatar" width="32" height="32"></td>
                                            <td>{{ $c->name }}</td>
                                            @if ($c->etat == 1)
                                                <td>Publique</td>
                                            @else
                                                <td>Fermé</td>
                                            @endif
                                            <td>{{ $c->createdat }}</td>
                                            <td><span class="badge badge-success-light">{{ $c->posts }}</span>
                                            </td>
                                            <td>{{ $c->subscribers }}</td>
                                            <td>{{ $c->description }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#sizedModalSm{{ $c->id }}">Supprimer</a>
                                                <a href="#" class="btn btn-primary btn-sm "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#centeredModalSuccess{{ $c->id }}">Modifier</a>
                                                <a href="#" class="btn btn-primary btn-sm "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#visibilite{{ $c->id }}">
                                                    @if ($c->etat == 2)
                                                        <i class="align-middle me-2" data-feather="eye"></i> Visibile
                                                    @else
                                                        <i class="align-middle me-2" data-feather="eye-off"></i>
                                                        Masquer
                                                    @endif
                                                </a>
                                                <div class="modal fade" id="visibilite{{ $c->id }}"
                                                    tabindex="-1" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Confirmation de Modification
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <p class="mb-0">Voulez vous réellement modifier la
                                                                    visibilité de
                                                                    la chaîne {{ $c->name }} ?
                                                                    Noter que cete action est réverssible et en fonction
                                                                    de la
                                                                    chaîne, celle ci pourrait être vu ou non par des
                                                                    internautes.
                                                                </p>
                                                            </div>
                                                            <form method="get"
                                                                action="/admin/channel/status/{{ $c->id }}">
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
                                                                <p class="mb-0">Voulez vous réellement Supprimer la
                                                                    chaîne
                                                                    {{ $c->name }} ?
                                                                    Noter que cete action est irréverssible et
                                                                    entrainera la
                                                                    surpression des publications faîtes dans celles ci.
                                                                </p>
                                                            </div>
                                                            <form method="get"
                                                                action="/admin/channel/delete/{{ $c->id }}">
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
                                                <div class="modal fade" id="centeredModalSuccess{{ $c->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">MAJ Chaînes</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">Mettre à Jour une
                                                                                Chaînes</h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez à Remplir tout les champs.</h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post"
                                                                                enctype="multipart/form-data"
                                                                                action="/admin/channel/update/{{ $c->id }}">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->id }}">Nom</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="name"
                                                                                        value="{{ $c->name }}"
                                                                                        id="inputAddress{{ $c->id }}"
                                                                                        placeholder="Nature , ..."required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->id }}">Description</label>
                                                                                    <textarea class="form-control" rows="3" name="description" id="inputAddress{{ $c->id }}" required>{{ $c->description }} </textarea>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="text-center">
                                                                                            <img alt="Image Aperçu"
                                                                                                src="{{ $c->image }}"
                                                                                                id="img-preview1{{ $c->id }}"
                                                                                                class="rounded-circle img-responsive mt-2"
                                                                                                width="128"
                                                                                                height="128" />
                                                                                            <div class="mt-2">
                                                                                                <input type="file"
                                                                                                    name="image"
                                                                                                    accept=".jpg, .jpeg, .png"
                                                                                                    id="file1{{ $c->id }}"
                                                                                                    onchange="getImage(this,'img-preview1{{ $c->id }}')"
                                                                                                    class="inputfile">
                                                                                                <label
                                                                                                    for="file1{{ $c->id }}"
                                                                                                    class="btn btn-primary"><i
                                                                                                        class="fas fa-upload"></i>
                                                                                                    Choisir une
                                                                                                    Image</label>
                                                                                            </div>
                                                                                            <small>For best
                                                                                                results, use an
                                                                                                image at
                                                                                                least 128px by
                                                                                                128px in .jpg
                                                                                                format</small>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="text-center">
                                                                                            <img alt="Image de Couverture"
                                                                                                src="{{ $c->cover_image }}"
                                                                                                id="img-preview2{{ $c->id }}"
                                                                                                class="rounded-circle img-responsive mt-2"
                                                                                                width="128"
                                                                                                height="128" />
                                                                                            <div class="mt-2">
                                                                                                <input type="file"
                                                                                                    accept=".jpg, .jpeg, .png"
                                                                                                    id="file2{{ $c->id }}"
                                                                                                    name="cover_image"
                                                                                                    onchange="getImage(this,'img-preview2{{ $c->id }}')"
                                                                                                    class="inputfile">
                                                                                                <label
                                                                                                    for="file2{{ $c->id }}"
                                                                                                    class="btn btn-primary"><i
                                                                                                        class="fas fa-upload"></i>
                                                                                                    Choisir une
                                                                                                    Image</label>
                                                                                            </div>
                                                                                            <small>For best
                                                                                                results, use an
                                                                                                image at
                                                                                                least 128px by
                                                                                                128px in .jpg
                                                                                                format</small>
                                                                                        </div>
                                                                                    </div>
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
