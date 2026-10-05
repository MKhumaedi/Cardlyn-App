<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div>
	<ul class="nav nav-tabs mb-5 pb-1 overflow-auto flex-nowrap text-nowrap" id="myTab" role="tablist">
		<li class="nav-item position-relative me-7 mb-3">
			<a class="nav-link me-0 p-0 <?php echo e((isset($sectionName) && $sectionName == 'general') ? 'active' : ''); ?>"    href="<?php echo e(route('setting.index',['section' => 'general'])); ?>"><?php echo e(__('messages.setting.general')); ?></a>
		</li>
		
		<li class="nav-item position-relative me-7 mb-3" role="presentation">
			<a class="nav-link me-0 p-0 <?php echo e((isset($sectionName) && $sectionName == 'terms-conditions') ? 'active' : ''); ?>"
			href="<?php echo e(route('setting.index',['section' => 'terms-conditions'])); ?>"><?php echo e(__('messages.vcard.term_condition')); ?></a>
		</li>
	</ul>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/settings/setting_menu.blade.php ENDPATH**/ ?>