<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', false, '4.1.3', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('fontawesome5-css', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', false, '5.4.1', null);
		wp_enqueue_style('fontawesome5-css');

		wp_register_style('wp-dpc-css', get_template_directory_uri() . '/theme/css/wp-dpc.css', false, null);
		wp_enqueue_style('wp-dpc-css');

		wp_register_style('webfont-poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' , false, null);
		wp_enqueue_style('webfont-poppins');

		wp_register_style('webfont-playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' , false, null);
		wp_enqueue_style('webfont-playfair');


		// Scripts

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '1.14.3', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js', false, '4.1.3', true);
		wp_enqueue_script('bootstrap-js');

		wp_register_script('wp-dpc-js', get_template_directory_uri() . '/theme/js/wp-dpc.js', false, null, true);
		wp_enqueue_script('wp-dpc-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
