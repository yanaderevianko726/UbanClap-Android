<?php $__env->startSection('title', 'Add Banner'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">

            <form class="form-horizontal cloumns" action="<?php echo e(route('admin.banner.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
            	<?php echo e(csrf_field()); ?>

				<div class="form-group column">
					<label for="image" class="col-xs-12 col-form-label">Banner Image</label>
					<div class="col-xs-10">
						<input type="file" accept="image/*" name="image" class="dropify form-control-file" id="image" aria-describedby="fileHelp">
					</div>
				</div>
				<div class="field">
                    <label for="email" class="label">Video URL</label>
                    <div class="control">
                        <input  class="input" type="text" required name="video" value="" id="video" placeholder="Youtube or other URL">
                    </div>
                </div>
				<div class="form-group column">
					<label for="name">Status</label>
					<div class="select">
						<select id="status" name="status" class="form-control">
							<option value="">Choose Status</option>
							<option value="active" >Active</option>
							<option value="inactive" selected >Inactive</option>
						</select>
					</div>
                    
                </div>
				<div class="form-group column">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="">
						<button type="submit" class="button is-info">Add Banner</button>
						<a href="<?php echo e(route('admin.banner.index')); ?>" class="button is-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>