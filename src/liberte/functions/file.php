<?php
function add_files()
{
    // リセットCSS
    wp_enqueue_style('reset-style', get_theme_file_uri('/assets/css/base/reset.css'));
    // Google Fonts
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap");
    // ベースCSS
    wp_enqueue_style('base-style', get_theme_file_uri('/assets/css/base/base.css'));
    // swiper-style
    wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css");
    //jQuery
    wp_enqueue_script('jquery-script', "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", array(), '', true);
    // swiper-sctipt
    wp_enqueue_script('swiper-script', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", array(), '', true);
    // gsap-cdn
    wp_enqueue_script('gsap-script', "//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js", array(), '', true);
    // gsapTrigger-cdn
    wp_enqueue_script('gsapTrigger-script', "//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js", array(), '', true);
    // Javascript
    wp_enqueue_script('main-script', get_theme_file_uri() . '/assets/js/script.js', array(), '', true);
    if (is_home()) {
        // スタイルCSS
        wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'));
    } else if (is_page('service')) {
        // serviceページCSS
        wp_enqueue_style('service-style', get_theme_file_uri('/assets/css/service.css'));
    } else if (is_page('company')) {
        // companyページCSS
        wp_enqueue_style('company-style', get_theme_file_uri('/assets/css/company.css'));
    } else if (is_page('contact')) {
        // contactページCSS
        wp_enqueue_style('contact-style', get_theme_file_uri('/assets/css/contact.css'));
    } else if (is_page('law')) {
        // lawページCSS
        wp_enqueue_style('law-style', get_theme_file_uri('/assets/css/law.css'));
    } else if (is_page('agreement')) {
        // agreementページCSS
        wp_enqueue_style('agreement-style', get_theme_file_uri('/assets/css/agreement.css'));
    } else if (is_page('consul')) {
        // consulページCSS
        wp_enqueue_style('consul-style', get_theme_file_uri('/assets/css/consul.css'));
    }
}
add_action('wp_enqueue_scripts', 'add_files');
