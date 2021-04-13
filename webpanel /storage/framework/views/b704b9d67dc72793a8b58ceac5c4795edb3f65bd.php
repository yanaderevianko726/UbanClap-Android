<?php $__env->startSection('title', __('admin.document.document')); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box tables-card">
            <header class="box-header">
                <p class="box-header-title">
                    <?php if(Setting::get('demo_mode', 0) == 1): ?>
                    <div class="col-md-12" style="height:50px;color:red;">
                                ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if(Setting::get('demo_mode', 0) == 1): ?>
                            <span class="pull-right">(*personal information hidden in demo)</span>
                            <?php endif; ?>
                        
                </p>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-create')): ?>
                <a href="<?php echo e(route('admin.document.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.document.add_Document'); ?></a>
                <?php endif; ?>
            </header>
<table class="table is-striped is-bordered dataTable" id="table-2">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.document.document_name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.type'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($document->name); ?></td>
                            <td><?php echo e($document->type == "VEHICLE" ? __('admin.documents') : __('admin.provider')); ?></td>
                            <td>
                                <form action="<?php echo e(route('admin.document.destroy', $document->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-edit')): ?>
                                    <a href="<?php echo e(route('admin.document.edit', $document->id)); ?>" class="button is-info"><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-delete')): ?>
                                    <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> <?php echo app('translator')->getFromJson('admin.delete'); ?></button>
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
                            <th><?php echo app('translator')->getFromJson('admin.document.document_name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.type'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/document/index.blade.php ENDPATH**/ ?>