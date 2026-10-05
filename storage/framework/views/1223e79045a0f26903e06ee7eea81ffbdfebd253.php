<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.currency.currencies')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('currency-table', [])->html();
} elseif ($_instance->childHasBeenRendered('iR8EpTU')) {
    $componentId = $_instance->getRenderedChildComponentId('iR8EpTU');
    $componentTag = $_instance->getRenderedChildComponentTagName('iR8EpTU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iR8EpTU');
} else {
    $response = \Livewire\Livewire::mount('currency-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('iR8EpTU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/currencies/index.blade.php ENDPATH**/ ?>