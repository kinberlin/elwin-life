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
                            <h3><strong>Requêtes</strong> des Clients</h3>
                        </div>
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
                                                <th>Id</th>
                                                <th>Detail</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($messages as $m)
                                                <tr>
                                                    <td><img src="{{ $m->image }}" width="32" height="32"
                                                            class="rounded-circle my-n1" alt="{{ $m->id }}">
                                                    </td>
                                                    <td>REQ{{ $m->id }}</td>
                                                    <td>Nom : {{ $m->firstname . ' ' . $m->lastname }} <br>Date :
                                                        {{ $m->fmt_date }}</td>
                                                    @if ($m->status == 1)
                                                        <td><span class="badge bg-warning">Non Lus</span></td>
                                                    @else
                                                        <td><span class="badge bg-success">Lus</span></td>
                                                    @endif
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm "
                                                            onclick="getAbout('centeredModalSuccess{{ $m->id }}')">Répondre</button>
                                                        <div class="modal fade"
                                                            id="centeredModalSuccess{{ $m->id }}" tabindex="-1"
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
                                                                    <h5 class="card-title mb-0">REQ{{ $m->id }}</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row g-0">
                                                                        <div
                                                                            class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                                                            <a href="{{ $m->image }}">
                                                                                <img src="{{ $m->image }}"
                                                                                    class="squared-circle mt-2"
                                                                                    alt="avatar" width="96"
                                                                                    height="64">
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                    <table class="table table-sm mt-2 mb-4">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>Nom</th>
                                                                                <td>{{ $m->firstname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Prenom</th>
                                                                                <td>{{ $m->lastname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Email</th>
                                                                                <td>{{ $m->email }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Phone</th>
                                                                                <td>{{ $m->phone }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Date</th>
                                                                                <td><span
                                                                                        class="badge bg-success">{{ $m->fmt_date }}</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <strong>Contenu</strong>
                                                                    <ul class="timeline mt-2 mb-0">
                                                                        <li class="timeline-item">
                                                                            <strong>Message</strong>

                                                                            <p>{{ $m->message }}</p>
                                                                        </li>
                                                                        @if ($m->resid == null)
                                                                            <form action="/admin/response"
                                                                                method="post">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $m->sender }}"
                                                                                    name="rec">
                                                                                <input type="hidden"
                                                                                    value="{{ $m->id }}"
                                                                                    name="contact">
                                                                                <li class="timeline-item">
                                                                                    <strong>Entrez une réponse
                                                                                        :</strong>
                                                                                    <textarea rows="4" class="form-control" id="message" required
                                                                                        data-validation-required-message="..." name="message" placeholder="Réponse" maxlength="999"
                                                                                        style="resize: none; width: 100%"></textarea>
                                                                                </li> 
                                                                                <li class="timeline-item">
                                                                                    <button type="submit" class="btn btn-success">Envoyer</button>
                                                                                </li>
                                                                            </form>
                                                                        @else
                                                                            <form action="/admin/upresponse"
                                                                                method="post">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $m->resid }}"
                                                                                    name="id">
                                                                                <li class="timeline-item">
                                                                                    <strong>Modifier votre réponse
                                                                                        :</strong>
                                                                                    <textarea rows="4" class="form-control" id="message" required
                                                                                    data-validation-required-message="..." name="message" placeholder="Réponse" maxlength="999" style="resize: none; width: 100%">{{ $m->response }}</textarea>
                                                                                </li>
                                                                                <li class="timeline-item">
                                                                                    <button type="submit" class="btn btn-success">Modifier</button>
                                                                                </li>
                                                                            </form>
                                                                        @endif

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
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                            <img src="{!! url('img/avatars/avatar-3.jpg') !!}" width="64" height="64"
                                                class="rounded-circle mt-2" alt="Angelica Ramos">
                                        </div>
                                        <div class="col-sm-9 col-xl-12 col-xxl-9">
                                            <strong>A Propos</strong>
                                            <p>Cliquer sur repondre sur un message pour charger le contenu du message a repondre</p>
                                        </div>
                                    </div>
                                    <strong>Fin de section</strong>
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
    <script>
        function getAbout(name) {
            const myTable = document.querySelector('#' + name);
            const selectedContent = myTable.innerHTML;
            // Set the selected content into the div element
            const selectedDiv = document.querySelector('#selected-content');
            selectedDiv.innerHTML = selectedContent;
        }
    </script>
</body>

</html>
