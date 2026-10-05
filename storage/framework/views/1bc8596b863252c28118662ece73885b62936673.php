<div class="modal fade" tabindex="-1" role="dialog" id="editSubscriptionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo e(__('messages.edit_subscription')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id' => 'editSubscriptionForm'])); ?>

            <?php echo e(Form::text('id',null,['hidden'])); ?>

            <div class="modal-body">
                <?php echo e(Form::hidden('id',null,['id'=>'SubscriptionId'])); ?>

                <div>
                    <?php echo e(Form::label('End date',__('messages.subscription.end_date').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('end_date', null, ['class' => 'form-control bg-white', 'required', 'id'=>'EndDate', 'autocomplete' =>'off'])); ?>

                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0'])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                data-bs-dismiss="modal"><?php echo e(__('messages.common.discard')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/sadmin/subscriptionPlan/edit_modal.blade.php ENDPATH**/ ?>