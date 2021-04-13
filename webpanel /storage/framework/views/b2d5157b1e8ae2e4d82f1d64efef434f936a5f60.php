<?php $__env->startSection('title', 'Wallet '); ?>

<?php $__env->startSection('content'); ?>

<div class="column is-9">
    <div class="dash-content">
        <div class="columns no-margin">
            <div class="column">
                <h4 class="page-title"><?php echo app('translator')->getFromJson('user.my_wallet'); ?></h4>
            </div>
        </div>
        <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="columns no-margin">
            <form action="<?php echo e(url('add/money')); ?>" id="add_money" method="POST">
            <?php echo e(csrf_field()); ?>

                <div class="column">
                     
                    <div class="wallet">
                        <h4 class="amount">
                        	<span class="price"><?php echo e(currency(Auth::user()->wallet_balance)); ?></span>
                        	<span class="txt"><?php echo app('translator')->getFromJson('user.in_your_wallet'); ?></span>
                        </h4>
                    </div>                                                               

                </div>
                <div class="column">
                    
                    <h6><strong><?php echo app('translator')->getFromJson('user.add_money'); ?></strong></h6>

                    <select class="select" autocomplete="off" name="payment_mode" onchange="card(this.value);">
                      <?php if(Config::get('constants.card') == 1): ?>
                      <?php if($cards->count() > 0): ?>
                        <option value="CARD">CARD</option>
                      <?php endif; ?>
                      <?php if(Config::get('constants.braintree') == 1): ?>
                      <option value="BRAINTREE">BRAINTREE</option>
                      <?php endif; ?>
                      <?php endif; ?>
                      <?php if(Config::get('constants.payumoney') == 1): ?>
                      <option value="PAYUMONEY">PAYUMONEY</option>
                      <?php endif; ?>
                      <?php if(Config::get('constants.paypal') == 1): ?>
                      <option value="PAYPAL">PAYPAL</option>
                      <?php endif; ?>
                      <?php if(Config::get('constants.paytm') == 1): ?>
                      <option value="PAYTM">PAYTM</option>
                      <?php endif; ?>
                    </select>
                    <br>
                    
                    <?php if(Config::get('constants.card') == 1): ?>
                    <select style="display: none;" class="input" name="card_id" id="card_id">
                      <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if($card->is_default == 1): ?> selected <?php endif; ?> value="<?php echo e($card->card_id); ?>"><?php echo e($card->brand); ?> **** **** **** <?php echo e($card->last_four); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>

                    <?php if(Config::get('constants.braintree') == 1): ?>
                        <div style="display: none;" id="braintree">
                            <div id="dropin-container"></div>
                        </div>
                    <?php endif; ?>

                    <br>
                    <?php if(Config::get('constants.braintree') == 1): ?>
                    <input type="hidden" name="braintree_nonce" value="" />
                    <?php endif; ?>
                    <input type="hidden" name="user_type" value="user" />
                    <div class="input-group full-input">
                        <input type="number" class="input" name="amount" placeholder="<?php echo app('translator')->getFromJson('user.enter_amount'); ?>" >
                    </div>

                    
                    <button type="submit" id="submit-button" class="button is-primary fare-btn"><?php echo app('translator')->getFromJson('user.add_money'); ?></button> 

                </div>
            </form>

        </div>

        <div class="manage-doc-section-content border-top">
             <div class="tab-content list-content">
                <div class="list-view pad30 ">
                    <table class="earning-table table table-responsive">
                        <thead>
                            <tr>
                                <th><?php echo app('translator')->getFromJson('provider.sno'); ?></th>
                                <th><?php echo app('translator')->getFromJson('provider.transaction_ref'); ?></th>
                                <th><?php echo app('translator')->getFromJson('provider.transaction_desc'); ?></th>
                                <th><?php echo app('translator')->getFromJson('provider.status'); ?></th>
                                <th><?php echo app('translator')->getFromJson('provider.amount'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php ($page = ($pagination->currentPage-1)*$pagination->perPage); ?>
                               <?php $__currentLoopData = $wallet_transation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$wallet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <?php ($page++); ?>
                                    <tr>
                                        <td><?php echo e($page); ?></td>
                                        <td><?php echo e($wallet->transaction_alias); ?></td>
                                        <td><?php echo e($wallet->transaction_desc); ?></td>
                                        <td><?php if($wallet->type == 'C'): ?>  <?php echo app('translator')->getFromJson('user.credit'); ?> <?php else: ?> <?php echo app('translator')->getFromJson('user.debit'); ?> <?php endif; ?></td>
                                        <td><?php echo e(currency($wallet->amount)); ?>

                                        </td>
                                       
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </tbody>

                    </table>
                     <?php echo e($wallet_transation->links()); ?>

                </div>
             </div>
         </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php if(Config::get('constants.braintree') == 1): ?>
<script src="https://js.braintreegateway.com/web/dropin/1.14.1/js/dropin.min.js"></script>

<script>
    var button = document.querySelector('#submit-button');
    var form = document.querySelector('#add_money');
    braintree.dropin.create({
      authorization: '<?php echo e($clientToken); ?>',
      container: '#dropin-container',
      //Here you can hide paypal
      paypal: {
        flow: 'vault'
      }
    }, function (createErr, instance) {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        if(document.querySelector('select[name="payment_mode"]').value == "BRAINTREE") {
            instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
               document.querySelector('input[name="braintree_nonce"]').value = payload.nonce;
               console.log(payload.nonce);
               form.submit();
          });
          } else {
            form.submit();
          }
        
      });
    });
</script>
<?php endif; ?>

<script type="text/javascript">
    <?php if(Config::get('constants.card') == 1): ?>
        card('CARD');
    <?php endif; ?>

    function card(value){
        $('#card_id, #braintree').fadeOut(300);
        if(value == 'CARD'){
            $('#card_id').fadeIn(300);
        }else if(value == 'BRAINTREE'){
            $('#braintree').fadeIn(300);
        }
    }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>