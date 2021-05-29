<?php $__env->startSection('title'); ?>
    Equipment Transaction | HTG EIS
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
          <h5 class="card-title"> Personal Transactions  
            <a href="#" class="btn btn-primary float-right" role="button">Turn-In</a>
            <a href="/load-issuancetran" class="btn btn-success float-right" role="button">Issue Equipment</a>
                  
            
        </h5>
          <h5> Name of Borrower 
            
          </h5>
       
          
          
          
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
            
        <div>
          <button type="button" class="btn btn-success">Issued <span class="badge">7</span></button>
          <button type="button" class="btn btn-warning">Turn-in <span class="badge">1</span></button>
          <button type="button" class="btn btn-danger">Incident <span class="badge">0</span></button>

        </div>
            
          <div class="table-responsive">
            <table id="datatable" class="table">
              <thead class=" text-primary">
                <th class="w-10p">Serial Nr</th>
                <th class="w-10p">Description</th>
                <th class="w-10p">AFPSN</th>
                <th class="w-10p">TRANSACTION</th>
              </thead>
              <tbody>
                
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($field->serialnr); ?></td>
                  <td><?php echo e($field->description); ?></td>
                  <td><?php echo e($field->sn); ?></td

                 
                              
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/transaction/personalview.blade.php ENDPATH**/ ?>