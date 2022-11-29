<?= $this->extend('homePageLayout/home_layout') ?>
<?= $this->section('content') ?>
    <!-- Dashboard -->
<div class="container">



<div class="d-sm-flex justify-content-between align-items-center">
<!-- <h4 class="header-title">Employee Leave History</h4> -->
<div class="trd-history-tabs">
<ul class="nav" role="tablist">
<li>
<a class="active" data-toggle="tab" href="#" role="tab">Officers Directory</a>
</li>
<li>

</li>
</ul>
</div>
<!-- <select class="custome-select border-0 pr-3">
<option selected>Last 24 Hours</option>
</select> -->
</div> 
<div class="card mb-5">
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<?php if(session()->getFlashdata('msg')){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('msg')); ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div><?php } ?>
<div class="card-body">
	<p class="text-center text-info">ई.पी.ए.बी एक्स-2451781-82 FAX - 2450099 EMAIL ~ oefhq.ofb@nic.in / info@troopcomfortslimited.co.in</p>
<div class="data-tables datatable-dark text-center">
	<table id="dataTable" class="table table-hover table-striped text-center">
	<thead class="text-capitalize">
	<tr  class="table-success">
	<th>#</th>
	<th>नाम (श्री/श्रीमती)  </th>
	<th>पद</th>
	<th> विस्तार सं.</th>      
	<th>फ़ोन</th>
	<th>मोबाइल</th>
	<th></th>
	

	</tr>
	</thead>
	<tbody><?php $count = 1; foreach($data->getResult() as $row ) :?>
	<tr class="table-info">  
		<td><?= $count; ?></td>  
		<td><?= $row->name;?></td>  
		<td><?= $row->post;?></td>  
		<td><?= $row->extn;?></td>  
		<td><?= $row->phone	;?></td>  
		<td><?= $row->mobile;?></td> 
		<td> </td>
	</tr>
	<?php  $count ++;endforeach ?>


	</tbody>
	</table>                    


</div>
</div></div></div>

    <?= $this->endSection() ?>
