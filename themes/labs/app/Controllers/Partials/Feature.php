<?php

namespace App\Controllers\Partials;

trait Feature { 
  public function feature() {
    return collect(get_posts([
      'post_type' => 'feature',
      'posts_per_page' => 1,
    ]))->map(function($feature) {
      return (object) [
        'title' => get_the_title($feature),
        'link_1_url' => get_field('link_1_url', $feature->ID),
        'link_1_text' => get_field('link_1_text', $feature->ID),
        'link_2_text' => get_field('link_2_text', $feature->ID),
        'link_2_url' => get_field('link_2_url', $feature->ID),
        'content' => get_post_field('post_content', $feature->ID)
      ];
    });
  }
}




    