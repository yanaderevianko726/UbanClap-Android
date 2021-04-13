<?php $__env->startSection('title', __('admin.dispute-manager.dispute_manager')); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box tables-card">
            <header class="box-header">
                <p class="box-header-title">
                    <?php if(Setting::get('demo_mode', 0) == 1): ?>
                    <div class="column" style="height:50px;color:red;">
                                ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if(Setting::get('demo_mode', 0) == 1): ?>
                            <span class="pull-right">(*personal information hidden in demo)</span>
                            <?php endif; ?>
                        
                </p>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-manager-create')): ?>
            <a href="<?php echo e(route('admin.dispute-manager.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.dispute-manager.add_new_dispute_manager'); ?></a>
            <?php endif; ?>
            </header>
<div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($account->name); ?></td>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td><?php echo e(substr($account->email, 0, 3).'****'.substr($account->email, strpos($account->email, "@"))); ?></td>
                        <?php else: ?>
                        <td><?php echo e($account->email); ?></td>
                        <?php endif; ?>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td>+919876543210</td>
                        <?php else: ?>
                        <td><?php echo e($account->mobile); ?></td>
                        <?php endif; ?>
                        <td>
                            <form action="<?php echo e(route('admin.dispute-manager.destroy', $account->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">
                                <a href="<?php echo e(route('admin.dispute-manager.edit', $account->id)); ?>" class="button is-info"><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
                                <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> <?php echo app('translator')->getFromJson('admin.delete'); ?></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </tfoot>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/dispute-manager/index.blade.php ENDPATH**/ ?>