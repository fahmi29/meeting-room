<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row ml-12 mt-4">
    <form class="row align-items-start" method="post" action="/admin/update/<?= $room['id_ruangan'] ?>" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="col-md-4">
            <div class="card b-orange">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="contoh" name="namaruang" value="<?= $room['namaruang'] ?>" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Fasilitas</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fasilitas"><?= $room['fasilitas'] ?></textarea>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="kapasitas" class="">Kapasitas</label>
                            <input type="text" class="form-control" id="kapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= $room['kapasitas'] ?>" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="gambar" class="">Gambar</label>
                            <img src="<?=base_url('assets/images/'.$room['gambar']);?>" width="200" height="200">
                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="" />
                        </div>
                    </div>
                    <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-ligth bg-orange">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>