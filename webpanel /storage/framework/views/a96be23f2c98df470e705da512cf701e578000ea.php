<?php $__env->startSection('title', __('admin.account.update_profile')); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>


                <div class="field">
                    <label for="name" class="label"><?php echo app('translator')->getFromJson('admin.name'); ?></label>
                    <div class="control">
                        <input  class="input" type="text" value="<?php echo e(Auth::guard('admin')->user()->name); ?>" name="name" required id="name" placeholder=" <?php echo app('translator')->getFromJson('admin.name'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label"><?php echo app('translator')->getFromJson('admin.email'); ?></label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="<?php echo e(isset(Auth::guard('admin')->user()->email) ? Auth::guard('admin')->user()->email : ''); ?>" id="email" placeholder="<?php echo app('translator')->getFromJson('admin.email'); ?>">
                    </div>
                </div>
                
                <div class="field">
                <label for="picture" class="label"><?php echo app('translator')->getFromJson('admin.picture'); ?></label>
                    <div class="file">
                        <?php if(isset(Auth::guard('admin')->user()->picture)): ?>
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="<?php echo e(img(Auth::guard('admin')->user()->picture)); ?>">
                        <?php endif; ?>
                         <input type="file" accept="image/*" name="picture" class="dropify is-center input-file" aria-describedby="fileHelp">
                    </div> 
                </div>
                        <div class="field">
                            <label for="zipcode" class="label"></label>
                            <div class="control">
                                <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.account.update_profile'); ?></button>
                            </div>
                        </div>
                    </div>

                </div>


            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    <script>
      $('.dropify').dropify();  
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/account/profile.blade.php ENDPATH**/ ?>