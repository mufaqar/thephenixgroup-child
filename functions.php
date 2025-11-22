<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );
function free_analysis_buttons_shortcode() {
    ob_start(); ?>
    <style>
        .toggle-wrapper.nav-toggle-wrapper.has-expanded-menu {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 50px;
        }
        .fGmyhD:hover {
            text-decoration: none;
        }
    </style>
    <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu 123">
        <button class="freeAnalysis__Button-sc-4jhjgm-1 fGmyhD" data-target="#myModal" data-toggle="modal">
            Free Analysis 01
        </button>
        <a href="tel:9726306112" class="freeAnalysis__FreeButton-sc-4jhjgm-0 cNcMyS">
            Call Now
        </a>
    </div>

    <?php return ob_get_clean();
}
add_shortcode('free_analysis_buttons', 'free_analysis_buttons_shortcode');



function our_serices_shortcode() {
    ob_start(); ?>
    <?php echo do_shortcode('[elementor-template id="6978"]'); ?>
    <?php return ob_get_clean();
}
add_shortcode('our_services', 'our_serices_shortcode');

function show_location_shortcode() {
    return get_post_meta(get_the_ID(), 'location', true );
}
add_shortcode('location_name', 'show_location_shortcode');


