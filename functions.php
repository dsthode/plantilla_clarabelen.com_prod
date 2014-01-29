<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	register_nav_menu( 'secondary-menu', __( 'Secondary Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, true);
add_image_size('post_list_thumbnail', 400, 400, true);
add_image_size('post_destacado_thumbnail', 200, 200, true);

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Primary',
		'id' => 'primary',
		'description' => 'Barra lateral',
		'before_title' => '<h5 class="widget-label">', 
		'after_title' => '</h5>', 
		'before_widget' => '<div class="sidebar-widget">', 
		'after_widget' => '</div>'));


//Code for custom background support
add_custom_background();


//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// allow custom logo image to be added from admin
function themeslug_theme_customizer( $wp_customize ) {
$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'themeslug_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );

}
add_action('customize_register', 'themeslug_theme_customizer');

// Add Featured Image to Post
function image_to_thumbnail($post_id, $image_url) {
	$upload_dir = wp_upload_dir(); // Set upload folder
	$image_data = file_get_contents($image_url); // Get image data
	$filename   = basename($image_url); // Create image file name

	// Check folder permission and define file location
	if( wp_mkdir_p( $upload_dir['path'] ) ) {
			$file = $upload_dir['path'] . '/' . $filename;
	} else {
			$file = $upload_dir['basedir'] . '/' . $filename;
	}

	// Create the image  file on the server
	file_put_contents( $file, $image_data );

	// Check image file type
	$wp_filetype = wp_check_filetype( $filename, null );

	// Set attachment data
	$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title'     => sanitize_file_name( $filename ),
			'post_content'   => '',
			'post_status'    => 'inherit'
	);

	// Create the attachment
	$attach_id = wp_insert_attachment( $attachment, $file, $post_id );

	// Include image.php
	require_once(ABSPATH . 'wp-admin/includes/image.php');

	// Define attachment metadata
	$attach_data = wp_generate_attachment_metadata( $attach_id, $file );

	// Assign metadata to attachment
	wp_update_attachment_metadata( $attach_id, $attach_data );

	// And finally assign featured image to post
	set_post_thumbnail( $post_id, $attach_id );
}

$query_procesar = $_GET['procesar'];
if (!empty($query_procesar)) {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'post',
		'meta_key' => 'image'
	);

	$query = new WP_Query($args);

	while ($query->have_posts()) : $query->the_post();
		$curImage = get_post_meta($post->ID, 'image', true);
		$curThumbnail = get_post_meta($post->ID, '_thumbnail_id', true);
		if (!empty($curImage) && empty($curThumbnail)) {
			image_to_thumbnail($post->ID, $curImage);
		}
	endwhile;
}

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>
