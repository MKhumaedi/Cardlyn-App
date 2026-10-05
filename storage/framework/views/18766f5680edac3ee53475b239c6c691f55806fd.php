<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<div>
		<div class="d-flex">
			<i class="fa-solid fa-face-frown me-5"></i>
			<span class="mt-1"><?php echo e($errors->first()); ?></span>
		</div>
	</div>
</div>
<?php endif; ?>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/layouts/errors.blade.php ENDPATH**/ ?>