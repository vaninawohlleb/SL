<?php $__currentLoopData = $related_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo $__env->make('partials.project-in-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>