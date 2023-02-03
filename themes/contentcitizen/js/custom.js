(function ($) {
  'use strict';
  // Preloader
  $(window).on("load", function () {
    setTimeout(function () {
      $('.sitePreloader').removeClass('active');
    }, 2500);
  });
  // Preloader End


  // Calculate Page Height
  // setTimeout(function () {
  //   var pageHeight = $(document).height();
  //   $("body").css({ "height": pageHeight + "px" });
  //   console.log(pageHeight + "px")
  // }, 2000);
  // Calculate Page Height End

  $(window).on("load resize", function () { 
    var wWidth = $(window).width();
    if ((wWidth >= 768)) {      

    	// Locomotive Scroll Activator
	    const scroller = new LocomotiveScroll({
	      el: document.querySelector('[data-scroll-container]'),
	      smooth: true
	    });
    	// Locomotive Scroll Activator End
    }
  });

  $(window).on("load", function () {


    // Menu Toggler
    $(".toggle-menu").click(function () {
      $(this).toggleClass("clicked");
      $(".head-nav").toggleClass("active");
    });
    // Menu Toggler End


    // Menu Links Hover Animation
    $(".head-nav li a").on("mouseover mouseout", function () {
      $(this).parent().addClass("active").siblings().toggleClass("active inactive");
      $(".head-nav li").removeClass("active");
    });
    // Menu Links Hover Animation End


    $(".magic-hover").mouseover(function () {
      $("#magicMouseCursor").addClass("active");
    });
    $(".magic-hover").mouseout(function () {
      $("#magicMouseCursor").removeClass("active");
    });


    // Video Popup Show / Hide
    $(".openPopup").click(function () {
      $(".site-popup").addClass("popup-is-visible");
    });
    $(".closePopup").click(function () {
      $(".site-popup").addClass("popup-is-closing");
      setTimeout(function () {
        $(".site-popup").removeClass("popup-is-visible popup-is-closing");
      }, 800);
    });
    // Video Popup Show / Hide End


    // Video Card Popup Slider
    const swiperPopup = new Swiper('.swiper.swiper-popup', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    // Video Card Popup Slider End


    // Hero Banner Animation
    var lFollowX = 0,
      lFollowY = 0,
      x = 0,
      y = 0,
      friction = 1 / 30;
    function moveBackground() {
      x += (lFollowX - x) * friction;
      y += (lFollowY - y) * friction;
      $('.hero-banner figure').css({
        'transform': 'translate(' + x + 'px, ' + y + 'px) scale(1.1)'
      });
      window.requestAnimationFrame(moveBackground);
    }
    $(window).on('mousemove click', function (e) {
      var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
      var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
      lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
      lFollowY = (10 * lMouseY) / 100;
    });
    moveBackground();
    // Hero Banner Animation End


    // Calculate Video Card Height & Width
    // setTimeout(function () {
    //   $(".scroll-section ul li").each(function () {
    //     var placeholder = $(this).find(".card-placeholder img");
    //     var height = placeholder.height();
    //     var width = placeholder.width();
    //     $(this).css({ "width": width, "height": height });
    //   });
    // }, 1500);
    // Calculate Video Card Height & Width End


    // Video Card Scroll Value
    // var counter = 0;
    // $("#scrollSection ul li").each(function (index) {
    //   var indexArray = [1, 2, 1, 2, 1, 2];
    //   var defaultValue = 6;
    //   var singleCard = $(this).find(".singleCard");
    //   if (index !== 0) {
    //     counter++;
    //   }
    //   var checkCounter = parseInt(counter) % parseInt(defaultValue);
    //   if (checkCounter == 0) {
    //     counter = 0;
    //   }
    //   $(singleCard).attr('data-scroll-speed', indexArray[counter]);
    // });
    // Video Card Scroll Value End


    // Play Video on Hover
    var card = $(".scroll-section ul li .singleCard");
    [].forEach.call(card, function (item) {
      item.addEventListener('mouseover', hoverVideo, false);
      item.addEventListener('mouseout', hideVideo, false);
    });
    function hoverVideo(e) {
      $(this).find(".card-video video")[0].play();
    }
    function hideVideo(e) {
      $(this).find(".card-video video")[0].pause();
    }
    // Play Video on Hover End

  });

  $(window).on("load resize", function () {
    var wWidth = $(window).width();
    if ((wWidth >= 768)) {

      // Parallax Effect to Video Cards
      var timeout;
      $('.home').mousemove(function (e) {
        if (timeout) clearTimeout(timeout);
        setTimeout(callParallax.bind(null, e));
      });
      function callParallax(e) {
        parallaxItX(e, '.scroll-section ul li', -500);
        parallaxItY(e, '.scroll-section ul li', -500);
      }
      function parallaxItX(e, target, movement) {
        var $this = $('.scroll-section');
        var relX = e.pageX - $this.offset().left;
        TweenMax.to(target, 1, {
          x: (relX - $this.width() / 2) / $this.width() * movement,
          ease: Power2.easeOut
        })
      }
      function parallaxItY(e, target, movement) {
        var $this = $('.scroll-section');
        var relY = e.pageY - $this.offset().top;
        TweenMax.to(target, 1, {
          y: (relY - $this.height() / 2) / $this.height() * movement,
          ease: Power2.easeOut
        })
      }
      // Parallax Effect to Video Cards End


      // Circulation Rotation Effect to Video Cards
      var tl1 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0 });
      tl1.to('.scroll-section ul li:nth-child(4n+1) a', 8, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 25, y: 0 }, { x: 25, y: 25 },
            { x: 25, y: 45 }, { x: 0, y: 45 },
            { x: -25, y: 45 }, { x: -25, y: 20 },
            { x: -25, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });

      var tl2 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0.2 });
      tl2.to('.scroll-section ul li:nth-child(4n+2) a', 7, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 20, y: 0 }, { x: 20, y: 20 },
            { x: 20, y: 40 }, { x: 0, y: 40 },
            { x: -20, y: 40 }, { x: -20, y: 20 },
            { x: -20, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });

      var tl3 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0.5 });
      tl3.to('.scroll-section ul li:nth-child(4n+3) a', 9, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 25, y: 0 }, { x: 25, y: 25 },
            { x: 25, y: 45 }, { x: 0, y: 45 },
            { x: -25, y: 45 }, { x: -25, y: 20 },
            { x: -25, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });

      var tl4 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0.3 });
      tl4.to('.scroll-section ul li:nth-child(4n+4) a', 6, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 20, y: 0 }, { x: 20, y: 20 },
            { x: 20, y: 40 }, { x: 0, y: 40 },
            { x: -20, y: 40 }, { x: -20, y: 20 },
            { x: -20, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });
      // Circulation Rotation Effect to Video Cards End

    }
    else {

      // Circulation Rotation Effect to Video Cards
      var tl1 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0 });
      tl1.to('.scroll-section ul li:nth-child(4n+1) a', 8, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 15, y: 0 }, { x: 15, y: 15 },
            { x: 15, y: 35 }, { x: 0, y: 35 },
            { x: -15, y: 35 }, { x: -15, y: 15 },
            { x: -15, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });

      var tl2 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0.2 });
      tl2.to('.scroll-section ul li:nth-child(4n+2) a', 7, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 10, y: 0 }, { x: 10, y: 10 },
            { x: 10, y: 30 }, { x: 0, y: 30 },
            { x: -10, y: 30 }, { x: -10, y: 20 },
            { x: -10, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });

      var tl3 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0.5 });
      tl3.to('.scroll-section ul li:nth-child(4n+3) a', 9, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 15, y: 0 }, { x: 15, y: 15 },
            { x: 15, y: 35 }, { x: 0, y: 35 },
            { x: -15, y: 35 }, { x: -15, y: 15 },
            { x: -15, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });

      var tl4 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0.3 });
      tl4.to('.scroll-section ul li:nth-child(4n+4) a', 6, {
        bezier: {
          type: "quadratic",
          values: [
            { x: 0, y: 0 }, { x: 10, y: 0 }, { x: 10, y: 10 },
            { x: 10, y: 30 }, { x: 0, y: 30 },
            { x: -10, y: 30 }, { x: -10, y: 10 },
            { x: -10, y: 0 }, { x: 0, y: 0 }],
          autoRotate: false
        },
        ease: Linear.easeNone
      });
      // Circulation Rotation Effect to Video Cards End

    }
  });


  //Avoid pinch zoom on iOS
  document.addEventListener('touchmove', function (event) {
    if (event.scale !== 1) {
      event.preventDefault();
    }
  }, false);
})(jQuery)

function active_slide(id){
    
    const swiper = document.querySelector('.swiper.swiper-popup').swiper;
    
    jQuery(".swiper-slide").each(function(){
        jQuery(this).removeClass("swiper-slide-active");
    });
    
    swiper.slideTo(id,0,false);
    
    var vid = jQuery("#video_link_"+id).val();
    
    jQuery("#iframe-con-"+id).attr('src','https://player.vimeo.com/video/'+vid+'?autoplay=1;');
    
    var prev = id;
    
    id++;
    
    prev--;
    
    jQuery(".swiper-button-next").attr('data-next',id);
    jQuery(".swiper-button-prev").attr('data-prev',prev);
}