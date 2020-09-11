<article <?php post_class() ?>>
  <?php echo $__env->make('partials.main-content-single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <ul>
    <?php echo $__env->make('partials.related-projects', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </ul>

  <footer>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </footer>
  <?php comments_template('/partials/comments.blade.php') ?>
</article>
