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




					L.polyline([
						[2.985480376022395, 99.62696598502153],
						[2.985397709380838, 99.6280666967526],
						[2.9837040400953523, 99.62803940422504],
						[2.983660589338449, 99.62863113670215],
						[2.983386849530427, 99.62862678572806],
						[2.983421610144757, 99.62837007825638],
						[2.9835345821337023, 99.62837442923046],
					], {
						color: 'red'
					}).addTo(map);

					L.polyline([
						[2.9903232173208356, 99.6240799288283],
						[2.9865518029232487, 99.62407992883657],
						[2.9889089384405585, 99.62991641509072],
						[2.9921794303922216, 99.62988311822517]

					], {
						color: 'salmon',
						weight: 5
					}).bindPopup("ini Adalah Informasi").addTo(map);

				</script>
			</div>
		</div>
	</div>
</div>
