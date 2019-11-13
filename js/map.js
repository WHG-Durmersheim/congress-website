const floor0 = document.getElementById('floor0');
const floor1 = document.getElementById('floor1');
const floor2 = document.getElementById('floor2');
var lastElement;

function showFloor0() {
  floor1.classList.add('hidden');
  floor2.classList.add('hidden');
  floor0.classList.remove('hidden');
}

function showFloor1() {
  floor0.classList.add('hidden');
  floor2.classList.add('hidden');
  floor1.classList.remove('hidden');
}

function showFloor2() {
  floor0.classList.add('hidden');
  floor1.classList.add('hidden');
  floor2.classList.remove('hidden');
}

document.addEventListener('click', function(evt) {
    if (evt.target.tagName.toUpperCase() == 'TEXT') {
      var selectedElements = document.getElementsByClassName('selected');
      for (var i = 0; i < selectedElements.length; i++) {
        selectedElements[i].classList.remove('selected');
      }
      lastElement = document.getElementById(evt.target.parentElement.getAttribute('xlink:href').substr(1))
      lastElement.classList.add('selected');
      lastElement.scrollIntoView();
    }
}, false);
