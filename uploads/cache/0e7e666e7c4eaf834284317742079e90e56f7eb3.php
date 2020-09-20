<article <?php post_class() ?>>
  <div class="wrapper--single post">
    <div class="post--header feature">
      <h2><?php echo get_the_title(); ?></h2>
      <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <p><?php echo e(the_excerpt()); ?></p>
    </div>
    
    <div class="feature--img">
      <img src="<?php echo e(get_the_post_thumbnail_url()); ?>" />
    </div>
  </div>

  <div class="post--content">
    <?php the_content() ?>
  </div>
</article>
