<?php

function tp_theme_menu() {
    register_nav_menus([
        'main' => 'Menu Principal'
    ]);
}

add_action('init', 'tp_theme_menu');

function tp_add_theme_support(){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','tp_add_theme_support');