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


})(jQuery, Drupal, this, this.document);
;
