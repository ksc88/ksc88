<?= $this->extend('admin/layout/main-layout') ?>
<?= $this->section('content') ?>
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<div class="page-container mx-5">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="#"><img src="<?php echo base_URL(); ?>/public/assets/images/icon/tcl_logo.png" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <?php echo $this->include('admin/includes/admin-sidebar.php') ?>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">View Leave Detail</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Leave Detail</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <?= $this->include('admin/includes/employee-profile-section.php')?>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <?php if(current_user()):?>

                                <?php include('headerMessage.php') ?>

                                <div class="card">
                                    <div class="sticky-top">
                                        <button class="col-2 btn btn-outline-primary float-right p-1 text-center"
                                            onclick="printDiv('print')">Print</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="container" id="print">
                                            <div>
                                                <h4 class="header-title text-center">APPLICATION FOR LEAVE OR EXTENSION
                                                    OF LEAVE</h4>
                                                <hr>
                                                <div class="lead">Reference ID : <?= $referenceId; ?></div>
                                                <label for="col-form-label">1. Name of Applicant: </label>
                                                <b><?=  $first_name.$last_name?></b>
                                            </div>
                                            <div>
                                                <label for="col-form-label">2. Post held: </label>
                                                <b><?= $designation?></b>
                                            </div>
                                            <div>
                                                <label for="col-form-label">3. Department, office and section: </label>
                                                <b><?= $department?></b>
                                            </div>
                                            <div>
                                                <label for="col-form-label">4. Pay:</label> <b><?= $basicPay ?></b>

                                            </div>
                                            <?php foreach($data as $data): ?>
                                            <div>
                                                <label for="col-form-label">5. House rent and other compensatory
                                                    allowance drawn in the present post: </label> <b><?= "....."?></b>

                                            </div>
                                            <div>
                                                <label for="col-form-label">6. Nature and period of leave applied for
                                                    and date from which required:</label> <b> <?= $data['leaveType'] ?>
                                                    - <?= $data['fromDate'] ?> To <?= $data['toDate'] ?></b>

                                            </div>
                                            <div>
                                                <label for="col-form-label">7. Sundays and holidays, if any proposed to
                                                    be prefixed/suffixed to leave:</label> <b>Preffix :
                                                    <?= $data['preffix'] ?> Suffix: <?= $data['suffix'] ?></b>
                                            </div>
                                            <div>
                                                <label for="col-form-label">8. Grounds on which leave is applied for:
                                                </label> <b><?= $data['description'] ?></b>
                                            </div>
                                            <div>
                                                <label for="col-form-label">9. Date of return from last leave, and the
                                                    nature and period of that leave: </label> <b><?= "....."?></b>
                                            </div>
                                            <div>

                                                <label for="col-form-label">10.I propose/do not propose to avail myself
                                                    of leave travel concession for the block years: </label>
                                                <b><?php $stattionLeave= $data['isStationLeave'] ; if($stattionLeave===0){echo "Yes";}else echo "No"?></b>
                                            </div>

                                            <div>
                                                <label for="col-form-label">11.Address during leave period: </label>
                                                <b><?= $data['address'] ?></b>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row area start-->
        </div>
        <?php #include 'includes/footer.php'?>
        <!-- footer area end-->
    </div>
    <!-- main content area end -->
</div>
<?php else :?>
<p>User is not Logged In</p>
<?php endif ?>

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;

}
</script>
<?= $this->include('admin/includes/footer.php'); ?>
<?= $this->endSection() ?>