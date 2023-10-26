<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Tamu</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($tamu as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/tamu/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_tamu" value="<?php echo $jrs->id_tamu ?>">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $jrs->nama ?>" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Instansi</label>
<input type="text" name="instansi" value="<?php echo $jrs->instansi ?>" class="form-control" require>
<?php echo form_error('instansi','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tanggal</label>
<input type="date" name="tanggal" value="<?php echo $jrs->tanggal ?>" class="form-control" require>
<?php echo form_error('tanggal','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NO HP</label>
<input type="text" name="no_hp" value="<?php echo $jrs->no_hp ?>" class="form-control" require>
<?php echo form_error('no_hp','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Kepentingan</label>
<br>
<textarea name="kepentingan" id="textarea-input" rows="3" placeholder="Kepentingan..." class="form-control" ><?php echo $jrs->kepentingan ?></textarea>
<?php echo form_error('kepentingan','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
<?php endforeach; ?>

</div>
</div>
