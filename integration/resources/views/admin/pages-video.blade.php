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
        @include('admin.partials.navbar',["actif"=>3])

        <div class="main">
            @include('admin.partials.topbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>Videos</strong> de Blog</h3>
                        </div>
                        <!-- BEGIN success modal -->
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                data-bs-target="#centeredModalSuccess">Nouvelle Video</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nouvelle Video</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Ajouter une Nouvelle Video</h5>
                                                    <h6 class="card-subtitle text-muted">Veuillez à Remplir tout les
                                                        champs.</h6>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" action="/iframe/blog/video">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputtitre">Titre</label>
                                                            <input type="text" class="form-control" name="title"
                                                                id="inputtitre" placeholder="Titre de la Publication"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputAuthors">Auteurs</label>
                                                            <input type="text" class="form-control" name="authors"
                                                                id="inputAuthors" placeholder="Auteurs de la vidéo"
                                                                required>
                                                        </div>
                                                        <label class="form-label" for="inputAuthors">Chaîne</label>
                                                        <div class="mb-3">
                                                            <select class="form-control choices-single" name="channel">
                                                                <optgroup label="Chaînes">
                                                                    @foreach ($channels as $c)
                                                                        <option value="{{ $c->id }}">
                                                                            {{ $c->name }}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputAuthors">Catégorie</label>
                                                            <select class="form-control choices-single" name="category">
                                                                <optgroup label="category">
                                                                    @foreach ($categories as $c)
                                                                        <option value="{{ $c->category_id }}">
                                                                            {{ $c->name }}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
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
                            <h5 class="card-title mb-0">Videos Publiés</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Titre</th>
                                        <th>Date de Création</th>
                                        <th>Chaîne</th>
                                        <th>Catégorie</th>
                                        <th>Auteurs</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $c)
                                        <tr>
                                            <td><strong>#0{{ $c->id }}</strong></td>
                                            <td>{{ $c->titre }}</td>
                                            <td>{{ $c->fmt_date }}</td>
                                            <td><span class="badge badge-warning-light">{{ $c->name }}</span>
                                            </td>
                                            <td><span class="badge badge-success-light">{{ $c->cats }}</span>
                                            </td>
                                            <td>{{ $c->authors }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#sizedModalSm{{ $c->id }}">Supprimer</a>
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
                                                                <p class="mb-0">Voulez vous réellement Supprimer
                                                                    la video
                                                                    " <strong>{{ $c->titre }}</strong>" ?
                                                                    Noter que cete action est irréverssible.
                                                                </p>
                                                            </div>
                                                            <form method="get"
                                                                action="/admin/blog/video/delete/{{ $c->id }}">
                                                                @csrf
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
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
                                                                <h5 class="modal-title">MAJ Video</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">Mettre à Jour une
                                                                                Video</h5>
                                                                            <h6 class="card-subtitle text-muted">
                                                                                Veuillez à Remplir tout les champs.</h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form method="post"
                                                                                action="/iframe/blog/video/update/">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $c->id }}"
                                                                                    id="inputAddress{{ $c->id }}">
                                                                                <input type="hidden" name="duration"
                                                                                    value="{{ $c->duration }}"
                                                                                    id="inputAddress{{ $c->duration}}">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->id }}">Titre</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="titre"
                                                                                        value="{{ $c->titre }}"
                                                                                        id="inputAddress{{ $c->id }}"
                                                                                        placeholder="Nature , ..."required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAuthors">Auteurs</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="authors"
                                                                                        value="{{ $c->authors }}"
                                                                                        id="inputAuthors"
                                                                                        placeholder="Auteurs de la vidéo"
                                                                                        required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->id }}">Chaîne</label>
                                                                                    <select
                                                                                        class="form-control choices-single"
                                                                                        name="channel">
                                                                                        <optgroup label="Chaînes">
                                                                                            @foreach ($channels as $ch)
                                                                                                @if ($ch->id == $c->channel)
                                                                                                    <option
                                                                                                        value="{{ $ch->id }}"
                                                                                                        selected>
                                                                                                        {{ $ch->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $ch->id }}">
                                                                                                        {{ $ch->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </optgroup>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="inputAddress{{ $c->id }}">Catégorie</label>
                                                                                    <select
                                                                                        class="form-control choices-single"
                                                                                        name="category">
                                                                                        <optgroup label="Chaînes">
                                                                                            @foreach ($categories as $ch)
                                                                                                @if ($ch->category_id == $c->category)
                                                                                                    <option
                                                                                                        value="{{ $ch->category_id }}"
                                                                                                        selected>
                                                                                                        {{ $ch->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $ch->category_id }}">
                                                                                                        {{ $ch->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </optgroup>
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
