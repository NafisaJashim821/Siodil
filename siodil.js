var swiper = new Swiper(".mySwiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    effect: "fade",
    speed: 1000,
  });
  
  
var brightswiper = new Swiper(".lineupSwiper", {
  loop: true,
  centeredSlides: true,
  slidesPerView: 1.6, 
  spaceBetween: 60,
  speed: 1000,
  
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1, spaceBetween: 20 },
    768: { slidesPerView: 1.3, spaceBetween: 40 },
    1024: { slidesPerView: 1.6, spaceBetween: 60 },
  },
});






var swiper = new Swiper(".productSwiper", {
  slidesPerView: 1, 
  spaceBetween: 20, 
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
   navigation: {
    nextEl: ".product-carousel-section .swiper-button-next",
    prevEl: ".product-carousel-section .swiper-button-prev",
  },
  breakpoints: {
    768: {  
      slidesPerView: 2,
    },
    1024: { 
      slidesPerView: 4,
    },
  },
});


document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".lazy-section");

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

  sections.forEach(section => {
    observer.observe(section);
  });
});