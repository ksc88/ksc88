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
                                    <a href="dashboard.php">
                                        <img src="<?php echo base_URL(); ?>/public/assets/images/icon/tcl_logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="main-menu">
                                <div class="menu-inner">
                                
                                    <?= $this->include('admin/includes/admin-sidebar');
                                // include('includes/admin-sidebar.php') ?>
                                
                                
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
                                    <div class="col-lg-6 col-ml-12">
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
                                                <div class="card col-md-6">
                                                    <form action="<?php echo base_URL('/addBill') ?>" method="post">
                                                        <?= csrf_field() ?>

                                                        <div class="card-body">
                                                            <p class="text-muted font-14 mb-4">Please fill up the form in order to add invoice / bill</p>
                                                            <div class="row">

                                                                <div class="col-md-6 form-group">
                                                                <label for="example-text-input" class="col-form-label">Customer </label>
                                                                <select class="custom-select" name="customer_id" id="customer_id" autocomplete="off" required>
                                                                    <option value="">Choose..</option>
                                                                    <?php foreach ($data as $row ): ?>
                                                                    <option value="<?= esc($row['customer_id'] )?>"><?= esc($row['customer_name'] )?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6  form-group">
                                                                    <label for="example-text-input" class="col-form-label">Contract Number </label>
                                                                <select name="contract_no" id="contract_no" class="custom-select" required>
                                                                    <option value="">Select Contract Number</option>
                                                                </select>
                                                            </div>
                                                                <div class=" col-md-6  form-group">
                                                                <label for="example-text-input" class="col-form-label">FY</label>
                                                                    <select class="custom-select" name="invoice_fy" autocomplete="off" required>
                                                                    <option value="">Choose..</option>
                                                                    <option value="21-22">21-22</option>
                                                                    <option value="22-23">22-23</option>
                                                                    <option value="22-23">23-24</option>
                                                                    <option value="22-23">25-26</option>
                                                                     </select>
                                                             </div>
                                                            <div class="col-md-6  form-group">
                                                            <label for="example-text-input" class="col-form-label">Invoice Number </label>
                                                            <input class="form-control" type="text" name="invoice_number" id="invoice_number" required>
                                                            </div>

                                                            <div class="col-md-6  form-group">
                                                                <label for="example-text-input" class="col-form-label">Month</label>
                                                                <select class="custom-select" name="invoice_mnth" autocomplete="off" >
                                                                    <option value="0">Choose..</option>
                                                                    <option value="1">January</option>
                                                                    <option value="2">Febuary</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">Number</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group">
                                                                <label for="example-email-input" class="col-form-label">Invoice Type</label>
                                                                <select class="custom-select" name="invoice_type" autocomplete="off" required>
                                                                    <option value="">Choose..</option>
                                                                    <option value="60">60% Adv.</option>
                                                                    <option value="100">100% Adv</option>
                                                                    <option value="40">40% Balance</option>

                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group">
                                                                <label for="example-date-input" class="col-form-label">invoice Amt</label>
                                                                <input class="form-control" type="number" name="invoice_amt" id="invoice_amt" required>
                                                            </div>

                                                            <div class="col-md-6 form-group">
                                                                <label for="example-date-input" class="col-form-label">invoice Date</label>
                                                                <input class="form-control" type="date" name="invoice_dt" id="invoice_dt" required>
                                                            </div>

                                                            <div class="col-md-6 form-group">
                                                                <label for="example-date-input" class="col-form-label">Amt Recieved against Invoice</label>
                                                                <input class="form-control" type="number" name="invoice_recvd_amt" id="invoice_recvd_amt" required>
                                                            </div> 

                                                            
                                                            <div class="col-md-6 form-group">
                                                                <label for="example-date-input" class="col-form-label">PR - Payment recieved Date</label>
                                                                <input class="form-control" type="date" name="pr_dt" id="pr_dt" >
                                                            
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label for="example-date-input" class="col-form-label">Invoice recieved Date</label>
                                                                <input class="form-control" type="date" name="inv_r_dt" id="inv_r_dt" >          
                                                            </div>

                                                            <button class="col-md-12 btn btn-primary"  id="add" type="submit" >PROCEED</button>
                                                        
                                                        </div></div>
                                                            <!--  Card Body-->
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