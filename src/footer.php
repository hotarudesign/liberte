<footer class="footer">
  <div class="footer__inner inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo footer__logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/liberte-logo_white.svg" alt="株式会社Liberte" />
    </a>
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'footer-menu',
        'container' => '',
        'menu_class' => 'footer__list',
      )
    );
    ?>
    <ul class="footer__law">
      <li class="footer__law__item">
        <a href="<?php echo esc_url(home_url('/law')); ?>" class="footer__law__item-link">特定商取引法に基づく表記</a>
      </li>
      <li class="footer__law__item">
        <a href="<?php echo esc_url(home_url('/agreement')); ?>" class="footer__law__item-link">利用規約</a>
      </li>
    </ul>
    <p class="footer__copy">
      <small>&copy; <?php bloginfo('name'); ?></small>
    </p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>