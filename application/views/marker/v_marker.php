<div id="map" style="width: 100%; "></div>


<script>
	var peta1 = L.tileLayer(
		'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		});

	var peta2 = L.tileLayer(
		'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/satellite-v9'
		});


	var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

	var peta4 = L.tileLayer(
		'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/dark-v10'
		});
        
        


	var map = L.map('map', {
		center: [2.983498226962545, 99.62787791325914],
		zoom: 15,
		layers: [peta1],
	});

    var baseLayers = {
		'Default': peta1,
		'Satelit': peta2,
        'Street': peta3,
        'Dark': peta4,
	};
    

    var layerControl = L.control.layers(baseLayers).addTo(map);

    // icon marker 
    var kantor = L.icon({
        iconUrl: '<?=base_url('icon/gedung.png')?>',
        iconSize: [30, 50],
    });

    var jembatan = L.icon({
        iconUrl: '<?=base_url('icon/jembatan.png')?>',
        iconSize: [30, 50],
    });

    //marker control
    L.marker([2.9838571557405182, 99.62799861265798],{icon:kantor}).bindPopup("<b>ini Informasi</b> <br>"+"Lorem ipsum dolor sit amet."+"<img src='<?=base_url('gambar/1.png')?>' width='300px'>").addTo(map);

    L.marker([2.984802691437854, 99.62730660277144]).bindPopup("<b>ini Informasi</b> <br>"+"Lorem ipsum dolor sit amet.").addTo(map);

    L.marker([2.9807658118897002, 99.62719374969193]).bindPopup("<b>ini Informasi</b> <br>"+"Lorem ipsum dolor sit amet.").addTo(map);

    L.marker([2.983392793155972, 99.62788926272658]).bindPopup("<b>ini Informasi</b> <br>"+"Lorem ipsum dolor sit amet.").addTo(map);

    L.marker([2.9838815558130327, 99.62739695693672], {icon:jembatan}).bindPopup("<b>ini Informasi</b> <br>"+"Lorem ipsum dolor sit amet.").addTo(map);


</script>
