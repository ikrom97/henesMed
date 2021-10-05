const commentsCarousel = document.querySelector('.comments__carousel');
if (commentsCarousel) {
   $(".comments__carousel").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      items: 1,
   });
}