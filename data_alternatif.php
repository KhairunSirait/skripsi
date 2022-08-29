<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Data Alternatif</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/adminlte.min.css') ?>">
    <!-- pace-progress -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/pace-progress/themes/black/pace-theme-flash.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') ?>" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
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

        <?php $this->load->view('templates/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Daftar Alternatif</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="beranda">Menu Utama</a></li>
                                <li class="breadcrumb-item active">Data Alternatif</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-teal card-outline">
                                <div class="card-header">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=#modal-tambah-alternatif>
                                        <i class="far fa-plus-square"></i> Tambah Data
                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->flashdata("tambah_alternatif") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("tambah_alternatif"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata("ubah_alternatif") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("ubah_alternatif"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata("hapus_alternatif") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("hapus_alternatif"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <table id="testTable" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode Alternatif</th>
                                                <th>Nama</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if (!empty($alternatif)) {
                                                $no = 0;
                                                foreach ($alternatif as $dataalternatif) {
                                                    $no++;
                                                    echo "<tr>";
                                                    echo "<td>" . $no . "</td>";
                                                    echo "<td>" . $dataalternatif['kd_alternatif'] . "</td>";
                                                    echo "<td>" . $dataalternatif['nama'] . "</td>";
                                                    echo "<td class='text-center'>";
                                                    echo "<a href='" . base_url("alternatif/ubah/" . $dataalternatif['kd_alternatif']) . "'>";
                                                    echo "<button type='button' class='btn btn-warning btn-sm'>";
                                                    echo "<i class='fas fa-edit'></i> Ubah </button></a> | ";
                                                    echo "<a href='" . base_url("alternatif/hapus/" . $dataalternatif['kd_alternatif']) . "'>";
                                                    echo "<button type='button' class='btn btn-danger btn-sm'>";
                                                    echo "<i class='fas fa-trash'></i> Hapus </button></a>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td align='center' colspan='4'>Data Tidak Ada</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Data Alternatif + Penilaian</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-teal card-outline">
                                <div class="card-body">
                                    <?php if ($this->session->flashdata("tambah_penilaian") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("tambah_penilaian"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata("hapus_penilaian") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("hapus_penilaian"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <table id="testTable2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode Alternatif</th>
                                                <?php 
                                                $banyakKriteria = 0;
                                                foreach($kriteria as $datakriteria){
                                                    echo "<th>" . $datakriteria['keterangan'] . "</th>";
                                                    $banyakKriteria += 1;
                                                }

                                                $banyakKriteria +=2;
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if (!empty($alternatif)) {
                                                $no = 0;
                                                foreach ($alternatif as $dataalternatif) {
                                                    $no++;
                                                    echo "<tr>";
                                                    echo "<td>" . $no . "</td>";
                                                    echo "<td>" . $dataalternatif['kd_alternatif'] . "</td>";
                                                    foreach($kriteria as $datakriteria){
                                                        $sqlNilai = $this->db->query("SELECT * FROM penilaian WHERE kd_alternatif='".$dataalternatif['kd_alternatif']."' AND kd_kriteria='".$datakriteria['kd_kriteria']."'");
                                                        
                                                        if($sqlNilai->num_rows() > 0){
                                                            $nilai = $sqlNilai->result_array();
                                                            echo "<td>" . $nilai[0]['nilai'] ."</td>";
                                                        }else{
                                                            echo "<td>0</td>";
                                                        }
                                                    }
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td align='center' colspan='".$banyakKriteria."'>Data Tidak Ada</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Control Sidebar -->
        <div class="modal fade" id="modal-tambah-alternatif">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Alternatif</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open("alternatif/tambah"); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="kd_alternatif">Kode Alternatif*</label>
                            <input type="text" class="form-control" name="kd_alternatif" placeholder="Masukkan kode alternatif..." required>
                        </div>
                        <div class="form-group">
                            <label for="nama_alternatif">Nama Alternatif</label>
                            <input type="text" class="form-control" name="nama_alternatif" placeholder="Masukkan nama alternatif..." required>
                        </div>

                        <?php
                        foreach ($kriteria as $datakriteria) { ?>
                            <div class="form-group">
                                <label for="<?= $datakriteria['kd_kriteria'] ?>"><?= $datakriteria['keterangan'] ?></label>
                                <input type="number" step=".01" class="form-control" name="<?= $datakriteria['kd_kriteria'] ?>" placeholder="Masukkan nilai <?= $datakriteria['keterangan'] ?>..." required>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="<?php echo base_url('alternatif'); ?>"><button type="button" value="Batal" class="btn btn-danger">Batal</button></a>
                        <button type="submit" name="submit" value="Simpan" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- /.modal -->
        <!-- Main Footer -->
        <?php $this->load->view('templates/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/js/adminlte.min.js') ?>"></script>
    <!-- pace-progress -->
    <script src="<?php echo base_url('assets/plugins/pace-progress/pace.min.js') ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>

    <script>
        $(document).ready(function() {
            $('#testTable').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan entri per halaman _MENU_",
                    "zeroRecords": "Maaf entri tidak ditemukan",
                    "info": "Tampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Entri tidak ditemukan",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya",
                        "last": "Terakhir"
                    },
                    "order": [
                        [3, "desc"]
                    ],
                    "responsive": "true",
                    "lengthMenu": ""
                }
            });
        });

        $(document).ready(function() {
            $('#testTable2').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan entri per halaman _MENU_",
                    "zeroRecords": "Maaf entri tidak ditemukan",
                    "info": "Tampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Entri tidak ditemukan",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya",
                        "last": "Terakhir"
                    },
                    "order": [
                        [3, "desc"],
                        [0, 'asc']
                    ],
                    "responsive": "true",
                    "lengthMenu": ""
                }
            });
        });
    </script>

</body>

</html>