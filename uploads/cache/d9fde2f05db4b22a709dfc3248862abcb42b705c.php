<li class="opportunity">
  <div class="opportunity__image">
    <img src="<?php echo e($opportunity->image_url); ?>" />
  </div>
  <div class="opportunity__text">
    <h4 class="underline"><?php echo e($opportunity->title); ?></h4>
    <p><?php echo e($opportunity->description); ?></p>
  </div>
</li>
  