<?php
/**
* The template for displaying the footer.
*
* @package Salient WordPress Theme
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nectar_options = get_nectar_theme_options();
$header_format  = ( !empty($nectar_options['header_format']) ) ? $nectar_options['header_format'] : 'default';

?>

<div id="footer-outer" <?php nectar_footer_attributes(); ?>>
	<section class="donate">
		<a href="https://giving.massgeneral.org/donate/?re_fund=281410&donation_designated=Y&donation_designation=Dr.%20Shuhan%20He%27s%20Significance%20Lab" target="_blank">
			<svg height="180" width="180">
				<circle class="circle" cx="100" cy="100" r="90" stroke-width="1" />
			</svg>
			<svg>
				<circle class="circle" cx="100" cy="100" r="83" stroke-width="1" />
			</svg>
			<svg>
				<circle class="circle" cx="100" cy="100" r="92" stroke-width="1" />
			</svg>
			<svg>
				<circle class="circle" cx="100" cy="100" r="78" stroke-width="1" />
			</svg>
			<svg>
				<circle class="circle" cx="100" cy="100" r="75" stroke-width="1" />
			</svg>
			<h6>Donate to Scientific Labs</h6>
		</a>
	</section>

	<?php
	
	get_template_part( 'includes/partials/footer/call-to-action' );
	
	get_template_part( 'includes/partials/footer/main-widgets' );
	
	get_template_part( 'includes/partials/footer/copyright-bar' );
	
	?>
	
</div><!--/footer-outer-->

<?php

nectar_hook_before_outer_wrap_close();

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>

</div> <!--/ajax-content-wrap-->

<?php
	
	// Boxed theme option closing div.
	if ( ! empty( $nectar_options['boxed_layout'] ) && 
	'1' === $nectar_options['boxed_layout'] && 
	'left-header' !== $header_format ) {

		echo '</div><!--/boxed closing div-->'; 
	}
	
	get_template_part( 'includes/partials/footer/back-to-top' );
	get_template_part( 'includes/partials/footer/body-border' );
	
	nectar_hook_after_wp_footer();
	nectar_hook_before_body_close();
	
	wp_footer();
?>
</body>
</html>