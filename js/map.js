var floor0 = document.getElementById('floor0');
var floor1 = document.getElementById('floor1');
var floor2 = document.getElementById('floor2');

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