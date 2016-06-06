(function() {
  'use strict';

  $(function () {
    $('.btn-signin').on('click', function () {
      $('.signin').addClass('signin--show');
    });

    $('.signin').on('click', function (event) {
      var target = $(event.target);
      if (target.hasClass('signin')) {
        target.removeClass('signin--show');
      } else if (target.hasClass('btn-close') || target.parent().hasClass('btn-close')) {
        $('.signin').removeClass('signin--show');
      }
    });
  });
})();
