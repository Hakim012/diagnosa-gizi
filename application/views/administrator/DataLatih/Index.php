<div class="container">
	<!-- Illustrations -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Data Latih penghitungan</h6>
		</div>

		<div class="card-body">
			<div class="row">
				<div class="col-sm-3">
					<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#resetModel">
						Reset Data Latih <i class="fas fa-trash"></i>
					</button>
					<!-- Modal -->
					<div class="modal fade" id="resetModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Reset Data Latih</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Apakah Anda Yakin akan Menghapus Seluruh Data Latih ?
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<?php echo anchor('administrator/klasifikasi/reset_latih', '<button type="button" class="btn btn-primary">Hapus</button>') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="float-right">
						<a href="<?= base_url('administrator/klasifikasi/input_batch'); ?>"><button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data Batch Latih</button></a>
						<a href="<?= base_url('administrator/klasifikasi/input_latih'); ?>"><button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data Latih</button></a>
					</div>
				</div>
			</div>

			<br>
			<?php echo $this->session->flashdata('pesan') ?>
			<div class="table-responsive">
				<table class="table table-striped" id="myTable" >
					<tr>
						<th scope="col">NO</th>
						<th scope="col">Nama</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Berat Badan</th>
						<th scope="col">Panjang Badan</th>
						<th scope="col">Diagnosa</th>
						<th scope="col">Aksi</th>
					</tr>

					<?php
					$no = 1;
					// var_dump($latih);
					foreach ($klasifikasi as $jrs) :
					?>
						<tr>
							<td width="20px"><?php echo $no++ ?></td>
							<td><?php echo $jrs->nama ?></td>
							<td><?php echo $jrs->jenis_kelamin ?></td>
							<td><?php echo $jrs->berat ?></td>
							<td><?php echo $jrs->tinggi ?></td>
							<td><?php echo $jrs->hasil ?></td>
							<td>
								<?php echo anchor('administrator/klasifikasi/edit_latih/' . $jrs->id, '<div class="btn btn-sm btn-warning">Edit   <i class="fas fa-edit"></i></div>') ?>
								<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
									Hapus <i class="fas fa-trash"></i>
								</button>
								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Hapus Data Latih</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Apakah Anda Yakin akan Menghapus Data Latih <?php echo $jrs->nama ?> ?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<?php echo anchor('administrator/klasifikasi/hapus_latih/' . $jrs->id, '<button type="button" class="btn btn-primary">Hapus</button>') ?>
											</div>
										</div>
									</div>
								</div>
							</td>

						</tr>
					<?php endforeach; ?>
				</table>
				<br>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
