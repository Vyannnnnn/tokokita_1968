<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Password</h1>
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
                            <h3 class="card-title">Password Admin</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('kelola_admin/edit'); ?>">
                            <input type="hidden" name="id" value="<?php echo $kelola_admin->idAdmin; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" value="<?php echo $kelola_admin->userName; ?>" class="form-control" id="InputEmail3" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="password" value="<?php echo $kelola_admin->password; ?>" class="form-control" id="InputEmail3" placeholder="Password">
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