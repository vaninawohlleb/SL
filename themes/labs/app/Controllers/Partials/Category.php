<?php

namespace App\Controllers\Partials;

trait Category { 
  public function primary_category() {
    $categories = get_the_category(get_the_ID());
  
    return $categories[0]->name;
  }

  public function categories() {

    $args = array (
      'taxonomy' => 'category'
    );

    $categories = get_categories($args);
    
    return $categories;
  }
}




    