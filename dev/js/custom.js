/* Custom JS for Corry2015 */
jQuery(document).ready( function() {

  // search bar
  jQuery('.search-container').click(function(){
    jQuery(this).toggleClass('open');
    jQuery(this).animate({
      width: ["134px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('#s').animate({
      width: ["100px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('#searchsubmit').animate({
      width: ["30px", "swing"],
      borderLeft: ["1px", "swing"]
    }, 200, function(){
      // done!
    });
  });

  // top menu
  jQuery('.menu-container').click(function(){
    jQuery(this).toggleClass('open');
    jQuery(this).children('.inner-menu').slideToggle();
  });

  // time links - listing pages
  jQuery('.listing .time-nav a').mouseenter(function(){
    if ( jQuery(this).children('div').hasClass('newer') ){
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginBottom: ["12px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginTop: ["-=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
    else {
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginTop: ["12px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginBottom: ["-=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
  });
  jQuery('.listing .time-nav a').mouseleave(function(){
    if ( jQuery(this).children('div').hasClass('newer') ){
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginBottom: ["8px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginTop: ["+=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
    else {
      jQuery(this).children('div').children('svg').each(function(){
        jQuery(this).animate({
          marginTop: ["8px", "swing"]
        }, 200, function(){
          // done!
        });
        jQuery(this).parent().animate({
          marginBottom: ["+=4", "swing"]
        }, 200, function(){
          // done!
        });
      });
    }
  });

});