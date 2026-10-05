<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.appointments')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('schedule-appointment-table', [])->html();
} elseif ($_instance->childHasBeenRendered('bSjfvWo')) {
    $componentId = $_instance->getRenderedChildComponentId('bSjfvWo');
    $componentTag = $_instance->getRenderedChildComponentTagName('bSjfvWo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bSjfvWo');
} else {
    $response = \Livewire\Livewire::mount('schedule-appointment-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('bSjfvWo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/appointment/list.blade.php ENDPATH**/ ?>