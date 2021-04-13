<?php $__env->startSection('content'); ?>
<div class="pro-dashboard-head">
    <div class="container">
        <a href="#" class="pro-head-link active"><?php echo app('translator')->getFromJson('provider.profile.profile'); ?></a>
        <a href="<?php echo e(route('provider.documents.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.manage_documents'); ?></a>
        <a href="<?php echo e(route('provider.location.index')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.update_location'); ?></a>        
        <a href="<?php echo e(route('provider.wallet.transation')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.wallet_transaction'); ?></a>
        <?php if(config('constants.card')==1): ?>
            <a href="<?php echo e(route('provider.cards')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.card.list'); ?></a>
        <?php endif; ?>
        <a href="<?php echo e(route('provider.transfer')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.transfer'); ?></a>
        <?php if(config('constants.referral')==1): ?>
            <a href="<?php echo e(route('provider.referral')); ?>" class="pro-head-link"><?php echo app('translator')->getFromJson('provider.profile.refer_friend'); ?></a>
        <?php endif; ?>
    </div>
</div>
<!-- Pro-dashboard-content -->
<div class="pro-dashboard-content gray-bg">
    <div class="profile">
        <!-- Profile head -->
        
        <div class="container">
            <div class="profile-head white-bg row no-margin">
                <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="prof-head-left column">
                    <div class="new-pro-img bg-img" style="background-image: url(<?php echo e(Auth::guard('provider')->user()->avatar ? asset('storage/'.Auth::guard('provider')->user()->avatar) : asset('asset/img/provider.jpg')); ?>);"></div>
                </div> 

                <div class="prof-head-right column">
                    <h3 class="prof-name"><?php echo e(Auth::guard('provider')->user()->first_name); ?> <?php echo e(Auth::guard('provider')->user()->last_name); ?></h3>
                    <p class="board-badge"><?php echo e(strtoupper(Auth::guard('provider')->user()->status)); ?></p>
                </div>
            </div>
        </div>

        <!-- Profile-content -->
        <div class="profile-content gray-bg pad50">
            <div class="container">
                <div class="row no-margin">
                    <div class="column is-7 no-padding">
                        <form class="profile-form" action="<?php echo e(route('provider.profile.update')); ?>" method="POST" enctype="multipart/form-data" role="form">
                            <?php echo e(csrf_field()); ?>

                            <!-- Prof-form-sub-sec -->
                            <div class="prof-form-sub-sec">
                                <div class="row no-margin">
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.first_name'); ?></label>
                                            <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.first_name'); ?>" name="first_name" value="<?php echo e(Auth::guard('provider')->user()->first_name); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.first_name'); ?> <?php echo app('translator')->getFromJson('provider.profile.error_msg'); ?>">
                                        </div>
                                    </div>
                                    <div class="prof-sub-col col-sm-6 column no-right-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.last_name'); ?></label>
                                            <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.last_name'); ?>" name="last_name" value="<?php echo e(Auth::guard('provider')->user()->last_name); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.last_name'); ?> <?php echo app('translator')->getFromJson('provider.profile.error_msg'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="prof-sub-col prof-1 column">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.avatar'); ?></label>
                                            <input type="file" class="input" name="avatar">
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-margin">
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.phone'); ?></label>
                                            <input type="text" class="input" id="phone_number" required placeholder="Contact Number" name="mobile" value="<?php echo e(Auth::guard('provider')->user()->mobile); ?>" data-validation="custom length" data-validation-length="10-15" data-validation-regexp="^([0-9\+]+)$" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.error_phone'); ?>" disabled="disabled">
                                            <div id="phone_number_container" style="display: none;">
                                                <div class="prof-sub-col col-sm-3 no-left-padding">
                                                <input type="text" class="form-control col-sm-2" name="country_code" value="" placeholder="+55" >
                                                </div>
                                                <div class="prof-sub-col col-sm-9 no-left-padding">
                                                <input type="text" class="form-control col-sm-2" name="phone_number" value="" >
                                                </div>
                                            </div>
                                            <div id="mobile_verfication"></div>
                                        </div>
                                    </div>
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field">
                                            <label>&nbsp;</label>
                                            <a class="button is-block btn-primary update-link update-mobile" style="margin-top: 0;"><?php echo app('translator')->getFromJson('provider.profile.change_mobile'); ?></a>
                                            <a class="button is-block btn-primary update-link verify-mobile" style="margin-top: 0; display: none;"><?php echo app('translator')->getFromJson('provider.profile.verify'); ?></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="prof-sub-col col-sm-12 column no-right-padding">
                                        <div class="field no-margin">
                                            <label for="exampleSelect1"><?php echo app('translator')->getFromJson('provider.profile.language'); ?></label>
                                            <?php ($language=get_all_language()); ?>
                                            <select class="select" name="language" id="language">
                                                <?php if(Auth::guard('provider')->user()->profile): ?>
                                                    <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lkey=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($lkey); ?>" <?php if(Auth::guard('provider')->user()->profile->language==$lkey): ?> selected <?php endif; ?>><?php echo e($lang); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                   <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lkey=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($lkey); ?>"><?php echo e($lang); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                                <?php endif; ?>    
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of prof-sub-sec -->

                            <!-- Prof-form-sub-sec -->
                            <div class="prof-form-sub-sec border-top">
                                <div class="field">
                                    <label><?php echo app('translator')->getFromJson('provider.profile.address'); ?></label>
                                    <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.address'); ?>" name="address" value="<?php echo e(Auth::guard('provider')->user()->profile ? Auth::guard('provider')->user()->profile->address : ""); ?>">
                                    <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.full_address'); ?>" style="border-top: none;" name="address_secondary" value="<?php echo e(Auth::guard('provider')->user()->profile ? Auth::guard('provider')->user()->profile->address_secondary : ""); ?>">
                                </div>

                                <!-- <div class="row no-margin">
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field no-margin">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.city'); ?></label>
                                            <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.city'); ?>" name="city" value="<?php echo e(Auth::guard('provider')->user()->profile ? Auth::guard('provider')->user()->profile->city : ""); ?>">
                                        </div>
                                    </div>
                                    <div class="prof-sub-col col-sm-6 column no-right-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.country'); ?></label>
                                            <select class="select" name="country">
                                                <option value="US">United States</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row no-margin">
                                    <!-- <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field no-margin">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.pin'); ?></label>
                                            <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.pin'); ?>" name="postal_code" value="<?php echo e(Auth::guard('provider')->user()->profile ? Auth::guard('provider')->user()->profile->postal_code : ""); ?>">
                                        </div>
                                    </div> -->
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.service_type'); ?></label>
                                            <select class="select" name="service_type" data-validation="required">
                                                <option value="">Select Service</option>
                                                <?php $__currentLoopData = get_all_service_types(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if(Auth::guard('provider')->user()->service->service_type->id == $type->id): ?> selected="selected" <?php endif; ?> value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="prof-sub-col col-sm-6 column no-right-padding">
                                        <div class="field no-margin">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.car_number'); ?></label>
                                            <input type="text" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.profile.car_number'); ?>" name="service_number" value="<?php echo e(Auth::guard('provider')->user()->service->service_number ? Auth::guard('provider')->user()->service->service_number : ""); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.car_number'); ?> <?php echo app('translator')->getFromJson('provider.profile.error_msg'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-margin">                                    
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.car_model'); ?></label>
                                            <input type="text"  placeholder="<?php echo app('translator')->getFromJson('provider.profile.car_model'); ?>" class="input" name="service_model" value="<?php echo e(Auth::guard('provider')->user()->service->service_model ? Auth::guard('provider')->user()->service->service_model : ""); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.car_model'); ?> <?php echo app('translator')->getFromJson('provider.profile.error_msg'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of prof-sub-sec -->

                            <div class="row no-margin">
                                    <div class="prof-sub-col col-sm-6 column no-left-padding">
                                        <div class="field">
                                            <label><?php echo app('translator')->getFromJson('provider.profile.qr_code'); ?></label>
                                            <img src="<?php echo e(asset(Auth::guard('provider')->user()->qrcode_url)); ?>">

                                            <div id="mobile_verfication"></div>
                                        </div>
                                    </div>
                            <!-- Prof-form-sub-sec -->
                            <div class="prof-form-sub-sec border-top">
                                <div class="column column col-md-offset-3">
                                    <button type="submit" class="button is-block btn-primary update-link"><?php echo app('translator')->getFromJson('provider.profile.update'); ?></button>
                                </div>
                            </div>
                            <!-- End of prof-sub-sec -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate();       
</script>
<script src="https://sdk.accountkit.com/pt_BR/sdk.js"></script>
<script>

  $('.update-mobile').on('click', function() {
    smsLogin();
  });

  $('.verify-mobile').on('click', function() {
    verify();
  });

  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId: <?php echo e(Config::get('constants.facebook_app_id')); ?>, 
        state:"state", 
        version: "<?php echo e(config('constants.facebook_app_version')); ?>",
        fbAppEventsEnabled:true
      }
    );
  };


   // login callback
  function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      var code = response.code;
      var csrf = response.state;

      $.post("<?php echo e(route('account.kit')); ?>",{ code : code }, function(data){
        $('#phone_number').attr('readonly',true);
        $('#phone_number').attr('disabled',false);
        $('#phone_number').val('+'+data.phone.country_prefix+data.phone.national_number);
        $('.verify-mobile').text("<?php echo app('translator')->getFromJson('user.profile.verified'); ?>");
        $('.verify-mobile').removeClass('verify-mobile');

        $('#phone_number_container').hide();
        $('#phone_number').show();
        $('#phone_number').attr('disabled',false);
        $('#mobile_verfication').html("");
        //console.log(data);
      });
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
      $('#mobile_verfication').html("<p class='helper'> * Falha na autenticação </p>");
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
    }
  }

  // phone form submission handler
  function smsLogin() {
    $('#phone_number_container').show();
    $('#phone_number').hide();
    $('.update-mobile').hide();
    $('.verify-mobile').show();
  }

  function verify() {
    $('#phone_number').attr('disabled',false);
    $('.update-mobile').text("<?php echo app('translator')->getFromJson('provider.profile.verify'); ?>");

    var countryCode = $('input[name=country_code]').val();
    var phoneNumber = $('input[name=phone_number]').val();

    $.post("<?php echo e(url('/provider/verify-credentials')); ?>",{ _token: '<?php echo e(csrf_token()); ?>', id : '<?php echo e(\Auth::guard('provider')->user()->id); ?>', mobile : countryCode+phoneNumber }).done(function(data){ 
        $('#mobile_verfication').html("<p class='helper'> Por favor, aguarde... </p>");

        AccountKit.login(
          'PHONE', 
          {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
          loginCallback
        );
    })
    .fail(function(xhr, status, error) {
        $('#mobile_verfication').html("<p class='helper'> "+xhr.responseJSON.message+" </p>");
    });

    /*var countryCode = "+91";
    var phoneNumber = document.getElementById("phone_number").value;*/

    /*$('#mobile_verfication').html("<p class='helper'> Please Wait... </p>");

    */
  }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('provider.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/profile/index.blade.php ENDPATH**/ ?>