<?= $this->extend('admin/layout/main-layout') ?>
    <?= $this->section('content') ?>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <div class="page-container mx-5">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard.php"><img src="<?php echo base_URL(); ?>/public/assets/images/icon/tcl_logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                <?= $this->include('admin/includes/admin-sidebar');?>
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
                            <?php #include 'includes/admin-notification.php' 
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add Bill/Invoice Details</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Bill</a></li>
                                <li><span>Edit </span></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_URL(); ?>/public/assets/images/admin.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- row area start -->
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                                    <div class="card">
                                    <form action="<?php echo base_URL()?>/updateBill" method="post">
                                        <?= csrf_field() ?>
                                       <?php // print_r($cust  ); //die();?>
                                <!-- row area start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                       
                                        <div class="card col-md-6">
                                                    <!-- <form action="<?php // echo base_URL('/addBill') ?>" method="post"> -->                                                   
                                                        <div class="card-body">
                                                            <p class="text-muted font-14 mb-4">Please fill up the form in order to add invoice / bill</p>
                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                <label for="example-text-input" class="col-form-label">Customer </label>
                                                                <select class="custom-select" name="customer_id" id="customer_id" autocomplete="off" required>
                                                                <option value="">Choose..</option>
             
                                                                    <?php foreach ($cust as $row ): ?>  
                                                                    <option value="<?= esc($row['customer_id'] )?>" <?php  if($data['customer_id'] ==$row['customer_id']) {echo "selected"; } ?>><?= esc($row['customer_name']." - ".$row['customer_id']  )?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6  form-group">
                                                            <label for="example-text-input" class="col-form-label">Contract Number </label>
                                                                <select name="contract_no" id="contract_no" class="custom-select" required>
                                                                    <option value="<?= esc($data['contract_no']); ?>" <?php  if($data['customer_id'] ==$row['customer_id']) {echo "selected"; } ?> ><?= esc($data['contract_no']); ?></option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6  form-group">
                                                                <label for="example-text-input" class="col-form-label">FY</label>
                                                            <select class="custom-select" name="invoice_fy" autocomplete="off" required>
                                                                <option value="">choose..</option>
                                                                <option value="21-22" <?php if($data['invoice_fy'] =='21-22') {echo "selected"; } ?>>21-22</option>
                                                                <option value="22-23" <?php if($data['invoice_fy'] =='22-23') {echo "selected"; } ?>>22-23</option>
                                                                <option value="22-23" <?php if($data['invoice_fy'] =='23-24') {echo "selected"; } ?>>23-24</option>
                                                                <option value="22-23" <?php if($data['invoice_fy'] =='24-25') {echo "selected"; } ?>>24-25</option>
                                                            </select> 
                                                            </div>
                                                            <div class="col-md-6  form-group">
                                                            <label for="example-text-input" class="col-form-label">Invoice Number </label>
                                                            <input class="form-control" type="text" name="invoice_number" id="invoice_number" value="<?= esc($data['invoice_number'])?>" required>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Month</label>
                                                <select class="custom-select" name="invoice_mnth" autocomplete="off" >
                                                    <option value="0" >Choose..</option>
                                                    <option value="1" <?php if($data['invoice_mnth'] =='1') {echo "selected"; } ?>>January</option>
                                                    <option value="2" <?php if($data['invoice_mnth'] =='2') {echo "selected"; } ?>>Febuary</option>
                                                    <option value="3" <?php if($data['invoice_mnth'] =='3') {echo "selected"; } ?>>March</option>
                                                    <option value="4" <?php if($data['invoice_mnth'] =='4') {echo "selected"; } ?>>April</option>
                                                    <option value="5" <?php if($data['invoice_mnth'] =='5') {echo "selected"; } ?>>May</option>
                                                    <option value="6" <?php if($data['invoice_mnth'] =='6') {echo "selected"; } ?>>June</option>
                                                    <option value="7" <?php if($data['invoice_mnth'] =='7') {echo "selected"; } ?>>July</option>
                                                    <option value="8" <?php if($data['invoice_mnth'] =='8') {echo "selected"; } ?>>August</option>
                                                    <option value="9" <?php if($data['invoice_mnth'] =='9') {echo "selected"; } ?>>September</option>
                                                    <option value="10" <?php if($data['invoice_mnth'] =='10') {echo "selected"; } ?>>October</option>
                                                    <option value="11" <?php if($data['invoice_mnth'] =='11') {echo "selected"; } ?>>Number</option>
                                                    <option value="12" <?php if($data['invoice_mnth'] =='12 ') {echo "selected"; } ?>>December</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-email-input" class="col-form-label">Invoice Type</label>
                                                <select class=" custom-select" name="invoice_type" autocomplete="off" required>
                                                    <option value="">Choose..</option>
                                                    <option value="60" <?php if($data['invoice_type'] =='60') {echo "selected"; } ?>>60% Adv.</option>
                                                    <option value="100" <?php if($data['invoice_type'] =='100') {echo "selected"; } ?>>100% Adv</option>
                                                    <option value="40" <?php if($data['invoice_type'] =='40') {echo "selected"; } ?>>40% Balance</option>

                                                </select>
                                            </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="example-date-input" class="col-form-label">invoice Amt</label>
                                                    <input class="form-control" type="number" name="invoice_amt" id="invoice_amt" value="<?= esc($data['invoice_amt'] )?>" required>
                                                </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">invoice Date</label>
                                                <input class="form-control" type="date" name="invoice_dt" id="invoice_dt" value="<?= esc($data['invoice_dt'] )?>" required>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Amt Recieved against Invoice</label>
                                                <input class="form-control" type="number" name="invoice_recvd_amt" id="invoice_recvd_amt" value="<?= esc($data['invoice_recvd_amt'] )?>" required>
                                            </div>  

                                           <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">PR -payment recieved Date</label>
                                                <input class="form-control" type="date" name="pr_dt" id="pr_dt" value="<?= esc($data['pr_dt'] )?>">
                                                <input class="form-control" type="hidden" name="id" id="id" value="<?= esc($data['id'] )?>">
                                            </div>
                                                            
                                                            <div class="col-md-4 form-group">
                                                        
                                                        <button class="btn btn-primary"  id="add" type="submit" >PROCEED</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Input Form Ending point -->
                                </div>
                                <!-- row area end -->                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Input Form Ending point -->

                </div>
                <!-- row area end -->

            </div>
            <!-- row area start-->
        </div>
        <?php #include 'includes/footer.php' 
        ?>
        <!-- footer area end-->
    </div>
    <!-- main content area end -->


    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script type="text/javascript">
                        $(document).ready(function()
                        {
                        $("#customer_id").change(function(){
                        let id=jQuery(this).val();    
                        //  alert(id);
                        $.ajax({
                            url:'<?php echo base_url('/getContractNo')?>',
                            headers: {'X-Requested-With': 'XMLHttpRequest'},
                            type:'GET',
                            data:{customer_id:id},
                            success:function(result){
                               // alert(result);
                                jQuery('#contract_no').html(result)
                            }
                        })
                        });

                        });
                        </script>
    <?= $this->endSection() ?>