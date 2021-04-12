$(function() {
    $('#page-loader').click(function() {
      $(this)
        .remove();
    });
    if (!sessionStorage.getItem('Pageloader')) {
      // sessionStorage.setItem('homePagePreloader', true);
      $('#page-loader').css('display', 'flex');
      setTimeout(function() {
          $('#page-loader').css('display', 'none');
          $('#body-pageloader').css('visibility', 'visible');
          }, 2000);
    } else {
      $('#page-loader').css('display', 'none');

    }
  });
