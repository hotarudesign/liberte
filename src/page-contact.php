<?php get_header(); ?>
<section class="mv">
  <h2 class="mv__page-ttl">お問い合わせ</h2>
</section>
<?php get_template_part('parts/breadcrumbs'); ?>
<main class="main">
  <div class="main__inner inner">
    <h2 class="sec-ttl contact">
      <ruby data-ruby="お問い合わせ">Contact</ruby>
    </h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile;
    else : ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>