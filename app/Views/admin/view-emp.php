<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Starter Page</h1>
</div><!-- /.col -->
<div class="col-sm-12">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Starter Page</li>
</ol>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8 m-auto">
<div class="card ">
<div class="card-body">
<h5 class="card-title">Employee Details</h5>
</div>
<?php foreach ($employee as $emp): ?>
<div class="card-body">
<div class="row">
<div class="col-md-4 form-group">
<label >First Name</label>
<input type="text" class="form-control" id="name" placeholder="Enter Full name of employee" value="<?= esc($emp['first_name']) ?>">

</div>
<div class="col-md-4 form-group">
<label >Midle Name</label>
<input type="text" class="form-control" id="name" placeholder="Enter Full name of employee" value="<?= esc($emp['middle_name']) ?>">
</div>
<div class="col-md-4 form-group">
<label >Last Name</label>
<input type="text" class="form-control" id="name" placeholder="Enter Full name of employee" value="<?= esc($emp['last_name']) ?>">

</div>
</div>
<div class="col-md-4form-group">
<label >Personal N0</label>
<input type="text" class="form-control" id="name" placeholder="Enter Personal Number" value="<?= esc($emp['per_no']) ?>">
</div>

<div class="row">
<div class="col-md-6 form-group">
<label >Category</label>
<input type="text" class="form-control" id="name" placeholder="Enter Full name of employee" value="<?= esc($emp['category']) ?>">
</div>
<div class="col-md-6 form-group">
<label >DOB</label>
<input type="date" class="form-control" id="name" placeholder="Enter DOB" value=<?= esc($emp['dob']) ?>>
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Aadhaar</label>
<input type="text" class="form-control" id="name" placeholder="Enter Aadhar Number" value="<?= esc($emp['aadhaar']) ?>">
</div>
<div class="col-md-6 form-group">
<label >Blood Group</label>
<select name="desigination" id="" class="form-control">

<option value="<?= esc($emp['blood_group']) ?>"><?= esc($emp['blood_group']) ?></option>


</select>
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Family Detail</label>
<input type="text" class="form-control" id="name" placeholder="Enter Family Details" value="<?= esc($emp['family_detail']) ?>">
</div>
<div class="col-md-6 form-group">
<label >PAN </label>
<input type="text" class="form-control" id="name" placeholder="Enter PAN No" value="<?= esc($emp['pan']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Designation</label>
<select name="desigination" id="" class="form-control">
<option value="<?= esc($emp['designation']) ?>"><?= esc($emp['designation']) ?></option>
</select>
</div>
<div class="col-md-6 form-group">
<label >DOJ </label> 
<input type="date" class="form-control" id="name" placeholder="Enter DOB" value=<?= esc($emp['doj']) ?>>
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Date of Retirement</label>
<input type="date" class="form-control" id="dor" placeholder="Enter Date of Retirement" value="<?= esc($emp['d_of_retirment']) ?>">
</div>
<div class="col-md-6 form-group">
<label >Date of Next Increment </label>
<input type="date" class="form-control" id="doi" placeholder="Enter Next Encrement Date" value="<?= esc($emp['d_of_increment']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Department</label>
<select class="form-control">
<option><?= esc($emp['department']) ?></option>

</select>
</div>

</div>
<div class="row">
<div class="col-md-12 form-group">
<label >Basic Pay</label>
<select class="form-control" id="cpc_level" name="cpc_level">
<option value=""> - Select Level -</option>
<option value="1"><?= esc($emp['basic_pay']) ?></option>
</select>
</div>

</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Bank Account No</label>
<input type="text" class="form-control" id="name" placeholder="Enter Bank Account No" value="<?= esc($emp['bank_account']) ?>" >
</div>
<div class="col-md-6 form-group">
<label >Bank Account Name</label>
<input type="text" class="form-control" id="name" placeholder="Enter Bank Account Name" value="<?= esc($emp['bank_name']) ?>">
</div>

</div>
<div class="row">
<div class="col-md-6 form-group">
<label >IFSC Code</label>
<input type="text" class="form-control" id="name" placeholder="Enter IFSC Code" value="<?= esc($emp['bank_ifsc']) ?>">
</div>
<div class="col-md-6 form-group">
<label >GPF/NPS No.</label>
<input type="text" class="form-control" id="name" placeholder="Enter GPF/NPS No." value="<?= esc($emp['gpfno']) ?>">
</div>

</div>
</div>
</div>
</div>
    <?php endforeach ?>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>
<!-- /.control-sidebar -->

