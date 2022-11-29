<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>TCL:Dashboard For Director of Finance</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="<?php echo base_URL();?>/public/assets/images/icon/favicon.ico">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/themify-icons.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/metisMenu.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/slicknav.min.css">

<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css"> -->
<!-- amchart css -->
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<!-- others css -->
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/typography.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/default-css.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/styles.css">
<link rel="stylesheet" href="<?php echo base_URL();?>/public/assets/css/responsive.css">
<!-- modernizr css -->
<script src="<?php echo base_URL();?>/public/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
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
<div class="col-lg-6">
<div class="breadcrumbs-area clearfix">
<h4 class="page-title pull-left">Dashboard</h4>
<ul class="breadcrumbs pull-left">
<li><a href="#">Home</a></li>
<li><span>Dashboard Of Finance</span></li>
</ul>
</div>
</div>
<div class="col-lg-6 clearfix">
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
<div class="sales-report-area mt- mb-5 ">
<!-- row area start -->
<div class="row ">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<div class="d-sm-flex align-items-center ">    
<?= include 'dof-page2.php'; ?>   
</div> 

</div>

</div>
</div>
<div class="row">
<div class="col-lg-6 mt-2" id="printableArea">
<div class="card">
<div class="card-body">
<div class="d-sm-flex align-items-center ">

<?= $this->include('admin/bill/invoiceOutstatingChart.php'); ?>   

 
</div></div></div>
</div>
<div class="container">
<div class="col-lg-12 table-responsive pt-2" id="printableArea">
<div class="card"> 
<div class="card-body">
<div class="d-sm-flex justify-content-between align-items-center">
<!-- <h4 class="header-title">Employee Leave History</h4> -->
<div class="trd-history-tabs">
<ul class="nav" role="tablist">
<li>
<h2><a class="active" data-toggle="tab" href="#" role="tab">Details OF OutStanding Invoices</a></h2>
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
<div class="col-12 mt-5">
<?php if(session()->getFlashdata('msg')){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('msg')); ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button></div><?php } ?>
<div class="card-body">
<div class="data-tables datatable-light text-wrap " style="width:900px">
<table id="dataTable3" class="table table-hover table-striped text-wrap" >
<thead class="text-capitalize">
<tr>
    <th>Sr.No</th>
    <th>Contract No </th>
    <th>Invoice FY</th>      
    <th>Invoice Amt</th>
    <th>Invoice Date</th>
    <th>Invoice Recieved Date</th>
    <th>Invoice Recvd.Amt</th>
    <th>Invoice Type</th>
    <th>OutStanding</th>
    
    
</tr>
</thead><tbody><?php  $count=1;  foreach ($row_one as $row) :
    if(($row['invoice_amt']-$row['invoice_recvd_amt'])>0){?>
    <tr> <td class="text-left wrap"><?php echo($count) ;?></td><td class="text-left"><?= esc($row['contract_no'])?></td>
    <td><?= esc($row['invoice_fy'])?></td>
    <?php $invoice_amt_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['invoice_amt']);  ?>
    <td class="text-right"><?= esc($invoice_amt_inr)?></td> 
    <td class="text-right"><?= esc($row['invoice_dt'])?></td> 
    <td class="text-right"><?php if($row['inv_r_dt']==NULL){echo 'Not Available';} else {echo($row['inv_r_dt']);} ?></td> 
    <?php $invoice_recvd_amt_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['invoice_recvd_amt']);  ?> 
    <td class="text-right"><?= esc($invoice_recvd_amt_inr)?></td>
    <td><?= esc($row['invoice_type'])?></td>
    <?php $invoice_recvd_amt_inr = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", ($row['invoice_amt']-$row['invoice_recvd_amt']));  ?> 
    <td class="text-right"><?= esc($invoice_recvd_amt_inr)?></td>  
 </tr><?php  $count++; }  endforeach; ?>
    </tbody><tr><td colspan="5" class="text-align-right"> </td></tr>
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
<?= view('admin/includes/footer.php');//include 'includes/footer.php' ?>
<!-- footer area end-->
</div>
<!-- main content area end -->
</div>
<!-- login area end -->
<!-- jquery latest version -->
<script src="<?php echo base_URL();?>/public/assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="<?php echo base_URL();?>/public/assets/js/popper.min.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/jquery.slicknav.min.js"></script>

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/api/sum().js"></script>


<!-- others plugins -->
<script src="<?php echo base_URL();?>/public/assets/js/plugins.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/scripts.js"></script>
</body>

<script>
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}


</script>

</html>