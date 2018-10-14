// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 51.18774979135989, lng: -4.161995497619614};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
  infowindow = new google.maps.InfoWindow({content:"<b>Allender Farm</b><br/>North Devon, United Kingdom<br/>EX34 8LS Ilfracombe" });
  google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
  infowindow.open(map,marker);
}
