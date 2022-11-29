<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> TCL | Add New Employee <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php');?>
<?= $this->include('admin/layout/navigation.php');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
            <h1>Human Resources</h1>
            <small>Employee Registration</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="index-2.html"><i class="pe-7s-home"></i> Home</a></li>
                <li class="active">Admin Section | Add Emp.</li>
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
                            <a class="btn btn-primary btn-list" href="<?=site_url('admin/AdminSection/showEmployee')?>">
                                <i class="fa fa-list"></i>Add employee</a>
                        </div>
                    </div>
                    <div class="panel-body bg-warning">
                    <?= form_open('admin/adminsection/create') ?>
                    <?= $this->include('AdminSection/Employee/form/employeeForm'); ?>
                    <div class="col-sm-4  align-middle">
            <button class="btn btn-primary  " name="add" id="add" type="submit"
                onclick="return valid();">Save </button>
                </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<?=$this->include('admin/layout/footer.php');?>
<?= $this->endsection() ?>