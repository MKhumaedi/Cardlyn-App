<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.vcards')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('vcard-table', [])->html();
} elseif ($_instance->childHasBeenRendered('ayLyljR')) {
    $componentId = $_instance->getRenderedChildComponentId('ayLyljR');
    $componentTag = $_instance->getRenderedChildComponentTagName('ayLyljR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ayLyljR');
} else {
    $response = \Livewire\Livewire::mount('vcard-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('ayLyljR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/vcards/templates.blade.php ENDPATH**/ ?>