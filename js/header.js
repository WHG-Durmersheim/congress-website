const navBg = document.getElementById('nav-bg');
const nav = document.getElementsByTagName('NAV');
const defaultHeader = document.getElementById('defaultHeader');
const searchHeader = document.getElementById('searchHeader');
const header = document.getElementsByTagName('HEADER');
var i;

function openMenu() {
  navBg.classList.add('nav-open');
  for (i = 0; i < nav.length; i++) {
    nav[i].classList.add('nav-open');
  }
}

function closeMenu() {
  for (i = 0; i < nav.length; i++) {
    nav[i].classList.remove('nav-open');
  }
  navBg.classList.remove('nav-open');
}
navBg.addEventListener('click', closeMenu);

function openSearch() {
  defaultHeader.classList.add('hidden');
  searchHeader.classList.remove('hidden');
}

function closeSearch() {
  searchHeader.classList.add('hidden');
  defaultHeader.classList.remove('hidden');
}

function handleScroll() {
  for (i = 0; i < header.length; i++) {
    header[i].classList.toggle('header-shadow', window.pageYOffset > 0);
  }
}
document.addEventListener('scroll', handleScroll);
