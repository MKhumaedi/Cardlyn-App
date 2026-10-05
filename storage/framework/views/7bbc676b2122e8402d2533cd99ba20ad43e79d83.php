<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.front_cms.front_cms')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="card-body">
                <?php echo Form::open(['route' => 'setting.front.cms.update','enctype' => 'multipart/form-data']); ?>

                <?php echo $__env->make('settings.front_cms.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/settings/front_cms/index.blade.php ENDPATH**/ ?>