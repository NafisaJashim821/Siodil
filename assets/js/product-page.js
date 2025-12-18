
var thumbSwiper = new Swiper(".thumb-swiper", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
});
var mainSwiper = new Swiper(".main-swiper", {
    spaceBetween: 10,
    thumbs: { swiper: thumbSwiper },
});



function toggleDescription() {
    const shortText = document.querySelector('.desc-short');
    const fullText = document.querySelector('.desc-full');
    const btn = document.querySelector('.read-more-btn');

    if (fullText.style.display === 'none') {
        shortText.style.display = 'none';
        fullText.style.display = 'inline';
        btn.textContent = 'Read less';
    } else {
        shortText.style.display = 'inline';
        fullText.style.display = 'none';
        btn.textContent = 'Read more';
    }
}



