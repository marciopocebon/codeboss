(function() {
  'use strict';

  $(function() {
    $('#signin-link').on('click', function() {
      $('#signin-overlay').addClass('show');
    });

    $(document).on('click', function(e) {
      if ($(e.target).closest('#signin-link').length) {
        $("#signin-overlay").addClass('show');
      } else if (!$(e.target).closest('.login-box').length) {
        $('#signin-overlay').removeClass('show');
      }
    });
  });
})();
