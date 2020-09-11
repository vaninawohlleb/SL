<?php

namespace App\Controllers\Partials;

trait PrimaryCategory { 
  public function primary_category() {
    $categories = get_the_category(get_the_ID());
  
    return $categories[0]->name;
  }
}




    