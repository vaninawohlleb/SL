<?php

namespace App\Controllers\Partials;

trait PrimaryCategory { 
  public function primary_category() {
    $categories = get_the_category(get_the_ID());

    return $categories[0];
  }

  public function primary_category_link() {
    $categories = get_the_category(get_the_ID());

    return get_category_link($categories[0]);
  }
}




    