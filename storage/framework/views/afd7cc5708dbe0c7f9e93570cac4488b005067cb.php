<?php $__env->startSection('title'); ?> <?php echo e(__('pages.settings')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid settings-page">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 rounded-0">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header p-0">
                        <?php echo $__env->make('backend.settings.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="<?php echo e(route('save-application-setting')); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row  pt-3">
                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="product_sku_prefix"><?php echo e(__('pages.app_name')); ?> <span class="text-danger">*</span></label>
                                        <input name="app_name" type="text" value="<?php echo e(get_option('app_name')); ?>" class="form-control" placeholder="Application Name">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="address"><?php echo e(__('pages.address')); ?> <span class="text-danger">*</span></label>
                                        <input name="address" id="address" type="text" value="<?php echo e(get_option('address')); ?>" class="form-control" placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="vat_reg_no"><?php echo e(__('pages.var_reg_number')); ?> <span class="text-danger">*</span></label>
                                        <input name="vat_reg_no" id="vat_reg_no" type="text" value="<?php echo e(get_option('vat_reg_no')); ?>" class="form-control" placeholder="VAT Reg. No">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="phone"><?php echo e(__('pages.phone_number')); ?> <span class="text-danger">*</span></label>
                                        <input name="phone" id="phone" type="text" value="<?php echo e(get_option('phone')); ?>" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="default_customer"><?php echo e(__('pages.default_customer')); ?> <span class="text-danger">*</span></label>
                                        <select name="default_customer" class="form-control select2">
                                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($customer->id); ?>" <?php echo e(get_option('default_customer') == $customer->id ? 'selected' : ''); ?> ><?php echo e($customer->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="app_language"><?php echo e(__('pages.default_language')); ?>  <span class="text-danger">*</span></label>
                                        <select name="app_language" class="form-control select2">
                                            <option value="en" <?php echo e(get_option('app_language') == 'en' ? 'selected' : ''); ?> >EN (- English)</option>
                                            <option value="hi" <?php echo e(get_option('app_language') == 'hi' ? 'selected' : ''); ?>>HI (हिंदी- Hindi)</option>
                                            <option value="bn" <?php echo e(get_option('app_language') == 'bn' ? 'selected' : ''); ?>>BN (বাংলা- Bangla)</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="app_date_format"><?php echo e(__('pages.date_format')); ?> <span class="text-danger">*</span></label>
                                        <select name="app_date_format" class="form-control">
                                            <option value="m/d/Y" <?php echo e(get_option('app_date_format') == 'm/d/Y' ? 'selected' : ''); ?> > m/d/Y (eg. <?php echo e(\Carbon\Carbon::now()->format("m/d/Y")); ?> )</option>
                                            <option value="d/m/Y" <?php echo e(get_option('app_date_format') == 'd/m/Y' ? 'selected' : ''); ?> > d/m/Y (eg. <?php echo e(\Carbon\Carbon::now()->format("d/m/Y")); ?> )</option>
                                            <option value="Y/m/d" <?php echo e(get_option('app_date_format') == 'Y/m/d' ? 'selected' : ''); ?> > Y/m/d (eg. <?php echo e(\Carbon\Carbon::now()->format("Y/m/d")); ?> )</option>
                                            <option value="Y/d/m" <?php echo e(get_option('app_date_format') == 'Y/d/m' ? 'selected' : ''); ?> > Y/d/m (eg. <?php echo e(\Carbon\Carbon::now()->format("Y/d/m")); ?> )</option>
                                            <option value="m-d-Y" <?php echo e(get_option('app_date_format') == 'm-d-Y' ? 'selected' : ''); ?> > m-d-Y (eg. <?php echo e(\Carbon\Carbon::now()->format("m-d-Y")); ?> )</option>
                                            <option value="d-m-Y" <?php echo e(get_option('app_date_format') == 'd-m-Y' ? 'selected' : ''); ?> > d-m-Y (eg. <?php echo e(\Carbon\Carbon::now()->format("d-m-Y")); ?> )</option>
                                            <option value="Y-m-d" <?php echo e(get_option('app_date_format') == 'Y-m-d' ? 'selected' : ''); ?> > Y-m-d (eg. <?php echo e(\Carbon\Carbon::now()->format("Y-m-d")); ?> )</option>
                                            <option value="Y-d-m" <?php echo e(get_option('app_date_format') == 'Y-d-m' ? 'selected' : ''); ?> > Y-d-m (eg. <?php echo e(\Carbon\Carbon::now()->format("Y-d-m")); ?> )</option>
                                            <option value="d M, Y" <?php echo e(get_option('app_date_format') == 'd M, Y' ? 'selected' : ''); ?> > d M, Y (eg. <?php echo e(\Carbon\Carbon::now()->format("d M, Y")); ?> )</option>
                                            <option value="M d, Y" <?php echo e(get_option('app_date_format') == 'M d, Y' ? 'selected' : ''); ?> > M d, Y (eg. <?php echo e(\Carbon\Carbon::now()->format("M d, Y")); ?> )</option>
                                            <option value="Y M, d" <?php echo e(get_option('app_date_format') == 'Y M, d' ? 'selected' : ''); ?> > Y M, d (eg. <?php echo e(\Carbon\Carbon::now()->format("Y M, d")); ?> )</option>
                                            <option value="d F, Y" <?php echo e(get_option('app_date_format') == 'd F, Y' ? 'selected' : ''); ?> > d F, Y (eg. <?php echo e(\Carbon\Carbon::now()->format("d F, Y")); ?> )</option>
                                            <option value="Y F, d" <?php echo e(get_option('app_date_format') == 'Y F, d' ? 'selected' : ''); ?> > Y F, d (eg. <?php echo e(\Carbon\Carbon::now()->format("Y F, d")); ?> )</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="app_timezone"><?php echo e(__('pages.timezone')); ?> <span class="text-danger">*</span></label>
                                        <select name="app_timezone" class="form-control select2">
                                            <option value="<?php echo e(get_option('app_timezone')); ?>"> <?php echo e(get_option('app_timezone')); ?></option>

                                            <option value="America/Adak">(GMT-10:00) America/Adak (Hawaii-Aleutian Standard Time)</option>
                                            <option value="America/Atka">(GMT-10:00) America/Atka (Hawaii-Aleutian Standard Time)</option>
                                            <option value="America/Anchorage">(GMT-9:00) America/Anchorage (Alaska Standard Time)</option>
                                            <option value="America/Juneau">(GMT-9:00) America/Juneau (Alaska Standard Time)</option>
                                            <option value="America/Nome">(GMT-9:00) America/Nome (Alaska Standard Time)</option>
                                            <option value="America/Yakutat">(GMT-9:00) America/Yakutat (Alaska Standard Time)</option>
                                            <option value="America/Dawson">(GMT-8:00) America/Dawson (Pacific Standard Time)</option>
                                            <option value="America/Ensenada">(GMT-8:00) America/Ensenada (Pacific Standard Time)</option>
                                            <option value="America/Los_Angeles">(GMT-8:00) America/Los_Angeles (Pacific Standard Time)</option>
                                            <option value="America/Tijuana">(GMT-8:00) America/Tijuana (Pacific Standard Time)</option>
                                            <option value="America/Vancouver">(GMT-8:00) America/Vancouver (Pacific Standard Time)</option>
                                            <option value="America/Whitehorse">(GMT-8:00) America/Whitehorse (Pacific Standard Time)</option>
                                            <option value="Canada/Pacific">(GMT-8:00) Canada/Pacific (Pacific Standard Time)</option>
                                            <option value="Canada/Yukon">(GMT-8:00) Canada/Yukon (Pacific Standard Time)</option>
                                            <option value="Mexico/BajaNorte">(GMT-8:00) Mexico/BajaNorte (Pacific Standard Time)</option>
                                            <option value="America/Boise">(GMT-7:00) America/Boise (Mountain Standard Time)</option>
                                            <option value="America/Cambridge_Bay">(GMT-7:00) America/Cambridge_Bay (Mountain Standard Time)</option>
                                            <option value="America/Chihuahua">(GMT-7:00) America/Chihuahua (Mountain Standard Time)</option>
                                            <option value="America/Dawson_Creek">(GMT-7:00) America/Dawson_Creek (Mountain Standard Time)</option>
                                            <option value="America/Denver">(GMT-7:00) America/Denver (Mountain Standard Time)</option>
                                            <option value="America/Edmonton">(GMT-7:00) America/Edmonton (Mountain Standard Time)</option>
                                            <option value="America/Hermosillo">(GMT-7:00) America/Hermosillo (Mountain Standard Time)</option>
                                            <option value="America/Inuvik">(GMT-7:00) America/Inuvik (Mountain Standard Time)</option>
                                            <option value="America/Mazatlan">(GMT-7:00) America/Mazatlan (Mountain Standard Time)</option>
                                            <option value="America/Phoenix">(GMT-7:00) America/Phoenix (Mountain Standard Time)</option>
                                            <option value="America/Shiprock">(GMT-7:00) America/Shiprock (Mountain Standard Time)</option>
                                            <option value="America/Yellowknife">(GMT-7:00) America/Yellowknife (Mountain Standard Time)</option>
                                            <option value="Canada/Mountain">(GMT-7:00) Canada/Mountain (Mountain Standard Time)</option>
                                            <option value="Mexico/BajaSur">(GMT-7:00) Mexico/BajaSur (Mountain Standard Time)</option>
                                            <option value="America/Belize">(GMT-6:00) America/Belize (Central Standard Time)</option>
                                            <option value="America/Cancun">(GMT-6:00) America/Cancun (Central Standard Time)</option>
                                            <option value="America/Chicago">(GMT-6:00) America/Chicago (Central Standard Time)</option>
                                            <option value="America/Costa_Rica">(GMT-6:00) America/Costa_Rica (Central Standard Time)</option>
                                            <option value="America/El_Salvador">(GMT-6:00) America/El_Salvador (Central Standard Time)</option>
                                            <option value="America/Guatemala">(GMT-6:00) America/Guatemala (Central Standard Time)</option>
                                            <option value="America/Knox_IN">(GMT-6:00) America/Knox_IN (Central Standard Time)</option>
                                            <option value="America/Managua">(GMT-6:00) America/Managua (Central Standard Time)</option>
                                            <option value="America/Menominee">(GMT-6:00) America/Menominee (Central Standard Time)</option>
                                            <option value="America/Merida">(GMT-6:00) America/Merida (Central Standard Time)</option>
                                            <option value="America/Mexico_City">(GMT-6:00) America/Mexico_City (Central Standard Time)</option>
                                            <option value="America/Monterrey">(GMT-6:00) America/Monterrey (Central Standard Time)</option>
                                            <option value="America/Rainy_River">(GMT-6:00) America/Rainy_River (Central Standard Time)</option>
                                            <option value="America/Rankin_Inlet">(GMT-6:00) America/Rankin_Inlet (Central Standard Time)</option>
                                            <option value="America/Regina">(GMT-6:00) America/Regina (Central Standard Time)</option>
                                            <option value="America/Swift_Current">(GMT-6:00) America/Swift_Current (Central Standard Time)</option>
                                            <option value="America/Tegucigalpa">(GMT-6:00) America/Tegucigalpa (Central Standard Time)</option>
                                            <option value="America/Winnipeg">(GMT-6:00) America/Winnipeg (Central Standard Time)</option>
                                            <option value="Canada/Central">(GMT-6:00) Canada/Central (Central Standard Time)</option>
                                            <option value="Canada/East-Saskatchewan">(GMT-6:00) Canada/East-Saskatchewan (Central Standard Time)</option>
                                            <option value="Canada/Saskatchewan">(GMT-6:00) Canada/Saskatchewan (Central Standard Time)</option>
                                            <option value="Chile/EasterIsland">(GMT-6:00) Chile/EasterIsland (Easter Is. Time)</option>
                                            <option value="Mexico/General">(GMT-6:00) Mexico/General (Central Standard Time)</option>
                                            <option value="America/Atikokan">(GMT-5:00) America/Atikokan (Eastern Standard Time)</option>
                                            <option value="America/Bogota">(GMT-5:00) America/Bogota (Colombia Time)</option>
                                            <option value="America/Cayman">(GMT-5:00) America/Cayman (Eastern Standard Time)</option>
                                            <option value="America/Coral_Harbour">(GMT-5:00) America/Coral_Harbour (Eastern Standard Time)</option>
                                            <option value="America/Detroit">(GMT-5:00) America/Detroit (Eastern Standard Time)</option>
                                            <option value="America/Fort_Wayne">(GMT-5:00) America/Fort_Wayne (Eastern Standard Time)</option>
                                            <option value="America/Grand_Turk">(GMT-5:00) America/Grand_Turk (Eastern Standard Time)</option>
                                            <option value="America/Guayaquil">(GMT-5:00) America/Guayaquil (Ecuador Time)</option>
                                            <option value="America/Havana">(GMT-5:00) America/Havana (Cuba Standard Time)</option>
                                            <option value="America/Indianapolis">(GMT-5:00) America/Indianapolis (Eastern Standard Time)</option>
                                            <option value="America/Iqaluit">(GMT-5:00) America/Iqaluit (Eastern Standard Time)</option>
                                            <option value="America/Jamaica">(GMT-5:00) America/Jamaica (Eastern Standard Time)</option>
                                            <option value="America/Lima">(GMT-5:00) America/Lima (Peru Time)</option>
                                            <option value="America/Louisville">(GMT-5:00) America/Louisville (Eastern Standard Time)</option>
                                            <option value="America/Montreal">(GMT-5:00) America/Montreal (Eastern Standard Time)</option>
                                            <option value="America/Nassau">(GMT-5:00) America/Nassau (Eastern Standard Time)</option>
                                            <option value="America/New_York">(GMT-5:00) America/New_York (Eastern Standard Time)</option>
                                            <option value="America/Nipigon">(GMT-5:00) America/Nipigon (Eastern Standard Time)</option>
                                            <option value="America/Panama">(GMT-5:00) America/Panama (Eastern Standard Time)</option>
                                            <option value="America/Pangnirtung">(GMT-5:00) America/Pangnirtung (Eastern Standard Time)</option>
                                            <option value="America/Port-au-Prince">(GMT-5:00) America/Port-au-Prince (Eastern Standard Time)</option>
                                            <option value="America/Resolute">(GMT-5:00) America/Resolute (Eastern Standard Time)</option>
                                            <option value="America/Thunder_Bay">(GMT-5:00) America/Thunder_Bay (Eastern Standard Time)</option>
                                            <option value="America/Toronto">(GMT-5:00) America/Toronto (Eastern Standard Time)</option>
                                            <option value="Canada/Eastern">(GMT-5:00) Canada/Eastern (Eastern Standard Time)</option>
                                            <option value="America/Caracas">(GMT-4:-30) America/Caracas (Venezuela Time)</option>
                                            <option value="America/Anguilla">(GMT-4:00) America/Anguilla (Atlantic Standard Time)</option>
                                            <option value="America/Antigua">(GMT-4:00) America/Antigua (Atlantic Standard Time)</option>
                                            <option value="America/Aruba">(GMT-4:00) America/Aruba (Atlantic Standard Time)</option>
                                            <option value="America/Asuncion">(GMT-4:00) America/Asuncion (Paraguay Time)</option>
                                            <option value="America/Barbados">(GMT-4:00) America/Barbados (Atlantic Standard Time)</option>
                                            <option value="America/Blanc-Sablon">(GMT-4:00) America/Blanc-Sablon (Atlantic Standard Time)</option>
                                            <option value="America/Boa_Vista">(GMT-4:00) America/Boa_Vista (Amazon Time)</option>
                                            <option value="America/Campo_Grande">(GMT-4:00) America/Campo_Grande (Amazon Time)</option>
                                            <option value="America/Cuiaba">(GMT-4:00) America/Cuiaba (Amazon Time)</option>
                                            <option value="America/Curacao">(GMT-4:00) America/Curacao (Atlantic Standard Time)</option>
                                            <option value="America/Dominica">(GMT-4:00) America/Dominica (Atlantic Standard Time)</option>
                                            <option value="America/Eirunepe">(GMT-4:00) America/Eirunepe (Amazon Time)</option>
                                            <option value="America/Glace_Bay">(GMT-4:00) America/Glace_Bay (Atlantic Standard Time)</option>
                                            <option value="America/Goose_Bay">(GMT-4:00) America/Goose_Bay (Atlantic Standard Time)</option>
                                            <option value="America/Grenada">(GMT-4:00) America/Grenada (Atlantic Standard Time)</option>
                                            <option value="America/Guadeloupe">(GMT-4:00) America/Guadeloupe (Atlantic Standard Time)</option>
                                            <option value="America/Guyana">(GMT-4:00) America/Guyana (Guyana Time)</option>
                                            <option value="America/Halifax">(GMT-4:00) America/Halifax (Atlantic Standard Time)</option>
                                            <option value="America/La_Paz">(GMT-4:00) America/La_Paz (Bolivia Time)</option>
                                            <option value="America/Manaus">(GMT-4:00) America/Manaus (Amazon Time)</option>
                                            <option value="America/Marigot">(GMT-4:00) America/Marigot (Atlantic Standard Time)</option>
                                            <option value="America/Martinique">(GMT-4:00) America/Martinique (Atlantic Standard Time)</option>
                                            <option value="America/Moncton">(GMT-4:00) America/Moncton (Atlantic Standard Time)</option>
                                            <option value="America/Montserrat">(GMT-4:00) America/Montserrat (Atlantic Standard Time)</option>
                                            <option value="America/Port_of_Spain">(GMT-4:00) America/Port_of_Spain (Atlantic Standard Time)</option>
                                            <option value="America/Porto_Acre">(GMT-4:00) America/Porto_Acre (Amazon Time)</option>
                                            <option value="America/Porto_Velho">(GMT-4:00) America/Porto_Velho (Amazon Time)</option>
                                            <option value="America/Puerto_Rico">(GMT-4:00) America/Puerto_Rico (Atlantic Standard Time)</option>
                                            <option value="America/Rio_Branco">(GMT-4:00) America/Rio_Branco (Amazon Time)</option>
                                            <option value="America/Santiago">(GMT-4:00) America/Santiago (Chile Time)</option>
                                            <option value="America/Santo_Domingo">(GMT-4:00) America/Santo_Domingo (Atlantic Standard Time)</option>
                                            <option value="America/St_Barthelemy">(GMT-4:00) America/St_Barthelemy (Atlantic Standard Time)</option>
                                            <option value="America/St_Kitts">(GMT-4:00) America/St_Kitts (Atlantic Standard Time)</option>
                                            <option value="America/St_Lucia">(GMT-4:00) America/St_Lucia (Atlantic Standard Time)</option>
                                            <option value="America/St_Thomas">(GMT-4:00) America/St_Thomas (Atlantic Standard Time)</option>
                                            <option value="America/St_Vincent">(GMT-4:00) America/St_Vincent (Atlantic Standard Time)</option>
                                            <option value="America/Thule">(GMT-4:00) America/Thule (Atlantic Standard Time)</option>
                                            <option value="America/Tortola">(GMT-4:00) America/Tortola (Atlantic Standard Time)</option>
                                            <option value="America/Virgin">(GMT-4:00) America/Virgin (Atlantic Standard Time)</option>
                                            <option value="Antarctica/Palmer">(GMT-4:00) Antarctica/Palmer (Chile Time)</option>
                                            <option value="Atlantic/Bermuda">(GMT-4:00) Atlantic/Bermuda (Atlantic Standard Time)</option>
                                            <option value="Atlantic/Stanley">(GMT-4:00) Atlantic/Stanley (Falkland Is. Time)</option>
                                            <option value="Brazil/Acre">(GMT-4:00) Brazil/Acre (Amazon Time)</option>
                                            <option value="Brazil/West">(GMT-4:00) Brazil/West (Amazon Time)</option>
                                            <option value="Canada/Atlantic">(GMT-4:00) Canada/Atlantic (Atlantic Standard Time)</option>
                                            <option value="Chile/Continental">(GMT-4:00) Chile/Continental (Chile Time)</option>
                                            <option value="America/St_Johns">(GMT-3:-30) America/St_Johns (Newfoundland Standard Time)</option>
                                            <option value="Canada/Newfoundland">(GMT-3:-30) Canada/Newfoundland (Newfoundland Standard Time)</option>
                                            <option value="America/Araguaina">(GMT-3:00) America/Araguaina (Brasilia Time)</option>
                                            <option value="America/Bahia">(GMT-3:00) America/Bahia (Brasilia Time)</option>
                                            <option value="America/Belem">(GMT-3:00) America/Belem (Brasilia Time)</option>
                                            <option value="America/Buenos_Aires">(GMT-3:00) America/Buenos_Aires (Argentine Time)</option>
                                            <option value="America/Catamarca">(GMT-3:00) America/Catamarca (Argentine Time)</option>
                                            <option value="America/Cayenne">(GMT-3:00) America/Cayenne (French Guiana Time)</option>
                                            <option value="America/Cordoba">(GMT-3:00) America/Cordoba (Argentine Time)</option>
                                            <option value="America/Fortaleza">(GMT-3:00) America/Fortaleza (Brasilia Time)</option>
                                            <option value="America/Godthab">(GMT-3:00) America/Godthab (Western Greenland Time)</option>
                                            <option value="America/Jujuy">(GMT-3:00) America/Jujuy (Argentine Time)</option>
                                            <option value="America/Maceio">(GMT-3:00) America/Maceio (Brasilia Time)</option>
                                            <option value="America/Mendoza">(GMT-3:00) America/Mendoza (Argentine Time)</option>
                                            <option value="America/Miquelon">(GMT-3:00) America/Miquelon (Pierre &amp; Miquelon Standard Time)</option>
                                            <option value="America/Montevideo">(GMT-3:00) America/Montevideo (Uruguay Time)</option>
                                            <option value="America/Paramaribo">(GMT-3:00) America/Paramaribo (Suriname Time)</option>
                                            <option value="America/Recife">(GMT-3:00) America/Recife (Brasilia Time)</option>
                                            <option value="America/Rosario">(GMT-3:00) America/Rosario (Argentine Time)</option>
                                            <option value="America/Santarem">(GMT-3:00) America/Santarem (Brasilia Time)</option>
                                            <option value="America/Sao_Paulo">(GMT-3:00) America/Sao_Paulo (Brasilia Time)</option>
                                            <option value="Antarctica/Rothera">(GMT-3:00) Antarctica/Rothera (Rothera Time)</option>
                                            <option value="Brazil/East">(GMT-3:00) Brazil/East (Brasilia Time)</option>
                                            <option value="America/Noronha">(GMT-2:00) America/Noronha (Fernando de Noronha Time)</option>
                                            <option value="Atlantic/South_Georgia">(GMT-2:00) Atlantic/South_Georgia (South Georgia Standard Time)</option>
                                            <option value="Brazil/DeNoronha">(GMT-2:00) Brazil/DeNoronha (Fernando de Noronha Time)</option>
                                            <option value="America/Scoresbysund">(GMT-1:00) America/Scoresbysund (Eastern Greenland Time)</option>
                                            <option value="Atlantic/Azores">(GMT-1:00) Atlantic/Azores (Azores Time)</option>
                                            <option value="Atlantic/Cape_Verde">(GMT-1:00) Atlantic/Cape_Verde (Cape Verde Time)</option>
                                            <option value="Africa/Abidjan">(GMT+0:00) Africa/Abidjan (Greenwich Mean Time)</option>
                                            <option value="Africa/Accra">(GMT+0:00) Africa/Accra (Ghana Mean Time)</option>
                                            <option value="Africa/Bamako">(GMT+0:00) Africa/Bamako (Greenwich Mean Time)</option>
                                            <option value="Africa/Banjul">(GMT+0:00) Africa/Banjul (Greenwich Mean Time)</option>
                                            <option value="Africa/Bissau">(GMT+0:00) Africa/Bissau (Greenwich Mean Time)</option>
                                            <option value="Africa/Casablanca">(GMT+0:00) Africa/Casablanca (Western European Time)</option>
                                            <option value="Africa/Conakry">(GMT+0:00) Africa/Conakry (Greenwich Mean Time)</option>
                                            <option value="Africa/Dakar">(GMT+0:00) Africa/Dakar (Greenwich Mean Time)</option>
                                            <option value="Africa/El_Aaiun">(GMT+0:00) Africa/El_Aaiun (Western European Time)</option>
                                            <option value="Africa/Freetown">(GMT+0:00) Africa/Freetown (Greenwich Mean Time)</option>
                                            <option value="Africa/Lome">(GMT+0:00) Africa/Lome (Greenwich Mean Time)</option>
                                            <option value="Africa/Monrovia">(GMT+0:00) Africa/Monrovia (Greenwich Mean Time)</option>
                                            <option value="Africa/Nouakchott">(GMT+0:00) Africa/Nouakchott (Greenwich Mean Time)</option>
                                            <option value="Africa/Ouagadougou">(GMT+0:00) Africa/Ouagadougou (Greenwich Mean Time)</option>
                                            <option value="Africa/Sao_Tome">(GMT+0:00) Africa/Sao_Tome (Greenwich Mean Time)</option>
                                            <option value="Africa/Timbuktu">(GMT+0:00) Africa/Timbuktu (Greenwich Mean Time)</option>
                                            <option value="America/Danmarkshavn">(GMT+0:00) America/Danmarkshavn (Greenwich Mean Time)</option>
                                            <option value="Atlantic/Canary">(GMT+0:00) Atlantic/Canary (Western European Time)</option>
                                            <option value="Atlantic/Faeroe">(GMT+0:00) Atlantic/Faeroe (Western European Time)</option>
                                            <option value="Atlantic/Faroe">(GMT+0:00) Atlantic/Faroe (Western European Time)</option>
                                            <option value="Atlantic/Madeira">(GMT+0:00) Atlantic/Madeira (Western European Time)</option>
                                            <option value="Atlantic/Reykjavik">(GMT+0:00) Atlantic/Reykjavik (Greenwich Mean Time)</option>
                                            <option value="Atlantic/St_Helena">(GMT+0:00) Atlantic/St_Helena (Greenwich Mean Time)</option>
                                            <option value="Europe/Belfast">(GMT+0:00) Europe/Belfast (Greenwich Mean Time)</option>
                                            <option value="Europe/Dublin">(GMT+0:00) Europe/Dublin (Greenwich Mean Time)</option>
                                            <option value="Europe/Guernsey">(GMT+0:00) Europe/Guernsey (Greenwich Mean Time)</option>
                                            <option value="Europe/Isle_of_Man">(GMT+0:00) Europe/Isle_of_Man (Greenwich Mean Time)</option>
                                            <option value="Europe/Jersey">(GMT+0:00) Europe/Jersey (Greenwich Mean Time)</option>
                                            <option value="Europe/Lisbon">(GMT+0:00) Europe/Lisbon (Western European Time)</option>
                                            <option value="Europe/London">(GMT+0:00) Europe/London (Greenwich Mean Time)</option>
                                            <option value="Africa/Algiers">(GMT+1:00) Africa/Algiers (Central European Time)</option>
                                            <option value="Africa/Bangui">(GMT+1:00) Africa/Bangui (Western African Time)</option>
                                            <option value="Africa/Brazzaville">(GMT+1:00) Africa/Brazzaville (Western African Time)</option>
                                            <option value="Africa/Ceuta">(GMT+1:00) Africa/Ceuta (Central European Time)</option>
                                            <option value="Africa/Douala">(GMT+1:00) Africa/Douala (Western African Time)</option>
                                            <option value="Africa/Kinshasa">(GMT+1:00) Africa/Kinshasa (Western African Time)</option>
                                            <option value="Africa/Lagos">(GMT+1:00) Africa/Lagos (Western African Time)</option>
                                            <option value="Africa/Libreville">(GMT+1:00) Africa/Libreville (Western African Time)</option>
                                            <option value="Africa/Luanda">(GMT+1:00) Africa/Luanda (Western African Time)</option>
                                            <option value="Africa/Malabo">(GMT+1:00) Africa/Malabo (Western African Time)</option>
                                            <option value="Africa/Ndjamena">(GMT+1:00) Africa/Ndjamena (Western African Time)</option>
                                            <option value="Africa/Niamey">(GMT+1:00) Africa/Niamey (Western African Time)</option>
                                            <option value="Africa/Porto-Novo">(GMT+1:00) Africa/Porto-Novo (Western African Time)</option>
                                            <option value="Africa/Tunis">(GMT+1:00) Africa/Tunis (Central European Time)</option>
                                            <option value="Africa/Windhoek">(GMT+1:00) Africa/Windhoek (Western African Time)</option>
                                            <option value="Arctic/Longyearbyen">(GMT+1:00) Arctic/Longyearbyen (Central European Time)</option>
                                            <option value="Atlantic/Jan_Mayen">(GMT+1:00) Atlantic/Jan_Mayen (Central European Time)</option>
                                            <option value="Europe/Amsterdam">(GMT+1:00) Europe/Amsterdam (Central European Time)</option>
                                            <option value="Europe/Andorra">(GMT+1:00) Europe/Andorra (Central European Time)</option>
                                            <option value="Europe/Belgrade">(GMT+1:00) Europe/Belgrade (Central European Time)</option>
                                            <option value="Europe/Berlin">(GMT+1:00) Europe/Berlin (Central European Time)</option>
                                            <option value="Europe/Bratislava">(GMT+1:00) Europe/Bratislava (Central European Time)</option>
                                            <option value="Europe/Brussels">(GMT+1:00) Europe/Brussels (Central European Time)</option>
                                            <option value="Europe/Budapest">(GMT+1:00) Europe/Budapest (Central European Time)</option>
                                            <option value="Europe/Copenhagen">(GMT+1:00) Europe/Copenhagen (Central European Time)</option>
                                            <option value="Europe/Gibraltar">(GMT+1:00) Europe/Gibraltar (Central European Time)</option>
                                            <option value="Europe/Ljubljana">(GMT+1:00) Europe/Ljubljana (Central European Time)</option>
                                            <option value="Europe/Luxembourg">(GMT+1:00) Europe/Luxembourg (Central European Time)</option>
                                            <option value="Europe/Madrid">(GMT+1:00) Europe/Madrid (Central European Time)</option>
                                            <option value="Europe/Malta">(GMT+1:00) Europe/Malta (Central European Time)</option>
                                            <option value="Europe/Monaco">(GMT+1:00) Europe/Monaco (Central European Time)</option>
                                            <option value="Europe/Oslo">(GMT+1:00) Europe/Oslo (Central European Time)</option>
                                            <option value="Europe/Paris">(GMT+1:00) Europe/Paris (Central European Time)</option>
                                            <option value="Europe/Podgorica">(GMT+1:00) Europe/Podgorica (Central European Time)</option>
                                            <option value="Europe/Prague">(GMT+1:00) Europe/Prague (Central European Time)</option>
                                            <option value="Europe/Rome">(GMT+1:00) Europe/Rome (Central European Time)</option>
                                            <option value="Europe/San_Marino">(GMT+1:00) Europe/San_Marino (Central European Time)</option>
                                            <option value="Europe/Sarajevo">(GMT+1:00) Europe/Sarajevo (Central European Time)</option>
                                            <option value="Europe/Skopje">(GMT+1:00) Europe/Skopje (Central European Time)</option>
                                            <option value="Europe/Stockholm">(GMT+1:00) Europe/Stockholm (Central European Time)</option>
                                            <option value="Europe/Tirane">(GMT+1:00) Europe/Tirane (Central European Time)</option>
                                            <option value="Europe/Vaduz">(GMT+1:00) Europe/Vaduz (Central European Time)</option>
                                            <option value="Europe/Vatican">(GMT+1:00) Europe/Vatican (Central European Time)</option>
                                            <option value="Europe/Vienna">(GMT+1:00) Europe/Vienna (Central European Time)</option>
                                            <option value="Europe/Warsaw">(GMT+1:00) Europe/Warsaw (Central European Time)</option>
                                            <option value="Europe/Zagreb">(GMT+1:00) Europe/Zagreb (Central European Time)</option>
                                            <option value="Europe/Zurich">(GMT+1:00) Europe/Zurich (Central European Time)</option>
                                            <option value="Africa/Blantyre">(GMT+2:00) Africa/Blantyre (Central African Time)</option>
                                            <option value="Africa/Bujumbura">(GMT+2:00) Africa/Bujumbura (Central African Time)</option>
                                            <option value="Africa/Cairo">(GMT+2:00) Africa/Cairo (Eastern European Time)</option>
                                            <option value="Africa/Gaborone">(GMT+2:00) Africa/Gaborone (Central African Time)</option>
                                            <option value="Africa/Harare">(GMT+2:00) Africa/Harare (Central African Time)</option>
                                            <option value="Africa/Johannesburg">(GMT+2:00) Africa/Johannesburg (South Africa Standard Time)</option>
                                            <option value="Africa/Kigali">(GMT+2:00) Africa/Kigali (Central African Time)</option>
                                            <option value="Africa/Lubumbashi">(GMT+2:00) Africa/Lubumbashi (Central African Time)</option>
                                            <option value="Africa/Lusaka">(GMT+2:00) Africa/Lusaka (Central African Time)</option>
                                            <option value="Africa/Maputo">(GMT+2:00) Africa/Maputo (Central African Time)</option>
                                            <option value="Africa/Maseru">(GMT+2:00) Africa/Maseru (South Africa Standard Time)</option>
                                            <option value="Africa/Mbabane">(GMT+2:00) Africa/Mbabane (South Africa Standard Time)</option>
                                            <option value="Africa/Tripoli">(GMT+2:00) Africa/Tripoli (Eastern European Time)</option>
                                            <option value="Asia/Amman">(GMT+2:00) Asia/Amman (Eastern European Time)</option>
                                            <option value="Asia/Beirut">(GMT+2:00) Asia/Beirut (Eastern European Time)</option>
                                            <option value="Asia/Damascus">(GMT+2:00) Asia/Damascus (Eastern European Time)</option>
                                            <option value="Asia/Gaza">(GMT+2:00) Asia/Gaza (Eastern European Time)</option>
                                            <option value="Asia/Istanbul">(GMT+2:00) Asia/Istanbul (Eastern European Time)</option>
                                            <option value="Asia/Jerusalem">(GMT+2:00) Asia/Jerusalem (Israel Standard Time)</option>
                                            <option value="Asia/Nicosia">(GMT+2:00) Asia/Nicosia (Eastern European Time)</option>
                                            <option value="Asia/Tel_Aviv">(GMT+2:00) Asia/Tel_Aviv (Israel Standard Time)</option>
                                            <option value="Europe/Athens">(GMT+2:00) Europe/Athens (Eastern European Time)</option>
                                            <option value="Europe/Bucharest">(GMT+2:00) Europe/Bucharest (Eastern European Time)</option>
                                            <option value="Europe/Chisinau">(GMT+2:00) Europe/Chisinau (Eastern European Time)</option>
                                            <option value="Europe/Helsinki">(GMT+2:00) Europe/Helsinki (Eastern European Time)</option>
                                            <option value="Europe/Istanbul">(GMT+2:00) Europe/Istanbul (Eastern European Time)</option>
                                            <option value="Europe/Kaliningrad">(GMT+2:00) Europe/Kaliningrad (Eastern European Time)</option>
                                            <option value="Europe/Kiev">(GMT+2:00) Europe/Kiev (Eastern European Time)</option>
                                            <option value="Europe/Mariehamn">(GMT+2:00) Europe/Mariehamn (Eastern European Time)</option>
                                            <option value="Europe/Minsk">(GMT+2:00) Europe/Minsk (Eastern European Time)</option>
                                            <option value="Europe/Nicosia">(GMT+2:00) Europe/Nicosia (Eastern European Time)</option>
                                            <option value="Europe/Riga">(GMT+2:00) Europe/Riga (Eastern European Time)</option>
                                            <option value="Europe/Simferopol">(GMT+2:00) Europe/Simferopol (Eastern European Time)</option>
                                            <option value="Europe/Sofia">(GMT+2:00) Europe/Sofia (Eastern European Time)</option>
                                            <option value="Europe/Tallinn">(GMT+2:00) Europe/Tallinn (Eastern European Time)</option>
                                            <option value="Europe/Tiraspol">(GMT+2:00) Europe/Tiraspol (Eastern European Time)</option>
                                            <option value="Europe/Uzhgorod">(GMT+2:00) Europe/Uzhgorod (Eastern European Time)</option>
                                            <option value="Europe/Vilnius">(GMT+2:00) Europe/Vilnius (Eastern European Time)</option>
                                            <option value="Europe/Zaporozhye">(GMT+2:00) Europe/Zaporozhye (Eastern European Time)</option>
                                            <option value="Africa/Addis_Ababa">(GMT+3:00) Africa/Addis_Ababa (Eastern African Time)</option>
                                            <option value="Africa/Asmara">(GMT+3:00) Africa/Asmara (Eastern African Time)</option>
                                            <option value="Africa/Asmera">(GMT+3:00) Africa/Asmera (Eastern African Time)</option>
                                            <option value="Africa/Dar_es_Salaam">(GMT+3:00) Africa/Dar_es_Salaam (Eastern African Time)</option>
                                            <option value="Africa/Djibouti">(GMT+3:00) Africa/Djibouti (Eastern African Time)</option>
                                            <option value="Africa/Kampala">(GMT+3:00) Africa/Kampala (Eastern African Time)</option>
                                            <option value="Africa/Khartoum">(GMT+3:00) Africa/Khartoum (Eastern African Time)</option>
                                            <option value="Africa/Mogadishu">(GMT+3:00) Africa/Mogadishu (Eastern African Time)</option>
                                            <option value="Africa/Nairobi">(GMT+3:00) Africa/Nairobi (Eastern African Time)</option>
                                            <option value="Antarctica/Syowa">(GMT+3:00) Antarctica/Syowa (Syowa Time)</option>
                                            <option value="Asia/Aden">(GMT+3:00) Asia/Aden (Arabia Standard Time)</option>
                                            <option value="Asia/Baghdad">(GMT+3:00) Asia/Baghdad (Arabia Standard Time)</option>
                                            <option value="Asia/Bahrain">(GMT+3:00) Asia/Bahrain (Arabia Standard Time)</option>
                                            <option value="Asia/Kuwait">(GMT+3:00) Asia/Kuwait (Arabia Standard Time)</option>
                                            <option value="Asia/Qatar">(GMT+3:00) Asia/Qatar (Arabia Standard Time)</option>
                                            <option value="Europe/Moscow">(GMT+3:00) Europe/Moscow (Moscow Standard Time)</option>
                                            <option value="Europe/Volgograd">(GMT+3:00) Europe/Volgograd (Volgograd Time)</option>
                                            <option value="Indian/Antananarivo">(GMT+3:00) Indian/Antananarivo (Eastern African Time)</option>
                                            <option value="Indian/Comoro">(GMT+3:00) Indian/Comoro (Eastern African Time)</option>
                                            <option value="Indian/Mayotte">(GMT+3:00) Indian/Mayotte (Eastern African Time)</option>
                                            <option value="Asia/Tehran">(GMT+3:30) Asia/Tehran (Iran Standard Time)</option>
                                            <option value="Asia/Baku">(GMT+4:00) Asia/Baku (Azerbaijan Time)</option>
                                            <option value="Asia/Dubai">(GMT+4:00) Asia/Dubai (Gulf Standard Time)</option>
                                            <option value="Asia/Muscat">(GMT+4:00) Asia/Muscat (Gulf Standard Time)</option>
                                            <option value="Asia/Tbilisi">(GMT+4:00) Asia/Tbilisi (Georgia Time)</option>
                                            <option value="Asia/Yerevan">(GMT+4:00) Asia/Yerevan (Armenia Time)</option>
                                            <option value="Europe/Samara">(GMT+4:00) Europe/Samara (Samara Time)</option>
                                            <option value="Indian/Mahe">(GMT+4:00) Indian/Mahe (Seychelles Time)</option>
                                            <option value="Indian/Mauritius">(GMT+4:00) Indian/Mauritius (Mauritius Time)</option>
                                            <option value="Indian/Reunion">(GMT+4:00) Indian/Reunion (Reunion Time)</option>
                                            <option value="Asia/Kabul">(GMT+4:30) Asia/Kabul (Afghanistan Time)</option>
                                            <option value="Asia/Aqtau">(GMT+5:00) Asia/Aqtau (Aqtau Time)</option>
                                            <option value="Asia/Aqtobe">(GMT+5:00) Asia/Aqtobe (Aqtobe Time)</option>
                                            <option value="Asia/Ashgabat">(GMT+5:00) Asia/Ashgabat (Turkmenistan Time)</option>
                                            <option value="Asia/Ashkhabad">(GMT+5:00) Asia/Ashkhabad (Turkmenistan Time)</option>
                                            <option value="Asia/Dushanbe">(GMT+5:00) Asia/Dushanbe (Tajikistan Time)</option>
                                            <option value="Asia/Karachi">(GMT+5:00) Asia/Karachi (Pakistan Time)</option>
                                            <option value="Asia/Oral">(GMT+5:00) Asia/Oral (Oral Time)</option>
                                            <option value="Asia/Samarkand">(GMT+5:00) Asia/Samarkand (Uzbekistan Time)</option>
                                            <option value="Asia/Tashkent">(GMT+5:00) Asia/Tashkent (Uzbekistan Time)</option>
                                            <option value="Asia/Yekaterinburg">(GMT+5:00) Asia/Yekaterinburg (Yekaterinburg Time)</option>
                                            <option value="Indian/Kerguelen">(GMT+5:00) Indian/Kerguelen (French Southern &amp; Antarctic Lands Time)</option>
                                            <option value="Indian/Maldives">(GMT+5:00) Indian/Maldives (Maldives Time)</option>
                                            <option value="Asia/Calcutta">(GMT+5:30) Asia/Calcutta (India Standard Time)</option>
                                            <option value="Asia/Colombo">(GMT+5:30) Asia/Colombo (India Standard Time)</option>
                                            <option value="Asia/Kolkata">(GMT+5:30) Asia/Kolkata (India Standard Time)</option>
                                            <option value="Asia/Katmandu">(GMT+5:45) Asia/Katmandu (Nepal Time)</option>
                                            <option value="Antarctica/Mawson">(GMT+6:00) Antarctica/Mawson (Mawson Time)</option>
                                            <option value="Antarctica/Vostok">(GMT+6:00) Antarctica/Vostok (Vostok Time)</option>
                                            <option value="Asia/Almaty">(GMT+6:00) Asia/Almaty (Alma-Ata Time)</option>
                                            <option value="Asia/Bishkek">(GMT+6:00) Asia/Bishkek (Kirgizstan Time)</option>
                                            <option value="Asia/Dacca">(GMT+6:00) Asia/Dacca (Bangladesh Time)</option>
                                            <option value="Asia/Dhaka">(GMT+6:00) Asia/Dhaka (Bangladesh Time)</option>
                                            <option value="Asia/Novosibirsk">(GMT+6:00) Asia/Novosibirsk (Novosibirsk Time)</option>
                                            <option value="Asia/Omsk">(GMT+6:00) Asia/Omsk (Omsk Time)</option>
                                            <option value="Asia/Qyzylorda">(GMT+6:00) Asia/Qyzylorda (Qyzylorda Time)</option>
                                            <option value="Asia/Thimbu">(GMT+6:00) Asia/Thimbu (Bhutan Time)</option>
                                            <option value="Asia/Thimphu">(GMT+6:00) Asia/Thimphu (Bhutan Time)</option>
                                            <option value="Indian/Chagos">(GMT+6:00) Indian/Chagos (Indian Ocean Territory Time)</option>
                                            <option value="Asia/Rangoon">(GMT+6:30) Asia/Rangoon (Myanmar Time)</option>
                                            <option value="Indian/Cocos">(GMT+6:30) Indian/Cocos (Cocos Islands Time)</option>
                                            <option value="Antarctica/Davis">(GMT+7:00) Antarctica/Davis (Davis Time)</option>
                                            <option value="Asia/Bangkok">(GMT+7:00) Asia/Bangkok (Indochina Time)</option>
                                            <option value="Asia/Ho_Chi_Minh">(GMT+7:00) Asia/Ho_Chi_Minh (Indochina Time)</option>
                                            <option value="Asia/Hovd">(GMT+7:00) Asia/Hovd (Hovd Time)</option>
                                            <option value="Asia/Jakarta">(GMT+7:00) Asia/Jakarta (West Indonesia Time)</option>
                                            <option value="Asia/Krasnoyarsk">(GMT+7:00) Asia/Krasnoyarsk (Krasnoyarsk Time)</option>
                                            <option value="Asia/Phnom_Penh">(GMT+7:00) Asia/Phnom_Penh (Indochina Time)</option>
                                            <option value="Asia/Pontianak">(GMT+7:00) Asia/Pontianak (West Indonesia Time)</option>
                                            <option value="Asia/Saigon">(GMT+7:00) Asia/Saigon (Indochina Time)</option>
                                            <option value="Asia/Vientiane">(GMT+7:00) Asia/Vientiane (Indochina Time)</option>
                                            <option value="Indian/Christmas">(GMT+7:00) Indian/Christmas (Christmas Island Time)</option>
                                            <option value="Antarctica/Casey">(GMT+8:00) Antarctica/Casey (Western Standard Time (Australia))</option>
                                            <option value="Asia/Brunei">(GMT+8:00) Asia/Brunei (Brunei Time)</option>
                                            <option value="Asia/Choibalsan">(GMT+8:00) Asia/Choibalsan (Choibalsan Time)</option>
                                            <option value="Asia/Chongqing">(GMT+8:00) Asia/Chongqing (China Standard Time)</option>
                                            <option value="Asia/Chungking">(GMT+8:00) Asia/Chungking (China Standard Time)</option>
                                            <option value="Asia/Harbin">(GMT+8:00) Asia/Harbin (China Standard Time)</option>
                                            <option value="Asia/Hong_Kong">(GMT+8:00) Asia/Hong_Kong (Hong Kong Time)</option>
                                            <option value="Asia/Irkutsk">(GMT+8:00) Asia/Irkutsk (Irkutsk Time)</option>
                                            <option value="Asia/Kashgar">(GMT+8:00) Asia/Kashgar (China Standard Time)</option>
                                            <option value="Asia/Kuala_Lumpur">(GMT+8:00) Asia/Kuala_Lumpur (Malaysia Time)</option>
                                            <option value="Asia/Kuching">(GMT+8:00) Asia/Kuching (Malaysia Time)</option>
                                            <option value="Asia/Macao">(GMT+8:00) Asia/Macao (China Standard Time)</option>
                                            <option value="Asia/Macau">(GMT+8:00) Asia/Macau (China Standard Time)</option>
                                            <option value="Asia/Makassar">(GMT+8:00) Asia/Makassar (Central Indonesia Time)</option>
                                            <option value="Asia/Manila">(GMT+8:00) Asia/Manila (Philippines Time)</option>
                                            <option value="Asia/Shanghai">(GMT+8:00) Asia/Shanghai (China Standard Time)</option>
                                            <option value="Asia/Singapore">(GMT+8:00) Asia/Singapore (Singapore Time)</option>
                                            <option value="Asia/Taipei">(GMT+8:00) Asia/Taipei (China Standard Time)</option>
                                            <option value="Asia/Ujung_Pandang">(GMT+8:00) Asia/Ujung_Pandang (Central Indonesia Time)</option>
                                            <option value="Asia/Ulaanbaatar">(GMT+8:00) Asia/Ulaanbaatar (Ulaanbaatar Time)</option>
                                            <option value="Asia/Ulan_Bator">(GMT+8:00) Asia/Ulan_Bator (Ulaanbaatar Time)</option>
                                            <option value="Asia/Urumqi">(GMT+8:00) Asia/Urumqi (China Standard Time)</option>
                                            <option value="Australia/Perth">(GMT+8:00) Australia/Perth (Western Standard Time (Australia))</option>
                                            <option value="Australia/West">(GMT+8:00) Australia/West (Western Standard Time (Australia))</option>
                                            <option value="Australia/Eucla">(GMT+8:45) Australia/Eucla (Central Western Standard Time (Australia))</option>
                                            <option value="Asia/Dili">(GMT+9:00) Asia/Dili (Timor-Leste Time)</option>
                                            <option value="Asia/Jayapura">(GMT+9:00) Asia/Jayapura (East Indonesia Time)</option>
                                            <option value="Asia/Pyongyang">(GMT+9:00) Asia/Pyongyang (Korea Standard Time)</option>
                                            <option value="Asia/Seoul">(GMT+9:00) Asia/Seoul (Korea Standard Time)</option>
                                            <option value="Asia/Tokyo">(GMT+9:00) Asia/Tokyo (Japan Standard Time)</option>
                                            <option value="Asia/Yakutsk">(GMT+9:00) Asia/Yakutsk (Yakutsk Time)</option>
                                            <option value="Australia/Adelaide">(GMT+9:30) Australia/Adelaide (Central Standard Time (South Australia))</option>
                                            <option value="Australia/Broken_Hill">(GMT+9:30) Australia/Broken_Hill (Central Standard Time (South Australia/New South Wales))</option>
                                            <option value="Australia/Darwin">(GMT+9:30) Australia/Darwin (Central Standard Time (Northern Territory))</option>
                                            <option value="Australia/North">(GMT+9:30) Australia/North (Central Standard Time (Northern Territory))</option>
                                            <option value="Australia/South">(GMT+9:30) Australia/South (Central Standard Time (South Australia))</option>
                                            <option value="Australia/Yancowinna">(GMT+9:30) Australia/Yancowinna (Central Standard Time (South Australia/New South Wales))</option>
                                            <option value="Antarctica/DumontDUrville">(GMT+10:00) Antarctica/DumontDUrville (Dumont-d'Urville Time)</option>
                                            <option value="Asia/Sakhalin">(GMT+10:00) Asia/Sakhalin (Sakhalin Time)</option>
                                            <option value="Asia/Vladivostok">(GMT+10:00) Asia/Vladivostok (Vladivostok Time)</option>
                                            <option value="Australia/ACT">(GMT+10:00) Australia/ACT (Eastern Standard Time (New South Wales))</option>
                                            <option value="Australia/Brisbane">(GMT+10:00) Australia/Brisbane (Eastern Standard Time (Queensland))</option>
                                            <option value="Australia/Canberra">(GMT+10:00) Australia/Canberra (Eastern Standard Time (New South Wales))</option>
                                            <option value="Australia/Currie">(GMT+10:00) Australia/Currie (Eastern Standard Time (New South Wales))</option>
                                            <option value="Australia/Hobart">(GMT+10:00) Australia/Hobart (Eastern Standard Time (Tasmania))</option>
                                            <option value="Australia/Lindeman">(GMT+10:00) Australia/Lindeman (Eastern Standard Time (Queensland))</option>
                                            <option value="Australia/Melbourne">(GMT+10:00) Australia/Melbourne (Eastern Standard Time (Victoria))</option>
                                            <option value="Australia/NSW">(GMT+10:00) Australia/NSW (Eastern Standard Time (New South Wales))</option>
                                            <option value="Australia/Queensland">(GMT+10:00) Australia/Queensland (Eastern Standard Time (Queensland))</option>
                                            <option value="Australia/Sydney">(GMT+10:00) Australia/Sydney (Eastern Standard Time (New South Wales))</option>
                                            <option value="Australia/Tasmania">(GMT+10:00) Australia/Tasmania (Eastern Standard Time (Tasmania))</option>
                                            <option value="Australia/Victoria">(GMT+10:00) Australia/Victoria (Eastern Standard Time (Victoria))</option>
                                            <option value="Australia/LHI">(GMT+10:30) Australia/LHI (Lord Howe Standard Time)</option>
                                            <option value="Australia/Lord_Howe">(GMT+10:30) Australia/Lord_Howe (Lord Howe Standard Time)</option>
                                            <option value="Asia/Magadan">(GMT+11:00) Asia/Magadan (Magadan Time)</option>
                                            <option value="Antarctica/McMurdo">(GMT+12:00) Antarctica/McMurdo (New Zealand Standard Time)</option>
                                            <option value="Antarctica/South_Pole">(GMT+12:00) Antarctica/South_Pole (New Zealand Standard Time)</option>
                                            <option value="Asia/Anadyr">(GMT+12:00) Asia/Anadyr (Anadyr Time)</option>
                                            <option value="Asia/Kamchatka">(GMT+12:00) Asia/Kamchatka (Petropavlovsk-Kamchatski Time)</option>
                                        </select>

                                        <?php if($errors->has('app_debug')): ?>
                                            <div class="error"><?php echo e($errors->first('app_debug')); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="col-md-3 mt-3">
                                    <div class="form-group">
                                        <label for="app_logo"><?php echo e(__('pages.app_logo')); ?> <span class="text-danger">*</span></label>

                                        <div class="upload-img-box">
                                            <?php if(get_option('app_logo') != ''): ?>
                                                <img src="<?php echo e(asset(get_option('app_logo'))); ?>">
                                            <?php else: ?>
                                                <img src="">
                                            <?php endif; ?>
                                            <input type="file" name="app_logo" id="app_logo" accept="image/*" onchange="previewFile(this)">
                                            <div class="upload-img-box-icon">
                                                <i class="fa fa-camera"></i>
                                                <p class="m-0"><?php echo e(__('pages.app_logo')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 mt-3">
                                    <div class="form-group">
                                        <label for="login_banner"><?php echo e(__('Login Banner')); ?> <span class="text-danger">*</span></label>

                                        <div class="upload-img-box">
                                            <?php if(get_option('login_banner') != ''): ?>
                                                <img src="<?php echo e(asset(get_option('login_banner'))); ?>">
                                            <?php else: ?>
                                                <img src="">
                                            <?php endif; ?>
                                            <input type="file" name="login_banner" id="login_banner" accept="image/*" onchange="previewFile(this)">
                                            <div class="upload-img-box-icon">
                                                <i class="fa fa-camera"></i>
                                                <p class="m-0"><?php echo e(__('pages.app_logo')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 mt-3">
                                    <div class="form-group">
                                        <label for="app_fav_icon"><?php echo e(__('pages.app_fav_icon')); ?> <span class="text-danger">*</span></label>

                                        <div class="upload-img-box">
                                            <?php if(get_option('app_fav_icon') != ''): ?>
                                                <img src="<?php echo e(asset(get_option('app_fav_icon'))); ?>">
                                            <?php else: ?>
                                                <img src="">
                                            <?php endif; ?>
                                            <input type="file" name="app_fav_icon" id="app_fav_icon" accept="image/*" onchange="previewFile(this)">
                                            <div class="upload-img-box-icon">
                                                <i class="fa fa-camera"></i>
                                                <p class="m-0"><?php echo e(__('pages.app_fav_icon')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6 mt-4 mb-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('pages.save_and_update')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('/backend/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\server\MAMP\htdocs\pos\package\resources\views/backend/settings/general.blade.php ENDPATH**/ ?>