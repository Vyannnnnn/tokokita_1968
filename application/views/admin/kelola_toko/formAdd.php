<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Tambah Toko</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Toko</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Toko</h3>
            </div>
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php echo site_url('kelola_toko/validasi_add'); ?>">
              <div class="card-body">
                <div class="form-group row">
                  <label for="InputEmail3" class="col-sm-4 col-form-label">Id Konsumen</label>
                  <div class="col-sm-5">
                    <input type="text" name="idKonsumen" class="form-control" id="InputEmail3" placeholder="Id Konsumen">
                  </div>
                </div>
                <?= form_error('idKonsumen', '<div align="center" class="text-danger pl-3">', '</div>'); ?>
                <div class="form-group row">
                  <label for="InputEmail3" class="col-sm-4 col-form-label">Nama Toko</label>
                  <div class="col-sm-5">
                    <input type="text" name="namaToko" class="form-control" id="InputEmail3" placeholder="Nama Toko">
                  </div>
                </div>
                <?= form_error('namaToko', '<div align="center" class="text-danger pl-3">', '</div>'); ?>
                <div class="form-group row">
                  <label for="InputEmail3" class="col-sm-4 col-form-label">Logo</label>
                  <div class="col-sm-5">
                    <input type="file" name="logo" class="form-control" id="InputEmail3" placeholder="Logo">
                  </div>
                </div>
                <?= form_error('logo', '<div align="center" class="text-danger pl-3">', '</div>'); ?>
                <div class="form-group row">
                  <label for="InputEmail3" class="col-sm-4 col-form-label">Deskripsi</label>
                  <div class="col-sm-5">
                    <input type="text" name="deskripsi" class="form-control" id="InputEmail3" placeholder="Deskripsi">
                  </div>
                </div>
                <?= form_error('deskripsi', '<div align="center" class="text-danger pl-3">', '</div>'); ?>
                <div class="form-group row">
                  <label for="InputEmail3" class="col-sm-4 col-form-label">Status Aktif</label>
                  <div class="col-sm-5">
                    <input type="text" name="statusAktif" class="form-control" id="InputEmail3" placeholder="Status Aktif">
                  </div>
                </div>
                <?= form_error('statusAktif', '<div align="center" class="text-danger pl-3">', '</div>'); ?>
              </div>


              <!-- /.card-body -->

              <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-info mx-auto">Simpan</button>
              </div>


              <!-- /.card-footer -->
            </form>
          </div>
        </div>
      </div>

      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>