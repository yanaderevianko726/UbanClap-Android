<?php $__env->startSection('title', 'Configs Pagamento '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
   
    <div class="container-fluid">
	<div class="box box-block bg-white">
		<div class="bd-example bd-example-tabs" role="tabpanel">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="paymentMode-tab" data-toggle="tab" href="#paymentMode" role="tab" aria-controls="paymentMode" aria-expanded="true">Modos de Pagamento</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="paymentSetting-tab" data-toggle="tab" href="#paymentSetting" role="tab" aria-controls="paymentSetting" aria-expanded="false">Configurações de Pagamento</a>
    </li>
   
  </ul>
  <div class="tab-content" id="myTabContent">
    <div role="tabpanel" class="tab-pane fade active in" id="paymentMode" aria-labelledby="home-tab" aria-expanded="true">
    	<div class="form-box row">
    		<div class="col-md-9">

            <form action="<?php echo e(route('admin.settings.payment.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-money pull-right"></i>
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="cash-payments" class="label">
                                   <?php echo app('translator')->getFromJson('admin.payment.cash_payments'); ?> 
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.cash') == 1): ?> checked  <?php endif; ?> autocomplete="off" name="cash" id="cash-payments" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                    </blockquote>
                </div><!-- DINHEIRO-->
                
                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-cc-stripe pull-right"></i>
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="stripe_secret_key" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.card_payments'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.card') == 1): ?> checked  <?php endif; ?> autocomplete="off" name="card" id="stripe_check" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.card') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="stripe_secret_key" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.stripe_secret_key'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.stripe_secret_key')); ?>" name="stripe_secret_key" id="stripe_secret_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.stripe_secret_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="stripe_publishable_key" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.stripe_publishable_key'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.stripe_publishable_key')); ?>" name="stripe_publishable_key" id="stripe_publishable_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.stripe_publishable_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="stripe_currency" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?></label>
                                <div class="col-xs-8">
                                    <select name="stripe_currency" <div class="control"> required>
                                    <option <?php if(config('constants.stripe_currency') == "BRL"): ?> selected <?php endif; ?> value="BRL">BRL</option>
                                    <option <?php if(config('constants.stripe_currency') == "USD"): ?> selected <?php endif; ?> value="USD">USD</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div><!-- STRIPE -->
                
                <!-- //TODO ALLAN - Alterações Debit na máquina e voucher -->
                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-credit-card pull-right"></i>
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="debit-machine-payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.debit_machine_payments'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.debit_machine') == 1): ?> checked  <?php endif; ?> autocomplete="off" name="debit_machine" id="debit-machine-payments" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                    </blockquote>
                </div><!-- DEBITO NA MÁQUINA-->
                
                <!-- //TODO ALLAN - Alterações Debit na máquina e voucher -->
                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-sticky-note pull-right"></i>
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="voucher-payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.voucher_payments'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.voucher') == 1): ?> checked  <?php endif; ?> autocomplete="off" name="voucher" id="voucher-payments" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                    </blockquote>
                </div><!-- DEBITO NA MÁQUINA-->

