<div class="d-flex flex-sm-row flex-column align-items-center">
    <?php if($paginationEnabled && $showPerPage): ?>
        <div class="ms-0 ms-md-2 mb-sm-0 mb-3 d-flex align-items-center justify-content-sm-start justify-content-center">
            <span class="text-muted me-2 text-show"><?php echo app('translator')->get('Show'); ?></span>
            <select
                    wire:model="perPage"
                    id="perPage"
                    class="form-select w-auto data-sorting pl-1 pr-5 py-2"
            >
                <?php $__currentLoopData = $perPageAccepted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <?php endif; ?>

    <?php if($showPagination): ?>
        <?php if($paginationEnabled && $rows->lastPage() > 1): ?>
            <div class="w-100 d-flex justify-content-sm-between justify-content-center flex-wrap align-items-center flex-sm-row flex-column">
                <div class="text-muted ms-sm-3 pagination-record">
                    <span><?php echo app('translator')->get('Showing'); ?></span>
                    <strong><?php echo e($rows->count() ? $rows->firstItem() : 0); ?></strong>
                    <span><?php echo app('translator')->get('to'); ?></span>
                    <strong><?php echo e($rows->count() ? $rows->lastItem() : 0); ?></strong>
                    <span><?php echo app('translator')->get('of'); ?></span>
                    <strong><?php echo e($rows->total()); ?></strong>
                    <span><?php echo app('translator')->get('results'); ?></span>
                </div>
                <div class="livewire-pagination mt-sm-0 mt-3">
                    <?php echo e($rows->links()); ?>

                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-12 text-muted pagination-record ms-sm-3">

                    <?php echo app('translator')->get('Showing'); ?>

                    <strong><?php echo e($rows->count()); ?></strong>
                    <?php echo app('translator')->get('results'); ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/vendor/livewire-tables/bootstrap-5/includes/pagination.blade.php ENDPATH**/ ?>