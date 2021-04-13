<?php $__env->startSection('title', __('admin.dispute.add_dispute')); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="<?php echo e(route('admin.dispute.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>            	

                <div class="field">
                    <label for="dispute_type" class="label"><?php echo app('translator')->getFromJson('admin.dispute.dispute_type'); ?></label>
                    <div class="control">
                        <select name="dispute_type" class="input">
                            <option value="">Select</option>
                            <option value="user"><?php echo app('translator')->getFromJson('admin.user'); ?></option>
                            <option value="provider"><?php echo app('translator')->getFromJson('admin.provider'); ?></option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="dispute_name" class="label"><?php echo app('translator')->getFromJson('admin.dispute.dispute_name'); ?></label>
                    <div class="control">
                        <input  class="input" autocomplete="off"  type="text" value="<?php echo e(old('dispute_name')); ?>" name="dispute_name" required id="dispute_name" placeholder="<?php echo app('translator')->getFromJson('admin.dispute.dispute_name'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="dispute_status" class="label"><?php echo app('translator')->getFromJson('admin.dispute.dispute_status'); ?></label>
                    <div class="control">
                        <select name="dispute_status" class="input">
                            <option value="">Select</option>
                            <option value="active"><?php echo app('translator')->getFromJson('admin.active'); ?></option>
                            <option value="inactive"><?php echo app('translator')->getFromJson('admin.inactive'); ?></option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.dispute.add_dispute'); ?></button>
                        <a href="<?php echo e(route('admin.dispute.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/dispute/create.blade.php ENDPATH**/ ?>