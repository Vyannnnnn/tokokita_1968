<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manajemen Toko</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen Toko</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Toko</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Id Toko</th>
                                        <th scope="col">Id Konsumen</th>
                                        <th scope="col">Nama Toko</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Status Aktif</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kelola_toko as $val) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $no; ?></th>
                                            <td><?php echo $val->idToko; ?></td>
                                            <td><?php echo $val->idKonsumen; ?></td>
                                            <td><?php echo $val->namaToko; ?></td>
                                            <td><img src="<?php echo base_url('assets/logo_toko/' . $val->logo); ?>" width="150" height="110"></td>
                                            <td><?php echo $val->deskripsi; ?></td>
                                            <td><?php echo $val->statusAktif; ?></td>
                                            <td>
                                                <div class="btn-group">

                                                    <a href="<?php echo site_url('kelola_toko/get_by_id/' . $val->idToko); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('kelola_toko/delete/' . $val->idToko); ?>" onClick="return confirm('Yakin Akan Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="<?php echo site_url('kelola_toko/add'); ?>" class="btn btn-sm btn-info float-left">Tambah Toko</a>
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

</div>