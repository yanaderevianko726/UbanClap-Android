<?php $__env->startSection('content'); ?>
<div class="pro-dashboard-head">
    <div class="container">
        <a href="<?php echo e(route('provider.profile.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.profile'); ?></a>
        <a href="#" class="pro-head-link active"><?php echo app('translator')->getFromJson('provider.profile.manage_documents'); ?></a>
        <a href="<?php echo e(route('provider.location.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.update_location'); ?></a>
        <a href="<?php echo e(route('provider.wallet.transation')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.wallet_transaction'); ?></a>
        <?php if(config('constants.card')==1): ?>
            <a href="<?php echo e(route('provider.cards')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.card.list'); ?></a>
        <?php endif; ?>    
        <a href="<?php echo e(route('provider.transfer')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.transfer'); ?></a>
        <?php if(config('constants.referral')==1): ?>
            <a href="<?php echo e(route('provider.referral')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.refer_friend'); ?></a>
        <?php endif; ?>
    </div>
</div>

<div class="pro-dashboard-content gray-bg">
    <div class="container">
        <div class="manage-docs pad30">
            <div class="manage-doc-content">
                <div class="manage-doc-section pad50">
                    <div class="manage-doc-section-head row no-margin">
                        <h3 class="manage-doc-tit">
                            <?php echo app('translator')->getFromJson('provider.profile.driver_document'); ?>
                        </h3>
                    </div>
                    <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="manage-doc-section-content">
                        <?php $__currentLoopData = $DriverDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="manage-doc-box row no-margin border-top">
                            <div class="column">
                                <div class="manage-doc-box-left">
                                    <p class="manage-txt"><?php echo e($Document->name); ?></p>
                                    <p class="license"><?php echo app('translator')->getFromJson('provider.expires'); ?>: <?php echo e($Provider->document($Document->id) ? ($Provider->document($Document->id)->expires_at ? $Provider->document($Document->id)->expires_at: 'N/A') : 'N/A'); ?></p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="manage-doc-box-center text-center">
                                    <p class="manage-badge <?php echo e($Provider->document($Document->id) ? ($Provider->document($Document->id)->status == 'ASSESSING' ? 'yellow-badge' : 'green-badge') : 'red-badge'); ?>">
                                        <?php if($Provider->document($Document->id)): ?>
                                            <?php if($Provider->document($Document->id)->status == "ASSESSING"): ?><?php echo e("ASSESSING"); ?>

                                            <?php elseif($Provider->document($Document->id)->status == "ACTIVE"): ?> <?php echo e("ACTIVE"); ?>

                                            <?php elseif($Provider->document($Document->id)->status == "MISSING"): ?> <?php echo e("NOT SUBMITTED"); ?> <?php endif; ?>
                                        <?php else: ?> <?php echo e("NOT SENT"); ?> <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="manage-doc-box-right text-right">
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <form action="<?php echo e(route('provider.documents.update', $Document->id)); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('PATCH')); ?>

                                            <div class="input" data-trigger="fileinput">
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon button is-default btn-file fileinput-exists btn-submit">
                                                <button>
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </span>
                                            <span class="input-group-addon button is-default btn-file">
                                                <span class="fileinput-new upload-link">
                                                    <i class="fa fa-upload upload-icon"></i> <?php echo app('translator')->getFromJson('provider.profile.upload'); ?>
                                                </span>
                                                <span class="fileinput-exists">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <input type="file" name="document" accept="application/pdf, image/*">
                                            </span>
                                            <a href="#" class="input-group-addon button is-default fileinput-exists" data-dismiss="fileinput">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="manage-doc-section">
                    <div class="manage-doc-section-head row no-margin">
                        <h3 class="manage-doc-tit">
                           <?php echo app('translator')->getFromJson('provider.profile.vehicle_document'); ?>
                        </h3>
                    </div>

                    <div class="manage-doc-section-content">
                        <?php $__currentLoopData = $VehicleDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="manage-doc-box row no-margin border-top">
                            <div class="column">
                                <div class="manage-doc-box-left">
                                    <p class="manage-txt"><?php echo e($Document->name); ?></p>
                                    <p class="license"><?php echo app('translator')->getFromJson('provider.expires'); ?>: <?php echo e($Provider->document($Document->id) ? ($Provider->document($Document->id)->expires_at ? $Provider->document($Document->id)->expires_at: 'N/A'): 'N/A'); ?></p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="manage-doc-box-center text-center">
                                    <p class="manage-badge <?php echo e($Provider->document($Document->id) ? ($Provider->document($Document->id)->status == 'ASSESSING' ? 'yellow-badge' : 'green-badge') : 'red-badge'); ?>">
                                        <?php if($Provider->document($Document->id)): ?>
                                            <?php if($Provider->document($Document->id)->status == "ASSESSING"): ?><?php echo e("ASSESSING"); ?>

                                            <?php elseif($Provider->document($Document->id)->status == "ACTIVE"): ?> <?php echo e("ACTIVE"); ?>

                                            <?php elseif($Provider->document($Document->id)->status == "MISSING"): ?> <?php echo e("NOT SUBBMITED"); ?> <?php endif; ?>
                                        <?php else: ?> <?php echo e("NOT SENT"); ?> <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="manage-doc-box-right text-right">
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <form action="<?php echo e(route('provider.documents.update', $Document->id)); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('PATCH')); ?>

                                            <div class="input" data-trigger="fileinput">
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon button is-default btn-file fileinput-exists btn-submit">
                                                <button>
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </span>
                                            <span class="input-group-addon button is-default btn-file">
                                                <span class="fileinput-new upload-link">
                                                    <i class="fa fa-upload upload-icon"></i> <?php echo app('translator')->getFromJson('provider.profile.upload'); ?>
                                                </span>
                                                <span class="fileinput-exists">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <input type="file" name="document" accept="application/pdf, image/*">
                                            </span>
                                            <a href="#" class="input-group-addon button is-default fileinput-exists" data-dismiss="fileinput">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('asset/css/jasny-bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
<style type="text/css">
    .fileinput .btn-file {
        padding:0;
        background-color: #fff;
        border: 0;
        border-radius:0!important;
    }
    .fileinput .form-control {
        border: 0;
        box-shadow : none;
        border-left:0;
        border-right:5px;
    }
    .fileinput .upload-link {
        border:0;
        border-radius: 0;
        padding:0;
    }
    .input-group-addon.btn {
        background: #fff;
        border: 1px solid #37b38b;
        border-radius: 0; 
        padding: 10px;
        height: 40px;
        line-height: 20px;
    }
    .fileinput .fileinput-filename {
        font-size: 10px;
    }
    .fileinput .btn-submit {
        padding: 0;
    }
    .fileinput button {
        background-color: white;
        border: 0;
        padding: 10px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('asset/js/jasny-bootstrap.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('provider.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/document/index.blade.php ENDPATH**/ ?>