<!--                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                         <i class="fa fa-3x fa-cc-stripe pull-right"></i> 
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.payumoney'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.payumoney') == 1): ?> checked  <?php endif; ?> autocomplete="off"  name="payumoney" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 payumoney_icon">
                                <img src="<?php echo e(asset('asset/img/payu.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.payumoney') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="payumoney_environment" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_environment'); ?></label>
                                <div class="col-xs-8">
                                    <select name="payumoney_environment" <div class="control"> required>
                                    <option <?php if(config('constants.payumoney_environment') == "test"): ?> selected <?php endif; ?> value="test">Development</option>
                                    <option <?php if(config('constants.payumoney_environment') == "secure"): ?> selected <?php endif; ?> value="secure">Production</option>
                                </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_merchant_id" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_merchant_id'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_merchant_id')); ?>" name="payumoney_merchant_id" id="payumoney_merchant_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_merchant_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_key" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_key'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_key')); ?>" name="payumoney_key" id="payumoney_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_salt" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_salt'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_salt')); ?>" name="payumoney_salt" id="payumoney_salt"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_salt'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_auth" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_auth'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_auth')); ?>" name="payumoney_auth" id="payumoney_auth"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_auth'); ?>">
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-paypal pull-right"></i>
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.paypal'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.paypal') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="paypal" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.paypal') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="paypal_environment" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_environment'); ?></label>
                                <div class="col-xs-8">
                                    <select name="paypal_environment" <div class="control"> required>
                                    <option <?php if(config('constants.paypal_environment') == "sandbox"): ?> selected <?php endif; ?> value="sandbox">Development</option>
                                    <option <?php if(config('constants.paypal_environment') == "live"): ?> selected <?php endif; ?> value="live">Production</option>
                                </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_client_id" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_client_id'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_client_id')); ?>" name="paypal_client_id" id="paypal_client_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_client_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_client_secret" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_client_secret'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_client_secret')); ?>" name="paypal_client_secret" id="paypal_client_secret"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_client_secret'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_currency" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?></label>
                                <div class="col-xs-8">
                                    <select name="paypal_currency" <div class="control"> required>
                                    <option <?php if(config('constants.paypal_currency') == "BRL"): ?> selected <?php endif; ?> value="BRL">BRL</option>
                                    <option <?php if(config('constants.paypal_currency') == "USD"): ?> selected <?php endif; ?> value="USD">USD</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-paypal pull-right"></i>
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.paypal_adaptive'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.paypal_adaptive') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="paypal_adaptive" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 paypal_adaptive_icon">
                                <img src="<?php echo e(asset('asset/img/adaptation.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.paypal_adaptive') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="paypal_adaptive_environment" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_adaptive_environment'); ?></label>
                                <div class="col-xs-8">
                                    <select name="paypal_adaptive_environment" <div class="control"> required>
                                    <option <?php if(config('constants.payumoney_environment') == "sandbox"): ?> selected <?php endif; ?> value="sandbox">Development</option>
                                    <option <?php if(config('constants.payumoney_environment') == "live"): ?> selected <?php endif; ?> value="live">Production</option>
                                </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_username" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_username'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_username')); ?>" name="paypal_username" id="paypal_username"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_username'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_password" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_password'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_password')); ?>" name="paypal_password" id="paypal_password"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_password'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_secret" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_secret'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_secret')); ?>" name="paypal_secret" id="paypal_secret"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_secret'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_certificate" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_certificate'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="file" name="paypal_certificate" id="paypal_certificate" placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_certificate'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_app_id" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_app_id'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_app_id')); ?>" name="paypal_app_id" id="paypal_app_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_app_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_adaptive_currency" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?></label>
                                <div class="col-xs-8">
                                    <select name="paypal_adaptive_currency" <div class="control"> required>
                                    <option <?php if(config('constants.paypal_adaptive_currency') == "BRL"): ?> selected <?php endif; ?> value="BRL">BRL</option>
                                    <option <?php if(config('constants.paypal_adaptive_currency') == "USD"): ?> selected <?php endif; ?> value="USD">USD</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                         <i class="fa fa-3x fa-credit-card pull-right"></i> 
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.braintree'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.braintree') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="braintree" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 braintree_icon">
                                <img src="<?php echo e(asset('asset/img/tree-brain.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.braintree') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="braintree_environment" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_environment'); ?></label>
                                <div class="col-xs-8">
                                    <select name="braintree_environment" <div class="control"> required>
                                          <option <?php if(config('constants.braintree_environment') == "sandbox"): ?> selected <?php endif; ?> value="sandbox">Development</option>
                                          <option <?php if(config('constants.braintree_environment') == "live"): ?> selected <?php endif; ?> value="live">Production</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="braintree_merchant_id" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_merchant_id'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.braintree_merchant_id')); ?>" name="braintree_merchant_id" id="braintree_merchant_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.braintree_merchant_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="braintree_public_key" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_public_key'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.braintree_public_key')); ?>" name="braintree_public_key" id="braintree_public_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.braintree_public_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="braintree_private_key" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_private_key'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.braintree_private_key')); ?>" name="braintree_private_key" id="braintree_private_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.braintree_private_key'); ?>">
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
              
                <div class="card card-block card-inverse card-primary">
                    <blockquote class="card-blockquote">
                         <i class="fa fa-3x fa-credit-card pull-right"></i> 
                        <div class="field">
                            <div class="col-xs-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.paytm'); ?>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(config('constants.paytm') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="paytm" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 braintree_icon">
                                <img width="110" src="<?php echo e(asset('asset/img/paytm-logo.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.paytm') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="paytm_environment" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_environment'); ?></label>
                                <div class="col-xs-8">
                                    <select name="paytm_environment" <div class="control"> required>
                                          <option <?php if(config('constants.paytm_environment') == "local"): ?> selected <?php endif; ?> value="local">Development</option>
                                          <option <?php if(config('constants.paytm_environment') == "production"): ?> selected <?php endif; ?> value="production">Production</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="paytm_merchant_id" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_id'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paytm_merchant_id')); ?>" name="paytm_merchant_id" id="paytm_merchant_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paytm_merchant_key" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_key'); ?></label>
                                <div class="col-xs-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paytm_merchant_key')); ?>" name="paytm_merchant_key" id="paytm_merchant_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paytm_website" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_website'); ?></label>
                                <div class="col-xs-8">
                                    <select name="paytm_website" <div class="control"> required>
                                          <option <?php if(config('constants.paytm_website') == "WEBSTAGING"): ?> selected <?php endif; ?> value="WEBSTAGING">Staging</option>
                                          <option <?php if(config('constants.paytm_website') == "WEBPROD"): ?> selected <?php endif; ?> value="WEBPROD">Production</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>-->

                <div class="field">
                    <div class="col-xs-4">
                        <a href="<?php echo e(URL::previous()); ?>" class="btn btn-warning btn-block"><?php echo app('translator')->getFromJson('admin.back'); ?></a>
                    </div>
                    <div class="offset-xs-4 col-xs-4">
                        <button type="submit" class="button is-link btn-block"><?php echo app('translator')->getFromJson('admin.payment.update_site_settings'); ?></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="tab-pane fade " id="paymentSetting" role="tabpanel" aria-labelledby="paymentSetting-tab" aria-expanded="false">
     <div class="form-box row">
    		<div class="col-md-8">
            <form action="<?php echo e(route('admin.settings.payment.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="card card-block card-inverse card-info">
                    <blockquote class="card-blockquote">
                        <div class="field">
                            <label for="daily_target" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.daily_target'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input" 
                                    type="number"
                                    value="<?php echo e(config('constants.daily_target', '0')); ?>"
                                    id="daily_target"
                                    name="daily_target"
                                    min="0"
                                    required
                                    placeholder="Daily Target">
                            </div>
                        </div>

                        <div class="field">
                            <label for="tax_percentage" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.tax_percentage'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.tax_percentage', '0')); ?>"
                                    id="tax_percentage"
                                    name="tax_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="Tax Percentage">
                            </div>
                        </div>

