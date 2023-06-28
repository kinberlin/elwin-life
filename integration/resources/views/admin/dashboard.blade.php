@include('admin.partials.header')

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
        @include('admin.partials.navbar')

		<div class="main">
            @include('admin.partials.topbar')

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>E-Commerce</strong> Tableau de Bord</h3>
						</div>

						<div class="col-auto ms-auto text-end mt-n1">
							<a href="#" class="btn btn-light bg-white me-2">Activité</a>
							<a href="#" class="btn btn-primary">Stockage</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Revenu</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{$comy}}~{{$info->ca}} XAF</h1>
									<div class="mb-0">
										<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i><!-- 3.65%--> </span>
										<!--<span class="text-muted">Depuis l'an dernier</span>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Commandes</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="shopping-bag"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{$comy}}</h1>
									<div class="mb-0">
										<span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> {{$progc}}% </span>
										<span class="text-muted">Depuis l'an dernier</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Utilisateurs</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="activity"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{$cu}}</h1>
									<div class="mb-0">
										<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> {{$progu}}% </span>
										<span class="text-muted">Depuis l'an dernier</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Livraisons</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="shopping-cart"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{$orders}}</h1>
									<div class="mb-0">
										<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> {{$percent}}% </span>
										<span class="text-muted">Des commandes totales</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="float-end">
										<form class="row g-2">
											<div class="col-auto">
												<select class="form-select form-select-sm bg-light border-0">
													<option>2023</option>
													<option value="1">2022</option>
												</select>
											</div>
											<div class="col-auto">
												<input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
													placeholder="Search..">
											</div>
										</form>
									</div>
									<h5 class="card-title mb-0">Total Revenue</h5>
								</div>
								<div class="card-body pt-2 pb-3">
									<div class="chart chart-md">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="float-end">
										<form class="row g-2">
											<div class="col-auto">
												<select class="form-select form-select-sm bg-light border-0">
													<option>Jan</option>
													<option value="1">Fév</option>
													<option value="2">Mar</option>
													<option value="3">Avr</option>
												</select>
											</div>
											<div class="col-auto">
												<input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
													placeholder="Search..">
											</div>
										</form>
									</div>
									<h5 class="card-title mb-0">Commentaires</h5>
								</div>
								<div class="card-body px-4">
									
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
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
									<h5 class="card-title mb-0">Articles Vendus</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown position-relative">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-horizontal"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Cette année</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Meilleures Produits Vendus</h5>
								</div>
								<table class="table table-borderless my-0">
									<thead>
										<tr>
											<th>Nom</th>
											<th class="d-none d-xxl-table-cell">Quantités</th>
											<th class="d-none d-xl-table-cell">Catégorie</th>
											<th class="d-none d-xl-table-cell text-end">Actions</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="{!! url('img/icons/brand-4.svg' ) !!}">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Aurora</strong>
														<div class="text-muted">
															UI Kit
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Lechters</strong>
												<div class="text-muted">
													Real Estate
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Vanessa Tucker</strong>
												<div class="text-muted">
													HTML, JS, React
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												520
											</td>
											<td>
												<span class="badge badge-success-light">In progress</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="{!! url('img/icons/brand-1.svg' ) !!}">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Bender</strong>
														<div class="text-muted">
															Dashboard
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Cellophane Transportation</strong>
												<div class="text-muted">
													Transportation
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>William Harris</strong>
												<div class="text-muted">
													HTML, JS, Vue
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												240
											</td>
											<td>
												<span class="badge badge-warning-light">Paused</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="{!! url('img/icons/brand-5.svg' ) !!}">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Camelot</strong>
														<div class="text-muted">
															Dashboard
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Clemens</strong>
												<div class="text-muted">
													Insurance
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Darwin</strong>
												<div class="text-muted">
													HTML, JS, Laravel
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												180
											</td>
											<td>
												<span class="badge badge-success-light">In progress</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="{!! url('img/icons/brand-2.svg' ) !!}">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Edison</strong>
														<div class="text-muted">
															UI Kit
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Affinity Investment Group</strong>
												<div class="text-muted">
													Finance
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Vanessa Tucker</strong>
												<div class="text-muted">
													HTML, JS, React
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												410
											</td>
											<td>
												<span class="badge badge-danger-light">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-shrink-0">
														<div class="bg-light rounded-2">
															<img class="p-2" src="{!! url('img/icons/brand-3.svg' ) !!}">
														</div>
													</div>
													<div class="flex-grow-1 ms-3">
														<strong>Fusion</strong>
														<div class="text-muted">
															Dashboard
														</div>
													</div>
												</div>
											</td>
											<td class="d-none d-xxl-table-cell">
												<strong>Konsili</strong>
												<div class="text-muted">
													Retail
												</div>
											</td>
											<td class="d-none d-xl-table-cell">
												<strong>Christina Mason</strong>
												<div class="text-muted">
													HTML, JS, Vue
												</div>
											</td>
											<td class="d-none d-xl-table-cell text-end">
												250
											</td>
											<td>
												<span class="badge badge-warning-light">Paused</span>
											</td>
										</tr>
									</tbody>
								</table>
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
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradientLight = ctx.createLinearGradient(0, 0, 0, 225);
			gradientLight.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradientLight.addColorStop(1, "rgba(215, 227, 244, 0)");
			var gradientDark = ctx.createLinearGradient(0, 0, 0, 225);
			gradientDark.addColorStop(0, "rgba(51, 66, 84, 1)");
			gradientDark.addColorStop(1, "rgba(51, 66, 84, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: window.theme.id === "light" ? gradientLight : gradientDark,
						borderColor: window.theme.primary,
						data: [{{$jan[0]->total}}, {{$feb[0]->total}}, {{$mar[0]->total}}, {{$apr[0]->total}}, {{$may[0]->total}}, {{$jun[0]->total}}, {{$jul[0]->total}}, {{$aug[0]->total}}, {{$sep[0]->total}}, {{$oct[0]->total}}, {{$nov[0]->total}}, {{$dec[0]->total}}]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [{{$ajan[0]->total}}, {{$afeb[0]->total}}, {{$amar[0]->total}}, {{$aapr[0]->total}}, {{$amay[0]->total}}, {{$ajun[0]->total}}, {{$ajul[0]->total}}, {{$aaug[0]->total}}, {{$asep[0]->total}}, {{$aoct[0]->total}}, {{$anov[0]->total}}, {{$adec[0]->total}}],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
</body>

</html>