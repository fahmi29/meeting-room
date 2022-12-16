<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row ml-12">
	<div class="col-md-5 pt-4">
		<div class="card-body pl-6">
			<h2 class="h2"><?= date('M d') . ', ' . date('l'); ?></h2>
			<h3 class="h3 orange">History</h3>
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Upcomming</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Done</button>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
					<div class="card b-orange mb-4">
						<div class="card-body">
							<div class="card-title orange h5">Platinum Room Meeting</div>
							<div class="card-text c-grey pb-4">Mahalini Raharja</div>
							<div class="card-text c-grey h6">10:00 - 11:00</div>
						</div>
					</div>

					<div class="card b-orange mb-4">
						<div class="card-body">
							<div class="card-title orange h5">Executive Space</div>
							<div class="card-text c-grey pb-4">Mahalini Raharja</div>
							<div class="card-text c-grey h6">16:00 - 16:30</div>
						</div>
					</div>

					<div class="card b-orange mb-4">
						<div class="card-body">
							<div class="card-title orange h5">Gloriya Room</div>
							<div class="card-text c-grey pb-4">Mahalini Raharja</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
					<div class="card b-orange mb-4">
						<div class="card-body">
							<div class="card-title orange h5">Gloriya Room</div>
							<div class="card-text c-grey pb-4">Mahalini Raharja</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 pt-4">
		<div class="card b-orange mb-4 ml-6">
			<div class="card-body">
				<img src="<?= base_url('assets/images/room1.png') ?>" class="rounded mx-auto d-block" />
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?</p>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>