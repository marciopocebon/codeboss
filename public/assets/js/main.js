(function() {
  'use strict';

  $(function () {
    $('#signin-link').on('click', function () {
      $('#signin-overlay').addClass('show');
    });

    $('#signin-overlay').on('click', function (event) {
      var target = $(event.target);
      if (target.attr('id') === 'signin-overlay') {
        target.removeClass('show');
      } else if (target.hasClass('close-login-box') || target.parent().hasClass('close-login-box')) {
        $('#signin-overlay').removeClass('show');
      }
    });
  });
})();