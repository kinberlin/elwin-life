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

					<h1 class="h3 mb-3">Invoice</h1>
                    <?php $sum= (float)$o->amount + (float)$o->delivery_fee - (float)$o->discount; ?>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<form action="/admin/shop/invoice/validate/{{$o->order_id}}" method="POST" class="card-body m-sm-3 m-md-5">
									@csrf
									<div class="mb-4">
										Salut <strong>{{$o->name}}</strong>,
										<br />
										Ceci est une facture pour un versement de <strong>{{$sum}}</strong> (XAF) au Compte de Elwin Life Foundation.
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="text-muted">Facture No.</div>
											<strong>COM0{{$o->order_id}}</strong>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Date de Génération</div>
											<strong>{{$o->fmt_date}}</strong>
										</div>
									</div>

									<hr class="my-4" />

									<div class="row mb-4">
										<div class="col-md-6">
											<div class="text-muted">Client</div>
											<strong>
												{{$u->firstname . ' ' . $u->lastname}}
											</strong>
											<p>
												{{$o->address}} <br>
												{{$o->city}} <br>
												{{$o->country}} <br>
												<a href="#">
													{{$o->email}}
												</a>
											</p>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Au Profit de</div>
											<strong>
												Elwin Life Foundation
											</strong>
											<p>
												Akwa Douala <br>
												Rue Gallienni <br>
												Cameroun <br>
												<a href="#">
													info@elwin.com
												</a>
											</p>
										</div>
									</div>

									<table class="table table-sm">
										<thead>
											<tr>
												<th>Description</th>
												<th>Quantité</th>
												<th class="text-end">Montant</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                @foreach($oi as $i)
												<td>{{$i->name}}</td>
												<td>{{$i->quantity}}</td>
												<td class="text-end">{{$i->price}} XAF</td>
                                                @endforeach
											</tr>
											
											<tr>
												<th>&nbsp;</th>
												<th>Sous total </th>
												<th class="text-end">{{$o->amount}} XAF</th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>Livraison </th>
												<th class="text-end">{{$o->delivery_fee}} XAF</th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>Rabbais </th>
												<th class="text-end">{{$o->discount}} XAF</th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>Total </th>
												<th class="text-end">{{$sum}} XAF</th>
											</tr>
										</tbody>
									</table>

									<div class="text-center">
										<p class="text-sm">
											<strong>Extra note:</strong>
											Please send all items at the same time to the shipping address.
											Thanks in advance.
										</p>
										@if($o->status ==="Pending")
										<input type="hidden" value="valider" name="state">
										<button class="btn btn-primary" type="submit">
											Valider cette Facture.
										</button>
										@else
										<input type="hidden" value="renvoyer" name="state">
										<button  class="btn btn-primary" type="submit">
											Renvoyer cette Facture.
										</button>
										@endif
									</div>
								</form>
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
