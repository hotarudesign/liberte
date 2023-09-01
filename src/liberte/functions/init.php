<?php
function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => 'メインメニュー',
        'footer-menu'  => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'register_my_menus');

add_filter('body_class', 'add_page_slug_class_name');
function add_page_slug_class_name($classes)
{
    if (is_page()) {
        $page = get_post(get_the_ID());
        $classes[] = $page->post_name;
    }
    return $classes;
}
