```bash
curl -X <?php echo e($route['methods'][0]); ?> \
    <?php echo e($route['methods'][0] == 'GET' ? '-G ' : ''); ?>"<?php echo e(rtrim($baseUrl, '/')); ?>/<?php echo e(ltrim($route['boundUri'], '/')); ?><?php if(count($route['cleanQueryParameters'])): ?>?<?php $__currentLoopData = $route['cleanQueryParameters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parameter => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e(urlencode($parameter)); ?>=<?php echo e(urlencode($value)); ?><?php if(!$loop->last): ?>&<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>" <?php if(count($route['headers'])): ?>\
<?php $__currentLoopData = $route['headers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    -H "<?php echo e($header); ?>: <?php echo e(addslashes($value)); ?>"<?php if(! ($loop->last) || ($loop->last && count($route['bodyParameters']))): ?> \
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(count($route['cleanBodyParameters'])): ?>
    -d '<?php echo json_encode($route['cleanBodyParameters']); ?>'
<?php endif; ?>

```
<?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/vendor/mpociot/laravel-apidoc-generator/src/../resources/views//partials/example-requests/bash.blade.php ENDPATH**/ ?>