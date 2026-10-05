<?php ?>
<?php if($partName == 'basics'): ?>

<div class="row" id="basic">
    <div class="col-lg-12 mb-7">
        <?php echo e(Form::label('url_alias', __('messages.vcard.url_alias').':', ['class' => 'form-label required'])); ?>

        <span data-bs-toggle="tooltip"
        data-placement="top"
        data-bs-original-title="<?php echo e(__('messages.tooltip.the_main_url')); ?>">
        <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
    </span>
    <div class="d-sm-flex">
        <div class="input-group-prepend mb-sm-0 mb-4">
            <div class="input-group-text form-control">
                <?php echo e(route('vcard.defaultIndex')); ?>/
            </div>
        </div>
        <?php echo e(Form::text('url_alias', isset($vcard) ? $vcard->url_alias : null, ['class' => 'form-control ms-1', 'placeholder' => __('messages.form.my_vcard_url'), 'onkeypress' => 'return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode >= 47 && event.charCode <= 57 ) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 45)'])); ?>

    </div>
</div>
<div class="col-lg-6 mb-7">
    <?php echo e(Form::label('name', __('messages.vcard.vcard_name').':', ['class' => 'form-label required'])); ?>

    <?php echo e(Form::text('name', isset($vcard) ? $vcard->name : null, ['class' => 'form-control', 'placeholder' => __('messages.form.vcard_name'),'required'])); ?>

</div>
<div class="col-lg-6 mb-7">
    <?php echo e(Form::label('occupation', __('messages.vcard.occupation').':', ['class' => 'form-label required'])); ?>

    <?php echo e(Form::text('occupation', isset($vcard) ? $vcard->occupation : null, ['class' => 'form-control', 'placeholder' => __('messages.form.occupation'),'required'])); ?>

</div>
<div class="col-lg-6 mb-7">
    <?php echo e(Form::label('description', __('messages.vcard.description').':', ['class' => 'form-label required'])); ?>

    <?php echo Form::textarea('description', isset($vcard) ? $vcard->description : null, ['class' => 'form-control', 'placeholder' => __('messages.form.description'),'required', 'rows' => '5' ]); ?>

</div>
<div class="col-lg-3 col-sm-6 mb-7">
    <div class="mb-3" io-image-input="true">
        <label for="exampleInputImage" class="form-label"><?php echo e(__('messages.vcard.profile_image').':'); ?></label>
        <div class="d-block">
            <div class="image-picker">
                <div class="image previewImage" id="exampleInputImage"
                style="background-image: url(<?php echo e(!empty($vcard->profile_url) ? $vcard->profile_url : asset('web/media/avatars/150-26.jpg')); ?>)"></div>
                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.profile')); ?>">
                <label>
                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                    <input type="file" id="profile_image" name="profile_img"
                    class="image-upload d-none" accept="image/*"/>
                </label>
            </span>
        </div>
    </div>
</div>
<div class="form-text text-danger" id="profileImageValidationErrors"></div>
</div>
<div class="col-lg-3 col-sm-6 mb-7">
    <div class="mb-3" io-image-input="true">
        <label for="exampleInputImage" class="form-label"><?php echo e(__('messages.vcard.cover_image').':'); ?></label>
        <div class="d-block">
            <div class="image-picker">
                <div class="image previewImage" id="exampleInputImage"
                style="background-image: url(<?php echo e(!empty($vcard->cover_url) ? $vcard->cover_url : asset('assets/images/default_cover_image.jpg')); ?>)"></div>
                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.cover')); ?>">
                <label>
                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                    <input type="file" id="profile_image" name="cover_img"
                    class="image-upload d-none" accept="image/*"/>
                </label>
            </span>
        </div>
    </div>
