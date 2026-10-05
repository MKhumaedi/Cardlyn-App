<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.common.register')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
    <div class="col-12 text-center">
        <a href="<?php echo e(route('home')); ?>" class="image mb-4">
            <img data-sizes="auto" data-src="<?php echo e(getLogoUrl()); ?>" title="<?php echo e(env('APP_NAME')); ?>" alt="<?php echo e(env('APP_NAME')); ?>" class="lazyload img-fluid logo-fix-size">
        </a>
    </div>
    <div class="width-540">
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
        <h1 class="text-center mb-7"><?php echo e(__('messages.common.create_an_account')); ?></h1>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="formInputFirstName" class="form-label">
                        <?php echo e(__('messages.user.first_name').':'); ?><span class="required"></span>
                    </label>
                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder=" <?php echo e(__('messages.user.first_name')); ?>"
                    aria-describedby="firstName" value="<?php echo e(old('first_name')); ?>" required>
                </div>
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="last_name" class="form-label">
                        <?php echo e(__('messages.user.last_name').':'); ?><span class="required"></span>
                    </label>
                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder=" <?php echo e(__('messages.user.last_name')); ?>"
                    aria-describedby="lastName" required value="<?php echo e(old('last_name')); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-sm-7 mb-4">
                    <label for="email" class="form-label">
                        <?php echo e(__('messages.user.email').':'); ?><span class="required"></span>
                    </label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder=" <?php echo e(__('messages.user.email')); ?>"
                    value="<?php echo e(old('email')); ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="password" class="form-label">
                        <?php echo e(__('messages.user.password').':'); ?><span class="required"></span>
                    </label>
                    <div class="mb-3 position-relative">
                        <input type="password" name="password" class="form-control" id="password" placeholder=" <?php echo e(__('messages.user.password')); ?>" aria-describedby="password" required aria-label="Password" data-toggle="password">
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="password_confirmation" class="form-label">
                        <?php echo e(__('messages.user.confirm_password').':'); ?><span class="required"></span>
                    </label>
                    <div class="mb-3 position-relative">
                        <input name="password_confirmation" type="password" class="form-control" placeholder=" <?php echo e(__('messages.user.confirm_password')); ?>" id="password_confirmation" aria-describedby="confirmPassword" required aria-label="Password" data-toggle="password">
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.common.submit')); ?></button>
            </div>
            <div class="d-flex align-items-center mt-4">
                <span class="text-gray-700 me-2"><?php echo e(__('messages.common.already_have_an_account').'?'); ?></span>
                <a href="<?php echo e(route('login')); ?>" class="link-info fs-6 text-decoration-none">
                    <?php echo e(__('messages.common.sign_in_here')); ?>

                </a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/auth/register.blade.php ENDPATH**/ ?>