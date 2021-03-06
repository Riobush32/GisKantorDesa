<div class="row">
	<div class="col-6">
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

    <div class="col-sm-6">
        <div class="card">
            <img src="<?= base_url('./gambar/'.$lokasi->gambar) ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <table class="table">
                
                <tbody>
                    <tr>
                        <th scope="row">Desa</th>
                        <td><?= $lokasi->desa ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Kepala Desa</th>
                        <td><?= $lokasi->kepala_desa ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Dana Desa</th>
                        <td><?= $lokasi->dana_desa ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Alokasi Dana Desa</th>
                        <td><?= $lokasi->alokasi_dana_desa ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Kecamatan</th>
                        <td><?= $lokasi->kecamatan ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Kabupaten</th>
                        <td><?= $lokasi->kabupaten ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Provinsi</th>
                        <td><?= $lokasi->provinsi ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Latitude</th>
                        <td><?= $lokasi->latitude ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Longitude</th>
                        <td><?= $lokasi->longitude ?></td>
                    </tr>
                    
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url('src/script/jj.js')?>"></script>

<script>

 
    L.marker([<?= $lokasi->latitude?>, <?= $lokasi->longitude?>]).addTo(map);

</script>