<!--                         <div class="field">
                            <label for="surge_trigger" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.surge_trigger_point'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.surge_trigger', '')); ?>"
                                    id="surge_trigger"
                                    name="surge_trigger"
                                    min="0"
                                    required
                                    placeholder="Surge Trigger Point">
                            </div>
                        </div>
                        
                        <div class="field">
                            <label for="surge_percentage" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.surge_percentage'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.surge_percentage', '0')); ?>"
                                    id="surge_percentage"
                                    name="surge_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="Surge percentage">
                            </div>
                        </div> -->

                        <div class="field">
                            <label for="commission_percentage" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.commission_percentage'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.commission_percentage', '0')); ?>"
                                    id="commission_percentage"
                                    name="commission_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="<?php echo app('translator')->getFromJson('admin.payment.commission_percentage'); ?>">
                            </div>
                        </div>                        

<!--                        <div class="field">
                            <label for="fleet_commission_percentage" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.fleet_commission_percentage'); ?> <span style="color:red">(It will work if admin commission 0%) </span> </label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.fleet_commission_percentage')); ?>"
                                    id="fleet_commission_percentage"
                                    name="fleet_commission_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="<?php echo app('translator')->getFromJson('admin.payment.fleet_commission_percentage'); ?>">
                            </div>
                        </div>-->

                        <div class="field">
                            <label for="peak_percentage" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.peak_percentage'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.peak_percentage', '0')); ?>"
                                    id="peak_percentage"
                                    name="peak_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="<?php echo app('translator')->getFromJson('admin.payment.peak_percentage'); ?>">
                            </div>
                        </div>

                        <div class="field">
                            <label for="waiting_percentage" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.waiting_percentage'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.waiting_percentage', '0')); ?>"
                                    id="waiting_percentage"
                                    name="waiting_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="<?php echo app('translator')->getFromJson('admin.payment.waiting_percentage'); ?>">
                            </div>
                        </div>

                        <div class="field">
                            <label for="minimum_negative_balance" class="col-xs-4 label"><?php echo app('translator')->getFromJson('admin.payment.minimum_negative_balance'); ?></label>
                            <div class="col-xs-8">
                                <input  class="input"
                                    type="number"
                                    value="<?php echo e(config('constants.minimum_negative_balance')); ?>"
                                    id="minimum_negative_balance"
                                    name="minimum_negative_balance"
                                    max='0'
                                    placeholder="<?php echo app('translator')->getFromJson('admin.payment.minimum_negative_balance'); ?>">
                            </div>
                        </div>

                    </blockquote>
                </div>

                <div class="field">
                    <div class="col-xs-4">
                        <a href="<?php echo e(URL::previous()); ?>" class="btn btn-warning btn-block"><?php echo app('translator')->getFromJson('admin.back'); ?></a>
                    </div>
                    <div class="offset-xs-4 col-xs-4">
                        <button type="submit" class="button is-link btn-block"><?php echo app('translator')->getFromJson('admin.payment.update_site_settings'); ?></button>
                    </div>
                </div>
            </form>
    		</div>
    	</div>
    </div>
   
  </div>
