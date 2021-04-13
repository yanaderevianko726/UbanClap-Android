<?php $__env->startSection('title', 'Payment Setting'); ?>

<?php $__env->startSection('content'); ?>

<?php
    $iso_array = array(
        //'ABW','AFG','AGO','AIA','ALA','ALB','AND','ARE','ARG','ARM','ASM','ATA','ATF','ATG','YEM','ZAF','ZMB',
//'AUS','AUT','AZE','BDI','BEL','BEN','BES','BFA','BGD','BGR','BHR','BHS','BIH','BLM','BLR','BLZ','BMU','BOL','BRA','WLF','WSM',
//'BRB','BRN','BTN','BVT','BWA','CAF','CAN','CCK','CHE','CHL','CHN','CIV','CMR','COD','COG','COK','COL','COM','CPV','CRI','VUT',
//'CUB','CUW','CXR','CYM','CYP','CZE','DEU','DJI','DMA','DNK','DOM','DZA','ECU','EGY','ERI','ESH','ESP','EST','ETH','FIN','FJI',
//'FLK','FRA','FRO','FSM','GAB','GBR','GEO','GGY','GHA','GIB','GIN','GLP','GMB','GNB','GNQ','GRC','GRD','GRL','GTM','GUF','GUM',
//'GUY','HKG','HMD','HND','HRV','HTI','HUN','IDN','IMN','IND','IOT','IRL','IRN','IRQ','ISL','ISR','ITA','JAM','JEY','JOR','JPN',
//'KAZ','KEN','KGZ','KHM','KIR','KNA','KOR','KWT','LAO','LBN','LBR','LBY','LCA','LIE','LKA','LSO','LTU','LUX','LVA','MAC','MAF',
//'MAR','MCO','MDA','MDG','MDV','MEX','MHL','MKD','MLI','MLT','MMR','MNE','MNG','MNP','MOZ','MRT','MSR','MTQ','MUS','MWI','MYS',
//'MYT','NAM','NCL','NER','NFK','NGA','NIC','NIU','NLD','NOR','NPL','NRU','NZL','OMN','PAK','PAN','PCN','PER','PHL','PLW','PNG',
//'POL','PRI','PRK','PRT','PRY','PSE','PYF','QAT','REU','ROU','RUS','RWA','SAU','SDN','SEN','SGP','SGS','SHN','SJM','SLB','SLE',
//'SLV','SMR','SOM','SPM','SRB','SSD','STP','SUR','SVK','SVN','SWE','SWZ','SXM','SYC','SYR','TCA','TCD','TGO','THA','TJK','TKL',
//'TKM','TLS','TON','TTO','TUN','TUR','TUV','TWN','TZA','UGA','UKR','UMI','URY','USA','UZB','VAT','VCT','VEN','VGB','VIR','VNM',
'usd', 'aed', 'afn', 'all', 'amd', 'ang', 'aoa', 'ars', 'aud', 'awg', 'azn', 'bam', 'bbd', 'bdt', 'bgn', 'bif', 'bmd', 'bnd', 'bob',
 'brl', 'bsd', 'bwp', 'bzd', 'cad', 'cdf', 'chf', 'clp', 'cny', 'cop', 'crc', 'cve', 'czk', 'djf', 'dkk', 'dop', 'dzd', 'egp', 'etb',
  'eur', 'fjd', 'fkp', 'gbp', 'gel', 'gip', 'gmd', 'gnf', 'gtq', 'gyd', 'hkd', 'hnl', 'hrk', 'htg', 'huf', 'idr', 'ils', 'inr', 'isk', 'jmd', 'jpy', 'kes', 'kgs', 'khr', 'kmf', 'krw',
   'kyd', 'kzt', 'lak', 'lbp', 'lkr', 'lrd', 'lsl', 'mad', 'mdl', 'mga', 'mkd', 'mmk', 'mnt', 'mop', 'mro', 'mur', 'mvr', 'mwk', 'mxn', 'myr', 'mzn', 'nad', 'ngn', 'nio', 'nok', 'npr',
    'nzd', 'pab', 'pen', 'pgk', 'php', 'pkr', 'pln', 'pyg', 'qar', 'ron', 'rsd', 'rub', 'rwf', 'sar', 'sbd', 'scr', 'sek', 'sgd', 'shp', 'sll', 'sos', 'srd', 'std', 'szl', 'thb', 'tjs', 
    'top', 'try', 'ttd', 'twd', 'tzs', 'uah', 'ugx', 'uyu', 'uzs', 'vnd', 'vuv', 'wst', 'xaf', 'xcd', 'xof', 'xpf', 'yer', 'zar', 'zmw', 'eek', 'lvl', 'svc', 'vef', 'ltl');
