<?php

register_nav_menus(array('header-menu'=>'Header Menu','footer-menu'=>'Footer Menu'));
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','my_theme_setup');
    
?>