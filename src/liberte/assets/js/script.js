"use strict";

const swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  spaceBetween: 40,
  centeredSlides: true,
  loop: true,
  breakpoints: {
    500: {
      slidesPerView: 2.2,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
// headerスクロール背景変更
const scrollHeader = document.getElementById("js-header");
const headerBtn = document.getElementById("js-headerBtn");
window.addEventListener("scroll", function () {
  if (this.pageYOffset > 400) {
    scrollHeader.classList.add("is-active");
    headerBtn.classList.add("is-active");
  } else {
    scrollHeader.classList.remove("is-active");
    headerBtn.classList.remove("is-active");
  }
});

//ハンバーガーメニュー
const html = document.querySelector("html");
const jsBtn = document.getElementById("js-btn");
const jsNav = document.getElementById("js-nav");
const headerHeight = 0;
let bodyHeight;
let scrollpos;

jsBtn.addEventListener("click", function () {
  this.classList.toggle("is-active");
  jsNav.classList.toggle("is-active");

  if (jsBtn.classList.contains("is-active")) {
    // 現在のスクロール位置を取得する
    scrollpos = window.pageYOffset;
    // メニューが開いたことを示すクラスをhtmlに付与する
    html.classList.add("is-menuOpen");
    // bodyのtopにスクロール位置を付与する
    document.body.style.top = scrollpos * -1 + "px";
    // ウィンドウの高さを取得
    bodyHeight = window.innerHeight;
    // 取得した高さを、メニューに付与する（ヘッダーの高さを引いた数）
    jsNav.style.height = bodyHeight - headerHeight + "px";
  } else {
    // 閉じる処理
    // メニューが開いたことを示すクラスをはずす
    html.classList.remove("is-menuOpen");
    // スクロール位置を開いた時の位置へ戻す
    window.scrollTo(0, scrollpos);
    jsNav.style.height = 100;
  }
});
gsap.set(".mv__hero", {
  opacity: 0,
  x: -400,
});
gsap.to(".mv__hero", {
  opacity: 1,
  x: 0,
  duration: 1,
  ease: Expo.easeOut,
});
gsap.set(".about__item-thumb01", {
  opacity: 0,
  y: 200,
});
gsap.to(".about__item-thumb01", {
  opacity: 1,
  y: 0,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__desc",
    start: "bottom center",
  },
});
gsap.set(".about__item-thumb02", {
  opacity: 0,
  y: 200,
});
gsap.to(".about__item-thumb02", {
  opacity: 1,
  y: 0,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__item-txt01",
    start: "center center",
  },
});
gsap.set(".about__item-txt01", {
  opacity: 0,
  x: 200,
});
gsap.to(".about__item-txt01", {
  opacity: 1,
  x: 0,
  delay: 0.4,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__desc",
    start: "bottom center",
  },
});
gsap.set(".about__item-txt02", {
  opacity: 0,
  x: -200,
});
gsap.to(".about__item-txt02", {
  opacity: 1,
  x: 0,
  delay: 0.4,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__item-txt01",
    start: "center center",
  },
});
gsap.set(".swiper-slide", {
  opacity: 0,
  y: 400,
});
gsap.to(".swiper-slide", {
  opacity: 1,
  y: 0,
  stagger: 0.2,
  duration: 1,
  ease: Expo.easeOut,
  scrollTrigger: {
    trigger: ".service",
    start: "top center",
  },
});
gsap.set(".works__item01", {
  opacity: 0,
  x: -200,
});
gsap.to(".works__item01", {
  opacity: 1,
  x: 0,
  duration: 1,
  ease: Expo.easeOut,
  scrollTrigger: {
    trigger: ".works",
    start: "top center",
  },
});
gsap.set(".works__item02", {
  opacity: 0,
  x: 200,
});
gsap.to(".works__item02", {
  opacity: 1,
  x: 0,
  duration: 1,
  delay: 1,
  ease: Expo.easeOut,
  scrollTrigger: {
    trigger: ".works",
    start: "top center",
  },
});
