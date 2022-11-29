<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Employee Profile Page <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php'); ?>
<?= $this->include('admin/layout/navigation.php'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-box1"></i>
        </div>
        <div class="header-title">
            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <h1>Employees Profile</h1>
            <small><?php 
            $name= $data->first_name ." ". $data->middle_name ." ". $data->last_name;

            echo $name;
                   ?></small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="<?= site_url('admin/AdminSection/showEmployee')?>"><i class="pe-7s-home"></i> Empl. List</a></li>
               
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12 col-md-22">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-headshot"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-content-member">
                            <h4 class="m-t-0"><?= $name?></h4>
                        </div>
                        <div class="card-content-languages">
                            <div class="card-content-languages-group">

                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <th colspan="9" class="text-center text-warning bg-info">Perosnal Info.</th>
                                        <tr>
                                            <th>Name</th>
                                            <th>Personal No</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Date of Joining</th>
                                            <th>Date of Increment</th>
                                            <th>Date of Retirement</th>
                                            <th> Basic Pay</th>
                                            <th rowspan="2"><a href="<?=site_url('admin/AdminSection/employeeLeaveHistory/').$data->per_no; ?>/<?= $name ?>">&#8680;Pl Click Here for Leave History</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $data->first_name;
                                                echo " " . $data->middle_name;
                                                echo " " . $data->last_name; ?></td>
                                            <td><?= $data->per_no; ?></td>
                                            <td><?= $data->department; ?></td>
                                            <td><?= $data->designation; ?></td>
                                            <td><?= $data->doj; ?></td>
                                            <td><?= $data->d_of_increment; ?></td>
                                            <td><?= $data->d_of_retirment; ?></td>
                                            <td><?= $data->basic_pay; ?></td>
                                        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>

              <!-- Leave Div Open   -->
              <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <th colspan="3" class="text-center text-warning bg-success">Leave Info.FY-<?=date('Y')?></th>
                                        <tr>
                                            <th>CL Available</th>
                                            <th>EL Available</th>
                                            <th>RH Available</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td><?=$leaves->el; ?></td>
                                            <td><?=$leaves->rh; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- Account Div Closed   -->



                                <!-- Account Div Open   -->
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <th colspan="3" class="text-center text-warning bg-danger">Account Info.</th>
                                        <tr>
                                            <th>Acoount No</th>
                                            <th>Bank Name</th>
                                            <th>IFSC Code</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $data->bank_account; ?></td>
                                            <td><?= $data->bank_name; ?></td>
                                            <td><?= $data->bank_ifsc; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- Account Div Closed   -->
                            <div>
                                <!-- Conact  Div Open   -->
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <th colspan="2" class="text-center text-primary bg-warning">Conatct Info.</th>
                                        <tr>
                                            <th>EmailId</th>
                                            <th>Contact No</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $data->email; ?></td>
                                            <td><?= $data->contact; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- Contact Div Closed   -->
                            <div>
                                <!-- Family  Div Open   -->
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <th colspan="2" class="text-center text-warning bg-info">Family Info.</th>
                                        <tr>
                                            <th>Spouse Name</th>
                                            <th>Children</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $data->spause_name; ?></td>
                                            <td><?= $data->child1; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- Family Div Closed   -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div>
</div>
</div>
</div> <!-- /.content-wrapper -->

<?= $this->include('admin/layout/footer.php'); ?>
<?= $this->endsection() ?>