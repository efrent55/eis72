<?php $__env->startSection('content'); ?>
<h1>Customer List</h1>
<a href="<?php echo e(URL::to('/customers/pdf')); ?>">Export PDF</a>

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
        <td><?php echo e($customer->grpid); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/customerview.blade.php ENDPATH**/ ?>