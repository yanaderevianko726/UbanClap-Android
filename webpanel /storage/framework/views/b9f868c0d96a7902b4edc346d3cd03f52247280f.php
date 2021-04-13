<?php $__env->startSection('title', 'Change Password '); ?>

<?php $__env->startSection('content'); ?>

<style type="text/css">
#page-content-wrapper{
    background: #f3f1f1;
    min-height: 800px;
}
.outer-wrapper { 
    display: table;
    width: 100%;
    height: 100%;
    background: #f3f1f1;
}
.inner-wrapper {
    display:table-cell;
    vertical-align:middle;
    padding:15px;
}
.login-btn { position:fixed; top:15px; right:15px; }
</style>

<section id="loginform" class="outer-wrapper">

<div class="inner-wrapper">
<div class="container" style="margin-top: 10%;">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
     <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <form role="form" action="<?php echo e(route('verify')); ?>" method="post" autocomplete="off">
        <?php echo e(csrf_field()); ?>

        <div class="field">
            <label for="password">Informe a Senha</label>
            <input type="password" name="password" class="input" id="password" placeholder="Informe a Senha">
        </div>
        <button type="submit" class="button is-default">Enviar E-mail</button>
      </form>
    </div>
  </div>
</div>
</div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/verify.blade.php ENDPATH**/ ?>