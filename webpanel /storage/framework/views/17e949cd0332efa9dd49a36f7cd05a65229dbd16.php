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
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?>
                    <a href="<?php echo e(route('admin.service.create')); ?>" style="margin-left: 1em;" class="button is-link is-right"><i
                            class="fa fa-plus"></i> Add New Service</a>
                    <?php endif; ?>
                </p>
            </header>
            <div class="container is-fluid">
                <div class="columns is-multiline">
                    
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="column ">
                <div class="card">
                    
                    <div class="card-content">
                      <div class="media">
                        <div class="media-left">
                          <figure class="image is-48x48">
                            <img src="<?php echo e($service->image); ?>" alt="Placeholder image">
                          </figure>
                        </div>
                        <div class="media-content">
                          <p class="title is-6"><?php echo e($service->name); ?></p>
                        </div>
                      </div>
                  
                      <div class="content">
                        <?php echo e($service->description); ?> <br>
                        sub services : <b> <?php echo e(count($service->childrenRecursive)); ?> </b> 
                        <br>
                        
                      </div>
                    </div>
                    <footer class="card-footer">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?>
                        <a href="<?php echo e(url('/').'/admin/subservice/'.$service->id); ?>"
                            class="card-footer-item"><i class="fa fa-sun-o"></i> </a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?>
                            <a href="<?php echo e(route('admin.service.create').'?parent_id='.$service->id); ?>"
                                class="card-footer-item"><i class="fa fa-plus"></i> </a>
                            <?php endif; ?>
                            <?php if( Setting::get('demo_mode', 0) == 0): ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-edit')): ?>
                            <a href="<?php echo e(route('admin.service.edit', $service->id)); ?>"
                                class="card-footer-item is-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <?php endif; ?>
                        <form action="<?php echo e(route('admin.service.destroy', $service->id)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-delete')): ?>
                            <a class="card-footer-item  is-danger is-link"
                                onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i> 
                        </a>
                            <?php endif; ?>
                            <?php endif; ?>
                        </form>
                        
                      </footer>
                  </div>
                

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
           
                
                        
                        

                            
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>