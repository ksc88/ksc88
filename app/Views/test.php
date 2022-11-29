<?= $this->extend('homePageLayout/home_layout') ?>
<?= $this->section('content') ?>
    <!-- Dashboard -->
	<div class="my-5" id="b-homedb">
		<div class="container">
			<div class="row text-center">
				<h2 class="col-md-12">Figures tell the story</h2>
				<div class="col-lg-4 p-4">
					<div class="bg-light py-4 b-dbcard">
						<p><span class="fa fa-id-card" style="font-size:40px"></span></p>
						<h3 style="font-size: 16px;"><strong>Total Applications Recieved</strong></h3>
						<div class="text-left ">
							<p class="px-5">Till date  <span class="float-right">4.88 Cr</span></p>

							<p class="px-5">Current year <span class="float-right">23 Lakh</span></p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 p-4">
					<div class="bg-light py-4 b-dbcard">
						<p><span class="fa fa-check-square" style="font-size:40px"></span></p>
						<h3 style="font-size: 16px;"><strong>Total Applications Registered</strong></h3>
						<div class="text-left ">
							<p class="px-5">Till date  <span class="float-right">2.23 Cr</span></p>

							<p class="px-5">Current year <span class="float-right">1.3 Lakh</span></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 p-4">
					<div class="bg-light py-4 b-dbcard">
						<p><span class="fas fa-rupee-sign" style="font-size:40px;"></span></p>
						<h3 style="font-size: 16px;"><strong>Total Revenue Generated</strong></h3>
						<div class="text-left ">
							<p class="px-5">Till date  <span class="float-right">2,234.40 Cr</span></p>

							<p class="px-5">Current year <span class="float-right">9,478.75 Cr</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?= $this->endSection() ?>