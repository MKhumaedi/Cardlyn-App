<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex align-items-center">
        <a href="/<?php echo e($row->name); ?>" target="_blank" rel="nofollow noreferrer noopener">
            <div class="image image-circle image-mini me-3">
                <img data-sizes="auto" data-src="<?php echo e($row->template_url); ?>" alt="User <?php echo e(env('APP_NAME')); ?>" class="lazyload user-img">
            </div>
        </a>
        <div class="d-flex flex-column">
            <a href="/<?php echo e($row->name); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mb-1 text-decoration-none fs-6">
                <?php echo e($row->name); ?>

            </a>
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
    <?php if($row->vcards): ?>
        <span class="badge badge-circle bg-info"><?php echo e($row->vcards->count()); ?></span>
    <?php else: ?>
        <span><?php echo e(__('messages.common.notUsed')); ?></span>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH /home/maystudi/cardlyn.com/resources/views/livewire-tables/rows/template_table.blade.php ENDPATH**/ ?>