


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">TCLHQ-Employees</h5>

                <p class="card-text">
                <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="employee" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Emp Name</th>
                    <th>Personal Number</th>
                    <th>Designation</th>
                    <th>Level</th>                  
                  </tr>
                  </thead>
                  <tbody>
				  
				  <?php foreach($employee as $emp): ?>
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td><?= esc($emp['first_name']) ?></td>
                    <td><?= esc($emp['per_no']) ?>
                    </td>
                    <td><?= esc($emp['designation']) ?></td>
								
                  </tr>
				  <?php endforeach ?>
                  </tbody>
              
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

          </div>
     
          <!-- /.col-md-6 -->
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

