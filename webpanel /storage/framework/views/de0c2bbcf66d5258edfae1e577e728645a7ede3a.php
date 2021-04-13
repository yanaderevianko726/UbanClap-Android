<?php $__env->startSection('title', 'Dashboard '); ?>

<?php $__env->startSection('content'); ?>

<section class="hero is-info welcome is-small">
    
    <div class="hero-body">
        <div class="container">
            <h4 class="title">Dashboard</h4>
            <h4 class="subtitle">
                Keep password strong to secure personal info
            </h4>
        
    <div class="container box ">
        <div class="columns no-margin">
            <div class="column">
                <h4 class="page-title"><?php echo app('translator')->getFromJson('user.ride.ride_now'); ?></h4>
            </div>
        </div>
        <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="columns no-margin">
            <div class="column">
                <form action="<?php echo e(url('create/ride')); ?>" method="POST" id="create_ride" onkeypress="return disableEnterKey(event);">
                 <?php echo e(csrf_field()); ?>

                 <div class="control input-group dash-form">
                 <input type="text" class="form-control input" id="origin-input" name="s_address"  placehold="Local de partida">
             </div>

                <input type="hidden" name="s_latitude" id="origin_latitude">
                <input type="hidden" name="s_longitude" id="origin_longitude">
                <input type="hidden" name="d_latitude" id="origin_latitude">
                <input type="hidden" name="d_longitude" id="origin_longitude">
                <input type="hidden" name="current_longitude" id="long">
                <input type="hidden" name="current_latitude" id="lat">
                 <input type="hidden" name="service_type" value="<?php if(Request::has('service')): ?><?php echo e(Request::get('service')); ?><?php endif; ?>">
                 <hr>
                <dl class="dl-horizontal left-right">
                    <dt>Base Fare</dt>
                    <dd><?php echo e(currency($service->fixed)); ?></dd>
                    <dt>Hourly Fare</dt>
                    <dd><?php echo e(currency($service->price)); ?></dd>
                    <?php if(Auth::user()->wallet_balance > 0): ?>

                        <input type="checkbox" class="control" name="use_wallet" value="1"><span style="padding-left: 15px;"><?php echo app('translator')->getFromJson('user.use_wallet_balance'); ?></span>
                        <br>
                        <br>
                            <dt><?php echo app('translator')->getFromJson('user.available_wallet_balance'); ?></dt>
                            <dd><?php echo e(currency(Auth::user()->wallet_balance)); ?></dd>
                        <?php endif; ?>
                </dl>

                 <p><?php echo app('translator')->getFromJson('user.payment_method'); ?></p>
                    <select class="select" name="payment_mode" id="payment_mode" onchange="card(this.value);">
                      <option value="CASH">CASH</option>
                      <?php if(Setting::get('CARD') == 1): ?>
                      <?php if($cards->count() > 0): ?>
                        <option value="CARD">CARD</option>
                      <?php endif; ?>
                      <?php endif; ?>
                    </select>
                    <br>

                    <?php if(Setting::get('CARD') == 1): ?>
                        <?php if($cards->count() > 0): ?>
                        <select class="select" name="card_id" style="display: none;" id="card_id">
                          <option value="">Select Card</option>
                          <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($card->card_id); ?>"><?php echo e($card->brand); ?> **** **** **** <?php echo e($card->last_four); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php endif; ?>
                    <?php endif; ?>

               

                <button type="submit"  class="half-primary-btn fare-btn"><?php echo app('translator')->getFromJson('user.ride.ride_now'); ?></button>
                <button type="button" class="half-secondary-btn fare-btn" data-toggle="modal" data-target="#schedule_modal">Schedule Later</button>

                </form>
            </div>
                

            <div class="column">
                <div class="map-responsive">
                    <div id="map" style="width: 100%; height: 450px;"></div>
                </div> 
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
        <h4 class="modal-title">Schedule a <?php echo app('translator')->getFromJson('main.service'); ?></h4>
      </div>
      <form>
      <div class="modal-body">
        
        <label>Date</label>
        <input value="<?php echo e(date('m/d/Y')); ?>" type="text" id="datepicker" placeholder="Date" name="schedule_date">
        <label>Time</label>
        <input value="<?php echo e(date('H:i')); ?>" type="text" id="timepicker" placeholder="Time" name="schedule_time">

      </div>
      <div class="modal-footer">
        <button type="button" id="schedule_button" class="button is-default" data-dismiss="modal">Schedule <?php echo app('translator')->getFromJson('main.service'); ?></button>
      </div>

      </form>
    </div>

  </div>
