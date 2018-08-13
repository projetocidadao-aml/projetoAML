  $(document).ready(function () {
      $('.videoPlayDesafio A').on('click', function (e) {
          e.preventDefault();
          var u = $(this).attr('href');
          if ($(window).width() > 0) {
              var i = u.substring(u.search('=') + 1, u.length);
              $('#mPlayer DIV').html('<iframe width="100%" height="315" src="https://www.youtube.com/embed/' + i + '" frameborder="0" allowfullscreen></iframe>');
              $('#mPlayer').fadeIn(500);
          } else {
              window.location.href = u;
          }
      });
      $('#mPlayer').on('click', function (e) {
          $('#mPlayer').fadeOut(500);
          $('#mPlayer DIV').empty();

      });
  });
