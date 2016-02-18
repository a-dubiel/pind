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
