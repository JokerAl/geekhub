<?php
/**
 * @package Featured Image
 * @author Mervin Praison
 * @version 2.0
 */
/*
    Plugin Name: Featured Image
    Plugin URI: http://mervin.info/wordpress-featured-image
    Description: Provides you with a featured image shortcode [ featured-img ] and Featured Image widget. Very Easy to implement. 
    Author: Mervin Praison
    Version: 2.0
    License: GPL
    Author URI: http://mervin.info/
    Last change: 08.04.2014
*/
/**
* Example for use inside the loop: <?php if ( function_exists('get_featured_img') ) get_featured_img(); ?>
 */

/* Getting Featured Image [featured-img] */

function getting_featured_img() {
    
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$alt = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);

    if($image) 
    {
        if ($alt)
            {
                $mpfeatureimg = " <div id='featured-img-id'><img src='" ;
                $mpfeatureimg .= $image[0];
                $mpfeatureimg .= "' alt='";
                $mpfeatureimg .= $alt;
                $mpfeatureimg .= "' /></div>";
            }
        else
            {
                $mpfeatureimg = " <div id='featured-img-id'><img src='" ;
                $mpfeatureimg .= $image[0];
                $mpfeatureimg .= "' /></div>";
            }
        
    }
    else
    {
        $mpfeatureimg = null;
    }

        return $mpfeatureimg;
}

add_shortcode('featured-img', 'getting_featured_img');

function get_featured_img() {
echo getting_featured_img();
}

/* Getting Featured Image Caption [featured-img-caption] */

function getting_featured_img_caption() {
  $thumbnail_id = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
  return $thumbnail_image[0]->post_excerpt;
}

add_shortcode('featured-img-caption', 'getting_featured_img_caption');

function get_featured_img_caption() {
  echo getting_featured_img_caption();
}


wp_register_sidebar_widget(
    'mp_featuredimg_1',        // your unique widget id
    'Featured Image',          // widget name
    'get_featured_img',  // callback function
    array(                  // options
        'description' => 'Displays featured image on each individual post/page.'
    )
);
?>