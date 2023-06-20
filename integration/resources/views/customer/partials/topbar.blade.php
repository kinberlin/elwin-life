<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    &nbsp;&nbsp;
    <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;
    <a class="navbar-brand mr-1" href="/dashboard"><img class="img-fluid" height="80px" width="60px" alt
            src="{!! url('img/logo.png') !!}"></a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
        <!--<li class="nav-item mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart fa-fw"></i>
                <span class="badge badge-danger">{{ count($infos) }}</span>
            </a>
        </li>-->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart fa-fw"></i>
                <span class="badge badge-success">{{ count($infos) }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                @foreach ($infos as $key => $i)
                    <div class="hoverable" >
                        <a class="dropdown-item" href="#">
                            <img class="round-images" src="{{ $i['image'] }}" alt> &nbsp; {{ $i['name'] }} &nbsp;
                            x{{ $i['quantity'] }}
                        </a>
                        <button type="button" class="close-button"  data-toggle="modal" data-target="#delcartModal{{ $i['id'] }}">&times;</button>
                    </div>
                @endforeach
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/checkout"><i class="fas fa-fw fa-shopping-cart "></i> &nbsp; Passer au
                    Paiement</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another
                    action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else
                    here</a>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="{{Auth::user()->image}}">
                Drystan
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/account"><i class="fas fa-fw fa-user-circle"></i> &nbsp; Mon
                    Commpte</a>
                <a class="dropdown-item" href="/abonnements"><i class="fas fa-fw fa-video"></i> &nbsp;
                    Abonnements</a>
                <a class="dropdown-item" href="/settings"><i class="fas fa-fw fa-cog"></i> &nbsp; Paramètres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal"><i
                        class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Déconnexion</a>
            </div>
        </li>
    </ul>
</nav>
