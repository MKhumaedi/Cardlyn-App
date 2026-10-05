<div id="editLanguageModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo e(__('messages.languages.edit_language')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'editLanguageForm'])); ?>

            <div class="modal-body">
                <?php echo e(Form::hidden('languageId',null,['id'=>'languageId'])); ?>


                <div class="mb-5">
                    <?php echo e(Form::label('name',__('messages.languages.language').(':'), ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('name', null, ['id'=>'editLanguage','class' => 'form-control','required','placeholder' => __('messages.languages.language')])); ?>

                </div>
                <div>
                    <?php echo e(Form::label('iso_code',__('messages.languages.iso_code').(':'),['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('iso_code', '', ['class' => 'form-control', 'id' => 'editIso','placeholder' => __('messages.languages.iso_code')])); ?>

                </div>

            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary m-0','id' => 'btnEditSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0" id="btnEditCancel"
                data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>

<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/languages/edit_modal.blade.php ENDPATH**/ ?>