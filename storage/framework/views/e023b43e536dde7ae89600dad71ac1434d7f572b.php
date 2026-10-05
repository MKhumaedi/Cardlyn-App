<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.common.login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
    <div class="col-12 text-center">
        <a href="<?php echo e(route('home')); ?>" class="image mb-4">
            <img data-sizes="auto" data-src="<?php echo e(getLogoUrl()); ?>" title="<?php echo e(env('APP_NAME')); ?>" alt="<?php echo e(env('APP_NAME')); ?>" class="lazyload img-fluid logo-fix-size">
        </a>
    </div>
    <div class="width-540">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
        <h1 class="text-center mb-7"><?php echo e(__('auth.sign_in')); ?></h1>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-sm-7 mb-4">
                <label for="email" class="form-label">
                    <?php echo e(__('messages.user.email').':'); ?><span class="required"></span>
                </label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required placeholder=" <?php echo e(__('messages.user.email')); ?>">
            </div>
            <div class="mb-sm-7 mb-4">
                <div class="d-flex justify-content-between">
                    <label for="password" class="form-label"><?php echo e(__('messages.user.password').':'); ?><span
                        class="required"></span></label>
                        <?php if(Route::has('password.request')): ?>
                        <a href="<?php echo e(route('password.request')); ?>" class="link-info fs-6 text-decoration-none">
                            <?php echo e(__('messages.common.forgot_your_password').'?'); ?>

                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3 position-relative">
                        <input name="password" type="password" class="form-control" id="password" required placeholder="<?php echo e(__('messages.user.password')); ?>" aria-label="Password" data-toggle="password">
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" >
                    <label class="form-check-label" for="remember_me"><?php echo e(__('messages.common.remember_me')); ?></label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"><?php echo e(__('messages.common.login')); ?></button>
                </div>
                <div class="d-flex align-items-center mb-4 mt-4">
                    <span class="text-gray-700 me-2"><?php echo e(__('messages.common.new_here').'?'); ?></span>
                    <a href="<?php echo e(route('register')); ?>" class="link-info fs-6 text-decoration-none">
                        <?php echo e(__('messages.common.create_an_account')); ?>

                    </a>
                </div>
            <!--
                <div class="d-grid">
                    <a href="<?php echo e(route('social.login','google')); ?>" class="btn btn-danger d-flex align-items-center justify-content-center mb-sm-5 mb-4">
                        <i class="fa-brands fa-google fs-2 me-3"></i><?php echo e(__('messages.placeholder.login_via_google')); ?>

                    </a>
                    <a href="<?php echo e(route('social.login','facebook')); ?>" class="btn btn-info d-flex align-items-center justify-content-center">
                        <i class="fa-brands fa-facebook-f fs-2 me-3"></i><?php echo e(__('messages.placeholder.login_via_facebook')); ?>

                    </a>
                </div>
            -->
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/auth/login.blade.php ENDPATH**/ ?>