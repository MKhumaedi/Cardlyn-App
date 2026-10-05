<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.vcards')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column table-striped">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-vcard-table', [])->html();
} elseif ($_instance->childHasBeenRendered('oeeH6FN')) {
    $componentId = $_instance->getRenderedChildComponentId('oeeH6FN');
    $componentTag = $_instance->getRenderedChildComponentTagName('oeeH6FN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oeeH6FN');
} else {
    $response = \Livewire\Livewire::mount('user-vcard-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('oeeH6FN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>

<?php echo $__env->make('layouts.templates.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('vcards.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('vcards.templates.analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/vcards/index.blade.php ENDPATH**/ ?>