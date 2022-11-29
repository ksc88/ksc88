<?php //if(current_user()):?>
<nav>
        <ul class="metismenu" id="menu">
        <?php  if($page=='dof') { ?>
        <li class="<?php if($page=='dof') {echo 'active';} ?>"><a href="<?= base_url('dof')?>"><i class="ti-dashboard"></i> <span>Invoices</span></a></li>
         <?php } elseif (($page=='bill')) { ?> 
            <li class="<?php if($page=='bill') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>...</span></a>

            <ul class="collapse">
                <li class="active"><a href="<?= base_url('allBill') ?>"><i class="fa fa-spinner"></i> Bill/Invoice Master</a></li>
                <li class="active"><a href="<?= base_url('allCustomer') ?>"><i class="fa fa-spinner"></i> Customer Master</a></li>
                <li class="active"><a href="<?= base_url('allContract') ?>"><i class="fa fa-spinner"></i> Contract Master</a></li>
            </ul>           
        </li> 
        <?php }  elseif($page=='Bill_Section') { ?>
        <ul class="collapse">
                <li ><a href="<?= site_url('td/tdProposal');?>"><i class="fa fa-spinner"></i> T/D Proposal</a></li>
                <li ><a href="#"><i class="fa fa-spinner"></i> T/D History</a></li>

            </ul>
            <li class="<?php if($page=='directory') {echo 'active';} ?>"><a href="#"><i class="fa fa-lock"></i> <span>Directory Master</span></a></li>
        
        <?php }  elseif($page=='employee_page') {?>                   
        
         <li class="<?php if($page=='manage-leave') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Temporary Duty(T/D)</span></a>

            <ul class="collapse">
                <li ><a href="<?= site_url('td/tdProposal');?>"><i class="fa fa-spinner"></i> T/D Proposal</a></li>
                <li ><a href="#"><i class="fa fa-spinner"></i> T/D History</a></li>
            </ul>            
        </li>
         <li >
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Leave</span></a>

            <ul class="collapse">
                <li ><a href="#"><i class="fa fa-spinner"></i>Apply</a></li>
                <li ><a href="<?= site_url("leave/show/".current_user()['per_no']) ?>"><i class="fa fa-check"></i> Leave History</a></li>              
            </ul>   
        </li>
         <?php }?>
    </ul>
</nav>
