<?php

namespace App\Controllers\Partials;

trait RecentProcesses { 
  public function processes() {
    return collect(get_posts([
      'post_type' => 'process',
      'posts_per_page' => 5,
      'meta_key' => 'process_order',
      'orderby' => 'meta_value',
      'order' => 'ASC'
    ]))->map(function($process) {
      return (object) [
        'image_url' => get_the_post_thumbnail_url($process),
        'title' => get_the_title($process),
        'text' => get_field('process_text', $process->ID)
      ];
    });
  }
}




    