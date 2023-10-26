<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Stunting</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<?php foreach($stunting as $jrs) : ?>
<form method="post" action="<?php echo base_url('administrator/stunting/update_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_stunting" value="<?php echo $jrs->id_stunting ?>">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $jrs->nama ?>" class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NIK</label>
<input type="text" name="nik" value="<?php echo $jrs->nik ?>" class="form-control" require>
<?php echo form_error('nik','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Umur</label>
<input type="text" name="umur" value="<?php echo $jrs->umur ?>" class="form-control" require>
<?php echo form_error('umur','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>
<select name="kelamin" class="form-control" value="<?php echo $jrs->kelamin ?>">
<option value="<?php echo $jrs->kelamin ?>"><?php echo $jrs->kelamin ?></option>
<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<?php echo form_error('kelamin','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Panjang / Tinggi Anak</label>
<input type="text" name="tinggi" value="<?php echo $jrs->tinggi ?>" class="form-control" require>
<?php echo form_error('tinggi','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Berat Anak</label>
<input type="text" name="berat" value="<?php echo $jrs->berat ?>" class="form-control" require>
<?php echo form_error('berat','<div class="text-danger small" ml-3>')?>
</div>

<!-- <div class="form-group">
<label>Berat Badan Menurut Panjang Badan / Berat Badan</label>
<input type="text" name="beratbadan" value="<?php echo $jrs->beratbadan ?>" class="form-control" require>
<?php echo form_error('beratbadan','<div class="text-danger small" ml-3>')?>
</div> -->

<div class="form-group">
<label>Indeks Masa Tubuh (IMT)</label>
<input type="text" name="imt" value="<?php echo $jrs->imt ?>" class="form-control" require>
<?php echo form_error('imt','<div class="text-danger small" ml-3>')?>
</div>

<button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
<?php endforeach; ?>

</div>
</div>
