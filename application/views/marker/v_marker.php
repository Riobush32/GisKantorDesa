<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-2" style="position:relative">
				<h6>
					<?= $judul ?>
					<a href="<?=base_url('gis/makeMarker')?>" class="btn bg-gradient-primary"
						style="position:absolute; right:0px; margin-right:20px;">

						<svg fill="white" role="img" width="20px" viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg">
							<title>AddThis</title>
							<path
								d="M18 13.496h-4.501v4.484h-3v-4.484H6v-2.99h4.5V6.021h3.001v4.485H18v2.99zM21 .041H3C1.348.043.008 1.379 0 3.031v17.94c.008 1.65 1.348 2.986 3 2.988h18c1.651-.002 2.991-1.338 3-2.988V3.031c-.009-1.652-1.348-2.987-3-2.99z" />
						</svg>
						<span>Add</span>



					</a>
				</h6>


			</div>
			<hr>
			<div class="card-body px-4 pt-4 pb-4" style="height:600px">

				<div id="map" style="width: 100%; height:600px"></div>

				<script src="<?=base_url('src/script/jj.js')?>"></script>

				<script>
					// icon marker 
					

					//marker control
					<?php foreach ($lokasi as $key => $value) { ?>
						
						L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
						.bindPopup("<div class='card' style='width: 250px'>"+
					"<img src='<?= base_url('gambar/'.$value->gambar)?>' class='card-img-top'>"+
						"<div class='card-body'>"+
							"<div class='row'>"+
								"<div class='col'>"+
									"<h5 class='card-title' style='font-size:10px'>Desa</h5>"+
								"</div>"+
								"<div class='col'>"+
									"<h3 class='card-text' style='font-size:10px'>: <?=$value->desa ?></h3>"+
								"</div>"+
								
							"</div>"+

							"<div class='row'>"+
								"<div class='col'>"+
									"<h5 class='card-title' style='font-size:10px'>Kepala Desa</h5>"+
								"</div>"+
								"<div class='col'>"+
									"<h3 class='card-text' style='font-size:10px'>: <?= $value->kepala_desa ?></h3>"+
								"</div>"+
								
							"</div>"+

							"<div class='row'>"+
								"<div class='col'>"+
									"<h5 class='card-title' style='font-size:10px'>Dana Desa</h5>"+
								"</div>"+
								"<div class='col'>"+
									"<h3 class='card-text' style='font-size:10px'>: <?= $value->dana_desa ?></h3>"+
								"</div>"+
								
							"</div>"+

							"<div class='row'>"+
								"<div class='col-sm-4'>"+
								"<a href='<?= base_url('lokasi/viewEdit/'.$value->id) ?>' class='btn bg-gradient-warning'>"+
									"<span>"+
										"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>"+
											"<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>"+
											"<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>"+
										"</svg>"+
									"</span>"+
								"</a>"+
								"</div>"+
								"<div class='col-sm-4'>"+
								"<a href='#' class='btn bg-gradient-info'>"+
									"<span>"+
										"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-info-circle' viewBox='0 0 16 16'>"+
											"<path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>"+
											"<path d='m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>"+
										"</svg>"+
									"</span>"+
								"</a>"+
								"</div>"+
								"<div class='col-sm-4'>"+
								"<a href='<?= base_url('lokasi/delete/'.$value->id) ?>' class='btn bg-gradient-danger'>"+
									"<span>"+
										"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>"+
											"<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>"+
										"</svg>"+
									"</span>"+
								"</a>"+
								"</div>"+
								
							"</div>"+
							
						"</div>"+
					"</div>"
							).addTo(map);
						
					<?php } ?>
				</script>


  

  
  
  
  


			</div>
		</div>
	</div>
</div>
