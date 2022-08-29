<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Tambah Data Penilaian</title>

  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/adminlte.min.css')?>">
  <!-- pace-progress -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/pace-progress/themes/black/pace-theme-flash.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')?>" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')?>">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse pace-teal pace-theme-flash-teal">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="beranda" class="brand-link">
      <img src="../../assets/img/avatar-bisnis.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SPK Pegawai Terbaik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar sidebar-dark-teal">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../assets/img/jenderal.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="beranda" class="d-block"><?php echo $this->session->userdata('username'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
           <a href="beranda" class="nav-link">
            <i class="fas fa-home"></i>  
             <p>Beranda</p>
           </a>
          </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-list"></i>
                  <p>Data Kriteria
                  <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Kriteria" class="nav-link active">
                    <i class="fas fa-weight-hanging"></i>
                    <p>Bobot Kriteria</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Masternilai" class="nav-link">
                    <i class="fas fa-chart-area"></i>
                    <p>Nilai Sub Kriteria</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="Pegawai" class="nav-link">
                <i class="fas fa-users"></i>
                <p>Daftar Pegawai</p>
              </a>
            </li>  
          <li class="nav-item">
            <a href="Perhitungan" class="nav-link">
              <i class="fas fa-calculator"></i>
              <p>Perhitungan</p>
            </a>
          </li>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
              <li class="breadcrumb-item"><a href="Pegawai">Daftar Pegawai</a></li>
              <li class="breadcrumb-item active">Tambah Data Penilaian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h5 class="m-0">Tambah Data Penilaian</h5>
              </div>
              <div class="card-body">
              <?php echo form_open("nilai/tambah_nilai"); ?>
                    <div class="form-group">
                        <label for="edit_namaKriteria">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" name="nama_pegawai" value="<?= $nama_pegawai ?>" readonly>
                        <input type="hidden" name="id_pegawai" value="<?= $id_pegawai ?>">
                    </div>
                    <div class="form-group">
                        <label for="edit_bobotKriteria">Tanggung Jawab (C1)*</label>
                        <select class="form-control" name="c1">
                            <?php foreach($c1 as $value) : ?>
                              <option></option>
                              <option value="<?= $value->id_masternilai?>"><?= $value->nama_nilai ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_namaKriteria">Kemampuan (C2)*</label>
                        <select class="form-control" name="c2">
                            <?php foreach($c2 as $value) : ?>
                              <option></option>
                              <option value="<?= $value->id_masternilai?>"><?= $value->nama_nilai ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_namaKriteria">Taat Peraturan (C3)*</label>
                        <select class="form-control" name="c3">
                            <?php foreach($c3 as $value) : ?>
                              <option></option>
                              <option value="<?= $value->id_masternilai?>"><?= $value->nama_nilai ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_namaKriteria">Mangkir (C4)*</label>
                        <select class="form-control" name="c4">
                            <?php foreach($c4 as $value) : ?>
                              <option></option>
                              <option value="<?= $value->id_masternilai?>"><?= $value->nama_nilai ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_namaKriteria">Keterlambatan Pengerjaan (C5)*</label>
                        <select class="form-control" name="c5">
                            <?php foreach($c5 as $value) : ?>
                              <option></option>
                              <option value="<?= $value->id_masternilai?>"><?= $value->nama_nilai ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
              </div>
              <div class="card-footer">
              <a href="<?php echo base_url("pegawai"); ?>"><button type="button" value="Batal" class="btn btn-danger">Batal</button></a>
                <button type="submit" class="btn btn-primary" name="submit">
                    Tambah
                </button>
              </div>
              </div>
              <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Hak Cipta &copy; 2020 </strong>Arfandi Ahmad untuk Jenderal Software
  </footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/adminlte.min.js')?>"></script>
<!-- pace-progress -->
<script src="<?php echo base_url('assets/plugins/pace-progress/pace.min.js')?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>

</body>
</html>
