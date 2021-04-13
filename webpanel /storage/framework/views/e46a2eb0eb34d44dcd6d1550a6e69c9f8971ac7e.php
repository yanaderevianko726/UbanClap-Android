<?php $__env->startSection('title', __('admin.promocode.promocodes')); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <?php if(Setting::get('demo_mode', 0) == 1): ?>
                    <div class="column" style="height:50px;color:red;">
                        ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                    </div>
                <?php endif; ?>
                <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.promocode.promocodes'); ?></h5>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promocodes-create')): ?>
                <a href="<?php echo e(route('admin.promocode.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.promocode.add_promocode'); ?></a>
                <?php endif; ?>

                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.promocode'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.percentage'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.max_amount'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.expiration'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.status'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.used_count'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $promocodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $promo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($promo->promo_code); ?></td>
                            <td><?php echo e($promo->percentage); ?></td>
                            <td><?php echo e($promo->max_amount); ?></td>
                            <td>
                                <?php echo e($promo->expiration); ?>

                            </td>
                            <td>
                                <?php if(date("Y-m-d H:i") <= $promo->expiration): ?>
                                    <span class="tag tag-success">Válido</span>
                                <?php else: ?>
                                    <span class="tag tag-danger">Expirado</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e(promo_used_count($promo->id)); ?>

                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.promocode.destroy', $promo->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promocodes-edit')): ?>
                                    <a href="<?php echo e(route('admin.promocode.edit', $promo->id)); ?>" class="button is-info"><i class="fa fa-pencil"></i> <?php echo e(__('admin.edit')); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promocodes-delete')): ?>
                                    <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> <?php echo e(__('admin.delete')); ?></button>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.promocode'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.percentage'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.max_amount'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.expiration'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.status'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.promocode.used_count'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/promocode/index.blade.php ENDPATH**/ ?>