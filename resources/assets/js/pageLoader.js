$(function() {
    if (!sessionStorage.getItem('Pageloader')) {
      // sessionStorage.setItem('homePagePreloader', true);
      $('#page-loader').css('display', 'flex');
      $('header').css('display', 'grid');
      setTimeout(function() {
          $('#page-loader').css('display', 'none');
          $('#body-pageloader').css('visibility', 'visible');
          }, 2000);
      setTimeout(function() {
        $('#page-loader').css('display', 'none');
        $('#body-pageloader').css('visibility', 'visible');
        }, 3000);
    } else {
      $('#page-loader').css('display', 'none');
    }
  });
