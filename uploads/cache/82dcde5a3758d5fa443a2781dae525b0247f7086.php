  <li class="team-member">
    <div class="team-member__img">
      <img src="<?php echo e($member->image_url); ?>" />
    </div>
    <div class="team-member__info">
      <h6><?php echo e($member->title); ?></h6>
      <p class="team-member__meta">
        <img src="<?= App\asset_path('images/business-title.svg'); ?>" />
        <?php echo e($member->business_title); ?>

      </p>
      <p class="team-member__meta">
        <img src="<?= App\asset_path('images/email.svg'); ?>" />
        <?php echo e($member->email); ?>

      </p>
    </div>
    <?php if(!is_home()): ?>
      <div class="team-member__bio">
        <?php echo $member->content; ?>

      </div>
    <?php endif; ?>
  </li>
  