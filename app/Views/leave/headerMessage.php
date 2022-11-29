<?= session()->getFlashdata('error'); ?>
<?php if(isset($validation)):?>
<div class="col-12 alert alert-danger" role="alert"><?=$validation->listErrors(); ?></div>
<?php endif; ?>

<?php if (session()->has('errors')): ?>

<div class="bg-danger p-2">
    <?php foreach (session(('errors')) as $field => $error): ?>
    <p><?= $error ?></p>
    <?php endforeach ?>
</div>

<?php endif ?>
<?php  if((session()->has('warning'))):?>

<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><?=esc(session('warning')); ?></strong>

</div>


<?php endif?>

<?php  if((session()->has('info'))):?>

<div class="alert bg-primary alert-dismissible">
    <button type="button" class="close"
        data-dismiss="alert">&times;</button><strong><?=esc(session('info')); ?></strong>
</div>
<?php endif?>