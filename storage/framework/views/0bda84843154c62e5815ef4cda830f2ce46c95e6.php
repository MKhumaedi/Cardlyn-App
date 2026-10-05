<div class="modal fade" id="AppointmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo e(__('messages.make_appointment')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo Form::open(['id'=>'addAppointmentForm']); ?>

            <div class="modal-body">
                <div class="alert alert-danger fs-4 text-light d-flex align-items-center d-none" role="alert" id="countryValidationErrorsBox">
                    <i class="fa-solid fa-face-frown me-5"></i>
                </div>
                <?php echo e(Form::hidden('from_time', null,['id'=>'timeSlot',])); ?> <?php echo e(Form::hidden('to_time', null,['id'=>'toTime',])); ?> <?php echo e(Form::hidden('date', null,['id'=>'Date',])); ?> <?php echo e(Form::hidden('vcard_id', $vcard->id,['id'=>'vCardId',])); ?>

                <div class="mb-5">
                    <?php echo e(Form::label('name',__('messages.common.name').(':'), ['class' => 'form-label required'])); ?> <?php echo e(Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => __('messages.form.enter_name'),'id'=>'paypalIntUserName'])); ?>

                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('email',__('messages.common.email').(':'), ['class' => 'form-label required '])); ?> <?php echo e(Form::text('email', null, ['class' => 'form-control','required', 'placeholder' => __('messages.form.enter_email'),'id'=>'paypalIntUserEmail'])); ?>

                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('phone',__('messages.common.phone').(':'), ['class' => 'form-label'])); ?> <?php echo e(Form::text('phone', null, ['class' => 'form-control', 'placeholder' => __('messages.form.enter_phone'),'id'=>'paypalIntUserPhone'])); ?>

                </div>
                <?php if(isset($appointmentDetail->is_paid) && ($appointmentDetail->is_paid == 1) && (getUserSettingValue('stripe_enable',$vcard->user->id) || getUserSettingValue('paypal_enable',$vcard->user->id))): ?>
                <div class="mb-5">
                    <?php echo e(Form::label('payment_method',__('messages.common.payment_methods').(':'), ['class' => 'form-label required'])); ?> <?php echo e(Form::select('payment_method', $appointmentDetail->is_paid==0 ? \App\Models\Appointment::PAYMENT_METHOD :$paymentMethod , null,['class' => 'form-control form-select form-select-solid select2Selector','data-control' => 'select2', 'required', 'id' => 'appointmentPaymentMethod','placeholder'=>__('messages.common.payment_methods')])); ?>

                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('phone',__('Price').(':'), ['class' => 'form-label'])); ?>

                    <span class="form-label" id="paymentCurrencyCode"><?php echo e($currency->currency_icon); ?></span>
                    <span id="payablePrice"><?php echo e(number_format($appointmentDetail->price)); ?></span>
                    <input type="hidden" id="currencyCode" name="currency_code" value="<?php echo e($currency->currency_code); ?>">
                    <input type="hidden" id="amount" name="amount" value="<?php echo e($appointmentDetail->price); ?>">
                </div>
                <?php endif; ?>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0','id'=>'serviceSave'])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0" data-bs-dismiss="modal"><?php echo e(__('messages.common.discard')); ?></button>
            </div> <?php echo e(Form::close()); ?> </div>
        </div>
    </div><?php /**PATH /home/maystudi/cardlyn.com/resources/views/vcardTemplates/appointment.blade.php ENDPATH**/ ?>