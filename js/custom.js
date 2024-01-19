$(document).ready(function () {


$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('nav').addClass("czarr_nav");
  }
  else{
    $('nav').removeClass("czarr_nav");
  }
});




$('.toggle').click(function(){
   $('.second-menu').toggleClass('transform');
   $('.overlay').toggleClass('opacity');
   //$('.toggle').toggleClass('humburger');
    // $('body').toggleClass('overlay_bg');
    $('body').toggleClass('hidden');
});

$('.close_menu').click(function(){
   $('.second-menu').removeClass('transform');
   $('.overlay').removeClass('opacity');
 //  $('.toggle').removeClass('humburger');
    // $('body').removeClass('overlay_bg');
    $('body').removeClass('hidden');
});

/*wow = new WOW({
  boxClass:     'wow',      // default
  animateClass: 'animated', // default
  offset:       0,          // default
  mobile:       true,       // default
  live:         true        // default
})
wow.init();*/









if($('.gallery .slick-slider').length > 0){
$('.slick-slider').slick({
	slidesToShow: 1,
	dots: true,
	arrows: true,
	dots:false,
	swipe: false,
	loop:true,
	infinite:true,
	centerMode: true,
	centerPadding: '250px',
	responsive: [
    {
      breakpoint: 1024,
      settings: {
        centerPadding: '100px',
      }
    },
    {
      breakpoint: 991,
      settings: {
        centerPadding: '100px',
      }
    },
    {
      breakpoint: 767,
      settings: {
       centerPadding: '0',
        prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
        nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>'
      }
    }
  ]
});


if ($(window).width() > 768) {

let clientX = -100;
let clientY = -100;
const cursorArrow = document.querySelector(".cursor-arrow");
const initCursor = () => {
	document.addEventListener("mousemove", (e) => {
		clientX = e.clientX;
		clientY = e.clientY;
	});

	const render = () => {
		TweenMax.to(cursorArrow, {
			duration: 0.3,
			x: clientX,
			y: clientY,
			ease: Power2.easeOut
		});
		requestAnimationFrame(render);
	};
	requestAnimationFrame(render);
};

initCursor();

const slickPrev = document.querySelector(".slick-prev");
const slickNext = document.querySelector(".slick-next");

slickPrev.addEventListener("mouseenter", () => {
	cursorArrow.classList.add("cursor-prev");
	cursorArrow.classList.remove("cursor-next");
});
slickNext.addEventListener("mouseenter", () => {
	cursorArrow.classList.add("cursor-next");
	cursorArrow.classList.remove("cursor-prev");
});

const slider = document.querySelector(".slick-slider");
slider.addEventListener("mouseenter", () => {
	cursorArrow.classList.add("cursor-show");
});
slider.addEventListener("mouseleave", () => {
	cursorArrow.classList.remove("cursor-show");
});

}
}
/*if ($(window).width() > 991) {
gsap.registerPlugin(ScrollTrigger);
gsap.to(".location_wrapper", {
  scrollTrigger: {trigger: ".location_wrapper", scrub: true, pin: true, start: "center center", end: "bottom -50%",ease: "power2", 
  }, 
});

 gsap.to(".srollSlide", {
    scrollTrigger:{trigger: ".srollSlide",  start: "top bottom", end: "bottom top", scrub: 1, start: "0 top",
   		}, //"transform": "translate(00%, 0 )",
   		x: 900,
   		ease: "none" , progress: 1,  stagger: .5, //duration: 1000,
    })
}*/


if ($(window).width() < 991) {
    
    wow = new WOW({
  boxClass:     'wow',      // default
  animateClass: 'animated', // default
  offset:       0,          // default
  mobile:       true,       // default
  live:         true        // default
})
wow.init();


$(window).on("resize scroll", function() {
  $(".location_mid").each(function() {
    var windowTop = $(window).scrollTop();
    var elementTop = $(this).offset().top - 480;
    var leftPosition = windowTop - elementTop;
    $(this).find(".srollSlide").css({ left: leftPosition });
      
    var scroll = $(window).scrollTop();
   // var objectSelect = $("#change_header");
    var objectPosition = $(this).offset().top - 480;
    if (scroll > objectPosition) {
        $(".location_mid").addClass("img_fixed");
    } else {
        $(".location_mid").removeClass("img_fixed");
    }
  });

});
};





