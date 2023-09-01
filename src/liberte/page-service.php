<?php get_header(); ?>
<section class="mv">
  <h2 class="mv__page-ttl">事業内容</h2>
</section>
<?php get_template_part('breadcrumbs'); ?>
<main class="main">
  <div class="main__inner inner">
    <h2 class="sec-ttl">
      <ruby data-ruby="事業内容">Service</ruby>
    </h2>
    <ol class="service__list">
      <li class="service__item">
        <div class="service__item__ttl-wrap">
          <h3 class="service__item__ttl-wrap-ttl">
            クラウドファンディング事業
          </h3>
          <p class="service__item__ttl-wrap-num">01</p>
        </div>
        <div class="service__item__flex">
          <p class="service__item__flex__txt">
            これまで日本国内で5億円を超える商品を流通させた経験をもとに、日本国内に進出したい海外企業のお手伝いを得意としています。具体的には1億人規模の大きな日本市場に向けたテストマーケティングの一環として、海外メーカーとタッグを組んだクラウドファンディング事業を行っています。クラウドファンデングの後は国内有名ショッピングモールへの出店や、展示会への出店も通じ、継続的に日本市場に向けたアプローチもご提案します。
          </p>
          <figure class="service__item__flex-thumb">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/service_item01.webp" alt="" />
          </figure>
        </div>
      </li>
      <li class="service__item">
        <div class="service__item__ttl-wrap">
          <h3 class="service__item__ttl-wrap-ttl">EC事業</h3>
          <p class="service__item__ttl-wrap-num">02</p>
        </div>
        <div class="service__item__flex">
          <p class="service__item__flex__txt">
            日本Amazon、Yahooショッピングを主な販路とし、国内最大規模のプラットフォームにて海外製品の流通販売に取り組んでおります。またアメリカAmazon、東南アジア最大のECモール「Shopee」などに出店しております。海外商品を日本国内に流通させることはもちろんのこと、その後の展開も見据えた戦略にて、売上の最大化を支援しています。
          </p>
          <figure class="service__item__flex-thumb">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/service_item02.webp" alt="" />
          </figure>
        </div>
      </li>
      <li class="service__item">
        <div class="service__item__ttl-wrap">
          <h3 class="service__item__ttl-wrap-ttl">WEB広告運用事業</h3>
          <p class="service__item__ttl-wrap-num">03</p>
        </div>
        <div class="service__item__flex">
          <p class="service__item__flex__txt">
            Google広告、Facebook広告の運用も行なっています。日本国内に流通させたい商品の売上最大化にあたり、見込み客へ効率的にアプローチするための集客方法としての広告運用方法を提案、代行しております。
          </p>
          <figure class="service__item__flex-thumb">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/service_item03.webp" alt="" />
          </figure>
        </div>
      </li>
      <li class="service__item">
        <div class="service__item__ttl-wrap">
          <h3 class="service__item__ttl-wrap-ttl">SNSマーケティング事業</h3>
          <p class="service__item__ttl-wrap-num">04</p>
        </div>
        <div class="service__item__flex">
          <p class="service__item__flex__txt">
            主にInstagramを利用したマーケティング事業も行なっております。日本国内に流通させたい商品の売上最大化にあたり、見込み客へ効率的にアプローチするための集客方法としてのSNS運用方法を提案、代行しております。
          </p>
          <figure class="service__item__flex-thumb">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/service_item04.webp" alt="" />
          </figure>
        </div>
      </li>
      <li class="service__item">
        <div class="service__item__ttl-wrap">
          <h3 class="service__item__ttl-wrap-ttl">コンサルティング</h3>
          <p class="service__item__ttl-wrap-num">05</p>
        </div>
        <div class="service__item__flex">
          <div class="service__item__flex__txt">
            <p class="service__item__flex__txt-desc">
              新たにEC事業に取り組まれたい方に向けたマンツーマンのコンサルティングを提供しています。競合他社分析にはじまる市場調査から、オンラインでの自社商品のリリースから流通までの提案と実践を支援します。法人の方から個人の方まで、弊社ビジョンに共感いただけるお客様のお手伝いも6年ほどになりました。すでにEC事業を展開されている方も、ゼロからスタートされる方もまずはお気軽にお問合せください。
            </p>
            <a href="<?php echo esc_url(home_url('/consul')); ?>" class="service__item__flex__txt-link">コンサルサービスの詳細はこちら</a>
          </div>
          <figure class="service__item__flex-thumb">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webp/service_item05.webp" alt="" />
          </figure>
        </div>
      </li>
    </ol>
  </div>
</main>
<?php get_footer(); ?>