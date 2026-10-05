<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.contact_us.contact_us')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact-us-table', [])->html();
} elseif ($_instance->childHasBeenRendered('ABWd0sx')) {
    $componentId = $_instance->getRenderedChildComponentId('ABWd0sx');
    $componentTag = $_instance->getRenderedChildComponentTagName('ABWd0sx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ABWd0sx');
} else {
    $response = \Livewire\Livewire::mount('contact-us-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('ABWd0sx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/contactus/index.blade.php ENDPATH**/ ?>