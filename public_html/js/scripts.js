!(function($) {
  "use strict";
//Change logo on main page
  var initialSrc = "images/logo male biale.png";
var scrollSrc = "images/logo color-male.png";

$(window).scroll(function() {
   var value = $(this).scrollTop();
   if (value > 100)
      $(".logo").attr("src", scrollSrc);
   else
      $(".logo").attr("src", initialSrc);
});

  // Header main page scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header-one').addClass('header-scrolled');
      $('#header-one .nav-menu a').addClass('text-dark');
      $('#header-one .nav-menu ul').addClass('white-background');
    } else {
      $('#header-one').removeClass('header-scrolled');
      $('#header-one .nav-menu a').removeClass('text-dark');
      $('#header-one .nav-menu ul').removeClass('white-background');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header-one').addClass('header-scrolled');
    $('#header-one .nav-menu a').addClass('text-dark');
    $('#header-one .nav-menu ul').addClass('white-background');

  }
  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('menu-active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('menu-active');
      }
      if (cur_pos < 300) {
        $(".nav-menu li:first, #mobile-nav li:first").addClass('menu-active');
      }
    });
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

  // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

})(jQuery);


window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("go-to-top").style.display = "block";
	} else {
		document.getElementById("go-to-top").style.display = "none";
	}
};
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
};

//set cookie if not exist
function setCookie(){
  var d = new Date();
  d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = "PsychoterapiaCookieAccept=true;" + expires + ";path=/";
};
// show cookie modal
$(document).ready(function() {
 if (document.cookie.indexOf("PsychoterapiaCookieAccept=true")<0) {
     setTimeout(function(){ $('#cookieModal').modal('show'); }, 0);
    $("#ModalCookieClose").click(function () {
          $("#cookieModal").modal("hide");
      });
  }
});
