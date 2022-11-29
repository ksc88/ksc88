<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Leave History <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php');?>
<?= $this->include('admin/layout/navigation.php');?> <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <h1>Employee</h1>
            <small>Employee list</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Form controls -->
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="listEmployee.html"> <i class="fa fa-list"></i> Employee
                                List </a>
                        </div>
                    </div>
                    <div class="panel-body">
                  
                        <?php if(current_user()):?>
                        <?php $first_name=current_user()['first_name'];
                                $last_name=current_user()['last_name'];?>
                        <h4 class="text-primary"></h4>
                        <?= $this->include('leave/headerMessage.php') ?>
                        <?= form_open('leave/new')?>
                        <div class="col-md-6 form-group">
                            <label for="col-form-label">P.No</label>
                            <input type="text" class="form-control" name="empPerNo"
                                value="<?= esc(current_user()['per_no']) ?>" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name"
                                value="<?= esc($first_name." ".$last_name) ?>" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="example-date-input" class="col-form-label">Starting Date</label>
                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>"
                                data-inputmask="'alias': 'date'" name="fromDate" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="example-date-input" class="col-form-label">End Date</label>
                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>"
                                data-inputmask="'alias': 'date'" name="toDate" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="example-text-input" class="col-form-label">No. Of Days</label>
                            <input type="text" class="form-control" name="noOfDays" type="text" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="col-form-label">Your Leave Type</label>
                            <select class="form-control" id="exampleSelect1" name="leaveType" autocomplete="off">
                                <option value="">Click here to select any ...</option>
                                <option value=""> Casual Leave (CL)</option>
                                <option value=""> Maternity Leave (ML)</option>
                                <option value=""> HPL</option>
                                <option value=""> </option>

                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="example-text-input" class="col-form-label">Preffix</label>
                            <input type="date" class="form-control" name="preffix" type="text">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="example-text-input" class="col-form-label">Suffix</label>
                            <input type="date" class="form-control" name="suffix" type="text">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="example-text-input" class="col-form-label">Station Leave Req. ?</label>
                            <select class="form-control" id="exampleSelect1" name="isStationLeave" autocomplete="off">
                                <option value="">Click here to select any ...</option>
                                <option value="">Yes</option>
                                <option value="">No</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="example-text-input" class="col-form-label">Addresss</label>
                            <textarea class="form-control" type="text" name="address" length="400"
                                id="example-text-input" rows="5"></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="example-text-input" class="col-form-label">Reason</label>
                            <textarea class="form-control" name="description" type="text" length="400"
                                rows="5"></textarea>
                        </div>
                        <?php $referenceId= service('genMethods');
                        $refId=$referenceId->refrenceId(); ?>
                        <div class="col-md-12 form-group">
                            <input class="form-control" name="referenceId" type="hidden" value="<?=$refId ?>">
                        </div>

                        <div class="col-sm-12 reset-button">
                            <button class="btn btn-success" name="apply" id="apply" type="submit">SUBMIT</button>
                            <a href="#" class="btn btn-warning">Reset</a>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<?php else :?>
<p>User is not Logged In</p>
<?php endif ?>
<?=$this->include('admin/layout/footer.php');?>
<?= $this->endsection() ?>