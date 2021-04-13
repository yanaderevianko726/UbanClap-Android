<?php $__env->startSection('title', __('admin.user').'s'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            
            <form action="<?php echo e(route('admin.user.index')); ?>" method="get">
                <div class="field columns" style="padding-left:0 !important; padding-right:0 !important; margin-bottom: 20px;">
                    <div class="column is-6">
                        <input name="name" type="text"  class="input" placeholder="Name of <?php echo app('translator')->getFromJson('admin.user'); ?> or Email" aria-label="Name of <?php echo app('translator')->getFromJson('admin.user'); ?>" aria-describedby="basic-addon2">
                    </div>

                    <div class="column is-3">
                        <button class="button is-link" type="submit">Search</button>
                    </div>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
                    <div class="column is-3">
                        <a href="<?php echo e(route('admin.user.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> Add User</a>

                    </div>
                    <?php endif; ?>
                </div>
            </form>
           
            <div class="table-container">
                <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.first_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.last_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.Rating'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.Wallet_Amount'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php ($page = ($pagination->currentPage-1)*$pagination->perPage); ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($page++); ?>
                    <tr>
                        <td><?php echo e($page); ?></td>
                        <td><?php echo e($user->first_name); ?></td>
                        <td><?php echo e($user->last_name); ?></td>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td><?php echo e(substr($user->email, 0, 3).'****'.substr($user->email, strpos($user->email, "@"))); ?></td>
                        <?php else: ?>
                        <td><?php echo e($user->email); ?></td>
                        <?php endif; ?>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td>+919876543210</td>
                        <?php else: ?>
                        <td><?php echo e($user->mobile); ?></td>
                        <?php endif; ?>
                        <td><?php echo e($user->rating); ?></td>
                        <td><?php echo e(currency($user->wallet_balance)); ?></td>
                        <td>
                            <form action="<?php echo e(route('admin.user.destroy', $user->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-history')): ?>
                                <a href="<?php echo e(route('admin.user.request', $user->id)); ?>" class="button is-info"><i class="fa fa-search"></i> <?php echo app('translator')->getFromJson('admin.History'); ?></a>
                                <?php endif; ?>
                                <?php if( Setting::get('demo_mode', 0) == 0): ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
                                <a href="<?php echo e(route('admin.user.edit', $user->id)); ?>" class="button is-info"><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
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
                        <th><?php echo app('translator')->getFromJson('admin.first_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.last_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.Rating'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.Wallet_Amount'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </tfoot>
            </table>
            <?php echo $__env->make('common.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    jQuery.fn.DataTable.Api.register( 'buttons.exportData()', function ( options ) {
        if ( this.context.length ) {
            var jsonResult = $.ajax({
                url: "<?php echo e(url('admin/user')); ?>?page=all",
                data: {},
                success: function (result) {
                    p = new Array();
                    $.each(result.data, function (i, d)
                    {
                        var item = [d.id,d.first_name, d.last_name, d.email,d.mobile,d.rating, d.wallet_balance];
                        p.push(item);
                    });
                },
                async: false
            });
            var head=new Array();
            head.push("ID", "First Name", "Last Name", "Email", "Mobile", "Rating", "Wallet Amount");
            return {body: p, header: head};
        }
    } );

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

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>