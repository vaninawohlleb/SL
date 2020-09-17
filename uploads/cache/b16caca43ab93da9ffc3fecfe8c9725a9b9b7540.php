<li class="project <?php echo e($project->active === yes ? 'active' : null); ?>">
  <?php if($project->active === 'yes'): ?>
    <p class="project__active">active project</p>
  <?php endif; ?>
  <div class="project__info">
    <div class="info__category">
      <?php if($project->active === 'no'): ?>
        <img src="<?php echo e($project->image_url); ?>" />
      <?php elseif($project->active === 'yes'): ?>
        <img src="<?php echo e($project->inverted_image_url); ?>" />
      <?php endif; ?>

      <a href="<?php echo e($project->category_url); ?>">
        <h4><?php echo e($project->category_name); ?></h4>
      </a>
      
    </div>
    <div class="info__title">
      <h3><?php echo e($project->title); ?></h3>
    </div>
    <a class="arrow" href="<?php echo e($project->url); ?>">
      <svg width="100" height="37" viewBox="0 0 100 37" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M81.579 4.19171L95.8263 18.5001L81.579 32.8086L77.858 29.0716L85.7527 21.143L0 21.1428V15.8573H85.7527L77.858 7.92871L81.579 4.19171Z" fill="fill-current"/>
      </svg>
    </a>
  </div>
</li>
  