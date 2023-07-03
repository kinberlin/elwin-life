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
        @include('admin.partials.navbar',["actif"=>5])

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
                                data-bs-target="#centeredModalSuccess">Ajouter un Contenu</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <form class="modal-content" method="post" action="/admin/newslide"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nouveau Contenu</h5>
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
                                                        <label class="form-label" for="inputmini">Miniature*</label>
                                                        <input type="text" name="min" maxlength="20" placeholder="la miniature Doit être < à 20" class="form-control"
                                                            id="inputmini" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="inputtxt">Texte*</label>
                                                        <textarea rows="2" name="texte" maxlength="60" minlength="10" class="form-control" id="inputtxt"
                                                            placeholder="Dites quelque chose à propos du du contenu en 10 ou 60 lettres" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($slide as $s)
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" style="width: 100%; height : 130px" src="{{ $s->src }}" alt="Unsplash">
                                    <div class="card-header px-4 pt-4">
                                        <div class="card-actions float-end">
                                            <div class="dropdown position-relative">
                                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#update{{ $s->id }}"
                                                        href="#">Modifier</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $s->id }}"
                                                        href="#">Retirer</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0">{{ $s->min }}</h5>
                                        <div class="badge bg-warning my-2">Mis en ligne le : ...</div>
                                    </div>
                                    <div class="card-body px-4 pt-2">
                                        <p>{{ $s->texte }}</p>
                                    </div>
                                </div>
								<div class="modal fade" id="delete{{ $s->id }}"
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
												<p class="mb-0">Voulez vous réellement Supprimer le
													contenu
													" <b>{{ $s->texte }}</b> " ?
													Noter que cette action est irréverssible et
													entraînera la
													surpression des commandes liés à celui ci.
												</p>
											</div>
											<form method="get"
												action="/admin/delslide/{{ $s->id }}">
												@csrf
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" name="id"
														value="{{ $s->id }}"
														class="btn btn-danger">Continuer</button>
												</div>
											</form>
										</div>
									</div>
								</div>
                                <div class="modal fade" id="update{{ $s->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form class="modal-content" method="post"
                                            action="/admin/updateslide/{{ $s->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title">Mettre à jour ce Contenu</h5>
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
                                                                        src="{{ $s->src }}" id="img-preview1"
                                                                        class="rounded-circle img-responsive mt-2"
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
                                                                <label class="form-label"
                                                                    for="inputmini">Miniature*</label>
                                                                <input type="text" name="min"
                                                                    class="form-control" value="{{ $s->min }}"
                                                                    maxlength="20" placeholder="la miniature Doit être < à 20"
                                                                    id="inputmini" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="inputtxt">Texte*</label>
                                                                <textarea rows="2" name="texte" maxlength="60" minlength="10" class="form-control" id="inputtxt"
                                                                    placeholder="Dites quelque chose à propos du du contenu en 10 ou 60 lettres" required>{{ $s->texte }}</textarea>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Sauvegarder</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
