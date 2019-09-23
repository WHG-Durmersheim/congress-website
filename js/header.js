function openMenu() {
  $('#nav-bg, nav').addClass('nav-open');
}

$('#nav-bg').click(function() {
  $('#nav-bg, nav').removeClass('nav-open');
});

function openSearch() {
  $('#defaultHeader').addClass('hidden');
  $('#searchHeader').removeClass('hidden');
}

function closeSearch() {
  $('#searchHeader').addClass('hidden');
  $('#defaultHeader').removeClass('hidden');
}

$(document).scroll(function() {
  $('header').toggleClass('header-shadow', $(this).scrollTop() > 0);
})