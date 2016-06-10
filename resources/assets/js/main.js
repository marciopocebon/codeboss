(function() {
  'use strict';

  $(function () {
    // abre modal login
    $('.btn-signin').on('click', function () {
      $('.signin').addClass('signin--show');

      // fecha modal de login com esc
      $(document).one('keypress', function(event) {
        console.log(event);
        if (event.keyCode == 27) {
          var signin = $('.signin.signin--show');
          if (signin.length) {
            signin.removeClass('signin--show');
          }
        }
      });
    });

    // fecha modal de login clicando no overlay ou no x
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
