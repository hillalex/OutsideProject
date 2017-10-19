<?php

// register a top nav menu
function register_top_menu()
{
    register_nav_menu('top-menu', __('Top Menu'));
}

add_action('init', 'register_top_menu');

// add stylesheet for login page
function login_stylesheet()
{
    wp_enqueue_style('login_stylesheet', get_template_directory_uri() . '/login.css');
}
add_action('login_head', 'login_stylesheet');

// xml schema for opengraph
function doctype_opengraph($output)
{
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}

add_filter('language_attributes', 'doctype_opengraph');

// function to output meta tags for head
function fb_opengraph()
{
    global $post;
    ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
    <?php
    if (is_single()) {
        if (has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
        } else {
            $img_src = get_stylesheet_directory_uri() . '/images/banner.png';
        }
        if (has_excerpt($post->ID))
            $excerpt = $post->post_excerpt;

        else
            $excerpt = wp_trim_words($post->post_content);

        ?>
        <meta name="description" content="<?php echo $excerpt; ?>"/>
        <title><?php echo get_bloginfo('title') . ": ";
            the_title(); ?></title>
        <meta property="og:title" content="<?php echo get_bloginfo('title') . ": ";
        the_title(); ?>"/>
        <meta property="og:description" content="<?php echo $excerpt; ?>"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="<?php the_permalink(); ?>"/>
        <meta property="og:image" content="<?php echo $img_src; ?>"/>

        <?php
    } else { ?>

        <?php
        if (is_front_page()) {
            ?>
            <title><?php echo get_bloginfo('title'); ?></title>
            <meta property="og:title" content="<?php echo get_bloginfo('title'); ?>"/>
            <meta property="og:url" content="<?php echo site_url(); ?>"/>
            <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
            <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"/>
        <?php } else {
            if (has_excerpt($post->ID))
                $excerpt = $post->post_excerpt;
            else
                $excerpt = wp_trim_words($post->post_content);

            if (strlen($excerpt) ==0)
                $excerpt = get_bloginfo('description');
            ?>
            <title><?php echo get_bloginfo('title') . ": ";
                the_title(); ?></title>
            <meta property="og:title" content="<?php echo get_bloginfo('title') . ": ";
            the_title(); ?>"/>
            <meta name="description" content="<?php echo $excerpt; ?>">
            <meta property="og:description" content="<?php echo $excerpt; ?>"/>
            <meta property="og:url" content="<?php the_permalink(); ?>"/>
        <?php } ?>


        <meta property="og:type" content="website"/>
        <meta property="og:image" content="<?php echo get_stylesheet_directory_uri() . '/images/banner.png'; ?>"/>
        <?php
    }
}

add_action('wp_head', 'fb_opengraph', 5);

function jquery_in_footer() {
	if (!is_admin()) {
		wp_deregister_script('jquery');

		// load the local copy of jQuery in the footer
		wp_register_script('jquery', home_url(trailingslashit(WPINC) . 'js/jquery/jquery.js'), false, null, true);


		wp_enqueue_script('jquery');
	}
}
add_action('init', 'jquery_in_footer');