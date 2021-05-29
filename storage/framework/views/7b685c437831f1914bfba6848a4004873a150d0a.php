<?php $__env->startSection('title'); ?>
    Equipment Information Management | HTG EIS
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Equipment</h5>
          <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
          
          
    </div>

    <form action="/save-equipmentmgt" method="POST">

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Serial Nr:</label>
              <input type="text" name="serialnr" class="form-control" id="recipient-name">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Description:</label>
                <input type="text" name="description" class="form-control" id="recipient-name">
              </div>
            
             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Date Acquired:</label>
                <input type="text" name="dt_acquired" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Unit Measure:</label>
                <input type="text" name="unitmeasure" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Unit Value:</label>
                <input type="text" name="unitvalue" class="form-control" id="recipient-name">
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
                    <label class="col-form-label"><b class="pull-right">Classification <i class="text-red" title="Required field">*</i></b></label>
                    <select class="form-control select2" name="equipclassid" required>
                        <option value="" selected disabled>- Select -</option>
                        <?php $__currentLoopData = $classifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($keyword->id); ?>"><?php echo e($keyword->classification); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
              </div>
              

        </div>

        <div class="modal-footer">
          <a href="/equipmentmgt" class="btn btn-danger">Close</a>
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
          <h4 class="card-title"> Equipment Management 
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
                <th class="w-10p">Serial Nr</th>
                <th class="w-10p">Description</th>
                <th class="w-10p">Dt Acquired</th>
                <th class="w-10p">EDIT</th>
                <th class="w-10p">DELETE</th>
              </thead>
              <tbody>
                
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($field->id); ?></td>
                  <td><?php echo e($field->serialnr); ?></td>
                  <td><?php echo e($field->description); ?></td>
                  <td><?php echo e($field->dt_acquired); ?></td>

                  <td>
                    <a href="/edit-equipment/<?php echo e($field->id); ?>" class="btn-success">EDIT</a>
                  </td>

                  <td>
                    <form action = "delete-equipment/<?php echo e($field->id); ?>" method="POST">
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('DELETE')); ?>

                    
                      <button type="submit" class="btn btn-danger">DELETE</button>
                    </form> 
                  </td>

                  <td>
                    
                    <a href="/view-qr/<?php echo e($field->serialnr); ?>" class="btn-success">Qr Code</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/equipmentmgt.blade.php ENDPATH**/ ?>