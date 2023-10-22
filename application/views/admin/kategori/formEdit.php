<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Kategori</li>
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
                            <h3 class="card-title">Data Kategori</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('kategori/edit'); ?>">
                            <input type="hidden" name="id" value="<?php echo $kategori->idKat; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-5 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="namaKat" value="<?php echo $kategori->namaKat; ?>" class="form-control" id="InputEmail3" placeholder="Nama Kategori">
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