var ww = $(window).width();
//轮播
	if(ww<768){
		
		 var swiper = new Swiper('.banner2 .swiper-container', {
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
	   
        var swiper = new Swiper('.banner3 .swiper-container', {
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
        var swiper = new Swiper('.banner4 .swiper-container', {
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
	    
	}else{
		
        var swiper = new Swiper('.banner2 .swiper-container', {
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
	   
        var swiper = new Swiper('.banner3 .swiper-container', {
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
        var swiper = new Swiper('.banner4 .swiper-container', {
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