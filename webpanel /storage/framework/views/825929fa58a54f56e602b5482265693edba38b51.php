<?php $__env->startSection('title', __('admin.push.Push_Notification')); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('asset/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('asset/css/bootstrap-timepicker.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <?php if(Setting::get('demo_mode', 0) == 1): ?>
            <div class="column" style="height:50px;color:red;">
                ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
            </div>
            <?php endif; ?> 
            <h5 style="margin-bottom: 2em;"><?php echo app('translator')->getFromJson('admin.push.Push_Notification'); ?></h5>

            <form  action="<?php echo e(route('admin.send.push')); ?>" method="POST" role="form" id="create_push">

                <?php echo e(csrf_field()); ?>


                <div class="field">
                    <label class="label"><?php echo app('translator')->getFromJson('admin.push.Sent_to'); ?></label>
                    <div class="control">
                        <select class="select" name="send_to" onchange="switch_send(this.value)">
                            <option value="ALL">All <?php echo app('translator')->getFromJson('admin.user'); ?>s e <?php echo app('translator')->getFromJson('admin.provider'); ?>s</option>
                            <option value="USERS">All <?php echo app('translator')->getFromJson('admin.user'); ?>s</option>
                            <option value="PROVIDERS">All <?php echo app('translator')->getFromJson('admin.provider'); ?>s</option>
                        </select>
                    </div>
                </div>

                <div class="field row" id="for_users" style="display: none;">
                    <label class="label">Condições do <?php echo app('translator')->getFromJson('admin.user'); ?></label>
                    <div class="col-xs-5">
                        <select class="select" name="user_condition" onchange="switch_user_condition(this.value);">
                            <option value="">None</option>
                            <option value="ACTIVE">FOR <?php echo app('translator')->getFromJson('admin.user'); ?>s <?php echo app('translator')->getFromJson('admin.active'); ?>s are ACTIVE </option>
                            <option value="LOCATION">Users who are in </option>
                            <option value="RIDES">Who used the service more than</option>
                            <!-- <option value="AMOUNT"> who spent more than </option> -->
                        </select>
                    </div>
                    <div class="col-xs-5" id="user_active" style="display: none;">
                        <select class="select" name="user_active">
                            <option value="HOUR">Last one hour</option>
                            <option value="WEEK">Last week</option>
                            <option value="MONTH">Last month</option>
                        </select>
                    </div>

                    <div class="col-xs-5" id="user_rides"  style="display: none;">
                        <input type="number" class="input" name="user_rides" placeholder="Number of Request">
                    </div>

                    <div class="col-xs-5" id="user_amount" style="display: none;">
                        <input type="number" class="input" name="user_amount" placeholder="Amount Spent">
                    </div>

                    <div class="col-xs-5" id="user_location" style="display: none;">
                        <input type="text" class="input"  id="search_location" placeholder="Enter Location">
                        <input type="hidden" name="user_location" id="user_point">
                    </div>

                </div>


                <div class="field row" id="for_providers" style="display: none;">
                    <label class="label">Condição dos <?php echo app('translator')->getFromJson('admin.provider'); ?>s</label>
                    <div class="col-xs-5">
                        <select class="select" name="provider_condition" onchange="switch_provider_condition(this.value);">
                            <option value="">Nenhuma</option>
                            <option value="ACTIVE">FOR <?php echo app('translator')->getFromJson('admin.provider'); ?>s <?php echo app('translator')->getFromJson('admin.active'); ?>s are ACTIVE </option>
                            <option value="LOCATION"><?php echo app('translator')->getFromJson('admin.provider'); ?>s who are in </option>
                            <option value="RIDES">Who used the service more than</option>
                            <!-- <option value="AMOUNT">  who earned more than </option> -->
                        </select>
                    </div>
                    <div class="col-xs-5" id="provider_active" style="display: none;">
                        <select class="select" name="provider_active">
                            <option value="HOUR">Last one hour</option>
                            <option value="WEEK">Last week</option>
                            <option value="MONTH">Last month</option>
                        </select>
                    </div>

                    <div class="col-xs-5" id="provider_rides"  style="display: none;">
                        <input type="number" class="input" name="provider_rides" placeholder="no of Request">
                    </div>

                    <div class="col-xs-5" id="provider_amount" style="display: none;">
                        <input type="number" class="input" name="provider_amount" placeholder="Amount">
                    </div>

                    <div class="col-xs-5" id="provider_location" style="display: none;">
                        <input type="text" class="input" id="search_provider_location" placeholder="enter location">
                        <input type="hidden" name="provider_location" id="provider_point">
                    </div>
                </div>

                <div class="field">
                    <label for="message" class="label"><?php echo app('translator')->getFromJson('admin.push.message'); ?></label>
                    <div class="control">
                        <textarea maxlength="200" class="input" rows="3" name="message" required id="message" placeholder="Enter Message" ></textarea>
                        <div id="characterLeftDesc"></div>
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">							
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.push.Push_Now'); ?></button>
                        &nbsp;
                        <button data-toggle="modal" data-target="#schedule_modal" type="button" class="button is-success"><?php echo app('translator')->getFromJson('admin.push.Schedule_Push'); ?></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="box box-block bg-white">
            <h5 class="mb-1"><?php echo app('translator')->getFromJson('admin.push.Notification_History'); ?></h5>
            <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.push.Sent_to'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.message'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.push.Condition'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.push.Sent_on'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $Pushes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $Push): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($Push->send_to); ?></td>
                        <td><?php echo e($Push->message); ?></td>
                        <td><?php echo e($Push->condition); ?></td>
                        <td>
                            <?php if($Push->created_at): ?>
                            <span class="text-muted"><?php echo e($Push->created_at->diffForHumans()); ?></span>
                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.push.Sent_to'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.message'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.push.Condition'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.push.Sent_on'); ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>

    </div>
