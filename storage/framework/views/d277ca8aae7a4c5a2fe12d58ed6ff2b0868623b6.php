<div id="addLanguageModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo e(__('messages.languages.new_language')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'addLanguageForm'])); ?>

            <div class="modal-body">
                <div class="mb-5">
                    <?php echo e(Form::label('name',__('messages.languages.language').(':'), ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('name', null, ['class' => 'form-control','required','id'=>'languages','placeholder' => __('messages.languages.language')] )); ?>

                </div>
                <div>
                    <?php echo e(Form::label('iso_code',__('messages.languages.iso_code').(':'),['class' => 'form-label required',])); ?>

                    <?php echo e(Form::text('iso_code', '', ['class' => 'form-control', 'id' => 'languageIsoCode','placeholder' => __('messages.languages.iso_code'),'maxlength' => '2' ,'required'])); ?>

                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary m-0','id' => 'languageBtnSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                id="languageBtnCancel"
                data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/languages/add_modal.blade.php ENDPATH**/ ?>