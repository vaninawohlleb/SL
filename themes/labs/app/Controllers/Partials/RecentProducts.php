<?php

namespace App\Controllers\Partials;

trait RecentProducts { 
  public function products() {
    return collect(get_posts([
      'post_type' => 'product',
      'posts_per_page' => 10,
    ]))->map(function($product) {
      return (object) [
        'image_url' => get_the_post_thumbnail_url($product),
        'title' => get_the_title($product),
        'url' => get_field('url', $product->ID),
        'text' => get_field('text', $product->ID)
      ];
    });
  }
}




    