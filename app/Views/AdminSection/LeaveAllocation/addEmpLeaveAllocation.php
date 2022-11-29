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
                            <?= form_open('admin/AdminSection/addEmpLeaveAllocation') ?>
                         
                            <div class="col-sm-4 form-group">
                                    <label>Personal No</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name"  name='empPerNo' required="" readonly value="<?= $emp['per_no']; ?>">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>First Name</label>
                                    <?php $name=$emp['first_name'].' '.$emp['last_name']; ?>
                                    <input type="text" class="form-control" placeholder="Enter First Name" name='name'required="" readonly value="<?= $name; ?>">
                                </div>
                              
                                <div class="col-sm-4 form-group">
                                    <label>Year</label>
                                    <input type="text" class="form-control" placeholder="choose Year" name='year' required="" readonly value="<?= date('Y')?> "readonly>
                                </div>
                            
                                <div class="col-sm-3 form-group">
                                    <label>Allocate CL</label>
                                    <input type="number" class="form-control" placeholder="Allocate CL"  name='cl' value="<?=old('cl',esc($leaves->cl)) ?>">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Allocate EL</label>
                                    <input type="number" class="form-control" placeholder="Allocate EL"  name='el' value="<?=old('el',esc($leaves->el))?>" >
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Allocate RH</label>
                                    <input type="number" class="form-control" placeholder="Allocate EL"  name='rh' value="<?=old('rh',esc($leaves->rh)) ?>">
                                </div>
                                <div class="col-sm-3 form-group">

                                    <input type="hidden" class="form-control" placeholder="Allocate EL"  name='id' value="<?=old('id',esc($leaves->id)) ?>">
                                </div>
                        <div class="row">
                                <div class="col-sm-12 reset-button">
                                    <a href="#" class="btn btn-warning">Reset</a>
                                   <button type="submit" name="save">Save</button>
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