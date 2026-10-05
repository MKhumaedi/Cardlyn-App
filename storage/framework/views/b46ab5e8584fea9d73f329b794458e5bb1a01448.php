<?php $attributes = $attributes->exceptProps(['url' => null, 'target' => '_self', 'reordering' => false, 'customAttributes' => []]); ?>
<?php foreach (array_filter((['url' => null, 'target' => '_self', 'reordering' => false, 'customAttributes' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(!$reordering && (method_exists($attributes, 'has') ? $attributes->has('wire:sortable.item') : array_key_exists('wire:sortable.item', $attributes->getAttributes()))): ?>
    <?php
        $attributes = $attributes->filter(fn ($value, $key) => $key !== 'wire:sortable.item');
    ?>
<?php endif; ?>

<tr
        <?php echo e($attributes->merge($customAttributes)); ?>


        <?php if($url): ?>
        onclick="window.open('<?php echo e($url); ?>', '<?php echo e($target); ?>')"
        style="cursor:pointer"
        <?php endif; ?>
>
    <?php echo e($slot); ?>

</tr>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/vendor/livewire-tables/bootstrap-5/components/table/row.blade.php ENDPATH**/ ?>