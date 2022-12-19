<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row ml-12 mt-4">
    <form class="row align-items-start">
        <div class="col-md-4">
            <div class="card b-orange">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Ruangan</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="contoh" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Fasilitas</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                        <label for="kapasitas" class="">Kapasitas</label>
                            <input type="text" class="form-control" id="kapasitas" placeholder="Kapasitas" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="gambar" class="">Gambar</label>
                            <input type="file" class="form-control" id="gambar" placeholder="" />
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