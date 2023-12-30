$(document).ready(function() {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
        $('html').toggleClass('ovr-hiddn');
    });

    $('.loginUp').click(function(){
        $('.overlay').fadeIn();
        $('.loginpopup-waper').fadeIn();
    });

    $('.signUp').click(function(){
        $('.overlay').fadeIn();
        $('.signUppopup-waper').fadeIn();
    });

     $('.closePop, .overlay').click(function(){
        $('.loginpopup-waper').fadeOut();
        $('.signUppopup-waper').fadeOut();
        $('.forgetpasswordpopup-waper').fadeOut();
        $('.overlay').fadeOut();
    });

});


// Fancy Media
// $('.fancybox-media').fancybox({
//     openEffect: 'none',
//     closeEffect: 'none',
//     helpers: {
//         media: {}
//     }
// });


// Slider For
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true
});

// Accordion
$('.acc_title').on('click', function () {
    $(this).parent().parent().find('li').removeClass('active')
    $(this).parent().parent().find('.acc_desc').slideUp();
    $(this).parent('li').addClass('active')
    if (!$(this).next('.acc_desc').is(':visible')) {
        $(this).next('.acc_desc').slideDown();
    } else {
        $(this).parent().parent().find('li').removeClass('active')
    }
});

// Sticky Navigation
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top-70
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
});


$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();
    var scrDis = scrollDistance+70;

    // Assign active class to nav links while scolling
    $('.page-section').each(function(i) {
        console.log($(this).offset().top);
        if ($(this).offset().top <= scrDis) {
            $('.platformSec-nav li.current').removeClass('current');
            $('.platformSec-nav li').eq(i).addClass('current');
        }
    });
}).scroll();


// Normal Slider
$('.index-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
});

// newsletter-slider
$('.newsletter-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
});          

// newsletter-slider
$('.paymethod-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        }
      }
    ]
});    

// Navigation Menu 
$(window).on('load', function() {
var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
$('ul.menu li a').each(function() {
    var hrefVal = $(this).attr('href');
    if (hrefVal == currentUrl) {
        $(this).removeClass('active');
        $(this).closest('li').addClass('active')
        $('ul.menu li.first').removeClass('active');
    }
});

});

// Tabbing JS
  $('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
//   $(".tab-slider").slick("setPosition");
});

/* RESPONSIVE JS */
if ($(window).width() < 1660) {
  $('.office-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
}
if ($(window).width() < 1280) {
  $('.menu .dropdown-nav').on('click', function(){
    // $('.dropdown').removeClass('open');
    // $(this).siblings('.dropdown').addClass('open');
//     if($(this).hasClass('fa-caret-up')){
//       $(this).removeClass('fa-caret-up');
//       $(this).addClass('fa-caret-down');
//       $('.dropdown').removeClass('open');
//     } else if($(this).hasClass('fa-caret-down')){
//       $(this).addClass('fa-caret-up');
//       $(this).removeClass('fa-caret-down');
//       $(this).siblings('.dropdown').addClass('open');
//     }
    $(this).find(".dropdown").toggleClass('open');
    
     $(this).find("a").find('i')
     
     if($(this).find("a").find('i').hasClass('fa-caret-up')){
      $(this).removeClass('fa-caret-up');
      $(this).addClass('fa-caret-down');
    } else if($(this).find("a").find('i').hasClass('fa-caret-down')){
      $(this).addClass('fa-caret-up');
      $(this).removeClass('fa-caret-down');
    }
    
  });

}
if ($(window).width() < 1200) {
  $('.packageSec-main .row').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
}

function showLoader() {
  document.getElementById('loader').style.display = 'block';
}

function hideLoader() {
  document.getElementById('loader').style.display = 'none';
}


// function updatePagination(totalPages, currentPage, type) {
//   $('#pagination-container').empty();

//   if (currentPage > 1) {
//       $('#pagination-container').append('<button class="opt-num-btn" onclick="loadTransactions(' + (1) + ', \'' + type + '\')">&laquo;&laquo;</button>');
//   } else {
//       $('#pagination-container').append('<button class="opt-num-btn" disabled>&laquo;&laquo;</button>');
//   }

//   if (currentPage > 1) {
//       $('#pagination-container').append('<button class="opt-num-btn" onclick="loadTransactions(' + (currentPage - 1) + ', \'' + type + '\')">&laquo;</button>');
//   } else {
//       $('#pagination-container').append('<button class="opt-num-btn" disabled>&laquo;</button>');
//   }

//   $('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

//   for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
//       $('#pagination-container').append('<button class="opt-num-btn" onclick="loadTransactions(' + i + ', \'' + type + '\')">' + i + '</button>');
//   }

//   if (currentPage + 2 < totalPages - 1) {
//       // Display ellipsis or any other indicator for more pages
//       $('#pagination-container').append('<button class="opt-num-btn" disabled>&hellip;</button>');
//   }

//   if (totalPages > currentPage) {
//       $('#pagination-container').append('<button class="opt-num-btn" onclick="loadTransactions(' + (currentPage + 1) + ', \'' + type + '\')">&raquo;</button>');
//   } else {
//       $('#pagination-container').append('<button class="opt-num-btn" disabled>&raquo;</button>');
//   }

//   if (totalPages > currentPage + 1) {
//       $('#pagination-container').append('<button class="opt-num-btn" onclick="loadTransactions(' + totalPages + ', \'' + type + '\')">&raquo;&raquo;</button>');
//   } else {
//       $('#pagination-container').append('<button class="opt-num-btn" disabled>&raquo;&raquo;</button>');
//   }
// }


function updatePagination(totalPages, currentPage, type, updateFunction) {
  
  $('#pagination-container').empty();
  if(updateFunction=='loadTransactions'){
  if (currentPage > 1) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(1, \'' + type + '\')">&laquo;&laquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;&laquo;</button>');
  }

  if (currentPage > 1) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage - 1) + ', \'' + type + '\')">&laquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;</button>');
  }

  $('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

  for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + i + ', \'' + type + '\')">' + i + '</button>');
  }

  if (currentPage + 2 < totalPages - 1) {
    // Display ellipsis or any other indicator for more pages
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&hellip;</button>');
  }

  if (totalPages > currentPage) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage + 1) + ', \'' + type + '\')">&raquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;</button>');
  }
  
  if (totalPages > currentPage ) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + totalPages + ', \'' + type + '\')">&raquo;&raquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;&raquo;</button>');
  }
}
else{

  
  if (currentPage > 1) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(1)">&laquo;&laquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;&laquo;</button>');
  }

  if (currentPage > 1) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage - 1) + ')">&laquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;</button>');
  }

  $('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

  for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + i + ')">' + i + '</button>');
  }

  if (currentPage + 2 < totalPages - 1) {
    // Display ellipsis or any other indicator for more pages
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&hellip;</button>');
  }

  if (totalPages > currentPage) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage + 1) + ')">&raquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;</button>');
  }
  
  if (totalPages > currentPage) {
    $('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + totalPages + ')">&raquo;&raquo;</button>');
  } else {
    $('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;&raquo;</button>');
  }



}
}