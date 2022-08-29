<?php
if ($this->session->userdata('username') == null) {
    redirect('Auth/logout');
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url("assets/img/logo_leader.png") ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Klinik Haji</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar sidebar-dark-teal">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url("assets/img/avatar-bisnis.png") ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('username'); ?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="Beranda" class="nav-link active">
                        <i class="fas fa-home"></i>
                        <p>Menu Utama</p>
                    </a>
                </li>
                
                <?php
                if ($this->session->userdata('role') == "admin") { ?>
                <li class="nav-item">
                    <a href="Kriteria" class="nav-link">
                        <i class="fas fa-weight-hanging"></i>
                        <p>Data Kriteria</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="alternatif" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>Data Alternatif</p>
                    </a>
                </li>
                <?php }
                ?>
                <li class="nav-item">
                    <a href="Perhitungan" class="nav-link">
                        <i class="fas fa-calculator"></i>
                        <p>Perhitungan</p>
                    </a>
                </li>
                <?php
                if ($this->session->userdata('role') == "pimpinan") { ?>
                    <li class="nav-item">
                        <a href="Laporan" class="nav-link">
                            <i class="fas fa-print"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                <?php }
                ?>

                <li class="nav-item">
                    <a href="Auth/logout" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>