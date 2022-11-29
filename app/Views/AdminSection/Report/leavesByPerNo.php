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
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <h1>Pending Leaves</h1>

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
                            <a class="btn btn-success" href="<?=site_url('admin/AdminSection/create') ?>"> <i
                                    class="fa fa-plus"></i> #### </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        <?= $this->include('admin/includes/headerMessage.php') ?>


                             <!--filter content-->
                <div class="filter-content">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-body"> 
                            <?= form_open('admin/AdminSection/viewapprovedLeaveByPerNo','class="form-inline"')?>
                                <div class="col-6 form-group">
                                    <label class="sr-only" >Personal No</label>
                                    <input type="text" name="empPerNo" class="col-6 form-control  "  placeholder="Enter Per No" required>
                                </div> 
                                

                               

                                <button type="submit" class="btn btn-success">Search</button>

                            </form>
                        </div>
                    </div>
                </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>RefrenceId</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Date OF Apply</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php $count = 1;  foreach ($data as $data) :?>
                                        <tr>
                                            <td><?= esc($count)?></td>
                                            <td><?= esc($data['referenceId'])?></td>
                                            <td><?= esc($data['fromDate'])?></td>
                                            <td><?= esc($data['toDate'])?></td>
                                            <td><?= esc($data['postingDate'])?></td>
                                            <!-- <td><a href="#"><i class="fa fa-edit" style="color:green"></i></a> -->
                                            <td>    
                                            <?php if( $data['status']==="approved") :?>
                                                    <a href="<?php echo site_url()?>/admin/AdminSection/approvependingLeaves/<?= esc($data['referenceId']) ?>"
                                                     onclick="return confirm('Are you really want to Approve this Leave?');"><i
                                                     class="fa fa-edit" style="color:green"></i></a>
                                                <?php endif ; ?>
                                            </td>  
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