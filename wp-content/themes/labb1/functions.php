<!-- Menyer, side bar, utvalda bilder, likt tillägg men specifikt bundet till temat  -->
<?php

// Köa in CSS och JS 
function add_theme_scripts() {
  
    wp_register_style('maincss', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('fontawesome', get_theme_file_uri('/css/font-awesome.css'));
    wp_enqueue_script('scripts', get_theme_file_uri('/js/script.js'), 'script', '1.0', true);
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.js'), 'jquery', '1.0', false);

    wp_enqueue_style('maincss');

}

// Thumbnails
function post_page_features() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
}

// För att registrera menyer inne i WP Dashboard -> för att skapa en dynamisk meny
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => _('Main Menu Labb 1'),
            'mobile-menu' => _('Mobile Menu Labb 1'),
            'secondary-menu' => _('Undermeny Labb 1'),
            'side-bar' => _('Sidebar Labb 1') 
        )
        );
}

add_action('init', 'register_my_menus');
add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_action('after_theme_setup', 'post_page_features');

?>