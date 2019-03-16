google.maps.event.addDomListener(window,'load', initialize);

function initialize() {

var autocomplete = new google.maps.places.Autocomplete(document.getElementById('textautocomplete'));

google.maps.event.addListener(autocomplete,'place_changed', function () {
    var places = autocomplete.getPlace();
    var locations = places.formatted_address;
    var lat = places.geometry.location.lat();
    var long = places.geometry.location.lng();
    document.getElementById('hosAddress').value = locations;
    document.getElementById('latValue').value = lat;
    document.getElementById('longValue').value = long;
    console.log(locations);
    console.log(lat);
    console.log(long);
  });
};
