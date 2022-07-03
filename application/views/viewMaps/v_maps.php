<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-0">
				<h6><?= $judul ?></h6>
			</div>
			<hr>
			<div class="card-body px-4 pt-4 pb-4" style="height:600px">
				<div id="map" style="width: 100%; height:600px"></div>
				<script>
					var map = L.map('map').setView([2.983498226962545, 99.62787791325914], 15);

					var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
						maxZoom: 19,
						attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
					}).addTo(map);

				</script>

			</div>
		</div>
	</div>
</div>
