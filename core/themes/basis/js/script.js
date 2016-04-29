(function ($) {
"use strict";

Backdrop.behaviors.toggles = {
  attach: function(context, settings) {
    var $toggles = $('[data-toggle]');

    $toggles.click(function(){
      var $this = $(this);
      var $target = $('[data-toggleable="' + $this.attr('data-toggle') + '"]');
      $target.toggleClass('js-toggled');
    });
  }
}

})(jQuery);
