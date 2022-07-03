<div class="row">
	<div class="col-9">
		<div class="card mb-4">
			<div class="card-header pb-0">
				<h6>
					<?= $judul ?>
					<a href="<?=base_url('gis/marker')?>" class="btn bg-gradient-danger"
						style="position:absolute; right:0px; margin-right:20px;">

						<span style="margin-right:5px">Cancel</span>
						<svg fill="white" role="img" width="20px" viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg">
							<title>iFixit</title>
							<path
								d="M15.345 12.506l2.37 3.131c.198.261.211.69.025.961l-.119.177c-.181.27-.55.645-.814.831l-.285.201c-.266.195-.697.195-.956-.016l-3.135-2.369c-.255-.195-.681-.195-.94 0l-3.136 2.369c-.258.211-.689.211-.956.03l-.207-.135c-.27-.181-.641-.556-.825-.81l-.181-.256c-.186-.27-.18-.689.018-.96l2.377-3.149c.195-.256.195-.675 0-.945L6.197 8.43c-.194-.263-.203-.69-.013-.957l.2-.285c.187-.264.56-.629.828-.814l.175-.119c.27-.196.703-.182.961.014l3.135 2.37c.26.195.684.195.942 0l3.135-2.385c.258-.195.698-.226.979-.061l.33.195c.28.165.639.524.795.81l.12.21c.154.285.123.721-.075.99l-2.37 3.135c-.194.255-.194.676 0 .945l.006.028zM12 0C5.37 0 0 5.373 0 12s5.37 12 12 12c6.627 0 12-5.373 12-12S18.627 0 12 0z" />
						</svg>


					</a>
				</h6>
			</div>
			<hr>
			<div class="card-body px-4 pt-4 pb-4" style="height:600px">

				<div id="map" style="width: 100%; height:600px"></div>



			</div>
		</div>
	</div>


	<div class="col-3">
		<div class="card mb-4">
			<div class="card-header pb-0">
				<h6>Input In Here</h6>
			</div>
			<hr>
			<?php
				//notifikasi form tidak boleh kosong
				echo validation_errors('<div class="alert alert-danger">','</div>');
				#notifikasi pesan data berhasil disimpan
				if ($this->session->flashdata('pesan')) {
					# code...
					echo '<div class="alert alert-success alert-dismissible fade show m-3" role="alert">';
        			echo '<span class="alert-icon"><i class="ni ni-like-2"></i></span>';
        			echo '<span class="alert-text"><strong>Success!</strong>';
					echo $this->session->flashdata('pesan');
					echo '</span>';
        			echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';
            		echo '<span aria-hidden="true">&times;</span>';
        			echo '</button>';
    				echo '</div>';
			} ?>
			<div class="card-body px-4 pt-4 pb-4" style="height:600px; overflow:auto">
				<?php echo form_open_multipart('lokasi/input') ?>

				<div class="form-group">
					<label class="form-control-label" for="desa">Desa</label>
					<input type="text" class="form-control" id="desa" name="desa" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="kepala_desa">Kepala Desa</label>
					<input type="text" class="form-control" id="kepala_desa" name="kepala_desa" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="dana_desa">Dana Desa</label>
					<input type="text" class="form-control" id="dana_desa" name="dana_desa" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="alokasi_dana_desa">Alokasi Dana Desa</label>
					<input type="text" class="form-control" id="alokasi_dana_desa" name="alokasi_dana_desa" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="kecamatan">Kecamatan</label>
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="kabupaten">Kabupaten</label>
					<input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="provinsi">Provinsi</label>
					<input type="text" class="form-control" id="provinsi" name="provinsi" required>
				</div>

				<div class="form-group">
					<label class="form-control-label" for="latitude">Latitude</label>
					<input type="text" class="form-control" id="Latitude" name="latitude" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="longitude">Longitude</label>
					<input type="text" class="form-control" id="Longitude" name="longitude" required>
				</div>

				<div class="form-group">
					<label class="form-control-label" for="gambar">Gambar</label>
					<input type="file" class="form-control" id="gambar" name="gambar" required>
				</div>

				<button type="submit" class="btn bg-gradient-success">Save</button>

				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>

<script src="<?=base_url('src/script/jj.js')?>"></script>

<script>
	var latInput = document.querySelector("[name=latitude]");
	var lngInput = document.querySelector("[name=longitude]");

	var curLocation = [2.983498226962545, 99.62787791325914];
	map.attributionControl.setPrefix(false);
	var marker = new L.marker(curLocation, {
		draggable: ' true',
	});

	//mengambil coordinat saat marker digeser/pindah
	marker.on('dragend', function (e) {
		var position = marker.getLatLng();
		marker.setLatLng(position, {
			curLocation
		}).bindPopup(position).update();
		$("#latitude").val(position.lat);
		$("#longitude").val(position.lng);
	});

	//mengambil coordinat saat marker di klik
	map.on("click", function (e) {
		var lat = e.latlng.lat;
		var lng = e.latlng.lng;
		if (!marker) {
			marker = L.marker(e.latlng).addTo(map);
		} else {
			marker.setLatLng(e.latlng);
		}
		latInput.value = lat;
		lngInput.value = lng;
	});
	map.addLayer(marker);

</script>
