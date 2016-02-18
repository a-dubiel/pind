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
