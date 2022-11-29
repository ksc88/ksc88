<?= $this->extend('homePageLayout/home_layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<div><p class="lead pt-1"><mark>PPT Templates</mark> </div>
			<div class="row">

			
			<div class="col-md-2">
					<div class="thumbnail">
						<a href="#" >
						<img src="<?php echo base_url();?>/public/assets/images/inner-img/pptThumnail1.jpg" alt="PPt Temp 1" style="width:100%">
						<div class="caption">
						<a class="text-center" href="<?php echo base_url();?>/public/assets/ppts-temp/Temp1.pptx" download><p>Template 1 </br> Download</p></a>
						</div></a>
					</div>
				</div>	
				<div class="col-md-2">
					<div class="thumbnail">
						<a href="#" >
						<img src="<?php echo base_url();?>/public/assets/images/inner-img/pptThumnail1.jpg" alt="multi Pupose Boot" style="width:100%">
						<div class="caption">
						<a class="text-center" href="<?php echo base_url();?>/public/assets/images/productPhotosDir/multipuposeBoot.zip" download><p>Template 2</br> Download</p></a>
						</div></a>
					</div>
				</div>	
				
				
		</div>   
</div>          
	<!-- </div>	container closed -->
<?= $this->endSection() ;?>