<div class="services">
			<div class="container">
				<h2 class="w3l_head w3l_head1">Kendaraan</h2>
				<div class="w3layouts_services_grids">
					<?php
					foreach ($model as $key) {
						?>
						<div class="col-md-4 w3layouts_services_grid">
							<div class="w3layouts_services_grid_main">
								<div class="w3layouts_services_grid1">
									<img src="<?= base_url('gambar/'.$key->foto) ?>" alt=" " style="max-height: 300px; height: 300px" class="img-responsive">
									
								</div>
								<h5><?= $key->merek?></h5>
								<p>Kapasitas : <b><?= $key->kapasitas ?> Penumpang</b></p>
									<p>Nomor Polisi : <b><?= $key->no_pol ?></b></p>
									<p>Tahun kendaraan : <b><?= $key->thn_kendaraan ?></b></p>
									<p>Warna : <b><?= $key->warna ?></b></p>
									<p>keterangan : <b>OPERASIONAL TAMU</b></p>
									*Lihat jadwal pemakaian <a data-toggle="modal" data-target="#myModal1">disini</a>
									<a href="<?php echo base_url('pemesanan/index') ?>" class="btn btn-primary siku" >Pesan sekarang</a>
							</div>
						</div>
						<!-- <div class="col-md-4 w3layouts_services_grid">
							<div class="w3layouts_services_grid_main">
								<div class="w3layouts_services_grid1">
									<img src="<?= base_url('gambar/'.$key->foto) ?>" style="height: 476px; width: 320px" class="img-responsive">
									
								</div>
								<h5><?= $key->merek ?></h5>
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
									suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
							</div>
						</div> -->
						<?php
					}
					?>
				</div>
				
			</div>
		</div>