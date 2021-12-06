<?php



// skapar funktioner för att hämta stylesheets, scripts m.m.

add_theme_support( 'post-thumbnails' );

function load_stylesheets() {

wp_enqueue_style('style', get_stylesheet_uri()); //behöver ej ange säkväg eller ordning här, default i

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function register_my_menus() {

register_nav_menus(

 array(
 'header-menu' => __( 'Header Menu' ),
'extra-menu' => __( 'Extra Menu' )
)
);
}
add_action( 'init', 'register_my_menus' );

function register_my_footermenus() {

	register_nav_menus(
	
	 array(
	 'footer-menu' => __( 'Footer Menu' ),
	'extras-menu' => __( 'Extras Menu' )
	)
	);
	}
	add_action( 'init', 'register_my_footermenus' );

	//registrerar två sidebars
	function local_register_sidebars() {

        register_sidebar(
        array(
        'id' => 'primary',
        'name' => __( 'Primary Sidebar' ),
        'description' => __( 'Sidebar.' ),
        'before_widget' => '<div id="" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
        )
        );
		register_sidebar(
			array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'description' => __( 'Sidebar.' ),
			'before_widget' => '<div id="" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
			)
			);
			register_sidebar(
				array(
				'id' => 'footer1',
				'name' => __( 'footer1 Sidebar' ),
				'description' => __( 'Sidebar.' ),
				'before_widget' => '<div id="" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widgettitle">',
				'after_title' => '</h3>',
				)
				);
				register_sidebar(
					array(
					'id' => 'footer2',
					'name' => __( 'footer2 Sidebar' ),
					'description' => __( 'Sidebar.' ),
					'before_widget' => '<div id="" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widgettitle">',
					'after_title' => '</h3>',
					)
					);
					
    }
      
	   add_action( 'widgets_init','local_register_sidebars');
	   
	   function be_dps_links_new_window( $output ) {
		$output = str_replace( 'href="', 'target="_blank" href="', $output );
		return $output;
	}
	add_filter( 'display_posts_shortcode_output', 'be_dps_links_new_window' );
	 
	   
	  
	   function custom_google_fonts() {
	   wp_enqueue_style( 'custom-font', "//fonts.googleapis.com/css?family=Open+Sans");
	   }
	   add_action( 'wp_enqueue_scripts', 'custom_google_fonts' );

	  
function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.css' );

 wp_enqueue_style( 'style-css', get_template_directory_uri() . 'css/style.css' );
 wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
// wp_enqueue_script(
// 'bootstrap-js',
// get_template_directory_uri() . '/js/bootstrap.min.js',
// array(),
// '3.0.0',
// true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
?>