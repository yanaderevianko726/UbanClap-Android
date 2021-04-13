<?php $__env->startSection('title', __('admin.document.update_document')); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="<?php echo e(route('admin.document.update', $document->id )); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>

            	<input type="hidden" name="_method" value="PATCH">
				<div class="field">
					<label for="name" class="label"><?php echo app('translator')->getFromJson('admin.document.document_name'); ?></label>
					<div class="control">
						<input  class="input" type="text" value="<?php echo e($document->name); ?>" name="name" required id="name" placeholder="Nome do <?php echo app('translator')->getFromJson('admin.document.document_name'); ?>">
					</div>
				</div>

                <div class="field">
                    <label for="name" class="label"><?php echo app('translator')->getFromJson('admin.document.document_type'); ?></label>

                        <select class="input" name="type">
                            <option value="DRIVER" <?php if($document->type == 'DRIVER'): ?> selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.document.driver_review'); ?></option>
                            <option value="VEHICLE" <?php if($document->type == 'VEHICLE'): ?> selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.documents'); ?></option>
                        </select>

                </div>

				<div class="field">
					<label for="zipcode" class="label"></label>
					<div class="control">
						<button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.document.update_document'); ?></button>
						<a href="<?php echo e(route('admin.document.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/document/edit.blade.php ENDPATH**/ ?>