<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Anggur Kita</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <!-- Nav Item - Dashboard -->
<!-- Dashboard -->
<li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<!-- Produk -->
<li class="nav-item {{ request()->is('charts') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('charts') }}">
        <i class="fas fa-fw fa-shopping-cart"></i> <!-- Ganti dengan ikon produk yang sesuai -->
        <span>Produk</span>
    </a>
</li>

<!-- Perusahaan -->
<li class="nav-item {{ request()->is('lapangan') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('lapangan') }}">
        <i class="fas fa-fw fa-building"></i> 
        <span>Perusahaan</span>
    </a>
</li>


<!-- User -->
<li class="nav-item {{ request()->is('user') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('user') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>User</span>
    </a>
</li>

<!-- Transaksi -->
<li class="nav-item {{ request()->is('transaksi') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('transaksi') }}">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Transaksi</span>
    </a>
</li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
    </div>