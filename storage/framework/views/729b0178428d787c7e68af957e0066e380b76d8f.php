<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="d-flex align-items-center">
        <div class="image image-circle image-mini me-3">
            <img data-sizes="auto" data-src="<?php echo e($row->testimonial_url); ?>" alt="User <?php echo e(env('APP_NAME')); ?>" class="lazyload user-img">
        </div>
        <div class="d-flex flex-column">
            <span class="fs-6"><?php echo e(\Illuminate\Support\Str::limit($row->name, 30)); ?></span>
        </div>
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
    <div class="justify-content-center d-flex">
    <a title = "<?php echo e(__('messages.common.view')); ?>" href="javascript:void(0)"
       data-id="<?php echo e($row->id); ?>" class="btn px-1 text-info fs-3 view-testimonial-btn ">
        <i class="fa-solid fa-eye"></i>
    </a>

    <a href="javascript:void(0)" title="<?php echo e(__('messages.common.edit')); ?>"
        class="btn px-1 text-primary fs-3 front-testimonial-edit-btn" data-id="<?php echo e($row->id); ?>">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <a href="javascript:void(0)" data-id="<?php echo e($row->id); ?>" title="<?php echo e(__('messages.common.delete')); ?>"
       class="btn px-1 text-danger fs-3 front-testimonial-delete-btn">
        <i class="fa-solid fa-trash"></i>
    </a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/livewire-tables/rows/front_testimonial_table.blade.php ENDPATH**/ ?>