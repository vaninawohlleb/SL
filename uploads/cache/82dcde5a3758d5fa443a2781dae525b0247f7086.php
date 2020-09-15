  <li class="team-member">
    <div class="team-member__img">
      <img src="<?php echo e($member->image_url); ?>" />
    </div>
    <div class="team-member__info">
      <h6><?php echo e($member->title); ?></h6>
      <p>Title: <?php echo e($member->business_title); ?></p>
      <p>Email: <?php echo e($member->email); ?></p>
    </div>
    <?php if(!is_home()): ?>
      <p class="team-member__bio">
        <?php echo $member->bio; ?>

      </p>
    <?php endif; ?>
  </li>
  