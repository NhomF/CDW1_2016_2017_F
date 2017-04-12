function currencyOpen() {
  document.getElementById("my-chosen-drop").classList.toggle("show");
}

function menuOpen() {
  document.getElementById("my-top-panel__menu").classList.toggle("show");
}

$(document).ready(function(e) {

  // $('.li_child_click').click(function(e) {

  //   if (!$('.show_submenu').length) {
  //        $(this).addClass('show_submenu');

  //   }else{
  //       $(this).removeClass('show_submenu');
  //   }

  // });

  $('.a_main_click').click(function(e) {
    if (!$('.close_click').length) {
      $(this).addClass('close_click');

    } else {
      $(this).removeClass('close_click');
    }
  });
  
  $('.a_sub_click').click(function(e) {
    if (!$('.close_click_sub').length) {
      $(this).addClass('close_click_sub');

    } else {
      $(this).removeClass('close_click_sub');
    }
  });



  $(window).resize(function() {
      
     if ($(window).width() >= 868) {
         $('.sub-menu').css('display', 'block');      
      }
      else{
        $('.sub-menu').css('display', 'none');    
      }
  });



    $(function() {
      $('.main-menu').find('> li').click(function() {
        $(this).find('> ul').stop(true, true).slideToggle(1);
        return false;
      });
    });

    $(function() {
      $('.sub-menu').find('> li').click(function() {
        $(this).find('> ul').stop(true, true).slideToggle(1);

        return false;
      });
    });

  /*----------back to top---------*/

  if ($('.click-top').length) {
    var scrollTrigger = 100, // px
      backToTop = function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $('.click-top').css('display', 'block')
        } else {
          $('.click-top').css('display', 'none')
        }
      };
    backToTop();
    $(window).on('scroll', function() {
      backToTop();
    });
    $('.click-top').on('click', function(e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
    });
  }

  /*------------------------------*/

  window.onclick = function(event) {
    if (!event.target.matches('.caret-down') && !event.target.matches('.usd')) {
      var dropdowns = document.getElementsByClassName("chosen-drop");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


  window.onclick = function(event) {
    if (!event.target.matches('.fa-bars')) {
      var dropdowns = document.getElementsByClassName("top-panel__menu");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

})