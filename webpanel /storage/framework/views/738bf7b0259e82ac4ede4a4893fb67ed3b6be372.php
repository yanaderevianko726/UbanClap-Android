<?php $__env->startSection('title', 'Dashboard '); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

      <div class="columns  is-variable is-desktop">
        
        <div class="column">
          <div class="card has-background-info has-text-white">
            <div class="card-header">
              <div class="card-header-title has-text-white">
                <?php echo app('translator')->getFromJson('admin.dashboard.providers'); ?>
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3"><?php echo e($provider); ?></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card has-background-danger has-text-white">
            <div class="card-header">
              <div class="card-header-title has-text-white"><?php echo app('translator')->getFromJson('admin.dashboard.user'); ?></div>
            </div>
            <div class="card-content">
              <p class="is-size-3"><?php echo e($users); ?></p>
            </div>
          </div>
      </div>
      <div class="column">
        <div class="card has-background-warning has-text-white">
          <div class="card-header">
            <div class="card-header-title has-text-white"><?php echo app('translator')->getFromJson('admin.dashboard.Revenue'); ?></div>
          </div>
          <div class="card-content">
            <p class="is-size-3"><?php echo e(currency($revenue)); ?></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card has-background-info has-text-white">
          <div class="card-header">
            <div class="card-header-title has-text-white"><?php echo app('translator')->getFromJson('admin.dashboard.Rides'); ?></div>
          </div>
          <div class="card-content">
            <p class="is-size-3"><?php if(!is_null($totalRides)): ?>
              <?php echo e($totalRides); ?>

          <?php endif; ?></p>
          </div>
        </div>
      </div>
    </div>
      <div class="columns is-variable is-full">
        <div class="column is-4-desktop is-6-tablet">
          <article class="message is-info">
            <div class="message-header">
              <p><?php echo app('translator')->getFromJson('admin.dashboard.wallet_summary'); ?></p>
            </div>
              <table class="table is-fullwidth is-striped">
                <tbody>
                <?php ($total=$wallet['admin']); ?>
                <tr>
                    <th scope="column"><?php echo app('translator')->getFromJson('admin.dashboard.wallet_summary_admin_credit'); ?></th>
                    <td class="text-success"><?php echo e(currency($wallet['admin'])); ?></td>
                </tr>
                <tr>
                    <th scope="column"><?php echo app('translator')->getFromJson('admin.dashboard.wallet_summary_provider_credit'); ?></th>
                    <?php if($wallet['provider_credit']): ?>
                        <?php ($total=$total-$wallet['provider_credit'][0]['total_credit']); ?>
                        <td class="text-success"><?php echo e(currency($wallet['provider_credit'][0]['total_credit'])); ?></td>
                    <?php else: ?>
                        <td class="text-success"><?php echo e(currency()); ?></td>
                    <?php endif; ?>
                </tr>

                <tr>
                    <th scope="column"><?php echo app('translator')->getFromJson('admin.dashboard.wallet_summary_provider_debit'); ?></th>
                    <?php if($wallet['provider_debit']): ?>

                        <td class="text-danger"><?php echo e(currency($wallet['provider_debit'][0]['total_debit'])); ?></td>
                    <?php else: ?>
                        <td class="text-danger"><?php echo e(currency()); ?></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th scope="column"><?php echo app('translator')->getFromJson('admin.dashboard.wallet_summary_commission'); ?></th>
                    <td class="text-success"><?php echo e(currency($wallet['admin_commission'])); ?></td>
                </tr>
                

                <!--                             <tr>
                <th scope="column text-right"><?php echo app('translator')->getFromJson('admin.dashboard.wallet_summary_total'); ?></th>
                <td><?php echo e(currency($total)); ?></td>
            </tr> -->
                </tbody>
            </table>
            
          </article>
        </div>
        <div class="column is-8-desktop is-6-tablet">
          <article class="message is-success">
            <div class="message-header">
              <p><?php echo app('translator')->getFromJson('admin.dashboard.Recent_Rides'); ?></p>
            </div>
              <table class="table is-fullwidth is-striped is-scrollable">
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $rides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ride): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="column"><?php echo e($index + 1); ?></th>
                            <td><?php echo e($ride->user->first_name); ?> <?php echo e($ride->user->last_name); ?></td>
                            <td>
                                <a class="text-primary"
                                    href="<?php echo e(route('admin.requests.show',$ride->id)); ?>"><span
                                            class="underline"><?php echo app('translator')->getFromJson('admin.dashboard.View_Ride_Details'); ?></span></a>
                            </td>
                            <td>
                                <span class="text-muted"><?php echo e($ride->created_at->diffForHumans()); ?></span>
                            </td>
                            <td>
                                <?php if($ride->status == "COMPLETED"): ?>
                                    <span class="tag tag-success">COMPLETED</span>
                                <?php elseif($ride->status == "CANCELLED"): ?>
                                    <span class="tag tag-danger">CANCELLED</span>
                                <?php elseif($ride->status == "ARRIVED"): ?>
                                    <span class="tag tag-info">ARRIVED</span>
                                <?php elseif($ride->status == "SEARCHING"): ?>
                                    <span class="tag tag-info">SEARCHING</span>
                                <?php elseif($ride->status == "ACCEPTED"): ?>
                                    <span class="tag tag-info">ACCEPTED</span>
                                <?php elseif($ride->status == "STARTED"): ?>
                                    <span class="tag tag-info">STARTED</span>
                                <?php elseif($ride->status == "DROPPED"): ?>
                                    <span class="tag tag-info">BILLING</span>
                                <?php elseif($ride->status == "PICKEDUP"): ?>
                                    <span class="tag tag-info">ONGOING</span>
                                <?php elseif($ride->status == "SCHEDULED"): ?>
                                    <span class="tag tag-info">SCHEDULED</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                          <th>No Data
                          </th>
                      </tr>
                        <?php endif; ?>
                </tbody>
            </table>
            
          </article>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>