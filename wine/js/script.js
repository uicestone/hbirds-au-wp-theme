var ww = $(window).width();
var swiper2, swiper3, swiper4;
//轮播
	if(ww<768){
		
		 swiper2 = new Swiper('.banner2 .swiper-container', {
//				speed:1000,
//				loop:true,
			spaceBetween: 30,
			slidesPerView: 4,
			slidesPerGroup: 1,
	     	pagination: {
	        	el: '.banner2 .swiper-pagination',
		        clickable: true,
	      	},
	      	autoplay: {
			    delay:6000
			},
			navigation: {
		        nextEl: '.banner2 .swiper-button-next',
		        prevEl: '.banner2 .swiper-button-prev',
		    },
	   });
	   
        swiper3 = new Swiper('.banner3 .swiper-container', {
//				speed:1000,
//				loop:true,
			spaceBetween: 21,
			slidesPerView: 2,
			slidesPerGroup: 1,
	     	pagination: {
	        	el: '.banner3 .swiper-pagination',
		        clickable: true,
	      	},
	      	autoplay: {
			    delay:6000
			},
			navigation: {
		        nextEl: '.banner3 .swiper-button-next',
		        prevEl: '.banner3 .swiper-button-prev',
		    },
	   });
        swiper4 = new Swiper('.banner4 .swiper-container', {
//				speed:1000,
//				loop:true,
			spaceBetween: 37,
			slidesPerView: 4,
			slidesPerGroup: 1,
	     	pagination: {
	        	el: '.banner4 .swiper-pagination',
		        clickable: true,
	      	},
	      	autoplay: {
			    delay:6000
			},
			navigation: {
		        nextEl: '.banner4 .swiper-button-next',
		        prevEl: '.banner4 .swiper-button-prev',
		    },
	   });
	    
	}else
	{
		
        swiper2 = new Swiper('.banner2 .swiper-container', {
//				speed:1000,
//				loop:true,
			spaceBetween: 30,
			slidesPerView: 4,
			slidesPerGroup: 1,
	     	pagination: {
	        	el: '.banner2 .swiper-pagination',
		        clickable: true,
	      	},
	      	autoplay: {
			    delay:6000
			},
			navigation: {
		        nextEl: '.banner2 .swiper-button-next',
		        prevEl: '.banner2 .swiper-button-prev',
		    },
	   });
	   
        swiper3 = new Swiper('.banner3 .swiper-container', {
//				speed:1000,
//				loop:true,
			spaceBetween: 21,
			slidesPerView: 2,
			slidesPerGroup: 1,
	     	pagination: {
	        	el: '.banner3 .swiper-pagination',
		        clickable: true,
	      	},
	      	autoplay: {
			    delay:6000
			},
			navigation: {
		        nextEl: '.banner3 .swiper-button-next',
		        prevEl: '.banner3 .swiper-button-prev',
		    },
	   });
        swiper4 = new Swiper('.banner4 .swiper-container', {
//				speed:1000,
//				loop:true,
			spaceBetween: 37,
			slidesPerView: 4,
			slidesPerGroup: 1,
	     	pagination: {
	        	el: '.banner4 .swiper-pagination',
		        clickable: true,
	      	},
	      	autoplay: {
			    delay:6000
			},
			navigation: {
		        nextEl: '.banner4 .swiper-button-next',
		        prevEl: '.banner4 .swiper-button-prev',
		    },
	   });
	   
	
	}
$(function(){
	$('.imgDiv').on('click', function(e) {
		var postId = $(this).data('id');
		e.stopPropagation();
		$('.detail-images').show();
		$('.detail-images .detail-image').hide();
		$('.detail-images .detail-image[data-id="'+postId+'"]').fadeIn(500);
		swiper4.autoplay.stop();
	});
	$(document).on('click', function () {
		$('.detail-images').fadeOut(500);
		$('.detail-images .detail-image').fadeOut(500);
		swiper4.autoplay.start();
	});
});
