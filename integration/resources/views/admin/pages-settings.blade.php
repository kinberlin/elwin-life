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

					<h1 class="h3 mb-3">Paramètres</h1>

					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Paramètres de Compte</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab">
										Account
									</a>
									<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab">
										Password
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Données publiques</h5>
										</div>
										<div class="card-body">
											<form method="post" action="/admin/settings" enctype="multipart/form-data">
												@csrf
                                                <div class="row">
													<div class="col-md-8">
														<div class="mb-3">
															<label class="form-label" for="inputbp">Boite Postale (BP)</label>
															<input type="text" class="form-control" name="bp" id="inputbp" value="{{Auth::user()->BP}}" placeholder="BP">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputcp">Company</label>
                                                            <input type="text" class="form-control" name="company" id="inputcp" value="{{Auth::user()->company}}" placeholder="Company">
														</div>
													</div>
													<div class="col-md-4">
														<div class="text-center">
															<img alt="Charles Hall" id="img-preview" src="{{Auth::user()->image}}" class="rounded-circle img-responsive mt-2"
																width="128" height="128" />
															<div class="mt-2">
                                                                <input
                                                                    type="file"
                                                                    accept=".jpg, .jpeg, .png"
                                                                    id="file"
                                                                    name="image"
                                                                    onchange="getImage(this,'img-preview')"
                                                                    class="inputfile" >
                                                                    <label
                                                                    for="file"
                                                                    class="btn btn-primary"><i
                                                                        class="fas fa-upload"></i>
                                                                    Choisir une
                                                                    Image</label>
															</div>
															<small>For best results, use an image at least 128px by 128px in .jpg format</small>
														</div>
													</div>
												</div>

												<button type="submit" class="btn btn-primary">Sauvegarder</button>
											</form>

										</div>
									</div>

									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Données Privées</h5>
										</div>
										<div class="card-body">
											<form action="/admin/settings" method="post">
                                                @csrf
												<div class="row">
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputFirstName">Nom</label>
														<input type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}" id="inputFirstName" placeholder="Nom" required>
													</div>
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputLastName">Prenom</label>
														<input type="text" class="form-control" name="lastname" id="inputLastName" value="{{Auth::user()->lastname}}" placeholder="Prenom" required>
													</div>
												</div>
												<div class="mb-3">
													<label class="form-label" for="inputEmail4">Email</label>
													<input type="email" class="form-control" name="email" id="inputEmail4" value="{{Auth::user()->email}}" placeholder="Email" readonly>
												</div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="inputAddress">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" name="address" value="{{Auth::user()->adress}}" placeholder="1234 Avn Dla..." >
                                                    </div>
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputCou">Country</label>
														<input type="text" class="form-control" id="inputCou" name="country" value="{{Auth::user()->country}}">
													</div>
												</div>
												<div class="row">
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputCity">City</label>
														<input type="text" class="form-control" id="inputCity" name="city" value="{{Auth::user()->city}}" required>
													</div>
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputZip">Tél</label>
														<input type="text" class="form-control" id="inputZip" name="phone" value="{{Auth::user()->phone}}">
													</div>
												</div>
												<button type="submit" class="btn btn-primary">Sauvegarder</button>
											</form>

										</div>
									</div>

								</div>
								<div class="tab-pane fade" id="password" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form action="/admin/settings" method="post">
                                                @csrf
												<div class="mb-3">
													<label class="form-label" for="inputPasswordCurrent">Mot de Passe Courant</label>
													<input type="password" class="form-control" id="inputPasswordCurrent">
												</div>
												<div class="mb-3">
													<label class="form-label" for="inputPasswordNew">Nouveau MTP</label>
													<input type="password" class="form-control" id="inputPasswordNew">
												</div>
												<button type="submit" class="btn btn-primary">Enregistrer</button>
											</form>

										</div>
									</div>
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
