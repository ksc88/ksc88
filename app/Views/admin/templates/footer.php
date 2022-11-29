<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="#">TCLHQ,Kanpur</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_URL();?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_URL();?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_URL();?>/public/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_URL();?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_URL();?>/public/plugins/toastr/toastr.min.js"></script>
<script>
  $(function () {
    $("#employee").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
	
</script>
</body>
</html>
