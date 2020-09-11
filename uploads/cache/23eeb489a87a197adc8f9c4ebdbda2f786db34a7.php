<li class="project-sl">
  <div class="project__info">
    <div class="info__category">
      <img class="info__img" src="<?php echo e($project->image_url); ?>" />
      <h4><?php echo e($project->category_name); ?></h4>
    </div>
    <div class="info__title">
      <a href="<?php echo e($project->url); ?>">
        <h3><?php echo e($project->title); ?></h3>
      </a>
    </div>
  </div>
</li>
  