<?php

function register_theme_menus()
{
    $menus = array('header-menu' => __('Header Menu'),);
    register_nav_menus($menus);
}
add_action('init', 'register_theme_menus');
