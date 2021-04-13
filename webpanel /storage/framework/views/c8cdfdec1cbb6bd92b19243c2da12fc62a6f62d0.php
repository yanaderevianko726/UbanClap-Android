<?php $__env->startSection('title', "Stripe Plan"); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="<?php echo e(route('admin.stripe.update', $service->id )); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="name" class="label"><?php echo app('translator')->getFromJson('admin.service.Service_Name'); ?></label>
                    <div class="control">
                        <input  class="input" type="text" value="<?php echo e($service->nickname); ?>" name="name" required id="name" placeholder="name">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="label"><?php echo app('translator')->getFromJson('admin.service.Service_Name'); ?></label>
                    <div class="control">
                        <input  class="input" type="number" value="<?php echo e($service->amount); ?>" name="amount" required id="amount" placeholder="amount">
                    </div>
                </div>
                <div class="field">
                    <div class="column col-sm-6 col-md-3">
                        <button type="submit" class="button is-link btn-block">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>