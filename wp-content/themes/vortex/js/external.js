    // banner slider js
$('#banner-slider').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  dots:false,
  nav:true,
  navText : ['<span class="fa fa-angle-left" aria-hidden="true"></span>','<span class="fa fa-angle-right" aria-hidden="true"></span>'],
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
})


// sticky header
// $(window).scroll(function(){
//   var sticky = $('.header-wraper'),
//       scroll = $(window).scrollTop();

//   if (scroll >= 100) sticky.addClass('sticky');
//   else sticky.removeClass('sticky');
// });

    // services slider js
$('#services-slider').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  dots:false,
  nav:true,
  navText : ['<span class="fa fa-angle-left" aria-hidden="true"></span>','<span class="fa fa-angle-right" aria-hidden="true"></span>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})

    // testimonials slider js
$('#testimonials-slider').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  dots:false,
  nav:true,
  navText : ['<span class="fa fa-angle-left" aria-hidden="true"></span>','<span class="fa fa-angle-right" aria-hidden="true"></span>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
})
