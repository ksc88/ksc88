
<div class="content-wrapper" style="min-height: 2646.44px;">
<?php if(session()->has("message")){ ?>
    <div class="alert alert-success float-right" id="success-alert" style="width:350px; " >
  <button type="button" class="close" data-dismiss="alert" >x</button>
  <p ><strong>Success! </strong> <?= session("message");?></p>
</div>
 <?php } ?>
<div>
    <!-- Main content -->
    <section class="content pt-5">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="card card-primary ">
            <div class="card-header">
            <h3>Add Department</h3>
            <form action="<?php echo base_URL() ?>/addLeaveType" method="post">
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
              <div class="card-tools">
              </div>
            </div>
            <?= csrf_field() ?>
            <div class="card-body" style="display: block;">
              <div class="form-group">
                <label for="inputName">Department Name</label>
                <input type="text" id="dept_name" name="dept_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputDescription"> Description</label>
                <textarea id="dept_desc" class="form-control" rows="4" name="dept_desc" required></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
            <div class="col-12 text-center" >
            <input type="submit" value="Create new Project"  id="" href="javascript:;"   href="javascript:;" class="btn btn-success ">
        </div>
        </form>
          <!-- /.card -->
        </div>

      </div>
    </section>
    <!-- /.content -->
  </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
  $("#success-alert").hide();
  $("#myWish").ready(function showAlert() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  });
});

</script>

