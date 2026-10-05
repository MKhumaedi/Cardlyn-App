<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.subscribed_user')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('subscription-table', [])->html();
} elseif ($_instance->childHasBeenRendered('wbUhSPE')) {
    $componentId = $_instance->getRenderedChildComponentId('wbUhSPE');
    $componentTag = $_instance->getRenderedChildComponentTagName('wbUhSPE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wbUhSPE');
} else {
    $response = \Livewire\Livewire::mount('subscription-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('wbUhSPE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php echo $__env->make('sadmin.subscriptionPlan.edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/subscriptionPlan/index.blade.php ENDPATH**/ ?>