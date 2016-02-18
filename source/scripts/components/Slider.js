;
(function($, window, document, undefined) {

  'use strict';

  /**
   * Sliderigation
   *
   * @namespace Slider
   * @author Ultron
   */

  var Slider = {

    init: function() {

      this._cache();
      this._events();
      this.initSlider();

    }, // init()

    _cache: function() {

      this.$win = $(window);
      this.$html = $('html');
      this.$slider = $('.js-slider');

    }, // _cache()

    _events: function() {

    }, // _events()

    initSlider: function() {

      this.$slider.slick({
        slide: '.js-slider-item',
        mobileFirst: true,
        //arrows: true,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        autoplaySpeed: 8000,
        cssEase: 'ease-in-out',
        pauseOnHover: false,
        accessibility: false
      });

    } // initHeadroom()

  }; // Slider

  Slider.init();

})(jQuery, window, document);
