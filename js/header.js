function openMenu() {
  $('#nav-bg, nav').addClass('nav-open');
}

$('#nav-bg').click(function() {
  $('#nav-bg, nav').removeClass('nav-open');
});

$(document).scroll(function() {
  $('header').toggleClass('header-shadow', $(this).scrollTop() > 0);
})

function toDo() {
  alert('This feature is not yet implemented!');
}
