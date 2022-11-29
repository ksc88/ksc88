            <?= $this->extend('homePageLayout/home_layout') ?>
            <?= $this->section('content') ?>
            <div class="container">
            <div class="row p-4">
            <div class="card  mx-auto">
            <?= session()->getFlashdata('error') ?>
            <?= service('validation')->listErrors() ?>
            <div class="col-12 mt-5">
            <?php if(session()->getFlashdata('msg')){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities(session('msg')); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div><?php } ?>
            <div class="card-body">
            <div class="data-tables datatable-dark text-center">
            <table id="dataTable3" class="table table-hover table-striped text-center">
            <thead class="text-capitalize">
            <tr>

            <th>Sr. No </th>
            <th>Circular Date Date</th>
            <th>Circular</th>      
            <th>View/download</th>      

            </tr>
            </thead>
            <tbody><?php $count = 1;  ?>
            <tr>      
            <td>1</td>
            <td>01-09-22</td>
            <td>Test Circular File 1</td>
            <td> <a href="<?php echo base_url();?>/public/assets/circulars/cir01.pdf" download><i class="fa fa-download" aria-hidden="true">/<i class="fa fa-eye" aria-hidden="true"></i> </a></td>
            </tr>
            <tr>      
            <td>2</td>
            <td>30-08-22</td>
            <td> Circular File 1</td>
            <td> <a href="<?php echo base_url();?>/public/assets/circulars/cir01.pdf" download><i class="fa fa-download" aria-hidden="true">/<i class="fa fa-eye" aria-hidden="true"></i> </a></td>
            </tr>
                         <?php   $count++;   ?>
            </tbody>
            </table>                    
            </div>
            </div>
            </div>
            </div>

            </div>
            </div>
            <?= $this->endSection() ?>