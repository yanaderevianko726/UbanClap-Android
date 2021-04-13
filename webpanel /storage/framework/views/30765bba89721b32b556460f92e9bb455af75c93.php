<?php $__env->startSection('title', __('admin.notification.title')); ?>

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
            </p>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-create')): ?>
                <a href="<?php echo e(route('admin.notification.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.notification.add'); ?></a>
                <?php endif; ?>

            </header>
<div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_type'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_image'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_desc'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_status'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $notify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td>
                                <?php if($notify->notify_type == "user"): ?> 
                                    <?php echo app('translator')->getFromJson('admin.user'); ?>s
                                <?php elseif($notify->notify_type == "provider"): ?>
                                    <?php echo app('translator')->getFromJson('admin.provider'); ?>s
                                <?php else: ?>
                                    All
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($notify->image): ?> 
                                    <img src="<?php echo e($notify->image); ?>" style="height: 50px" >
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>    
                            <td><?php echo e($notify->description); ?> </td>

                            <td>
                                <?php if($notify->status=='active'): ?>
                                    <span class="tag tag-success"><?php echo app('translator')->getFromJson('admin.active'); ?></span>
                                <?php else: ?>
                                    <span class="tag tag-danger"><?php echo app('translator')->getFromJson('admin.inactive'); ?></span>
                                <?php endif; ?>
                            </td>
                           
                            <td>
                                <form action="<?php echo e(route('admin.notification.destroy', $notify->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-edit')): ?>
                                    <a href="<?php echo e(route('admin.notification.edit', $notify->id)); ?>" class="button is-info"><i class="fa fa-pencil"></i> <?php echo e(__('admin.edit')); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-delete')): ?>
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
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_type'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_image'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_desc'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.notification.notify_status'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
    </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/notification/index.blade.php ENDPATH**/ ?>