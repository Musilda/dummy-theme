<?php
if ( ! function_exists( 'dummy_theme_setup' ) ){
	
	function dummy_theme_setup() {
	
		// Add theme supports
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		register_nav_menu( 'primary-menu', esc_html__( 'Primary Menu','theme' ) );


	}

}
add_action( 'after_setup_theme', 'dummy_theme_setup' );


function dummy_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'theme' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dummy_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dummy_theme_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'dummy-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ), '30122018', true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array( 'jquery' ), '30122018', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '30122018', true );
	
}
add_action( 'wp_enqueue_scripts', 'dummy_theme_scripts' );