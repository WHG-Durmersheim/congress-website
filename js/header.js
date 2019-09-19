$(document).scroll(function(){
  $('header').toggleClass('header-shadow', $(this).scrollTop() > 0);
})
