<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="wrapper--features">
    <?php $__currentLoopData = $feature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->make('partials.feature', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php if($loop->index = 1): ?>
        <?php break; ?>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    <div class="wrapper--feature-slider">
      <h4 class="underline">Active Projects</h4>
      <ul class="slider-projects">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($project->active === 'yes'): ?>
            <?php echo $__env->make('partials.project-in-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php if($loop->index == 3): ?>
              <?php break; ?>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      <div class="nav">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($project->active === 'yes'): ?>
            <span class="dot">&#8226</span>
            <?php if($loop->index == 3): ?>
              <?php break; ?>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>

  <div class="wrapper--processes">
    <ul class="processes">
      <?php $__currentLoopData = $processes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $process): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.process-in-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>

  <div class="wrapper--projects">
    <ul class="projects">
      <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.project-in-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if($loop->index == 3): ?>
          <?php break; ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>

  <div class="wrapper--team">
    <h4 class="underline">Our Team</h4>
    <ul class="team">
      <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.member-in-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if($loop->index == 3): ?>
          <?php break; ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>

  <div class="wrapper--opportunities">
    <ul class="opportunities">
      <?php $__currentLoopData = $opportunities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opportunity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.opportunity-in-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <!-- Make this dynamic -->
    <div class="opportunities__info">
      <h3 class="title">Join Us Today</h3>
      <p>Reach out to info@significancelabs.org, with your resume and cover letter.<p>
    </div>
  </div>

  <div class="wrapper--products-sl">
    <div class="products-sl__heading">
      <h4 class="underline">Products We Built</h4>
    </div>
    <ul class="products">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.product-in-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
    
  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>