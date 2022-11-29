
<div class="row">
    <div class="col-12 mt-5">
        <?= $this->include('admin/includes/headerMessage.php') ?>
        <p class="text-muted ">Please fill up the form in order to add employee
            records</p>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Employee PNo</label>
            <input class="form-control" name="per_no" type="number" autocomplete="off" required id="per_no"
                onBlur="fnc()" value="<?= old('per_no',esc($data->per_no));?>">
        </div>


        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">First Name</label>
            <input type="text" class="form-control" autocomplete="off" id="fname" name="first_name"
                placeholder="Enter First Name" value="<?= old('first_name',esc($data->first_name));?>">
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Middle Name</label>
            <input class="form-control" name="middle_name" type="text" autocomplete="off" required
                id="example-text-input" value="<?= old('middle_name',esc($data->middle_name));?>">
        </div>
        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Last Name</label>
            <input class="form-control" name="last_name" type="text" autocomplete="off"
                value="<?= old('last_name',esc($data->last_name));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-email-input" class="col-form-label">Email</label>
            <input class="form-control" name="email" type="email" autocomplete="off"
                value="<?= old('email',esc($data->email));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label class="col-form-label">Preferred Department</label>
            <select class="form-control" name="department" autocomplete="off" required>
                <option value="">Choose..</option>
                <?php foreach($dept as $dept): ?>
                <option value="<?= old('department',$dept['deptName']); ?>"
                    <?php if($dept['deptName']==$data->department){ echo 'selected';} ?>><?= $dept['deptName']; ?>
                </option>
                <?php endforeach?>
            </select>
        </div>

        <div class="col-sm-4 form-group">
            <label class="form-label">Designation</label>
            <select class="form-control" name="designation" autocomplete="off">
                <option value="">Choose..</option>
                <?php foreach($designations as $designations): ?>
                <option value="<?= old('designation',$designations['designation']); ?>"
                    <?php if($designations['designation']==$data->designation){ echo 'selected';} ?>>
                    <?= $designations['designation']; ?></option>
                <?php endforeach?>

            </select>
        </div>
        <div class="col-sm-4 form-group">
            <label class="col-form-label">Basic Pay</label>
            <select class="form-control" name="basic_pay" autocomplete="off">
                <option value=""> - Select Level -</option>
                <option value="1" <?php if($data->basic_pay==="1"){ echo 'selected';} ?>>Level (1) - PB-1 (5200-20200)
                    G.P. 1800</option>
                <option value="2" <?php if($data->basic_pay==="2"){ echo 'selected';} ?>>Level (2) - PB-1 (5200-20200)
                    G.P. 1900</option>
                <option value="3" <?php if($data->basic_pay==="3"){ echo 'selected';} ?>>Level (3) - PB-1 (5200-20200)
                    G.P. 2000</option>
                <option value="4" <?php if($data->basic_pay==="4"){ echo 'selected';} ?>>Level (4) - PB-1 (5200-20200)
                    G.P. 2400</option>
                <option value="5" <?php if($data->basic_pay==="5"){ echo 'selected';} ?>>Level (5) - PB-1 (5200-20200)
                    G.P. 2800</option>
                <option value="6" <?php if($data->basic_pay==="6"){ echo 'selected';} ?>>Level (6) - PB-2 (9300-34800)
                    G.P. 4200</option>
                <option value="7" <?php if($data->basic_pay==="7"){ echo 'selected';} ?>>Level (7) - PB-2 (9300-34800)
                    G.P. 4600</option>
                <option value="8" <?php if($data->basic_pay==="8"){ echo 'selected';} ?>>Level (8) - PB-2 (9300-34800)
                    G.P. 4800</option>
                <option value="9" <?php if($data->basic_pay==="9"){ echo 'selected';} ?>>Level (9) - PB-2 (9300-34800)
                    G.P. 5400</option>
                <option value="10" <?php if($data->basic_pay==="10"){ echo 'selected';} ?>>Level (10) - PB-3 (15600-39100)
                    G.P. 5400</option>
                <option value="11" <?php if($data->basic_pay==="11"){ echo 'selected';} ?>>Level (11) - PB-3 (15600-39100)
                    G.P. 6600</option>
                <option value="12" <?php if($data->basic_pay===12){ echo 'selected';} ?>>Level (12) - PB-3 (15600-39100)
                    G.P. 7600</option>
                <option value="13" <?php if($data->basic_pay==="13"){ echo 'selected';} ?>>Level (13) - PB-4 (37400-67000)
                    G.P. 8700</option>
                <option value="14" <?php if($data->basic_pay==="14"){ echo 'selected';} ?>>Level (13) - PB-4 (37400-67000)
                    G.P. 8900</option>
                <option value="15" <?php if($data->basic_pay==="15"){ echo 'selected';} ?>>Level (14) - PB-4 (37400-67000)
                    G.P. 10000</option>
                <option value="16" <?php if($data->basic_pay==="16"){ echo 'selected';} ?>>Level (15) - 67000-79000
                </option>
                <option value="17" <?php if($data->basic_pay==="17"){ echo 'selected';} ?>>Level (16) - 75000-80000
                </option>
                <option value="18" <?php if($data->basic_pay==="18"){ echo 'selected';} ?>>Level (17) - 80000</option>
                <option value="19" <?php if($data->basic_pay==="19"){ echo 'selected';} ?>>Level (18) - 90000</option>
            </select>
        </div>

        <div class="col-sm-4 form-group">
            <label class="col-form-label">Categoery</label>
            <select class="form-control" name="category" autocomplete="off">
                <option value="">Choose..</option>

                <option value="gen" <?php if($data->category==="gen"){ echo 'selected';} ?>>Gen</option>
                <option value="sc" <?php if($data->category==="sc"){ echo 'selected';} ?>>Sc</option>
                <option value="st" <?php if($data->category==="st"){ echo 'selected';} ?>>St</option>
                <option value="obc" <?php if($data->category==="obc"){ echo 'selected';} ?>>Obc</option>
            </select>
        </div>

        <div class="col-sm-4 form-group">
            <label class="col-form-label">Gender</label>
            <select class="form-control" name="gender" autocomplete="off">
                <option value="">Choose..</option>
                <option value="male" <?php if($data->gender==="male"){ echo 'selected';} ?>>Male</option>
                <option value="female" <?php if($data->gender==="female"){ echo 'selected';} ?>>Female</option>
                <option value="other" <?php if($data->gender==="other"){ echo 'selected';} ?>>Other</option>
            </select>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-date-input" class="col-form-label">D.O.B</label>
            <input class="form-control" type="date" name="dob" value="<?= old('dob',esc($data->dob));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Contact Number</label>
            <input class="form-control" name="contact" type="number" maxlength="10" autocomplete="off" value="<?= old('contact',esc($data->contact));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Aadhar</label>
            <input class="form-control" name="aadhar" type="number" maxlength="14" autocomplete="off" value="<?= old('aadhar',esc($data->aadhar));?>" required>
        </div>



        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Address</label>
            <input class="form-control" name="address" type="text" autocomplete="off"  value="<?= old('address',esc($data->address));?>"required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">City</label>
            <input class="form-control" name="city" type="text" autocomplete="off" value="<?= old('city',esc($data->city));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-date-input" class="col-form-label">D.O.A</label>
            <input class="form-control" type="date" name="doj" value="<?= old('doj',esc($data->doj));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-date-input" class="col-form-label">D.O.R</label>
            <input class="form-control" type="date" name="d_of_retirment" value="<?= old('d_of_retirment',esc($data->d_of_retirment));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-date-input" class="col-form-label">D.O.I</label>
            <input class="form-control" type="date" name="d_of_increment" value="<?= old('d_of_increment',esc($data->d_of_increment));?>" reqiured>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Acc. Number</label>
            <input class="form-control" name="bank_account" type="text" autocomplete="off" value="<?= old('bank_account',esc($data->bank_account));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Bank Name </label>
            <input class="form-control" name="bank_name" type="text" autocomplete="off" value="<?= old('bank_name',esc($data->bank_name));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Bank IFSC Code </label>
            <input class="form-control" name="bank_ifsc" type="text" autocomplete="off" value="<?= old('bank_ifsc',esc($data->bank_ifsc));?>" required>
        </div>

        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Gpf/NPS No </label>
            <input class="form-control" name="gpfno" type="text" autocomplete="off" value="<?= old('gpfno',esc($data->gpfno));?>" required>
        </div>
        <div class="col-sm-4 form-group">

            <input class="form-control" name="id" type="hidden" autocomplete="off" value="<?=esc($data->id);?>" required>
        </div>

        <div class="col-sm-12">
            <h3>Set Password for Employee Login</h3>
            <hr>
        </div>
        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Password</label>
            <input class="form-control" name="password" type="password" autocomplete="off" required>
        </div>
        <div class="col-sm-4 form-group">
            <label for="example-text-input" class="col-form-label">Confirmation
                Password</label>
            <input class="form-control" name="confirmpassword" type="password" autocomplete="off" required>
        </div>
    
    </div>
