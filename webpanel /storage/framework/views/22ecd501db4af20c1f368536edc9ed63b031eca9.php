<?php $__env->startSection('title', 'Profile '); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-9">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title"><?php echo app('translator')->getFromJson('user.profile.general_information'); ?></h4>
            </div>
        </div>
            <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row no-margin">
            <form>
                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.first_name'); ?></strong></h5>
                    <p class="col-md-6 no-padding"><?php echo e(Auth::user()->first_name); ?></p>                       
                </div>
                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.last_name'); ?></strong></h5>
                    <p class="col-md-6 no-padding"><?php echo e(Auth::user()->last_name); ?></p>                       
                </div>
                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.email'); ?></strong></h5>
                    <p class="col-md-6 no-padding"><?php echo e(Auth::user()->email); ?></p>
                </div>

                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.mobile'); ?></strong></h5>
                    <p class="col-md-6 no-padding"><?php echo e(Auth::user()->mobile); ?></p>
                </div>
               
                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.wallet_balance'); ?></strong></h5>
                    <p class="col-md-6 no-padding"><?php echo e(currency(Auth::user()->wallet_balance)); ?></p>
                </div>                  

                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.language'); ?></strong></h5>
                    <?php ($language=get_all_language()); ?>
                    <p class="col-md-6 no-padding">
                        <?php if(!empty($language[Auth::user()->language])): ?>
                        <?php echo e($language[Auth::user()->language]); ?>

                        <?php else: ?>
                        <?php echo e($language['en']); ?>

                        <?php endif; ?></p>
                </div>
                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.country_code'); ?></strong></h5>
                    <p class="col-md-6 no-padding"><?php echo e(Auth::user()->country_code); ?></p>
                </div> 
                <div class="col-md-6 pro-form">
                    <h5 class="col-md-6 no-padding"><strong><?php echo app('translator')->getFromJson('user.profile.qr_code'); ?></strong></h5>
                    <img src="<?php echo e(asset(Auth::user()->qrcode_url)); ?>">
                </div>  

                <div class="col-md-6 pro-form">
                    <a class="form-sub-btn" href="<?php echo e(url('edit/profile')); ?>"><?php echo app('translator')->getFromJson('user.profile.edit'); ?></a>
                </div>

            </form>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/account/profile.blade.php ENDPATH**/ ?>