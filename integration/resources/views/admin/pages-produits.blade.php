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
                            <h3><strong>Produits</strong> en vente</h3>
                        </div>
                        <!-- BEGIN success modal -->
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="#" class="btn btn-light bg-white me-2" data-bs-toggle="modal"
                                data-bs-target="#centeredModalSuccess">Ajouter un Produit</a>
                        </div>
                        <div class="modal fade" id="centeredModalSuccess" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <form class="modal-content" method="post" action="/admin/shop/produit"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nouveau Produit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body m-3">
                                        <div class="card">
                                            <div class="card-header">

                                                <h5 class="card-title mb-0">Info sur le Produit</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="tab">
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item" role="presentation"><a
                                                                    class="nav-link active" href="#tab-1"
                                                                    data-bs-toggle="tab" role="tab"
                                                                    aria-selected="true">Info</a></li>
                                                            <li class="nav-item" role="presentation"><a class="nav-link"
                                                                    href="#tab-2" data-bs-toggle="tab" role="tab"
                                                                    aria-selected="false" tabindex="-1">Images</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab-1" role="tabpanel">
                                                                <h4 class="tab-title">Info</h4>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="inputUsername">Nom*</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control" id="inputUsername"
                                                                        required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="inputUsername">Fournisseur*</label>
                                                                    <input type="text" name="seller"
                                                                        class="form-control" id="inputUsername"
                                                                        required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="inputUsername">Prix
                                                                        (XAF) *</label>
                                                                    <input type="number" name="price"
                                                                        class="form-control" id="inputUsername"
                                                                        required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="inputUsername">Durée
                                                                        de Livraison (Jours) *</label>
                                                                    <input type="number" name="delivery_period"
                                                                        class="form-control" id="inputUsername"
                                                                        required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="inputUsername">Catégorie du Produit</label>
                                                                    <select class="form-control mb-3" name="category_id"
                                                                        required>
                                                                        @foreach ($categories as $c)
                                                                            <option value="{{ $c->category_id }}">
                                                                                {{ $c->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="inputUsername">Affecter à une Chaîne
                                                                    </label>
                                                                    <select class="form-control mb-3" name="channel"
                                                                        required>
                                                                        @foreach ($channels as $c)
                                                                            <option value="{{ $c->id }}">
                                                                                {{ $c->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="inputUsername">Description</label>
                                                                    <textarea rows="2" name="description" class="form-control" id="inputBio"
                                                                        placeholder="Dites quelque chose à propos du produit" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab-2" role="tabpanel">
                                                                <h4 class="tab-title">Images</h4>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <img alt="Image Produit"
                                                                                src="img/avatars/avatar.jpg"
                                                                                id="img-preview1"
                                                                                class="rounded-circle img-responsive mt-2"
                                                                                width="128" height="128" />
                                                                            <div class="mt-2">
                                                                                <input type="file" name="image"
                                                                                    accept=".jpg, .jpeg, .png"
                                                                                    id="file1"
                                                                                    onchange="getImage(this,'img-preview1')"
                                                                                    class="inputfile" required>
                                                                                <label for="file1"
                                                                                    class="btn btn-primary"><i
                                                                                        class="fas fa-upload"></i>
                                                                                    Choisir une Image</label>
                                                                            </div>
                                                                            <small>For best results, use an image at
                                                                                least 128px by 128px in .jpg
                                                                                format</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <img alt="Image Produit"
                                                                                src="img/avatars/avatar.jpg"
                                                                                id="img-preview2"
                                                                                class="rounded-circle img-responsive mt-2"
                                                                                width="128" height="128" />
                                                                            <div class="mt-2">
                                                                                <input type="file"
                                                                                    accept=".jpg, .jpeg, .png"
                                                                                    id="file2" name="image1"
                                                                                    onchange="getImage(this,'img-preview2')"
                                                                                    class="inputfile" required>
                                                                                <label for="file2"
                                                                                    class="btn btn-primary"><i
                                                                                        class="fas fa-upload"></i>
                                                                                    Choisir une Image</label>
                                                                            </div>
                                                                            <small>For best results, use an image at
                                                                                least 128px by 128px in .jpg
                                                                                format</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <img alt="Image Produit"
                                                                                src="img/avatars/avatar.jpg"
                                                                                id="img-preview3"
                                                                                class="rounded-circle img-responsive mt-2"
                                                                                width="128" height="128" />
                                                                            <div class="mt-2">
                                                                                <input type="file"
                                                                                    accept=".jpg, .jpeg, .png"
                                                                                    id="file3" name="image2"
                                                                                    onchange="getImage(this,'img-preview3')"
                                                                                    class="inputfile" required>
                                                                                <label for="file3"
                                                                                    class="btn btn-primary"><i
                                                                                        class="fas fa-upload"></i>
                                                                                    Choisir une Image</label>
                                                                            </div>
                                                                            <small>For best results, use an image at
                                                                                least 128px by 128px in .jpg
                                                                                format</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <img alt="Image Produit"
                                                                                src="img/avatars/avatar.jpg"
                                                                                id="img-preview4"
                                                                                class="rounded-circle img-responsive mt-2"
                                                                                width="128" height="128" />
                                                                            <div class="mt-2">
                                                                                <input type="file"
                                                                                    accept=".jpg, .jpeg, .png"
                                                                                    name="image3" id="file4"
                                                                                    onchange="getImage(this,'img-preview4')"
                                                                                    class="inputfile" required>
                                                                                <label for="file4"
                                                                                    class="btn btn-primary"><i
                                                                                        class="fas fa-upload"></i>
                                                                                    Choisir une Image</label>
                                                                            </div>
                                                                            <small>For best results, use an image at
                                                                                least 128px by 128px in .jpg
                                                                                format</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                            <h5 class="card-title mb-0">Produits</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom </th>
                                        <th>Fournisseur</th>
                                        <th>Date de Création</th>
                                        <th>Catégorie</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $p)
                                        <tr>
                                            <td><img src="{{ $p->image }}" class="avatar img-fluid rounded"
                                                    alt="Charles Hall">
                                            </td>
                                            <td><strong>{{ $p->name }}</strong></td>
                                            <td>{{ $p->seller }}</td>
                                            <td>{{ $p->createdat }}</td>
                                            <td><span class="badge badge-success-light">{{ $p->category }}</span>
                                            </td>
                                            <td>{{ $p->description }}</td>
                                            <td>{{ $p->price }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#sizedModalSm{{ $p->product_id }}">Supprimer</a>
                                                <a href="#" class="btn btn-primary btn-sm "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#centeredModalSuccess{{ $p->product_id }}">Modifier</a>
                                                @if ($p->etat == 1)
                                                    <a href="/admin/shop/produit/etat/{{ $p->product_id }}"
                                                        class="btn btn-primary btn-sm ">Masquer</a>
                                                @else
                                                    <a href="/admin/shop/produit/etat/{{ $p->product_id }}"
                                                        class="btn btn-primary btn-sm">Visible</a>
                                                @endif
                                                <div class="modal fade" id="sizedModalSm{{ $p->product_id }}"
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
                                                                    produit
                                                                    <b>{{ $p->name }}</b> ?
                                                                    Noter que cette action est irréverssible et
                                                                    entraînera la
                                                                    surpression des commandes liés à celui ci.
                                                                </p>
                                                            </div>
                                                            <form method="post"
                                                                action="/admin/shop/produit/delete/{{ $p->product_id }}">
                                                                @csrf
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" name="id"
                                                                        value="{{ $p->product_id }}"
                                                                        class="btn btn-danger">Continuer</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="centeredModalSuccess{{ $p->product_id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form class="modal-content" method="post"
                                                            action="/admin/shop/produit/{{ $p->product_id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">MAJ Produit</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body m-3">
                                                                <div class="card">
                                                                    <div class="card-header">

                                                                        <h5 class="card-title mb-0">Info sur le Produit
                                                                        </h5>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="tab">
                                                                                <ul class="nav nav-tabs"
                                                                                    role="tablist">
                                                                                    <li class="nav-item"
                                                                                        role="presentation"><a
                                                                                            class="nav-link active"
                                                                                            href="#tab-1{{ $p->product_id }}"
                                                                                            data-bs-toggle="tab"
                                                                                            role="tab"
                                                                                            aria-selected="true">Info</a>
                                                                                    </li>
                                                                                    <li class="nav-item"
                                                                                        role="presentation"><a
                                                                                            class="nav-link"
                                                                                            href="#tab-2{{ $p->product_id }}"
                                                                                            data-bs-toggle="tab"
                                                                                            role="tab"
                                                                                            aria-selected="false"
                                                                                            tabindex="-1">Images</a>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="tab-content">
                                                                                    <div class="tab-pane active"
                                                                                        id="tab-1{{ $p->product_id }}"
                                                                                        role="tabpanel">
                                                                                        <h4 class="tab-title">Info</h4>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Nom</label>
                                                                                            <input type="text"
                                                                                                value="{{ $p->name }}"
                                                                                                name="name"
                                                                                                class="form-control"
                                                                                                id="inputUsername"
                                                                                                required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Fournisseur</label>
                                                                                            <input type="text"
                                                                                                name="seller"
                                                                                                class="form-control"
                                                                                                value="{{ $p->seller }}"
                                                                                                id="inputUsername"
                                                                                                required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Prix
                                                                                                (XAF)</label>
                                                                                            <input type="number"
                                                                                                name="price"
                                                                                                class="form-control"
                                                                                                value={{ $p->price }}
                                                                                                id="inputUsername"
                                                                                                required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Durée
                                                                                                de Livraison
                                                                                                (Jours)</label>
                                                                                            <input type="number"
                                                                                                name="delivery_period"
                                                                                                class="form-control"
                                                                                                value="{{ $p->delivery_period }}"
                                                                                                id="inputUsername"
                                                                                                required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Catégorie
                                                                                                du
                                                                                                Produit</label>
                                                                                            <select
                                                                                                class="form-control mb-3"
                                                                                                name="category_id"
                                                                                                required>
                                                                                                @foreach ($categories as $c)
                                                                                                    @if ($p->category_id === $c->category_id)
                                                                                                        <option
                                                                                                            value="{{ $c->category_id }}"
                                                                                                            selected>
                                                                                                            {{ $c->name }}
                                                                                                        </option>
                                                                                                    @else
                                                                                                        <option
                                                                                                            value="{{ $c->category_id }}">
                                                                                                            {{ $c->name }}
                                                                                                        </option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Affecter
                                                                                                à une Chaîne </label>
                                                                                            <select
                                                                                                class="form-control mb-3"
                                                                                                name="channel"
                                                                                                required>
                                                                                                @foreach ($channels as $c)
                                                                                                    @if ($p->channel === $c->id)
                                                                                                        <option
                                                                                                            value="{{ $c->id }}"
                                                                                                            selected>
                                                                                                            {{ $c->name }}
                                                                                                        </option>
                                                                                                    @else
                                                                                                        <option
                                                                                                            value="{{ $c->id }}">
                                                                                                            {{ $c->name }}
                                                                                                        </option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label"
                                                                                                for="inputUsername">Description</label>
                                                                                            <textarea rows="2" name="description" class="form-control" id="inputBio"
                                                                                                placeholder="Dites quelque chose à propos du produit" required>{{ $p->description }}</textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tab-pane"
                                                                                        id="tab-2{{ $p->product_id }}"
                                                                                        role="tabpanel">
                                                                                        <h4 class="tab-title">Images
                                                                                        </h4>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div
                                                                                                    class="text-center">
                                                                                                    <img alt="Image Produit"
                                                                                                        src="{{ $p->image }}"
                                                                                                        id="img-preview1{{ $p->product_id }}"
                                                                                                        class="rounded-circle img-responsive mt-2"
                                                                                                        width="128"
                                                                                                        height="128" />
                                                                                                    <div
                                                                                                        class="mt-2">
                                                                                                        <input
                                                                                                            type="file"
                                                                                                            name="image"
                                                                                                            accept=".jpg, .jpeg, .png"
                                                                                                            id="file1{{ $p->product_id }}"
                                                                                                            onchange="getImage(this,'img-preview1{{ $p->product_id }}')"
                                                                                                            class="inputfile">
                                                                                                        <label
                                                                                                            for="file1{{ $p->product_id }}"
                                                                                                            class="btn btn-primary"><i
                                                                                                                class="fas fa-upload"></i>
                                                                                                            Choisir une
                                                                                                            Image</label>
                                                                                                    </div>
                                                                                                    <small>For best
                                                                                                        results, use an
                                                                                                        image at
                                                                                                        least 128px by
                                                                                                        128px in .jpg
                                                                                                        format</small>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div
                                                                                                    class="text-center">
                                                                                                    <img alt="Image Produit"
                                                                                                        src="{{ $p->image1 }}"
                                                                                                        id="img-preview2{{ $p->product_id }}"
                                                                                                        class="rounded-circle img-responsive mt-2"
                                                                                                        width="128"
                                                                                                        height="128" />
                                                                                                    <div
                                                                                                        class="mt-2">
                                                                                                        <input
                                                                                                            type="file"
                                                                                                            accept=".jpg, .jpeg, .png"
                                                                                                            id="file2{{ $p->product_id }}"
                                                                                                            name="image1"
                                                                                                            onchange="getImage(this,'img-preview2{{ $p->product_id }}')"
                                                                                                            class="inputfile">
                                                                                                        <label
                                                                                                            for="file2{{ $p->product_id }}"
                                                                                                            class="btn btn-primary"><i
                                                                                                                class="fas fa-upload"></i>
                                                                                                            Choisir une
                                                                                                            Image</label>
                                                                                                    </div>
                                                                                                    <small>For best
                                                                                                        results, use an
                                                                                                        image at
                                                                                                        least 128px by
                                                                                                        128px in .jpg
                                                                                                        format</small>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div
                                                                                                    class="text-center">
                                                                                                    <img alt="Image Produit"
                                                                                                        src="{{ $p->image2 }}"
                                                                                                        id="img-preview3{{ $p->product_id }}"
                                                                                                        class="rounded-circle img-responsive mt-2"
                                                                                                        width="128"
                                                                                                        height="128" />
                                                                                                    <div
                                                                                                        class="mt-2">
                                                                                                        <input
                                                                                                            type="file"
                                                                                                            accept=".jpg, .jpeg, .png"
                                                                                                            id="file3{{ $p->product_id }}"
                                                                                                            name="image2"
                                                                                                            onchange="getImage(this,'img-preview3{{ $p->product_id }}')"
                                                                                                            class="inputfile">
                                                                                                        <label
                                                                                                            for="file3{{ $p->product_id }}"
                                                                                                            class="btn btn-primary"><i
                                                                                                                class="fas fa-upload"></i>
                                                                                                            Choisir une
                                                                                                            Image</label>
                                                                                                    </div>
                                                                                                    <small>For best
                                                                                                        results, use an
                                                                                                        image at
                                                                                                        least 128px by
                                                                                                        128px in .jpg
                                                                                                        format</small>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div
                                                                                                    class="text-center">
                                                                                                    <img alt="Image Produit"
                                                                                                        src="{{ $p->image3 }}"
                                                                                                        id="img-preview4{{ $p->product_id }}"
                                                                                                        class="rounded-circle img-responsive mt-2"
                                                                                                        width="128"
                                                                                                        height="128" />
                                                                                                    <div
                                                                                                        class="mt-2">
                                                                                                        <input
                                                                                                            type="file"
                                                                                                            accept=".jpg, .jpeg, .png"
                                                                                                            name="image3"
                                                                                                            id="file4{{ $p->product_id }}"
                                                                                                            onchange="getImage(this,'img-preview4{{ $p->product_id }}')"
                                                                                                            class="inputfile">
                                                                                                        <label
                                                                                                            for="file4{{ $p->product_id }}"
                                                                                                            class="btn btn-primary"><i
                                                                                                                class="fas fa-upload"></i>
                                                                                                            Choisir une
                                                                                                            Image</label>
                                                                                                    </div>
                                                                                                    <small>For best
                                                                                                        results, use an
                                                                                                        image at
                                                                                                        least 128px by
                                                                                                        128px in .jpg
                                                                                                        format</small>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
