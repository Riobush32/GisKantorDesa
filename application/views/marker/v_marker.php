<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-2" style="position:relative">
				<h6>
					<?= $judul ?>
					<a href="<?=base_url('gis/makeMarker')?>" class="btn bg-gradient-primary" style="position:absolute; right:0px; margin-right:20px;">
						
							<svg fill="white" role="img" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<title>AddThis</title>
								<path
									d="M18 13.496h-4.501v4.484h-3v-4.484H6v-2.99h4.5V6.021h3.001v4.485H18v2.99zM21 .041H3C1.348.043.008 1.379 0 3.031v17.94c.008 1.65 1.348 2.986 3 2.988h18c1.651-.002 2.991-1.338 3-2.988V3.031c-.009-1.652-1.348-2.987-3-2.99z" />
							</svg>
                            <span >Add</span>    
					
					
						
					</a>
				</h6>


			</div>
			<hr>
			<div class="card-body px-4 pt-4 pb-4" style="height:600px">

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
					L.marker([2.9838571557405182, 99.62799861265798], {
						icon: kantor
					}).bindPopup("<b>ini Informasi</b> <br>" + "Lorem ipsum dolor sit amet." +
						"<img src='<?=base_url('gambar/1.png')?>' width='300px'>").addTo(map);

					L.marker([2.984802691437854, 99.62730660277144]).bindPopup("<b>ini Informasi</b> <br>" +
						"Lorem ipsum dolor sit amet.").addTo(map);

					L.marker([2.9807658118897002, 99.62719374969193]).bindPopup("<b>ini Informasi</b> <br>" +
						"Lorem ipsum dolor sit amet.").addTo(map);

					L.marker([2.983392793155972, 99.62788926272658]).bindPopup("<b>ini Informasi</b> <br>" +
						"Lorem ipsum dolor sit amet.").addTo(map);

					L.marker([2.9838815558130327, 99.62739695693672], {
						icon: jembatan
					}).bindPopup("<b>ini Informasi</b> <br>" + "Lorem ipsum dolor sit amet.").addTo(map);

				</script>

			</div>
		</div>
	</div>
</div>
