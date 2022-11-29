<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> TCL | Admin | Approved Leaves <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php');?>
<?= $this->include('admin/layout/navigation.php');?>
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
            <h1>Employees Leave</h1>
            <small></small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group">
                            <a class="btn btn-success" href="<?=site_url('admin/AdminSection/employeeProfile/').$personalNo ?>"></i>&#10554;Go Back </a>
                        </div>
                    </div>
                    <div class="panel-body">
                    <div class="card-header">
                        <div class="card-header-headshot"></div>
                        <div class="card-content-member">
                            <h4 class="m-t-0"><?= $name?></h4>
                        </div>
                    </div>
                        <div class="row">
                        <?= $this->include('admin/includes/headerMessage.php') ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>referenceId</th>
                                            <th>Leave Type</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Total Day</th>
                                            <th>Applied On</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php $count = 1;  foreach ($data as $data) :?>
                                        <tr>
                                            <td><?= esc($count)?></td>
                                            <td><?= esc($data['referenceId'])?></td>
                                            <td><?= esc($data['leaveType'])?></td>
                                            <td><?= esc($data['fromDate'])?></td>
                                            <td><?= esc($data['toDate'])?></td>
                                            <!-- <td><a href="#"><i class="fa fa-edit" style="color:green"></i></a> -->
                                            <td><?= esc($data['noOfDays'])?></td>  
                                            <td><?= esc($data['postingDate'])?></td>  
                                            <td><?= esc($data['description'])?></td>  
                                            <td><?= esc($data['status'])?></td>  
                                            
                                        </tr> <?php   $count++;  endforeach; ?>
                                    </tbody>
                                </table>
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

<?=$this->include('admin/layout/footer.php');?>
<?= $this->endsection() ?>