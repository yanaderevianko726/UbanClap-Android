<?php
if(config('constants.card', 0) == 0){
    header('Location:/provider/profile');
    exit;
}   
?>


<?php $__env->startSection('content'); ?>
<div class="pro-dashboard-head">
    <div class="container">
        <a href="<?php echo e(route('provider.profile.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.profile'); ?></a>
        <a href="<?php echo e(route('provider.documents.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.manage_documents'); ?></a>
        <a href="<?php echo e(route('provider.location.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.update_location'); ?></a>
        <a href="<?php echo e(route('provider.wallet.transation')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.wallet_transaction'); ?></a>
        <a href="#" class="pro-head-link active"><?php echo app('translator')->getFromJson('provider.card.list'); ?></a>
        <a href="<?php echo e(route('provider.transfer')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.transfer'); ?></a>
        <?php if(config('constants.referral')==1): ?>
            <a href="<?php echo e(route('provider.referral')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.refer_friend'); ?></a>
        <?php endif; ?>
    </div>
</div>

<div class="pro-dashboard-content gray-bg">
    <div class="container">
        <div class="manage-docs pad30">
            <div class="manage-doc-content">
                <div class="manage-doc-section pad50">
                    <div class="manage-doc-section-head row no-margin">
                        <h3 class="manage-doc-tit">
                           
                        </h3>
                    </div>
                    <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                         
                   
                     <div class="manage-doc-section-content border-top">
                     <div class="tab-content list-content">
                        <div class="list-view pad30 ">
                            <?php if(Setting::get('demo_mode', 0) == 1): ?>
                                 <div class="column" style="height:50px;color:red;">
                                    ** Demo Mode : Use this card - CardNo:4000056655665556, MM:12, YY:20, CVV:123.
                                </div>
                            <?php endif; ?>
                            <a href="#" class="sub-right pull-right" data-toggle="modal" data-target="#add-card-modal" style="margin-right: 10px;margin-bottom: 10px;"><?php echo app('translator')->getFromJson('provider.card.add_debit_card'); ?></a>
                            <table class="earning-table table table-responsive">
                                <thead>
                                    <tr>
                                        <th><?php echo app('translator')->getFromJson('provider.card.type'); ?></th>
                                        <th><?php echo app('translator')->getFromJson('provider.card.four'); ?></th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($cards)!='0'): ?>    
                                    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($each->brand); ?></td>
                                            <td><?php echo e($each->last_four); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="2"><?php echo app('translator')->getFromJson('provider.card.notfound'); ?></td>
                                       </tr>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>
                     </div>
                     </div>
               
                </div>
            </div>
        </div>
    </div>
    <!-- Add Card Modal -->
    <div id="add-card-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo app('translator')->getFromJson('provider.card.add_debit_card'); ?></h4>
          </div>
            <form id="payment-form" action="<?php echo e(url('provider/card/store')); ?>" method="POST" >
                <?php echo e(csrf_field()); ?>


          <input type="hidden" data-stripe="currency" value="brl">
          <div class="modal-body">
            <div class="row no-margin" id="card-payment">
                <div class="payment-errors" style="display: none">
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <span id="errortxt"></span>
                    </div>
                </div>    
                <div class="field column col-sm-12">
                    <label><?php echo app('translator')->getFromJson('provider.card.fullname'); ?></label>
                    <input data-stripe="name" autocomplete="off" required type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.card.fullname'); ?>">
                </div>
                <div class="field column col-sm-12">
                    <label><?php echo app('translator')->getFromJson('provider.card.card_no'); ?></label>
                    <input data-stripe="number" type="text" onkeypress="return isNumberKey(event);" required autocomplete="off" maxlength="16" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.card.card_no'); ?>">
                </div>
                <div class="field column col-sm-12">
                    <label><?php echo app('translator')->getFromJson('provider.card.month'); ?></label>
                    <input type="text" onkeypress="return isNumberKey(event);" maxlength="2" required autocomplete="off" class="input" data-stripe="exp-month" placeholder="MM">
                </div>
                <div class="field column col-sm-12">
                    <label><?php echo app('translator')->getFromJson('provider.card.year'); ?></label>
                    <input type="text" onkeypress="return isNumberKey(event);" maxlength="2" required autocomplete="off" data-stripe="exp-year" class="input" placeholder="YY">
                </div>
                <div class="field column col-sm-12">
                    <label><?php echo app('translator')->getFromJson('provider.card.cvv'); ?></label>
                    <input type="text" data-stripe="cvc" onkeypress="return isNumberKey(event);" required autocomplete="off" maxlength="4" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.card.cvv'); ?>">
                </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="button is-default" ><?php echo app('translator')->getFromJson('provider.card.add_card'); ?></button>
          </div>
        </form>

        </div>

      </div>
    </div> 
</div>
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
            $("#add-card-modal").modal('toggle');
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

    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    function set_default(id)
    {
        $.ajax({
            method : 'POST',
            url : '<?php echo e(url('provider/card/set')); ?>',
            data : '_token=<?php echo e(csrf_token()); ?>&id='+id,
            success:function(html)
            {
                if(html=='success')
                {
                    alert('Successfully made changes');
                }
                else{
                    alert('Something Went wrong'); 
                }
            }

        })
    }
</script>    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('provider.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/wallet/card.blade.php ENDPATH**/ ?>