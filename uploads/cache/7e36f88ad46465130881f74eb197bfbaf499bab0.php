<?php if($feature->homepage_section === 'heading'): ?>
  <div class="feature">
    <h1><?php echo e($feature->title); ?></h1>
    <h2><?php echo $feature->content; ?></h2>
    <ul class="links">
      <li>
        <a href="<?php echo e($feature->link_1_url); ?>">
          <h3><?php echo e($feature->link_1_text); ?></h3>
        </a>
      </li>
      <li>
        <a href="<?php echo e($feature->link_2_url); ?>">
          <h3><?php echo e($feature->link_2_text); ?></h3>
        </a>
      </li>
    </ul>
  </div>
<?php else: ?>
  <div class="feature--small">
    <h3><?php echo e($feature->title); ?></h3>
    <p><?php echo $feature->content; ?></p>
  </div>
<?php endif; ?>
  