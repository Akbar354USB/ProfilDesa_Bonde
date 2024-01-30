<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('backend/assets/img/favicon.png') }}" alt="" width="40px">
        </div>
        {{-- <div><img src="{{ asset('backend/assets/img/favicon.png') }}" alt=""></div> --}}
        <div class="sidebar-brand-text mx-3">DESA BONDE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-building"></i>
            <span>Pemerintahan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('perangkat-index') }}">Perangkat Desa</a>
                <a class="collapse-item" href="cards.html">Lembaga Desa</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('potensi-index') }}">
            <i class="fas fa-images"></i>
            <span>Potensi Desa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('berita-index') }}">
            <i class="fas fa-newspaper"></i>
            <span>Artikel Berita</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>