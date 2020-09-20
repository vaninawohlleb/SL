<footer class="content-info">
  <div class="container">
        <section class="donate">
      <a href="https://giving.massgeneral.org/donate/?re_fund=281410&donation_designated=Y&donation_designation=Dr.%20Shuhan%20He%27s%20Significance%20Lab" target="_blank">
        <svg height="180" width="180">
          <circle class="circle" cx="100" cy="100" r="90" stroke-width="1" />
        </svg>
        <svg>
          <circle class="circle" cx="100" cy="100" r="83" stroke-width="1" />
        </svg>
        <svg>
          <circle class="circle" cx="100" cy="100" r="92" stroke-width="1" />
        </svg>
        <svg>
          <circle class="circle" cx="100" cy="100" r="78" stroke-width="1" />
        </svg>
        <svg>
          <circle class="circle" cx="100" cy="100" r="75" stroke-width="1" />
        </svg>
        <h6>Donate to Scientific Labs</h6>
      </a>
    </section>

    <?php dynamic_sidebar('sidebar-footer') ?>

    <section class="company">
      
      <div class="logo">
        <a href="<?php echo e(get_site_url()); ?>">
          <img src="<?= App\asset_path('images/logo-black.png'); ?>" />
        </a>
      </div>
    </section>
  </div>
</footer>
