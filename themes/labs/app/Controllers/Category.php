<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Category extends Controller {
  // Global
  protected $acf = true;
  
  public function category_projects() {
    $category = get_queried_object();
    $category_id = $category->cat_ID;
  
    return collect(get_posts([
      'category' => $category_id,
      'post_type' => 'project',
      'posts_per_page' => 5,
    ]))->map(function ($project) {
      return (object) [
        'image_url' => get_the_post_thumbnail_url($project),
        'inverted_image_url' => get_field('inverted_image', $project->ID)[url],
        'title' => get_the_title($project),
        'category_name' => get_the_category($project->ID)[0]->name,
        'category_url' => get_category_link(get_the_category($project->ID)[0]),
        'url' => get_permalink($project),
        'active' => get_field('is_this_project_active', $project->ID)
      ];
    });
  }

  public function category_object() {
    $category = get_queried_object();

    return(object) [
      'category_name' => get_cat_name($category->cat_ID),
      'category_description' => category_description()
    ];
  }
}