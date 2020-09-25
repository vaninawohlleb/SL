<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <div class="logo">
        <a href="<?php echo e(get_site_url()); ?>">
          <?php if(is_home() || is_single()): ?>
            <img src="<?= App\asset_path('images/logo-white.png'); ?>" />
          <?php else: ?>
            <img src="<?= App\asset_path('images/logo-black.png'); ?>" />
          <?php endif; ?>
        </a>
      </div>
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
