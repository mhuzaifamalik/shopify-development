AOS.init({ once: true })
$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "index.php"
  }
  $("header .nav-item .nav-link").removeClass("active");
  $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
});
var counterplaystate = true;

$(window).scroll(function (e) {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
  if (counterplaystate && isScrolledIntoView($(".counter")[0])) {
    counterplaystate = false
    $(".counter li h4 span").each((ind, elem) => {
      console.log($(this).data("counter-end"))
      $(elem).jQuerySimpleCounter({ end: $(elem).parent().data("counter-end"), duration: 3000 });
    })
  }
});

$(document).ready(function () {
  $('#project-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    autoHeight:true
  })
})
$(document).ready(function () {
  const testimonialSlider = $('#testimonials-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoHeight:true,
    responsive: {
      0: {
        items: 1,
      },
      991: {
        items: 2.5,
      }
    }
  })
  $(".testimonials-next").click(function(){
    $(testimonialSlider).trigger('next.owl.carousel');
  })
  $(".testimonials-prev").click(function(){
    $(testimonialSlider).trigger('prev.owl.carousel');
  })
})

gsap.registerPlugin(ScrollTrigger);

// --- ORANGE PANEL ---
const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".vector-benefits",
    scrub: true,
    pin: false,
    start: "top 80%",
    end: "bottom 20%"
  }
})
.to(".vector-benefits", {
  scale: 1, 
  ease: "power1.inOut"
});

$(document).ready(function(){
    $("form").each((ind,elem)=>{
        const input = document.createElement('input');
        $(input).attr("type","hidden");
        $(input).attr("name","URL");
        $(input).val(location.href);
        $(elem).append(input);
    });
});
(function($) {
	
	"use strict";
	
	// Testimonial Carousel
	if ($('.testimonial-carousel').length) {
		$('.testimonial-carousel').owlCarousel({
			animateOut: 'animate__slideOutDown',
		    animateIn: 'animate__zoomIn',
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 300,
			autoplay: 7000,
			navText: [ '<span class="arrow-left"></span>', '<span class="arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				}
			}
		});  		
	}
	
})
(window.jQuery);
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: ''
  }, options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    step: function () {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete
  });
};
function isScrolledIntoView(elem) {
  if (elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();
      return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
}
$('input[type="tel"]').usPhoneFormat({
    format: '(xxx) xxx-xxxx',
});
//   function validateInput(input) {
//             // Remove any non-numeric characters from the input
//             input.value = input.value.replace(/[^0-9]/g, '');

//             // Display an error message if non-numeric characters were entered
//             var errorText = document.getElementById('errorText');
//             if (input.value.length === 0) {
//                 errorText.textContent = '';
//             } else if (isNaN(input.value)) {
//                 errorText.textContent = 'Please enter a valid number.';
//             } else {
//                 errorText.textContent = '';
//             }
//         }