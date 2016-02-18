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