</div>
<div class="form-text text-danger" id="coverImageValidationErrors"></div>
</div>
<?php if(isset($vcard)): ?>
<div class="mt-5 row">
    <h4 class="fw-bolder text-gray-800 mb-5"> <?php echo e(__('messages.vcard.vcard_details')); ?> </h4>
    <div class="col-md-6">
        <div class="form-group mb-7">
            <?php echo e(Form::label('first_name',__('messages.vcard.first_name').(':'), ['class' => 'form-label required'])); ?>

            <?php echo e(Form::text('first_name', isset($vcard) ? $vcard->first_name : null, ['class' => 'form-control', 'placeholder' => __('messages.form.f_name'),'required'])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-7">
            <?php echo e(Form::label('last_name',__('messages.vcard.last_name').(':'), ['class' => 'form-label required'])); ?>

            <?php echo e(Form::text('last_name', isset($vcard) ? $vcard->last_name : null, ['class' => 'form-control', 'placeholder' => __('messages.form.l_name'),'required'])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-7">
            <?php echo e(Form::label('email',__('messages.user.email').(':'), ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('email', isset($vcard) ? $vcard->email : null, ['class' => 'form-control', 'placeholder' => __('messages.form.email')])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('phone', __('messages.user.phone').':',['class' => 'form-label'])); ?>

            <?php echo e(Form::text('phone', isset($vcard) ? (isset($vcard->region_code) ? '+'.$vcard->region_code.''.$vcard->phone : $vcard->phone) : null, ['class' => 'form-control', 'placeholder' => __('messages.form.phone'), 'id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'])); ?>

            <?php echo e(Form::hidden('region_code',isset($vcard) ? $vcard->region_code : null,['id'=>'prefix_code'])); ?>

            <div class="mt-2">
                <span id="valid-msg" class="text-success d-none fw-400 fs-small mt-2"><?php echo e(__('messages.placeholder.valid_number')); ?></span>
                <span id="error-msg" class="text-danger d-none fw-400 fs-small mt-2">Invalid Number</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-7">
            <?php echo e(Form::label('location',__('messages.user.location').(':'), ['class' => 'form-label'])); ?>

            <?php echo e(Form::textarea('location', isset($vcard) ? $vcard->location : null, ['class' => 'form-control', 'placeholder' => __('messages.form.location'),'rows'=>'1'])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-7">
            <?php echo e(Form::label('location_url',__('messages.setting.location_url').(':'), ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('location_url', isset($vcard) ? $vcard->location_url : null, ['class' => 'form-control', 'placeholder' => __('messages.form.location_url')])); ?>

        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('dob', __('messages.vcard.date_of_birth').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('dob', isset($vcard) ? $vcard->dob : null, ['class' => 'form-control bg-white', 'placeholder' => __('messages.form.DOB')])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('company', __('messages.vcard.company').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('company', isset($vcard) ? $vcard->company : null, ['class' => 'form-control', 'placeholder' => __('messages.form.company')])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('made_by', __('messages.made_by').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('made_by', isset($vcard) ? $vcard->made_by : null, ['class' => 'form-control', 'placeholder' => __('messages.made_by') ])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('made_by_url', __('messages.made_by_url').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('made_by_url', isset($vcard) ? $vcard->made_by_url : null, ['class' => 'form-control', 'placeholder' => __('messages.made_by_url')])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('job_title', __('messages.vcard.job_title').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::text('job_title', isset($vcard) ? $vcard->job_title : null, ['class' => 'form-control', 'placeholder' => __('messages.form.job')])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <div class="d-flex">
            <?php echo e(Form::label('default_language', __('messages.setting.default_language').':', ['class' => 'form-label'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::select('default_language', getAllLanguage(), isset($vcard) ? $vcard->default_language : null, ['class' => 'form-control', 'data-control'=>'select2'])); ?>

        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="d-flex">
            <?php echo e(Form::label('language_enable', __('messages.vcard.language_enable').':', ['class' => 'form-label'])); ?>

            <div class="mx-4">
                <div class="form-check form-switch form-check-custom form-check-solid form-switch-sm col-6">
                    <div class="fv-row d-flex align-items-center">
                        <?php echo e(Form::checkbox('language_enable', 1, $vcard['language_enable'] ?? 0 , ['class' => 'form-check-input mt-0 ', 'id' => 'languageEnable'])); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="d-flex">
    <?php echo e(Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3'])); ?>

    <a href="<?php echo e(route('vcards.index')); ?>"
    class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
</div>
</div>
<?php endif; ?>

<?php if($partName == 'templates'): ?>
<div class="col-lg-12 mb-3">
    <input type="hidden" name="part" value="<?php echo e($partName); ?>">
    <label class="form-label required"><?php echo e(__('messages.vcard.select_template')); ?>

    :</label>
</div>
<div class="form-group mb-7 vcard-template">
    <div class="row">
        <input type="hidden" name="template_id" id="templateId" value="<?php echo e($vcard->template_id); ?>">
        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3">
            <div class="img-radio img-thumbnail <?php echo e($vcard->template_id == $id ? 'img-border' : ''); ?>"
               data-id="<?php echo e($id); ?>">
               <img data-sizes="auto" data-src="<?php echo e($url); ?>" class="lazyload" alt="Template">
           </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</div>
<div class="col-lg-12 mt-5 mb-5">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="vcardTemplateStatus"
        name="status" <?php echo e(($vcard->status) ? 'checked' : ''); ?>>
        <label class="form-check-label" for="vcardTemplateStatus">
            <?php echo e(__('messages.common.active')); ?>

        </label>
    </div>
</div>
<div class="col-lg-12 mt-2 d-flex">
    <button class="btn btn-primary me-3 template-save">
        <?php echo e(__('messages.common.save')); ?>

    </button>
    <a href="<?php echo e(route('vcards.index')); ?>"
    class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
</div>
<?php endif; ?>

<?php if($partName === 'business-hours'): ?>
<div class="row">
    <input type="hidden" name="part" value="<?php echo e($partName); ?>">
    <?php $__currentLoopData = \App\Models\BusinessHour::DAY_OF_WEEK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xxl-6 mb-7 d-sm-flex align-items-center mb-3">
        <div class="col-xl-4 col-lg-4 col-md-2 col-4">
            <label class="form-check">
                <input class="form-check-input feature mx-2" type="checkbox" value="<?php echo e($key); ?>"
                name="days[]" <?php echo e(!empty($hours[$key]) ? 'checked' : ''); ?>/>
                <?php echo e(strtoupper(__('messages.business.'.$day))); ?>

            </label>
        </div>
        <div class="col-xl-8 col-lg-3 col-3 d-flex align-items-center buisness_end">
            <div class="d-inline-block">
                <?php echo e(Form::select('startTime['.$key.']', getSchedulesTimingSlot(), isset($hours[$key]) ? $hours[$key]['start_time'] : null ,['class' => 'form-control', 'data-control'=>'select2'])); ?>

            </div>
            <span class="px-3">To</span>
            <div class="d-inline-block">
                <?php echo e(Form::select('endTime['.$key.']', getSchedulesTimingSlot(), isset($hours[$key]) ? $hours[$key]['end_time'] : null,['class' => 'form-control', 'data-control'=>'select2'])); ?>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-12 mt-2 d-flex">
        <button class="btn btn-primary me-3">
            <?php echo e(__('messages.common.save')); ?>

        </button>
        <a href="<?php echo e(route('vcards.index')); ?>"
        class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
    </div>
    <?php endif; ?>

    <?php if($partName == 'appointments'): ?>
    <div class="col-12">
        <table class="table table-striped mt-lg-4">
            <tbody>
                <input type="hidden" name="part" value="<?php echo e($partName); ?>">
                <?php $__currentLoopData = App\Models\BusinessHour::WEEKDAY_NAME; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day => $shortWeekDay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="weekly-content" data-day="<?php echo e($day); ?>">
                            <div class="d-flex w-100 align-items-center position-relative">
                                <div class="d-flex row flex-md-row flex-column w-100 weekly-row">
                                    <div class="col-xl-2 form-check mb-0 d-flex align-items-center ms-5">
                                        <input id="chkShortWeekDay_<?php echo e($shortWeekDay); ?>" class="form-check-input"
                                        type="checkbox" value="<?php echo e($day); ?>" name="checked_week_days[]"
                                        <?php echo e(!empty($time[$day]) ? 'checked' : ''); ?> >
                                        <label class="form-label mb-0 me-2" for="chkShortWeekDay_<?php echo e($shortWeekDay); ?>">
                                            <span class="ms-4 d-md-block"><?php echo e(strtoupper(__('messages.business.'.strtolower($shortWeekDay)))); ?></span>
                                        </label>
                                    </div>
                                    <div class="col-xl-8 session-times">
                                        <?php echo $__env->make('vcards.appointment.slot',['day' => $day], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                                <div class="weekly-icon position-absolute end-0 d-flex">
                                    <a href="javascript:void(0)" class="add-session-time" id="add-session-<?php echo e($day); ?>"
                                    data-day="<?php echo e($day); ?>" data-bs-toggle="tooltip" title="<?php echo e(__('messages.common.add')); ?>">
                                    <i class="fa fa-plus text-primary me-5 fs-2 mb-3" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php if(getUserSettingValue('stripe_enable', getLogInUserId()) || getUserSettingValue('paypal_enable', getLogInUserId())): ?>
    <div class="weekly-icon end-0 d-flex py-4 px-0 ">
        <?php if(isset($appointmentDetail->is_paid)): ?>
        <button type="button"
        class="btn me-3 <?php echo e(($appointmentDetail->is_paid == 0) ? 'btn-primary' : 'btn-light btn-active-light-primary'); ?>"
        id="freeButton"><?php echo e(__('messages.appointment.free')); ?></button>
        <button type="button"
        class="btn me-3 <?php echo e(($appointmentDetail->is_paid == 1) ? 'btn-primary' : 'btn-light btn-active-light-primary'); ?>"
        id="paidButton"><?php echo e(__('messages.appointment.paid')); ?></button>
        <input type="hidden" id="isUserPaidId" name="is_paid"
        value="<?php echo e($appointmentDetail->is_paid); ?>">
        <?php else: ?>
        <button type="button" class="btn me-3 btn-primary"
        id="freeButton"><?php echo e(__('messages.appointment.free')); ?></button>
        <button type="button" class="btn me-3 btn-light btn-active-light-primary"
        id="paidButton"><?php echo e(__('messages.appointment.paid')); ?></button>
        <input type="hidden" id="isUserPaidId" name="is_paid" value="0">
        <?php endif; ?>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="row <?php echo e(isset($appointmentDetail->is_paid) && ($appointmentDetail->is_paid == 1) ? '' : 'd-none'); ?>"
            id="userPaidInputDiv">
            <div class="col-12">
                <div class="row">
                    <div class="form-group col-sm-6 px-3">
                        <?php echo e(Form::label('price',__('messages.subscription.amount').':', ['class' => 'form-label required'])); ?>

                        <?php if(isset($appointmentDetail)): ?>
                        <?php echo e(Form::number('price',$appointmentDetail->price, ['class' => 'form-control', ($appointmentDetail->is_paid==1)?'required':'', 'id' => 'userPaymentAmount' , 'placeholder' => __('messages.subscription.amount')])); ?>

                        <?php else: ?>
                        <?php echo e(Form::number('price', null, ['class' => 'form-control', 'id' => 'userPaymentAmount' , 'placeholder' => __('Amount') , 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'])); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-lg-12 d-flex">
        <button type="submit" class="btn btn-primary me-3">
            <?php echo e(__('messages.common.save')); ?>

        </button>
        <a href="<?php echo e(route('vcards.index')); ?>"
        class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
    </div>
</div>
<?php endif; ?>

<?php if($partName == 'social-links'): ?>
<div class="row">
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fa fa-globe-africa fa-2x text-dark mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('website', isset($socialLink) ? $socialLink->website : null, ['class' => 'form-control', 'placeholder' => __('messages.form.website')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-twitter fa-2x text-primary mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('twitter', isset($socialLink) ? $socialLink->twitter : null, ['class' => 'form-control', 'placeholder' => __('messages.form.twitter')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-facebook-square fa-2x text-primary mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('facebook', isset($socialLink) ? $socialLink->facebook : null, ['class' => 'form-control', 'placeholder' => __('messages.form.facebook')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-instagram fa-2x text-danger mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('instagram', isset($socialLink) ? $socialLink->instagram : null, ['class' => 'form-control', 'placeholder' => __('messages.form.instagram')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-reddit-alien fa-2x text-danger mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('reddit', isset($socialLink) ? $socialLink->reddit : null, ['class' => 'form-control', 'placeholder' => __('messages.form.reddit')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-tumblr-square fa-2x text-dark mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('tumblr', isset($socialLink) ? $socialLink->tumblr : null, ['class' => 'form-control', 'placeholder' => __('messages.form.tumblr')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-youtube fa-2x text-danger mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('youtube', isset($socialLink) ? $socialLink->youtube : null, ['class' => 'form-control', 'placeholder' => __('messages.form.youtube')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-linkedin fa-2x text-primary mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('linkedin', isset($socialLink->linkedin) ? $socialLink->linkedin : null, ['class' => 'form-control', 'placeholder' => __('messages.form.linkedin')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-whatsapp fa-2x text-success mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('whatsapp', isset($socialLink) ? $socialLink->whatsapp : null, ['class' => 'form-control', 'placeholder' => __('messages.form.whatsapp')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-pinterest fa-2x text-danger mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('pinterest', isset($socialLink) ? $socialLink->pinterest : null, ['class' => 'form-control', 'placeholder' => __('messages.form.pinterest')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-7">
        <div class="row">
            <div class="col-sm-1 mb-3 mb-sm-0">
                <i class="fab fa-tiktok fa-2x text-danger mt-3 me-3"></i>
            </div>
            <div class="col-sm-11">
                <?php echo Form::text('tiktok', isset($socialLink) ? $socialLink->tiktok : null, ['class' => 'form-control', 'placeholder' => __('messages.form.tiktok')]); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-12 d-flex">
        <button type="submit" class="btn btn-primary me-3">
            <?php echo e(__('messages.common.save')); ?>

        </button>
        <a href="<?php echo e(route('vcards.index')); ?>"
        class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
    </div>
</div>
<?php endif; ?>

<?php if($partName == 'advanced'): ?>
<div class="row">
    <input type="hidden" name="part" value="<?php echo e($partName); ?>">
    <?php if(checkFeature('advanced')->password): ?>
    <div class="col-lg-6 mb-7">
        <label class="form-label"><?php echo e(__('messages.user.password').':'); ?></label>
        <div class="position-relative mb-3">
            <div class="mb-3 position-relative">
                <input class="form-control"
                type="password" placeholder="<?php echo e(__('messages.form.password')); ?>" name="password"
                value="<?php echo e(!empty($vcard->password) ? Crypt::decrypt($vcard->password) : ''); ?>"
                autocomplete="off" aria-label="Password" data-toggle="password"/>
                <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                    <i class="bi bi-eye-slash-fill"></i>
                </span>
            </div>
            <div class="d-flex align-items-center mb-3"
            ></div>
        </div>
    </div>
    <?php endif; ?>

    <?php if(checkFeature('advanced')->custom_css): ?>
    <div class="col-lg-12 mb-7">
        <?php echo e(Form::label('custom_css', __('messages.vcard.custom_css').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::textarea('custom_css', isset($vcard) ? $vcard->custom_css : null, ['class' => 'form-control', 'placeholder' => __('messages.form.css'), 'rows' => '5'])); ?>

    </div>
    <?php endif; ?>

    <?php if(checkFeature('advanced')->custom_js): ?>
    <div class="col-lg-12 mb-7">
        <?php echo e(Form::label('custom_js', __('messages.vcard.custom_js').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::textarea('custom_js', isset($vcard) ? $vcard->custom_js : null, ['class' => 'form-control', 'placeholder' => __('messages.form.js'), 'rows' => '5'])); ?>

    </div>
    <?php endif; ?>

    <?php if(checkFeature('advanced')->hide_branding): ?>
    <div class="col-lg-6 mb-7">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="branding"
            name="branding" <?php echo e(($vcard->branding) ? 'checked'  : ''); ?>>
            <label class="form-label" for="branding">
                <?php echo e(__('messages.vcard.remove_branding')); ?>

            </label>
            <span data-bs-toggle="tooltip"
            data-placement="top"
            data-bs-original-title="<?php echo e(__('messages.tooltip.remove_branding')); ?>">
            <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
        </span>
    </div>
</div>
<?php endif; ?>

<div class="col-lg-12 d-flex">
    <button type="submit" class="btn btn-primary me-3">
        <?php echo e(__('messages.common.save')); ?>

    </button>
    <a href="<?php echo e(route('vcards.index')); ?>"
    class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
</div>
</div>
<?php endif; ?>

<?php if($partName == 'custom-fonts'): ?>
<div class="row">
    <div class="col-lg-6 mb-7">
        <?php echo e(Form::label('font_family',__('messages.font.font_family').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::select('font_family', \App\Models\Vcard::FONT_FAMILY, \App\Models\Vcard::FONT_FAMILY[$vcard->font_family] ,
        ['class' => 'form-select', 'data-control' => 'select2'])); ?>

    </div>
    <div class="col-lg-6 mb-7">
        <?php echo Form::label('font_size', __('messages.font.font_size').':', ['class' => 'form-label']); ?>


        <?php echo Form::number('font_size', $vcard->font_size , ['class' => 'form-control', 'min'=>'14', 'max' => '40', 'placeholder' => __('messages.font.font_size_in_px')]); ?>

    </div>
    <div class="col-lg-12 d-flex">
        <button type="submit" class="btn btn-primary me-3">
            <?php echo e(__('messages.common.save')); ?>

        </button>
        <a href="<?php echo e(route('vcards.index')); ?>"
        class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
    </div>
    <?php endif; ?>

    <?php if($partName == 'seo'): ?>
    <div class="row">
        <div class="col-lg-6 mb-7">
            <?php echo e(Form::label('Site title', __('messages.vcard.site_title').':', ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('site_title', isset($vcard) ? $vcard->site_title : null, ['class' => 'form-control', 'placeholder' => __('messages.form.site_title')])); ?>

        </div>
        <div class="col-lg-6 mb-7">
            <?php echo e(Form::label('Home title', __('messages.vcard.home_title').':', ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('home_title', isset($vcard) ? $vcard->home_title : null, ['class' => 'form-control', 'placeholder' => __('messages.form.home_title')])); ?>

        </div>
        <div class="col-lg-6 mb-7">
            <?php echo e(Form::label('Meta keyword', __('messages.vcard.meta_keyword').':', ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('meta_keyword', isset($vcard) ? $vcard->meta_keyword : null, ['class' => 'form-control', 'placeholder' => __('messages.form.meta_keyword')])); ?>

        </div>
        <div class="col-lg-6 mb-7">
            <?php echo e(Form::label('Meta Description', __('messages.vcard.meta_description').':', ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('meta_description', isset($vcard) ? $vcard->meta_description : null, ['class' => 'form-control', 'placeholder' => __('messages.form.meta_description')])); ?>

        </div>
        <div class="col-lg-12 mb-7">
            <?php echo e(Form::label('Google Analytics', __('messages.vcard.google_analytics').':', ['class' => 'form-label'])); ?>

            <?php echo e(Form::textarea('google_analytics', isset($vcard) ? $vcard->google_analytics : null, ['class' => 'form-control', 'placeholder' => __('messages.form.google_analytics')])); ?>

        </div>
        <div class="col-lg-12 d-flex">
            <button type="submit" class="btn btn-primary me-3">
                <?php echo e(__('messages.common.save')); ?>

            </button>
            <a href="<?php echo e(route('vcards.index')); ?>"
            class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
        </div>
        <?php endif; ?>
        
        <?php if($partName == 'privacy-policy'): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                    <input type="hidden" name="part" value="<?php echo e($partName); ?>" id ="privacyPolicyPartName">
                    <?php echo e(Form::hidden('id', isset($privacyPolicy) ? $privacyPolicy->id : null, ['id' => 'privacyPolicyId'])); ?>

                    <?php echo e(Form::label('privacy_policy', __('messages.vcard.privacy_policy').':', ['class' => 'form-label required'])); ?>

                    <div id="privacyPolicyQuill" class="editor-height" style="height: 200px"></div>
                    <?php echo e(Form::hidden('privacy_policy', isset($privacyPolicy) ? $privacyPolicy->privacy_policy : null, ['id' => 'privacyData'])); ?>

                </div>
            </div>
            <div class="col-lg-12 d-flex">
                <button type="submit" class="btn btn-primary me-3" id="privacyPolicySave">
                    <?php echo e(__('messages.common.save')); ?>

                </button>
                <a href="<?php echo e(route('vcards.index')); ?>"
                class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
            </div>
        </div>

        <?php endif; ?>

        <?php if($partName == 'term-condition'): ?>
        <div class="row">
            <input type="hidden" name="part" value="<?php echo e($partName); ?>" id ="termConditionPartName">
            <div class="col-lg-12">
                <div class="mb-5">
                    <?php echo e(Form::hidden('id', isset($termCondition) ? $termCondition->id : null, ['id' => 'termConditionId'])); ?>

                    <?php echo e(Form::label('term_condition', __('messages.vcard.term_condition').':', ['class' => 'form-label required'])); ?>

                    <div id="termConditionQuill" class="editor-height" style="height: 200px"></div>
                    <?php echo e(Form::hidden('term_condition', isset($termCondition) ? $termCondition->term_condition : null, ['id' => 'conditionData'])); ?>

                </div>
            </div>
            <div class="col-lg-12 d-flex">
                <button type="submit" class="btn btn-primary me-3" id="termConditionSave">
                    <?php echo e(__('messages.common.save')); ?>

                </button>
                <a href="<?php echo e(route('vcards.index')); ?>"
                class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
            </div>
        </div>
        <?php endif; ?>    
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/vcards/fields.blade.php ENDPATH**/ ?>