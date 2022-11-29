  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Department</li>
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
                <h5 class="card-title">TCLHQ-Department</h5>
                <p class="card-text">
                <div class="card">
                  <?php if (session()->has("message")) { ?>
                    <div id="toast-container" class="toast-top-right">
                      <div class="toast toast-success" aria-live="polite" style="">
                        <div class="toast-message"><?= session()->getFlashdata('message') ?></div>
                      </div>
                    </div>
                  <?php } ?>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add employee</button>
                    <table id="employee" class="table table-bordered table-striped" width="100%">
                      <thead>
                        <tr>
                          <th width="10%">Dept Name</th>
                          <th width="10%">Dep. Des Number</th>
                          <th width="10%">Dep. Des Number</th>
                      </thead>
                      <tbody>
                        <?php foreach ($dept->getResult() as $row) :
                         ?>
                          <tr data-widget="expandable-table" aria-expanded="false">
                            <td><?= esc($row->dept_name );?></td>
                            <td><?= esc($row->dept_name ); ?></td>  
                            <td class="">
                              <div class="btn-group btn-group-sm">
                                <a href="<?= base_URL('/edit/' . esc($row->id ))?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_URL('/delete/' .  esc($row->id )) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                </p>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Empl. </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="content">
            <div class="container-fluid">
              <div class="row">
              

              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->