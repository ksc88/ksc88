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
                    <a href="dashboard.php"><img src="<?php echo base_URL();?>/public/assets/images/icon/tcl_logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='dashboard';
                        include 'includes/admin-sidebar.php';
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
                                <li><a href="dashboard.php">Home</a></li>
                                <li><span>Admin's Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb"src="<?php echo base_URL();?>/public/assets/images/admin.png" alt="avatar">
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
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Available Leave Types</h4>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php //include 'counters/leavetype-counter.php'?></h1>
                                        <span>Leave Types</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-users"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Registered Employees</h4>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php// include 'counters/emp-counter.php'?></h1>
                                        <span>Active Employees</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-th-large"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Available Departments</h4>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php //include 'counters/dept-counter.php'?></h1>
                                        <span>Employee Departments</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-spinner"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pending Application</h4>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php //include 'counters/pendingapp-counter.php'?></h1>
                                        <span>Pending</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-times"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Declined Application</h4>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php //include 'counters/declineapp-counter.php'?></h1>
                                        <span>Declined</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Approved Application</h4>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php //include 'counters/approvedapp-counter.php'?></h1>
                                        <span>Approved</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                
                <!-- row area start -->
                <div class="row">
                    
                    <!-- trading history area start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
							<div class="d-sm-flex justify-content-between align-items-center">
                                    <!-- <h4 class="header-title">Employee Leave History</h4> -->
                                    <div class="trd-history-tabs">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="dashboard.php" role="tab">Recent List</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        
                                    </select>
                                </div>
                                        <!-- <h4 class="header-title"></h4> -->
                                        <div class="single-table">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped progress-table text-center">
                                                <thead class="text-uppercase">

                                                <tr>
                                                        <td>S.N</td>
                                                        <td>Employee ID</td>
                                                        <td width="120">Full Name</td>
                                                        <td>Leave Type</td>
                                                        <td>Applied On</td>
                                                        <td>Current Status</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                              
                                            </tr>
                                                
                                            </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        </div>
                        </div>
                    </div>
                    <!-- trading history area end -->
                </div>
                <!-- row area end -->
                
                </div>
                <!-- row area start-->
            </div>
            <?php include 'includes/footer.php' ?>
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
<!-- others plugins -->
<script src="<?php echo base_URL();?>/public/assets/js/plugins.js"></script>
<script src="<?php echo base_URL();?>/public/assets/js/scripts.js"></script>
</body>

</html>