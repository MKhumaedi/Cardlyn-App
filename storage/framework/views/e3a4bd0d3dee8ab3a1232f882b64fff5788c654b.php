<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.user.profile_details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column">
        <div class="col-12">
            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
                <form id="userProfileEditForm" method="POST"
                action="<?php echo e(route('update.profile.setting')); ?>"
                class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card-body pb-0">
                    <div class="row mb-6">
                        <label class="col-lg-4 form-label required"><?php echo e(__('messages.user.avatar').':'); ?></label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <div class="d-block">
                                <div class="image-picker">
                                    <div class="image previewImage" id="exampleInputImage"
                                    style="background-image: url('<?php echo e(!empty($user->profile_image) ? $user->profile_image : asset('web/media/avatars/150-26.jpg')); ?>')">
                                </div>
                                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                                data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.profile')); ?>">
                                <span class="picker-edit rounded-circle text-gray-500 fs-small" title="edit">
                                    <label>
                                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                        <input type="file" id="profile_image" name="profile" class="image-upload d-none" accept="image/*"/>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 form-label"><?php echo e(__('messages.user.full_name').':'); ?></label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <?php echo Form::text('first_name', $user->first_name, ['class'=> 'form-control', 'placeholder' => __('messages.form.first_name'), 'required', 'id' => 'editProfileFirstName']); ?>

                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <?php echo Form::text('last_name', $user->last_name, ['class'=> 'form-control', 'placeholder' => __('messages.form.last_name'), 'required', 'id' => 'editProfileLastName']); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 form-label required"><?php echo e(__('messages.user.email').':'); ?></label>
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <?php echo Form::email('email', $user->email, ['class'=> 'form-control', 'placeholder' => __('messages.user.email'), 'required', 'id' => 'isEmailEditProfile']); ?>

                    </div>
                </div>
                <div class="row">
                    <label
                    class="col-lg-4 form-label required"><?php echo e(__('messages.user.contact_number').':'); ?></label>
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <?php echo e(Form::tel('contact', isset($user)?  (isset($user->region_code) ? '+'.$user->region_code.''.$user->contact : $user->contact) :null, ['class' => 'form-control', 'placeholder' => __('messages.form.contact'), 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber'])); ?>

                        <?php echo e(Form::hidden('region_code',isset($user) ? $user->region_code : null,['id'=>'prefix_code'])); ?>

                        <span id="valid-msg" class="text-success d-none fw-400 fs-small mt-2"><?php echo e(__('messages.placeholder.valid_number')); ?></span>
                        <span id="error-msg" class="text-danger d-none fw-400 fs-small mt-2">Invalid Number</span>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex">
                <?php echo e(Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-2'])); ?>

                <?php if(auth()->check() && auth()->user()->hasRole(\App\Models\Role::ROLE_ADMIN)): ?>
                <a href="<?php echo e(route('admin.dashboard')); ?>"
                class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
                <?php endif; ?>
                <?php if(auth()->check() && auth()->user()->hasRole(\App\Models\Role::ROLE_SUPER_ADMIN)): ?>
                <a href="<?php echo e(route('sadmin.dashboard')); ?>"
                class="btn btn-secondary"><?php echo e(__('messages.common.discard')); ?></a>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/profile/index.blade.php ENDPATH**/ ?>