<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> TCL|Emp Leave Allocation Page <?= $this->endSection() ?>
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
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <h1>Leave Allocation</h1>
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
                            <a class="btn btn-success" href="<?= site_url('admin/AdminSection/create') ?>"> <i
                                    class="fa fa-plus"></i> #### </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?= $this->include('admin/includes/headerMessage.php') ?>
                            <form class="col-sm-12">
                        
                                <div class="col-sm-4 form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name" required="">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter last Name" required="">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Year</label>
                                    <input type="text" class="form-control" placeholder="choose Year" required="" value="<?= date('Y')?> "readonly>
                                </div>
                            
                                <div class="col-sm-3 form-group">
                                    <label>Allocate CL</label>
                                    <input type="number" class="form-control" placeholder="Allocate CL" required="">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Allocate EL</label>
                                    <input type="number" class="form-control" placeholder="Allocate EL" required="">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Allocate RH</label>
                                    <input type="number" class="form-control" placeholder="Allocate EL" required="">
                                </div>
                        <div class="row">
                                <div class="col-sm-12 reset-button">
                                    <a href="#" class="btn btn-warning">Reset</a>
                                    <a href="#" class="btn btn-success">Save</a>
                                </div></div>
                            </form>
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