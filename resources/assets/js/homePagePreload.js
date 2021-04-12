$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').addClass('loaded').scrollTop(0);
     setTimeout(function() {
        $('#preload-homepage').addClass('fade-in');
        }, 2500);

    setTimeout(function() {
        $('#preload-homepage').css('display', 'none');
        }, 3500);

    setTimeout(function() {
        $('#app').css('display', 'block');
        $('header').css('display', 'grid');
        $('#header-bottom').css('display', 'grid');
        $('body').removeClass('animation');
        $('body').removeClass('animation');
        }, 3500);

    setTimeout(function() {
        $('#app').addClass('fade-up');
        $('header').addClass('fade-up');
        $('#header-bottom').addClass('fade-up');
        }, 3525);

  } else {
    $('body').removeClass('animation');
    $('#preload-homepage').css('display', 'none');
    $('header').removeClass('fade-up').removeClass('nav-header-animation');
    $('#app').removeClass('fade-up').removeClass('product-grid-animation');
    $('#header-bottom').removeClass('fade-up').removeClass('title-animation');
  }
});