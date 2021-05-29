<?php $__env->startSection('title'); ?>
    Dashboard | HTG EIS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div>
  
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Office List </h4>
         </div>

        <div class="col-md-5 align="left">
          <a href="<?php echo e(url('dynamic_pdf/pdf')); ?>" class="btn btn-danger">Convert into PDF </a>

          
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-stripped">
              <thead class=" text-primary">
                <th class="w-10p">ID</th>
                <th class="w-10p">Name</th>
                <th class="w-10p">Location</th>
                <th class="w-10p">Group ID</th>
              </thead>
              <tbody>
                
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($field->id); ?></td>
                  <td><?php echo e($field->name); ?></td>

                  <td>
                    <div style="height: 30px overflow:hidden;">
                      <?php echo e($field->location); ?>

                    </div>
                  </td>
                  <td><?php echo e($field->grpid); ?></td>
                </tr>   
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/officeview.blade.php ENDPATH**/ ?>