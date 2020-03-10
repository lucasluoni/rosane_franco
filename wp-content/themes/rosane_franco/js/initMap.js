function initMap() {
	var agencia = {lat: -22.9112, lng: -43.1729};
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 14,
	  center: agencia
	});
	var marker = new google.maps.Marker({
	  position: agencia,
	  map: map
	});
}