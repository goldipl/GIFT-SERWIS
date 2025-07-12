document.querySelectorAll('.our-job-swiper').forEach((swiperEl, index) => {
  new Swiper(swiperEl, {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 24,
    navigation: {
      nextEl: swiperEl.querySelector('.swiper-button-next'),
      prevEl: swiperEl.querySelector('.swiper-button-prev'),
    },
    breakpoints: {
      1240: { slidesPerView: 5 },
      992: { slidesPerView: 2 },
      200: { slidesPerView: 1 },
    }
  });
});

document.querySelectorAll('.our-job').forEach(button => {
  button.addEventListener('click', function () {
    const brandingBox = this.closest('.branding-slot-box');

    if (brandingBox) {
      let swiper = brandingBox.nextElementSibling;

      while (swiper && !swiper.classList.contains('our-job-swiper')) {
        swiper = swiper.nextElementSibling;
      }

      if (swiper) {
        const isHidden = swiper.classList.toggle('hidden');
        this.textContent = isHidden ? 'Nasze realizacje' : 'Zwiń';
      }
    }
  });
});
