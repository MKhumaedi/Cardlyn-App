<?php $__env->startSection('section'); ?>
<div class="card">
    <div class="card-body">
        <?php echo e(Form::hidden('terms_condition_data',$setting['terms_conditions'],['id' => 'termConditionData'])); ?>

        <?php echo e(Form::hidden('privacy_policy_data',$setting['privacy_policy'],['id' => 'privacyPolicyData'])); ?>

        <?php echo e(Form::open(['route' => ['setting.TermsConditions.update'], 'method' => 'post','id' =>'TermsConditions'])); ?>


        <div class="col-lg-12">
            <div class="mb-5">
                <?php echo e(Form::label('term_condition', __('messages.vcard.term_condition').':', ['class' => 'form-label'])); ?>

                <div id="termConditionId"  class="editor-height" style="height: 200px"></div>
                <?php echo e(Form::hidden('terms_conditions', null, ['id' => 'termData'])); ?>

            </div>
            </di
            <div class="col-lg-12">
                <div class="mb-5">
                    <?php echo e(Form::label('privacy_policy', __('messages.vcard.privacy_policy').':', ['class' => 'form-label'])); ?>

                    <div id="privacyPolicyId" class="editor-height" style="height: 200px"></div>
                    <?php echo e(Form::hidden('privacy_policy', null, ['id' => 'privacyData'])); ?>

                </div>
            </div>
            
            <?php echo e(Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3'])); ?>

            <?php echo e(Form::close()); ?>

        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('settings.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maystudi/cardlyn.com/resources/views/settings/terms-conditions.blade.php ENDPATH**/ ?>