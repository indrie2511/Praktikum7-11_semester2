  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 8 CodeIgniter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/mahasiswaform">Mahasiswa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dosenform">Dosen</a></li>
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
          <h3 class="card-title">Form Jadwal</h3>

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
        <?php echo form_open('matakuliah');?>
  <div class="form-group row">
    <label for="semester" class="col-4 col-form-label">Semester</label> 
    <div class="col-8">
      <input id="semester" name="semester" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="dosenpengajar" class="col-4 col-form-label">Dosen Pengajar</label> 
    <div class="col-8">
      <input id="dosenpengajar" name="dosenpengajar" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jadwalmatkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <input id="jadwalmatkul" name="jadwalmatkul" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="hari" class="col-4 col-form-label">Hari</label> 
    <div class="col-8">
      <select id="hari" name="hari" class="custom-select">
        <option value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamis">Kamis</option>
        <option value="jumat">Jumat</option>
        <option value="sabtu">Sabtu</option>
        <option value="minggu">Minggu</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="ruangan" class="col-4 col-form-label">Ruangan</label> 
    <div class="col-8">
      <input id="ruangan" name="ruangan" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close();?>
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
