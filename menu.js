//MENU GLOBAL
$(document).ready(function(){
  $('.menucross').click(function(){
    $('#menuresp').toggleClass('menuheight', 400, 'easeOutSine');
    $(this).toggleClass('open');
    //$('html, body').animate({ scrollTop: $('#menuresp').offset().top}, 'slow');//
  });
  //MENU MOBILE VS DESKTOP
  if ($(window).width() ) {
    $('li.sousmenu').click(function() {
      $(this).find('i').toggleClass('rotation');
      $(this).toggleClass('sousmenuheight', 400, 'easeOutSine');
      //$('html, body').animate({ scrollTop: $(this).offset().top}, 'slow');//
    });
  }
});

