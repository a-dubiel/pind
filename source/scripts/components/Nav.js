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
