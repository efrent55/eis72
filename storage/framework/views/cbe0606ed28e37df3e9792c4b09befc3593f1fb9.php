<?php $__env->startSection('title'); ?>
    Equipment Edit | HTG EIS
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-header">
            <h4 class="card-title"> Equipment Info - Edit Data </h4>

            <form action="<?php echo e(url('update-equipment/'.$equipment->id)); ?>" method="POST">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

                        
                <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Serial Nr:</label>
                      <input type="text" name="serialnr" class="form-control" value="<?php echo e($equipment->serialnr); ?>" >

                    </div>
        
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Description:</label>
                        <input type="text" name="description" class="form-control" value="<?php echo e($equipment->description); ?>" >
                      </div>
                    
                     <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dt Acquired:</label>
                        <input type="text" name="dt_acquired" class="form-control" value="<?php echo e($equipment->dt_acquired); ?>">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Unit Measure:</label>
                        <input type="text" name="unitmeasure" class="form-control" value="<?php echo e($equipment->unitmeasure); ?>">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Unit Value:</label>
                        <input type="text" name="unitvalue" class="form-control" value="<?php echo e($equipment->unitvalue); ?>">
                      </div>

                      
                      <div class="form-group">
                        <label>Status</label>
                        <select name="equipstatid" class="form-control">
                            <option value="Serviceable">Serviceable</option>
                            <option value="UnServiceable">UnServiceable</option>
                            <option value="Turned-In">Turned-In</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Classification:</label>
                        <input type="text" name="equipclassid" class="form-control" value="<?php echo e($equipment->equipclassid); ?>">
                      </div>


                </div>
        
                <div class="modal-footer">
                  <a href="<?php echo e(url('equipmentmgt')); ?>" class="btn btn-secondary">BACK</a>
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
        
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/equipment/edit.blade.php ENDPATH**/ ?>