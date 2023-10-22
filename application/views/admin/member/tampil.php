<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manajemen Data Member</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen Data Member</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama Konsumen</th>
                                            <th>Alamat</th>
                                            <th>Id Kota</th>
                                            <th>Email</th>
                                            <th>No.Telpon</th>
                                            <th>Status Aktif</th>
                                            <th style="width: 200px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($member as $val) { ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $val->userName; ?></td>
                                                <td><?php echo $val->password; ?></td>
                                                <td><?php echo $val->namaKonsumen; ?></td>
                                                <td><?php echo $val->alamat; ?></td>
                                                <td><?php echo $val->idKota ?></td>
                                                <td><?php echo $val->email; ?></td>
                                                <td><?php echo $val->tlpn; ?></td>
                                                <td><?php if ($val->statusAktif == "Y") {
                                                        echo "Aktif";
                                                    } else {
                                                        echo "Tidak Aktif";
                                                    } ?></td>

                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?php echo site_url('member/get_by_id/' . $val->idKonsumen); ?>" class="btn btn-warning">Edit</a>
                                                        <a href="<?php echo site_url('member/delete/' . $val->idKonsumen); ?>" onClick="return confirm('Yakin Akan Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>


                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        } ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>