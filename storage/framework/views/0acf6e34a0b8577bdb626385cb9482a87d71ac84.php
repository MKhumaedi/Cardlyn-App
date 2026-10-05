<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.subscriptions')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('email-subscription-table', [])->html();
} elseif ($_instance->childHasBeenRendered('RUQAQse')) {
    $componentId = $_instance->getRenderedChildComponentId('RUQAQse');
    $componentTag = $_instance->getRenderedChildComponentTagName('RUQAQse');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RUQAQse');
} else {
    $response = \Livewire\Livewire::mount('email-subscription-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('RUQAQse', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/email_subscription/index.blade.php ENDPATH**/ ?>