$(function() {
    if (!sessionStorage.getItem('Pageloader')) {
      // sessionStorage.setItem('homePagePreloader', true);
      $('#page-loader').css('display', 'flex');
      setTimeout(function() {
          $('#page-loader').css('display', 'none');
          $('#body-pageloader').css('visibility', 'visible');
          }, 2200);
    } else {
      $('#page-loader').css('display', 'none');
    }
  });
