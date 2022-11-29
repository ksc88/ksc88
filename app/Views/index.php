<?= $this->extend('homePageLayout/home_layout') ?>
<?= $this->section('content') ?>
	<!-- Banner -->
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url();?>/public/assets/images/banner1.jpg" alt="banner 1" width="100%">
				<!-- <div class="carousel-caption" style="color:#343A40;">
					<h3>Heading 1</h3>
					<p>Description goes here.</p>
				</div>    -->
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url();?>/public/assets/images/banner1.jpg" alt="Banner 2" width="100%">
				<!-- <div class="carousel-caption" style="color:#343A40;">
					<h3>Heading 2</h3>
					<p>Description goes here.</p>
				</div>  -->  
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url();?>/public/assets/images/banner1.jpg" alt="Banner 3" width="100%">
				<!-- <div class="carousel-caption" style="color:#343A40;">
					<h3>Heading 3</h3>
					<p>Description goes here.</p>
				</div>  -->  
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span style="display:none;">Previous</span>
			<span class="far fa-angle-left" style="font-size:40px; color:#FFF"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span style="display:none;">Next</span>
			<span class="far fa-angle-right" style="font-size:40px; color:#FFF"></span>
		</a>
	</div>
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
							<p class="px-5">Till date  <span class="float-right"># Cr</span></p>

							<p class="px-5">Current year <span class="float-right"># Lakh</span></p>
						</div>
						
					</div>					
				</div>
				<div class="col-lg-4 p-4">
					<div class="bg-light py-4 b-dbcard">
						<p><span class="fa fa-check-square" style="font-size:40px"></span></p>
						<h3 style="font-size: 16px;"><strong>Total Applications Registered</strong></h3>
						<div class="text-left ">
							<p class="px-5">Till date  <span class="float-right"># Cr</span></p>

							<p class="px-5">Current year <span class="float-right"># Lakh</span></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 p-4">
					<div class="bg-light py-4 b-dbcard">
						<p><span class="fas fa-rupee-sign" style="font-size:40px;"></span></p>
						<h3 style="font-size: 16px;"><strong>Total Revenue Generated</strong></h3>
						<div class="text-left ">
							<p class="px-5">Till date  <span class="float-right"># Cr</span></p>

							<p class="px-5">Current year <span class="float-right"># Cr</span></p>
						</div>
					</div>
				</div>

			</div>
		</div>
		
	</div>

	<!-- Login Modal -->
	<div class="modal fade" id="login-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header text-center d-block p-5 border-bottom-0">
					<h2 class="modal-title">Log In</h2>
					<button type="button" class="close position-absolute" style="right: 15px; top: 8px;" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
				<form  action="<?php echo site_url('login/user_check') ?>" method="post" autocomplete="off" >	
				<?= csrf_field() ?>
						<div class="form-group">
							<label for="login-email">PersonalNo:</label>
							<input type="number" class="form-control"  placeholder="Enter Personal No" name="login-personalNo" value="<?= old('login-personalNo') ?>">
						</div>
						<div class="form-group">
							<label for="login-pwd">Password:</label>
							<input type="password" class="form-control" id="login-pwd" placeholder="Enter password" name="login-pwd">
						</div>
						<div class="form-group form-check">
							<label class="form-check-label" for="login-rem">
								<input class="form-check-input" type="checkbox" id="login-rem" name="remember"> Remember me
							</label>
						</div>
						<p class="text-right b-notreg">Don't have an account? <a href="" data-toggle="modal" data-target="#signup-modal" data-dismiss="modal">Sign Up</a></p>
						<div class="text-center py-4">
							<button type="submit" class="btn btn-primary b-btn">Log In</button>
						</div>
						
					</form>
				</div>


			</div>
		</div>
	</div>
	<!-- Signup Modal -->
	<div class="modal fade" id="signup-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header text-center d-block p-5 border-bottom-0">
					<h2 class="modal-title">Sign Up</h2>
					<button type="button" class="close position-absolute" style="right: 15px; top: 8px;" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="<?php echo site_url('test/msg') ?>" autocomplete="off">
						<div class="form-group">
							<label for="signup-name">Name:</label>
							<input type="text" class="form-control" id="signup-name" placeholder="Enter name" name="signup-name">
						</div>
						<div class="form-group">
							<label for="signup-email">Email:</label>
							<input type="email" class="form-control" id="signup-email" placeholder="Enter email" name="signup-email">
						</div>
						<div class="form-group">
							<label for="signup-mobile">Mobile no.:</label>
							<input type="number" class="form-control" id="signup-mobile" placeholder="Enter mobile no." name="signup-mobile">
						</div>
						<div class="form-group">
							<label for="signup-pwd">Password:</label>
							<input type="password" class="form-control" id="signup-pwd" placeholder="Enter password" name="signup-pwd">
						</div>

						<p class="text-right b-already-reg">Already Registered? <a href="" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Log In</a></p>
						<div class="text-center py-4">
							<button type="submit" class="btn btn-primary b-btn">Sign Up</button>
						</div>
						
					</form>
				</div>


			</div>
		</div>
	</div>

	<?= $this->endSection() ?>





















