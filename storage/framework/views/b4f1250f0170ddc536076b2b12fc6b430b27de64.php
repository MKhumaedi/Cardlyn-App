<?php if($showSearch): ?>
    <div class="mb-3 mb-sm-0">
        <form class="d-flex position-relative">
            <div class="position-relative d-flex width-320">
                              <span
                                  class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                <input class="form-control ps-8" wire:model<?php echo e($this->searchFilterOptions); ?>="filters.search" type="search" placeholder="<?php echo e(__('auth.app.search')); ?>" aria-label="Search">
            </div>
        </form>
        <?php if(isset($filters['search']) && strlen($filters['search'])): ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/vendor/livewire-tables/bootstrap-5/includes/search.blade.php ENDPATH**/ ?>