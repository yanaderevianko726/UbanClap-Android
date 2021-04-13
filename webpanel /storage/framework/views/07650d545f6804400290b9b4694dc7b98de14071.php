<?php $__env->startSection('title', __('admin.dispute.update_dispute')); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

			<h5 style="margin-bottom: 2em;"><?php echo app('translator')->getFromJson('admin.dispute.update_dispute'); ?></h5>

            <form  action="<?php echo e(route('admin.dispute.update', $dispute->id )); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>

            	<input type="hidden" name="_method" value="PATCH">				
				
				<div class="field">
					<label for="dispute_type" class="label"><?php echo app('translator')->getFromJson('admin.dispute.dispute_type'); ?></label>
					<div class="control">
						<select name="dispute_type" class="input">
							<option value="user" <?php if($dispute->dispute_type=='user'): ?>selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.user'); ?></option>
							<option value="provider" <?php if($dispute->dispute_type=='provider'): ?>selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.provider'); ?></option>
						</select>
					</div>
				</div>

				<div class="field">
					<label for="dispute_name" class="label"><?php echo app('translator')->getFromJson('admin.dispute.dispute_name'); ?></label>
					<div class="control">
						<input  class="input" autocomplete="off"  type="text" value="<?php echo e($dispute->dispute_name); ?>" name="dispute_name" required id="dispute_name" placeholder="<?php echo app('translator')->getFromJson('admin.dispute.dispute_name'); ?>">
					</div>
				</div>

				<div class="field">
					<label for="dispute_status" class="label"><?php echo app('translator')->getFromJson('admin.dispute.dispute_status'); ?></label>
					<div class="control">
						<select name="dispute_status" class="input">
							<option value="active" <?php if($dispute->status=='active'): ?>selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.active'); ?></option>
							<option value="inactive" <?php if($dispute->status=='inactive'): ?>selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.inactive'); ?></option>
						</select>
					</div>
				</div>

				<div class="field">
					<label for="" class="label"></label>
					<div class="control">
						<button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.dispute.update_dispute'); ?></button>
						<a href="<?php echo e(route('admin.dispute.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/dispute/edit.blade.php ENDPATH**/ ?>