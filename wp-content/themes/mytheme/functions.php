<?php

function mytheme_support(){
    // add the function to put images
    add_theme_support('post-thumbnails');

    // add the function to make menus
    add_theme_support('menus');
}

function mytheme_register_assets(){
    // add boostrap, popper & jquery
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// hide admin bar in front end
function hide_admin_bar_from_front_end(){
    if (is_blog_admin()) {
      return true;
    }
    return false;
}
  
// call hide_admin_bar_from_front_end func
add_filter('show_admin_bar', 'hide_admin_bar_from_front_end');

// call mytheme_support func
add_action('after_setup_theme', 'mytheme_support');

// call mytheme_register_assets func
add_action('wp_enqueue_scripts', 'mytheme_register_assets');


