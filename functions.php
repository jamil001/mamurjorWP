<?php 

function mamurjor_dev(){
	load_theme_textdomain( "mamurjor" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	$mamurjor_custom_header = array(
		'header-text'        => true,
		'default-text-color' => '#elelel',
		'width'              => 1200,
		'height'             => 600,
		'flex-height'        => true,
		'flex-width'         => true,

	);
	add_theme_support( "custom-header", $mamurjor_custom_header );
	$mamurjor_custom_logo = array(
		'width'     => '100',
		'height'    => '100'    
	);
	add_theme_support( "custom-logo",$mamurjor_custom_logo );

	register_nav_menu( "topmenu", __("Top Menu","mamurjor") );
}
add_action( "after_setup_theme", "mamurjor_dev" );

function mamurjor_script(){
	wp_enqueue_style( "mamurjor_text", "//fonts.googleapis.com/css?family=Nova+Mono");
	wp_enqueue_style( "mamurjor_boot", "//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
	wp_enqueue_style( "mamurjor_lightbox", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css");
	wp_enqueue_style( "mamurjor_style", get_stylesheet_uri());


	wp_enqueue_script( "mamurjor_lightbox", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js", array("jquery"), "0.0.2", true);
	wp_enqueue_script( "mamurjor-mainjs", get_theme_file_uri( ).'/assets/js/main.js', null, "0.0.1", true );

}
add_action( "wp_enqueue_scripts", "mamurjor_script" );


function mamurjor_sidebar(){
	/**
	  * Creates a sidebar
	  * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	  */
	register_sidebar( array(
	 	'name'          => __( 'right sidebar', 'mamurjor' ),
	 	'id'            => 'sidebar1',
	 	'description'   => __( 'this is right sidebar', 'mamurjor' ),
	 	'class'         => '',
	 	'before_widget' => '<ul>',
	 	'after_widget'  => '</ul>',
	 	'before_title'  => '<h2>',
	 	'after_title'   => '</h2>',
	 ) );

	  register_sidebar( array(
	 	'name'          => __( 'footer are sidebar', 'mamurjor' ),
	 	'id'            => 'footer',
	 	'description'   => __( 'this is footer are sidebar', 'mamurjor' ),
	 	'class'         => '',
	 	'before_widget' => '',
	 	'after_widget'  => '',
	 	'before_title'  => '',
	 	'after_title'   => '',
	 ) );
	  
}
add_action( "widgets_init", "mamurjor_sidebar") ;



function mamurjor_excerpt($amar_excerpt){
	if (!post_password_required()) {
		return $amar_excerpt;
	} else {
		echo get_the_password_form();
	
}
}
add_filter( "the_excerpt", "mamurjor_excerpt");

function mamurjor_pro_title(){
	return "Locked   --%s";
}
add_filter( "protected_title_format", "mamurjor_pro_title");


function mamurjor_header(){
	if (is_front_page()) {
		if (current_theme_supports("custom-header")) {
			?>
				
				<style>
					#header-wrapper{
						background-image: url(<?php echo header_image(); ?>);
						background-size: cover;
					}

					#header #logo h1 a ,p{
						color: #<?php echo get_header_textcolor(); ?>;
						<?php if (!display_header_text()) {
							echo "display:none";
						} ?>
					}

				</style>


			<?php
		} 
		
	} 
	
}
add_action( "wp_head", "mamurjor_header");