<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.plans')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="d-flex flex-column table-striped">
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('plan-table', [])->html();
} elseif ($_instance->childHasBeenRendered('zpLNbO5')) {
    $componentId = $_instance->getRenderedChildComponentId('zpLNbO5');
    $componentTag = $_instance->getRenderedChildComponentTagName('zpLNbO5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zpLNbO5');
} else {
    $response = \Livewire\Livewire::mount('plan-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('zpLNbO5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/plans/index.blade.php ENDPATH**/ ?>