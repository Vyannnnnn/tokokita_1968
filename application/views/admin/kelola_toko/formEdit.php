<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Toko</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Toko</li>
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
                        <form class="form-horizontal" method="post" action="<?php echo site_url('kelola_toko/edit'); ?>">
                            <input type="hidden" name="id" value="<?php echo $kelola_toko->idToko; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-5 col-form-label">Nama Toko</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="namaToko" value="<?php echo $kelola_toko->namaToko; ?>" class="form-control" id="InputEmail3" placeholder="Nama Toko">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-5 col-form-label">Logo</label>
                                    <div class="col-sm-6">
                                        <input type="file" name="logo" value="<?php echo $kelola_toko->logo; ?>" class="form-control" id="InputEmail3" placeholder="Logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-5 col-form-label">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="deskripsi" value="<?php echo $kelola_toko->deskripsi; ?>" class="form-control" id="InputEmail3" placeholder="Deskripsi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-5 col-form-label">Status Aktif</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="statusAktif" value="<?php echo $kelola_toko->statusAktif; ?>" class="form-control" id="InputEmail3" placeholder="Status Aktif">
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-info mx-auto">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>