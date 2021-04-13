<?php $__env->startSection('title', "Stripe Plan"); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="<?php echo e(route('admin.stripe.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="column">
                        <input  class="input" type="text" value="<?php echo e(old('name')); ?>" name="name" required id="name" placeholder="name">
                    </div>
                </div>

                <div class="field">
                    <label for="amount" class="label"><?php echo app('translator')->getFromJson('admin.service.Service_Name'); ?></label>
                    <div class="column">
                        <input  class="input" type="number" value="<?php echo e(old('amount')); ?>" name="amount" required id="amount" placeholder="amount">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <div class="columns">
                            <div class="column col-sm-6 col-md-3">
                                <button type="submit" class="button is-link btn-block">Create</button>
                            </div>
                        </div>
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