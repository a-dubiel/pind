/**
 * Theme Name: WordPress PIND Theme
 * Theme URI: http://www.pind.pitt.edu
 * Author: Fame
 * Author URI: http://itsfame.co
 * Description: PIND
 * Version: 1.0.0
 * License: MIT
 */

;(function($, window, document, undefined) {

  'use strict';

  /**
   * Search Form
   *
   * @namespace SearchForm
   * @author Ultron
   */

  var SearchForm = {

    init: function() {

      this._cache();
      this._events();

    }, // init()

    _cache: function() {

      this.$win = $(window);
      this.$html = $('html');

    }, // _cache()

    _events: function() {

      this.$html.on(
        'click.component.SearchForm',
        '.menu-item-29',
        this.showSearchForm.bind(this)
      );

    }, // _events()

    showSearchForm: function(e) {
      e.preventDefault();

      var form = ['<div id="search-form" class="c-search-form__wrap">',
        '<form role="search" method="get" id="searchform" class="c-search-form" action="/">',
            '<input type="text" placeholder="Type your keyword here" class="c-search-form__input" name="s" id="s" />',
            '<input type="submit" class="c-search-form__button" id="searchsubmit" value="Search" />',
        '</form>',
      '</div>'].join('');

      $.magnificPopup.open({
        items: {
          src: form,
          type: 'inline'
        }
      });
    } // showSearchForm()

  }; // SearchForm

  SearchForm.init();

})(jQuery, window, document);

;(function($, window, document, undefined) {

  'use strict';

  /**
   * Navigation
   *
   * @namespace Nav
   * @author Ultron
   */

  var Nav = {

    init: function() {

      this._cache();
      this._events();
      this.initHeadroom();
      this.checkLabsUrl();
    }, // init()

    _cache: function() {

      this.$win = $(window);
      this.$html = $('html');
      this.$body = $('body');

    }, // _cache()

    _events: function() {

      this.$html.on(
        'click.component.Nav',
        '.js-toggle-nav',
        this.toggleNav.bind(this)
      );

    }, // _events()

    toggleNav: function(e) {
      e.preventDefault();
      this.$body.toggleClass('has-nav-open');
    }, // showNav()

    checkLabsUrl: function() {
      if(window.location.href.indexOf('labs') > -1) {
        $('.js-nav li').removeClass('current_page_parent');
        $('#menu-item-1788').addClass('current_page_parent');
      }
    }, // showNav()

    initHeadroom: function() {
      var myHeader = document.querySelector('.js-header');
      var headroom  = new Headroom(myHeader, { offset: 85 });
      headroom.init();
    } // initHeadroom()

  }; // Nav

  Nav.init();

})(jQuery, window, document);

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

;
(function($, window, document, undefined) {

  'use strict';

  /**
   * Search Form
   *
   * @namespace Video
   * @author Ultron
   */

  var Video = {

    init: function() {

      this._cache();
      this._bindVideo();

    }, // init()

    _cache: function() {

      this.$video = $('.js-video');

    }, // _cache()


    _bindVideo: function() {

        this.$video.magnificPopup({
          type: 'iframe',
          iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
              '<div class="mfp-close"></div>' +
              '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
              '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

            patterns: {
              youtube: {
                index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                id: 'v=', // String that splits URL in a two parts, second part should be %id%
                // Or null - full URL will be returned
                // Or a function that should return %id%, for example:
                // id: function(url) { return 'parsed id'; }

                src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
              },
              vimeo: {
                index: 'vimeo.com/',
                id: '/',
                src: '//player.vimeo.com/video/%id%?autoplay=1'
              },
              gmaps: {
                index: '//maps.google.',
                src: '%id%&output=embed'
              }

              // you may add here more sources

            },

            srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
          }
        });
      } // showVideo()

  }; // Video

  Video.init();

})(jQuery, window, document);

;
(function($, window, document, undefined) {

  'use strict';

  /**
   * Search Form
   *
   * @namespace Gallery
   * @author Ultron
   */

  var Gallery = {

    init: function() {

      this._cache();
      this._bindGallery();

    }, // init()

    _cache: function() {

      this.$gallery = $('.js-gallery');

    }, // _cache()


    _bindGallery: function() {

        this.$gallery.magnificPopup({
          type: 'image',
          gallery: {
            enabled: true,
            navigateByImgClick: true
          }
        });
      } // showGallery()

  }; // Gallery

  Gallery.init();

})(jQuery, window, document);

;
(function($, window, document, undefined) {

  'use strict';

  /**
   * Contact section
   *
   * @namespace Contact
   * @author Andrzej Dubiel
   */

  var Contact = {

    /**
     * Initialize namespace object
     * @function init
     * @memberof Contact
     */

    init: function() {

      if ($('.js-map').length) {
        this.cache();
        this._createMap();
        this._createMarker();
      }
    }, // init()

    /**
     * Cache reusable data
     * @function cache
     * @memberof Contact
     */

    cache: function() {

      this.$map = $('.js-map');

      this.settings = {
        // How zoomed in you want the map to start at (always required)
        zoom: 12,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(52.117309, 21.008074), // New York

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{
          'featureType': 'administrative',
          'elementType': 'all',
          'stylers': [{
            'visibility': 'on'
          }, {
            'lightness': 33
          }]
        }, {
          'featureType': 'landscape',
          'elementType': 'all',
          'stylers': [{
            'color': '#f2e5d4'
          }]
        }, {
          'featureType': 'poi.park',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#c5dac6'
          }]
        }, {
          'featureType': 'poi.park',
          'elementType': 'labels',
          'stylers': [{
            'visibility': 'on'
          }, {
            'lightness': 20
          }]
        }, {
          'featureType': 'road',
          'elementType': 'all',
          'stylers': [{
            'lightness': 20
          }]
        }, {
          'featureType': 'road.highway',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#c5c6c6'
          }]
        }, {
          'featureType': 'road.arterial',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#e4d7c6'
          }]
        }, {
          'featureType': 'road.local',
          'elementType': 'geometry',
          'stylers': [{
            'color': '#fbfaf7'
          }]
        }, {
          'featureType': 'water',
          'elementType': 'all',
          'stylers': [{
            'visibility': 'on'
          }, {
            'color': '#acbcc9'
          }]
        }]
      };

      this.pin = {
        url: '/wp-content/themes/canvas/images/map-pin.png',
        size: new google.maps.Size(60, 76),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(15, 38),
        scaledSize: new google.maps.Size(30, 38)
      };

    }, // cache()

    /**
     * Create google map
     * -------------------------------------------------------------------------
     */

    _createMap: function() {

      this.map = new google.maps.Map(document.querySelector('.js-map'), this.settings);

    }, // _createMap()

    /**
     * Create marker
     * -------------------------------------------------------------------------
     */

    _createMarker: function() {

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(52.117309, 21.008074),
        map: this.map,
        title: 'Canvas',
        icon: this.pin
      });

    }, // _createMarker()




  }; // Contact

  Contact.init();

})(jQuery, window, document);

