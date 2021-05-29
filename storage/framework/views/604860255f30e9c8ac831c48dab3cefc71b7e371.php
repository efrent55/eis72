<?php $__env->startSection('title'); ?>
    Registered Roles | HTG EIS
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Registered Roles</h4>
          
          <?php if(session('status')): ?>
              <div class="alert alert-success" role="alert">
                   <?php echo e(session('status')); ?>

              </div>
          <?php endif; ?>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>User Type</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                  <tr>
                    <td><?php echo e($row->id); ?></td>
                    <td><?php echo e($row->name); ?></td>
                    <td><?php echo e($row->phone); ?></td>
                    <td><?php echo e($row->email); ?></td>
                    <td><?php echo e($row->usertype); ?></td>
                    
                    <td>
                      <a href="/role-edit/<?php echo e($row->id); ?>" class="btn-success">EDIT</a>
                    </td>
                    <td>

                      <form action = "/role-delete/<?php echo e($row->id); ?>" method="post"> 
                          <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>

                          <button type="submit" class="btn btn-danger">DELETE</button>
                      </form>

                    </td>

                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/register.blade.php ENDPATH**/ ?>