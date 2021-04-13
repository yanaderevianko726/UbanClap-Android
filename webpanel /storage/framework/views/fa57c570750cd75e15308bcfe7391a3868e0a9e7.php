<?php $__env->startSection('title', 'Adicionar Notificação '); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/bootstrap-datetimepicker.min.css')); ?>">
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="<?php echo e(URL::previous()); ?>" class="button is-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

            <h5 style="margin-bottom: 2em;"><?php echo app('translator')->getFromJson('admin.notification.add'); ?></h5>

            <form class="form-horizontal" action="<?php echo e(route('admin.notification.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>            	

                <div class="field">
                    <label for="notify_type" class="col-xs-2 label"><?php echo app('translator')->getFromJson('admin.notification.notify_type'); ?></label>
                    <div class="control">
                        <select name="notify_type" div class="control"
                            <option value="all">All</option>
                            <option value="user">Passageiros</option>
                            <option value="provider">Motoristas</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="picture" class="col-xs-2 label"><?php echo app('translator')->getFromJson('admin.notification.notify_image'); ?></label>
                    <div class="control">
                        <input type="file" accept="image/*" name="image" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="notify_desc" class="col-xs-2 label"><?php echo app('translator')->getFromJson('admin.notification.notify_desc'); ?></label>
                    <div class="control">
                        <input  class="input" autocomplete="off"  type="text" value="<?php echo e(old('description')); ?>" name="description" required id="description" placeholder="<?php echo app('translator')->getFromJson('admin.notification.notify_desc'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="expiry_date" class="col-xs-2 label"><?php echo app('translator')->getFromJson('admin.notification.notify_expiry'); ?></label>
                    <div class="control">
                        <input class="form-control datetimepicker" autocomplete="off"  type="text" value="<?php echo e(old('expiry_date')); ?>" name="expiry_date" required id="expiry_date" placeholder="<?php echo app('translator')->getFromJson('admin.notification.notify_expiry'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="notify_status" class="col-xs-2 label"><?php echo app('translator')->getFromJson('admin.notification.notify_status'); ?></label>
                    <div class="control">
                        <select name="status" div class="control"
                            <option value="active">Ativo</option>
                            <option value="inactive">Inativo</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="" class="col-xs-2 label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.notification.add'); ?></button>
                        <a href="<?php echo e(route('admin.notification.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('asset/js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('asset/js/moment-with-locales.min.js')); ?>"></script>
<script type="text/javascript">
$(document).ready(function () {
    //your code here
    $(function () {
        $('.datetimepicker').datetimepicker({defaultDate: moment(), minDate: moment(), format: 'YYYY-MM-DD HH:mm'});
    });
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/notification/create.blade.php ENDPATH**/ ?>