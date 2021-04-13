<?php $__env->startSection('title', __('admin.setting.Site_Settings')); ?>

<?php $__env->startSection('content'); ?>

<?php
    $timezones = array(
    'America/Adak' ,'America/Atka' ,'America/Anchorage' ,'America/Juneau' ,'America/Nome' ,'America/Yakutat' ,'America/Dawson' ,'America/Ensenada' ,'America/Los_Angeles' ,'America/Tijuana' ,'America/Vancouver' ,'America/Whitehorse' ,'Canada/Pacific' ,'Canada/Yukon' ,'Mexico/BajaNorte' ,'America/Boise' ,'America/Cambridge_Bay' ,'America/Chihuahua' ,'America/Dawson_Creek' ,'America/Denver' ,'America/Edmonton' ,'America/Hermosillo' ,'America/Inuvik' ,'America/Mazatlan' ,'America/Phoenix' ,'America/Shiprock' ,'America/Yellowknife' ,'Canada/Mountain' ,'Mexico/BajaSur' ,'America/Belize' ,'America/Cancun' ,'America/Chicago' ,'America/Costa_Rica' ,'America/El_Salvador' ,'America/Guatemala' ,'America/Knox_IN' ,'America/Managua' ,'America/Menominee' ,'America/Merida' ,'America/Mexico_City' ,'America/Monterrey' ,'America/Rainy_River' ,'America/Rankin_Inlet' ,'America/Regina' ,'America/Swift_Current' ,'America/Tegucigalpa' ,'America/Winnipeg' ,'Canada/Central' ,'Canada/East-Saskatchewan' ,'Canada/Saskatchewan' ,'Chile/EasterIsland' ,'Mexico/General' ,'America/Atikokan' ,'America/Bogota' ,'America/Cayman' ,'America/Coral_Harbour' ,'America/Detroit' ,'America/Fort_Wayne' ,'America/Grand_Turk' ,'America/Guayaquil' ,'America/Havana' ,'America/Indianapolis' ,'America/Iqaluit' ,'America/Jamaica' ,'America/Lima' ,'America/Louisville' ,'America/Montreal' ,'America/Nassau' ,'America/New_York' ,'America/Nipigon' ,'America/Panama' ,'America/Pangnirtung' ,'America/Port-au-Prince' ,'America/Resolute' ,'America/Thunder_Bay' ,'America/Toronto' ,'Canada/Eastern' ,'America/Caracas' ,'America/Anguilla' ,'America/Antigua' ,'America/Aruba' ,'America/Asuncion' ,'America/Barbados' ,'America/Blanc-Sablon' ,'America/Boa_Vista' ,'America/Campo_Grande' ,'America/Cuiaba' ,'America/Curacao' ,'America/Dominica' ,'America/Eirunepe' ,'America/Glace_Bay' ,'America/Goose_Bay' ,'America/Grenada' ,'America/Guadeloupe' ,'America/Guyana' ,'America/Halifax' ,'America/La_Paz' ,'America/Manaus' ,'America/Marigot' ,'America/Martinique' ,'America/Moncton' ,'America/Montserrat' ,'America/Port_of_Spain' ,'America/Porto_Acre' ,'America/Porto_Velho' ,'America/Puerto_Rico' ,'America/Rio_Branco' ,'America/Santiago' ,'America/Santo_Domingo' ,'America/St_Barthelemy' ,'America/St_Kitts' ,'America/St_Lucia' ,'America/St_Thomas' ,'America/St_Vincent' ,'America/Thule' ,'America/Tortola' ,'America/Virgin' ,'Antarctica/Palmer' ,'Atlantic/Bermuda' ,'Atlantic/Stanley' ,'Brazil/Acre' ,'Brazil/West' ,'Canada/Atlantic' ,'Chile/Continental' ,'America/St_Johns' ,'Canada/Newfoundland' ,'America/Araguaina' ,'America/Bahia' ,'America/Belem' ,'America/Buenos_Aires' ,'America/Catamarca' ,'America/Cayenne' ,'America/Cordoba' ,'America/Fortaleza' ,'America/Godthab' ,'America/Jujuy' ,'America/Maceio' ,'America/Mendoza' ,'America/Miquelon' ,'America/Montevideo' ,'America/Paramaribo' ,'America/Recife' ,'America/Rosario' ,'America/Santarem' ,'America/Sao_Paulo' ,'Antarctica/Rothera' ,'Brazil/East' ,'America/Noronha' ,'Atlantic/South_Georgia' ,'Brazil/DeNoronha' ,'America/Scoresbysund' ,'Atlantic/Azores' ,'Atlantic/Cape_Verde' ,'Africa/Abidjan' ,'Africa/Accra' ,'Africa/Bamako' ,'Africa/Banjul' ,'Africa/Bissau' ,'Africa/Casablanca' ,'Africa/Conakry' ,'Africa/Dakar' ,'Africa/El_Aaiun' ,'Africa/Freetown' ,'Africa/Lome' ,'Africa/Monrovia' ,'Africa/Nouakchott' ,'Africa/Ouagadougou' ,'Africa/Sao_Tome' ,
    'Africa/Timbuktu' ,	'Africa/Addis_Ababa',	'Africa/Algiers',
    'Africa/Asmara',	'Africa/Bangui',	'Africa/Blantyre',	'Africa/Brazzaville',	'Africa/Bujumbura',
    'Africa/Cairo',	'Africa/Ceuta',	'Africa/Dar_es_Salaam',	'Africa/Djibouti',	'Africa/Douala',	'Africa/Gaborone',	'Africa/Harare',
    'Africa/Johannesburg'	,'Africa/Juba',	'Africa/Kampala',	'Africa/Khartoum',
    'Africa/Kigali',	'Africa/Kinshasa',	'Africa/Lagos',	'Africa/Libreville',
    'Africa/Lome',	'Africa/Luanda',	'Africa/Lubumbashi',	'Africa/Lusaka',
    'Africa/Malabo',	'Africa/Maputo',	'Africa/Maseru',	'Africa/Mbabane',
    'Africa/Mogadishu',	'Africa/Monrovia',	'Africa/Nairobi',	'Africa/Ndjamena',
    'Africa/Niamey',	'Africa/Porto-Novo',	'Africa/Tripoli',	'Africa/Tunis',	'Africa/Windhoek','America/Danmarkshavn' ,'Atlantic/Canary' ,'Atlantic/Faeroe' ,'Atlantic/Faroe' ,'Atlantic/Madeira' ,'Atlantic/Reykjavik' ,'Atlantic/St_Helena' ,'Europe/Belfast' ,'Europe/Dublin' ,'Europe/Guernsey' ,'Europe/Isle_of_Man' ,'Europe/Jersey' ,'Europe/Lisbon' ,'Europe/London' ,'Africa/Algiers' ,'Africa/Bangui' ,'Africa/Brazzaville' ,'Africa/Ceuta' ,'Africa/Douala' ,'Africa/Kinshasa' ,'Africa/Lagos' ,'Africa/Libreville' ,'Africa/Luanda' ,'Africa/Malabo' ,'Africa/Ndjamena' ,'Africa/Niamey' ,'Africa/Porto-Novo' ,'Africa/Tunis' ,'Africa/Windhoek' ,'Arctic/Longyearbyen' ,'Atlantic/Jan_Mayen' ,'Europe/Amsterdam' ,'Europe/Andorra' ,'Europe/Belgrade' ,'Europe/Berlin' ,'Europe/Bratislava' ,'Europe/Brussels' ,'Europe/Budapest' ,'Europe/Copenhagen' ,'Europe/Gibraltar' ,'Europe/Ljubljana' ,'Europe/Luxembourg' ,'Europe/Madrid' ,'Europe/Malta' ,'Europe/Monaco' ,'Europe/Oslo' ,'Europe/Paris' ,'Europe/Podgorica' ,'Europe/Prague' ,'Europe/Rome' ,'Europe/San_Marino' ,'Europe/Sarajevo' ,'Europe/Skopje' ,'Europe/Stockholm' ,'Europe/Tirane' ,'Europe/Vaduz' ,'Europe/Vatican' ,'Europe/Vienna' ,'Europe/Warsaw' ,'Europe/Zagreb' ,'Europe/Zurich' ,'Africa/Blantyre' ,'Africa/Bujumbura' ,'Africa/Cairo' ,'Africa/Gaborone' ,'Africa/Harare' ,'Africa/Johannesburg' ,'Africa/Kigali' ,'Africa/Lubumbashi' ,'Africa/Lusaka' ,'Africa/Maputo' ,'Africa/Maseru' ,'Africa/Mbabane' ,'Africa/Tripoli' ,'Asia/Amman' ,'Asia/Beirut' ,'Asia/Damascus' ,'Asia/Gaza' ,'Asia/Istanbul' ,'Asia/Jerusalem' ,'Asia/Nicosia' ,'Asia/Tel_Aviv' ,'Europe/Athens' ,'Europe/Bucharest' ,'Europe/Chisinau' ,'Europe/Helsinki' ,'Europe/Istanbul' ,'Europe/Kaliningrad' ,'Europe/Kiev' ,'Europe/Mariehamn' ,'Europe/Minsk' ,'Europe/Nicosia' ,'Europe/Riga' ,'Europe/Simferopol' ,'Europe/Sofia' ,'Europe/Tallinn' ,'Europe/Tiraspol' ,'Europe/Uzhgorod' ,'Europe/Vilnius' ,'Europe/Zaporozhye' ,'Africa/Addis_Ababa' ,'Africa/Asmara' ,'Africa/Asmera' ,'Africa/Dar_es_Salaam' ,'Africa/Djibouti' ,'Africa/Kampala' ,'Africa/Khartoum' ,'Africa/Mogadishu' ,'Africa/Nairobi' ,'Antarctica/Syowa' ,'Asia/Aden' ,'Asia/Baghdad' ,'Asia/Bahrain' ,'Asia/Kuwait' ,'Asia/Qatar' ,'Europe/Moscow' ,'Europe/Volgograd' ,'Indian/Antananarivo' ,'Indian/Comoro' ,'Indian/Mayotte' ,'Asia/Tehran' ,'Asia/Baku' ,'Asia/Dubai' ,'Asia/Muscat' ,'Asia/Tbilisi' ,'Asia/Yerevan' ,'Europe/Samara' ,'Indian/Mahe' ,'Indian/Mauritius' ,'Indian/Reunion' ,'Asia/Kabul' ,'Asia/Aqtau' ,'Asia/Aqtobe' ,'Asia/Ashgabat' ,'Asia/Ashkhabad' ,'Asia/Dushanbe' ,'Asia/Karachi' ,'Asia/Oral' ,'Asia/Samarkand' ,'Asia/Tashkent' ,'Asia/Yekaterinburg' ,'Indian/Kerguelen' ,'Indian/Maldives' ,'Asia/Calcutta' ,'Asia/Colombo' ,'Asia/Kolkata' ,'Asia/Katmandu' ,'Antarctica/Mawson' ,'Antarctica/Vostok' ,'Asia/Almaty' ,'Asia/Bishkek' ,'Asia/Dacca' ,'Asia/Dhaka' ,'Asia/Novosibirsk' ,'Asia/Omsk' ,'Asia/Qyzylorda' ,'Asia/Thimbu' ,'Asia/Thimphu' ,'Indian/Chagos' ,'Asia/Rangoon' ,'Indian/Cocos' ,'Antarctica/Davis' ,'Asia/Bangkok' ,'Asia/Ho_Chi_Minh' ,'Asia/Hovd' ,'Asia/Jakarta' ,'Asia/Krasnoyarsk' ,'Asia/Phnom_Penh' ,'Asia/Pontianak' ,'Asia/Saigon' ,'Asia/Vientiane' ,'Indian/Christmas' ,'Antarctica/Casey' ,'Asia/Brunei' ,'Asia/Choibalsan' ,'Asia/Chongqing' ,'Asia/Chungking' ,'Asia/Harbin' ,'Asia/Hong_Kong' ,'Asia/Irkutsk' ,'Asia/Kashgar' ,'Asia/Kuala_Lumpur' ,'Asia/Kuching' ,'Asia/Macao' ,'Asia/Macau' ,'Asia/Makassar' ,'Asia/Manila' ,'Asia/Shanghai' ,'Asia/Singapore' ,'Asia/Taipei' ,'Asia/Ujung_Pandang' ,'Asia/Ulaanbaatar' ,'Asia/Ulan_Bator' ,'Asia/Urumqi' ,'Australia/Perth' ,'Australia/West' ,'Australia/Eucla' ,'Asia/Dili' ,'Asia/Jayapura' ,'Asia/Pyongyang' ,'Asia/Seoul' ,'Asia/Tokyo' ,'Asia/Yakutsk' ,'Australia/Adelaide' ,'Australia/Broken_Hill' ,'Australia/Darwin' ,'Australia/North' ,'Australia/South' ,'Australia/Yancowinna' ,'Antarctica/DumontDUrville' ,'Asia/Sakhalin' ,'Asia/Vladivostok' ,'Australia/ACT' ,'Australia/Brisbane' ,'Australia/Canberra' ,'Australia/Currie' ,'Australia/Hobart' ,'Australia/Lindeman' ,'Australia/Melbourne' ,'Australia/NSW' ,'Australia/Queensland' ,'Australia/Sydney' ,'Australia/Tasmania' ,'Australia/Victoria' ,'Australia/LHI' ,'Australia/Lord_Howe' ,'Asia/Magadan' ,'Antarctica/McMurdo' ,'Antarctica/South_Pole' ,'Asia/Anadyr' ,'Asia/Kamchatka' 
);
?>

        <div class="box box-block bg-white">
            <div class="tabs is-boxed is-centered main-menu" id="nav">
                <ul>
                    <li class=" is-active" id="general" data-target="general">
                        <a>General</a>
                    </li>
                    <li id="social" data-target="social">
                        <a>Social & Apps Links</a>
                    </li>
                    <li id="socialConfiguration" data-target="socialConfiguration">
                        <a>Social Config</a>
                    </li>
                    <li id="provider" data-target="provider">
                        <a>Search Method</a>
                    </li>
                    <li id="api" data-target="api">
                        <a>Api Keys</a>
                    </li>
                    <li id="mailconfig" data-target="mailconfig">
                        <a>E-mail</a>
                    </li>
                    <li id="pushnotification" data-target="pushnotification">
                        <a>Push Notification</a>
                    </li>

                    <li id="others" data-target="others">
                        <a>Others</a>
                    </li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane is-active" id="general">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form" autocomplete="off">
                                <?php echo e(csrf_field()); ?>


                                <div class="field">
                                    <label for="site_title"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Site_Name'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.site_title', 'Thinkin Service')); ?>" name="site_title"
                                            required id="site_title" placeholder="<?php echo app('translator')->getFromJson('admin.setting.Site_Name'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="site_logo"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Site_Logo'); ?></label>
                                    <div class="">
                                        <?php if(config('constants.site_logo')!=''): ?>
                                        <img style="height: 90px; margin-bottom: 15px;"
                                            src="<?php echo e(config('constants.site_logo', asset('logo-black.png'))); ?>">
                                        <?php endif; ?>
                                        <input type="file" accept="image/*" name="site_logo"
                                            class="dropify form-control-file" id="site_logo"
                                            aria-describedby="fileHelp">
                                    </div>
                                </div>


                                <div class="field">
                                    <label for="site_icon"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Site_Icon'); ?></label>
                                    <div class="">
                                        <?php if(config('constants.site_icon')!=''): ?>
                                        <img style="height: 90px; margin-bottom: 15px;"
                                            src="<?php echo e(config('constants.site_icon')); ?>">
                                        <?php endif; ?>
                                        <input type="file" accept="image/*" name="site_icon"
                                            class="dropify form-control-file" id="site_icon"
                                            aria-describedby="fileHelp">
                                    </div>
                                </div>


                                <div class="field">
                                    <label for="timezone"
                                        class="column label"><?php echo app('translator')->getFromJson('admin.setting.timezone'); ?></label>
                                    <div class="select">
                                        <select id="timezone" name="timezone" autocomplete="off">
                                            <option value="UTC" <?php if(Config::get('constants.timezone')=='UTC' ): ?> selected
                                                <?php endif; ?>>Select Timezone</option>
                                            
                                            <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(Config::get('constants.timezone')==$item): ?> selected <?php endif; ?>
                                        value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="contact_number"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Contact_Number'); ?></label>
                                    <div class="">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.contact_number', '911')); ?>"
                                            name="contact_number" required id="contact_number"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Contact_Number'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="contact_email"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Contact_Email'); ?></label>
                                    <div class="">
                                        <input class="input" type="email"
                                            value="<?php echo e(config('constants.contact_email', '')); ?>" name="contact_email"
                                            required id="contact_email"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Contact_Email'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="sos_number"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.SOS_Number'); ?></label>
                                    <div class="">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.sos_number', '911')); ?>" name="sos_number"
                                            required id="sos_number" placeholder="<?php echo app('translator')->getFromJson('admin.setting.SOS_Number'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="tax_percentage"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Copyright_Content'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.site_copyright', '&copy; '.date('Y').' Appoets')); ?>"
                                            name="site_copyright" id="site_copyright"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Copyright_Content'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="social">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>


                                <div class="field">
                                    <label for="store_link_android"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Android_user_link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_link_android_user', '')); ?>"
                                            name="store_link_android_user" id="store_link_android_user"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Android_user_link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Android_provider_link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_link_android_provider', '')); ?>"
                                            name="store_link_android_provider" id="store_link_android_provider"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Android_provider_link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Ios_user_Link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_link_ios_user', '')); ?>"
                                            name="store_link_ios_user" id="store_link_ios_user"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Ios_user_Link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Ios_provider_Link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_link_ios_provider', '')); ?>"
                                            name="store_link_ios_provider" id="store_link_ios_provider"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Ios_provider_Link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Facebook_Link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_facebook_link', '')); ?>"
                                            name="store_facebook_link" id="store_facebook_link"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Facebook_Link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Instagram_Link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_instagram_link', '')); ?>"
                                            name="store_instagram_link" id="store_instagram_link"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Instagram_Link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Twitter_Link'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.store_twitter_link', '')); ?>"
                                            name="store_twitter_link" id="store_twitter_link"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.Twitter_Link'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios" class="column is-3 label">Andorid App Version 
                                        <?php echo app('translator')->getFromJson('admin.user'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.version_android_user', '')); ?>"
                                            name="version_android_user" id="version_android_user"
                                            placeholder="Version Code">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios" class="column is-3 label">Andorid App Version 
                                        <?php echo app('translator')->getFromJson('admin.provider'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.version_android_provider', '')); ?>"
                                            name="version_android_provider" id="version_android_provider"
                                            placeholder="Version Code">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios" class="column is-3 label">IOS App Version 
                                        <?php echo app('translator')->getFromJson('admin.user'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.version_ios_user', '')); ?>"
                                            name="version_ios_user" id="version_ios_user"
                                            placeholder="Version Code">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="store_link_ios" class="column is-3 label">IOS App Version 
                                        <?php echo app('translator')->getFromJson('admin.provider'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.version_ios_provider', '')); ?>"
                                            name="version_ios_provider" id="version_ios_provider"
                                            placeholder="Version Code">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="socialConfiguration">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>


                                <div class="field">
                                    <label for="social_login"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Social_Login'); ?></label>
                                        <div class="select">
                                            <select id="social_login" name="social_login" autocomplete="off">
                                            <option value="1" <?php if(config('constants.social_login', 0)==1): ?> selected
                                                <?php endif; ?>><?php echo app('translator')->getFromJson('admin.Enable'); ?></option>
                                            <option value="0" <?php if(config('constants.social_login', 0)==0): ?> selected
                                                <?php endif; ?>><?php echo app('translator')->getFromJson('admin.Disable'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="social_container"
                                    style=" <?php if(config('constants.social_login', 0) == 0): ?> display: none;  <?php endif; ?>  ">
                                    <hr>
                                    <div class="field">
                                        <label for="store_link_android"
                                            class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.facebook_client_id'); ?></label>
                                        <div class="">
                                            <input class="input" type="text"
                                                value="<?php echo e(Config::get('constants.facebook_client_id')); ?>"
                                                name="facebook_client_id" id="facebook_client_id"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.setting.facebook_client_id'); ?>">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="store_link_android"
                                            class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.facebook_client_secret'); ?></label>
                                        <div class="">
                                            <input class="input" type="text"
                                                value="<?php echo e(Config::get('constants.facebook_client_secret')); ?>"
                                                name="facebook_client_secret" id="facebook_client_secret"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.setting.facebook_client_secret'); ?>">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="store_link_android"
                                            class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.facebook_redirect'); ?></label>
                                        <div class="">
                                            <input class="input" type="text"
                                                value="<?php echo e(Config::get('constants.facebook_redirect')); ?>"
                                                name="facebook_redirect" id="facebook_redirect"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.setting.facebook_redirect'); ?>">
                                        </div>
                                    </div>

                                    <br><br>


                                    <div class="field">
                                        <label for="store_link_android"
                                            class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.google_client_id'); ?></label>
                                        <div class="">
                                            <input class="input" type="text"
                                                value="<?php echo e(Config::get('constants.google_client_id')); ?>"
                                                name="google_client_id" id="google_client_id"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.setting.google_client_id'); ?>">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="store_link_android"
                                            class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.google_client_secret'); ?></label>
                                        <div class="">
                                            <input class="input" type="text"
                                                value="<?php echo e(Config::get('constants.google_client_secret')); ?>"
                                                name="google_client_secret" id="google_client_secret"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.setting.google_client_secret'); ?>">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="store_link_android"
                                            class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.google_redirect'); ?></label>
                                        <div class="">
                                            <input class="input" type="text"
                                                value="<?php echo e(Config::get('constants.google_redirect')); ?>"
                                                name="google_redirect" id="google_redirect"
                                                placeholder="<?php echo app('translator')->getFromJson('admin.setting.google_redirect'); ?>">
                                        </div>
                                    </div>

                                    <hr>
                                </div>

                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="provider">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>

                                <div class="field">
                                    <label for="provider_select_timeout"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Provider_Accept_Timeout'); ?>
                                        (Secs)</label>
                                    <div class="">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.provider_select_timeout', '60')); ?>"
                                            name="provider_select_timeout" required id="provider_select_timeout"
                                            placeholder="Provider Timout">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="provider_search_radius"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.Provider_Search_Radius'); ?>
                                        (Kms)</label>
                                    <div class="">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.provider_search_radius', '100')); ?>"
                                            name="provider_search_radius" required id="provider_search_radius"
                                            placeholder="Provider Search Radius">
                                    </div>
                                </div>



                                <div class="field">
                                    <label for="distance"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.distance'); ?> Map</label>
                                        <div class="select">
                                            <select name="distance" class="input">
                                            <option value="Kms" <?php if(config('constants.distance')=='Kms' ): ?> selected
                                                <?php endif; ?>>Kms</option>
                                            <option value="Miles" <?php if(config('constants.distance')=='Miles' ): ?> selected
                                                <?php endif; ?>>Miles</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="api">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>

                                <div class="field">

                                    <label for="map_key"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.map_key'); ?></label>
                                    <div class="">
                                        <input class="input" type="text" value="<?php echo e(Config::get('constants.map_key')); ?>"
                                            name="map_key" required id="map_key"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.map_key'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="facebook_app_version"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.fb_app_version'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(Config::get('constants.facebook_app_version')); ?>"
                                            name="facebook_app_version" required id="facebook_app_version"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.fb_app_version'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="facebook_app_id"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.fb_app_id'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(Config::get('constants.facebook_app_id')); ?>"
                                            name="facebook_app_id" required id="facebook_app_id"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.fb_app_id'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="facebook_app_secret"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.fb_app_secret'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(Config::get('constants.facebook_app_secret')); ?>"
                                            name="facebook_app_secret" required id="facebook_app_secret"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.fb_app_secret'); ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="mailconfig">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>



                                <div class="field columns" id="mail_request">
                                    <label for="stripe_secret_key" class="column is-3 label">
                                        <?php echo app('translator')->getFromJson('admin.setting.send_mail'); ?> </label>
                                    <div class="">
                                        <div class="float-xs-left mr-1"><input <?php if(config('constants.send_email')==1): ?>
                                                checked <?php endif; ?> name="send_email" type="checkbox" class="js-switch"
                                                data-color="#43b968" id="mailchk"></div>
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="social_login"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_driver'); ?></label>
                                        <div class="select">
                                            <select  name="mail_driver" required id="mail_driver">
                                            <option value="SMTP" <?php if(config('constants.mail_driver')=='SMTP' ): ?> selected
                                                <?php endif; ?>><?php echo app('translator')->getFromJson('admin.setting.smtp'); ?></option>
                                            <option value="MAILGUN" <?php if(config('constants.mail_driver')=='MAILGUN' ): ?>
                                                selected <?php endif; ?>><?php echo app('translator')->getFromJson('admin.setting.mailgun'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_host"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_host'); ?></label>
                                    <div class="">
                                        <input class="input" type="text" value="<?php echo e(config('constants.mail_host')); ?>"
                                            name="mail_host" required id="mail_host"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_host'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_port"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_port'); ?></label>
                                    <div class="">
                                        <input class="input" type="text" value="<?php echo e(config('constants.mail_port')); ?>"
                                            name="mail_port" required id="mail_port"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_port'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_username"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_username'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.mail_username')); ?>" name="mail_username"
                                            required id="mail_username"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_username'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_password"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_password'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.mail_password')); ?>" name="mail_password"
                                            required id="mail_password"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_password'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_from_address"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_from_address'); ?></label>
                                    <div class="">
                                        <input class="input" type="email"
                                            value="<?php echo e(config('constants.mail_from_address')); ?>"
                                            name="mail_from_address" required id="mail_from_address"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_from_address'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_from_name"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_from_name'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.mail_from_name')); ?>" name="mail_from_name"
                                            required id="mail_from_name"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_from_name'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail">
                                    <label for="mail_encryption"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_encryption'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.mail_encryption')); ?>" name="mail_encryption"
                                            required id="mail_encryption"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_encryption'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail mail_domain">
                                    <label for="mail_domain"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_domain'); ?></label>
                                    <div class="">
                                        <input class="input" type="text" value="<?php echo e(config('constants.mail_domain')); ?>"
                                            name="mail_domain" id="mail_domain"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_domain'); ?>">
                                    </div>
                                </div>

                                <div class="field row hidemail mail_secret">
                                    <label for="mail_secret"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.mail_secret'); ?></label>
                                    <div class="">
                                        <input class="input" type="text" value="<?php echo e(config('constants.mail_secret')); ?>"
                                            name="mail_secret" id="mail_secret"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.mail_secret'); ?>">
                                    </div>
                                </div>



                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="pushnotification">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>


                                <div class="field">
                                    <label for="mail_driver"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.environment'); ?></label>
                                        <div class="select">
                                            <select  name="environment" required id="environment" class="input">
                                            <option value="development">Development</option>
                                            <option value="production">Production</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="mail_driver"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.ios_push_user_pem'); ?></label>
                                    <div class="">
                                        <input class="input" type="file" value="" name="user_pem" id="user_pem"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.ios_push_user_pem'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="mail_driver"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.ios_push_provider_pem'); ?></label>
                                    <div class="">
                                        <input class="input" type="file" value="" name="provider_pem" id="provider_pem"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.ios_push_provider_pem'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="mail_host"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.ios_push_password'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(Config::get('constants.ios_push_password')); ?>"
                                            name="ios_push_password" required id="ios_push_password"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.ios_push_password'); ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="mail_port"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.android_push_key'); ?></label>
                                    <div class="">
                                        <input class="input" type="text"
                                            value="<?php echo e(Config::get('constants.android_push_key')); ?>"
                                            name="android_push_key" required id="android_push_key"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.android_push_key'); ?>">
                                    </div>
                                </div>


                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="others">
                    <div class=" columns">
                        <div class="column">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" method="POST"
                                enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>



                                <div class="field columns" id="referral_request">
                                    <label for="stripe_secret_key" class="column is-3 label">
                                        <?php echo app('translator')->getFromJson('admin.setting.referral'); ?> </label>
                                    <div class="">
                                        <div class="float-xs-left mr-1"><input <?php if(config('constants.referral')==1): ?>
                                                checked <?php endif; ?> name="referral" type="checkbox" class="js-switch"
                                                data-color="#43b968" id="refchk"></div>
                                    </div>
                                </div>

                                <div class="field row hideref">
                                    <label for="referral_count"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.referral_count'); ?></label>
                                    <div class="">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.referral_count')); ?>" name="referral_count"
                                            required id="referral_count"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.referral_count'); ?>" min="0">
                                    </div>
                                </div>

                                <div class="field row hideref">
                                    <label for="referral_amount"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.setting.referral_amount'); ?></label>
                                    <div class="">
                                        <input class="input" type="number"
                                            value="<?php echo e(config('constants.referral_amount')); ?>" name="referral_amount"
                                            required id="referral_amount"
                                            placeholder="<?php echo app('translator')->getFromJson('admin.setting.referral_amount'); ?>" min="0">
                                    </div>
                                </div>
                                



                                

                                <div class="field">
                                    <label for="stripe_secret_key" class="column is-3 label">OTP verification</label>
                                    <div class="">
                                        <div class="float-xs-left mr-1"><input <?php if(config('constants.ride_otp')==1): ?>
                                                checked <?php endif; ?> name="ride_otp" type="checkbox" class="js-switch"
                                                data-color="#43b968"></div>
                                    </div>
                                </div>

                                

                                <div class="field">
                                    <label for="booking_prefix"
                                        class="column is-3 label"><?php echo app('translator')->getFromJson('admin.payment.booking_id_prefix'); ?></label>
                                    <div class="column">
                                        <input class="input" type="text"
                                            value="<?php echo e(config('constants.booking_prefix', '0')); ?>" id="booking_prefix"
                                            name="booking_prefix" min="0" max="4" placeholder="Booking ID Prefix">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="base_price" class="column label"><?php echo app('translator')->getFromJson('admin.payment.currency'); ?>
                                        ( <strong><?php echo e(config('constants.currency', '$')); ?> </strong>)
                                    </label>
                                    <div class="select">
                                        <select  name="currency" required>
                                            <option <?php if(config('constants.currency')=="RM" ): ?> selected <?php endif; ?> value="RM">
                                                Malaysian ringgit (RM)</option>
                                            <option <?php if(config('constants.currency')=="R" ): ?> selected <?php endif; ?> value="R">
                                                South African rand (ZAR)</option>
                                            <option <?php if(config('constants.currency')=="₦" ): ?> selected <?php endif; ?> value="₦">
                                                Nigerian naira (NGN)</option>
                                            <option <?php if(config('constants.currency')=="$" ): ?> selected <?php endif; ?> value="$">US
                                                Dollar (USD)</option>
                                            <option <?php if(config('constants.currency')=="₹" ): ?> selected <?php endif; ?> value="₹">
                                                Indian Rupee (INR)</option>
                                            <option <?php if(config('constants.currency')=="د.ك" ): ?> selected <?php endif; ?>
                                                value="د.ك">Kuwaiti Dinar (KWD)</option>
                                            <option <?php if(config('constants.currency')=="د.ب" ): ?> selected <?php endif; ?>
                                                value="د.ب">Bahraini Dinar (BHD)</option>
                                            <option <?php if(config('constants.currency')=="﷼" ): ?> selected <?php endif; ?> value="﷼">
                                                Omani Rial (OMR)</option>
                                            <option <?php if(config('constants.currency')=="£" ): ?> selected <?php endif; ?> value="£">
                                                British Pound (GBP)</option>
                                            <option <?php if(config('constants.currency')=="€" ): ?> selected <?php endif; ?> value="€">
                                                Euro (EUR)</option>
                                            <option <?php if(config('constants.currency')=="CHF" ): ?> selected <?php endif; ?>
                                                value="CHF">Swiss Franc (CHF)</option>
                                            <option <?php if(config('constants.currency')=="ل.د" ): ?> selected <?php endif; ?>
                                                value="ل.د">Libyan Dinar (LYD)</option>
                                            <option <?php if(config('constants.currency')=="B$" ): ?> selected <?php endif; ?> value="B$">
                                                Bruneian Dollar (BND)</option>
                                            <option <?php if(config('constants.currency')=="S$" ): ?> selected <?php endif; ?> value="S$">
                                                Singapore Dollar (SGD)</option>
                                            <option <?php if(config('constants.currency')=="C$" ): ?> selected <?php endif; ?> value="C$">
                                                Canadian dollar (CAD)</option>
                                            <option <?php if(config('constants.currency')=="AU$" ): ?> selected <?php endif; ?>
                                                value="AU$"> Australian Dollar (AUD)</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if(Setting::get('demo_mode', 0) != 1): ?>
                                
                                <?php endif; ?>

                                <div class="field">
                                    <label for="zipcode" class="label"></label>
                                    <div class="control">
                                        <button type="submit"
                                            class="button is-link"><?php echo app('translator')->getFromJson('admin.setting.Update_Site_Settings'); ?></button>
                                    </div>
                                </div>
                            </form>
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
    switchbroadcast();
    switchreferral();
    switchmail();
    switchMailDomain();
    $('#broadcast_request').click(function (e) {
        switchbroadcast();
    });
    $('#referral_request').click(function (e) {
        switchreferral();
    });
    $('#mail_request').click(function (e) {
        switchmail();
        switchMailDomain();
    });
    $('#mail_driver').click(function (e) {
        switchMailDomain();
    });


    $('select[name=social_login]').on('change', function (e) {
        var value = $(this).val();
        $('.social_container').hide();
        $('.social_container input').prop('disabled', true);
        if (value == 1) {
            $('.social_container').show();
            $('.social_container input').prop('disabled', false);
        }

    });

    function switchbroadcast() {
        var isChecked = $("#bdchk").is(":checked");
        if (isChecked) {
            $("#broadcast").text('Simontanious Request');
            $("#unicast").text('');
        } else {
            $("#unicast").text('Single Request');
            $("#broadcast").text('');
        }
    }

    function switchreferral() {
        var isChecked = $("#refchk").is(":checked");
        if (isChecked) {
            $(".hideref").show();
        } else {
            $(".hideref").hide();
        }
    }

    function switchmail() {
        var isChecked = $("#mailchk").is(":checked");
        if (isChecked) {
            $(".hidemail").find('input').attr('required', true);
            $(".hidemail").show();
        } else {
            $(".hidemail").find('input').attr('required', false);
            $(".hidemail").hide();
        }
    }

    function switchMailDomain() {
        var mailDriver = $("#mail_driver").val();
        if (mailDriver == "SMTP") {
            $(".hidemail").find('.mail_secret').attr('required', false);
            $(".hidemail").find('.mail_domain').attr('required', false);
            $(".mail_secret").hide();
            $(".mail_domain").hide();
        } else {
            $(".hidemail").find('.mail_secret').attr('required', true);
            $(".hidemail").find('.mail_domain').attr('required', true);
            $(".mail_secret").show();
            $(".mail_domain").show();
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>