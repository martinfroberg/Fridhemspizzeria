


function initMap() {
 var PizzeriaFridhem = {lat: 56.186731, lng: 14.857781};
  var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 14,
  center: PizzeriaFridhem
});
  var marker = new google.maps.Marker({
     position: PizzeriaFridhem,
     map: map
 });
}
