<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            SIPEDES
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (request()->segment(1) == 'penduduk') ? 'active' : '' }} {{ (request()->segment(1) == 'kartu-keluarga') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ (request()->segment(1) == 'penduduk') ? 'active' : '' }}" href="{{ route('penduduk.index')}}">Penduduk</a>
                <a class="collapse-item {{ (request()->segment(1) == 'kartu-keluarga') ? 'active' : '' }}" href="{{ route('kartu-keluarga.index')}}">Kartu Keluarga</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - kelahiran -->
    <li class="nav-item {{ (request()->segment(1) == 'kelahiran') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kelahiran.index') }}">
            <i class="fas fa-fw fa-baby"></i>
            <span>Kelahiran</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - kelahiran -->
    <li class="nav-item {{ (request()->segment(1) == 'kematian') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kematian.index') }}">
            <i class="fas fa-fw fa-book-dead"></i>
            <span>Kematian</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (request()->segment(1) == 'pindah-datang') ? 'active' : '' }} {{ (request()->segment(1) == 'pindah-pergi') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-archive"></i>
            <span>Mutasi</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ (request()->segment(1) == 'pindah-datang') ? 'active' : '' }}" href="{{ route('pindah-datang.index')}}">Pindah Datang</a>
                <a class="collapse-item {{ (request()->segment(1) == 'pindah-pergi') ? 'active' : '' }}" href="{{ route('pindah-pergi.index')}}">Pindah Pergi</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - user -->
    <li class="nav-item {{ (request()->segment(1) == 'user') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Kelola Pengguna</span>
        </a>
    </li>


    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
