<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {

  use Partials\PrimaryCategory;
  
  // Global
  protected $acf = true;
  
  public function related_projects() {
    $cat_ids = array();

    foreach (get_the_category(get_the_ID()) as $category):   
      array_push($cat_ids, $category->term_id);
    endforeach;

    return collect(get_posts([
      'category__in' => $cat_ids,
      'post__not_in' => array(get_the_ID()),
      'post_type' => 'project',
      'posts_per_page' => 5,
    ]))->map(function ($project) {
      return (object) [
        'image_url' => get_the_post_thumbnail_url($project),
        'title' => get_the_title($project),
        'category_name' => get_the_category(get_the_ID())[0]->name,
        'url' => get_permalink($project),
        'active' => get_field('is_this_project_active', $project->ID)
      ];
    });
  }
}