<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.subscription.manage_subscription')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7">
                        <h2><?php echo e($currentPlan->plan->name); ?></h2>
                        <h5 class="mb-12">

                            <?php if( \Carbon\Carbon::now() > $currentPlan->ends_at): ?>
                            <span class="text-danger">
                                <?php echo e(__('messages.subscription.expired').' '.\Carbon\Carbon::parse($currentPlan->ends_at)->format('dS M, Y')); ?>

                            </span>
                            <?php else: ?>
                            <span class="text-success">
                               <?php echo e(__('messages.subscription.active_until').' '.\Carbon\Carbon::parse($currentPlan->ends_at)->format('dS M, Y')); ?>

                           </span>
                           <?php endif; ?>
                       </h5>
                       <div class="fs-5 mb-2">
                        <div class="text-gray-800 fw-bolder me-1">
                            <?php echo e($currentPlan->plan->currency->currency_icon.' '.number_format($currentPlan->plan_amount).'/ '.\App\Models\Plan::DURATION[$currentPlan->plan_frequency]); ?>

                        </div>
                        <?php if(!empty($currentPlan->trial_ends_at)): ?>
                        <?php
                        $startsAt = \Carbon\Carbon::now();
                        $totalDays = \Carbon\Carbon::parse($currentPlan->starts_at)->diffInDays($currentPlan->ends_at);
                        $usedDays = \Carbon\Carbon::parse($currentPlan->starts_at)->diffInDays($startsAt);
                        $remainingDays = $totalDays - $usedDays;
                        ?>
                        <div class="text-gray-600 fw-bold">
                            <small>
                                <?php if($remainingDays > 0): ?>
                                <?php echo e(__('messages.plan.trial_days')); ?> : <?php echo e($remainingDays.' '.__('messages.plan.days').' '.__('messages.subscription.remaining')); ?>

                                <?php endif; ?>
                            </small>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="fs-6 text-gray-600 fw-bold mb-2">
                        <?php echo e(__('messages.subscription.subscribed_date').': '.\Carbon\Carbon::parse($currentPlan->starts_at)->format('dS M, Y')); ?>

                    </div>
                    <div>
                        <?php $__currentLoopData = getPlanFeature($currentPlan->plan); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($value): ?>
                        <span class="badge <?php echo e(getRandomColor($loop->index)); ?>  fs-7 m-1"><?php echo e(__('messages.feature.'.$feature)); ?></span>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary" href="<?php echo e(route('subscription.upgrade')); ?>">
                            <?php echo e(__('messages.subscription.upgrade_plan')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid mt-5">
    <div class="d-flex flex-column table-striped">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('usersubscription-table', [])->html();
} elseif ($_instance->childHasBeenRendered('ezjgx1R')) {
    $componentId = $_instance->getRenderedChildComponentId('ezjgx1R');
    $componentTag = $_instance->getRenderedChildComponentTagName('ezjgx1R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ezjgx1R');
} else {
    $response = \Livewire\Livewire::mount('usersubscription-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('ezjgx1R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/subscription/index.blade.php ENDPATH**/ ?>