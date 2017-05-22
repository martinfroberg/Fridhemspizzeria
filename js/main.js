
function initMap() {
 var uluru = {lat: 56.186731, lng: 14.857781};
  var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 14,
  center: uluru
});
  var marker = new google.maps.Marker({
     position: uluru,
     map: map
 });
}

      
      