<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Employees List <?= $this->endSection() ?>
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
            <h1>Employees List</h1>
            <small>Employees list</small>
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
                            <a class="btn btn-success" href="<?= site_url('admin/AdminSection/create') ?>"> <i class="fa fa-plus"></i> Add Employee </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?= $this->include('leave/headerMessage.php') ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Photo</th>
                                            <th>Personal No</th>

                                            <th>Full Name</th>
                                            <th>Department</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>

                                            <th>Update</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $count = 1;
                                            foreach ($data as $data) : ?>
                                            <tr>
                                                <td><?= esc($count) ?> </td>
                                                <td><img src="<?= base_url()?>/public/admin/assets/dist/img/d3.png" class="img-circle" alt="User Image" height="50" width="50"></td>
                                                <td> <a href="<?= site_url()?>/admin/adminSection/employeeProfile/<?= esc($data->per_no); ?>"><?= esc($data->per_no); ?><a> </td>
                                                <td><?= esc($data->first_name); ?></td>
                                                <td><?= esc($data->department) ?></td>
                                                <td><?= esc($data->email) ?> </td>
                                                <td><?= esc($data->contact)?></td>
                                                <td>
                                                    <a  href="<?= site_url()?>/admin/adminSection/edit/<?= esc($data->per_no); ?>" class="btn btn-info btn-xs"  title="Edit Empl Record"><i class="fa fa-pencil"></i></a>

                                                
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"> <i class="fa fa-trash-o" onclick="alert('Delete is not allowed ! Please Activate or Deactive the Empl. Record'); "></i>
                                                    </button>

                                                    <a href="EmployeeProfile.html" title="View All Details" class="btn btn-danger btn-xs"><i class="fa fa-search"></i></a>
                                                </td>
                                            </tr>
                                        <?php $count++ ;endforeach; ?>
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

<?= $this->include('admin/layout/footer.php'); ?>
<?= $this->endsection() ?>