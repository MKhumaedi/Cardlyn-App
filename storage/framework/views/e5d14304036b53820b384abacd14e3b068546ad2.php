<div class="ms-auto"></div>
<div class="dropdown d-flex align-items-center me-4 me-md-5">
    <button class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0" type="button" id="dropdownMenuButton1" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
        <i class='fas fa-filter'></i>
    </button>
    <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuButton1">
        <div class="text-start border-bottom py-4 px-7">
            <h3 class="text-gray-900 mb-0"><?php echo e(__('messages.common.filter')); ?></h3>
        </div>
        <div class="p-5">
            <div class="mb-5">
                <label for="exampleInputSelect2" class="form-label"><?php echo e(__('messages.common.type')); ?></label>
                <?php echo e(Form::select('type', $types, null,['class' => 'form-control form-select','data-control'=>"select2" ,'id' => 'appointmentType', 'wire:ignore'])); ?>

            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" id="appointmentResetFilter" class="btn btn-secondary"><?php echo e(__('messages.common.reset')); ?></button>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/maystudi/cardlyn.com/resources/views/appointment/type-filter.blade.php ENDPATH**/ ?>