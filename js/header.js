$(document).scroll(function(){
  $('header').toggleClass('header-shadow', $(this).scrollTop() > 0);
})

function toDo() {
  alert('This feature is not yet implemented!');
}
