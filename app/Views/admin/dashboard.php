<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>




<div class="row">
	<div class="col">
	</div>

	<div class="col">
		<div class="row">
			<div class="col-md-5">
				<div class="card shadow-sm" style="padding: 5px">
					<img src="<?= base_url('assets/images/room1.png') ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">10 Capacity</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
							<small class="text-muted">9 mins</small>
						</div>
					</div>
			  	</div>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>