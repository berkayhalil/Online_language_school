const swiper1 = new Swiper('.swiper-home-section', {
  loop: true,
  
  autoplay: {
    delay:  9000,
    disableOnInteraction: false,
  },
  speed: 1000,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});