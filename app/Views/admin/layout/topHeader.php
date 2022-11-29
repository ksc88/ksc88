<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>    <?= $this->renderSection('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo base_URL(); ?>/public/admin/assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link href="<?php echo base_URL(); ?>/public/admin/<?php echo base_URL(); ?>/public/admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_URL(); ?>/public/admin/assets/table/DT_bootstrap.css" rel="stylesheet" type="text/css"/>
            <!-- Monthly css -->
            <link href="<?php echo base_URL(); ?>/public/admin/assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition sidebar-mini"> 

    <?= $this->renderSection('content'); ?>

 
    <script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jquery-ui --> 
<script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<!-- Pace js -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- Hadmin frame -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/dist/js/custom1.js" type="text/javascript"></script>
<script src="<?php echo base_URL(); ?>/public/admin/assets/dist/js/custom.js" type="text/javascript"></script>
       <!-- Monthly js -->
<script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/monthly/monthly.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_URL(); ?>/public/admin/assets/table/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_URL(); ?>/public/admin/assets/table/DT_bootstrap.js"></script>
        <script src="<?php echo base_URL(); ?>/public/admin/assets/table/scripts.js"></script>
        <script src="<?php echo base_URL(); ?>/public/admin/assets/table/table-editable.js"></script>
        <script>
            jQuery(document).ready(function() {
                EditableTable.init();
            });
         //monthly calender
         $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });       
        </script>
</body>
</html>
