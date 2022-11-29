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
                    <a href="#"><img src="<?php echo base_URL(); ?>/public/assets/images/icon/tcl_logo.png" alt="logo"></a>
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
                            <h4 class="page-title pull-left">Add Customer Details</h4>
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
                <div class="container">
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
                                    <form action="<?php echo base_URL('addCustomer') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="card-body">
                                            <p class="text-muted font-14 mb-4">Please fill up the form in order to customer</p>
                                            <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Customer Id</label>
                                                <input class="form-control" name="customer_id" type="text" autocomplete="off" id="customer_id" required >
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Customer Name</label>
                                                <input type="text" class="form-control" autocomplete="off" id="customer_name" name="customer_name" required>
                                            </div>
                                   
                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Address</label>
                                                <input class="form-control" type="text" name="address" id="address" required>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">email</label>
                                                <input class="form-control" type="text" name="email" id="email" >
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Contact</label>
                                                <input class="form-control" type="text" name="contact" id="contact" >
                                            </div>                                        
                                            <div class="col-md-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Payment Auth.</label>
                                                <input class="form-control" type="text" name="payauth" id="payauth" required>
                                            </div>                                        
                                        
                                           <button class="btn btn-primary"  id="add" type="submit" >PROCEED</button>
                                            
                                        </div>   <!-- end Card Body -->
                                    </form>
                                    </div>    <!-- End card -->
                                </div> 

                            </div>
                        </div>
                    </div>                  
                    <!-- Input Form Ending point -->
                </div>  <!-- END container -->
            </div>  <!-- End Main -->
        <?php #include 'includes/footer.php' ?>
        <!-- footer area end-->
    </div>
    <!-- main content area end -->
    </div>
    <?= $this->endSection() ?>