<?php

namespace App\Controllers\Partials;

trait RecentProjects { 
  public function projects() {
    return collect(get_posts([
      'post_type' => 'project'
    ]))->map(function($project) {
      return (object) [
        'image_url' => get_the_post_thumbnail_url($project),
        'inverted_image_url' => get_field('inverted_image', $project->ID)[url],
        'title' => get_the_title($project),
        'category_name' => get_the_category($project->ID)[0]->name,
        'url' => get_permalink($project),
        'active' => get_field('is_this_project_active', $project->ID),
        'category_url' => get_category_link(get_the_category($project->ID)[0]),
      ];
    });
  }
}




    