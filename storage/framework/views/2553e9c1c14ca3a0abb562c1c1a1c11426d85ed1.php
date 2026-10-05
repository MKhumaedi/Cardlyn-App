<div class="modal fade" id="addFrontTestimonialModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo e(__('messages.vcard.new_testimonial')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo Form::open(['id'=>'addFrontTestimonialForm', 'files' => 'true']); ?>

            <div class="modal-body">
                <div class="mb-5">
                    <?php echo e(Form::label('name',__('messages.common.name').(':'), ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => __('messages.form.testimonial')])); ?>

                </div>
                <div class="mb-5">
                    <?php echo e(Form::label('description', __('messages.common.description').':', ['class' => 'form-label required'])); ?>

                    <?php echo e(Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => __('messages.form.short_description'), 'rows' => '5' , 'required'])); ?>

                </div>
                <div class="mb-3" io-image-input="true">
                    <label for="testimonialInputImage" class="form-label required"><?php echo e(__('messages.vcard.image').':'); ?></label>
                    <span data-bs-toggle="tooltip"
                    data-placement="top"
                    data-bs-original-title="<?php echo e(__('messages.tooltip.home_image')); ?> 80x80">
                    <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
                </span>
                <div class="d-block">
                    <div class="image-picker">
                        <div class="image previewImage" id="testimonialInputImage"
                        style="background-image: url('<?php echo e(asset('web/media/avatars/150-26.jpg')); ?>')">
                    </div>
                    <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                    data-placement="top" data-bs-original-title="<?php echo e(__('messages.tooltip.image')); ?>">
                    <label>
                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                        <input type="file" id="testimonialImg" name="image" class="image-upload d-none"
                        accept="image/*"/>
                    </label>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer pt-0">
    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0','id'=>'testimonialSave'])); ?>

    <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
    data-bs-dismiss="modal"><?php echo e(__('messages.common.discard')); ?></button>
</div>
<?php echo Form::close(); ?>

</div>
</div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/testimonial/create.blade.php ENDPATH**/ ?>