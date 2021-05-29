<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  </head>
<body>
  
  <h1>Office List</h1>
  <table>
    <thead> 
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>GRP ID</th>
      </tr>
    </thead>

  <tbody>
  

   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($field->id); ?></td>
         <td><?php echo e($field->name); ?></td>
         <td><?php echo e($field->location); ?></td>
         <td><?php echo e($field->grpid); ?></td>
        </tr>   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
  </table> 
 </body>
</body>
</html><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/pdf_view.blade.php ENDPATH**/ ?>