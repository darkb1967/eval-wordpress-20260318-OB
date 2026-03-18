<?php

function tp_theme_menu() {
    register_nav_menus([
        'main' => 'Menu Principal',
        'foot' => 'Menu Bas de page',
    ]);
}

add_action('init', 'tp_theme_menu');

function tp_add_theme_support(){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','tp_add_theme_support');

function md_theme_menu_sidebar() {
    
    register_sidebar([
        'id' => 'main-sidebar',
        'name'=> 'Sidebar Accueil',
        'before_widget'=> '<div class="montheme-widgets">',
        'after_widget'=> '</div>',
    ]);

    register_sidebar( array(
    'name'          => 'Footer Widget Area',
    'id'            => 'footer_widget_area',
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="footer-widget-title">',
    'after_title'   => '</h2>',  
    ));

    register_sidebar( array(
    'name' => 'Inscription Widget',
    'id' => 'inscription_widget',
    'before_widget'=> '<div class="inscription-widgets">',
    'after_widget'=> '</div>',
    'before_title'  => '<h2 class="footer-widget-title">',
    'after_title'   => '</h2>', 
    ));
}

add_action('init', 'md_theme_menu_sidebar');