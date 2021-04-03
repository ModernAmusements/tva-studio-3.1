$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').addClass('loaded').scrollTop(0);
    setTimeout(function() {
        $('#app').addClass('fade-up');
        $('header').addClass('fade-up');
        $('#header-bottom').addClass('fade-up');
      }, 1100);
     setTimeout(function() {
        $('#preload-homepage').fadeOut();
        }, 1099);
  } else {
    $('body').removeClass('animation');
    $('#preload-homepage').css('display', 'none');
    $('header').removeClass('fade-up').removeClass('title-animation');
    $('#app').removeClass('fade-up').removeClass('title-animation');
    $('#header-bottom').removeClass('fade-up').removeClass('title-animation');
  }
});
