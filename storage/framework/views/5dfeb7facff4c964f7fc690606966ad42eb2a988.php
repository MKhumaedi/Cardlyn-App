<div class="modal fade" id="addCountryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo e(__('messages.country.new_country')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'addCountryForm'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger fs-4 text-white d-flex align-items-center  d-none" role="alert" id="countryValidationErrorsBox">
                    <i class="fa-solid fa-face-frown me-5"></i>
                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('name',__('messages.common.name').':', ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'required','placeholder' => __('messages.common.name'),'id' => 'countryName','autofocus'])); ?>

                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('short_code',__('messages.country.short_code').':', ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('short_code', null, ['class' => 'form-control','autofocus','maxlength' => '2' ,'required', 'onkeypress' => 'return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123)','placeholder' => __('messages.country.short_code')])); ?>

                </div>
                <div>
                    <?php echo e(Form::label('phone_code',__('messages.country.phone_code').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('phone_code', null, ['class' => 'form-control', 'autofocus','maxlength' => '4', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','placeholder' => __('messages.country.phone_code')])); ?>

                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0','id'=>'btnSave'])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                data-bs-dismiss="modal"><?php echo e(__('messages.common.discard')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/countries/add_modal.blade.php ENDPATH**/ ?>