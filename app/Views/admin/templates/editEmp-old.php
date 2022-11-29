<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-12">
<h1 class="mx-auto"></h1>
</div><!-- /.col -->
<div class="col-sm-12">
<ol class="breadcrumb float-sm-left">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active ">Update Employee Master Page</li>
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
<div class="card-body ">
<h2 class="text-center">UpdateEmployee Master Entry Form</h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>
<hr>
</div>
<div class="card-body">


<form action="<?= base_URL('update/'.$employee['id']);?>" method="post">
    <?= csrf_field() ?>
<div class="row">
<div class="col-md-4 form-group">

<label >First Name</label>
<input type="text" class="form-control" id="fname" name="first_name" placeholder="" value="<?= esc($employee['first_name']) ?>"> 
</div>   
<div class="col-md-4 form-group">
<label >Middle Name</label>
<input type="text" class="form-control" id="mname" name="middle_name" placeholder="" value="<?= esc($employee['middle_name']) ?>">
</div>
<div class="col-md-4 form-group">
<label >Last Name</label>
<input type="text" class="form-control" id="lame" name="last_name" placeholder="" value="<?= esc($employee['last_name']) ?>">
</div>
<div class="col-md-12 form-group">
<label >Personal N0</label>
<input type="text" class="form-control" id="pno" name="per_no" placeholder="" value="<?= esc($employee['per_no']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Category</label>
<input type="text" class="form-control" id="cat" name="category" placeholder="" value="<?= esc($employee['category']) ?>">
</div>
<div class="col-md-6 form-group">
<label >DOB</label>
<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter DOB"  value="<?= esc($employee['dob']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Aadhar</label>
<input type="text" class="form-control" id="aadhar" name="aadhaar" placeholder="Enter Aadhar Number" value="<?= esc($employee['aadhaar']) ?>">
</div>
<div class="col-md-6 form-group">
<label >Blood Group</label>
<select name="blood_group" class="form-control" value="<?= esc($employee['blood_group']) ?>">

<?= $option=esc($employee['blood_group']) ?>
<option value="A+" <?php if($option=="A+") {echo "selected";}?>>A+</option>
<option value="B+" <?php if($option=="B+") {echo " selected";}?>>B+</option>
<option value="O+" <?php if($option=="O+") {echo " selected";}?>>O+</option>
<option value="AB+" <?php if($option=="AB+") {echo " selected";}?>>AB+</option>
<option value="AB-" <?php if($option=="AB-") {echo " selected";}?>>AB-</option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Family Detail</label>
<input type="text" class="form-control" id="fdetail" name="family_detail" placeholder="Enter Family Details" value="<?= esc($employee['family_detail']) ?>">
</div>
<div class="col-md-6 form-group">
<label >PAN </label>
<input type="text" class="form-control"  id="pan" name="pan" placeholder="Enter PAN No" value="<?= esc($employee['pan']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Designation</label>
<select id="designation" name="designation" class="form-control" value="<?= esc($employee['designation']) ?>">
<option value="option1">Option 1</option>
</select>
</div>
<div class="col-md-6 form-group">
<label >DOJ </label>
<input type="date" class="form-control" id="doj" name="doj" placeholder="Enter Date of joining" value="<?= esc($employee['doj']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Date of Retirement</label>
<input type="date" class="form-control" id="dor" name="d_of_retirment" placeholder="Enter Date of Retirement" value="<?= esc($employee['d_of_retirment']) ?>"> 
</div>
<div class="col-md-6 form-group">
<label >Date of Next Increment </label>
<input type="date" class="form-control" id="doi" name="d_of_increment" placeholder="Enter Next Encrement Date" value="<?= esc($employee['d_of_increment']) ?>">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<label >Department</label>
<select class="form-control" id="dept" name="department" value="<?= esc($employee['department']) ?>">
<option value="<?= esc($employee['department']) ?>"><?= esc($employee['department']) ?></option>
</select>
</div>

</div>
<div class="row">
<div class="col-md-12 form-group">
<label >Basic Pay</label>
<select class="form-control" id="cpc_level" name="basic_pay" >
<option value=""> - Select Level -</option>
<?= $option=$employee['basic_pay'] ;?>
<option value="1" <?php if($option=="1") {echo " selected";}?>>Level (1) - PB-1 (5200-20200) G.P. 1800</option>
<option value="2" <?php if($option=="2") {echo " selected";}?>>Level (2) - PB-1 (5200-20200) G.P. 1900</option>
<option value="3" <?php if($option=="3") {echo " selected";}?>>Level (3) - PB-1 (5200-20200) G.P. 2000</option>
<option value="4" <?php if($option=="4") {echo " selected";}?>>Level (4) - PB-1 (5200-20200) G.P. 2400</option>
<option value="5" <?php if($option=="5") {echo " selected";}?>>Level (5) - PB-1 (5200-20200) G.P. 2800</option>
<option value="6" <?php if($option=="6") {echo " selected";}?>>Level (6) - PB-2 (9300-34800) G.P. 4200</option>
<option value="7" <?php if($option=="7") {echo " selected";}?>>Level (7) - PB-2 (9300-34800) G.P. 4600</option>
<option value="8" <?php if($option=="8") {echo " selected";}?>>Level (8) - PB-2 (9300-34800) G.P. 4800</option>
<option value="9" <?php if($option=="9") {echo " selected";}?>>Level (9) - PB-2 (9300-34800) G.P. 5400</option>
<option value="10" <?php if($option=="10") {echo " selected";}?>>Level (10) - PB-3 (15600-39100) G.P. 5400</option>
<option value="11" <?php if($option=="11") {echo " selected";}?>>Level (11) - PB-3 (15600-39100) G.P. 6600</option>
<option value="12" <?php if($option=="12") {echo " selected";}?>>Level (12) - PB-3 (15600-39100) G.P. 7600</option>
<option value="13" <?php if($option=="13") {echo " selected";}?>>Level (13) - PB-4 (37400-67000) G.P. 8700</option>
<option value="14" <?php if($option=="14") {echo " selected";}?>>Level (13) - PB-4 (37400-67000) G.P. 8900</option>
<option value="15" <?php if($option=="15") {echo " selected";}?>>Level (14) - PB-4 (37400-67000) G.P. 10000</option>
<option value="16" <?php if($option=="16") {echo " selected";}?>>Level (15) - 67000-79000</option>
<option value="17" <?php if($option=="17") {echo " selected";}?>>Level (16) - 75000-80000</option>
<option value="18" <?php if($option=="18") {echo " selected";}?>>Level (17) - 80000</option>
<option value="19" <?php if($option=="19") {echo " selected";}?>>Level (18) - 90000</option>
</select>
</div>

</div>
<div class="row">
<div class="col-md-6 form-group">
<label >Bank Account No</label>
<input type="text" class="form-control" id="acc_no" name="bank_account"placeholder="Enter Bank Account No" value="<?= esc($employee['bank_account']) ?>">
</div>
<div class="col-md-6 form-group">
<label >Bank Account Name</label>
<input type="text" class="form-control" id="acc_name" name="bank_name"placeholder="Enter Bank Account Name" value="<?= esc($employee['bank_name']) ?>">
</div>

</div>
<div class="row">
<div class="col-md-6 form-group">
<label >IFSC Code</label>
<input type="text" class="form-control" id="ifsc" name="bank_ifsc" placeholder="Enter IFSC Code" value="<?= esc($employee['bank_ifsc']) ?>">
</div>
<div class="col-md-6 form-group">
<label >GPF/NPS No.</label>
<input type="text" class="form-control" id="gpf_no" name="gpfno" placeholder="Enter GPF/NPS No." value="<?= esc($employee['gpfno']) ?>">
</div>

</div>
<div class="text-center">
<input class="btn btn-primary" type="submit" name="submit" value="Update employee Record" />
</div>
</form>
</div>
</div>
</div>

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

