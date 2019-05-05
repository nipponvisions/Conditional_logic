<?php



/* attach main style sheet */
function add_conditional_logic_scripts()
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'add_conditional_logic_scripts');

//register navbars
function conditional_logic_register_nav_menus(){
	#
	register_nav_menus(array(
		'Header_menu' => 'Header Menu',
		'Footer_menu' => 'Footer Menu' 
		)
	);
}
add_action('init','conditional_logic_register_nav_menus');

//enque scripts
function Conditional_logic_add_scripts(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('init', 'Conditional_logic_add_scripts');



/*  featured image setup */ 
	add_theme_support('post-thumbnails');

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 * https://developer.wordpress.org/reference/functions/the_excerpt/
 */
function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );