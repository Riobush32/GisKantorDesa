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
					// icon marker 
					L.polygon([
						[2.9865329927131694, 99.62609010299207],
						[2.9809582394054415, 99.62579003248779],
						[2.9806801273565053, 99.63030429726133],
						[2.9834383778726297, 99.63048746520107],
						[2.98362341536546, 99.63081336626274],
						[2.9838463918162432, 99.630880350004],
						[2.984152188018017, 99.63081974566666],
						[2.984974014888702, 99.63019456408139],
						[2.986035405286456, 99.62862365544787],
						[2.98650656445891, 99.62711345259245],
					], {
						color: 'red'
					}).addTo(map);

				</script>
			</div>
		</div>
	</div>
</div>