</div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>    
<script type="text/javascript">
    var current_latitude = 28.644800;
    var current_longitude = 77.216721;
</script>

<script type="text/javascript">
      $(".drp1").hide();
    $("#drplocat").click(function(){
  $(".drplocat").hide();
  $(".drp1").show()
});


    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services.');
        initMap();
    }

    function success(position)
    {
        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
        }
        initMap();
    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
        initMap();
    }
</script> 

<script type="text/javascript" src="<?php echo e(asset('asset/js/map.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(Config::get('constants.map_key')); ?>&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
    function disableEnterKey(e)
    {
        var key;
        if(window.e)
            key = window.e.keyCode; // IE
        else
            key = e.which; // Firefox

        if(key == 13)
            return e.preventDefault();
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#hours").hide();

        $('input[name=service_type]').change(function(){

    var id =     $('input[name=service_type]:checked').val();
    
     $.ajax({url: "<?php echo e(url('hour')); ?>/"+id,dataType: "json",
                   success: function(data){
                    //console.log(data['calculator']);

                       /*if (data['calculator'] == 'DISTANCEHOUR')
                       $("#hours").show();  
                       else
                       $("#hours").hide(); */
                  }});
    });
  }); 

setInterval("checkstatus()",3000); 

function checkstatus(){
    $.ajax({
        url: '/user/incoming',
        dataType: "JSON",
        data:'',
        type: "GET",
        success: function(data){
            if(data.status==1){
                window.location.replace("/dashboard");
            }
        }
    });
}


/*var _registration = null;
function registerServiceWorker() {
  return navigator.serviceWorker.register("<?php echo e(asset('js/service-worker.js')); ?>")
  .then(function(registration) {
    console.log('Service worker successfully registered.');
    _registration = registration;
    return registration;
  })
  .catch(function(err) {
    console.error('Unable to register service worker.', err);
  });
}

function askPermission() {
  return new Promise(function(resolve, reject) {
    const permissionResult = Notification.requestPermission(function(result) {
      resolve(result);
    });

    if (permissionResult) {
      permissionResult.then(resolve, reject);
    }
  })
  .then(function(permissionResult) {
    if (permissionResult !== 'granted') {
      throw new Error('We weren\'t granted permission.');
    }
    else{
      subscribeUserToPush();
    }
  });
}

function urlBase64ToUint8Array(base64String) {
  const padding = '='.repeat((4 - base64String.length % 4) % 4);
  const base64 = (base64String + padding)
    .replace(/\-/g, '+')
    .replace(/_/g, '/');

  const rawData = window.atob(base64);
  const outputArray = new Uint8Array(rawData.length);

  for (let i = 0; i < rawData.length; ++i) {
    outputArray[i] = rawData.charCodeAt(i);
  }
  return outputArray;
}

function getSWRegistration(){
  var promise = new Promise(function(resolve, reject) {
  // do a thing, possibly async, then…

  if (_registration != null) {
    resolve(_registration);
  }
  else {
    reject(Error("It broke"));
  }
  });
  return promise;
}

function subscribeUserToPush() {
  getSWRegistration()
  .then(function(registration) {
    console.log(registration);
    const subscribeOptions = {
      userVisibleOnly: true,
      applicationServerKey: urlBase64ToUint8Array(
        "<?php echo e(env('VAPID_PUBLIC_KEY')); ?>"
      )
    };
    return registration.pushManager.subscribe(subscribeOptions);
  })
  .then(function(pushSubscription) {
    console.log('Received PushSubscription: ', JSON.stringify(pushSubscription));
    sendSubscriptionToBackEnd(pushSubscription);
    return pushSubscription;
  });
}

function sendSubscriptionToBackEnd(subscription) {
    $.ajax({
            url: "/save-subscription/<?php echo e(Auth::user()->id); ?>/user",
            headers: {'Content-Type': 'application/json'},
            type: 'post',
            data: JSON.stringify(subscription),
            success:function(data, textStatus, jqXHR) {
                console.log(data);
            }
        });
}

  askPermission();

  registerServiceWorker();*/

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/request.blade.php ENDPATH**/ ?>