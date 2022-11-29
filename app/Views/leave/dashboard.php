
<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Leave History <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php');?>
<?= $this->include('admin/layout/navigation.php');?>                                   
<div class="content-wrapper">
                <section class="content-header">
                    <div class="header-icon"><i class="pe-7s-user-female"></i></div>
                    <div class="header-title">
                        <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                        <h1>Profile</h1>
                        <small>Employee Details</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="index.php"><i class="pe-7s-home"></i>Home</a></li>
                            <li><a href="#">Emp DashBoard</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">

                <?php if(current_user()):?>
                                <?php $first_name=current_user()['first_name'];
                                $last_name=current_user()['last_name'];?>
                           <h4 class="text-primary"></h4>             
                           <?= $this->include('leave/headerMessage.php') ?> 
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-header-headshot"></div>
                                </div>
                                <div class="card-content">
                                    <div class="card-content-member">
                                        <h4 class="m-t-0"><?= esc($first_name." ".$last_name) ?></h4>
                                        <p class="m-0"><i ></i>P.No <?= esc(current_user()['per_no']) ?></p>
                                        <span class="m-0"></i>Post: <?= esc(current_user()['designation']) ?></p>
                                    </div>
                                    <div class="card-content-languages">
                                        <div class="card-content-languages-group">
                                            <div>
                                                <h4>Date of Joining:</h4>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li><?= esc(current_user()['doj']) ?>
                                                        <div class="fluency fluency-4"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content-languages-group">
                                            <div>
                                                <h4>Date of Retirement:</h4>
                                            </div>
                                            <div>
                                                <ul>
                                                <li><?= esc(current_user()['d_of_retirment']) ?>
                                                        <div class="fluency fluency-4"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content-languages-group">
                                            <div>
                                                <h4>Date of Next Increment:</h4>
                                            </div>
                                            <div>
                                                <ul>
                                                <li><?= esc(current_user()['d_of_increment']) ?>
                                                        <div class="fluency fluency-4"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content-summary">
                                        <p>Bank Name:<?= esc(current_user()['bank_name']) ?></p>
                                        <p>Bank Account No:<?= esc(current_user()['bank_account']) ?></p>
                                        <p>Bank IFSC:<?= esc(current_user()['bank_ifsc']) ?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="card-footer-stats">
                                        <div>
                                            <p>GPF/NPS/No:</p><i class="fa fa-users"></i><span><?= esc(current_user()['gpfno']) ?></span>
                                        </div>
                                        <div>
                                            <p>Aadhar No:</p><i class="fa fa-users"></i><span><?= esc(current_user()['aadhar']) ?></span>
                                        </div>                        
                                    </div>
                                    <div class="card-footer-message">
                                        <h4><i class="fa fa-comments"></i> Message me</h4>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-12 col-md-8">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="panel panel-bd cardbox">
                                        <div class="panel-body">
                                            <div class="statistic-box">
                                                <h2><span class="count-number">15</span>
                                                </h2>
                                            </div>
                                            <div class="items pull-left">
                                                <i class="fa fa-users fa-2x"></i>
                                                <h4>Total Leave </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="panel panel-bd cardbox">
                                        <div class="panel-body">
                                            <div class="statistic-box">
                                                <h2><span class="count-number">19</span>
                                                </h2>
                                            </div>
                                            <div class="items pull-left">
                                                <i class="fa fa-users fa-2x"></i>
                                                <h4>Remaining Leave</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>		
                            </div>	

                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Leave Shodule </h4>
                                    </div>
                                </div>


                                <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                   
                                    <thead class="thead-light">
                                    <tr>
                                    <th>#</th>
                                    <th>Reference ID </th>
                                    <th>Leave Type </th>
                                    <th>From Date </th>
                                    <th>To Date </th>
                                    <th >No of Days</th>
                                    <th>Status</th>      
                                    <th>view</th>
                                    <th>print</th>
                                    </tr>
                                    </thead>
                                    <tbody><?php $count = 1;  foreach ($data as $data) :?>
                                    <tr>      
                                    <td><?= esc($count)?></td>
                                    <td><?= esc($data['referenceId'])?></td>
                                    <td><?= esc($data['leaveType'])?></td>
                                    <td><?= esc($data['fromDate'])?></td>
                                    <td><?= esc($data['toDate'])?></td>
                                    <td><?= esc($data['noOfDays'])?></td>
                                    <td><?= esc($data['status'])?></td>
                                    <td><a href="<?= site_url('leave/viewLeave/'.$data['referenceId']) ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    <td><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></td>

                                    </tr>
                                    <?php   $count++;  endforeach; ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- calender -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Calender</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- monthly calender -->
                                    <div class="monthly_calender">
                                        <div class="monthly" id="m_calendar"></div>
                                    </div>
                                </div>
                                 <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
                            </div>
                        </div> 
                </section> <!-- /.content -->
            </div> <!-- /.content-wrapper -->
                 <?php else :?>
        <p>User is not Logged In</p>
         <?php endif ?>
	<?=$this->include('admin/layout/footer.php');?>
	<?= $this->endsection() ?>