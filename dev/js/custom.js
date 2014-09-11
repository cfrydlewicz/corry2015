/* Custom JS for Corry2015 */
jQuery(document).ready( function() {

  // search bar
  jQuery('.search-container').click(function(){
    jQuery(this).toggleClass('open');
    jQuery(this).animate({
      width: ["140px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('#s').animate({
      width: ["100px", "swing"],
      padding: ["0px 10px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('#searchsubmit').animate({
      width: ["30px", "swing"],
      borderLeft: ["1px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery('#s').focus();
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

  // single pages
  jQuery('.single .time-nav a').mouseenter(function(){
    jQuery(this).animate({
      width: ["98%", "swing"]
    }, 400, function(){
      // done!
    });
  });
  jQuery('.single .time-nav a').mouseleave(function(){
    jQuery(this).animate({
      width: ["92%", "swing"]
    }, 200, function(){
      // done!
    });
  });

  // content images wrapped in link fix
  jQuery('.entry-content').children('p').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });

  jQuery('.entry-content a').mouseenter(function(){
    if ( jQuery(this).hasClass('img-container') ){
      // do nothing
    }
    else if ( jQuery(this).parent('div').hasClass('alignleft') ){
      // do nothing
    }
    else if ( jQuery(this).parent('div').hasClass('alignright') ){
      // do nothing
    }
    else if ( jQuery(this).parent('div').hasClass('aligncenter') ){
      // do nothing
    }
    else {
      jQuery(this).animate({
        padding: ["+=2px", "swing"]
        }, 200, function(){
          // done!
        });
    }
  });
  jQuery('.entry-content a').mouseleave(function(){
    if ( jQuery(this).hasClass('img-container') ){
      // do nothing
    }
    else {
      jQuery(this).animate({
        padding: ["-=2px", "swing"]
        }, 200, function(){
          // done!
        });
    }
  });


});