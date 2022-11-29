<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Leave History <?= $this->endSection() ?>
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
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <h1>Leave History</h1>
            <small>Leave History list</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
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
                            <a class="btn btn-success" href="AddDepartment.html"> <i class="fa fa-plus"></i> Add
                                Department </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Reference ID </th>
                                            <th>Leave Type </th>
                                            <th>From Date </th>
                                            <th>To Date </th>
                                            <th>No of Days</th>
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
                                            <td><a href="<?= site_url('leave/viewLeave/'.$data['referenceId']) ?>"><i
                                                        class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <?php   $count++;  endforeach; ?>
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