<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Allocate Leave  <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php');?>
<?= $this->include('admin/layout/navigation.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon"><i class="pe-7s-box1"></i>
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
            <h1>Allocate Leaves</h1>

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
                        <?php foreach($department as $department): ?>
                        <div class="btn-group">
                            <a class="btn btn-success"
                                href="<?=base_url()?>/admin/AdminSection/searchDeptWise/<?=$department["department"]; ?>"
                                .> <i class="fa fa-plus"></i><?= strtoupper($department['department'] )?></a>
                        </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?= $this->include('admin/includes/headerMessage.php') ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Per. No</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                    
                                            <th>Allocate</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php $count = 1;  foreach ($emp as $emp) :?>
                                        <tr>
                                            <td><?= esc($count)?></td>
                                            <td><?= esc($emp['per_no'])?></td>
                                            <td><?= esc($emp['first_name'])?> <?= esc($emp['last_name'])?></td>
                                            <td><?= esc($emp['designation'])?></td>
                                            <!-- <td><a href="#"><i class="fa fa-edit" style="color:green"></i></a> -->
                                            <td>
                                                <a href="<?php echo site_url()?>/admin/AdminSection/addEmpLeaveAllocation/<?= esc($emp['per_no']) ?>"
                                                    onclick="return confirm('Are you really want to Alloacte  Leave?');"><i
                                                        class="fa fa-edit" style="color:green"></i></a>
                                         
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