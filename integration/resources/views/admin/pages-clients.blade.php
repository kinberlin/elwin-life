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

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Clients</h1><a class="badge bg-primary ms-2" href="#"
                            target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a>
                    </div>

                    <div class="row">
                        <div class="col-xl-8">
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
                                    <h5 class="card-title mb-0">Clients</h5>
                                </div>
                                <div class="card-body">
                                    <table id="datatables-orders" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $u)
                                                <tr>
                                                    <td><img src="{{ $u->image }}" width="32" height="32"
                                                            class="rounded-circle my-n1" alt="{{ $u->firstname }}">
                                                    </td>
                                                    <td>{{ $u->firstname }}</td>
                                                    <td>{{ $u->lastname }}</td>
                                                    @if ($u->status == 1)
                                                        <td><span class="badge bg-success">Actif</span></td>
                                                    @else
                                                        <td><span class="badge bg-warning">Inactif</span></td>
                                                    @endif
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#sizedModalSm{{ $u->id }}">Modifier</a>
                                                        <button type="button" class="btn btn-primary btn-sm "
                                                            onclick="getAbout('centeredModalSuccess{{ $u->id }}')">A
                                                            Propos</button>
                                                        <div class="modal fade" id="sizedModalSm{{ $u->id }}"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Confirmation de
                                                                            Modification
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body m-3">
                                                                        <p class="mb-0">Voulez vous réellement
                                                                            modifier le statut de l'utilisateur
                                                                            <b>{{ $u->firstname }} {{ $u->lastname }}
                                                                            </b>?
                                                                            <br>Noter que ces modifications ne prendront
                                                                            effet qu'à la prochaine connexion de
                                                                            l'utilisateur et que vous pourrez toujours
                                                                            répeter cette action dans l'avenir.
                                                                        </p>
                                                                    </div>
                                                                    <form method="get"
                                                                        action="/admin/user/status/{{ $u->id }}">
                                                                        @csrf
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" name="id"
                                                                                value="{{ $u->id }}"
                                                                                class="btn btn-danger">Continuer</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade"
                                                            id="centeredModalSuccess{{ $u->id }}" tabindex="-1"
                                                            role="dialog" aria-hidden="true">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <div class="card-actions float-end">
                                                                        <div class="dropdown position-relative">
                                                                            <a href="#" data-bs-toggle="dropdown"
                                                                                data-bs-display="static">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-more-horizontal align-middle">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="1">
                                                                                    </circle>
                                                                                    <circle cx="19"
                                                                                        cy="12" r="1">
                                                                                    </circle>
                                                                                    <circle cx="5"
                                                                                        cy="12" r="1">
                                                                                    </circle>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="card-title mb-0">{{ $u->firstname }}
                                                                        {{ $u->lastname }}</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row g-0">
                                                                        <div
                                                                            class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                                                            <a href="{{ $u->image }}">
                                                                                <img src="{{ $u->image }}"
                                                                                    class="rounded-circle mt-2"
                                                                                    alt="avatar" width="64"
                                                                                    height="64">
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-sm-9 col-xl-12 col-xxl-9">
                                                                            <strong>About me</strong>
                                                                            <p>Pas de détail.</p>
                                                                        </div>
                                                                    </div>

                                                                    <table class="table table-sm mt-2 mb-4">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>Nom</th>
                                                                                <td>{{ $u->firstname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Prenom</th>
                                                                                <td>{{ $u->lastname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Company</th>
                                                                                <td>{{ $u->company }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>BP</th>
                                                                                <td>{{ $u->BP }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Email</th>
                                                                                <td>{{ $u->email }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Phone</th>
                                                                                <td>{{ $u->phone }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Status</th>

                                                                                @if ($u->status == 1)
                                                                                    <td><span
                                                                                            class="badge bg-success">Actif</span>
                                                                                    </td>
                                                                                @else
                                                                                    <td><span
                                                                                            class="badge bg-warning">Inactif</span>
                                                                                    </td>
                                                                                @endif
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <strong>Abonnement</strong>
                                                                    @if (isset($rec[$u->id]))
                                                                        <table class="table table-sm mt-2 mb-4">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>Début</th>
                                                                                    <td>{{ $rec[$u->id]->start_date }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Fin</th>
                                                                                    <td>{{ $rec[$u->id]->end_date }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Actions</th>
                                                                                    <td>
                                                                                        <a class="btn btn-primary btn-sm"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#durationadd{{ $rec[$u->id]->id }}">+
                                                                                            Durée</a>
                                                                                        <a class="btn btn-warning btn-sm"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#durationred{{ $rec[$u->id]->id }}">-
                                                                                            Durée</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    @else
                                                                        <p>Aucun Abonnement</p>
                                                                    @endif
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
                        @foreach ($users as $u)
                            @if (isset($rec[$u->id]))
                                <div class="modal fade" id="durationadd{{ $rec[$u->id]->id }}" tabindex="-1"
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
                                                            <form method="post" action="/admin/bundle/adddays">
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
                                                                        value="{{ $rec[$u->id]->id }}">
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
                                <div class="modal fade" id="durationred{{ $rec[$u->id]->id }}" tabindex="-1"
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
                                                            <form method="post" action="/admin/bundle/deldays">
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
                                                                        value="{{ $rec[$u->id]->id }}">
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
                            @endif
                        @endforeach
                        <div class="col-xl-4" id="selected-content">
                            <div class="card">
                                <div class="card-header">
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
                                    <h5 class="card-title mb-0">Flore</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                            <img src="{!! url('img/avatars/avatar-3.jpg') !!}" width="64" height="64"
                                                class="rounded-circle mt-2" alt="Angelica Ramos">
                                        </div>
                                        <div class="col-sm-9 col-xl-12 col-xxl-9">
                                            <strong>A Propos</strong>
                                            <p>Je suis Pueumeu Nguetchuissi</p>
                                        </div>
                                    </div>

                                    <table class="table table-sm mt-2 mb-4">
                                        <tbody>
                                            <tr>
                                                <th>Nom</th>
                                                <td>Pueumeu </td>
                                            </tr>
                                            <tr>
                                                <th>Prenom</th>
                                                <td>Nguetchuissi</td>
                                            </tr>
                                            <tr>
                                                <th>Company</th>
                                                <td>FIVE PERFECT SARL</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>contact@elwinlife.com </td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td> 651510807/677551747</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        function getAbout(name) {
            const myTable = document.querySelector('#' + name);
            const selectedContent = myTable.innerHTML;
            // Set the selected content into the div element
            const selectedDiv = document.querySelector('#selected-content');
            selectedDiv.innerHTML = selectedContent;
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
