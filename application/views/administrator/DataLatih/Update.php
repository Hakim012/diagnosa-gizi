<div class="container">
	<!-- Illustrations -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">INPUT klasifikasi</h6>
		</div>
		<div class="card-body">
		<?php echo $this->session->flashdata('pesan') ?>
			<?php echo $this->session->flashdata('input') ?>
			<!-- method post untuk mengambil fungsi input_aksi di controller-->
			<?php foreach($klasifikasi as $jrs) : ?>
			<form method="post" action="<?php echo base_url('administrator/klasifikasi/update_latih') ?>" enctype="multipart/form-data">

				<input type="hidden" value="<?php echo $jrs->id ?>" name="id">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama"class="form-control" value="<?php echo $jrs->nama ?>" require>
					<?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
				</div>

				<div class="form-group">
					<label>Jenis Kelamin</label>
					<select name="kelamin" class="form-control" placeholder="-Pilih-">
						<!-- <option disabled selected>Silahkan Pilih Jenis Kelamin</option> -->
						<option value="Laki-Laki" <?php if($jrs->jenis_kelamin =="Laki-Laki"):?>selected?<?php endif?>>Laki-Laki</option>
						<option value="Perempuan" <?php if($jrs->jenis_kelamin =="Perempuan"):?>selected?<?php endif?>>Perempuan</option>
					</select>
					<?php echo form_error('kelamin', '<div class="text-danger small" ml-3>') ?>
				</div>

				<div class="form-group">
					<label>Berat Badan</label>
					<input type="text" name="berat"  value="<?php echo $jrs->berat ?>" class="form-control" require>
					<?php echo form_error('berat', '<div class="text-danger small" ml-3>') ?>
				</div>

				<div class="form-group">
					<label>Tinggi Badan</label>
					<input type="text" name="tinggi" value="<?php echo $jrs->tinggi ?>"  class="form-control" require>
					<?php echo form_error('tinggi', '<div class="text-danger small" ml-3>') ?>
				</div>

				<div class="form-group">
					<label>Diagnosa</label>
					<select name="diagnosa" class="form-control">
						<!-- <option disabled selected>Silahkan Pilih Diagnosa Data latih</option> -->
						<option value="Gizi Lebih" <?php if($jrs->jenis_kelamin =="Gizi Lebih"):?>selected?<?php endif?>>Gizi Lebih</option>
						<option value="Resiko Gizi Lebih" <?php if($jrs->jenis_kelamin =="Resiko Gizi Lebih"):?>selected?<?php endif?>>Resiko Gizi Lebih</option>
						<option value="Gizi Baik" <?php if($jrs->jenis_kelamin =="Gizi Baik"):?>selected?<?php endif?>>Gizi Baik</option>
						<option value="Resiko Gizi Baik" <?php if($jrs->jenis_kelamin =="Resiko Gizi Baik"):?>selected?<?php endif?>>Resiko Gizi Baik</option>
						<option value="Gizi Kurang" <?php if($jrs->jenis_kelamin =="Gizi Kurang"):?>selected?<?php endif?>>Gizi Kurang</option>
						<option value="Resiko Gizi Kurang" <?php if($jrs->jenis_kelamin =="Resiko Gizi Kurang"):?>selected?<?php endif?>>Resiko Gizi Kurang</option>
						<option value="Obesitas" <?php if($jrs->jenis_kelamin =="Resiko Gizi Kurang"):?>selected?<?php endif?>>Obesitas</option>
					</select>
					<?php echo form_error('kelamin', '<div class="text-danger small" ml-3>') ?>
				</div>
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</form>
			<?php endforeach; ?>

		</div>
	</div>
