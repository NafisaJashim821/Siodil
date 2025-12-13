const slides = document.querySelectorAll('.swiper-slide');

function setSlideBackground() {
  slides.forEach(slide => {
    const bg = window.innerWidth <= 768 ? slide.getAttribute('data-mobile') : slide.getAttribute('data-desktop');
    slide.style.backgroundImage = `url('${bg}')`;
  });
}

// Set background on load
setSlideBackground();

// Update on window resize
window.addEventListener('resize', setSlideBackground);




var swiper = new Swiper(".mySwiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 3000,
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
    el: ".lineup-pagination",
    clickable: true,
    type: "bullets",
  },
  breakpoints: {
    0: { slidesPerView: 1, spaceBetween: 20 },
    768: { slidesPerView: 1.3, spaceBetween: 40 },
    1024: { slidesPerView: 1.6, spaceBetween: 60 },
  },
});




var productSwiper = new Swiper(".productSwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 30000000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".next-arrow",
    prevEl: ".prev-arrow",
  },
  breakpoints: {
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
   

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