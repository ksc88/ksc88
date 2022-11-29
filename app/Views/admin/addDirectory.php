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
                    
                    <?= $this->include('admin/includes/admin-sidebar');
                   // include('includes/admin-sidebar.php');
                    ?>
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
                            <h4 class="page-title pull-left">Add Phone Directory </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Directory</a></li>
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
                    <div class="col-lg-6 ">
                        <div class="row">
                            
                            <!-- Input form start -->
                            <?= session()->getFlashdata('error') ?>
                            <?= service('validation')->listErrors() ?>
                            <div class="col-12 mt-5">
                                <?php if (session()->getFlashdata('message')) { ?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('message')); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div><?php }  ?>
                                <div class="card">
                                    <form action="<?php echo base_URL()?>/directory" method="post">
                                        <?= csrf_field() ?>
                                       <?php //print_r($cust  ); //die();?>
                                        <div class="card-body">
                                            <div class="row">
                                            <p class="text-muted font-14 mb-4">Please fill up the form in order to Phone/email directory</p>
                                            <div class="col-6 form-group">
                                                <div></div>
                                                <label for="example-text-input" class="col-form-label">Name (Shri/Smt.)</label>
                                                <input class="form-control" name="name" type="text" autocomplete="off" id="name" required >
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Post Name</label>
                                                <input class="form-control" name="post" type="text" autocomplete="off" id="post" required >
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Extn.</label>
                                                <input class="form-control" name="extn" type="text" autocomplete="off" id="extn"  required >
                                            </div>

                                            <div class="col-6 form-group">
                                                <label for="example-text-input" class="col-form-label">Phone</label>
                                                <input type="text" class="form-control" autocomplete="off" id="phone" name="phone" required>
                                            </div>
                                      
                                            <div class="col-6 form-group">
                                                <label for="example-date-input" class="col-form-label">Mobile No</label>
                                                <input class="form-control" type="number" name="mobile" id="mobile" required>
                                            </div>

                                 
                                        </div>                                           <button class="btn btn-primary"  id="add" type="submit" >PROCEED</button>

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