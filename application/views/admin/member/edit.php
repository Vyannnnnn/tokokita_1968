<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Data Member</h1>
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
                            <h3 class="card-title">Data Member</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('member/edit'); ?>">
                            <input type="hidden" name="id" value="<?php echo $member->idKonsumen; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" value="<?php echo $member->userName; ?>" class="form-control" id="InputEmail3" placeholder="Username">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="password" value="<?php echo $member->password; ?>" class="form-control" id="InputEmail3" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namakonsumen" value="<?php echo $member->namaKonsumen; ?>" class="form-control" id="InputEmail3" placeholder="Nama Konsumen">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" value="<?php echo $member->alamat; ?>" class="form-control" id="InputEmail3" placeholder="Alamat">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Id Kota</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="idkota" value="<?php echo $member->idKota; ?>" class="form-control" id="InputEmail3" placeholder="Id Kota">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" value="<?php echo $member->email; ?>" class="form-control" id="InputEmail3" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="telepon" value="<?php echo $member->tlpn; ?>" class="form-control" id="InputEmail3" placeholder="Telepon">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Status Aktif</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="statusaktif" value="<?php echo $member->statusAktif; ?>" class="form-control" id="InputEmail3" placeholder="Alamat">
                                    </div>
                                </div>
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