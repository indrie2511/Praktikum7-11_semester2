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
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dosen">Dosen</a></li>
              <li class="breadcrumb-item active">DosenMatakuliah</li>
              

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
        <a href="<?php echo base_url();?>index.php/matakuliahform"><button type="button" class="btn btn-success">Tambah Jadwal</button></a>

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
    <h3>Jadwal Kuliah</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th><th>Semester</th><th>Dosen</th><th>Mata Kuliah</th><th>Hari</th><th>Ruangan</th>
            </tr>
        </thead>
    <tbody>
    <?php
    $nomor=1;
    foreach($list_jadwal as $jadwal){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$jadwal->semester?></td>
            <td><?=$jadwal->dosenpengajar?></td>
            <td><?=$jadwal->matakuliah?></td>
            <td><?=$jadwal->hari?></td>
            <td><?=$jadwal->ruangan?></td>
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
