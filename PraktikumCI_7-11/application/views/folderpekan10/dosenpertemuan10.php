  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum Mandiri Pekan 10</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/pekan10">Prodi</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/pekan10mahasiswa">Mahasiswa</a></li>
              <li class="breadcrumb-item active">Dosen</li>

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
          <a href="<?php echo base_url();?>index.php/tambahdosen"><button type="button" class="btn btn-success">Tambah Dosen</button></a>

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
                <th>NO</th><th>NIDN</th><th>Nama</th><th>Gender</th><th>Tempat Tanggal Lahir</th><th>Pendidikan Akhir</th><th>Kode Prodi</th>
                <?php
                  if($this->session->userdata('ROLE')=='ADMIN'){
                ?>
                <th>Action</th>
                <?php
                  }
                ?>
            </tr>
        </thead>
    <tbody>
    <?php
    $nomor=1;
    foreach($list_dosen as $row){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row->nidn?></td>
            <td><?=$row->nama?></td>
            <td><?=$row->gender?></td>
            <td><?=$row->tmp_lahir?>, <?=$row->tgl_lahir?></td>
            <td><?=$row->pendidikan_akhir?></td>
            <td><?=$row->prodi_kode?></td>
            <?php
              if($this->session->userdata('ROLE')=='ADMIN'){
            ?>
            <td>
              <a href="<?php echo base_url();?>index.php/dosenpertemuan10/view?id=<?=$row->nidn?>">View</a> |
              <a href="<?php echo base_url();?>index.php/tambahdosen/edit?id=<?=$row->nidn?>">Edit</a> |
              <a href="<?php echo base_url();?>index.php/tambahdosen/delete?id=<?=$row->nidn?>"
              onclick="if(!confirm('Anda Yakin Hapus Dosen NIDN <?=$row->nidn?>?')) {return false}" >Delete</a>
            </td>
            <?php
              }
            ?>

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
