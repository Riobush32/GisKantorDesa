<div id="map" style="width: 100%; height:600px"></div>

<script src="<?=base_url('src/script/jj.js')?>"></script>

<script>
	

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
