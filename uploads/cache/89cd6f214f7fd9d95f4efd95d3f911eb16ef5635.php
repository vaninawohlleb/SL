<div class="wrapper--single">
  <div class="project--header feature">
    <hgroup>
      <a href="<?php echo e($primary_category_link); ?>">
        <p><?php echo e($primary_category->name); ?></p>
      </a>
      <h2 class="entry-title"><?php echo get_the_title(); ?></h2>
      <!-- <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
    </hgroup>

    <p><?php echo $summary; ?></p>
    <h6><?php echo e($authors); ?></h6>
    <h6><?php echo e($meta_information); ?><h6>

    <h3><a class="read-more" href="<?php echo e($link_to_paper ?? null); ?>" target="_blank">
      Read the Research
    </a></h3>
  </div>

  <ul class="project--extra">
    <h3>Key Findings</h3>
    <li class="findings"><?php echo e($key_finding_1); ?></li>
    <li class="findings"><?php echo e($key_finding_2); ?></li>
    <li class="findings"><?php echo e($key_finding_3); ?></li>
    <li class="findings"><?php echo e($key_finding_4); ?></li>
  </ul>
</div>