<?php $__env->startSection('title', __('admin.provider')); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="columns">
                <form class="column" action="<?php echo e(route('admin.provider.index')); ?>" method="get">
                
                    <div class="field columns" >
                        <div class="column is-10">
                            <input name="name" type="text" class="input" placeholder="name of <?php echo app('translator')->getFromJson('admin.provider'); ?>" aria-label="name of <?php echo app('translator')->getFromJson('admin.provider'); ?>" aria-describedby="basic-addon2">
                        </div>
    
                        
                        
                        <div class="column is-2">
                            <button class="button is-link" type="submit">Search</button>
                        </div>
                    </div>                
                </form>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-create')): ?>
                <div class="field cloumn is-2">
                    <div class="">
                        <a href="<?php echo e(route('admin.provider.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i><?php echo app('translator')->getFromJson('admin.provides.add_new_provider'); ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>          
            
            <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-narrow is-striped">
                <thead>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.provides.full_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.Wallet_Amount'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.provides.total_requests'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.provides.accepted_requests'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.created_at'); ?></th>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-documents')): ?>
                        <th><?php echo app('translator')->getFromJson('admin.provides.service_type'); ?></th>
                        <?php endif; ?>
                        <th><?php echo app('translator')->getFromJson('admin.provides.online'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php ($page = ($pagination->currentPage-1)*$pagination->perPage); ?>
                <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php ($page++); ?>
                    <tr>
                        <td><?php echo e($page); ?></td>
                        <td><?php echo e($provider->first_name); ?> <?php echo e($provider->last_name); ?></td>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td><?php echo e(substr($provider->email, 0, 3).'****'.substr($provider->email, strpos($provider->email, "@"))); ?></td>
                        <?php else: ?>
                        <td><?php echo e($provider->email); ?></td>
                        <?php endif; ?>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td>+919876543210</td>
                        <?php else: ?>
                        <td><?php echo e($provider->mobile); ?></td>
                        <?php endif; ?>
                        <td>
                            <?php if($provider->wallet_balance < 0): ?>
                                <label style="cursor: default;" class="btn small btn-block btn-danger"><?php echo e(currency($provider->wallet_balance)); ?></label>
                            <?php elseif($provider->wallet_balance == 0): ?>
                                <label style="cursor: default;" class="btn small btn-block btn-warning"><?php echo e(currency($provider->wallet_balance)); ?></label>
                            <?php else: ?>
                                <label style="cursor: default;" class="btn small btn-block btn-success"><?php echo e(currency($provider->wallet_balance)); ?></label>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($provider->total_requests()); ?></td>
                        <td><?php echo e($provider->accepted_requests()); ?></td>
                        <td><?php echo e($provider->created_at->format('d/m/Y H:i:s')); ?></td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-documents')): ?>
                        <td>
                            <?php if($provider->active_documents() == $total_documents && $provider->service != null): ?>
                                 <a class="button is-success btn-block" href="<?php echo e(route('admin.provider.document.index', $provider->id )); ?>">Verified</a>
                            <?php else: ?>
                                <a class="button  is-danger is-link btn-block label-right" href="<?php echo e(route('admin.provider.document.index', $provider->id )); ?>">Pending <span class="btn-label"> [<?php echo e($provider->pending_documents()); ?>]</span></a>
                            <?php endif; ?>
                        </td>
                        <?php endif; ?>
                        <td>
                            <?php if($provider->service): ?>
                                <?php if($provider->service->status == 'active'): ?>
                                    <label class="button is-block btn-primary">Yes</label>
                                <?php else: ?>
                                    <label class="button is-block btn-warning">No</label>
                                <?php endif; ?>
                            <?php else: ?>
                                <label class="button is-block btn-danger">N/A</label>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="input-group-btn">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-status')): ?>
                                <?php if($provider->status == 'approved'): ?>
                                <a class="button  is-danger is-link btn-block" href="<?php echo e(route('admin.provider.disapprove', $provider->id )); ?>">Disable</a>
                                <?php else: ?>
                                <a class="button is-success btn-block" href="<?php echo e(route('admin.provider.approve', $provider->id )); ?>">Approve</a>
                                <?php endif; ?>
                                <?php endif; ?>
                            <?php if($user->hasAnyPermission(['provider-history', 'provider-statements', 'provider-edit','provider-delete'])): ?>
                            <div class="dropdown is-hoverable">
                                <div class="dropdown-trigger">
                                  <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span><?php echo app('translator')->getFromJson('admin.action'); ?></span>
                                    <span class="icon is-small">
                                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                  </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                  <div class="dropdown-content">
                                    <div class="dropdown-item">
                                        <ul class="button-dropdown">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-history')): ?>
                                            <li>
                                                <a href="<?php echo e(route('admin.provider.request', $provider->id)); ?>" ><i class="fa fa-search"></i> <?php echo app('translator')->getFromJson('admin.History'); ?></a>
                                            </li>
                                            <?php endif; ?>
                                                <li>
                                                    <a href="<?php echo e(route('admin.provider.password', $provider->id)); ?>" ><i class="fa fa-user-secret"></i> <?php echo app('translator')->getFromJson('admin.provides.password'); ?></a>
                                                </li>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-statements')): ?>
                                            <li>
                                                <a href="<?php echo e(route('admin.provider.statement', $provider->id)); ?>" ><i class="fa fa-account"></i> <?php echo app('translator')->getFromJson('admin.Statements'); ?></a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-edit')): ?>
                                            <li>
                                                <a href="<?php echo e(route('admin.provider.edit', $provider->id)); ?>" ><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
                                            </li>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-delete')): ?>
                                            <li>
                                                <form action="<?php echo e(route('admin.provider.destroy', $provider->id)); ?>" method="POST">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                                    <button class="look-a-like" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i><?php echo app('translator')->getFromJson('admin.delete'); ?></button>
                                                    <?php endif; ?>
                                                </form>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                
                            <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.provides.full_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.Wallet_Amount'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.provides.total_requests'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.provides.accepted_requests'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.users.created_at'); ?></th>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-documents')): ?>
                        <th><?php echo app('translator')->getFromJson('admin.provides.service_type'); ?></th>
                        <?php endif; ?>
                        <th><?php echo app('translator')->getFromJson('admin.provides.online'); ?></th>
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
                url: "<?php echo e(url('admin/provider')); ?>?page=all&<?php echo e(request()->has('fleet')?'fleet='.request()->get('fleet'):''); ?>",
                data: {},
                success: function (result) {
                    p = new Array();
                    $.each(result.data, function (i, d)
                    {
                        var item = [d.id,d.first_name +' '+ d.last_name, d.email,d.mobile,d.rating, d.wallet_balance];
                        p.push(item);
                    });
                },
                async: false
            });
            var head=new Array();
            head.push("ID", "Nome", "Email", "Mobile", "Rating", "Wallet");
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