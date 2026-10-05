<div class="modal fade" id="editCountryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo e(__('messages.country.edit_country')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id' => 'editCountryForm'])); ?>

            <div class="modal-body">
                <?php echo e(Form::hidden('countryId',null,['id'=>'countryId'])); ?>

                <div class="mb-5">
                    <?php echo e(Form::label('name',__('messages.common.name').':', ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'required', 'id'=>'editName'])); ?>

                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('short_code',__('messages.country.short_code').':', ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('short_code', null, ['class' => 'form-control','maxlength' => '2' , 'required', 'onkeypress' => 'return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123)', 'id' => 'editShortCode'])); ?>

                </div>
                <div>
                    <?php echo e(Form::label('phone_code',__('messages.country.phone_code').':', ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('phone_code', null, ['class' => 'form-control', 'maxlength' => '4', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'id'=>'editPhoneCode'])); ?>

                </div>

            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0'])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                data-bs-dismiss="modal"><?php echo e(__('messages.common.discard')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/countries/edit_modal.blade.php ENDPATH**/ ?>