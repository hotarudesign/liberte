<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/css/base/reset.css" />
    <link rel="stylesheet" href="./assets/css/base/common.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Liberte inc.</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body class="home">
    <header class="header">
      <div class="header__inner inner">
        <h1 class="logo header__logo pc-only">
          <a href="./index.html"
            ><img
              src="./assets/images/liberte-logo_black.svg"
              alt="株式会社Liberte"
          /></a>
        </h1>
        <h1 class="logo header__logo-sp">
          <a href="./index.html"
            ><img
              src="./assets/images/liberte-logo_white.svg"
              alt="株式会社Liberte"
          /></a>
        </h1>
        <div id="js-btn"><span></span><span></span><span></span></div>
        <nav class="g-nav" id="js-nav">
          <a href="./index.html" class="g-nav__logo sp-only"
            ><img src="./assets/images/liberte-logo_black.svg" alt=""
          /></a>
          <ul class="g-nav__list">
            <li class="g-nav__item">
              <a href="./service.html">事業内容</a>
            </li>
            <li class="g-nav__item">
              <a href="./policy.html">企業理念</a>
            </li>
            <li class="g-nav__item">
              <a href="./company.html">会社概要</a>
            </li>
            <li class="g-nav__item">
              <a href="./profile.html">代表プロフィール</a>
            </li>
          </ul>
          <a href="./contact.html" class="btn g-nav__btn sp-only"
            >お問い合わせ</a
          >
        </nav>
        <a href="./contact.html" class="btn header__btn pc-only"
          >お問い合わせ</a
        >
      </div>
    </header>
    <section class="mv">
      <div class="mv__inner inner">
        <h2 class="mv__hero">
          日本<span class="mv__hero-small">の</span>皆様<span
            class="mv__hero-small"
            >に</span
          >伝えたい。<br /><span class="mv__hero-foot"
            ><span class="mv__hero-thin">「</span
            ><span class="mv__hero-strong">アタラシイ</span
            ><span class="mv__hero-thin mv__hero-thin02">」</span
            ><span class="mv__hero-small mv__hero-spacing">の</span
            ><br class="sp-only" />感動<span class="mv__hero-small">を</span
            >。</span
          >
        </h2>
      </div>
    </section>
    <section class="about">
      <div class="about__inner inner">
        <h2 class="sec-ttl">
          <ruby data-ruby="私たちについて">About us</ruby>
        </h2>
        <h3 class="about__ttl">
          日本国内で年間2億円の<br class="sp-only" />売上を続けています。
        </h3>
        <p class="about__desc">
          日本Amazon、ヤフーショッピング、楽天のプラットフォームを用いた<br
            class="pc-only"
          />オンライン販売が主な事業となります。<br />販売実績は個人事業主の期間も含めて、6年以上になりました。<br
            class="pc-only"
          />
          主に海外メーカーや国内メーカーの代理店販売、自社商品の開発、販売を行っております。<br
            class="pc-only"
          />これまでの販売実績は5億円を超えています。<br />
          5億円以上を作ってきたノウハウには自信があり、各メーカーのサポートを得意としております。<br /><br />また海外メーカーに関しては総代理店として、<br
            class="pc-only"
          />クラウドファンディングでのテストマーケティングから一般販売まで一括して弊社で行います。<br /><br />
          集客に関する広告運用、SNS運用も弊社に一任可能となっており、<br
            class="pc-only"
          />日本市場に向けた海外メーカー様のお手伝いはお任せください。<br
            class="pc-only"
          />
        </p>
        <ul class="about__list">
          <li class="about__item">
            <figure class="about__item-thumb about__item-thumb01">
              <img src="./assets/images/webp/about_item01.webp" alt="" />
            </figure>
            <p class="about__item-txt about__item-txt01">
              現在、日本の市場は海外製品の流通量が大きく増えている状態です。
              「島国」という閉ざされやすい環境において、海外メーカー様の新しく面白い商品に国民は飢えているからです。
              そのため海外メーカー様に対して、弊社でも得意とするクラウドファンディングを利用し、限りなくリスクを抑えた状態でテストマーケティングの支援が可能です。
            </p>
          </li>
          <li class="about__item">
            <figure class="about__item-thumb about__item-thumb02">
              <img src="./assets/images/webp/about_item02.webp" alt="" />
            </figure>
            <p class="about__item-txt about__item-txt02">
              WEB広告やSNS運用も行いなつつ商品のPR可能ですので、日本国内における海外メーカー様の売上最大化はお任せください。
              弊社は日本で多くの実績をもったクラウドファンディング専門業者と提携することで御社を全面的にサポートする準備ができています。
              日本にはまだまだ多くの可能性がありますので、ぜひ弊社と共に新たな市場にチャレンジしましょう。
            </p>
          </li>
        </ul>
      </div>
    </section>
    <section class="service">
      <div class="service__inner inner">
        <h2 class="sec-ttl">
          <ruby data-ruby="事業内容">Service</ruby>
        </h2>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper__txt">
              <h3 class="swiper__txt-ttl">クラウドファンディング事業</h3>
              <p class="swiper__txt-desc">
                これまで日本国内で5億円を超える商品を流通させた経験をもとに、日本国内に進出したい海外企業のお手伝いを得意としています。具体的には1億人規模の大きな日本市場に向けたテストマーケティングの一環として、海外メーカーとタッグを組んだクラウドファンディング事業を行っています。クラウドファンデングの後は国内有名ショッピングモールへの出店や、展示会への出店も通じ、継続的に日本市場に向けたアプローチもご提案します。
              </p>
            </div>
            <figure class="swiper__thumb">
              <img src="./assets/images/webp/service_item01.webp" alt="" />
            </figure>
          </div>
          <div class="swiper-slide">
            <div class="swiper__txt">
              <h3 class="swiper__txt-ttl">EC事業</h3>
              <p class="swiper__txt-desc">
                日本Amazon、Yahooショッピングを主な販路とし、国内最大規模のプラットフォームにて海外製品の流通販売に取り組んでおります。またアメリカAmazon、東南アジア最大のECモール「Shopee」などに出店しております。海外商品を日本国内に流通させることはもちろんのこと、その後の展開も見据えた戦略にて、売上の最大化を支援しています。
              </p>
            </div>
            <figure class="swiper__thumb">
              <img src="./assets/images/webp/service_item02.webp" alt="" />
            </figure>
          </div>
          <div class="swiper-slide">
            <div class="swiper__txt">
              <h3 class="swiper__txt-ttl">WEB広告運用事業</h3>
              <p class="swiper__txt-desc">
                Google広告、Facebook広告の運用も行なっています。日本国内に流通させたい商品の売上最大化にあたり、見込み客へ効率的にアプローチするための集客方法としての広告運用方法を提案、代行しております。
              </p>
            </div>
            <figure class="swiper__thumb">
              <img src="./assets/images/webp/service_item03.webp" alt="" />
            </figure>
          </div>
          <div class="swiper-slide">
            <div class="swiper__txt">
              <h3 class="swiper__txt-ttl">SNSマーケティング事業</h3>
              <p class="swiper__txt-desc">
                主にInstagramを利用したマーケティング事業も行なっております。日本国内に流通させたい商品の売上最大化にあたり、見込み客へ効率的にアプローチするための集客方法としてのSNS運用方法を提案、代行しております。
              </p>
            </div>
            <figure class="swiper__thumb">
              <img src="./assets/images/webp/service_item04.webp" alt="" />
            </figure>
          </div>
          <div class="swiper-slide">
            <div class="swiper__txt">
              <h3 class="swiper__txt-ttl">コンサルティング</h3>
              <p class="swiper__txt-desc">
                新たにEC事業に取り組まれたい方に向けたマンツーマンのコンサルティングを提供しています。競合他社分析にはじまる市場調査から、オンラインでの自社商品のリリースから流通までの提案と実践を支援します。法人の方から個人の方まで、弊社ビジョンに共感いただけるお客様のお手伝いも6年ほどになりました。すでにEC事業を展開されている方も、ゼロからスタートされる方もまずはお気軽にお問合せください。
              </p>
            </div>
            <figure class="swiper__thumb">
              <img src="./assets/images/webp/service_item05.webp" alt="" />
            </figure>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </section>
    <section class="works">
      <div class="works__inner inner">
        <h2 class="sec-ttl">
          <ruby data-ruby="事業実績">Works</ruby>
        </h2>
        <ul class="works__list">
          <li class="works__item works__item01">
            <div class="works__txt">
              <h3 class="works__txt-ttl">EC事業</h3>
              <p class="works__txt-desc">
                5年間に渡り、日本Amazon、Yahooショッピングを主な販路として流通販売を行い累計〇〇円を達成
              </p>
            </div>
            <figure class="works__thumb">
              <img src="./assets/images/webp/works_item01.webp" alt="" />
            </figure>
          </li>
          <li class="works__item works__item02">
            <div class="works__txt">
              <h3 class="works__txt-ttl">WEB広告運用事業</h3>
              <p class="works__txt-desc">
                年間5000万円の売上を月30万円〜の広告費で実現。Google広告、FaceBook広告の運用からピンポイントな集客実績
              </p>
            </div>
            <figure class="works__thumb">
              <img src="./assets/images/webp/works_item02.webp" alt="" />
            </figure>
          </li>
        </ul>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__inner inner">
        <a href="./index.html" class="logo footer__logo">
          <img
            src="./assets/images/liberte-logo_white.svg"
            alt="株式会社Liberte"
          />
        </a>
        <ul class="footer__list">
          <li class="footer__item">
            <a href="./service.html">事業内容</a>
          </li>
          <li class="footer__item">
            <a href="./policy.html">企業理念</a>
          </li>
          <li class="footer__item">
            <a href="./company.html">会社概要</a>
          </li>
          <li class="footer__item">
            <a href="./profile.html">代表プロフィール</a>
          </li>
        </ul>
        <p class="footer__copy">
          <small>&copy; Liberte inc. All Right Reserved.</small>
        </p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
