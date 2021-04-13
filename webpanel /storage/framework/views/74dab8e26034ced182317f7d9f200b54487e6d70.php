<?php $__env->startSection('title', 'Upcoming Trips '); ?>

<?php $__env->startSection('content'); ?>

<div class="column">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="column">
                <h4 class="page-title"><?php echo app('translator')->getFromJson('user.upcoming_trips'); ?></h4>
            </div>
        </div>

        <div class="row no-margin ride-detail">
            <div class="column">
            <?php if($trips->count() > 0): ?>

                <table class="table is-condensed" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th><?php echo app('translator')->getFromJson('user.booking_id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('user.schedule_date'); ?></th>
                            <th><?php echo app('translator')->getFromJson('user.type'); ?></th>
                            <th><?php echo app('translator')->getFromJson('user.payment'); ?></th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr data-toggle="collapse" data-target="#trip_<?php echo e($trip->id); ?>" class="accordion-toggle collapsed">
                            <td><span class="arrow-icon fa fa-chevron-right"></span></td>
                            <td><?php echo e($trip->booking_id); ?></td>
                            <td><?php echo e(date('d-m-Y H:i:s',strtotime($trip->schedule_at))); ?></td>
                            <?php if($trip->service_type): ?>
                                 <td><?php echo e($trip->service_type->name); ?></td>
                            <?php else: ?>
                                <td>-</td>
                            <?php endif; ?>
                            <td><?php echo app('translator')->getFromJson('user.paid_via'); ?> <?php echo e($trip->payment_mode); ?></td>
                        </tr>
                        <tr class="hiddenRow">
                            <td colspan="6">
                                <div class="accordian-body collapse row" id="trip_<?php echo e($trip->id); ?>">
                                    <div class="column">
                                        <div class="my-trip-left">
                                        <?php 
                                    $map_icon = asset('asset/img/marker-start.png');
                                    $static_map = "https://maps.googleapis.com/maps/api/staticmap?autoscale=1&size=600x450&maptype=terrain&format=png&visual_refresh=true&markers=icon:".$map_icon."%7C".$trip->s_latitude.",".$trip->s_longitude."&markers=icon:".$map_icon."%7C".$trip->d_latitude.",".$trip->d_longitude."&path=color:0x191919|weight:8|enc:".$trip->route_key."&key=".Config::get('constants.map_key'); ?>
                                            <div class="map-static" style="background-image: url(<?php echo e($static_map); ?>);">
                                                
                                            </div>
                                            <div class="from-to row no-margin">
                                                <div class="from">
                                                    <h5><?php echo app('translator')->getFromJson('user.from'); ?></h5>
                                                    <p><?php echo e($trip->s_address); ?></p>
                                                </div>
                                                <div class="to">
                                                    <h5><?php echo app('translator')->getFromJson('user.to'); ?></h5>
                                                    <p><?php echo e($trip->d_address); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column">

                                        <div class="mytrip-right">
                                             <h5><?php echo app('translator')->getFromJson('user.provider_details'); ?></h5>
                                             <div class="trip-user">
                                                <div class="user-img" style="background-image: url(<?php echo e(img($trip->provider->avatar)); ?>);">
                                                </div>
                                                <div class="user-right">
                                                <?php if($trip->provider): ?>
                                                    <h5><?php echo e($trip->provider->first_name); ?> <?php echo e($trip->provider->last_name); ?></h5>
                                                <?php endif; ?>
                                                    <p><?php echo e($trip->status); ?></p>
                                                </div>
                                            </div>

                                            <div class="fare-break">

                                               <form method="POST" action="<?php echo e(url('cancel/ride')); ?>">
                                                  <?php echo e(csrf_field()); ?>

                                                     <input type="hidden" name="request_id" value="<?php echo e($trip->id); ?>" />
                                                   <button class="button is-primary fare-btn" type="submit"><?php echo app('translator')->getFromJson('user.ride_cancel'); ?></button>
                                               </form>

                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>
                <?php else: ?>
                    <hr>
                    <p style="text-align: center;"><?php echo app('translator')->getFromJson('user.no_trips'); ?></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/ride/upcoming.blade.php ENDPATH**/ ?>