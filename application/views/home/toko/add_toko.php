<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Tambah Toko</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('toko/save'); ?>" enctype="multipart/form-data">
                    <div class="control-group">
                        <input type="text" name="namatoko" class="form-control" id="name" placeholder="Nama Toko" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-black text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="file" name="logo" class="form-control" id="emfail" placeholder="Logo" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-black text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea name="deskripsi" id="message" placeholder="Deskripsi" rows="3" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-black text-danger"></p>
                    </div>
            </div>
            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Simpan</button>
        </div>
        </form>

    </div>

</div>
</div>
</div>