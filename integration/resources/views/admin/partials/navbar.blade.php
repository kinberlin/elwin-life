<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index-2.html">
            <span class="sidebar-brand-text align-middle">
                Elwin life
                <sup><small class="badge bg-primary text-uppercase">Administrator</small></sup>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{Auth::user()->image}}" class="avatar img-fluid rounded me-1" alt={{Auth::user()->firstname}}" />
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{Auth::user()->firstname}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class="dropdown-item" href="/admin/settings"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <!--<a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="pie-chart"></i> Analytics</a>-->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="/logout" href="#">Déconnexion</a>
                    </div>

                    <div class="sidebar-user-subtitle">Designer</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="/admin/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#store" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Boutique</span>
                </a>
                <ul id="store" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/shop/categorie">Catégories</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/shop/produit">Produits</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/shop/orders">Commandes <span
                                class="sidebar-badge badge bg-primary">A</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#blog" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="play-circle"></i> <span class="align-middle">Blog</span>
                </a>
                <ul id="blog" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/channels">Catégories / Chaînes</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/blog/article">Article</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/blog/video">Vidéo</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#administration" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 far fa-fw fa-check-square"></i> <span class="align-middle">Administration</span>
                </a>
                <ul id="administration" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/users">Utilisateurs</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/chat">Chats</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/partnership">Partenariats</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Transactions</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Abonnements</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/settings">Mon Compte<span
                                class="sidebar-badge badge bg-primary">15</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#advertisement" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="radio"></i> <span class="align-middle">Publicités/Annonces</span>
                </a>
                <ul id="advertisement" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/slides">Sliders</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/admin/pubs">Pubs</a></li>
                </ul>
            </li>
    
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/chat">Requêtes 
                    <span
                        class="sidebar-badge badge bg-primary">12
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/settings">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
            <!--
            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-invoice.html">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Commandes</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-tasks.html">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tasks</span>
                    <span class="sidebar-badge badge bg-primary">Pro</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="calendar.html">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendrier</span>
                    <span class="sidebar-badge badge bg-primary">P</span>
                </a>
            </li>-->
        </ul>
        <!--
        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Weekly Sales Report</strong>
                <div class="mb-3 text-sm">
                    Your weekly sales report is ready for download!
                </div>

                <div class="d-grid">
                    <a href="#" class="btn btn-outline-primary" target="_blank">Download</a>
                </div>
            </div>
        </div>
    -->
    </div>
</nav>
