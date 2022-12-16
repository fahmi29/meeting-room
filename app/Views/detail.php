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
        </div>
    </div>
</div>
<?= $this->endSection(); ?>