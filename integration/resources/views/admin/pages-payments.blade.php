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
        @include('admin.partials.navbar', ['actif' => 2])

        <div class="main">
            @include('admin.partials.topbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Paiements</h1><a class="badge bg-primary ms-2"
                            target="_blank">A<i class="fas fa-fw fa-external-link-alt"></i></a>
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
                            <h5 class="card-title mb-0">Paiements</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Utilisateur</th>
                                        <th>Ref Commande</th>
                                        <th>Nom</th>
                                        <th>Reference</th>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Email</th>
                                        <th>Methode de Paiement</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pays as $p)
                                        <tr>
                                            <td><strong>#{{ $p->customer_id }}</strong></td>
                                            <td><strong>#COM{{ $p->order_id }}</strong></td>
                                            <td>{{ $p->name }}</td>
                                            <td>{{ $p->tx_ref }}</td>
                                            <td>{{ $p->fmt_date }}</td>
                                            <td>{{ $p->amount }} <span
                                                    class="badge badge-warning-light">{{ $p->currency }}</span></td>
                                            <td> {{ $p->email }}</td>
                                            <td><span class="badge badge-success-light">{{ $p->payment_type }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>

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
