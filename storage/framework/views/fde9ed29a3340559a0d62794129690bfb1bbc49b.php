<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.subscription.payment')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex flex-column">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <h1><?php echo $__env->yieldContent('title'); ?></h1>
                <a class="btn btn-outline-primary float-end"
                href="<?php echo e(url()->previous()); ?>"><?php echo e(__('messages.common.back')); ?></a>
            </div>

            <div class="col-12">
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card">
                <?php
                $cpData = getCurrentPlanDetails();
                $planText = ($cpData['isExpired']) ? __('messages.subscription.current_expire') : __('messages.subscription.current_plan');
                $currentPlan = $cpData['currentPlan'];
                ?>
                <div class="card-body">
                    <div class="row">
                        <?php if($planText != 'Current Expired Plan'): ?>
                        <div class="col-md-6">
                            <div class="card p-5 me-2 shadow rounded">
                                <div class="card-header py-0 px-0">
                                    <h3 class="align-items-start flex-column p-sm-5 p-0">
                                        <span class="fw-bolder text-primary fs-1 mb-1 me-0"><?php echo e($planText); ?></span>
                                    </h3>
                                </div>
                                <div class="px-4">
                                    <div class="d-flex align-items-center py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.plan_name')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($cpData['name']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-3 fw-bolder"><?php echo e(__('messages.subscription.plan_price')); ?></h4>
                                        <span class="fs-5 text-muted fw-bold mt-1">
                                            <span class="mb-2">
                                                <?php echo e($currentPlan->currency->currency_icon); ?>

                                            </span>
                                            <?php echo e(number_format($currentPlan->price)); ?>

                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.start_date')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($cpData['startAt']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.end_date')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($cpData['endsAt']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.used_days')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($cpData['usedDays']); ?> Days</span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.remaining_days')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($cpData['remainingDays']); ?> <?php echo e(__('messages.plan.days')); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.used_balance')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1">
                                            <span class="mb-2">
                                                <?php echo e($currentPlan->currency->currency_icon); ?>

                                            </span>
                                            <?php echo e($cpData['usedBalance']); ?>

                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.remaining_balance')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1">
                                            <span class="mb-2"><?php echo e($currentPlan->currency->currency_icon); ?></span>
                                            <?php echo e($cpData['remainingBalance']); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php
                        $newPlan = getProratedPlanData($subscriptionsPricingPlan->id);
                        ?>

                        <?php echo e(Form::hidden('amount_to_pay', $newPlan['amountToPay'], ['id' => 'amountToPay'])); ?>

                        <?php echo e(Form::hidden('plan_end_date', $newPlan['endDate'], ['id' => 'planEndDate'])); ?>

                        <div class="col-md-6 col-12 <?php if($planText == 'Current Expired Plan'): ?> mx-auto <?php endif; ?>">
                            <div class="card h-100 p-5 me-2 shadow rounded">
                                <div class="card-header py-0 px-0">
                                    <h3 class="align-items-start flex-column p-sm-5 p-0">
                                        <span class="fw-bolder text-primary fs-1 mb-1 me-0"><?php echo e($planText); ?></span>
                                    </h3>
                                </div>
                                <div class="px-5 pb-5">
                                    <div class="d-flex align-items-center py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.plan_name')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($newPlan['name']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.plan_price')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1">
                                            <span class="mb-2">
                                                <?php echo e($subscriptionsPricingPlan->currency->currency_icon); ?>

                                            </span>
                                            <?php echo e(($subscriptionsPricingPlan->price)); ?>

                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.start_date')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($newPlan['startDate']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.end_date')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($newPlan['endDate']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.total_days')); ?></h4>
                                        <span
                                        class="fs-5 w-50 text-muted fw-bold mt-1"><?php echo e($newPlan['totalDays']); ?> <?php echo e(__('messages.plan.days')); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.plan.remaining_balance')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1">
                                            <?php echo e($subscriptionsPricingPlan->currency->currency_icon); ?>

                                            <?php echo e($newPlan['remainingBalance']); ?>

                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center  py-2">
                                        <h4 class="fs-5 w-50 plan-data mb-0 me-5 fw-bolder"><?php echo e(__('messages.subscription.payable_amount')); ?></h4>
                                        <span class="fs-5 w-50 text-muted fw-bold mt-1">
                                            <?php echo e($subscriptionsPricingPlan->currency->currency_icon); ?>

                                            <?php echo e(($newPlan['amountToPay'])); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center mt-5 plan-controls">
                            <div class="mt-5 me-3 w-50 <?php echo e($newPlan['amountToPay'] <= 0 ? 'd-none' : ''); ?>">
                                <?php echo e(Form::select('payment_type', $paymentTypes ,null , ['class' => 'form-select','required', 'id' => 'paymentType', 'data-control' => 'select2', 'placeholder'=>__("messages.select_payment_type")])); ?>

                            </div>
                            <div class="mt-5 stripePayment proceed-to-payment <?php echo e($newPlan['amountToPay'] > 0 ? 'd-none' : ''); ?>">
                                <button type="button"
                                class="btn btn-primary rounded-pill mx-auto d-block makePayment"
                                data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                                data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                            <?php echo e(__('messages.subscription.pay_or_switch_plan')); ?></button>
                        </div>
                        <div class="mt-5 paypalPayment proceed-to-payment d-none">
                            <button type="button"
                            class="btn btn-primary rounded-pill mx-auto d-block paymentByPaypal"
                            data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                            data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                        <?php echo e(__('messages.subscription.pay_or_switch_plan')); ?></button>
                    </div>
                    <div class="mt-5 RazorPayPayment proceed-to-payment d-none">
                        <button type="button"
                        class="btn btn-primary rounded-pill mx-auto d-block paymentByRazorPay"
                        data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                        data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                    <?php echo e(__('messages.subscription.pay_or_switch_plan')); ?></button>
                </div>
                <div class="mt-5 ManuallyPayment proceed-to-payment d-none">
                    <button type="button"
                    class="btn btn-primary rounded-pill mx-auto d-block manuallyPay"
                    data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                    data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                    Cash Pay
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/subscription/payment_for_plan.blade.php ENDPATH**/ ?>