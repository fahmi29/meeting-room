<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row offset-md-1">
	<div class="col-md-5 pt-4">
		<div class="card b-orange mb-4 ml-6">
			<div class="card-body">
				<img src="<?= base_url('assets/images/room1.png') ?>" class="rounded-image mx-auto d-block" />
				<div class="row justify-content-center">
					<div class="col-6 ">
						<div class="col-12">
							<h3 class="h3 left-l">Platinum</h3>
						</div>
						<div class="col-12">
							<p class="h6 left-l">Capacity 10 people</p>
						</div>
					</div>
					<div class="col-6 pt-3">
						<a href="<?= base_url('/detail') ?>" class="btn-rounded btn btn-lg bg-orange text-white left-m">Check Availability</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 pt-4">
		<div class="card b-orange mb-4 ml-6">
			<div class="card-body">
				<img src="<?= base_url('assets/images/room1.png') ?>" class="rounded-image mx-auto d-block" />
				<div class="row justify-content-center">
					<div class="col-6 ">
						<div class="col-12">
							<h3 class="h3 left-l">Platinum</h3>
						</div>
						<div class="col-12">
							<p class="h6 left-l">Capacity 10 people</p>
						</div>
					</div>
					<div class="col-6 pt-3">
						<a href="<?= base_url('/detail') ?>" class="btn-rounded btn btn-lg bg-orange text-white left-m">Check Availability</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>