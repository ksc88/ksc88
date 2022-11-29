    <!-- Custom form script -->
    <script type="text/javascript">
        function valid() {
            if (document.addemp.password.value != document.addemp.confirmpassword.value) {
                alert("New Password and Confirm Password Field do not match  !!");
                document.addemp.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>

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
                        <a href="dashboard.php"><img src="<?php echo base_URL(); ?>/public/assets/images/icon/tcl_logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <?php
                        $page = 'employee';
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
                                <?php include 'includes/admin-notification.php' ?>

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
                                <h4 class="page-title pull-left">Add Employee Section</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="employees.php">Employee</a></li>
                                    <li><span>Add</span></li>

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
                                <!-- Input form start -->
                                <?= session()->getFlashdata('error') ?>
                                <?= service('validation')->listErrors() ?>
                                <div class="col-12 mt-5">
                                <?php if(session()->getFlashdata('message')){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('message')); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                         </div><?php } 
                         
                                 ?>
                                    <?php ?>
                                    <div class="card">
                                        <form action="<?php echo base_URL() ?>/create" method="post">
                                            <?= csrf_field() ?>
                                            <div class="card-body">
                                             
                                                <p class="text-muted font-14 mb-4">Please fill up the form in order to add employee records</p>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Employee PNo</label>
                                                    <input class="form-control" name="per_no" type="number" autocomplete="off" required id="per_no"  value="<?= esc($employee['per_no']) ?>">
                                                </div>


                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">First Name</label>
                                                    <input type="text" class="form-control" autocomplete="off" id="fname" name="first_name" placeholder="Enter First Name" value="<?= esc($employee['first_name']) ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Middle Name</label>
                                                    <input class="form-control" name="middle_name" type="text" autocomplete="off" required id="example-text-input" value="<?= esc($employee['middle_name']) ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Last Name</label>
                                                    <input class="form-control" name="last_name" type="text" autocomplete="off" required id="example-text-input" value="<?= esc($employee['last_name']) ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label">Email</label>
                                                    <input class="form-control" name="email" type="email" autocomplete="off" required id="example-email-input" value="<?= esc($employee['email']) ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Preferred Department</label>
                                                    <select class="custom-select" name="department" autocomplete="off">
                                                        <option value="<?= esc($employee['department']) ?>" selected><?= esc($employee['department']) ?></value>
                                                        
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Designation</label>
                                                    <select class="custom-select" name="Designation" autocomplete="off">
                                                        <option value="">Choose..</option>
                                                        <option value="<?= esc($employee['designation']) ?>"><?= esc($employee['designation']) ?></option>
                                                    
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Basic Pay</label>
                                                    <select class="custom-select" name="basic_pay" autocomplete="off">
                                                        <option value=""> - Select Level -</option>
                                                        <option value="1">Level (1) - PB-1 (5200-20200) G.P. 1800</option>
                                                        <option value="2">Level (2) - PB-1 (5200-20200) G.P. 1900</option>
                                                        <option value="3">Level (3) - PB-1 (5200-20200) G.P. 2000</option>
                                                        <option value="4">Level (4) - PB-1 (5200-20200) G.P. 2400</option>
                                                        <option value="5">Level (5) - PB-1 (5200-20200) G.P. 2800</option>
                                                        <option value="6">Level (6) - PB-2 (9300-34800) G.P. 4200</option>
                                                        <option value="7">Level (7) - PB-2 (9300-34800) G.P. 4600</option>
                                                        <option value="8">Level (8) - PB-2 (9300-34800) G.P. 4800</option>
                                                        <option value="9">Level (9) - PB-2 (9300-34800) G.P. 5400</option>
                                                        <option value="10">Level (10) - PB-3 (15600-39100) G.P. 5400</option>
                                                        <option value="11">Level (11) - PB-3 (15600-39100) G.P. 6600</option>
                                                        <option value="12">Level (12) - PB-3 (15600-39100) G.P. 7600</option>
                                                        <option value="13">Level (13) - PB-4 (37400-67000) G.P. 8700</option>
                                                        <option value="14">Level (13) - PB-4 (37400-67000) G.P. 8900</option>
                                                        <option value="15">Level (14) - PB-4 (37400-67000) G.P. 10000</option>
                                                        <option value="16">Level (15) - 67000-79000</option>
                                                        <option value="17">Level (16) - 75000-80000</option>
                                                        <option value="18">Level (17) - 80000</option>
                                                        <option value="19">Level (18) - 90000</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Categoery</label>
                                                    <select class="custom-select" name="category" autocomplete="off">
                                                        <option value="">Choose..</option>
                                                        <option value="Male">Gen</option>
                                                        <option value="Female">Sc</option>
                                                        <option value="Other">St</option>
                                                        <option value="Other">Obc</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Gender</label>
                                                    <select class="custom-select" name="gender" autocomplete="off">
                                                        <option value="">Choose..</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-form-label">D.O.B</label>
                                                    <input class="form-control" type="date" name="dob" id="birthdate" value="<?= esc($employee['dob']) ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Contact Number</label>
                                                    <input class="form-control" name="contact" type="tel" maxlength="10" autocomplete="off" value="<?= esc($employee['contact']) ?>" required >
                                                </div>


                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Country</label>
                                                    <input class="form-control" name="country" type="text" autocomplete="off" required id="example-text-input" value="<?= esc($employee['contact'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Address</label>
                                                    <input class="form-control" name="address" type="text" autocomplete="off" required value="<?= esc($employee['contact'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">City</label>
                                                    <input class="form-control" name="city" type="text" autocomplete="off" required value="<?= esc($employee['contact'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-form-label">D.O.A</label>
                                                    <input class="form-control" type="date" name="doj" id="doa" value="<?= esc($employee['doj'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-form-label">D.O.R</label>
                                                    <input class="form-control" type="date" name="d_of_retirment" id="dor" value="<?= esc($employee['d_of_retirment'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-form-label">D.O.I</label>
                                                    <input class="form-control" type="date" name="d_of_retirment" id="dor" value="<?= esc($employee['d_of_increment'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Acc. Number</label>
                                                    <input class="form-control" name="bank_account" type="text" autocomplete="off" required value="<?= esc($employee['bank_account'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Bank Name </label>
                                                    <input class="form-control" name="bank_name" type="text" autocomplete="off" required value="<?= esc($employee['bank_name'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Bank IFSC Code </label>
                                                    <input class="form-control" name="bank_ifsc" type="text" autocomplete="off" required value="<?= esc($employee['bank_ifsc'])?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Gpf/NPS No </label>
                                                    <input class="form-control" name="gpfno" type="text" autocomplete="off" required value="<?= esc($employee['gpfno'])?>">
                                                </div>


                                                <h4>Set Password for Employee Login</h4>

                                                <!-- <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Password</label>
                                                    <input class="form-control" name="password" type="password" autocomplete="off" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Confirmation Password</label>
                                                    <input class="form-control" name="confirmpassword" type="password" autocomplete="off" required>
                                                </div> -->



                                                <button class="btn btn-primary" name="add" id="add" type="submit" onclick="return valid();">PROCEED</button>

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
            <?php include 'includes/footer.php' ?>
            <!-- footer area end-->
        </div>
        <!-- main content area end -->


        </div>
        <!-- jquery latest version -->
        <script src="<?php echo base_URL(); ?>/public/assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="<?php echo base_URL(); ?>/public/assets/js/popper.min.js"></script>
        <script src="<?php echo base_URL(); ?>/public/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_URL(); ?>/public/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_URL(); ?>/public/assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_URL(); ?>/public/assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_URL(); ?>/public/assets/js/jquery.slicknav.min.js"></script>

        <!-- others plugins -->
        <script src="<?php echo base_URL(); ?>/public/assets/js/plugins.js"></script>
        <script src="<?php echo base_URL(); ?>/public/assets/js/scripts.js"></script>

    </body>

    </html>