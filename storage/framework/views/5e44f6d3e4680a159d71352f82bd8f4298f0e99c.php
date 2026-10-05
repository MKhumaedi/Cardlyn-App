<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.subscription.upgrade_plan')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card subscription">
        <div class="card-body">
            <div class="d-flex flex-column">
                <div class="nav-group mx-auto">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#monthly"
                            class="nav-link active">
                        <?php echo e(__('messages.plan.monthly')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#yearly"
                        class="nav-link">
                    <?php echo e(__('messages.plan.yearly')); ?></a>
                </li>

            </ul>
        </div>
        <div class="col-12 text-gray-700 h5 text-center pt-10">
            <div class="tab-content">
                <div class="tab-pane show active" id="monthly">
                    <div class="row justify-content-center">
                        <?php $__empty_1 = true; $__currentLoopData = $monthlyPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                            <div class="card pricing-card bg-light p-5 shadow-lg mb-8">
                                <h1><?php echo e($plan->name); ?></h1>
                                <h1 class="pricing-amount">
                                    <?php echo e($plan->currency->currency_icon.number_format($plan->price)); ?>

                                </h1>
                                <div class="card-body p-3">
                                    <div class="pricing-description text-start">
                                        <div class="mb-6">
                                            <h3 class="mb-1"><?php echo e(__('messages.plan.what_s_in_startup_plan')); ?></h3>
                                            <small class="text-muted">
                                                <?php echo e(__('messages.plan.duration').' '.$plan->valid_upto.' '. __('messages.plan.months')); ?></small>
                                                <br>
                                                <small class="text-muted">
                                                    <?php echo e(__('messages.plan.no_of_vcards').' : '.$plan->no_of_vcards); ?></small>
                                                </div>
                                                <div class="d-flex justify-content-between mb-0">
                                                    <p class="fw-normal"><?php echo e(__('Semua Template (Tema)')); ?></p>
                                                    <i class="fa-solid fa-circle-check fs-2"></i>
                                                </div>
                                                <?php $__currentLoopData = getPlanFeature($plan); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="d-flex justify-content-between mb-0">
                                                    <p class="fw-normal"><?php echo e(__('messages.feature.'.$feature)); ?></p>
                                                    <?php if($value): ?>
                                                    <i class="fa-solid fa-circle-check fs-2"></i>
                                                    <?php else: ?>
                                                    <i class="fa-solid fa-circle-xmark fs-2"></i>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <div class="flex-center flex-row-fluid pt-0">
                                            <?php if(!empty(getCurrentSubscription()) &&  $plan->id == getCurrentSubscription()->plan_id && !getCurrentSubscription()->isExpired()): ?>
                                            <?php if($plan->price != 0): ?>
                                            <button type="button"
                                            class="btn btn-success rounded-pill mx-auto d-block cursor-remove-plan pricing-plan-button-active"
                                            data-id="<?php echo e($plan->id); ?>">
                                        <?php echo e(__('messages.subscription.currently_active')); ?></button>
                                        <?php else: ?>
                                        <button type="button"
                                        class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                        <?php echo e(__('messages.subscription.renew_free_plan')); ?>

                                    </button>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <?php if(!empty(getCurrentSubscription()) && !getCurrentSubscription()->isExpired() && ($plan->price == 0 || $plan->price != 0)): ?>
                                    <?php if($plan->hasZeroPlan->count() == 0): ?>
                                    <a data-turbo="false" href="<?php echo e($plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)'); ?>"
                                     class="btn btn-primary rounded-pill mx-auto <?php echo e($plan->price == 0 ? 'freePayment' : ''); ?>"
                                     data-id="<?php echo e($plan->id); ?>"
                                     data-plan-price="<?php echo e($plan->price); ?>">
                                 <?php echo e(__('messages.subscription.switch_plan')); ?></a>
                                 <?php else: ?>
                                 <button type="button"
                                 class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                 <?php echo e(__('messages.subscription.renew_free_plan')); ?>

                             </button>
                             <?php endif; ?>
                             <?php else: ?>
                             <?php if($plan->hasZeroPlan->count() == 0): ?>
                             <a data-turbo="false" href="<?php echo e($plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)'); ?>"
                                 class="btn btn-primary rounded-pill mx-auto  <?php echo e($plan->price == 0 ? 'freePayment' : ''); ?>"
                                 data-id="<?php echo e($plan->id); ?>"
                                 data-plan-price="<?php echo e($plan->price); ?>">
                             <?php echo e(__('messages.subscription.choose_plan')); ?></a>
                             <?php else: ?>
                             <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                <?php echo e(__('messages.subscription.renew_free_plan')); ?>

                            </button>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="not-plan">
                    <span class="text-muted h1"><?php echo e(__('messages.subscription.no_plan_available')); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="tab-pane" id="yearly">
            <div class="row justify-content-center">
                <?php $__empty_1 = true; $__currentLoopData = $yearlyPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                    <div class="card pricing-card bg-light p-5 shadow-lg mb-8">
                        <h1><?php echo e($plan->name); ?></h1>
                        <h1 class="pricing-amount">
                            <?php echo e($plan->currency->currency_icon.number_format($plan->price)); ?>

                        </h1>
                        <div class="card-body p-3">
                            <div class="pricing-description text-start">
                                <div class="mb-6">
                                    <h3 class="mb-1"><?php echo e(__('messages.plan.what_s_in_startup_plan')); ?></h3>
                                    <small class="text-muted">
                                        <?php echo e(__('messages.plan.duration').' '.$plan->valid_upto.' '. __('messages.plan.years')); ?></small>
                                        <br>
                                        <small class="text-muted">
                                            <?php echo e(__('messages.plan.no_of_vcards').' : '.$plan->no_of_vcards); ?></small>
                                        </div>
                                        <div class="d-flex justify-content-between mb-0">
                                            <p class="fw-normal"><?php echo e(__('Semua Template (Tema)')); ?></p>
                                            <i class="fa-solid fa-circle-check fs-2"></i>
                                        </div>
                                        <?php $__currentLoopData = getPlanFeature($plan); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="d-flex justify-content-between mb-0">
                                            <p class="fw-normal"><?php echo e(__('messages.feature.'.$feature)); ?></p>
                                            <?php if($value): ?>
                                            <i class="fa-solid fa-circle-check fs-2"></i>
                                            <?php else: ?>
                                            <i class="fa-solid fa-circle-xmark fs-2"></i>
                                            <?php endif; ?>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="flex-center flex-row-fluid pt-0">
                                    <?php if(!empty(getCurrentSubscription()) && $plan->id == getCurrentSubscription()->plan_id && !getCurrentSubscription()->isExpired()): ?>
                                    <?php if($plan->price != 0): ?>
                                    <button type="button"
                                    class="btn btn-success rounded-pill mx-auto d-block cursor-remove-plan pricing-plan-button-active"
                                    data-id="<?php echo e($plan->id); ?>">
                                <?php echo e(__('messages.subscription.currently_active')); ?></button>
                                <?php else: ?>
                                <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                    <?php echo e(__('messages.subscription.renew_free_plan')); ?>

                                </button>
                                <?php endif; ?>
                                <?php else: ?>
                                <?php if(!empty(getCurrentSubscription()) && !getCurrentSubscription()->isExpired() && ($plan->price == 0 || $plan->price != 0)): ?>
                                <?php if($plan->hasZeroPlan->count() == 0): ?>
                                <a data-turbo="false" href="<?php echo e($plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)'); ?>"
                                 class="btn btn-primary rounded-pill mx-auto <?php echo e($plan->price == 0 ? 'freePayment' : ''); ?>"
                                 data-id="<?php echo e($plan->id); ?>"
                                 data-plan-price="<?php echo e($plan->price); ?>">
                             <?php echo e(__('messages.subscription.switch_plan')); ?></a>
                             <?php else: ?>
                             <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                <?php echo e(__('messages.subscription.renew_free_plan')); ?>

                            </button>
                            <?php endif; ?>
                            <?php else: ?>
                            <?php if($plan->hasZeroPlan->count() == 0): ?>
                            <a data-turbo="false" href="<?php echo e($plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)'); ?>"
                             class="btn btn-primary rounded-pill mx-auto <?php echo e($plan->price == 0 ? 'freePayment' : ''); ?>"
                             data-id="<?php echo e($plan->id); ?>"
                             data-plan-price="<?php echo e($plan->price); ?>">
                         <?php echo e(__('messages.subscription.choose_plan')); ?></a>
                         <?php else: ?>
                         <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                            <?php echo e(__('messages.subscription.renew_free_plan')); ?>

                        </button>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="not-plan">
                <span class="text-muted h1"><?php echo e(__('messages.subscription.no_plan_available')); ?></span>
            </div>
            <?php endif; ?>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/subscription/upgrade.blade.php ENDPATH**/ ?>