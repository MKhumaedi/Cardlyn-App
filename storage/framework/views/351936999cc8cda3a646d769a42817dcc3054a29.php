<div class="row">
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('name', __('messages.common.name').':', ['class' => 'form-label required'])); ?>

        <?php echo e(Form::text('name', isset($plan) ? $plan->name : null, ['class' => 'form-control', 'placeholder' => __('messages.form.plan_name'), 'required'])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('frequency', __('messages.plan.frequency').':',['class' => 'form-label required'])); ?>

        <?php echo e(Form::select('frequency', \App\Models\Plan::DURATION, isset($plan) ? $plan->frequency : null, ['class' => 'form-control', 'required', 'data-control' => 'select2'])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('currency_id', __('messages.plan.currency').':',['class' => 'form-label required'])); ?>

        <?php echo e(Form::select('currency_id', getCurrencies(), isset($plan) ? $plan->currency_id : null, ['class' => 'form-control select2Selector', 'required','placeholder' => __('messages.form.select_currency'), 'data-control' => 'select2', 'required'])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo Form::label('price', __('messages.plan.price').':',['class' => 'form-label required']); ?>

        <?php echo Form::text('price', isset($plan) ? number_format($plan->price) : null, ['class' => 'form-control', 'min'=>'0', 'step' => '0.01', 'placeholder' => __('messages.form.price'), 'required', isset($plan) && $plan->is_trial ? 'disabled' : '']); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo Form::label('no_of_vcards', __('messages.plan.no_of_vcards').':',['class' => 'form-label required']); ?>

        <?php echo Form::number('no_of_vcards', isset($plan) ? $plan->no_of_vcards : null, ['class' => 'form-control', 'min'=>'1', 'placeholder' => __('messages.form.allowed_vcard'), 'required']); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo Form::label('trial_days', __('messages.plan.trial_days').':',['class' => 'form-label']); ?>

        <?php echo Form::number('trial_days', isset($plan) ? $plan->trial_days : null, ['class' => 'form-control', 'placeholder' => __('messages.form.enter_trial')]); ?>

    </div>
    <div class="col-12 mb-2">
        <?php echo e(Form::label('template', __('messages.plan.multi_templates').':', ['class' => 'form-label required'])); ?>

    </div>
    <div class="form-group col-md-12 mb-10">
        <div class="row">
            <?php $__currentLoopData = getTemplateUrls(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 img-box mb-2">
                <input type="checkbox" name="template_ids[]" class="templateIds template-input"
                value="<?php echo e($id); ?>" <?php if($id == 1 && Request::is('sadmin/plans/create')): ?> checked <?php endif; ?>
                <?php echo e(isset($templates) && in_array($id, $templates) ? 'checked' : ''); ?>>

                <div class="screen image <?php if($id == 1 && Request::is('sadmin/plans/create')): ?> template-border <?php endif; ?>
                <?php echo e(isset($templates) && in_array($id, $templates) ? 'template-border' : ''); ?>">
                <img src="<?php echo e($url); ?>" alt="Template 1">
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<div class="col-lg-12 mb-10 d-flex justify-content-between flex-wrap">
    <?php echo e(Form::label('feature', __('messages.plan.features').':', ['class' => 'form-label required'])); ?>

    <label class="form-label form-check">
        <?php echo e(__('messages.plan.select_all_feature')); ?>

        <input class="form-check-input mx-2" type="checkbox" id="featureAll"/>
    </label>
</div>
<div class="row mb-5">
    <div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
        <label class="form-label form-check">
            <input class="form-check-input feature mx-2" type="checkbox" value="1"
            name="products_services" <?php echo e((isset($feature) && $feature->products_services == 1) ? 'checked' : ''); ?>/>
            <?php echo e(__('messages.plan.services')); ?>

        </label>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
        <label class="form-label form-check">
            <input class="form-check-input feature mx-2" type="checkbox" value="1"
            name="testimonials" <?php echo e((isset($feature) && $feature->testimonials == 1) ? 'checked' : ''); ?>/>
            <?php echo e(__('messages.plan.testimonials')); ?>

        </label>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
        <label class="form-label form-check">
            <input class="form-check-input feature mx-2" type="checkbox" value="1"
            name="hide_branding" <?php echo e((isset($feature) && $feature->hide_branding == 1) ? 'checked' : ''); ?>/>
            <div>
                <?php echo e(__('messages.plan.hide_branding')); ?>

                <span data-bs-toggle="tooltip"
                data-placement="top"
                data-bs-original-title="<?php echo e(__('messages.tooltip.hide_branding')); ?>">
                <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
            </span>
        </div>
    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="enquiry_form" <?php echo e((isset($feature) && $feature->enquiry_form == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.plan.enquiry_form')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="social_links" <?php echo e((isset($feature) && $feature->social_links == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.social.social_links')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="password" <?php echo e((isset($feature) && $feature->password == 1) ? 'checked' : ''); ?>/>
        <div>
            <?php echo e(__('messages.plan.password_protection')); ?>

            <span data-bs-toggle="tooltip"
            data-placement="top"
            data-bs-original-title="<?php echo e(__('messages.tooltip.password_protection')); ?>">
            <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
        </span>
    </div>
</label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="custom_css" <?php echo e((isset($feature) && $feature->custom_css == 1) ? 'checked' : ''); ?>/>
        <div>
            <?php echo e(__('messages.plan.custom_css')); ?>

            <span data-bs-toggle="tooltip"
            data-placement="top"
            data-bs-original-title="<?php echo e(__('messages.tooltip.custom_css')); ?>">
            <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
        </span>
    </div>
</label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="custom_js" <?php echo e((isset($feature) && $feature->custom_js == 1) ? 'checked' : ''); ?>/>
        <div>
            <?php echo e(__('messages.plan.custom_js')); ?>

            <span data-bs-toggle="tooltip"
            data-placement="top"
            data-bs-original-title="<?php echo e(__('messages.tooltip.custom_js')); ?>">
            <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
        </span>
    </div>
</label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="custom_fonts" <?php echo e((isset($feature) && $feature->custom_fonts == 1) ? 'checked' : ''); ?>/>
        <div>
            <?php echo e(__('messages.feature.custom_fonts')); ?>

            <span data-bs-toggle="tooltip"
            data-placement="top"
            data-bs-original-title="<?php echo e(__('messages.tooltip.custom_fonts')); ?>">
            <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
        </span>
    </div>
</label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="products" <?php echo e((isset($feature) && $feature->products == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.plan.products')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="appointments" <?php echo e((isset($feature) && $feature->appointments == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.vcard.appointments')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="gallery" <?php echo e((isset($feature) && $feature->gallery == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.plan.gallery')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="analytics" <?php echo e((isset($feature) && $feature->analytics == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.plan.analytics')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="seo" <?php echo e((isset($feature) && $feature->seo == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.plan.seo')); ?>

    </label>
</div>
<div class="col-lg-3 col-md-4 col-6 mb-5 col-xs">
    <label class="form-label form-check">
        <input class="form-check-input feature mx-2" type="checkbox" value="1"
        name="blog" <?php echo e((isset($feature) && $feature->blog == 1) ? 'checked' : ''); ?>/>
        <?php echo e(__('messages.plan.blog')); ?>

    </label>
</div>
</div>
<div>
    <?php echo e(Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3','id' => 'planFormSubmit'])); ?>

    <a href="<?php echo e(route('plans.index')); ?>" class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
</div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/plans/fields.blade.php ENDPATH**/ ?>