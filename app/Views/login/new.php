
<?= $this->extend('admin/layout/topHeader') ?>
<?= $this->section('title') ?> Leave History <?= $this->endSection() ?>
<?= $this->section('content') ?>
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Login</h3>
                            
                        <small>
                        <?php  if((session()->has('warning'))):?><div class="bg-danger p-2"><strong><?=esc(session('warning')); ?></strong></div>
                           
                            <?php else:?>
                                <small><strong>Please enter your credentials to login.</strong></small>
                             <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                <?= form_open('login/user_check')?>    
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="Personal Number" title="Please enter you username" required=""  name="login-personalNo" value="<?= old('login-personalNo') ?>" class="form-control">
                            <span class="help-block small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required=""  name="login-pwd" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-primary">Login</button>
                            <a class="btn btn-warning" href="register.html">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_URL(); ?>/public/admin/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_URL(); ?>/public/admin/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <?=$this->include('admin/layout/footer.php');?>
<?= $this->endsection() ?>