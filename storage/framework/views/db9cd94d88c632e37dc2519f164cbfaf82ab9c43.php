<div>
    <div
            <?php if(is_numeric($refresh)): ?>
            wire:poll.<?php echo e($refresh); ?>ms
            <?php elseif(is_string($refresh)): ?>
            <?php if($refresh === '.keep-alive' || $refresh === 'keep-alive'): ?>
            wire:poll.keep-alive
            <?php elseif($refresh === '.visible' || $refresh === 'visible'): ?>
            wire:poll.visible
            <?php else: ?>
            wire:poll="<?php echo e($refresh); ?>"
            <?php endif; ?>
            <?php endif; ?>
            class="container-fluid p-0"
    >
        <?php echo $__env->make('livewire-tables::includes.debug', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('livewire-tables::bootstrap-5.includes.offline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('livewire-tables::bootstrap-5.includes.sorting-pills', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('livewire-tables::bootstrap-5.includes.filter-pills', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="d-sm-flex justify-content-between mb-3 livewire-search-box">
            <div class="d-sm-flex align-items-center w-100">
                <?php echo $__env->make('livewire-tables::bootstrap-5.includes.reorder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('livewire-tables::bootstrap-5.includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(isset($filterComponent)): ?>
                    <?php echo $__env->make($filterComponent, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <?php if(isset($componentName)): ?>
                    <?php echo $__env->make($componentName, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <?php if($filtersEnabled && $showFilterDropdown): ?>
                    <div class="<?php echo e($showSearch ? 'ms-0 ms-md-2' : ''); ?> mb-3 mb-md-0">
                        <?php echo $__env->make('livewire-tables::bootstrap-5.includes.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="d-md-flex">
                <div><?php echo $__env->make('livewire-tables::bootstrap-5.includes.bulk-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                <div><?php echo $__env->make('livewire-tables::bootstrap-5.includes.column-select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            </div>
        </div>

        <?php echo $__env->make('livewire-tables::bootstrap-5.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('livewire-tables::bootstrap-5.includes.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <?php if(isset($modalsView)): ?>
        <?php echo $__env->make($modalsView, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/vendor/livewire-tables/bootstrap-5/datatable.blade.php ENDPATH**/ ?>