<?php

namespace App\Controllers\Partials;

trait RecentOpportunities { 
  public function opportunities() {
    return collect(get_posts([
      'post_type' => 'opportunity',
      'posts_per_page' => 3,
    ]))->map(function($opportunity) {
      return (object) [
        'image_url' => get_the_post_thumbnail_url($opportunity),
        'title' => get_the_title($opportunity),
        'description' => get_field('description', $opportunity->ID)
      ];
    });
  }
}




    