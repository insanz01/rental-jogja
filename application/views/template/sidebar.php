<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dashboard/index') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Rental</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Dashboard/index') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Aplikasi
      </div>

      <!-- Transaksi -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi/index') ?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Transaksi</span></a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi:</h6>
            <a class="collapse-item" href="<?= base_url('transaksi/index') ?>">Booked</a>
            <a class="collapse-item" href="<?= base_url('transaksi/selesai') ?>">Transaksi Selesai</a>
            <a class="collapse-item" href="<?= base_url('transaksi/semua') ?>">Semua Transaksi</a>
          </div>
        </div>
      </li>

      <!-- Kendaraan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kendaraan/index') ?>">
          <i class="fas fa-fw fa-car-side"></i>
          <span>Kendaraan</span></a>
      </li>

      <!-- Customer -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('customer/index') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Customer</span></a>
      </li>

      <!-- Karyawan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('karyawan/index') ?>">
          <i class="fas fa-fw fa-user-secret"></i>
          <span>Karyawan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->