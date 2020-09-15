<?php

namespace App\Controllers\Partials;

trait TeamMembers {
  // Get team members   
  public function team() {
    return collect(get_posts([
      'post_type' => 'team_member',
    ]))->map(function($member) {
      
      return (object) [
        'title' => get_the_title($member),
        'image_url' => get_the_post_thumbnail_url($member),
        'email' => get_field('email', $member->ID),
        'bio' => get_field('bio', $member->ID),
        'business_title' => get_field('business_title', $member->ID),
        'url' => get_permalink($member),
      ];
    });
  }
}




    