/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.

  }
};

Drupal.behaviors.debug = {
  attach: function(context, settings) {
/*
    var width = $(window).width();
    alert(width);
*/
  }
}

Drupal.behaviors.hrBlocks = {
  attach: function(context, settings) {
    var block = $('.block-wat-doen-we-hr ul li');
    block.hover(function() {
      $(this).find('.title').fadeOut();
      $(this).find('.sub').fadeIn();
    }, function() {
      $(this).find('.title').fadeIn();
      $(this).find('.sub').fadeOut();      
    });
  }
}

Drupal.behaviors.hrTeam = {
  attach: function(context, settings) {
    var member = $('.block-wie-zijn-we-hr ul li.team-member');
    member.hover(function() {
      var normal_path = $(this).find('img').attr('src');
      var hover_path = normal_path.replace('image_normal', 'image_hover').replace('normal.png', 'hover.png');
      $(this).find('img').attr('src', hover_path);
    }, function() {
      var hover_path = $(this).find('img').attr('src');
      var normal_path = hover_path.replace('image_hover', 'image_normal').replace('hover.png', 'normal.png');
      $(this).find('img').attr('src', normal_path);
    });
  }
}

Drupal.behaviors.phoneMenu = {
  attach: function(context, settings) {
    $('a#responsive-main-menu').click(function (e) {
      var menu = $('#navigation .block-menu');
      var height = menu.height();
      if (height == 40) {
        $(menu).css({height: "auto"});
      } else {
        $(menu).css({height: "40px"});
      }

      e.preventDefault();
    });
  }
}

Drupal.behaviors.toTop = {
  attach: function(context, settings) {
    if ($(window).width() > 500) {
      $(window).scroll(function() {
        var top = Math.abs($('html').offset().top);
        if (top > 300) {
          $('a#to-top').fadeIn();
        } else {
          $('a#to-top').fadeOut();
        }
      });
      $('a#to-top').click(function() {
        $('html, body').animate({scrollTop:0}, "slow");
        return false;
      });
    } 
  }
}

Drupal.behaviors.frontReferenties = {
  attach: function(context, settings) {
    $('.block-ons-werk .view-content').flexslider({
      easing: 'easeInOutExpo',
      animation: 'slide',
      controlNav: false,
    });
  }
}

Drupal.behaviors.mainReferenties = {
  attach: function(context, settings) {
    $('.block-main-referenties ul.referenties li.referentie').hover(function() {
      $(this).find('.show-more').fadeIn("slow");
    }, function() {
      $(this).find('.show-more').fadeOut("slow");    
    });
  }
}

})(jQuery, Drupal, this, this.document);
