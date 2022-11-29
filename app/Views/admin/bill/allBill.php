<?= $this->extend('admin/layout/main-layout') ?>
    <?= $this->section('content') ?>
    <!-- preloader area start -->
<!-- preloader area start -->
<div id="preloader">
<div class="loader"></div>
</div>
<!-- preloader area end -->
<div class="page-container">
<!-- sidebar menu area start -->
<div class="sidebar-menu">
<div class="sidebar-header">
<div class="logo">
<a href="#"><img src="<?php echo base_URL();?>/public/assets/images/icon/logo.gif" alt="logo"></a>
</div>
</div>
<div class="main-menu">
<div class="menu-inner">
<?= $this->include('admin/includes/admin-sidebar'); ?>
</div>
</div>
</div>
<!-- sidebar menu area end -->
<!-- main content area start -->
<div class="main-content">
<!-- header area start -->
<div class="header-area">
<div class="row align-items-center">
<!-- nav and search button -->
<div class="col-md-6 col-sm-8 clearfix">
<div class="nav-btn pull-left">
<span></span>
<span></span>
<span></span>
</div>         
</div>
<!-- profile info & task notification -->
<div class="col-md-6 col-sm-4 clearfix">
<ul class="notification-area pull-right">
<li id="full-view"><i class="ti-fullscreen"></i></li>
<li id="full-view-exit"><i class="ti-zoom-out"></i></li>

<!-- Notification bell -->
<?php //include 'includes/admin-notification.php'?>

</ul>
<!-- notification ends -->
</div>
</div>
</div>
<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
<div class="row align-items-center">
<div class="col-sm-6">
<div class="breadcrumbs-area clearfix">
<h4 class="page-title pull-left">Dashboard</h4>
<ul class="breadcrumbs pull-left">
<li><a href="#">Home</a></li>
<li><span>Dashboard Of Finance</span></li>
</ul>
</div>
</div>
<div class="col-sm-6 clearfix">
<div class="user-profile pull-right">
<img class="avatar user-thumb"src="<?php echo base_URL();?>/public/assets/images/admin.png" alt="avatar">
<h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN <i class="fa fa-angle-down"></i></h4>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Log Out</a>
</div>
</div>
</div>
</div>
</div>
<!-- page title area end -->
<div class="main-content-inner mt-5">
<!-- sales report area start -->
<div class="sales-report-area mt-5 mb-5">

<div class="sales-report-area mt-5 mb-5">

<!-- Invoice Bifurcation End-->


<!-- trading history area start -->
<div class="container">
<div class="col-md-12">
<div class="card"> 
<div class="card-body">
<div class="d-sm-flex justify-content-between align-items-center">
<!-- <h4 class="header-title">Employee Leave History</h4> -->
<div class="trd-history-tabs">
<ul class="nav" role="tablist">
<li>
<a class="active" data-toggle="tab" href="#" role="tab">Invoice Value</a>
</li>
<li>

</li>
</ul>
</div>
<!-- <select class="custome-select border-0 pr-3">
<option selected>Last 24 Hours</option>
</select> -->
</div> 
<div class="card">
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>
<div class="col-md-12  table-responsive">
<a href="addBill"  class="bg-info text-white  p-2 float-right">Add Bill</a>

<?php if(session()->getFlashdata('success')){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('success')); ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div><?php } ?>
<div class="card-body">
<div class="data-tables datatable-dark">
<table id="dataTable3" class="table table-hover table-bordered table-sm table-dark text-wrap ">
<caption>All Invoices which have been raised till date...</caption>
   
<thead class="thead-light">
<tr>
<th>#</th>
<th class="text-wrap">Invoice No </th>
<th>Invoice Date</th>
<th class="text-wrap">Invoice Month</th>
<th>Invoice FY</th>      
<th class="text-right">Invoice Amt</th>
<th class="text-right">Invoice Recvd.Amt</th>
<th class="text-right">Invoice Type</th>
<th class="text-right">Due Amount </th>


<th></th>
</tr>
</thead>
<tbody><?php $count = 1;  foreach ($row_one as $row) :?>
<tr>      
<td><?php echo($count) ;?></td>
<td class="text-wrap"><?php $invoice_number=($row['invoice_number']);
        if($invoice_number==''){echo 'Not Available';}else{echo $invoice_number;}?></td>
<td><?= esc($row['invoice_dt'])?></td>
<td><?php $monthNum = esc($row['invoice_mnth']);
        if($monthNum==0){echo 'Not Available';}else{ $monthName = date("F",  mktime(0, 0, 0, $monthNum, 22));
            echo $monthName;}?></td>
<td class="text-right"><?= esc($row['invoice_fy'])?></td>
<?php $invoice_amt_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['invoice_amt']);  ?>
<td class="text-right"><?= esc($invoice_amt_inr)?></td> 
<?php $invoice_recvd_amt_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['invoice_recvd_amt']);  ?> 
<td class="text-right"><?= esc($invoice_recvd_amt_inr)?></td>  
<td class="text-right"><?= esc($row['invoice_type'])?></td> 
<td class="text-right"><?= esc($row['invoice_amt']-$row['invoice_recvd_amt'])?>
<td><a href="<?= base_url('editBill/'.$row['id'])?>" onclick="return confirm('Are you sure you want to edit the Bill');"><i class="fa fa-edit" style="color:green"></i></a> </td> 

</td>  

</tr>
<?php   $count++;  endforeach; ?>
</tbody>
</table>                    
</div>
</div>
</div>
<!-- trading history area end -->
</div>
<!-- row area end -->

</div>
<!-- row area start-->
</div>
<?= $this->include('admin/includes/footer.php'); ?>

<?= $this->endSection() ?>
<script>
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}

</script>
