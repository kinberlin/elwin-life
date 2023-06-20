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

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Clients</h1><a class="badge bg-primary ms-2"
                            href="../adminkit.io/pricing/index.html" target="_blank">Pro Component <i
                                class="fas fa-fw fa-external-link-alt"></i></a>
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

                                                                    <strong>Activity</strong>
                                                                    <ul class="timeline mt-2 mb-0">
                                                                        <li class="timeline-item">
                                                                            <strong>Signed out</strong>
                                                                            <span
                                                                                class="float-end text-muted text-sm">30m
                                                                                ago</span>
                                                                            <p>Nam pretium turpis et arcu. Duis arcu
                                                                                tortor, suscipit...</p>
                                                                        </li>
                                                                        <li class="timeline-item">
                                                                            <strong>Created invoice #1204</strong>
                                                                            <span
                                                                                class="float-end text-muted text-sm">2h
                                                                                ago</span>
                                                                            <p>Sed aliquam ultrices mauris. Integer ante
                                                                                arcu...</p>
                                                                        </li>
                                                                    </ul>
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
                                    <h5 class="card-title mb-0">Avatar</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                            <img src="{!! url('img/avatars/avatar-3.jpg') !!}" width="64" height="64"
                                                class="rounded-circle mt-2" alt="Angelica Ramos">
                                        </div>
                                        <div class="col-sm-9 col-xl-12 col-xxl-9">
                                            <strong>A Propos</strong>
                                            <p>Je suis un avatar</p>
                                        </div>
                                    </div>

                                    <table class="table table-sm mt-2 mb-4">
                                        <tbody>
                                            <tr>
                                                <th>Nom</th>
                                                <td>Avatar</td>
                                            </tr>
                                            <tr>
                                                <th>Prenom</th>
                                                <td>Avatar</td>
                                            </tr>
                                            <tr>
                                                <th>Company</th>
                                                <td>Avatar</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>avatar@avatar.com</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>+1234123123123</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <strong>Activity</strong>

                                    <ul class="timeline mt-2 mb-0">
                                        <li class="timeline-item">
                                            <strong>Signed out</strong>
                                            <span class="float-end text-muted text-sm">30m ago</span>
                                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="../adminkit.io/index.html" target="_blank"
                                    class="text-muted"><strong>AdminKit</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
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