if ($(window).width() > 991) {

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
const scroller = document.querySelector('#scroller');

const bodyScrollBar = Scrollbar.init(scroller, { damping: 0.1, delegateTo: document, alwaysShowTracks: true });

ScrollTrigger.scrollerProxy(".scroller", {
  scrollTop(value) {
    if (arguments.length) {
      bodyScrollBar.scrollTop = value;
    }
    return bodyScrollBar.scrollTop;
  }
});

bodyScrollBar.addListener(ScrollTrigger.update);
ScrollTrigger.defaults({ scroller: scroller });
gsap.registerPlugin(ScrollTrigger);
gsap.to(".location_wrapper", {
  scrollTrigger: {
      trigger: ".location_wrapper",
      scrub: true,
      pin: true,
      start: "center center",
      end:  () => "+=" + innerHeight,
      ease: "power2", 
  }, 
});

 gsap.to(".srollSlide", {
    scrollTrigger:{trigger: ".srollSlide",  start: "top bottom", end: "bottom top", scrub: 1, start: "0 top",
   		}, //"transform": "translate(00%, 0 )",
   		x: 900,
   		ease: "none" , progress: 1,  stagger: .5, //duration: 1000,
    })


// Navigation
ScrollTrigger.create({
  start: 'top 0',
  end: 99999,
  toggleClass: {className: 'czarr_nav', targets: '.navbar'}
});


// Click TO Scroll
/*gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

let container = document.querySelector(".scroller");

let height;
function setHeight() {
  height = container.clientHeight;
  document.body.style.height = height + "px";
}
ScrollTrigger.addEventListener("refreshInit", setHeight);

// smooth scrolling container
gsap.to(container, {
  y: () => -(height - document.documentElement.clientHeight),
  ease: "none",
  scrollTrigger: {
    trigger: document.body,
    start: "top top",
    end: "bottom bottom",
    scrub: 1,
    invalidateOnRefresh: true
  }
});

// scrolltrigger for each box
gsap.utils.toArray('.box').forEach(box => {
  gsap.to(box, {
 //   backgroundColor: '#ffffff',
    scrollTrigger: {
      trigger: box,
      start: 'top center',
      toggleActions: 'play none none reverse',
    //  markers: true
    }
  });
});
    

function setupLinks(scroller) {
  let linkElements = gsap.utils.toArray('.nav-link'),
      linkTargets = linkElements.map(e => document.querySelector(e.getAttribute("href"))),
      linkPositions = [],
      calculatePositions = () => {
        let offset = gsap.getProperty(scroller, "y");
        linkTargets.forEach((e, i) => linkPositions[i] = e.getBoundingClientRect().top - offset);
      };
  
  linkElements.forEach((element, i) => {
    
    element.addEventListener("click", e => {
      e.preventDefault();
      gsap.to(window, {scrollTo: linkPositions[i], ease: "power4", overwrite: true});
    });
  });
  
  ScrollTrigger.addEventListener("refresh", calculatePositions);
}

setupLinks(container);*/



// Scroll Animation Paragraph
const boxess = gsap.utils.toArray(".small-head, p, .contact h4, .location span, .location small");
boxess.forEach((box, i) => {
  const anim = gsap.fromTo(
    box,
    { autoAlpha: 0, y: 50 },
    { duration: 1, autoAlpha: 1, y: 0 }
  );
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    toggleActions: "play none none none",
    once: true
  });
});


// Scroll Animation Heading
const boxes = gsap.utils.toArray(".h4");
boxes.forEach((box, i) => {
  const anim = gsap.fromTo(
    box,
    { autoAlpha: 0, y: 100 },
    { duration: 1, autoAlpha: 1, y: 0 }
  );
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    toggleActions: "play none none none",
    once: true
  });
});




// Only necessary to correct marker position - not needed in production
/*if (document.querySelector('.gsap-marker-scroller-start')) {		
  const markers = gsap.utils.toArray('[class *= "gsap-marker"]');	

  bodyScrollBar.addListener(({ offset }) => {  
    gsap.set(markers, { marginTop: -offset.y })
  });
}*/

}





let options = {
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed:3000,
  infinite: true,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1
      }
    }
  ]
};
$(".carousel").slick(options);


// let timeOut2;
// const element = document.getElementById("trigger2");
// element.addEventListener('mouseover', (e) => {
//   timeOut2 = setTimeout(() => {
    
//   }, 700);
// });


// element.addEventListener('mouseout', (e) => {
 
  
//   clearTimeout(timeOut2);
// });


var timeout2;
$('#trigger2').hover(
    function() {
        timeout2 = setTimeout(function(){
            $('#hiddenDiv2').css("visibility","visible");
            // $('#hiddenDiv2').show();
        }, 700); //2 seconds
    },
    function(){
        clearTimeout(timeout2); //cancel the timeout if they hover off
        // do stuff when hover off
        $('#hiddenDiv2').css("visibility","hidden");
        // $('#hiddenDiv2').hide();
    }
);


});





$(window).on('load', function(){
  "use strict";
  $('.js_wiper').wipeSlider({
    transition : 500,
    duration : 2000,
    auto : false,
    pager : false,
        controls : true,
        variable: true,
    loop: false
  });
  
  $('.js_wiper2').wipeSlider({
    transition : 500,
    duration : 2000,
    auto : false,
    pager : false,
        controls : true,
        variable: true,
    loop: false
  });
  
  $('.js_wiper3').wipeSlider({
    transition : 500,
    duration : 2000,
    auto : false,
    pager : false,
        controls : true,
        variable: true,
    loop: false
  });
  
  $('.galArrowLeft').click(function(){
    $('.wrapper1 .prevBtn').click();
    $('.wrapper2 .prevBtn').click();
    $('.wrapper3 .prevBtn').click();
    var activeTxt = $('.wrapper1 .myslide.active img').attr('data-text');
  
  $('.frame3 .txtMs').html(activeTxt);
  });
  
  $('.galArrowRight').click(function(){
    $('.wrapper1 .nextBtn').click();
    $('.wrapper2 .nextBtn').click();
    $('.wrapper3 .nextBtn').click();
    var activeTxt = $('.wrapper1 .myslide.active img').attr('data-text');
  
  $('.frame3 .txtMs').html(activeTxt);
  });
  
  
});


