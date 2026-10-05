<?php if($reorderEnabled): ?>
    <div class="me-0 me-md-2 mb-3 mb-md-0">
        <button
                wire:click="<?php echo e($reordering ? 'disableReordering' : 'enableReordering'); ?>"
                type="button"
                class="btn btn-default d-block w-100 d-md-inline"
        >
            <?php if($reordering): ?>
                <?php echo app('translator')->get('Done Reordering'); ?>
            <?php else: ?>
                <?php echo app('translator')->get('Reorder'); ?>
            <?php endif; ?>
        </button>
    </div>
<?php endif; ?>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/vendor/livewire-tables/bootstrap-5/includes/reorder.blade.php ENDPATH**/ ?>