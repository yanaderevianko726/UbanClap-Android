<?php $__env->startSection('title', 'Provider Documents '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">

        <div class="box box-block bg-white">
            <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.provides.provider_name'); ?>: <?php echo e($Document->provider->first_name); ?> <?php echo e($Document->provider->last_name); ?></h5>
            <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.document.document_name'); ?>: <?php echo e($Document->document->name); ?></h5>
            <embed src="<?php echo e($Document->url!='' ? asset('storage/'.$Document->url): asset('asset/img/semfoto.jpg')); ?>" width="100%" height="100%" />

            <div class="columns">
                <div class="col-xs-6">
                    <form action="<?php echo e(route('admin.provider.document.update', [$Document->provider->id, $Document->id])); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PATCH')); ?>

                        <button class="button is-block btn-primary" type="submit"><?php echo app('translator')->getFromJson('admin.provides.approve'); ?></button>
                    </form>
                </div>

                <div class="col-xs-6">
                    <form action="<?php echo e(route('admin.provider.document.destroy', [$Document->provider->id, $Document->id])); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <button class="button is-block btn-danger" type="submit"><?php echo app('translator')->getFromJson('admin.provides.delete'); ?></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/providers/document/edit.blade.php ENDPATH**/ ?>