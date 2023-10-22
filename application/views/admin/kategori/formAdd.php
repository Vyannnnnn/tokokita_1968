<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Tambah Kategori</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Kategori</li>
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
        <div class="col-md-5">
          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Kategori</h3>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php echo site_url('kategori/validasi_add'); ?>">
              <div class="card-body">
                <div class="form-group row">
                  <label for="InputEmail3" class="col-sm-3 col-form-label">Nama Kategori</label>
                  <div class="col-sm-7">
                    <input type="text" name="namaKat" class="form-control" id="InputEmail3" placeholder="Nama Kategori">
                  </div>
                </div>
              </div>
              <?= form_error('namaKat', '<div align="center" class="text-danger pl-3">', '</div>'); ?>
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