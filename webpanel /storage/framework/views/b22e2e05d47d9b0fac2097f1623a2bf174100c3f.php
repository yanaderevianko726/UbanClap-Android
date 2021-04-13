<?php $__env->startSection('title', 'Payment'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-9">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title"><?php echo app('translator')->getFromJson('user.payment'); ?></h4>
            </div>
        </div>
        <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row no-margin payment">
            <div class="col-md-12">
                <h5 class="btm-border"><strong><?php echo app('translator')->getFromJson('user.payment_method'); ?></strong> 
                <?php if(config('constants.card') == 1): ?>
                <a href="#" class="sub-right pull-right" data-toggle="modal" data-target="#add-card-modal"><?php echo app('translator')->getFromJson('user.card.add_card'); ?></a>
                <?php endif; ?>
                </h5>

                <div class="pay-option">
                    <h6><img src="<?php echo e(asset('asset/img/cash-icon.png')); ?>"> <?php echo app('translator')->getFromJson('user.cash'); ?> </h6>
                </div>
                <?php if(config('constants.card') == 1): ?>
                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pay-option">
                    <h6>
                        <img src="<?php echo e(asset('asset/img/card-icon.png')); ?>"> <?php echo e($card->brand); ?> **** **** **** <?php echo e($card->last_four); ?> 
                        <?php if($card->is_default): ?>
                            <a href="#" class="default"><?php echo app('translator')->getFromJson('user.card.default'); ?></a>
                        <?php endif; ?> 
                        <form action="<?php echo e(url('card/destory')); ?>" method="POST" class="pull-right">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="card_id" value="<?php echo e($card->card_id); ?>">
                            <button onclick='return confirm("<?php echo app('translator')->getFromJson('user.card.delete_msg'); ?>")' type="submit" class="btn btn-sm" ><?php echo app('translator')->getFromJson('user.card.delete'); ?></button>
                        </form>
                    </h6>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>

    </div>
</div>

<?php if(config('constants.card') == 1): ?>

    <!-- Add Card Modal -->
    <div id="add-card-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo app('translator')->getFromJson('user.card.add_card'); ?></h4>
          </div>
            <form id="payment-form" action="<?php echo e(route('card.store')); ?>" method="POST" >
                <?php echo e(csrf_field()); ?>

          <div class="modal-body">
            <div class="row no-margin" id="card-payment">
                <div class="field col-md-12 col-sm-12">
                    <label><?php echo app('translator')->getFromJson('user.card.fullname'); ?></label>
                    <input data-stripe="name" autocomplete="off" required type="text" <div class="control"> placeholder="<?php echo app('translator')->getFromJson('user.card.fullname'); ?>">
                </div>
                <div class="field col-md-12 col-sm-12">
                    <label><?php echo app('translator')->getFromJson('user.card.card_no'); ?></label>
                    <input data-stripe="number" type="text" onkeypress="return isNumberKey(event);" required autocomplete="off" maxlength="16" <div class="control"> placeholder="<?php echo app('translator')->getFromJson('user.card.card_no'); ?>">
                </div>
                <div class="field col-md-4 col-sm-12">
                    <label><?php echo app('translator')->getFromJson('user.card.month'); ?></label>
                    <input type="text" onkeypress="return isNumberKey(event);" maxlength="2" required autocomplete="off" <div class="control"> data-stripe="exp-month" placeholder="MM">
                </div>
                <div class="field col-md-4 col-sm-12">
                    <label><?php echo app('translator')->getFromJson('user.card.year'); ?></label>
                    <input type="text" onkeypress="return isNumberKey(event);" maxlength="2" required autocomplete="off" data-stripe="exp-year" <div class="control"> placeholder="YY">
                </div>
                <div class="field col-md-4 col-sm-12">
                    <label><?php echo app('translator')->getFromJson('user.card.cvv'); ?></label>
                    <input type="text" data-stripe="cvc" onkeypress="return isNumberKey(event);" required autocomplete="off" maxlength="4" <div class="control"> placeholder="<?php echo app('translator')->getFromJson('user.card.cvv'); ?>">
                </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-default"><?php echo app('translator')->getFromJson('user.card.add_card'); ?></button>
          </div>
        </form>

        </div>

      </div>
    </div>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        Stripe.setPublishableKey("<?php echo e(config('constants.stripe_publishable_key', '')); ?>");

         var stripeResponseHandler = function (status, response) {
            var $form = $('#payment-form');         

            if (response.error) {
                // Show the errors on the form
                $form.find('.payment-errors').text(response.error.message);
                $form.find('button').prop('disabled', false);
                alert(response.error.message);

            } else {
                // token contains id, last4, and card type
                var token = response.id;
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" id="stripeToken" name="stripe_token" />').val(token));
                jQuery($form.get(0)).submit();
            }
        };
                
        $('#payment-form').submit(function (e) {
            
            if ($('#stripeToken').length == 0)
            {
                var $form = $(this);
                $form.find('button').prop('disabled', true);               
                Stripe.card.createToken($form, stripeResponseHandler);
                return false;
            }
        });

    </script>
    <script type="text/javascript">
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/account/payment.blade.php ENDPATH**/ ?>