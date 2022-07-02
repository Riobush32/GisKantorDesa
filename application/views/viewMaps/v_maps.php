<div id="map" style="width: 100%; height:600px"></div>
<script>

	var map = L.map('map').setView([2.983498226962545, 99.62787791325914], 15);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	


</script>

