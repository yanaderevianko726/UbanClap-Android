<?php $__env->startSection('content'); ?>
<div class="pro-dashboard-head">
    <div class="container">
        <a href="<?php echo e(route('provider.profile.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.profile'); ?></a>
        <a href="<?php echo e(route('provider.documents.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.manage_documents'); ?></a>
        <a href="<?php echo e(route('provider.location.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.update_location'); ?></a>
        <a href="<?php echo e(route('provider.wallet.transation')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.wallet_transaction'); ?></a>
        <?php if(config('constants.card')==1): ?>
            <a href="<?php echo e(route('provider.cards')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.card.list'); ?></a>
        <?php endif; ?>    
        <a href="#" class="pro-head-link active"><?php echo app('translator')->getFromJson('provider.profile.transfer'); ?></a>
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
                            <?php echo app('translator')->getFromJson('provider.transfer'); ?>
                            (<?php echo app('translator')->getFromJson('provider.current_balance'); ?> : <?php echo e(currency($wallet_balance)); ?>)
                        </h3>
                    </div>
                    <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         <div class="row no-margin">
                                <div class="column no-padding">
                                    <div class="prof-form-sub-sec">
                                        <div class="row no-margin">
                                            <form class="profile-form" action="<?php echo e(route('provider.requestamount')); ?>" method="POST"  role="form" id="requestform">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="prof-sub-col column column no-left-padding">
                                                <div class="field">
                                                    <label><?php echo app('translator')->getFromJson('provider.amount'); ?></label>
                                                    <input type="hidden" name='type' value='provider'/> 
                                                    <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.amount'); ?>" name="amount" value="" required="">
                                                </div>
                                            </div>
                                            <div class="prof-sub-col col-sm-3 column no-right-padding">
                                                <div class="field">
                                                   <button type="submit" class="button is-block btn-primary update-link"><?php echo app('translator')->getFromJson('provider.transfer'); ?></button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   
                     <div class="manage-doc-section-content border-top">
                     <div class="tab-content list-content">
                        <div class="list-view pad30 ">
                            <table class="earning-table table table-responsive">
                                <thead>
                                    <tr>
                                        <th><?php echo app('translator')->getFromJson('provider.sno'); ?></th>
                                        <th><?php echo app('translator')->getFromJson('provider.transaction_ref'); ?></th>
                                        <th><?php echo app('translator')->getFromJson('provider.datetime'); ?></th>
                                        <th><?php echo app('translator')->getFromJson('provider.amount'); ?></th>
                                        <th><?php echo app('translator')->getFromJson('provider.status'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php ($total=0); ?>
                                   <?php $__currentLoopData = $pendinglist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$pending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php ($total+=$pending->amount); ?>
                                        <tr>
                                            <td><?php echo e($index+1); ?></td>
                                            <td><?php echo e($pending->alias_id); ?></td>
                                            <td><?php echo e($pending->created_at->diffForHumans()); ?></td>
                                            <td><?php echo e(currency($pending->amount)); ?></td>
                                            <td>
                                                <?php echo e($pending->status == '0' ? 'Pending' : 'Approved'); ?>

                                                <a href="<?php echo e(route('provider.requestcancel')); ?>?id=<?php echo e($pending->id); ?>" class="alert alert-danger" style="padding: 5px;"><i class="fa fa-close"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        </div>
                     </div>
                     </div>
               
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    <?php if($wallet_balance<=0): ?> 
        $("#requestform :input").prop("disabled", true);
    <?php elseif($total==$wallet_balance): ?>
        $("#requestform :input").prop("disabled", true);    
    <?php endif; ?>    
</script>    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('provider.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/wallet/transfer.blade.php ENDPATH**/ ?>