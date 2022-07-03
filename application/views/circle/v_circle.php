<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-0">
				<h6><?= $judul ?></h6>
			</div>
			<hr>
			<div class="card-body px-4 pt-4 pb-4" style="height:600px">

				<div id="map" style="width: 100%; height:600px"></div>

				<script src="<?=base_url('src/script/jj.js')?>"></script>

				<script>
					// icon circle




					L.circle([2.9838571557405182, 99.62799861265798], {
						radius: 300,
						color: 'blue',
						fillColor: 'lightblue',
						fillOpacity: 0.5,
					}).addTo(map);

				</script>
			</div>
		</div>
	</div>
</div>
