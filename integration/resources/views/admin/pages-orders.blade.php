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
						<h1 class="h3 d-inline align-middle">Commandes</h1><a class="badge bg-primary ms-2" target="_blank">A<i class="fas fa-fw fa-external-link-alt"></i></a>
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
										<th>Total</th>
										<th>Status de Paiement</th>
										<th>Methode de Paiement</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($orders as $o)
									<tr>
										<td><strong>#COM{{$o->order_id}}</strong></td>
										<td>{{$o->name}}</td>
										<td>{{$o->fmt_date}}</td>
                                        <td>{{$o->address}} XAF</td>
										<td>{{$o->amount}} XAF</td>
                                        @if($o->status === "Pending")
										<td><span class="badge badge-warning-light">{{$o->status}}</span></td>
                                        @else
                                        <td><span class="badge badge-success-light">{{$o->status}}</span></td>
                                        @endif
										<td><i class="fab fa-cc-mastercard me-1"></i> {{$o->payment}}</td>
										<td>
											<a href="#" class="btn btn-primary btn-sm">Valider</a>
											<a href="#" class="btn btn-primary btn-sm">Edit</a>
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
