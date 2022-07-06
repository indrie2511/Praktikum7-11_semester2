  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 7 CodeIgniter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/mahasiswa">Mahasiswa</a></li>
              <li class="breadcrumb-item active">Dosen</li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/matakuliah">Dosen Matakuliah</a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <a href="<?php echo base_url();?>index.php/dosenform"><button type="button" class="btn btn-success">Tambah Dosen</button></a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th><th>NIDN</th><th>Nama</th><th>Pendidikan</th>
            </tr>
        </thead>
    <tbody>
    <?php
    $nomor=1;
    foreach($list_dsn as $dsn){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$dsn->nidn?></td>
            <td><?=$dsn->dosen?></td>
            <td><?=$dsn->pendidikan?></td>
        </tr>
    <?php
    $nomor++;
    }
    ?>
    </tbody>
    </table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
