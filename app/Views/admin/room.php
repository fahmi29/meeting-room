<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row pt-4">
    <div class="col-md-12">
        <div class="card b-orange mb-4 ml-6 radius">
            <div class="card-body">
                <?php
                if (session()->getFlashData('msg')) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashData('msg') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                <?php
                }
                ?>
                <div class="card bg-white p-4 radius">
                    <form class="row g-3">
                        <div class="col-auto">
                            <label for="staticEmail2" class="visually-hidden">Date From</label>
                            <input type="date" class="form-control" id="datefrom" />
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2" class="visually-hidden">Date To</label>
                            <input type="date" class="form-control" id="dateto" />
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-outline-ligth border-orange">Filter</button>
                            <button class="btn btn-ligth bg-orange">Export</button>
                            <a href="/admin/add-room" class="btn btn-outline-primary">Add Ruangan</a>
                        </div>
                    </form>
                    <table id="datauser" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Ruangan</th>
                                <th>Kapasitas</th>
                                <th>Fasilitas</th>
                                <!-- <th>Gambar</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($room as $key => $ruang) : ?>
                                <tr>
                                    <td><?= $key+=1 ?></td>
                                    <td><?= $ruang['namaruang'] ?></td>
                                    <td><?= $ruang['kapasitas'] ?></td>
                                    <td><?= $ruang['fasilitas'] ?></td>
                                    <!-- <td><?= $ruang['gambar'] ?></td> -->
                                    <td>
                                        <a href="/admin/edit-room/<?= $ruang['id_ruangan']; ?>" class="btn btn-outline-secondary no-border"><svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.34421 17.2437L17.25 9.1123L13.0199 5.25005L4.11413 13.3814C3.99152 13.4935 3.90443 13.6338 3.86208 13.7874L2.875 18.375L7.89858 17.4738C8.06725 17.4353 8.22154 17.3557 8.34421 17.2437ZM20.125 6.4873C20.4843 6.15912 20.6862 5.71408 20.6862 5.25005C20.6862 4.78601 20.4843 4.34097 20.125 4.0128L18.6051 2.62505C18.2457 2.29697 17.7582 2.11267 17.25 2.11267C16.7418 2.11267 16.2543 2.29697 15.8949 2.62505L14.375 4.0128L18.6051 7.87505L20.125 6.4873Z" fill="#56F253" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript') ?>
<script>
    $(document).ready(function() {
        var table = $('#datauser').DataTable({
            responsive: true,
            lengthChange: false
        });

        new $.fn.dataTable.FixedHeader(table);

        $('.dataTables_filter').addClass('pull-left');
    });
</script>
<?= $this->endSection(); ?>