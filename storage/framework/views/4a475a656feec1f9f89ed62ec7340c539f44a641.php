<div class="row">
    <div class="col-lg-6">
        <div class="mb-5">
            <?php echo e(Form::label('first_name', __('messages.user.first_name').':', ['class' => 'form-label required'])); ?>

            <?php echo e(Form::text('first_name', isset($user) ? $user->first_name : null, ['class' => 'form-control', 'placeholder' => __('messages.form.first_name'), 'required', 'id' => 'userFirstName'])); ?>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            <?php echo e(Form::label('last_name', __('messages.user.last_name').':', ['class' => 'form-label required'])); ?>

            <?php echo e(Form::text('last_name', isset($user) ? $user->last_name : null, ['class' => 'form-control', 'placeholder' => __('messages.form.last_name'), 'required', 'id' => 'userLastName'])); ?>

        </div>
    </div>
    <div class="col-lg-6 mb-5">
        <?php echo e(Form::label('email', __('messages.user.email').':', ['class' => 'form-label required'])); ?>

        <?php echo e(Form::email('email', isset($user) ? $user->email : null, ['class' => 'form-control', 'placeholder' => __('messages.form.mail'), 'required'])); ?>

    </div>
    <div class="col-lg-6">
        <?php echo e(Form::label('contact', __('messages.user.contact_no').':', ['class' => 'form-label'])); ?>

        <?php echo e(Form::tel('contact', isset($user) && $user->contact ? '+'.$user->region_code.$user->contact : null, ['class' => 'form-control', 'placeholder' => __('messages.form.contact'), 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber'])); ?>

        <?php echo e(Form::hidden('region_code',isset($user) ? $user->region_code : null,['id'=>'prefix_code'])); ?>

        <p id="valid-msg" class="text-success d-none fw-400 fs-small mt-2"><?php echo e(__('messages.placeholder.valid_number')); ?></p>
        <p id="error-msg" class="text-danger d-none fw-400 fs-small mt-2"><?php echo e(__('messages.placeholder.invalid_number')); ?></p>
    </div>
    <?php if(!isset($user)): ?>
    <div class="col-lg-6 mb-5">
        <label class="form-label required"><?php echo e(__('messages.user.password').':'); ?></label>
        <div class="mb-3 position-relative">
            <input class="form-control" id="password" type="password" name="password"
            placeholder="<?php echo e(__('messages.form.password')); ?>" autocomplete="off" required aria-label="Password" data-toggle="password"/>
            <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                <i class="bi bi-eye-slash-fill"></i>
            </span>
        </div>
    </div>

    <div class="col-lg-6 mb-5">
        <label class="form-label required"><?php echo e(__('messages.user.confirm_password').':'); ?></label>
        <div class="mb-3 position-relative">
            <input class="form-control " id="cPassword"
            type="password" placeholder="<?php echo e(__('messages.form.c_password')); ?>" name="password_confirmation"
            autocomplete="off" required aria-label="Password" data-toggle="password"/>
            <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                <i class="bi bi-eye-slash-fill"></i>
            </span>
        </div>
    </div>
    <?php endif; ?>
    <div class="mb-3" io-image-input="true">
        <label for="exampleInputImage" class="form-label"><?php echo e(__('auth.app.profile').':'); ?></label>
        <div class="d-block">
            <div class="image-picker">
                <div class="image previewImage" id="exampleInputImage"
                style="background-image: url('<?php echo e(!empty($user->profile_image) ? $user->profile_image : asset('web/media/avatars/150-2.jpg')); ?>')">
            </div>  
            <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
            data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.profile')); ?>">
            <label>
                <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                <input type="file" id="profile_image" name="profile" class="image-upload d-none" accept="image/*"/>
            </label>
        </span>
    </div>
</div>
</div>
<div>
    <?php echo e(Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3'])); ?>

    <a href="<?php echo e(route('users.index')); ?>"
    class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
</div>
</div>

<?php /**PATH /home/maystudi/cardlyn.com/resources/views/users/fields.blade.php ENDPATH**/ ?>