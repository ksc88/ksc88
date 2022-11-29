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
                        <?php
                        $page = 'employee';
                       echo $this->include('admin/includes/admin-sidebar.php') ?>
                     
                    </div>
                </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
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
                            <h4 class="page-title pull-left">Apply For Leave Days</h4>
                            <ul class="breadcrumbs pull-left">
                                
                                <li><span>Leave Form</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix"><?php //include '../includes/employee-profile-section.php'?>

                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">  
                       
                             <?php if(current_user()):?>
                                <?php $first_name=current_user()['first_name'];
                                $last_name=current_user()['last_name'];?>
                           <h2 class="text-primary">Welcome ! 
                           <?= esc($first_name." ".$last_name) ?> </h2>
                         
                          
                           <?php $error=''; $msg='';if($error){?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div><?php } 
                                 else if((session()->getFlashdata('success'))){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('success')); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div><?php }?>
                                <div class="card">
                                <form action="<?php echo base_URL('emp/leave') ?>" method="post">
                                        <?= csrf_field() ?>
                                  <div class="card-body">
                                        <h4 class="header-title">Employee Leave Form</h4>
                                        <p class="text-muted font-14 mb-4">Please fill up the form below.</p>
                                        <div class="row">
                                        <div class="col-md-6 form-group">  
                                        <label for="col-form-label">P.No</label>
                                        <input type="text" class="form-control" name="pno"value="<?= esc(current_user()['per_no']) ?>" readonly>

                                        </div>   
                                        <div class="col-md-6 form-group">  
                                        <label for="col-form-label">Name</label>
                                        <input type="text" class="form-control" name="name"value="<?= esc($first_name." ".$last_name) ?>" readonly>

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="example-date-input" class="col-form-label">Starting Date</label>
                                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" data-inputmask="'alias': 'date'" required id="example-date-input" name="FromDate">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="example-date-input" class="col-form-label">End Date</label>
                                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" data-inputmask="'alias': 'date'" required id="example-date-input" name="ToDate">
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label for="example-text-input" class="col-form-label">No. Of Days</label>
                                            <input type="text" class="form-control" name="no_of_days" type="text" >
                                        </div>
                                    
                                        <div class="col-md-6 form-group">
                                            <label class="col-form-label">Your Leave Type</label>
                                            <select class="custom-select" name="LeaveType" autocomplete="off">
                                                <option value="">Click here to select any ...</option>                                                
                                                <option value=""> Casual Leave (CL)</option>
                                                <option value=""> Maternity Leave (ML)</option>
                                                <option value=""> HPL</option>
                                                <option value="">  </option>
                                             
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="example-text-input" class="col-form-label">Preffix</label>
                                            <input type="date" class="form-control" name="preffix" type="text" >
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="example-text-input" class="col-form-label">Suffix</label>
                                            <input type="date" class="form-control" name="suffix" type="text" >
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="example-text-input" class="col-form-label">Station Leave Req. ?</label>
                                            <select class="custom-select" name="LeaveType" autocomplete="off">
                                                <option value="">Click here to select any ...</option>                                                
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                              
                                             
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="example-text-input" class="col-form-label">Addresss</label>
                                            <textarea class="form-control"  type="text" name="Address" length="400" id="example-text-input" rows="5"></textarea>
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <label for="example-text-input" class="col-form-label">Reason</label>
                                            <textarea class="form-control" name="description" type="text" name="Address" length="400" id="example-text-input" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" name="apply" id="apply" type="submit">SUBMIT</button>
                                </div>

                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- row area start-->
        </div>
        <?php #include 'includes/footer.php'?>
        <!-- footer area end-->
    </div>
    <!-- main content area end -->
    </div>                           
         <?php else :?>
        <p>User is not Logged In</p>
         <?php endif ?>
                           
    <?= $this->endSection() ?>