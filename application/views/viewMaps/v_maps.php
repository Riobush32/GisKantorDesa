
<div id="map" style="width: 100%; "></div>
<script>

	var map = L.map('map').setView([51.505, -0.09], 13);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	


</script>

