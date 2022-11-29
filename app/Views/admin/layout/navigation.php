<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image pull-left">
                <img src="<?php echo base_URL(); ?>/public/admin/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <h4>Welcome</h4>
                <?php if (url_is('admin*')) :?><h4>Admin Section</h4>
                <?php else: ?> <p><?php $first_name=current_user()['first_name'];$last_name=current_user()['last_name'];?>
                 <?= esc($first_name." ".$last_name) ?></p><?php endif; ?>
                </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?= site_url('leave/dashboard')?>"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                </a>
            </li>
            <?php if($page ==='employee_page'): ?>

                <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i><span>Leave </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('leave/new') ?>">Apply </a></li>
                    <li><a href="<?= site_url('leave/show/'.current_user()['per_no']) ?>">Leave History</a></li>
                    <li><a href="AddLeave.html">Cancel Leave</a></li>
             </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i><span>TD-Temp Duety </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('leave/new') ?>">Apply </a></li>
                    <li><a href="<?= site_url('leave/show/'.current_user()['per_no']) ?>">TD History</a></li>
                    
             </ul>
            </li>
            <?php else : ?>  
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i><span>Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('admin/AdminSection/create') ?>">Add Employee</a></li>
                    <li><a href="<?=site_url('admin/AdminSection/showEmployee') ?>">Employee list</a></li>
                    <li><a href="<?=site_url('admin/AdminSection/empByDept') ?>">Add Employee Leave</a></li>
                    <li><a href="ListLeave.html">Leave Employee list</a></li>
                </ul>
            </li>
            <li>
                <a href="<?=site_url('admin/AdminSection/pendingLeaves') ?>"><i class="fa fa-user">
                </i><span>Pending Employee Leaves</span></a>
           </li>
           <li>
                <a href="<?=site_url('admin/AdminSection/viewapprovedLeaveByPerNo') ?>"><i class="fa fa-user">
                </i><span>Edit Approved Employee Leaves<br>(Special Case)</span></a>
           </li>
     <?php endif; ?> 
    </ul>
</div> <!-- /.sidebar -->
</aside>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->