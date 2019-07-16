$( document ).ready(function() {

	// carrousel - home/banner
	$('.owl-carousel1').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	
	// prognroll
	$(function() {
	  $("body").prognroll({
	    position:"bottom",
	    height: 10, // progress bar height
	    color: "#007bff", // progress bar background color
	    custom: false, // if you make it true, you can add your custom div and see it's scroll progress on the page
	  });
	});

	// scrollreveal
	ScrollReveal().reveal('article', { interval: 200, reset: true });
	ScrollReveal().reveal('.list-item li', { interval: 200, reset: true, mobile: false });
	ScrollReveal().reveal('h1, h2, input', { delay: 200, reset: true });

    console.log('works !');
    
});