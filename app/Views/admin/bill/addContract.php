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
                    <?= $this->include('admin/includes/admin-sidebar.php');?>
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
                            <h4 class="page-title pull-left">Add Contract Details</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Customer</a></li>
                                <li><span>Add </span></li>

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
                    <div class="col-6 col-ml-12">
                        <div class="row">
                            <!-- Input form start -->
                            <?= session()->getFlashdata('error') ?>
                            <?= service('validation')->listErrors() ?>
                            <div class="col-6 mt-5">
                                <?php if (session()->getFlashdata('message')) { ?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('message')); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div><?php }  ?>
                                <div class="card">
                                    <form action="<?php echo base_URL('addContract') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <div class="card-body">
                                            <p class="text-muted font-14 mb-4">Please fill up the form in order to Add Contract Master</p>
                                        <div class="row">   
                                            <div class="col-md-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Customer ID </label>
                                                <select class="custom-select" name="customer_id" autocomplete="off" required>
                                                    <option value="">Choose..</option>
                                                    <?php foreach ($data as $row ): ?>
                                                    <option value="<?= esc($row['customer_id'] )?>"><?php echo $row['customer_id'].'-'.$row['customer_name']?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                                                       
                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Contract No.</label>
                                                <input class="form-control" type="text" name="contract_number" id="contract_number" required>
                                            </div>
                                            
                                            <div class=" col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Contract Date</label>
                                                <input class="form-control" type="date" name="contract_date" id="contract_date" >
                                            </div>

                                            <div class=" col-md-6 form-group">
                                                <label for="example-text-input" class="col-form-label">FY</label>
                                                <select class="custom-select" name="fy" autocomplete="off" required>
                                                    <option value="">Choose..</option>
                                                    <option value="21-22">21-22</option>
                                                    <option value="22-23">22-23</option>
                                                    <option value="23-24">23-24</option>
                                                    <option value="24-25">24-25</option>
                                                    <option value="25-26">25-26</option>

                                                </select>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Contract Value</label>
                                                <input class="form-control" type="text" name="contract_value" id="contract_value" required>
                                            </div>                                        
                                        
                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">GST Value</label>
                                                <input class="form-control" type="text" name="gst_value" id="gst_value" required>
                                            </div>                                        
          
                                           <button class="btn btn-primary ml-3"  id="add" type="submit" >PROCEED</button>
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
            <!-- row area start-->
        </div>
        <?php #include 'includes/footer.php' 
        ?>
        <!-- footer area end-->
    </div>
    <!-- main content area end -->


    </div>

    <?= $this->endSection() ?>