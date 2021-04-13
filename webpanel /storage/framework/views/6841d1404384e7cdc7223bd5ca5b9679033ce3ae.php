<?php $__env->startSection('title', __('admin.provides.type_allocation')); ?>

<?php $__env->startSection('content'); ?>
<!-- Alterado por Allan -->
    <div class="content-area py-1">
        <div class="container-fluid">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-services')): ?>
                <div class="box box-block bg-white">
                    <div class="columns">
                        <div class="column">
                    <h4 class="mb-1"><?php echo app('translator')->getFromJson('admin.provides.type_allocation'); ?></h4>
                    <h5><?php echo app('translator')->getFromJson('admin.provider'); ?>: <b><?php echo e($Provider->first_name); ?> <?php echo e($Provider->last_name); ?></b> </h5>
                    
                        </div>
                        <div class="column">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-status')): ?>
                    <?php if($Provider->status == 'approved'): ?>
                    <a style="margin-left: 1em;" class="button  is-danger is-link pull-right" href="<?php echo e(route('admin.provider.disapprove', $Provider->id )); ?>"><i class="fa fa-power-off"></i> Disable <?php echo app('translator')->getFromJson('admin.provider'); ?></a>
                    <?php else: ?>
                    <a style="margin-left: 1em;" class="button is-success pull-right" href="<?php echo e(route('admin.provider.approve', $Provider->id )); ?>"><i class="fa fa-check"></i> Aprove <?php echo app('translator')->getFromJson('admin.provider'); ?></a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <a href="<?php echo e($backurl); ?>" style="margin-left: 1em;"
                       class="button is-link pull-right"><i class="fa fa-arrow-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <?php if($ProviderService->count() > 0): ?>
                                <hr><h6>Assigned Services: </h6>
                                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                                    <thead>
                                    <tr>
                                        <th><?php echo app('translator')->getFromJson('admin.provides.service_name'); ?></th>
                                        
                                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $ProviderService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($service->service_type->name); ?></td>
                                            
                                            <td>
                                                <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                                    <form action="<?php echo e(route('admin.provider.document.service', [$Provider->id, $service->id])); ?>"
                                                          method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-service-delete')): ?>
                                                            <button class="button  is-danger is-link btn-large btn-block"><?php echo app('translator')->getFromJson('admin.delete'); ?></a><?php endif; ?>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th><?php echo app('translator')->getFromJson('admin.provides.service_name'); ?></th>
                                        
                                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                                    </tr>
                                    </tfoot>
                                </table>
                                </div>
                            <?php endif; ?>
                            <hr>
                        </div>
                    </div>
                    <div class="columns">
                        <?php if($ProviderService->count() >= 1): ?>
                        <div class="column">
                            <h3 style="margin-bottom: 5px; font-size: 15px;">Update Service</h3>
                        <form action="<?php echo e(route('admin.provider.document.store', $Provider->id)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" required name="method" value="update">
                            <div class="column">
                                <select class="form-control input" name="service_type" required>
                                    <?php $__empty_1 = true; $__currentLoopData = $ServiceTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($Type->id); ?>"><?php echo e($Type->fleet->name); ?> - <?php echo e($Type->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option>- <?php echo app('translator')->getFromJson('admin.service_select'); ?> -</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            
                            <input type="hidden" required name="service_number" class="input" placeholder="" value="<?php echo e($Type->name); ?>">
                            <input type="hidden" required name="service_model" class="input" placeholder="" value="<?php echo e($Type->name); ?>">
                            <?php if( Setting::get('demo_mode', 0) == 0): ?>
                            <div class="column">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-service-update')): ?>
                                <button class="button is-link btn-block" type="submit">Update</button>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                        <?php endif; ?>
                        <div class="column">
                            <h3 style="margin-bottom: 5px; font-size: 15px;">Add Service </h3>
                        <form action="<?php echo e(route('admin.provider.document.store', $Provider->id)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" required name="method" value="create">
                            <div class="column">
                                <select class="form-control input" name="service_type" required>
                                    <?php $__empty_1 = true; $__currentLoopData = $ServiceTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($Type->id); ?>"> <?php echo e($Type->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option><?php echo app('translator')->getFromJson('admin.service_select'); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            
                                <input type="hidden" required name="service_number" class="input" placeholder="" value="<?php echo e($Type->name); ?>">
                            
                            
                                <input type="hidden" required name="service_model" class="input" placeholder="" value="<?php echo e($Type->name); ?>">
                            
                            <?php if( Setting::get('demo_mode', 0) == 0): ?>
                            <div class="column">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-service-update')): ?>
                                <button class="button is-success btn-block" type="submit">Add</button>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-documents')): ?>
                <div class="box box-block bg-white">
                    <h5 class="mb-1">
                        <?php echo app('translator')->getFromJson('admin.provides.provider_documents'); ?><br>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-status')): ?>
                            <?php if($Provider->status != 'approved'): ?>
                                <?php if($Provider->documents()->count()): ?>
                                    <?php if($Provider->documents->last()->status == "ACTIVE"): ?>
                                        <a class="button is-success btn-block"
                                           href="<?php echo e(route('admin.provider.approve', $Provider->id )); ?>">Aprove</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </h5>
                    <?php if( Setting::get('demo_mode', 0) == 0): ?>
                        <?php if(count($Provider->documents)>0): ?>
                            <a href="<?php echo e(route('admin.download', $Provider->id)); ?>" style="margin-left: 1em;"
                               class="button is-link pull-right"><i
                                        class="fa fa-download"></i> <?php echo app('translator')->getFromJson('admin.provides.download'); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo app('translator')->getFromJson('admin.provides.document_type'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.status'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $Provider->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Index => $Document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($Index + 1); ?></td>
                                <td><?php if($Document->document): ?><?php echo e($Document->document->name); ?><?php endif; ?></td>
                                <td><?php if($Document->status == "ACTIVE"): ?><?php echo e("APPROVED"); ?><?php else: ?> <?php echo e("PENDING APPROVAL"); ?> <?php endif; ?></td>
                                <td>
                                    <div class="input-group-btn">
                                        <?php if( Setting::get('demo_mode', 0) == 0): ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-document-edit')): ?>
                                                <a href="<?php echo e(route('admin.provider.document.edit', [$Provider->id, $Document->id])); ?>"><span
                                                            class="button is-success btn-large"><?php echo app('translator')->getFromJson('admin.view'); ?></span></a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-document-delete')): ?>
                                                <button class="button  is-danger is-link btn-large doc-delete"
                                                        id="<?php echo e($Document->id); ?>"><?php echo app('translator')->getFromJson('admin.delete'); ?></button>
                                                <form action="<?php echo e(route('admin.provider.document.destroy', [$Provider->id, $Document->id])); ?>"
                                                      method="POST" id="form_delete_<?php echo e($Document->id); ?>">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th><?php echo app('translator')->getFromJson('admin.provides.document_type'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.status'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(".doc-delete").on('click', function () {
            var doc_id = $(this).attr('id');
            $("#form_delete_" + doc_id).submit();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/providers/document/index.blade.php ENDPATH**/ ?>