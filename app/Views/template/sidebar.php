<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SPP<sup>ID</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if (in_groups('admin')) : ?>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider my-o">

        <!-- Heading -->
        <div class="sidebar-heading">
            ADMIN
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/datasiswa">
                <i class="fas fa-users"></i>
                <span>Data Siswa</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/datapetugas">
                <i class="fas fa-users-cog"></i>
                <span>Data Petugas</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/kelas">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Data Kelas</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dataspp">
                <i class="fas fa-file-invoice"></i>
                <span>Data SPP</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/pembayaran">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Transaksi Pembayaran</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/history">
                <i class="fas fa-history"></i>
                <span>History Pembayaran</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-receipt"></i>
                <span>Generate Laporan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Logout
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>
    <?php endif; ?>


    <?php if (in_groups('staff')) : ?>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider my-o">

        <!-- Heading -->
        <div class="sidebar-heading">
            PETUGAS
        </div>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Transaksi Pembayaran</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-history"></i>
                <span>History Pembayaran</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Logout
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups('user')) : ?>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider my-o">

        <!-- Heading -->
        <div class="sidebar-heading">
            Siswa
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>/historydua">
                <i class="fas fa-history"></i>
                <span>History Pembayaran</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Logout
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (!logged_in()) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Login
        </div>
        <!-- Nav Item - Login -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login'); ?>">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->