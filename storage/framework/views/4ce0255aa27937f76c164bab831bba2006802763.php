<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.testimonial')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column table-striped">
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front-testimonial-table', [])->html();
} elseif ($_instance->childHasBeenRendered('5FrPeo7')) {
    $componentId = $_instance->getRenderedChildComponentId('5FrPeo7');
    $componentTag = $_instance->getRenderedChildComponentTagName('5FrPeo7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5FrPeo7');
} else {
    $response = \Livewire\Livewire::mount('front-testimonial-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('5FrPeo7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>

<?php echo $__env->make('sadmin.testimonial.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sadmin.testimonial.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sadmin.testimonial.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/testimonial/index.blade.php ENDPATH**/ ?>