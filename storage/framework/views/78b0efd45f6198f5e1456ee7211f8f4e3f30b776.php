<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo e(__('messages.user.change_password')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'changePasswordForm'])); ?>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editPasswordValidationErrorsBox"></div>
                <div class="mb-5">
                    <?php echo e(Form::label('current_password',__('messages.user.current_password').':', ['class' => 'form-label required'])); ?>

                    <div class="mb-3 position-relative">
                        <?php echo e(Form::password('current_password',['class' => 'form-control' ,'placeholder' => __('messages.user.current_password'), 'autocomplete'=> 'off','aria-label' => 'Password','data-toggle' => 'password'])); ?>

                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('new_password',__('messages.user.new_password').':', ['class' => 'form-label required'])); ?>

                    <div class="mb-3 position-relative">
                        <?php echo e(Form::password('new_password',['class' => 'form-control','placeholder' => __('messages.user.new_password'), 'autocomplete'=> 'off','aria-label' => 'Password','data-toggle' => 'password'])); ?>

                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
                <div>
                    <?php echo e(Form::label('confirm_password',__('messages.user.confirm_password').':', ['class' => 'form-label required'])); ?>

                    <div class="mb-3 position-relative">
                        <?php echo e(Form::password('confirm_password',['class' => 'form-control','placeholder' => __('messages.user.confirm_password'), 'autocomplete'=> 'off','aria-label' => 'Password','data-toggle' => 'password'])); ?>

                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'),['class' => 'btn btn-primary m-0','id' => 'passwordChangeBtn'])); ?>

                <?php echo e(Form::button(__('messages.common.discard'),['class' => 'btn btn-secondary my-0 ms-5 me-0','data-bs-dismiss' => 'modal'])); ?>

            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/profile/changePassword.blade.php ENDPATH**/ ?>