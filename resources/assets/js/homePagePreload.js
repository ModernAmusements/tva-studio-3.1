// Preloader
$(document).ready(function(){
    $('#preload-homepage').scrollTop(0);
});

$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .fadeOut('3000')
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    //  sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').addClass('loaded');

    setTimeout(function() {
        $('#app').addClass('fade-up');
        $('header').addClass('fade-up');
        $('#header-bottom').addClass('fade-up');
      }, 1100);
     setTimeout(function() {
        $('#preload-homepage').fadeOut();
        }, 1099);
  } else {
    $('#preload-homepage').css('display', 'none');
  }
});
