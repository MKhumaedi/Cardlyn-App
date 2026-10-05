<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.country.countries')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('country-table', [])->html();
} elseif ($_instance->childHasBeenRendered('NIZnTe4')) {
    $componentId = $_instance->getRenderedChildComponentId('NIZnTe4');
    $componentTag = $_instance->getRenderedChildComponentTagName('NIZnTe4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NIZnTe4');
} else {
    $response = \Livewire\Livewire::mount('country-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('NIZnTe4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>

<?php echo $__env->make('sadmin.countries.add_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sadmin.countries.edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/countries/index.blade.php ENDPATH**/ ?>