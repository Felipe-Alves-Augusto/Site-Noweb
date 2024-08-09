var swiper = new Swiper('.swiper-main', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    pagination: {
      el: '.swiper-pagination',
    },
    
  });


  var swiper = new Swiper('.swiper-novidades', {

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
          slidesPerView: 1, // Ajustar em telas menores
          spaceBetween: 15
      },
      1024: {
          slidesPerView: 3.5,
          spaceBetween: 30
      }
  }
   
  });
