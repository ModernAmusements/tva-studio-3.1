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
        $('header').addClass('nav-header-animation');
        }, 3500);

    setTimeout(function() {
        $('header').css('display', 'grid');
        $('#app').css('display', 'block');
        $('#header-bottom').css('display', 'grid');
        $('body').removeClass('animation');
        }, 3500);

    setTimeout(function() {
        $('#app').addClass('fade-up');
        $('header').addClass('fade-up');
        $('#header-bottom').addClass('fade-up');
        }, 3525);

  }
  else {
    $('#preload-homepage').css('display', 'none');
    setTimeout(function() {
        $('header').addClass('nav-header-animation');
        $('header').css('display', 'grid');
        $('#app').css('display', 'block');
        $('#header-bottom').css('display', 'grid');
        }, 10);
    setTimeout(function() {
        $('body').removeClass('animation');
        $('#app').addClass('fade-up');
        $('header').addClass('fade-up');
        $('#header-bottom').addClass('fade-up');
        }, 100);
  }
});