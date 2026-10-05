<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.user.edit_user')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <h1><?php echo e(__('messages.user.edit_user')); ?></h1>
                <a class="btn btn-outline-primary float-end"
                href="<?php echo e(route('users.index')); ?>"><?php echo e(__('messages.common.back')); ?></a>
            </div>
            <div class="col-12">
                <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php echo Form::open(['route' => ['users.update', $user->id], 'method' => 'put',
                    'files' => 'true','id'=>'userEditForm']); ?>

                    <?php echo $__env->make('users.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/users/edit.blade.php ENDPATH**/ ?>