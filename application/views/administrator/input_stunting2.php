<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">INPUT STUNTING</h6>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('input')?>
<!-- method post untuk mengambil fungsi input_aksi di controller-->
<form method="post" action="<?php echo base_url('administrator/masyarakat/input_aksi')?>" enctype="multipart/form-data" >

<input type="hidden" name="id_user" value="<?php echo $id ?>">
<input type="hidden" name="ibu" value="<?php echo $username ?>">

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" placeholder="Masukkan Nama ..." class="form-control" require>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NIK</label>
<input type="text" name="nik" placeholder="Masukkan NIK ..." class="form-control" require>
<?php echo form_error('nik','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Umur Anak</label>
<input type="text" name="umur" placeholder="Masukkan Umur ..." class="form-control" require>
<?php echo form_error('umur','<div class="text-danger small" ml-3>')?>
</div> 

<div class="form-group">
<label>Jenis Kelamin</label>
<select name="kelamin" class="form-control" placeholder="-Pilih-">
<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<?php echo form_error('kelamin','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Berat Badan</label>
<input type="text" name="berat" placeholder="Masukkan Berat Badan ..."  class="form-control" require>
<?php echo form_error('berat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Tinggi Badan</label>
<input type="text" name="tinggi" placeholder="Masukkan Tinggi Badan ..."  class="form-control" require>
<?php echo form_error('tinggi','<div class="text-danger small" ml-3>')?>
</div>

<!-- <div class="form-group">
<label>Berat Badan Menurut Panjang Badan / Berat Badan</label>
<input type="text" name="beratbadan" placeholder="Masukkan Berat Menurut Panjang Dan Tinggi Badan ..."  class="form-control" require>
<?php echo form_error('beratbadan','<div class="text-danger small" ml-3>')?>
</div> -->

<div class="form-group">
<label>Indeks Masa Tubuh (IMT)</label>
<input type="text" name="imt" placeholder="Masukkan IMT ..."  class="form-control" require>
<?php echo form_error('imt','<div class="text-danger small" ml-3>')?>
</div>


<button type="submit" class="btn btn-primary">SIMPAN</button>
</form>

</div>
</div>
