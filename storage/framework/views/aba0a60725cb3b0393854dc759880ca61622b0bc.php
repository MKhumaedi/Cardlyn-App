<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex align-items-center">
        <a href="<?php echo e(route('users.show', $row->id)); ?>">
            <div class="image image-circle image-mini me-3">
                <img data-sizes="auto" data-src="<?php echo e($row->profile_image); ?>" alt="User <?php echo e(env('APP_NAME')); ?>" class="lazyload user-img">
            </div>
        </a>
        <div class="d-flex flex-column">
            <a href="<?php echo e(route('users.show', $row->id)); ?>" class="mb-1 text-decoration-none fs-6">
                <?php echo $row->full_name; ?>

            </a>
            <span class="fs-6"><?php echo e($row->email); ?></span>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => ['class' => 'text-center']]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
    <span class="badge bg-light-success"><?php echo e($row->plan_name); ?></span>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
        $checked = $row->email_verified_at == null
         ? ''
         : 'checked disabled'
    ?>

    <label class="form-check form-switch d-flex justify-content-center cursor-pointer">
        <input name="email_verified" data-id="<?php echo e($row->id); ?>" class="form-check-input user-is-verified cursor-pointer"
               type="checkbox"
               value="1" <?php echo e($checked); ?>>
        <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
    </label>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex justify-content-center">
        <?php if($row->is_active): ?>
            <a data-turbo="false" href="javascript:void(0)" data-id="<?php echo e($row->id); ?>" class="btn btn-sm btn-info user-impersonate">
                <?php echo e(__('messages.user.impersonate')); ?>

            </a>
        <?php else: ?>
            <a data-turbo="false" href="javascript:void(0)" data-id="<?php echo e($row->id); ?>" style="pointer-events: none;
   cursor: default;" class="btn btn-sm btn-secondary user-impersonate">
                <?php echo e(__('messages.user.impersonate')); ?>

            </a>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
        $checked = $row->is_active === 0
         ? ''
         : 'checked';
    ?>
    <label class="form-check form-switch form-check-custom form-check-solid form-switch-sm d-flex justify-content-center cursor-pointer">
        <input type="checkbox" name="is_active" class="form-check-input user-active cursor-pointer"
               data-id="<?php echo e($row->id); ?>" <?php echo e($checked); ?>>
        <span class="custom-switch-indicator"></span>
    </label>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="justify-content-center d-flex">
    <a  href="<?php echo e(route('users.edit', $row->id)); ?>" title="<?php echo e(__('messages.common.edit')); ?>"
        class="btn px-1 text-primary fs-3 user-edit-btn" data-id="<?php echo e($row->id); ?>">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>
    <a href="javascript:void(0)" data-id="<?php echo e($row->id); ?>" title="<?php echo e(__('messages.common.delete')); ?>"
       class="btn px-1 text-danger fs-3 user-delete-btn">
        <i class="fa-solid fa-trash"></i>
    </a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH /home/maystudi/cardlyn.com/resources/views/livewire-tables/rows/user_table.blade.php ENDPATH**/ ?>