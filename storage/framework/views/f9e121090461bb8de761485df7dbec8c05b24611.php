<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.features')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('feature-table', [])->html();
} elseif ($_instance->childHasBeenRendered('StdCIGI')) {
    $componentId = $_instance->getRenderedChildComponentId('StdCIGI');
    $componentTag = $_instance->getRenderedChildComponentTagName('StdCIGI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('StdCIGI');
} else {
    $response = \Livewire\Livewire::mount('feature-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('StdCIGI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/settings/features/index.blade.php ENDPATH**/ ?>