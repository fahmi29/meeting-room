<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row ml-12 mt-4">
    <form class="row align-items-start" action="<?= base_url('/admin/store') ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="col-md-4">
            <div class="card b-orange">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="namalengkap" class="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Nama" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="email" class="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="test@coba.com" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="username" class="">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nama" />
                        </div>
                        <div class="col-auto mb-3">
                            <label for="password" class="">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="test@coba.com" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                            <label for="divisi" class="">Divisi</label>
                            <select name="divisi" id="divisi" class="form-select">
                                <option value="">---Pilih Divisi---</option>
                                <?php foreach ($divisi as $divisis) : ?>
                                    <option value="<?= $divisis['id_divisi']; ?>"><?= $divisis['divisi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-auto mb-3">
                            <label for="jabatan" class="">Jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-select">
                                <option value="">---Pilih Jabatan---</option>
                                <?php foreach ($jabatan as $jabatans) : ?>
                                    <option value="<?= $jabatans['id_jabatan']; ?>"><?= $jabatans['jabatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
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