<?php $__env->startSection('title', 'Receipt ofFrotas' ); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h3>Receipt ofFrotas</h3>

            <div class="row">

                <div class="row row-md mb-2" style="padding: 15px;">
                    <div class="col-md-12">
                        <div class="box bg-white">
                            <div class="box-block clearfix">
                                <h5 class="float-xs-left"><?php echo app('translator')->getFromJson('admin.include.fleet_ride_histroy'); ?></h5>
                                <div class="float-xs-right">
                                </div>
                            </div>

                            <?php if(count($Fleets) != 0): ?>
                            <table class="table is-striped is-bordered dataTable" id="table-4">
                                <thead>
                                    <tr>
                                        <td><?php echo app('translator')->getFromJson('admin.users.name'); ?></td>
                                        <td><?php echo app('translator')->getFromJson('admin.mobile'); ?></td>
                                        <td>Completed Trips</td>
                                        <td>Receipt</td>
                                        <td><?php echo app('translator')->getFromJson('admin.users.Joined_at'); ?></td>
                                        <td><?php echo app('translator')->getFromJson('admin.users.Details'); ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $diff = ['-success', '-info', '-warning', '-danger']; ?>
                                    <?php $__currentLoopData = $Fleets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $fleet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($fleet->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($fleet->mobile); ?>

                                        </td>

                                        <td>
                                            <?php if($fleet->rides_count): ?>
                                            <?php echo e($fleet->rides_count); ?>

                                            <?php else: ?>
                                            -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($fleet->payment): ?>
                                            <?php echo e(currency($fleet->payment[0]->overall)); ?>

                                            <?php else: ?>
                                            -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($fleet->created_at): ?>
                                            <span class="text-muted"><?php echo e($fleet->created_at->diffForHumans()); ?></span>
                                            <?php else: ?>
                                            -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.statement_fleet', $fleet->id)); ?>">View history</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <tfoot>
                                    <tr>
                                        <td><?php echo app('translator')->getFromJson('admin.users.name'); ?></td>
                                        <td><?php echo app('translator')->getFromJson('admin.mobile'); ?></td>
                                        <td>Completed Trips</td>
                                        <td>Receipt</td>
                                        <td><?php echo app('translator')->getFromJson('admin.users.Joined_at'); ?></td>
                                        <td><?php echo app('translator')->getFromJson('admin.users.Details'); ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <?php echo $__env->make('common.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php else: ?>
                            <h6 class="no-result">Resultados não encontrados</h6>
                            <?php endif; ?> 

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/providers/fleet-statement.blade.php ENDPATH**/ ?>