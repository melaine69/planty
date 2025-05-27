<?php
//Ajout du lien Administration en premier suivi des liens représentés par .$items
function add_extra_item_to_nav_menu($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        // Ajoute le lien "Administration" en premier
        $first_li_end = strpos($items, '</li>') + 5; // cible la fin du premier lien
        $admin_link = '<li class="link-admin"><a href="' . admin_url() . '">Admin</a></li>';
         // Ajoute le lien Admin après le premier élément du menu
         $items = substr_replace($items, $admin_link, $first_li_end, 0);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
add_filter('upload_mimes', function($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});   
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
