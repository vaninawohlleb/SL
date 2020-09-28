<?php
/**
* Default Post Format Template 
*
* Used when "Minimal" standard style is selected.
*
* @version 11.0
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post;
global $nectar_options;

$use_excerpt = ( ! empty( $nectar_options['blog_auto_excerpt'] ) && $nectar_options['blog_auto_excerpt'] === '1' ) ? 'true' : 'false';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
  
  <div class="inner-wrap animated">
    
    <div class="post-content">
            
      <div class="content-inner">

        <div class="article-content-wrap">
          
          <div class="post-header">

            <div class="image">
              <?php get_template_part( 'includes/partials/blog/styles/standard-minimal/post-image' ); ?>
            </div>

            <h3 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>

            <?php 
            if (!empty( $post->post_excerpt )) {
              echo '<div class="excerpt">';
              the_excerpt();
              echo '</div>';
            }

            ?>
          </div><!--/post-header-->
                    
        </div><!--article-content-wrap-->
        
      </div><!--content-inner-->
      
    </div><!--/post-content-->
    
  </div><!--/inner-wrap-->
  
</article>