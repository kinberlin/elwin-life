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
                            <h3><strong>Images de Slide</strong> ou Diaporama</h3>
                        </div>
                        <!-- BEGIN success modal -->
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                data-bs-target="#centeredModalSuccess">Ajouter une Publicité</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <form class="modal-content" method="post" action="/admin/newpub"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nouvelle Publicité</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body m-3">
                                        <div class="card">
                                            <div class="card-header">

                                                <h5 class="card-title mb-0">Info sur la publicite</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    
                                                    <div class="mb-3">
                                                        <div class="text-center">
                                                            <img alt="Image de contenu" src="" id="img-preview1"
                                                                class="rounded-circle img-responsive mt-2"
                                                                width="128" height="128" />
                                                            <div class="mt-2">
                                                                <input type="file" name="src"
                                                                    accept=".jpg, .jpeg, .png" id="file1"
                                                                    onchange="getImage(this,'img-preview1')"
                                                                    class="inputfile" required>
                                                                <label for="file1" class="btn btn-primary"><i
                                                                        class="fas fa-upload"></i>
                                                                    Choisir une Image</label>
                                                            </div>
                                                            <small>For best results, use a high resolution image with of
                                                                less than 2Mb</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Date de Mise en ligne*</label>
                                                        <input type="text" name="begin" class="form-control flatpickr-minimum flatpickr-input active" placeholder="Select date.."required readonly="readonly">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Date de Fin*</label>
                                                        <input type="text" name="end" class="form-control flatpickr-minimum flatpickr-input active" placeholder="Select date.." required readonly="readonly">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="inputtxt">Description</label>
                                                        <textarea rows="3" name="description" maxlength="100" minlength="10" class="form-control" id="inputtxt"
                                                            placeholder="Dites quelque chose à propos du du contenu en 10 ou 100 lettres" ></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($pub as $p)
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" style="width: 110%;height:140px" src="{{ $p->image }}" alt="Unsplash">
                                    <div class="card-header px-4 pt-4">
                                        <div class="card-actions float-end">
                                            <div class="dropdown position-relative">
                                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#update{{ $p->id }}"
                                                        href="#">Modifier</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $p->id }}"
                                                        href="#">Retirer</a>
                                                    @if($p->etat == 1)
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#state{{ $p->id }}"
                                                        href="#">Masquer</a>
                                                    @else
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#state{{ $p->id }}"
                                                        href="#">Activer</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0">Débute le : {{ $p->begin }}</h5>
                                        <div class="badge bg-warning my-2">Expire le : {{ $p->end }}</div>
                                    </div>
                                    <div class="card-body px-4 pt-2">
                                        <p>{{ $p->description }}</p>
                                    </div>
                                </div>
								<div class="modal fade" id="delete{{ $p->id }}"
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
												<p class="mb-0">Voulez vous réellement Supprimer la publicité
													" <b>{{ $p->desription }}</b> " ?
													Noter que cette action est irréverssible.
												</p>
											</div>
											<form method="get"
												action="/admin/delpub/{{ $p->id }}">
												@csrf
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" name="id"
														value="{{ $p->id }}"
														class="btn btn-danger">Continuer</button>
												</div>
											</form>
										</div>
									</div>
								</div>
                                <div class="modal fade" id="update{{ $p->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form class="modal-content" method="post"
                                            action="/admin/updateslide/{{ $p->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title">Mettre cette Publicite</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body m-3">
                                                <div class="card">
                                                    <div class="card-header">

                                                        <h5 class="card-title mb-0">Info sur le Contenu</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">

                                                            <div class="mb-3">
                                                                <div class="text-center">
                                                                    <img alt="Image de contenu"
                                                                        src="{{ $p->src }}" id="img-preview1"
                                                                        class=" img-responsive mt-2"
                                                                        width="128" height="128" />
                                                                    <div class="mt-2">
                                                                        <input type="file" name="src"
                                                                            accept=".jpg, .jpeg, .png" id="file1"
                                                                            onchange="getImage(this,'img-preview1')"
                                                                            class="inputfile">
                                                                        <label for="file1"
                                                                            class="btn btn-primary"><i
                                                                                class="fas fa-upload"></i>
                                                                            Choisir une Image</label>
                                                                    </div>
                                                                    <small>For best results, use a high resolution image
                                                                        with of less than 2Mb</small>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Date de Mise en ligne*</label>
                                                                <input type="text" value="{{$p->begin}}" name="begin" class="form-control flatpickr-minimum flatpickr-input active" placeholder="Select date.."required readonly="readonly">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Date de Fin*</label>
                                                                <input type="text" value="{{$p->end}}" name="end" class="form-control flatpickr-minimum flatpickr-input active" placeholder="Select date.." required readonly="readonly">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="inputtxt">Description</label>
                                                                <textarea rows="3" name="description" maxlength="100" minlength="10" class="form-control" id="inputtxt"
                                                                    placeholder="Dites quelque chose à propos du du contenu en 10 ou 100 lettres" >{{$p->description}}</textarea>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="state{{ $p->id }}"
									tabindex="-1" style="display: none;" aria-hidden="true">
									<div class="modal-dialog modal-sm" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Confirmation de Modification
												</h5>
												<button type="button" class="btn-close"
													data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body m-3">
												<p class="mb-0">Voulez vous réellement Modifier le statut de cette publicité
                                                    <br>Notez qu'elle pourra ou plus être visible dans lesbanières de publicités.
												</p>
											</div>
											<form method="get"
												action="/admin/etatpub/{{ $p->id }}">
												@csrf
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" name="id"
														value="{{ $p->id }}"
														class="btn btn-danger">Continuer</button>
												</div>
											</form>
										</div>
									</div>
								</div>
                            </div>
                        @endforeach
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
		document.addEventListener("DOMContentLoaded", function() {
			// Flatpickr
			flatpickr(".flatpickr-minimum");
			flatpickr(".flatpickr-datetime", {
				enableTime: true,
				dateFormat: "Y-m-d H:i",
			});
			flatpickr(".flatpickr-human", {
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});
			flatpickr(".flatpickr-multiple", {
				mode: "multiple",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-range", {
				mode: "range",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-time", {
				enableTime: true,
				noCalendar: true,
				dateFormat: "H:i",
			});
		});
	</script>
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
