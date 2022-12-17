<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="card b-orange mt-4">
    <div class="row p-4">
        <div class="col-6">
            <img src="<?= base_url('assets/images/room1.png') ?>" class="rounded-image mx-4 d-block" />
            <div class="row">
                <h3 class="h2">Platinum</h3>
                <p class="h4">Capacity 10 people</p>
                <p class="h6">This room can be booked for private launches and business meetings,conferencess and other events</p>
                <span>Amenities</span>
                <div class="col-4">Projector</div>
                <div class="col-8">Whiteboard</div>
                <div class="col-4">Cam & Audio</div>
                <div class="col-8">Coffee</div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="h1">Availabillity</h1>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-4 d-flex justify-content-center">
                                <span class="c-grey">Date</span>
                                <p class="h3">Nov 19</p>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <span class="c-grey">Start</span>
                                <p class="h3">9 am</p>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <span class="c-grey">Duration</span>
                                <p class="h3">1 Hour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-23">
                    <div class="card">
                        te nyaho iye isi naon :v
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="bg-orange text-white btn btn-rounded btn-block" data-bs-toggle="modal" data-bs-target="#datemodal">Booking now</button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="datemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="tgl" class="form-label">Tanggal Booking</label>
                            <input type="date" class="form-control" id="tgl" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="start" class="form-label">Mulai</label>
                            <input type="time" class="form-control" id="start" />
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="end" class="form-label">Selesai</label>
                        <input type="time" class="form-control" id="end" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Booking</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript') ?>
<script>
</script>
<?= $this->endSection(); ?>