</div>
	</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

$('.js-switch').on('change', function() {
    if($(this).is(':checked')) {
        // console.log($(this).closest('blockquote').find('.payment_settings'));
        $(this).closest('blockquote').find('.payment_settings').fadeIn(700);
    } else {
        $(this).closest('blockquote').find('.payment_settings').fadeOut(700);
    }
    
});


$(function() {
    var ad_com="<?php echo e(config('constants.commission_percentage')); ?>";   
    if(ad_com>0){        
        $("#fleet_commission_percentage").val(0);
        $("#fleet_commission_percentage").prop('disabled', true);
        $("#fleet_commission_percentage").prop('required', false);       
    }
    else{
        $("#fleet_commission_percentage").prop('required', true);
    }
    $("#commission_percentage").on('keyup', function(){
        var ad_ins=parseFloat($(this).val());
        // console.log(ad_ins);
        if(ad_ins>0){
            $("#fleet_commission_percentage").val(0);
            $("#fleet_commission_percentage").prop('disabled', true);
            $("#fleet_commission_percentage").prop('required', false);
        }
        else{
            $("#fleet_commission_percentage").val('');
            $("#fleet_commission_percentage").prop('disabled', false);
            $("#fleet_commission_percentage").prop('required', true);
        }
        
    });
});    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/payment/settings.blade.php ENDPATH**/ ?>