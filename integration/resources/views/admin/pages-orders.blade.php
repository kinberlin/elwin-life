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
                        <h1 class="h3 d-inline align-middle">Commandes</h1><a class="badge bg-primary ms-2"
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
                            <h5 class="card-title mb-0">Orders</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Date</th>
                                        <th>Address</th>
                                        <th>Total Article</th>
                                        <th>Status de Paiement</th>
                                        <th>Total</th>
                                        <th>Methode de Paiement</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $o)
                                        <tr>
                                            <td><strong>#COM{{ $o->order_id }}</strong></td>
                                            <td>{{ $o->name }}</td>
                                            <td>{{ $o->fmt_date }}</td>
                                            <td>{{ $o->address }} </td>
                                            <td>{{ $o->amount }} XAF</td>
                                            @if ($o->status === 'Pending')
                                                <td><span class="badge badge-warning-light">{{ $o->status }}</span>
                                                </td>
                                            @else
                                                <td><span class="badge badge-success-light">{{ $o->status }}</span>
                                                </td>
                                            @endif
                                            <?php $sum = (float) $o->amount + (float) $o->delivery_fee - (float) $o->discount; ?>
                                            <td>{{ $sum }} XAF</td>
                                            <td><i class="fab fa-cc-mastercard me-1"></i> {{ $o->payment }}</td>
                                            <td>
                                                @if ($o->status === 'Waiting for Payment' || $o->status === 'Pending')
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#maj{{ $o->order_id }}">Mise a Jour</a>
                                                    <a href="/admin/shop/invoice/{{ $o->order_id }}"
                                                        class="btn btn-primary btn-sm">Valider</a>
                                                    <div class="modal fade" id="maj{{ $o->order_id }}" tabindex="-1"
                                                        role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">MAJ Commandes</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body m-3">
                                                                    <div class="col-md-12">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5 class="card-title">Mettre à Jour une
                                                                                    Commande</h5>
                                                                                <h6 class="card-subtitle text-muted">
                                                                                    Veuillez à Remplir tout les champs.
                                                                                </h6>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <form method="post"
                                                                                    enctype="multipart/form-data"
                                                                                    action="/admin/orders/extracost/{{ $o->order_id }}">
                                                                                    @csrf
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label"
                                                                                            for="inputAddress{{ $o->order_id }}">Frais
                                                                                            de Livraison</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            pattern="[0-9]*"
                                                                                            name="delivery"
                                                                                            value="{{ $o->delivery_fee }}"
                                                                                            id="inputAddress{{ $o->order_id }}"
                                                                                            placeholder="1000"required>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label"
                                                                                            for="inputAddress{{ $o->order_id }}">Reduction</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            pattern="[0-9]*"
                                                                                            name="discount"
                                                                                            value="{{ $o->discount }}"
                                                                                            id="inputAddress{{ $o->order_id }}"
                                                                                            placeholder="500" required>
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
                                                @else
                                                @if ($o->status === 'Complete')
                                                <a href="/admin/shop/invoice/livrer/{{ $o->order_id }}"
                                                    class="btn btn-primary btn-sm">Valider</a>
                                                @endif
                                                    <a href="/admin/shop/invoice/{{ $o->order_id }}"
                                                        class="btn btn-primary btn-sm">Voir</a>
                                                @endif
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
