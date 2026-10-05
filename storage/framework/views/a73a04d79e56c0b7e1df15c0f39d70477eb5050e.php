<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.cash_payment')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cash-payment-table', [])->html();
} elseif ($_instance->childHasBeenRendered('Y2EIQm0')) {
    $componentId = $_instance->getRenderedChildComponentId('Y2EIQm0');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y2EIQm0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y2EIQm0');
} else {
    $response = \Livewire\Livewire::mount('cash-payment-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('Y2EIQm0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/planPyment/index.blade.php ENDPATH**/ ?>