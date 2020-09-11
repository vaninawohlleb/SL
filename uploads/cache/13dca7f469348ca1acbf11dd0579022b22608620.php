<?php $__currentLoopData = $related_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li>
    <h3><?php echo e($post->title); ?></h3>
  </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>