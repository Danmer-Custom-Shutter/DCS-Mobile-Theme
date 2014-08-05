<?php


	function responsive_js() {
		$template_directory_uri = get_template_directory_uri();
		$stylesheet_directory_uri = get_stylesheet_directory_uri();

		// JS at the bottom for fast page loading.
		// except for Modernizr which enables HTML5 elements & feature detects.
		wp_enqueue_script( 'modernizr', $template_directory_uri . '/core/js/responsive-modernizr.min.js', array( 'jquery' ), '2.6.1', false );
		wp_enqueue_script( 'responsive-scripts', $stylesheet_directory_uri . '/core/js/responsive-scripts.min.js', array( 'jquery' ), '1.2.5', true );
		
		wp_enqueue_script( 'responsive-scripts', $stylesheet_directory_uri . '/core/js/responsive-scripts.min.js', array( 'jquery' ), '1.2.5', true );
		
		// simple-inheritance.min.js
		// wp_enqueue_script( 'simple-scripts', $stylesheet_directory_uri . '/core/js/simple-inheritance.min.js', array( 'jquery' ), '1.2.5', false );
		// wp_enqueue_script( 'photoswipe-scripts', $stylesheet_directory_uri . '/core/js/code-photoswipe-jQuery-1.0.11.min.js', array( 'jquery' ), '1.2.5', true );
		
		if ( ! wp_script_is( 'tribe-placeholder' ) ) {
			wp_enqueue_script( 'jquery-placeholder', $template_directory_uri . '/core/js/jquery.placeholder.min.js', array( 'jquery' ), '2.0.7', true );
		}
	}
	
	
if( !function_exists( 'responsive_post_meta_data' ) ) :

	function responsive_post_meta_data() {
	/*
	printf( __( '<span class="%1$s">Posted on </span>%2$s<span class="%3$s"> by </span>%4$s', 'responsive' ),
				'meta-prep meta-prep-author posted',
				sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="timestamp updated">%3$s</span></a>',
						 esc_url( get_permalink() ),
						 esc_attr( get_the_time() ),
						 esc_html( get_the_date() )
				),
				'byline',
				sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
						 get_author_posts_url( get_the_author_meta( 'ID' ) ),
						 sprintf( esc_attr__( 'View all posts by %s', 'responsive' ), get_the_author() ),
						 esc_attr( get_the_author() )
				)
		);
*/
	}
endif;	


add_image_size( 'page-thumbnail', 640, 190, true );

// add_image_size( 'product-thumbnail', 600, 460, true );

add_image_size( 'product-thumbnail', 300, 230, true );


function my_unregister_sidebars() {
	unregister_sidebar( 'main-sidebar' );
	unregister_sidebar( 'right-sidebar' );
	unregister_sidebar( 'left-sidebar' );
	unregister_sidebar( 'left-sidebar-half' );
	unregister_sidebar( 'right-sidebar-half' );
	unregister_sidebar( 'home-widget-1' );
	unregister_sidebar( 'home-widget-2' );
	unregister_sidebar( 'home-widget-3' );
	unregister_sidebar( 'gallery-widget' );
	unregister_sidebar( 'colophon-widget' );
	unregister_sidebar( 'top-widget' );
	unregister_sidebar( 'footer-widget' );
	
	register_sidebar( array(
						  'name'          => __( 'Find A Rep Widget', 'responsive' ),
						  'description'   => __( 'find a rep', 'responsive' ),
						  'id'            => 'find-a-rep-widget',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="grid col-300 %2$s"><div class="widget-wrapper">',
						  'after_widget'  => '</div></div>'
					  ) );

	// common-footer
	
	register_sidebar( array(
						  'name'          => __( 'Common Footer Widget', 'responsive' ),
						  'description'   => __( 'common footer', 'responsive' ),
						  'id'            => 'common-footer',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="grid col-300 %2$s"><div class="widget-wrapper">',
						  'after_widget'  => '</div></div>'
					  ) );

	register_sidebar( array(
						  'name'          => __( 'Landing Page Widget', 'responsive' ),
						  'description'   => __( 'landing page footer', 'responsive' ),
						  'id'            => 'landing-footer',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="grid col-300 %2$s"><div class="widget-wrapper">',
						  'after_widget'  => '</div></div>'
					  ) );
					  
	register_sidebar( array(
						  'name'          => __( 'Home Page Widget', 'responsive' ),
						  'description'   => __( 'home page footer', 'responsive' ),
						  'id'            => 'home-page-widget',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="grid col-300 %2$s"><div class="widget-wrapper">',
						  'after_widget'  => '</div></div>'
					  ) );					  

	
	
	register_nav_menus( array(
	'lead-form-menu' => 'Event Lead Form',
) );

}

//unregister sidebars by tying onto same hook again, with priority '11'
add_action( 'widgets_init', 'my_unregister_sidebars', 11 );




function _remove_script_version( $src ){
if( strpos( $src, 'google') ){
	return $src;
}
$parts = explode( '?', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 ); 


function return_true(){
	return true;
}

add_filter('taxonomy-images-disable-public-css', 'return_true');