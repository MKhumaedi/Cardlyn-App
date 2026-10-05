<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.common.forgot_password')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column flex-column-fluid align-items-center mt-12 p-4">
    <div class="col-12 text-center mt-0">
        <a href="<?php echo e(route('home')); ?>" class="image mb-4">
            <img data-sizes="auto" data-src="<?php echo e(getLogoUrl()); ?>" title="<?php echo e(env('APP_NAME')); ?>" alt="<?php echo e(env('APP_NAME')); ?>" class="lazyload img-fluid logo-fix-size">
        </a>
    </div>
    <div class="width-540">
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(Session::has('status')): ?>
        <div class="alert alert-success fs-4 text-white align-items-center" role="alert">
            <i class="fa-solid fa-face-smile me-4"></i>
            <?php echo e(Session::get('status')); ?>

        </div>
        <?php endif; ?>
    </div>
    <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
        <h1 class="text-center mb-7"><?php echo e(__('messages.common.forgot_password').' ?'); ?></h1>
        <div class="fw-bold fs-4 mb-5 text-center"><?php echo e(__('messages.placeholder.enter_your_email_to_reset')); ?></div>
        <div class="fs-4 text-center mb-5"><?php echo e(__('messages.placeholder.forgot_your_password_no_problem')); ?></div>
        <form class="form w-100" method="POST" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="mb-4">
                    <label for="email" class="form-label">
                        <?php echo e(__('messages.user.email').':'); ?><span class="required"></span>
                    </label>
                    <input id="email" class="form-control" type="email"
                    value="<?php echo e(old('email')); ?>"
                    required autofocus name="email" autocomplete="off" placeholder="<?php echo e(__('messages.user.email')); ?>"/>
                </div>
            </div>
            <div class="row">
                <!-- Submit Field -->
                <div class="form-group col-sm-12 d-flex text-start align-items-center">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label"> <?php echo e(__('messages.email_password_reset_link')); ?></span>
                    </button>
                    <a href="<?php echo e(route('login')); ?>"
                    class="btn btn-secondary my-0 ms-5 me-0"><?php echo e(__('messages.common.cancel')); ?></a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>