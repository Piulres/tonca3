<?php

	/* Feature to add Option Menu - Admin */
	if( function_exists('acf_add_options_page') ) {
	    acf_add_options_page('Detalhes das Páginas');
	}

	/* Feature Excerpt */ 
	function get_excerpt(){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 250);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		$excerpt = $excerpt.'... <br><a href="'.get_the_permalink().'" class="btn btn-secondary button" >Saiba mais <i class="fas fa-arrow-right"></i></a>';
		return $excerpt;
	}

	/* Feature Thumbnail */
	add_theme_support( 'post-thumbnails' );

	/* Feature to hide updates from X plugin. */
	function filter_plugin_updates( $value ) {
		unset( $value->response['advanced-custom-fields-pro/acf.php'] );
		return $value;
	}
	add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
	remove_filter('acf_the_content', 'wpautop');

	/* Feature Menu */
	function wpb_custom_new_menu() {
	  register_nav_menus(
	    array(
	      'menu-superior' => __( 'Menu Superior' ),
	      'menu-inferior' => __( 'Menu Inferior' )
	    )
	  );
	}
	add_action( 'init', 'wpb_custom_new_menu' );

	/* Feature Pagination */
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');

	/* Feature to add class button in an Pagination item */
	function posts_link_attributes() {
	    return 'class="button"';
	}



	// Navwalker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


	
?>