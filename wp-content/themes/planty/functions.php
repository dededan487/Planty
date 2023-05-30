<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri()
        . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri()
        . '/css/theme.css', array(), filemtime(get_stylesheet_directory()
            . '/css/theme.css'));
    wp_enqueue_style('form7-style', get_stylesheet_directory_uri()
        . '/css/form7.css', array(), filemtime(get_stylesheet_directory()
            . '/css/form7.css'));
}

function mon_wp_nav_menu_args($args = '')
{
    if (is_user_logged_in()) {
        // Menu connecté à afficher
        $args['menu'] = 11;

    } else {
        // Menu non connecté à afficher
        $args['menu'] = 12;
    }
    return $args; 
}
add_filter('wp_nav_menu_args', 'mon_wp_nav_menu_args');

/**
 * Ceci remplace la fonction WordPress `wp_ob_end_flush_all()`
 * avec un remplacement qui ne provoque pas de notice PHP de la
 *  memoire tampon.
 */

 remove_action('shutdown', 'wp_ob_end_flush_all', 1);
 add_action('shutdown', function () {
     while (@ob_end_flush())
         ;
 });