</div>



<!-- Schedule Modal -->
<div id="schedule_modal" class="modal fade schedule-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Schedule Notification Sending</h4>
            </div>
            <form>
                <div class="modal-body">

                    <label>Data</label>
                    <input value="<?php echo e(date('m/d/Y')); ?>" class="input" type="text" id="datepicker" placeholder="Data" name="schedule_date">
                    <label>Hora</label>
                    <input value="<?php echo e(date('H:i')); ?>" class="input" type="text" id="timepicker" placeholder="Hora" name="schedule_time">

                </div>
                <div class="modal-footer">
                    <button type="button" id="schedule_button" class="button is-default" data-dismiss="modal">Schedule</button>
                </div>

            </form>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(asset('asset/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/bootstrap-timepicker.js')); ?>"></script>

<script type="text/javascript">
    <?php if(Setting::get('demo_mode', 0) == 1): ?>
    $("#create_push :input").prop("disabled", true);
    <?php endif; ?>

            $('#characterLeftDesc').text('100 caracteres restantes');

    $('#message').keyup(function () {
        var max = 100;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeftDesc').text(' You have reached the limit');
        } else {
            var ch = max - len;
            $('#characterLeftDesc').text(ch + ' characters remaining');
        }
    });
</script>

<script type="text/javascript">
    function switch_send(send_value) {
        if (send_value == 'USERS') {
            $('#for_users').show();
            $('#for_providers').hide();
        } else if (send_value == 'PROVIDERS') {
            $('#for_users').hide();
            $('#for_providers').show();
        } else {
            $('#for_users').hide();
            $('#for_providers').hide();
        }
    }


    function switch_user_condition(condition_value) {
        if (condition_value == 'ACTIVE') {
            $('#user_active').show();
            $('#user_location').hide();
            $('#user_amount').hide();
            $('#user_rides').hide();
        } else if (condition_value == 'LOCATION') {
            $('#user_active').hide();
            $('#user_location').show();
            $('#user_amount').hide();
            $('#user_rides').hide();
        } else if (condition_value == 'AMOUNT') {
            $('#user_active').hide();
            $('#user_location').hide();
            $('#user_amount').show();
            $('#user_rides').hide();
        } else if (condition_value == 'RIDES') {
            $('#user_active').hide();
            $('#user_location').hide();
            $('#user_amount').hide();
            $('#user_rides').show();
        } else {
            $('#user_active').hide();
            $('#user_location').hide();
            $('#user_amount').hide();
            $('#user_rides').hide();
        }
    }


    function switch_provider_condition(condition_value) {
        if (condition_value == 'ACTIVE') {
            $('#provider_active').show();
            $('#provider_location').hide();
            $('#provider_amount').hide();
            $('#provider_rides').hide();
        } else if (condition_value == 'LOCATION') {
            $('#provider_active').hide();
            $('#provider_location').show();
            $('#provider_amount').hide();
            $('#provider_rides').hide();
        } else if (condition_value == 'AMOUNT') {
            $('#provider_active').hide();
            $('#provider_location').hide();
            $('#provider_amount').show();
            $('#provider_rides').hide();
        } else if (condition_value == 'RIDES') {
            $('#provider_active').hide();
            $('#provider_location').hide();
            $('#provider_amount').hide();
            $('#provider_rides').show();
        } else {
            $('#provider_active').hide();
            $('#provider_location').hide();
            $('#provider_amount').hide();
            $('#provider_rides').hide();
        }
    }

</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#schedule_button').click(function () {
            $("#datepicker").clone().attr('type', 'hidden').appendTo($('#create_push'));
            $("#timepicker").clone().attr('type', 'hidden').appendTo($('#create_push'));
            document.getElementById('create_push').submit();
        });
    });
</script>
<script type="text/javascript">
    var date = new Date();
    date.setDate(date.getDate() - 1);
    $('#datepicker').datepicker({
        startDate: date
    });
    $('#timepicker').timepicker({showMeridian: false});
</script>


<script>

    var autocomplete, autocompleteprovider;

    function initAutocomplete() {

        autocomplete = new google.maps.places.Autocomplete(document.getElementById('search_location'));
        autocompleteprovider = new google.maps.places.Autocomplete(document.getElementById('search_provider_location'));

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace().geometry.location;
            set_location(place.lat(), place.lng());
        });

        autocompleteprovider.addListener('place_changed', function () {
            var providerplace = autocompleteprovider.getPlace().geometry.location;
            set_provider_location(providerplace.lat(), providerplace.lng());
        });

    }

    function set_location(lat, lng) {
        document.getElementById('user_point').value = lat + ',' + lng;
    }

    function set_provider_location(lat, lng) {
        document.getElementById('provider_point').value = lat + ',' + lng;
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(Config::get('constants.map_key')); ?>&libraries=places&callback=initAutocomplete"
async defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/push.blade.php ENDPATH**/ ?>