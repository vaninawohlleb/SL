<div class="entry-content">
  <hgroup>
    <p><?php echo e($primary_category); ?></p>
    <h2 class="entry-title"><?php echo get_the_title(); ?></h2>
    <!-- <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
  </hgroup>

  <h4><?php echo $summary; ?></h4>
  <h4><?php echo e($authors); ?></h4>
  <p><?php echo e($meta_information); ?><p>

  <ul>
    <li><?php echo e($key_finding_1); ?></li>
    <li><?php echo e($key_finding_2); ?></li>
    <li><?php echo e($key_finding_3); ?></li>
    <li?><?php echo e($key_finding_4); ?></li>
  </ul>
  
  <a href="<?php echo e($link_to_paper ?? null); ?>" target="_blank"><h3>Read the Research</h3></a>
</div>