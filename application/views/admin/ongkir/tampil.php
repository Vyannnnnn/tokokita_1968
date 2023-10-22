<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manajemen Orderan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen Orderan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Orderan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id Order</th>
                                        <th>Id Konsumen</th>
                                        <th>Id Toko</th>
                                        <th>Tanggal Order</th>
                                        <th>Status Order</th>
                                        <th>Kurir</th>
                                        <th>Ongkos Kirim</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($order as $val) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $val->idOrder; ?></td>
                                            <td><?php echo $val->idKonsumen; ?></td>
                                            <td><?php echo $val->idToko; ?></td>
                                            <td><?php echo $val->tglOrder; ?></td>
                                            <td><?php echo $val->statusOrder; ?></td>
                                            <td><?php echo $val->kurir; ?></td>
                                            <td><?php echo $val->ongkir; ?></td>
                                            <td>
                                                <div class="btn-group ">
                                                    <a href="<?php echo site_url('ongkir/get_by_id/' . $val->idOrder); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('ongkir/delete/' . $val->idOrder); ?>" onClick="return confirm('Yakin Akan Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>


                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="<?php echo site_url('ongkir/add'); ?>" class="btn btn-sm btn-info float-left">Tambah Data Baru</a>
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
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>