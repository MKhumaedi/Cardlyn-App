<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.vcards_templates')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('template-table', [])->html();
} elseif ($_instance->childHasBeenRendered('xyMiif7')) {
    $componentId = $_instance->getRenderedChildComponentId('xyMiif7');
    $componentTag = $_instance->getRenderedChildComponentTagName('xyMiif7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xyMiif7');
} else {
    $response = \Livewire\Livewire::mount('template-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('xyMiif7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/vcards/index.blade.php ENDPATH**/ ?>