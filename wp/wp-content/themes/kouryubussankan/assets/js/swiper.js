var mySwiper = new Swiper ('.swiper-container', {
	loop: true,
	slidesPerView: 2,
  	spaceBetween: 45,
  	centeredSlides : true,
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 0
		}
	}

});