<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header" id="js-header">
    <div class="header__inner inner">
      <h1 class="logo header__logo pc-only">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/liberte-logo_white.svg" alt="株式会社Liberte" /></a>
      </h1>
      <h1 class="logo header__logo-sp">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/liberte-logo_white.svg" alt="株式会社Liberte" /></a>
      </h1>
      <div id="js-btn"><span></span><span></span><span></span></div>
      <nav class="g-nav" id="js-nav">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="g-nav__logo sp-only"><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/liberte-logo_black.svg' alt=''></a>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-menu',
            'container' => '',
            'menu_class' => 'g-nav__list',
          )
        );
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>/contact" class="btn header__btn sp-only">お問い合わせ</a>
      </nav>
      <a href="<?php echo esc_url(home_url('/')); ?>/contact" class="btn header__btn pc-only" id="js-headerBtn">お問い合わせ</a>
    </div>
  </header>