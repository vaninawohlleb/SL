<li class="product">
  <div class="product__bordered">
    <div class="product__img">
      <img src="<?php echo e($product->image_url); ?>" />
    </div>
    <div class="product__info">
      <h5><?php echo e($product->title); ?></h5>
      <?php if($product->url): ?>
        <p>website:
          <a href="<?php echo e($product->url); ?>"><?php echo e($product->url); ?></a>
        </p>
      <?php endif; ?>
      <p><?php echo $product->text; ?></p>
    </div>
  </div>
</li>
  