<?php $__env->startSection('title'); ?>
    Office Mgt | HTG EIS
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Office</h5>
          <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
          
          
    </div>

    <form action="/save-officemgt" method="POST">

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" name="name" class="form-control" id="recipient-name">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Location:</label>
                <input type="text" name="location" class="form-control" id="recipient-name">
              </div>
            
             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Group ID:</label>
                <input type="text" name="grpid" class="form-control" id="recipient-name">
              </div>
        </div>

        <div class="modal-footer">
          <a href="/officemgt" class="btn btn-danger">Close</a>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>


    </form>
        
      </div>
    </div>
  </div>
  


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Office Management 
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal2" >View List</button>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >   ADD   </button>         
          </h4>
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
        </div>
        <style>
          .w-10p{
            width: 10% !important;
          }
        </style>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table">
              <thead class=" text-primary">
                <th class="w-10p">ID</th>
                <th class="w-10p">Name</th>
                <th class="w-10p">Location</th>
                <th class="w-10p">Group ID</th>
                <th class="w-10p">EDIT</th>
                <th class="w-10p">DELETE</th>
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
                  <td>
                    <a href="/edit-office/<?php echo e($field->id); ?>" class="btn-success">EDIT</a>
                  </td>

                  <td>
                    <form action = "delete-office/<?php echo e($field->id); ?>" method="POST">
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

  <!-- Script from .net Efren -->
  <script>
      $(document).ready( function () {
      $('#datatable').DataTable();
        } );

  </script>

  <!--- End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/officemgt.blade.php ENDPATH**/ ?>