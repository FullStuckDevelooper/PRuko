<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
       
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>user/daftarRuangUser">
                <i class="fas fa-fw fa-list"></i>
                <span>Daftar Ruangan</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>user/histori_user">
                <i class="fas fa-fw fa-history"></i>
                <span>History Peminjaman</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>user/logout" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Log Out</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->