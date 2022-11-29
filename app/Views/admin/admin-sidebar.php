<nav>
        <ul class="metismenu" id="menu">
         <?php  if($page=='dof') { ?>
        <li class="<?php if($page=='dof') {echo 'active';} ?>"><a href="<?= base_url('dof')?>"><i class="ti-dashboard"></i> <span>Invoices</span></a></li>
         <?php } elseif (($page=='addBill')) { ?> 
            <li class="<?php if($page=='addBill') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Bill/Invoice</span></a>

            <ul class="collapse">
                <li class="active"><a href="<?= base_url('allBill') ?>"><i class="fa fa-spinner"></i> Bill/Invoice Master</a></li>
                <li class="active"><a href="<?= base_url('addCustomer') ?>"><i class="fa fa-spinner"></i> Customer Master</a></li>

            </ul>
            
        </li>                     
       
        <?php }  else {?> 
                    
        <li class="<?php if($page=='department') {echo 'active';} ?>"><a href="department.php"><i class="fa fa-th-large"></i> <span>Department Section</span></a></li>

         <li class="<?php if($page=='leave') {echo 'active';} ?>"><a href="leave-section.php"><i class="fa fa-sign-out"></i> <span>Leave Types</span></a></li>

        <li class="<?php if($page=='manage-leave') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Leave</span></a>

            <ul class="collapse">
                <li ><a href="pending-history.php"><i class="fa fa-spinner"></i> Pending</a></li>
                <li ><a href="approved-history.php"><i class="fa fa-check"></i> Approved</a></li>
                <li ><a href="declined-history.php"><i class="fa fa-times-circle"></i> Declined</a></li>
                <li ><a href="leave-history.php"><i class="fa fa-history"></i> Leave History</a></li>
            </ul>
            
        </li>

  

        <li class="<?php if($page=='manage-admin') {echo 'active';} ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>Manage Admin</span></a></li>
         <?php }?>
   
    </ul>
</nav>