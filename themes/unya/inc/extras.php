<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package UNYA_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function unya_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'unya_body_classes' );

// Change program slug to 'programs'
function change_programs_archive_slug ( $args, $post_type ) {
    if ( 'program' === $post_type ) {
        $args['rewrite']['slug'] = 'programs';
    }
    return $args;
}
add_filter( 'register_post_type_args', 'change_programs_archive_slug', 10, 2 );

// Change the title of the Programs Archive page
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_post_type_archive('program') ) {
    	$title = 'Programs for Youth';
		} 
		return $title;
});

// CFS for Hero Banners //

function hero_banners() {
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/build/css/style.min.css'
    );
        $first = CFS()->get( 'first_banner_pic' );
		$second = CFS()->get( 'second_banner_pic' );
	    $third = CFS()->get( 'third_banner_pic' ); 
		$impactpolygon = CFS()->get( 'impact_angled_banner' );
		$rectangle = CFS()->get( 'rectangle_banner' );
        $aboutpolygon = CFS()->get( 'about_angled_banner' );
		$aboutrectangle = CFS()->get( 'about_rectangle_banner' );
        $custom_css = "
                			
.about{
	background: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url({$first});
}

.nyc{	
	background-image:linear-gradient(to bottom,rgba(209,52,52,0.7) 0%, rgba(209,52,52,0.7) 100%),
    url({$second});
}

.programs{
	background-image:  linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url({$third});
}

.impact-polygon{ 
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url({$impactpolygon});
}

.rectangle-container{
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url({$rectangle});
}

.vision{ 
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url({$aboutpolygon});
}

.mission{
    background-image: linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
    url({$aboutrectangle});
}

.donation-registration {
  background-image: linear-gradient(to bottom,rgba(167,0,0,0.7) 0%, rgba(167,0,0,0.7) 100%),
    url({$getinvolvedrectangle});
}";

    wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'hero_banners' );