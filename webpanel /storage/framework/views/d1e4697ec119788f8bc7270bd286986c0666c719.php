<?php $__env->startSection('title', __('admin.service.Add_Service_Type')); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="<?php echo e(route('admin.service.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="field">
                    <label for="name" class="label"><?php echo app('translator')->getFromJson('admin.service.Service_Name'); ?></label>
                    <div class="column">
                        <input  class="input" type="text" value="<?php echo e(old('name')); ?>" name="name" required id="name" placeholder="<?php echo app('translator')->getFromJson('admin.service.Service_Name'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="picture" class="label">
                    <?php echo app('translator')->getFromJson('admin.service.Service_Image'); ?></label>
                    <div class="column">
                        <input type="file" accept="image/*" name="image" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="marker" class="label">
                    <?php echo app('translator')->getFromJson('admin.service.Service_marker_Image'); ?></label>
                    <div class="column">
                        <input type="file" accept="image/*" name="marker" class="dropify form-control-file" id="marker" aria-describedby="fileHelp">
                    </div>
                </div>

                 <div class="field">
                    <label for="calculator" class="label"><?php echo app('translator')->getFromJson('admin.service.Pricing_Logic'); ?></label>
                    <div class="column">
                        <select class="input" id="calculator" name="calculator">
                            <option value="FIXED"><?php echo app('translator')->getFromJson('servicetypes.FIXED'); ?></option>
                            <option value="HOUR"><?php echo app('translator')->getFromJson('servicetypes.HOUR'); ?></option>
                            <option value="DAILY"><?php echo app('translator')->getFromJson('servicetypes.DAILY'); ?></option>
                            <option value="WEIGHT"><?php echo app('translator')->getFromJson('servicetypes.WEIGHT'); ?></option>
                            <option value="ESTIMATE"><?php echo app('translator')->getFromJson('servicetypes.ESTIMATE'); ?></option>
                            <option value="PSQFT"><?php echo app('translator')->getFromJson('servicetypes.PSQFT'); ?></option>
                        </select>
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b>Price calculation: <span id="changecal"></span></b></i></span>
                    </div>
                </div>

                <!-- Base fare -->
                <div class="field">
                    <label for="fixed" class="label"><?php echo app('translator')->getFromJson('admin.service.Base_Price'); ?> (<?php echo e(currency()); ?>)</label>
                    <div class="column">
                        <input  class="input" type="text" id="currency_fixed" data-thousands="," data-decimal="." value="<?php echo e(old('fixed')); ?>" name="fixed" required id="fixed" placeholder="<?php echo app('translator')->getFromJson('admin.service.Base_Price'); ?>" min="0">
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b>(<?php echo app('translator')->getFromJson('admin.request.base_price'); ?>)</b></i></span>
                    </div>
                </div>
                <!-- Base distance -->
                <div class="field">
                    <label for="type_price" class=" label"><?php echo app('translator')->getFromJson('admin.service.Base_Distance'); ?></label>
                    <div class="column">
                        <input  class="input" type="number" value="<?php echo e(old('type_price')); ?>" name="type_price" required id="type_price" placeholder="<?php echo app('translator')->getFromJson('admin.service.Base_Distance'); ?>" min="0">
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b><?php echo app('translator')->getFromJson('admin.service.Base_Distance'); ?> for Weight | Sq.ft per unit</b></i></span>
                    </div>
                </div>
                <!-- unit distance price -->
                <div class="field">
                    <label for="price" class="label"><?php echo app('translator')->getFromJson('admin.service.unit'); ?></label>
                    <div class="column">
                        <input  class="input" type="text" id="currency_price" data-thousands="," data-decimal="." value="<?php echo e(old('price')); ?>" name="price" required id="price" placeholder="<?php echo app('translator')->getFromJson('admin.service.unit'); ?>" min="0">
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b><?php echo app('translator')->getFromJson('admin.service.unit'); ?> for time Hour based</b></i></span>
                    </div>
                </div>

                <div class="field">
                    <label for="description" class="label"><?php echo app('translator')->getFromJson('admin.service.description'); ?></label>
                    <div class="column">
                        <textarea  class="input" value="<?php echo e(old('description')); ?>" name="description" id="description"></textarea>
                    </div>
                </div>

                <div class="field">
                     <label for="description" class="label" style="color: black;font-size: 25px;"><?php echo app('translator')->getFromJson('admin.service.peak_title'); ?></label>

                     <!-- Set Peak Time -->
                     <div class="table-container">
                        <table class="table is-responsive is-fullwidth is-striped">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->getFromJson('admin.service.peak_id'); ?></th>
                                    <th><?php echo app('translator')->getFromJson('admin.service.peak_time'); ?></th>
                                    <th><?php echo app('translator')->getFromJson('admin.service.peak_price'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $Peakhour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($index + 1); ?></td>
                                        <td><?php echo e(date('h:i A', strtotime($w->start_time))); ?> - <?php echo e(date('h:i A', strtotime($w->end_time))); ?></td>
                                        <td> <input type="text" id="peak_price" name="peak_price[<?php echo e($w->id); ?>]"  min="1"> </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?php echo app('translator')->getFromJson('admin.service.peak_id'); ?></th>
                                    <th><?php echo app('translator')->getFromJson('admin.service.peak_time'); ?></th>
                                    <th><?php echo app('translator')->getFromJson('admin.service.peak_price'); ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <input type="hidden" id="parent_id" name="parent_id" value="<?php echo e(Request::get('parent_id')); ?>" readonly >
                <br>
                <div class="field">
                    <div class="control">
                        <div class="columns">
                            <div class="column col-sm-6 col-md-3">
                                <button type="submit" class="button is-link btn-block"><?php echo app('translator')->getFromJson('admin.service.Add_Service_Type'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    var cal='DAILY';
    priceInputs(cal);
    $("#calculator").on('change', function(){
        cal=$(this).val();
        priceInputs(cal);
    });

    function priceInputs(cal){
        if(cal=='FIXED'){
            $("#hourly_price,#distance,#price").attr('value','');
            $("#minute").prop('disabled', false);
            $("#minute").prop('required', true);
            $("#hourly_price,#distance,#price").prop('disabled', true);
            $("#hourly_price,#distance,#price").prop('required', false);
            $("#changecal").text('PB + (TM*PM)');
        }
        else if(cal=='HOUR'){
            $("#minute,#distance,#price").attr('value','');
            $("#hourly_price").prop('disabled', false);
            $("#hourly_price").prop('required', true);
            $("#minute,#distance,#price").prop('disabled', true);
            $("#minute,#distance,#price").prop('required', false);
            $("#changecal").text('PB + (TH*PH)');
        }
        else if(cal=='DAILY'){
            $("#minute,#hourly_price").attr('value','');
            $("#price,#distance").prop('disabled', false);
            $("#price,#distance").prop('required', true);
            $("#minute,#hourly_price").prop('disabled', true);
            $("#minute,#hourly_price").prop('required', false);
            $("#changecal").text('PB + (T<?php echo e(config("constants.distance")); ?>-DB*P<?php echo e(config("constants.distance")); ?>)');
        }
        else if(cal=='WEIGHT'){
            $("#hourly_price").attr('value','');
            $("#price,#distance,#minute").prop('disabled', false);
            $("#price,#distance,#minute").prop('required', true);
            $("#hourly_price").prop('disabled', true);
            $("#hourly_price").prop('required', false);
            $("#changecal").text('PB + (T<?php echo e(config("constants.distance")); ?>-DB*P<?php echo e(config("constants.distance")); ?>) + (TM*PM)');
        }
        else if(cal=='ESTIMATE'){
            $("#minute").attr('value','');
            $("#price,#distance,#hourly_price").prop('disabled', false);
            $("#price,#distance,#hourly_price").prop('required', true);
            $("#minute").prop('disabled', true);
            $("#minute").prop('required', false);
            $("#changecal").text('PB + ((T<?php echo e(config("constants.distance")); ?>-DB)*P<?php echo e(config("constants.distance")); ?>) + (TH*PH)');

        }else if(cal=='PSQFT'){
            $("#minute").attr('value','');
            $("#price,#distance,#hourly_price").prop('disabled', false);
            $("#price,#distance,#hourly_price").prop('required', true);
            $("#minute").prop('disabled', true);
            $("#minute").prop('required', false);
            $("#changecal").text('PB + ((T<?php echo e(config("constants.distance")); ?>-DB)*P<?php echo e(config("constants.distance")); ?>) + (TH*PH)');
        }
        else{
            $("#minute,#hourly_price").attr('value','');
            $("#price,#distance").prop('disabled', false);
            $("#price,#distance").prop('required', true);
            $("#minute,#hourly_price").prop('disabled', true);
            $("#minute,#hourly_price").prop('required', false);
            $("#changecal").text('PB + (T<?php echo e(config("constants.distance")); ?>-DB*P<?php echo e(config("constants.distance")); ?>)');
        }
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/service/create.blade.php ENDPATH**/ ?>