/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*************************************!*\
  !*** ./resources/js/layouts/app.js ***!
  \*************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/header.js ***!
  \****************************************/
var header = document.querySelector('.header');

if (header) {
  var searchBtn = header.querySelector('.search__button'),
      search = header.querySelector('.search');
  hamburger = header.querySelector('.hamburger');
  mobileNavigation = header.querySelector('.mobile-navigation'), mobNavItems = header.querySelectorAll('.mobile-navigation__item');

  searchBtn.onclick = function () {
    search.classList.toggle('hidden');
  };

  hamburger.onclick = function () {
    mobileNavigation.classList.toggle('hidden');
  };

  mobNavItems.forEach(function (item) {
    item.addEventListener('click', function () {
      var linksBlock = item.querySelector('.mobile-dropdown-links');

      if (linksBlock) {
        linksBlock.classList.toggle('hidden');
      }
    });
  });
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/footer.js ***!
  \****************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
var commentsCarousel = document.querySelector('.comments__carousel');

if (commentsCarousel) {
  $(".comments__carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 1
  });
}
})();

/******/ })()
;