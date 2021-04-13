$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').addClass('loaded').scrollTop(0);
    $('body').addClass('dark-background');
     setTimeout(function() {
        $('#preload-homepage').addClass('fade-in');
        }, 2500);

    setTimeout(function() {
        $('#preload-homepage').css('display', 'none');
        $('header').addClass('nav-header-animation');
        }, 3500);

    setTimeout(function() {
        $('body').removeClass('dark-background');
        $('header').css('display', 'grid');
        $('#app').css('display', 'block');
        $('#header-bottom').css('display', 'grid');
        $('body').removeClass('animation');
        }, 3500);

    setTimeout(function() {
        $('#app').add('header').add('#header-bottom').addClass('fade-up');
        }, 3525);

  }
  else {

    $('#preload-homepage').css('display', 'none');
    setTimeout(function() {
        $('header').addClass('nav-header-animation').css('display', 'grid');
        $('#app').css('display', 'block');
        $('#header-bottom').css('display', 'grid');
        }, 10);
    setTimeout(function() {
        $('body').removeClass('animation');
        $('#app').add('header').add('#header-bottom').addClass('fade-up');
        }, 100);
  }
});