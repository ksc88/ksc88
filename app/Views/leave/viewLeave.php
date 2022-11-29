<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Leave History <?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->include('admin/layout/header.php');?>
<?= $this->include('admin/layout/navigation.php');?>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <ol class="breadcrumb hidden-xs">
        <li><a href="index-2.html">This is</a></li>
        <li class="active">Leave Detail Page</li>
    </ol>
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group">
                                <button class="btn btn-success" onclick="printDiv('print')"> <i class="fa fa-print"></i>
                                    प्रिंट- Print </button>
                            </div>
                        </div>
                        <div class="panel-body" id="print">
                            <div class="review-block">
                                <div class="bg-warning m-2">
                                    <h4 class="text-center p-2">APPLICATION FOR LEAVE OR FOR EXTENTION OF LEAVE <br>
                                        अवकाश अथवा अवकाश विस्तार हेतु</h4>
                                </div>
                                <p class="text-right">App. ID : <?= $referenceId; ?> </p>
                                <div>
                                    <label>1. Name of Applicant(आवेदक का नाम):</label> <span
                                        class="review-block-description"><?=  $first_name.$last_name?></span>

                                    <label>2. Post held(पदनाम): </label> <?= $designation?>

                                    <label>3. Department, office and section(विभाग,कार्यालय,अनुभाग): </label>
                                    <?= $department?>
                                </div>
                                <div>
                                    <label for="col-form-label">4. Pay(वेतनमान) :</label> <?= $basicPay ?>

                                </div>
                                <?php foreach($data as $data): ?>
                                <div>
                                    <label for="col-form-label">5. House rent and other compensatory allowance drawn in
                                        the present post(वर्त्तमान पद पर आवास एवं अन्य प्रतिपूरक भत्ता): </label>
                                    <?= "....."?>

                                </div>
                                <div>
                                    <label for="col-form-label">6. Nature and period of leave applied for and date from
                                        which required(आवेदित अवकाश का स्वरुप एवं अवधि तथा जिस तारीख से अवकाश की
                                        आवश्यकता हो):</label> <?= $data['leaveType'] ?> - <?= $data['fromDate'] ?> To
                                    <?= $data['toDate'] ?>

                                </div>
                                <div>
                                    <label for="col-form-label">7. Sundays and holidays, if any proposed to be
                                        prefixed/suffixed to leave(यदि अवकाश के पहले या बाद में रविवार या छुट्टी
                                        हो):</label> Preffix : <?= $data['preffix'] ?> Suffix: <?= $data['suffix'] ?>
                                </div>
                                <div>
                                    <label for="col-form-label">8. Grounds on which leave is applied for: </label> <span
                                        class="review-block-description "><?= $data['description'] ?></span>
                                </div>
                                <div>
                                    <label for="col-form-label">9. Date of return from last leave, and the nature and
                                        period of that leave(विगत अवकाश से वापसी की तिथि एवं उस अवकाश का स्वरुप एवं
                                        अवधि): </label> <?= "....."?>
                                </div>
                                <div>

                                    <label for="col-form-label">10.I propose/do not propose to avail myself of leave
                                        travel concession for the block years(मैं प्रस्तावित करता हूँ\नहीं करता हूँ कि
                                        प्रस्तावित अवकाश के दौरान ब्लॉक वर्ष लिए अवकाश यात्रा रियायत का उपभोग करूँगा |
                                        ): </label>
                                    <?php $stattionLeave= $data['isStationLeave'] ; if($stattionLeave===0){echo "Yes";}else echo "No"?>
                                </div>

                                <div>
                                    <label for="col-form-label">11.Address during leave period(अवकाश के दौरान पता):
                                    </label> <?= $data['address'] ?>
                                </div>
                                <div>
                                    <label for="col-form-label">12.Remarks and /or recommendation of the controlling
                                        officer(टिप्पणी एव,/अथवा अधिकारी का संस्तुति): </label> <?= $data['address'] ?>
                                </div>
                                </br></br>
                                <p class="text-right "><strong>Signature of Applicant (with date)</strong></p>

                                <p class="text-left "><strong>आवेदक के हस्ताक्षर Signature of Applicant (with
                                        date)</strong></p>
                                <div class="text-center">
                                    <hr>
                                    <span class="bg-info" p-2><strong> REGARDING ADMISSIBILITY OF LEAVE</strong></span>
                                </div>
                                <div>
                                    <p> 13.Certified that <strong><?= $data['leaveType'] ?></strong>&nbsp;&nbsp;(nature
                                        of leave) for
                                        &nbsp;&nbsp;<strong><?= $data['noOfDays'] ?>&nbsp;&nbsp;</strong>(period) from
                                        &nbsp;&nbsp; <strong><?= $data['fromDate'] ?></strong>&nbsp;&nbsp;To
                                        <strong><?= $data['toDate'] ?></strong> &nbsp;is admissible under rule .......of
                                        the central Civil Service(Leave) Rules. 1972</p>
                                </div>
                                <div>
                                    प्रमाणित किया जाता है कि <strong><?= $data['leaveType'] ?> </strong> ( अवकाश का
                                    स्वरूप)<strong><?= $data['noOfDays']  ?>दिनों </strong>हेतु (अवधि) &nbsp;&nbsp;
                                    <strong><?= $data['fromDate'] ?> से </strong><strong><?= $data['toDate'] ?></strong>
                                    तक केंद्रीय सिविल सेवा अवकाश नियम १९७२ के नियम ....... के तहत स्वीकार्य है | </p>
                                </div>
                                <p class="text-left "><strong>आवेदक के हस्ताक्षर/ Signature of Applicant (with
                                        date)</strong></p>
                                <p class="text-right "><strong>आवेदक के हस्ताक्षर/ Orders of the authority competent to
                                        grant leave</strong></p>

                                <?php endforeach;?>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;

}
</script>
<?=$this->include('admin/layout/footer.php');?>
<?= $this->endsection() ?>