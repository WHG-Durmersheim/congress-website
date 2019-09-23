// Declare variables
var query, filter, list, listItems, txtValue;
query = getUrlParameter('q');
filter = query.toUpperCase();
list = document.getElementById('results');
listItems = list.getElementsByTagName('a');

// Set results-for
document.getElementById('results-for').innerHTML = query;

// Loop through all list items, and hide those who don't match the search query
for (i = 0; i < listItems.length; i++) {
  txtValue = listItems[i].innerHTML;
  if (txtValue.toUpperCase().indexOf(filter) > -1) {
    listItems[i].style.display = '';
  } else {
    listItems[i].style.display = 'none';
  }
}

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};
