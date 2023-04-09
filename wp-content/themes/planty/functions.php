<?php
// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Ocean wp
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    
}
/* nav menu commence ici */
function register_my_menu(){
    register_nav_menu('main-menu', 'Menu Personnalisé');
    }
add_action( 'after_setup_theme', 'register_my_menu' );



add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'main-menu' ) {
        $items .= '<li ><a  href="/Planty2/wp-admin/">Admin</a></li>';
        
    }
    return $items;
}