?>

<div class="box box-block bg-white">
    <div class="tabs is-centered" style="display: block;" id="nav">
        <ul>
            <li class=" is-active" id="paymentMode-tab" data-target="paymentMode">
                <a>Payment Methods</a>
            </li>
            <li id="paymentSetting-tab" data-target="paymentSetting">
                <a>Payment Settings</a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane is-active" id="paymentMode">
                <div class="columns">
                    <div class="column">

                    <form action="<?php echo e(route('admin.settings.payment.store')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="card">
                            <blockquote class="card-blockquote">
                                <i class="fa fa-3x fa-money pull-right"></i>
                                <div class="field">
                                    <div class="column is-4 arabic_right">
                                        <label for="cash-payments" class="label">
                                            <?php echo app('translator')->getFromJson('admin.payment.cash_payments'); ?>
                                        </label>
                                    </div>
                                    <div class="column is-6">
                                        <input <?php if(config('constants.cash')==1): ?> checked <?php endif; ?> autocomplete="off"
                                            name="cash" id="cash-payments" type="checkbox" 
                                            class="js-switch" data-color="#43b968"
                                            >
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <div class="card ">
                            <blockquote class="card-blockquote">
                                <i class="fa fa-3x fa-cc-stripe pull-right"></i>
                                <div class="field">
                                    <div class="column is-4 arabic_right">
                                        <label for="stripe_secret_key" class="label">
                                            <?php echo app('translator')->getFromJson('admin.payment.card_payments'); ?>
                                        </label>
                                    </div>
                                    <div class="column is-6">
                                        <input <?php if(config('constants.card')==1): ?> checked <?php endif; ?> autocomplete="off"
                                            name="card" id="stripe_check" type="checkbox" class="js-switch"
                                            data-color="#43b968">
                                    </div>
                                </div>
                                <div class="payment_settings" <?php if(config('constants.card')==0): ?> style="display: none;"
                                    <?php endif; ?>>
                                    <div class="field">
                                        <label for="stripe_secret_key"
                                            class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.stripe_secret_key'); ?></label>
                                        <div class="column is-8">
                                            <input class="input" type="text"
                                                value="<?php echo e(config('constants.stripe_secret_key')); ?>"
                                                name="stripe_secret_key" id="stripe_secret_key"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.payment.stripe_secret_key'); ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="stripe_publishable_key"
                                            class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.stripe_publishable_key'); ?></label>
                                        <div class="column is-8">
                                            <input class="input" type="text"
                                                value="<?php echo e(config('constants.stripe_publishable_key')); ?>"
                                                name="stripe_publishable_key" id="stripe_publishable_key"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.payment.stripe_publishable_key'); ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="stripe_currency"
                                            class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?></label>
                                        <div class="column is-8">
                                            <select name="stripe_currency" class="input" required>
                                                <?php $__currentLoopData = $iso_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if(config('constants.stripe_currency') == $item): ?> selected <?php endif; ?>
                                                    value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div><!-- STRIPE -->

                        

                        <!--                <div class="card ">
                    <blockquote class="card-blockquote">
                         <i class="fa fa-3x fa-cc-stripe pull-right"></i> 
                        <div class="field">
                            <div class="column is-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.payumoney'); ?>
                                </label>
                            </div>
                            <div class="column is-6">
                                <input <?php if(config('constants.payumoney') == 1): ?> checked  <?php endif; ?> autocomplete="off"  name="payumoney" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 payumoney_icon">
                                <img src="<?php echo e(asset('asset/img/payu.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.payumoney') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="payumoney_environment" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_environment'); ?></label>
                                <div class="column is-8">
                                    <select name="payumoney_environment" class="input" required>
                                    <option <?php if(config('constants.payumoney_environment') == "test"): ?> selected <?php endif; ?> value="test">Development</option>
                                    <option <?php if(config('constants.payumoney_environment') == "secure"): ?> selected <?php endif; ?> value="secure">Production</option>
                                </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_merchant_id" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_merchant_id'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_merchant_id')); ?>" name="payumoney_merchant_id" id="payumoney_merchant_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_merchant_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_key" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_key'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_key')); ?>" name="payumoney_key" id="payumoney_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_salt" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_salt'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_salt')); ?>" name="payumoney_salt" id="payumoney_salt"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_salt'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="payumoney_auth" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.payumoney_auth'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.payumoney_auth')); ?>" name="payumoney_auth" id="payumoney_auth"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.payumoney_auth'); ?>">
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="card ">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-paypal pull-right"></i>
                        <div class="field">
                            <div class="column is-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.paypal'); ?>
                                </label>
                            </div>
                            <div class="column is-6">
                                <input <?php if(config('constants.paypal') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="paypal" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.paypal') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="paypal_environment" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_environment'); ?></label>
                                <div class="column is-8">
                                    <select name="paypal_environment" class="input" required>
                                    <option <?php if(config('constants.paypal_environment') == "sandbox"): ?> selected <?php endif; ?> value="sandbox">Development</option>
                                    <option <?php if(config('constants.paypal_environment') == "live"): ?> selected <?php endif; ?> value="live">Production</option>
                                </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_client_id" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_client_id'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_client_id')); ?>" name="paypal_client_id" id="paypal_client_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_client_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_client_secret" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_client_secret'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_client_secret')); ?>" name="paypal_client_secret" id="paypal_client_secret"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_client_secret'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_currency" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?></label>
                                <div class="column is-8">
                                    <select name="paypal_currency" class="input" required>
                                    <option <?php if(config('constants.paypal_currency') == "BRL"): ?> selected <?php endif; ?> value="BRL">BRL</option>
                                    <option <?php if(config('constants.paypal_currency') == "USD"): ?> selected <?php endif; ?> value="USD">USD</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="card ">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-paypal pull-right"></i>
                        <div class="field">
                            <div class="column is-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.paypal_adaptive'); ?>
                                </label>
                            </div>
                            <div class="column is-6">
                                <input <?php if(config('constants.paypal_adaptive') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="paypal_adaptive" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 paypal_adaptive_icon">
                                <img src="<?php echo e(asset('asset/img/adaptation.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.paypal_adaptive') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="paypal_adaptive_environment" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_adaptive_environment'); ?></label>
                                <div class="column is-8">
                                    <select name="paypal_adaptive_environment" class="input" required>
                                    <option <?php if(config('constants.payumoney_environment') == "sandbox"): ?> selected <?php endif; ?> value="sandbox">Development</option>
                                    <option <?php if(config('constants.payumoney_environment') == "live"): ?> selected <?php endif; ?> value="live">Production</option>
                                </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_username" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_username'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_username')); ?>" name="paypal_username" id="paypal_username"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_username'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_password" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_password'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_password')); ?>" name="paypal_password" id="paypal_password"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_password'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_secret" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_secret'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_secret')); ?>" name="paypal_secret" id="paypal_secret"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_secret'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_certificate" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_certificate'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="file" name="paypal_certificate" id="paypal_certificate" placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_certificate'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_app_id" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paypal_app_id'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paypal_app_id')); ?>" name="paypal_app_id" id="paypal_app_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paypal_app_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paypal_adaptive_currency" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?></label>
                                <div class="column is-8">
                                    <select name="paypal_adaptive_currency" class="input" required>
                                    <option <?php if(config('constants.paypal_adaptive_currency') == "BRL"): ?> selected <?php endif; ?> value="BRL">BRL</option>
                                    <option <?php if(config('constants.paypal_adaptive_currency') == "USD"): ?> selected <?php endif; ?> value="USD">USD</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="card ">
                    <blockquote class="card-blockquote">
                         <i class="fa fa-3x fa-credit-card pull-right"></i> 
                        <div class="field">
                            <div class="column is-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.braintree'); ?>
                                </label>
                            </div>
                            <div class="column is-6">
                                <input <?php if(config('constants.braintree') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="braintree" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 braintree_icon">
                                <img src="<?php echo e(asset('asset/img/tree-brain.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.braintree') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="braintree_environment" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_environment'); ?></label>
                                <div class="column is-8">
                                    <select name="braintree_environment" class="input" required>
                                          <option <?php if(config('constants.braintree_environment') == "sandbox"): ?> selected <?php endif; ?> value="sandbox">Development</option>
                                          <option <?php if(config('constants.braintree_environment') == "live"): ?> selected <?php endif; ?> value="live">Production</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="braintree_merchant_id" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_merchant_id'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.braintree_merchant_id')); ?>" name="braintree_merchant_id" id="braintree_merchant_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.braintree_merchant_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="braintree_public_key" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_public_key'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.braintree_public_key')); ?>" name="braintree_public_key" id="braintree_public_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.braintree_public_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="braintree_private_key" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.braintree_private_key'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.braintree_private_key')); ?>" name="braintree_private_key" id="braintree_private_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.braintree_private_key'); ?>">
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
              
                <div class="card ">
                    <blockquote class="card-blockquote">
                         <i class="fa fa-3x fa-credit-card pull-right"></i> 
                        <div class="field">
                            <div class="column is-4 arabic_right">
                                <label for="card_payments" class="label">
                                    <?php echo app('translator')->getFromJson('admin.payment.paytm'); ?>
                                </label>
                            </div>
                            <div class="column is-6">
                                <input <?php if(config('constants.paytm') == 1): ?> checked  <?php endif; ?>  autocomplete="off" name="paytm" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                            <div class="col-xs-2 braintree_icon">
                                <img width="110" src="<?php echo e(asset('asset/img/paytm-logo.png')); ?>">
                            </div>
                        </div>
                        <div class="payment_settings" <?php if(config('constants.paytm') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="field">
                                <label for="paytm_environment" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_environment'); ?></label>
                                <div class="column is-8">
                                    <select name="paytm_environment" class="input" required>
                                          <option <?php if(config('constants.paytm_environment') == "local"): ?> selected <?php endif; ?> value="local">Development</option>
                                          <option <?php if(config('constants.paytm_environment') == "production"): ?> selected <?php endif; ?> value="production">Production</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="paytm_merchant_id" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_id'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paytm_merchant_id')); ?>" name="paytm_merchant_id" id="paytm_merchant_id"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_id'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paytm_merchant_key" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_key'); ?></label>
                                <div class="column is-8">
                                    <input  class="input" type="text" value="<?php echo e(config('constants.paytm_merchant_key')); ?>" name="paytm_merchant_key" id="paytm_merchant_key"  placeholder="<?php echo app('translator')->getFromJson('admin.payment.paytm_merchant_key'); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <label for="paytm_website" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.paytm_website'); ?></label>
                                <div class="column is-8">
                                    <select name="paytm_website" class="input" required>
                                          <option <?php if(config('constants.paytm_website') == "WEBSTAGING"): ?> selected <?php endif; ?> value="WEBSTAGING">Staging</option>
                                          <option <?php if(config('constants.paytm_website') == "WEBPROD"): ?> selected <?php endif; ?> value="WEBPROD">Production</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>-->

                        <div class="field">
                            <div class="offset-xs-4 column is-4">
                                <button type="submit"
                                    class="button is-link btn-block"><?php echo app('translator')->getFromJson('admin.payment.update_site_settings'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="tab-pane " id="paymentSetting">
                <div class="form-box columns">
                    <div class="column">
                    <form action="<?php echo e(route('admin.settings.payment.store')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                                <div class="field">
                                    <label for="daily_target"
                                        class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.daily_target'); ?></label>
                                    <div class="column is-8">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.daily_target', '0')); ?>" id="daily_target"
                                            name="daily_target" min="0" required placeholder="Daily Target">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="tax_percentage"
                                        class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.tax_percentage'); ?></label>
                                    <div class="column is-8">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.tax_percentage', '0')); ?>" id="tax_percentage"
                                            name="tax_percentage" min="0" max="100" placeholder="Tax Percentage">
                                    </div>
                                </div>

                                <!--                         <div class="field">
                            <label for="surge_trigger" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.surge_trigger_point'); ?></label>
                            <div class="column is-8">
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
                            <label for="surge_percentage" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.surge_percentage'); ?></label>
                            <div class="column is-8">
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
                                    <label for="commission_percentage"
                                        class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.commission_percentage'); ?></label>
                                    <div class="column is-8">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.commission_percentage', '0')); ?>"
                                            id="commission_percentage" name="commission_percentage" min="0" max="100"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.payment.commission_percentage'); ?>">
                                    </div>
                                </div>

                                <!--                        <div class="field">
                            <label for="fleet_commission_percentage" class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.fleet_commission_percentage'); ?> <span style="color:red">(It will work if admin commission 0%) </span> </label>
                            <div class="column is-8">
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
                                    <label for="peak_percentage"
                                        class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.peak_percentage'); ?></label>
                                    <div class="column is-8">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.peak_percentage', '0')); ?>" id="peak_percentage"
                                            name="peak_percentage" min="0" max="100"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.payment.peak_percentage'); ?>">
                                    </div>
                                </div>

                                

                                <div class="field">
                                    <label for="minimum_negative_balance"
                                        class="column is-4 label"><?php echo app('translator')->getFromJson('admin.payment.minimum_negative_balance'); ?></label>
                                    <div class="column is-8">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.minimum_negative_balance')); ?>"
                                            id="minimum_negative_balance" name="minimum_negative_balance" max='0'
                                            placeholder="<?php echo app('translator')->getFromJson('admin.payment.minimum_negative_balance'); ?>">
                                    </div>
                                </div>

                        <div class="field">
                            <div class="offset-xs-4 column is-4">
                                <button type="submit"
                                    class="button is-link btn-block"><?php echo app('translator')->getFromJson('admin.payment.update_site_settings'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/tabs.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/tabs.js')); ?>"></script>
<script type="text/javascript">
    $('.js-switch').on('change', function () {
        if ($(this).is(':checked')) {
            // console.log($(this).closest('blockquote').find('.payment_settings'));
            $(this).closest('blockquote').find('.payment_settings').fadeIn(700);
        } else {
            $(this).closest('blockquote').find('.payment_settings').fadeOut(700);
        }

    });


    $(function () {
        var ad_com = "<?php echo e(config('constants.commission_percentage')); ?>";
        if (ad_com > 0) {
            $("#fleet_commission_percentage").val(0);
            $("#fleet_commission_percentage").prop('disabled', true);
            $("#fleet_commission_percentage").prop('required', false);
        } else {
            $("#fleet_commission_percentage").prop('required', true);
        }
        $("#commission_percentage").on('keyup', function () {
            var ad_ins = parseFloat($(this).val());
            // console.log(ad_ins);
            if (ad_ins > 0) {
                $("#fleet_commission_percentage").val(0);
                $("#fleet_commission_percentage").prop('disabled', true);
                $("#fleet_commission_percentage").prop('required', false);
            } else {
                $("#fleet_commission_percentage").val('');
                $("#fleet_commission_percentage").prop('disabled', false);
                $("#fleet_commission_percentage").prop('required', true);
            }

        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>