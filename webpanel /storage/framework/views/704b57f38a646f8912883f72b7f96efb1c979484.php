<?php $__env->startSection('title', 'Admin Transactions'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1">Total Transactions (<?php echo app('translator')->getFromJson('provider.current_balance'); ?> : <?php echo e(currency($wallet_balance)); ?>)</h5>
                <table class="table is-striped is-bordered dataTable" id="table-4">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.sno'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.transaction_ref'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.datetime'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.transaction_desc'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.status'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.amount'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php ($page = ($pagination->currentPage-1)*$pagination->perPage); ?>
                       <?php $__currentLoopData = $wallet_transation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$wallet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php ($page++); ?>
                            <tr>
                                <td><?php echo e($page); ?></td>
                                <td><?php echo e($wallet->transaction_alias); ?></td>
                                <td><?php echo e($wallet->created_at->diffForHumans()); ?></td>
                                <td><?php echo e($wallet->transaction_desc); ?></td>
                                <td><?php echo e($wallet->type == 'C' ? 'Credit' : 'Debit'); ?></td>
                                <td><?php echo e(currency($wallet->amount)); ?>

                                </td>
                               
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo $__env->make('common.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <p style = "color: red;"> <?php echo e(config ('constants.booking_prefix', '')); ?> - Ride Transactions, PSET - Transaction from <?php echo app('translator')->getFromJson('admin.provider'); ?>, URC - Refills from <?php echo app('translator')->getFromJson('admin.user'); ?> </p></div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/wallet/wallet_transation.blade.php ENDPATH**/ ?>