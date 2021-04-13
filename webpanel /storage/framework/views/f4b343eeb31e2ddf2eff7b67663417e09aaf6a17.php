<?php $__env->startSection('title', __('admin.dispatcher.dispatcher')); ?>

<?php $__env->startSection('content'); ?>
            <div class="content-area py-1">
              <div class="container-fluid">
                  <div class="box tables-card">
                      <header class="box-header">
                          <p class="box-header-title">
                              <?php if(Setting::get('demo_mode', 0) == 1): ?>
                              <div class="col-md-12" style="height:50px;color:red;">
                                          ** Demo Mode : <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                                      </div>
                                      <?php endif; ?>
                                      <?php echo app('translator')->getFromJson('admin.dispatcher.dispatcher'); ?>
                                      <?php if(Setting::get('demo_mode', 0) == 1): ?>
                                      <span class="pull-right">(*personal information hidden in demo)</span>
                                      <?php endif; ?>
                                  
                          </p>
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispatcher-providers')): ?>
                          <a href="<?php echo e(route('admin.dispatch-manager.create')); ?>" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.dispatcher.add_new_dispatcher'); ?></a>
                          <?php endif; ?>
                              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-manager-create')): ?>
                                  <a href="<?php echo e(route('admin.account-manager.create')); ?>" style="margin-left: 1em;" class="box-header-icon button is-link pull-right"><i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson('admin.account-manager.add_new_account_manager'); ?></a>
                                  <?php endif; ?>
                      </header>
                     <table class="table is-striped is-bordered dataTable" id="table-2">
                          <div class="content">
                      <table class="table is-fullwidth is-striped">

                <thead>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $dispatchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dispatcher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($dispatcher->name); ?></td>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td><?php echo e(substr($dispatcher->email, 0, 3).'****'.substr($dispatcher->email, strpos($dispatcher->email, "@"))); ?></td>
                        <?php else: ?>
                        <td><?php echo e($dispatcher->email); ?></td>
                        <?php endif; ?>
                        <?php if(Setting::get('demo_mode', 0) == 1): ?>
                        <td>+919876543210</td>
                        <?php else: ?>
                        <td><?php echo e($dispatcher->mobile); ?></td>
                        <?php endif; ?>
                        <td>
                            <form action="<?php echo e(route('admin.dispatch-manager.destroy', $dispatcher->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">
                                <a href="<?php echo e(route('admin.dispatch-manager.edit', $dispatcher->id)); ?>" class="button is-info"><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
                                <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> <?php echo app('translator')->getFromJson('admin.delete'); ?></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('admin.id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.mobile'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </tfoot>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>    

<script type="text/javascript">


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
            url: "/save-subscription/<?php echo e(Auth::user()->id); ?>/dispatcher",
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
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/dispatcher/index.blade.php ENDPATH**/ ?>