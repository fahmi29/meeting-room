<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row ml-12 mt-4">
    <form class="row align-items-start">
        <div class="col-md-4">
            <div class="card b-orange">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="kapasitas" class="">Nama Lengkap</label>
                            <input type="text" class="form-control" id="kapasitas" placeholder="Nama" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="gambar" class="">Email</label>
                            <input type="email" class="form-control" id="gambar" placeholder="test@coba.com" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="kapasitas" class="">Username</label>
                            <input type="text" class="form-control" id="kapasitas" placeholder="Nama" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="gambar" class="">Password</label>
                            <input type="text" class="form-control" id="gambar" placeholder="test@coba.com" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="kapasitas" class="">Divisi</label>
                            <input type="text" class="form-control" id="kapasitas" placeholder="Nama" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="gambar" class="">Jabatan</label>
                            <input type="texr" class="form-control" id="gambar" placeholder="test@coba.com" />
                        </div>
                    </div>
                    <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-ligth bg-orange">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>