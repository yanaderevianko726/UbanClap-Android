<?php $__env->startSection('title', __('admin.review.User_Reviews')); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.review.User_Reviews'); ?></h5>
                <table class="table is-striped is-bordered dataTable" id="table-4">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.review.transaction_id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.request.User_Name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.request.Provider_Name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.review.Rating'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.request.Date_Time'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.review.Comments'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php ($page = ($pagination->currentPage-1)*$pagination->perPage); ?>
                    <?php $__currentLoopData = $Reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($page++); ?>
                        <tr>
                            <td><?php echo e($page); ?></td>
                            <td><?php echo e($review->request_id); ?></td>
                            <td><?php echo e($review->user?$review->user->first_name:''); ?> <?php echo e($review->user?$review->user->last_name:''); ?></td>
                            <td><?php echo e($review->provider?$review->provider->first_name:''); ?> <?php echo e($review->provider?$review->provider->last_name:''); ?></td>
                            <td>
                                <div className="rating-outer">
                                    <input type="hidden" value="<?php echo e($review->user_rating); ?>" name="rating" class="rating" disabled="disabled"/>
                                </div>
                            </td>
                            <td><?php echo e($review->created_at); ?></td>
                            <td><?php echo e($review->user_comment); ?></td>
                            <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="button is-link waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Ação
                                </button>
                                <div class="dropdown-menu">
                                    <a href="<?php echo e(route('admin.requests.show', $review->request_id)); ?>" class="dropdown-item">
                                        <i class="fa fa-search"></i> More details
                                    </a>
                                </div>
                            </div>
                        </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.review.transaction_id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.request.User_Name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.request.Provider_Name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.review.Rating'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.request.Date_Time'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.review.Comments'); ?></th>
                            <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                        </tr>
                    </tfoot>
                </table>
                 <?php echo $__env->make('common.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/review/user_review.blade.php ENDPATH**/ ?>