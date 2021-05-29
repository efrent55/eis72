<h1>Customer List</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
      <th>GRPID</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($customer->id); ?></td>
        <td><?php echo e($customer->name); ?></td>
        <td><?php echo e($customer->location); ?></td>
        <td><?php echo e($customer->GRPID); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/pdf.blade.php ENDPATH**/ ?>