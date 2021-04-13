<?php $__env->startSection('title', 'Motivos de Cancelamento '); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <?php if(Setting::get('demo_mode', 0) == 1): ?>
                    <div class="col-md-12" style="height:50px;color:red;">
                        ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                    </div>
                <?php endif; ?>
                <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.reason.title'); ?></h5>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-create')): ?>
                <a href="<?php echo e(route('admin.reason.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.reason.add_reason'); ?></a>
                <?php endif; ?>

                <table class="table is-striped is-bordered dataTable" id="table-2">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.reason.type'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.reason.reason'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.reason.status'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($reason->type == "PROVIDER" ? "MOTORISTA" : "PASSAGEIRO"); ?></td>
                            <td><?php echo e($reason->reason); ?></td>
                            <td>
                                <?php if($reason->status==1): ?>
                                    <span class="tag tag-success">Ativo</span>
                                <?php else: ?>
                                    <span class="tag tag-danger">Inativo</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.reason.destroy', $reason->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-edit')): ?>
                                    <a href="<?php echo e(route('admin.reason.edit', $reason->id)); ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-delete')): ?>
                                    <button class="btn btn-danger" onclick="return confirm('Você tem certeza?')"><i class="fa fa-trash"></i> Delete</button>
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
                            <th><?php echo app('translator')->getFromJson('admin.reason.type'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.reason.reason'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.reason.status'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/reason/index.blade.php ENDPATH**/ ?>