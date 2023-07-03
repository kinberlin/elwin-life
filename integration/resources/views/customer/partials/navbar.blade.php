<ul class="sidebar navbar-nav">
    @if($actif == 1)
    <li class="nav-item active">
    @else
    <li class="nav-item">
    @endif
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-home"></i>
            <span>Acceuil</span>
        </a>
    </li>
    @if($actif == 2)
    <li class="nav-item active">
        @else
        <li class="nav-item">
        @endif
        <a class="nav-link" href="/channels">
            <i class="fas fa-fw fa-users"></i>
            <span>Chaînes</span>
        </a>
    </li>
    @if($actif == 3)
    <li class="nav-item active">
    @else
    <li class="nav-item">
    @endif
        <a class="nav-link" href="/blog">
            <i class="fas fa-fw fa-video"></i>
            <span>Blog</span>
        </a>
    </li>

    @if($actif == 4)
    <li class="nav-item active">
    @else
    <li class="nav-item">
    @endif
        <a class="nav-link" href="/history">
            <i class="fas fa-fw fa-history"></i>
            <span>Historique</span>
        </a>
    </li>
    @if($actif == 5)
    <li class="nav-item active">
    @else
    <li class="nav-item">
    @endif
        <a class="nav-link" href="/contact">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Nous Contacter</span>
        </a>
    </li>
    @if($actif == 6)
    <li class="nav-item active">
    @else
    <li class="nav-item">
    @endif
        <a class="nav-link" href="/store">
            <i class="fas fa-fw fa-shopping-bag"></i>
            <span>Boutique</span>
        </a>
    </li>
    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-shopping-bag"></i>
            <span>Boutique</span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="categories.html">Movie</a>
            <a class="dropdown-item" href="categories.html">Music</a>
            <a class="dropdown-item" href="categories.html">Television</a>
        </div>
    </li>-->
    @if($actif == 7)
    <li class="nav-item active">
    @else
    <li class="nav-item">
    @endif
        <a class="nav-link" href="/settings">
            <i class="fas fa-fw fa-spanner"></i>
            <span>Paramètre</span>
        </a>
    </li>
    <li class="nav-item channel-sidebar-list">
        <h6>ABONNEMENTS</h6>
        <ul>
            @foreach ($infos as $key => $i)
                <li>
                    <a href="/channel/{{ $i['id'] }}">
                        <img class="img-fluid" alt src="{{ $i['image'] }}"> {{ $i['name'] }}
                        <span class="badge badge-warning">2</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
