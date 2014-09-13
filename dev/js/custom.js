/* Custom JS for Corry2015 */
jQuery(document).ready( function() {

  // search bar
  jQuery('.search-container.closed').click(function(){
    jQuery(this).removeClass('closed');
    jQuery(this).addClass('open');
    jQuery(this).animate({
      width: ["160px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('.search-field').animate({
      width: ["120px", "swing"],
      padding: ["0px 10px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery(this).children('form').children('div').children('.search-submit').animate({
      width: ["30px", "swing"],
      borderLeft: ["1px", "swing"]
    }, 200, function(){
      // done!
    });
    jQuery('.search-field').focus();
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
  jQuery('.entry-content').children('figure').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });
  jQuery('.page-content').children('p').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });
  jQuery('.page-content').children('figure').children('a').children('img').each(function(){
    jQuery(this).parent('a').addClass("img-container");
  });

  // smooth scrolling for anchor links
  // stolen from http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links/
  $(document).ready(function() {
    function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
    }
    var locationPath = filterPath(location.pathname);
    var scrollElem = scrollableElement('html', 'body');
   
    $('a[href*=#]').each(function() {
      var thisPath = filterPath(this.pathname) || locationPath;
      if (  locationPath == thisPath
      && (location.hostname == this.hostname || !this.hostname)
      && this.hash.replace(/#/,'') ) {
        var $target = $(this.hash), target = this.hash;
        if (target) {
          var targetOffset = $target.offset().top;
          $(this).click(function(event) {
            event.preventDefault();
            $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
              location.hash = target;
            });
          });
        }
      }
    });
   
    // use the first element that is "scrollable"
    function scrollableElement(els) {
      for (var i = 0, argLength = arguments.length; i <argLength; i++) {
        var el = arguments[i],
            $scrollElement = $(el);
        if ($scrollElement.scrollTop()> 0) {
          return el;
        } else {
          $scrollElement.scrollTop(1);
          var isScrollable = $scrollElement.scrollTop()> 0;
          $scrollElement.scrollTop(0);
          if (isScrollable) {
            return el;
          }
        }
      }
      return [];
    }
   
  });

  // blockquote cite tags subbed in for <del> tags
  jQuery('blockquote p del').each(function(){
    jQuery(this).parent('p').addClass("cite");
    jQuery(this).replaceWith(function(){
      return $("<cite />", {html: $(this).html()});
    });
  });

});