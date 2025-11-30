

  var thumbSwiper = new Swiper(".thumb-swiper", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
  });

  var mainSwiper = new Swiper(".main-swiper", {
    spaceBetween: 10,
    thumbs: {
      swiper: thumbSwiper,
    },
  });

