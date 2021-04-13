<?php $__env->startSection('title', __('admin.dispute.title1')); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <?php if(Setting::get('demo_mode', 0) == 1): ?>
                    <div class="column" style="height:50px;color:red;">
                        ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                    </div>
                <?php endif; ?>
                <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.dispute.title1'); ?></h5>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lost-item-create')): ?>
               <a href="<?php echo e(route('admin.userdisputecreate')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.dispute.add_dispute'); ?></a>
               <?php endif; ?>

                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_request'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.users.name'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_request_id'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_name'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_comments'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_refund'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_status'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $disputes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dispute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($dispute->dispute_type == "provider" ? "<?php echo app('translator')->getFromJson('admin.provider'); ?>" : "<?php echo app('translator')->getFromJson('admin.user'); ?>"); ?></td>
                            <td><?php if($dispute->dispute_type=='user'): ?> <?php if($dispute->user != null): ?> <?php echo e($dispute->user->first_name." ".$dispute->user->last_name); ?> <?php endif; ?> <?php else: ?>  <?php if($dispute->provider != null): ?>  <?php echo e($dispute->provider->first_name." ".$dispute->provider->last_name); ?> <?php endif; ?> <?php endif; ?></td>
                            <td><?php echo e($dispute->request->booking_id); ?></td>
                            <td><?php echo e($dispute->dispute_name); ?></td>
                            <td><?php echo e($dispute->comments); ?></td>
                            <td><?php echo e(currency($dispute->refund_amount)); ?></td>
                            <td>
                                <?php if($dispute->status=='open'): ?>
                                    <span class="tag tag-success">Aberta</span>
                                <?php else: ?>
                                    <span class="tag tag-danger">Finalizada</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-edit')): ?>
                                    <?php if($dispute->status=='open'): ?>
                                        <a href="<?php echo e(route('admin.userdisputeedit', $dispute->id)); ?>" href="#" class="button is-info"><i class="fa fa-pencil"></i> Analizar</a>
                                    <?php endif; ?>   
                                <?php endif; ?> 
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_request'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.users.name'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_request_id'); ?> </th>
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_name'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_comments'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_refund'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.dispute.dispute_status'); ?> </th>                           
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </tfoot>
                </table>
                <?php echo $__env->make('common.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $('#table-5').DataTable( {
        responsive: true,
        paging:false,
            info:false,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
    } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/userdispute/index.blade.php ENDPATH**/ ?>