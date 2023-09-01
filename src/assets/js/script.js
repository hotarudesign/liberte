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
    scrollpos = window.pageYOffset;
    html.classList.add("is-menuOpen");
    document.body.style.top = scrollpos * -1 + "px";
    bodyHeight = window.innerHeight;
    jsNav.style.height = bodyHeight - headerHeight + "px";
  } else {
    html.classList.remove("is-menuOpen");
    window.scrollTo(0, scrollpos);
    jsNav.style.height = 100;
  }
});

gsap.registerPlugin(ScrollTrigger);

gsap.from(".mv__hero", {
  opacity: 0,
  x: -400,
  duration: 1,
  ease: Expo.easeOut,
});

gsap.from(".about__item-thumb01", {
  opacity: 0,
  y: 200,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__head",
    start: "bottom center",
  },
});
gsap.from(".about__item-txt01", {
  opacity: 0,
  x: 200,
  delay: 0.4,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__head",
    start: "bottom center",
  },
});
gsap.from(".about__item-thumb02", {
  opacity: 0,
  y: 200,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__item-txt01",
    start: "bottom top",
  },
});
gsap.from(".about__item-txt02", {
  opacity: 0,
  x: -200,
  delay: 0.4,
  duration: 1,
  ease: Power4.easeOut,
  scrollTrigger: {
    trigger: ".about__item-txt01",
    start: "bottom top",
  },
});
gsap.from(".swiper-slide", {
  opacity: 0,
  y: 400,
  stagger: 0.2,
  duration: 1,
  ease: Expo.easeOut,
  scrollTrigger: {
    trigger: ".service",
    start: "top center",
  },
});
gsap.from(".works__item01", {
  opacity: 0,
  x: -200,
  duration: 1,
  ease: Expo.easeOut,
  scrollTrigger: {
    trigger: ".works",
    start: "top center",
  },
});
gsap.from(".works__item02", {
  opacity: 0,
  x: 200,
  duration: 1,
  delay: 1,
  ease: Expo.easeOut,
  scrollTrigger: {
    trigger: ".works",
    start: "top center",
  },
});
