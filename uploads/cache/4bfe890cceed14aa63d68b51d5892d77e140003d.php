<article <?php post_class() ?>>
  <?php echo $__env->make('partials.main-content-single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   <div class="wrapper--projects">
    <?php if(count($related_projects) > 0): ?>
      <h4 class="underline">Related Projects</h4>
    <?php endif; ?>
    <ul class="projects">
      <?php $__currentLoopData = $related_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.project-in-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>

  <footer>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </footer>
</article>
