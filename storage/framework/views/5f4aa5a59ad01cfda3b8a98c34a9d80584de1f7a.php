<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.language')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('language-table', [])->html();
} elseif ($_instance->childHasBeenRendered('3ldHSK9')) {
    $componentId = $_instance->getRenderedChildComponentId('3ldHSK9');
    $componentTag = $_instance->getRenderedChildComponentTagName('3ldHSK9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3ldHSK9');
} else {
    $response = \Livewire\Livewire::mount('language-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('3ldHSK9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>

<?php echo $__env->make('sadmin.languages.add_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sadmin.languages.edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/languages/index.blade.php ENDPATH**/ ?>