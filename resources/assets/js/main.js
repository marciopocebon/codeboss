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

    // busca do blog
    $('#search').on('submit', function(event) {
      event.preventDefault();
      var form = $(event.target);

      if (!form.hasClass('open')) {
        form.addClass('open').find('#s').trigger('focus');
        event.preventDefault();
      } else {
        var input = form.find('#s');

        if (!input.val().length) {
          input.addClass('error').focus();
          event.preventDefault();
        } else
          input.removeClass('error');
      }
    });

    // fecha busca do blog
    $('body').on('click', function(event) {
      if (!$(event.target).closest('#search').length)
        if ($('#search').hasClass('open'))
          $('#search').removeClass('open').find('#s').removeClass('error');
    });

    $('ul.list-aulas li').on('click', function(e) {
      var target = $('.box-aula');
      $(this).addClass('active').siblings('li').removeClass('active');
      if (!target.hasClass('box-aula-open')) {
        var _h = $(window).height();

        $('.box-aula').height(_h);
        $('.box-aula iframe').height(_h - 185);

        $('aside').hide();
      }

      $('html, body').stop().animate({ scrollTop: (target.offset().top) }, 500, 'swing', function() {
        $('.box-aula').addClass('box-aula-open');
      });

      e.preventDefault();
    });

    $('.box-aula .close').on('click', function() {
      var target = $('.box-aula');
      $('ul.list-aulas li').removeClass('active');
      target.removeClass('box-aula-open').css({height: 0});
      $('aside').show();
    });

    $('.btn-discussao').on('click', function(e) {
      $('html, body').animate({ scrollTop: $('.box-discussao').offset().top - 20 }, 500);

      e.preventDefault();
    });

    // editor
    $('.text-editor').trumbowyg({
      lang: 'pt',
      resetCss: true,
      autogrow: true,
      btns: [
        ['viewHTML'],
        'btnGrp-semantic',
        ['link'],
        'btnGrp-lists',
        ['preformatted']
      ]
    });
  });
})();
