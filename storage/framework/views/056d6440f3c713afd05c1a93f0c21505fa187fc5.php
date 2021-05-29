<?php $__env->startSection('title'); ?>
    Office Edit | HTG EIS
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-header">
            <h4 class="card-title"> Office - Edit Data </h4>

            <form action="<?php echo e(url('update-office/'.$offices->id)); ?>" method="POST">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

                        
                <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name:</label>
                      <input type="text" name="name" class="form-control" value="<?php echo e($offices->name); ?>" >

                    </div>
        
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Location:</label>
                        <input type="text" name="location" class="form-control" value="<?php echo e($offices-> location); ?>" >
                      </div>
                    
                     <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Group ID:</label>
                        <input type="text" name="grpid" class="form-control" value="<?php echo e($offices-> grpid); ?>">
                      </div>
                </div>
        
                <div class="modal-footer">
                  <a href="<?php echo e(url('officemgt')); ?>" class="btn btn-secondary">BACK</a>
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
        
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/office/edit.blade.php ENDPATH**/ ?>