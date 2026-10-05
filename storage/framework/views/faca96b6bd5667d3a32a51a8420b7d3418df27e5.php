<?php $__env->startSection('section'); ?>
<div class="card">
    <div class="card-body">
        <?php echo e(Form::open(['route' => ['setting.update'], 'method' => 'post', 'files' => true, 'id' => 'createSetting'])); ?>

        <div class="row">
            <!-- App Name Field -->
            <div class="form-group col-sm-6 mb-3">
                <?php echo e(Form::label('app_name', __('messages.setting.app_name').':', ['class' => 'form-label required'])); ?>

                <?php echo e(Form::text('app_name', $setting['app_name'], ['class' => 'form-control', 'id' => 'settingAppName','placeholder'=> __('messages.setting.app_name')])); ?>

            </div>
            <!-- Email Field -->
            <div class="form-group col-sm-6 mb-3">
                <?php echo e(Form::label('email', __('messages.user.email').':', ['class' => 'form-label required'])); ?>

                <?php echo e(Form::email('email', $setting['email'], ['class' => 'form-control', 'required', 'id' => 'settingEmail','placeholder'=>__('messages.user.email')])); ?>

            </div>
            <!-- Phone Field -->
            <div class="form-group col-sm-6 mb-3">
                <?php echo e(Form::label('phone', __('messages.user.phone').':', ['class' => 'form-label required'])); ?>

                <br>
                <?php echo e(Form::tel('phone', '+'.$setting['prefix_code'].$setting['phone'], ['class' => 'form-control', 'placeholder' => __('messages.form.contact'), 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber'])); ?>

                <?php echo e(Form::hidden('prefix_code','+'.$setting['prefix_code'] ,['id'=>'prefix_code'])); ?>

                <p id="valid-msg" class="text-success d-block fw-400 fs-small mt-2 d-none"><?php echo e(__('messages.placeholder.valid_number')); ?></p>
                <p id="error-msg" class="text-danger d-block fw-400 fs-small mt-2 d-none"></p>
            </div>

            <div class="col-md-6 form-group mb-3">
                <?php echo e(Form::label('plan_expire_notification', __('messages.plan_expire_notification').':', ['class' => 'form-label'])); ?>

                <span class="required"></span>
                <?php echo e(Form::number('plan_expire_notification', $setting['plan_expire_notification'], ['class' => 'form-control','min'=>0, "onKeyPress"=>"if(this.value.length==2) return false;",'required', 'id' => 'settingPlanExpireNotification','placeholder'=>__('messages.plan_expire_notification')])); ?>

            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <?php echo e(Form::label('address', __('messages.setting.address').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::text('address', $setting['address'], ['class' => 'form-control','min'=>0, 'id' => 'settingAddress', 'required','placeholder'=>__('messages.setting.address')  ])); ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <?php echo e(Form::label('default_language', __('messages.setting.default_language').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::select('default_language', getAllLanguage(), $setting['default_language'],['class' => 'form-control', 'data-control'=>'select2'])); ?>

                </div>
            </div>
            <div class="form-group col-lg-3 col-md-3 mb-3">
                <div class="mb-3" io-image-input="true">
                    <label for="appLogoPreview" class="form-label required"><?php echo e(__('messages.setting.app_logo').':'); ?></label>
                    <span data-bs-toggle="tooltip"
                    data-placement="top"
                    data-bs-original-title="<?php echo e(__('messages.tooltip.app_logo')); ?>">
                    <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
                </span>
                <div class="d-block">
                    <div class="image-picker">
                        <div class="image previewImage" id="appLogoPreview"
                        style="background-image: url('<?php echo e(isset($setting['app_logo']) ? $setting['app_logo'] : asset('assets/images/infyom-logo.png')); ?>')">
                    </div>
                    <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                    data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.change_app_logo')); ?>">
                    <label>
                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                        <input type="file" id="appLogo" name="app_logo" class="image-upload d-none" accept="image/*"/>
                    </label>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="form-group col-lg-3 col-md-3 mb-3">
    <div class="mb-3" io-image-input="true">
        <label for="faviconPreview"
        class="form-label required"> <?php echo e(__('messages.setting.favicon'). ':'); ?></label>
        <span data-bs-toggle="tooltip"
        data-placement="top"
        data-bs-original-title="<?php echo e(__('messages.tooltip.favicon_logo')); ?>">
        <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
    </span>
    <div class="d-block">
        <div class="image-picker">
            <div class="image previewImage" id="faviconPreview"
            style="background-image: url('<?php echo e(isset($setting['favicon']) ? $setting['favicon'] : asset('web/media/logos/favicon-infyom.png')); ?>');">
        </div>
        <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
        data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.change_favicon_logo')); ?>">
        <label>
            <i class="fa-solid fa-pen" id="profileImageIcon"></i>
            <input type="file" id="favicon" name="favicon" class="image-upload d-none" accept="image/*"/>
        </label>
    </span>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="card-header px-0">
    <div class="d-flex align-items-center justify-content-center">
        <h3 class="m-0"><?php echo e(__('messages.plan.seo')); ?>

        </h3>
    </div>
</div>
<div class="row border-top p-4">
    <div class="col-lg-6 mb-3">
        <?php echo e(Form::label('Site title', __('messages.vcard.site_title').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('site_title', isset($metas) ? $metas['site_title'] : null, ['class' => 'form-control', 'placeholder' => __('messages.form.site_title')])); ?>

    </div>
    <div class="col-lg-6 mb-3">
        <?php echo e(Form::label('Home title', __('messages.vcard.home_title').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('home_title', isset($metas) ? $metas['home_title'] : null, ['class' => 'form-control', 'placeholder' => __('messages.form.home_title')])); ?>

    </div>
    <div class="col-lg-6 mb-3">
        <?php echo e(Form::label('Meta keyword', __('messages.vcard.meta_keyword').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('meta_keyword', isset($metas) ? $metas['meta_keyword'] : null, ['class' => 'form-control', 'placeholder' => __('messages.form.meta_keyword')])); ?>

    </div>
    <div class="col-lg-6 mb-3">
        <?php echo e(Form::label('Meta Description', __('messages.vcard.meta_description').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('meta_description', isset($metas) ? $metas['meta_description'] : null, ['class' => 'form-control', 'placeholder' => __('messages.form.meta_description')])); ?>

    </div>
</div>
<div class="card-header px-0">
    <div class="d-flex align-items-center justify-content-center">
        <h3 class="m-0"><?php echo e(__('messages.vcard.google_analytics')); ?>

        </h3>
    </div>
</div>
<div class="col-lg-12 border-top pt-4 mb-3">
    <?php echo e(Form::label('Google Analytics', __('messages.vcard.google_analytics').':', ['class' => 'form-label'])); ?>

    <?php echo e(Form::textarea('google_analytics',isset($metas) ? $metas['google_analytics'] : null, ['class' => 'form-control', 'placeholder' => __('messages.form.google_analytics')])); ?>

</div>
<div class="card-header px-0">
    <div class="d-flex align-items-center justify-content-center">
        <h3 class="m-0"><?php echo e(__('messages.payment_method')); ?>

        </h3>
    </div>
</div>
<div class="card-body border-top p-3">
    <div class="row mb-6">
        <div class="table-responsive px-0">
            <table>
                <tbody class="d-flex flex-wrap">
                    <?php $__currentLoopData = \App\Models\Plan::PAYMENT_METHOD; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paymentGateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="w-100 d-flex justify-content-between">
                        <td class="p-2">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="<?php echo e($key); ?>"
                                name="payment_gateway[]"
                                id="<?php echo e($key); ?>" <?php echo e(in_array($paymentGateway, $selectedPaymentGateways) ?'checked':''); ?> />
                                <label class="form-label" for="<?php echo e($key); ?>">
                                    <?php echo e($paymentGateway); ?>

                                </label>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div>
    <?php echo e(Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3'])); ?>

    <a href="<?php echo e(route('setting.index')); ?>"
    class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
</div>
<?php echo e(Form::close()); ?>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('settings.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/settings/general.blade.php ENDPATH**/ ?>