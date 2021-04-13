<?php $__env->startSection('title', __('admin.services')); ?>

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
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?>
                            <a href="<?php echo e(route('admin.service.create')); ?>" style="margin-left: 1em;"
                            class="button is-link pull-right"><i class="fa fa-plus"></i> Add New </a>
                        <?php endif; ?>
                    </header>
                   <table class="table is-striped is-bordered dataTable" id="table-2">
                        <div class="content">
                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                    <tr>
                        <th> ID </th>
                         <th> Service Name </th>
                         <!-- <th> Provider Name </th> -->
                         <th> Price Calculation </th>
                         <th> Image </th>
                         <th> Marker Map </th>
                         <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                <td><?php echo e($service->name); ?></td>
                            <!-- <td><?php echo e($service->provider_name); ?></td> -->
                                
                                <td><?php echo app('translator')->getFromJson('servicetypes.'.$service->calculator); ?></td>
                                <td>
                                    <?php if($service->image): ?>
                                        <img src="<?php echo e($service->image); ?>" style="height: 50px" >
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($service->marker): ?>
                                        <img src="<?php echo e($service->marker); ?>" style="height: 50px" >
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($service->parent_id != $service->parent_id-1): ?>
                                    <a class="button is-info btn-block" href="<?php echo e(url('admin/service/parent/'.$service->id)); ?>">Options</a>
                                    <?php endif; ?>
                                    <form action="<?php echo e(route('admin.service.destroy', $service->id)); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?>

                                        <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-edit')): ?>
                                                <a href="<?php echo e(route('admin.service.edit', $service->id)); ?>" class="button is-info btn-block">
                                                    <i class="fa fa-pencil"></i> <?php echo e(__('admin.edit')); ?>

                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-delete')): ?>
                                                <button class="button  is-danger is-link btn-block" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash"></i> <?php echo e(__('admin.delete')); ?>

                                                </button>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th> ID </th>
                        <th> Service Name </th>
                        <!-- <th> Provider Name </th> -->
                         <th>Price Calculation </th>
                         <th> Image </th>
                         <th> Marker Map </th>
                         <th> Action </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/service/sub_index.blade.php ENDPATH**/ ?>