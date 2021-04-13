<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <a class="log-blk-btn" href="<?php echo e(url('/provider/login')); ?>"><?php echo app('translator')->getFromJson('provider.signup.already_register'); ?></a>
    <h3><?php echo app('translator')->getFromJson('provider.signup.sign_up'); ?></h3>
</div>

<div class="col-md-12">
    <form  role="form" method="POST" action="<?php echo e(url('/provider/register')); ?>">

<!--        <div id="first_step">
            <div class="col-md-4">
                <input value="+55" type="text" placeholder="+55" id="country_code" name="country_code" />
            </div> 
            
            <div class="col-md-8">
                <input type="phone" autofocus id="phone_number" class="input" placeholder="<?php echo app('translator')->getFromJson('provider.signup.enter_phone'); ?>" name="phone_number" value="<?php echo e(old('phone_number')); ?>" data-stripe="number" maxlength="11" onkeypress="return isNumberKey(event);"/>
            </div>

            <div class="col-md-8">
                <?php if($errors->has('phone_number')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('phone_number')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="col-md-12" style="padding-bottom: 10px;" id="mobile_verfication"></div>
            <div class="col-md-12" style="padding-bottom: 10px;">
                <input type="button" class="log-teal-btn small verify_btn" onclick="smsLogin();" value="VERIFICAR NÚMERO"/>
            </div>
        </div>-->

        <?php echo e(csrf_field()); ?>


        <div id="second_step">
            <input value="+55" type="hidden" id="country_code" name="country_code" />
            <div>
                <input id="fname" type="text" class="input" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="<?php echo app('translator')->getFromJson('provider.profile.first_name'); ?>" autofocus data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.first_name'); ?> can only contain alphanumeric characters and . - spaces">
                <?php if($errors->has('first_name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div>
                <input id="lname" type="text" class="input" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="<?php echo app('translator')->getFromJson('provider.profile.last_name'); ?>"data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.last_name'); ?> can only contain alphanumeric characters and . - spaces">            
                <?php if($errors->has('last_name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div>
                <input id="email" type="email" class="input" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->getFromJson('provider.signup.email_address'); ?>" data-validation="email">            
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
<!--            <div class="col-md-4">
                <input value="+55" type="text" placeholder="+55" id="country_code" name="country_code" />
            </div> -->
            
            <div>
                <input type="phone" id="phone_number" class="form-control form_tel" placeholder="<?php echo app('translator')->getFromJson('provider.signup.enter_phone'); ?>" name="phone_number" value="<?php echo e(old('phone_number')); ?>" data-stripe="number" maxlength="11" onkeypress="return isNumberKey(event);"/>
            </div>

            <div>
                <label class="checkbox"><input type="radio" name="gender" value="MALE" data-validation="required"  data-validation-error-msg="Por favor, selecione um gênero"><?php echo app('translator')->getFromJson('provider.signup.male'); ?></label>
                <label class="checkbox"><input type="radio" name="gender" value="FEMALE" data-validation-error-msg="Por favor, selecione um gênero"><?php echo app('translator')->getFromJson('provider.signup.female'); ?></label>
                <?php if($errors->has('gender')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('gender')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>                        
            <div>
                <input id="password" type="password" class="input" name="password" placeholder="<?php echo app('translator')->getFromJson('provider.signup.password'); ?>" data-validation="length" data-validation-length="min6" data-validation-error-msg="Password should not be less than 6 characters">

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>    
            <div>
                <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="<?php echo app('translator')->getFromJson('provider.signup.confirm_password'); ?>" data-validation="confirmation" data-validation-confirm="password" data-validation-error-msg="Confirm Passsword is not matched">

                <?php if($errors->has('password_confirmation')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>  
            <?php if(config('constants.paypal_adaptive') == 1): ?>
            <div>
                <input id="service-model" type="text" class="input" name="paypal_email" value="<?php echo e(old('paypal_email')); ?>" placeholder="<?php echo app('translator')->getFromJson('provider.profile.paypal_email'); ?>" data-validation="email">
                
                <?php if($errors->has('paypal_email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('paypal_email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <span class="help-block">
                        <strong style="color: red; font-size: 10spx;">Please add verified Paypal Email, otherwise you won't receive the payment.</strong>
                    </span>
            <?php endif; ?>
            <div>
                <select class="select" name="service_type" id="service_type" data-validation="required">
                    <option value="">Select Service</option>
                    <?php $__currentLoopData = get_all_service_types(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if($errors->has('service_type')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('service_type')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div>
                <input id="service-number" type="text" class="input" name="service_number" value="<?php echo e(old('service_number')); ?>" placeholder="<?php echo app('translator')->getFromJson('provider.profile.car_number'); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.car_number'); ?> can only contain alphanumeric characters and - spaces">
                
                <?php if($errors->has('service_number')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('service_number')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div>
                <input id="service-model" type="text" class="input" name="service_model" value="<?php echo e(old('service_model')); ?>" placeholder="<?php echo app('translator')->getFromJson('provider.profile.car_model'); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="<?php echo app('translator')->getFromJson('provider.profile.car_model'); ?> can only contain alphanumeric characters and - spaces">
                
                <?php if($errors->has('service_model')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('service_model')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <?php if(config('constants.referral') == 1): ?>
                <div>
                    <input type="text" placeholder="Referral Code (Optional)" class="input" name="referral_code" >

                    <?php if($errors->has('referral_code')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('referral_code')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <input type="hidden" name="referral_code" >
            <?php endif; ?>
            <button type="submit" class="log-teal-btn">
                <?php echo app('translator')->getFromJson('provider.signup.register'); ?>
            </button>

        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="<?php echo e(asset('asset/js/jmask.js')); ?>"></script>
<script type="text/javascript">
    $('.form_tel').mask('(99)99999-9999');
    
    <?php if(count($errors) > 0): ?>
        $("#second_step").show();
    <?php endif; ?>
    $.validate({
        modules : 'security',
    });
    $('.checkbox-inline').on('change', function() {
        $('.checkbox-inline').not(this).prop('checked', false);  
    });
    function isNumberKey(evt)
    {   
        var edValue = document.getElementById("phone_number");
        var s = edValue.value;
        if (event.keyCode == 13) {
            event.preventDefault();
            if(s.length>=10){
                smsLogin();
            }
        }
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

</script>
<script src="https://sdk.accountkit.com/pt_BR/sdk.js"></script>
<script>
  // initialize Account Kit with CSRF protection
  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId: <?php echo e(config('constants.facebook_app_id')); ?>, 
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
      // Send code to server to exchange for access token
      $('#mobile_verfication').html("<p class='helper'> * Número verificado </p>");
      $('#phone_number').attr('readonly',true);
      $('#country_code').attr('readonly',true);
      $('#second_step').fadeIn(400);
      $('.verify_btn').hide();

      $.post("<?php echo e(route('account.kit')); ?>",{ code : code }, function(data){
        $('#phone_number').val(data.phone.national_number);
        $('#country_code').val('+'+data.phone.country_prefix);
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
    var countryCode = document.getElementById("country_code").value;
    var phoneNumber = document.getElementById("phone_number").value;

    $.post("<?php echo e(url('/provider/verify-credentials')); ?>",{ _token: '<?php echo e(csrf_token()); ?>', mobile : countryCode+phoneNumber }).done(function(data){ 


        $('#mobile_verfication').html("<p class='helper'> Por favor, aguarde... </p>");
        //$('#phone_number').attr('readonly',true);
        //$('#country_code').attr('readonly',true);

        AccountKit.login(
          'PHONE', 
          {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
          loginCallback
        );

    })
    .fail(function(xhr, status, error) {
        $('#mobile_verfication').html("<p class='helper'> "+xhr.responseJSON.message+" </p>");
    });

  }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('provider.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/provider/auth/register.blade.php ENDPATH**/ ?>