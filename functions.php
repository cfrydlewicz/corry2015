<?php

function theme_setup() {

	// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1440, 9999 ); // Unlimited height, soft crop

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu' )
	) );

	/* Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

}
add_action( 'after_setup_theme', 'theme_setup' );

function post_thumbnail() {

  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } else {
    echo '<img src="'.bloginfo('template_url').'/images/thumbnail-default.jpg" />';
  }

}

function post_date() {
	// Set up and print post meta information.
	printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}

function get_top_parent($cat){
  $curr_cat = get_category_parents($cat, false, '/' ,true);
  $curr_cat = explode('/',$curr_cat);
  $idObj = get_category_by_slug($curr_cat[0]);
  echo  $id = $idObj->term_id;
}

function get_post_thumbnail_url() { // requires $post to be initialized
  $thumbnail = '';
  if (function_exists('has_post_thumbnail')) {
    if ( has_post_thumbnail() ) {
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      echo $thumbnail[0];
    }
  }
}

add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
  if (is_single() ) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
      $classes[] = 'category-'.$category->category_nicename;
        $parent = $category->category_parent;
        if ( $parent != '' ) {
          $category = &get_category( $parent );
          $classes[] = 'category-'.$category->category_nicename;
          $parent = $category->category_parent;
          if ( $parent != '' ) {
              $category = &get_category( $parent );
              $classes[] = 'category-'.$category->category_nicename;
          }
        }
    }
  }
  return $classes;
}

?>