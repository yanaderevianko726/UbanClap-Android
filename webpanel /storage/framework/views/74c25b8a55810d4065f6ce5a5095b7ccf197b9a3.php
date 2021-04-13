<?php $__env->startSection('title', 'Profile '); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-9">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title"><?php echo app('translator')->getFromJson('user.profile.edit_information'); ?></h4>
            </div>
        </div>
            <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row no-margin edit-pro">
            <form action="<?php echo e(url('profile')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

                <div class="col-md-12">
                    <label><?php echo app('translator')->getFromJson('user.profile.profile_picture'); ?></label>
                    <div class="profile-img-blk">
                        <div class="img_outer">
                            <img class="profile_preview" id="profile_image_preview" src="<?php echo e(img(Auth::user()->picture)); ?>" alt="Sua imagem"/>
                        </div>
                        <div class="fileUpload up-btn profile-up-btn">                   
                            <input type="file" id="profile_img_upload_btn" name="picture" class="upload" accept="image/x-png, image/jpeg"/>
                        </div>                             
                    </div> 
                </div>
                <div class="field col-md-6">
                    <label><?php echo app('translator')->getFromJson('user.profile.first_name'); ?></label>
                    <input type="text" <div class="control"> name="first_name" required placeholder="<?php echo app('translator')->getFromJson('user.profile.first_name'); ?>" value="<?php echo e(Auth::user()->first_name); ?>" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="First Name can only contain alphanumeric characters and . - spaces">
                </div>
                <div class="field col-md-6">
                    <label><?php echo app('translator')->getFromJson('user.profile.last_name'); ?></label>
                    <input type="text" <div class="control"> name="last_name" required placeholder="<?php echo app('translator')->getFromJson('user.profile.last_name'); ?>" value="<?php echo e(Auth::user()->last_name); ?>" data-validation-allowing=" -" data-validation-error-msg="Last Name can only contain alphanumeric characters and . - spaces">
                </div>

                <div class="field col-md-12">
                    <label><?php echo app('translator')->getFromJson('user.profile.email'); ?></label>
                    <input type="email" <div class="control"> placeholder="<?php echo app('translator')->getFromJson('user.profile.email'); ?>" readonly value="<?php echo e(Auth::user()->email); ?>">
                </div>

                <div class="row no-margin">
                    <div class="prof-sub-col col-sm-6 col-xs-12">
                        <div class="field">
                            <label><?php echo app('translator')->getFromJson('user.profile.mobile'); ?></label>
                            <input type="text" <div class="control"> id="phone_number" required placeholder="Contact Number" name="mobile" value="<?php echo e(Auth::user()->mobile); ?>" data-validation="custom length" data-validation-length="10-15" data-validation-regexp="^([0-9\+]+)$" data-validation-error-msg="Incorrect phone number" disabled="disabled">
                            <div id="phone_number_container" style="display: none;">
                                <div class="prof-sub-col col-sm-3 no-left-padding">
                                <input type="text" class="form-control col-sm-2"  name="country_code" value="" placeholder="+55" >
                                </div>
                                <div class="prof-sub-col col-sm-9 no-left-padding">
                                <input type="text" class="form-control col-sm-2"  name="phone_number" value="" >
                                </div>
                            </div>
                            <div id="mobile_verfication"></div>
                        </div>
                    </div>
                    <div class="prof-sub-col col-sm-6 col-xs-12 no-left-padding">
                        <div class="field">
                            <label>&nbsp;</label>
                            <a class="btn btn-block btn-primary update-link update-mobile" style="margin-top: 0;"><?php echo app('translator')->getFromJson('user.profile.change_mobile'); ?></a>
                            <a class="btn btn-block btn-primary update-link verify-mobile" style="margin-top: 0; display: none;"><?php echo app('translator')->getFromJson('user.profile.verify'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="field col-md-6">
                    <label><?php echo app('translator')->getFromJson('user.profile.language'); ?></label>
                    <?php ($language=get_all_language()); ?>
                    <select <div class="control"> name="language" id="language">
                        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lkey=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lkey); ?>" <?php if(Auth::user()->language==$lkey): ?> selected <?php endif; ?>><?php echo e($lang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
              
                <div class="col-md-12 pull-right">
                    <button type="submit" class="form-sub-btn big"><?php echo app('translator')->getFromJson('user.profile.save'); ?></button>
                </div>
            </form>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate();       
</script>
<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
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
        version: "<?php echo e(Config::get('constants.facebook_app_version')); ?>",
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
      $('#mobile_verfication').html("<p class='helper'> * Authentication Failed </p>");
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

    $.post("<?php echo e(url('/user/verify-credentials')); ?>",{ _token: '<?php echo e(csrf_token()); ?>', id : '<?php echo e(\Auth::user()->id); ?>', mobile : countryCode+phoneNumber }).done(function(data){ 
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
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/account/edit_profile.blade.php ENDPATH**/ ?>