<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Data Orderan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Orderan</li>
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
                            <h3 class="card-title">Data Orderan</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('ongkir/edit'); ?>">
                            <input type="hidden" name="id" value="<?php echo $order->idOrder; ?>">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Tanggal Order</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tglOrder" value="<?php echo $order->tglOrder; ?>" class="form-control" id="InputEmail3" placeholder="Tanggal Order">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Status Order</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="statusOrder" value="<?php echo $order->statusOrder; ?>" class="form-control" id="InputEmail3" placeholder="Status Order">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Kurir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kurir" value="<?php echo $order->kurir; ?>" class="form-control" id="InputEmail3" placeholder="Kurir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputEmail3" class="col-sm-3 col-form-label">Ongkos Kirim</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ongkir" value="<?php echo $order->ongkir; ?>" class="form-control" id="InputEmail3" placeholder="Ongkos Kirim">
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