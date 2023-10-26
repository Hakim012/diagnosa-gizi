
<section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account"></i>Data Anak</h3>
                                    <div class="filters m-b-45">
                                        
                                    <?php foreach($stunting as $jrs) : ?>
<form method="post"  enctype="multipart/form-data" >

<input type="hidden" name="id_stunting" value="<?php echo $jrs->id_stunting ?>">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $jrs->nama ?>" class="form-control" readonly>
<?php echo form_error('nama','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>NIK</label>
<input type="text" name="nik" value="<?php echo $jrs->nik ?>" class="form-control" readonly>
<?php echo form_error('nik','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>tinggi</label>
<input type="text" name="tinggi" value="<?php echo $jrs->tinggi ?>" class="form-control" readonly>
<?php echo form_error('tinggi','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>
<input type="text" name="kelamin" value="<?php echo $jrs->kelamin ?>" class="form-control" readonly>
<?php echo form_error('kelamin','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Berat Badan</label>
<input type="text" name="berat" value="<?php echo $jrs->berat ?> KG" class="form-control" readonly>
<?php echo form_error('berat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Panjang Badan</label>
<input type="text" name="tinggi" value="<?php echo $jrs->tinggi ?> CM" class="form-control" readonly>
<?php echo form_error('tinggi','<div class="text-danger small" ml-3>')?>
</div>
<!-- <div class="form-group">
<label>Kepentingan</label>
<br>
<textarea name="kepentingan" id="textarea-input" rows="3" placeholder="Kepentingan..." class="form-control" ><?php echo $jrs->kepentingan ?></textarea>
<?php echo form_error('kepentingan','<div class="text-danger small" ml-3>')?>
</div> -->
</form>
<?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-xl-6">
                                <!-- MAP DATA-->
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-plus"></i>Diagnosa</h3>
                                    <div class="filters">
                                    <?php foreach($stunting as $jrs) : ?>


                                    <?php if ($jrs->tinggi==45.0) { ?>
                                    <?php 
                                          $berat = $jrs->berat;

                                          $median = $berat-2.4;
                                          if($median>0) {
                                          $nilai = 2.4-2.7;
                                          }
                                          elseif($median<0){

                                          $nilai = 2.4-2.2;
                                          }
                                          $hasil = $median / $nilai;

                                          // echo $median;
                                          // echo "<br>";
                                          // echo $nilai;
                                          // echo "<br>";
                                          // echo $hasil;
                                          ?>

                                    <?php if($hasil<2.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($hasil>2.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($hasil<2.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($hasil>2.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>

                                    
                                 <?php if ($jrs->tinggi==45.5) { ?>
                                    <?php 
                                          $berat = $jrs->berat;

                                          $median = $berat-2.5;
                                          if($median >0) {
                                          $nilai = 2.5-2.8;
                                          }
                                          elseif($median <0){

                                          $nilai = 2.5-2.3;
                                          }
                                          $hasil = $median / $nilai;
                                          ?>
                                          

                                    <?php if($hasil<2.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($hasil>2.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($hasil<2.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($hasil>2.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==46.0) { ?>
                                    <?php 
                                          $berat = $jrs->berat;

                                          $median = $berat-2.6;
                                          if($median >0) {
                                          $nilai = 2.6-2.9;
                                          }
                                          elseif($median <0){

                                          $nilai = 2.6-2.4;
                                          }
                                          $hasil = $median / $nilai;
                                          ?>

                                    <?php if($hasil<2.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($hasil>2.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($hasil<2.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($hasil>2.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

                                    <?php if ($jrs->tinggi==46.5) { ?>
                                    <?php 
                                          $berat = $jrs->berat;

                                          $median = $berat-2.7;
                                          if($median >0) {
                                          $nilai = 2.7-3.0;
                                          }
                                          elseif($median <0){

                                          $nilai = 2.7-2.5;
                                          }
                                          $hasil = $median / $nilai;
                                          ?>


                                    <?php if($hasil<2.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($hasil>3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($hasil<2.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($hasil>3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==47.0) { ?>
                                    <?php 
                                          $berat = $jrs->berat;

                                          $median = $berat-2.8;
                                          if($median >0) {
                                          $nilai = 2.8-3.0;
                                          }
                                          elseif($median <0){

                                          $nilai = 2.8-2.5;
                                          }
                                          $hasil = $median / $nilai;
                                          ?>

                                    <?php if($hasil<2.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($hasil>3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($hasil<2.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($hasil>3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==47.5) { ?>


                                    <?php if($jrs->berat<2.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<2.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==48.0) { ?>


                                    <?php if($jrs->berat>-2.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat>-2.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==48.5) { ?>


                                    <?php if($jrs->berat<2.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<2.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==49.0) { ?>


                                    <?php if($jrs->berat<2.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<2.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==49.5) { ?>


                                    <?php if($jrs->berat<3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==50.0) { ?>

                                    <?php if($jrs->berat<3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<3.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==50.5) { ?>

                                    <?php if($jrs->berat<3.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>3.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<3.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>3.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==53.0) { ?>

                                    <?php if($jrs->berat<3.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>4.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<3.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>4.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==53.5) { ?>

                                    <?php if($jrs->berat<3.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>4.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<3.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>4.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==54.0) { ?>

                                    <?php if($jrs->berat<3.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>4.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<3.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>4.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==54.5) { ?>

                                    <?php if($jrs->berat<4.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>4.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>4.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==55.0) { ?>

                                    <?php if($jrs->berat<4.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==55.5) { ?>

                                    <?php if($jrs->berat<4.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==56.0) { ?>

                                    <?php if($jrs->berat<4.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==56.5) { ?>

                                    <?php if($jrs->berat<4.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==57.0) { ?>

                                    <?php if($jrs->berat<4.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==57.5) { ?>

                                    <?php if($jrs->berat<4.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<4.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==58.0) { ?>

                                    <?php if($jrs->berat<5.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>5.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>5.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==58.5) { ?>

                                    <?php if($jrs->berat<5.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>6.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>6.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==59.0) { ?>

                                    <?php if($jrs->berat<5.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>6.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>6.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->tinggi==59.5) { ?>

                                    <?php if($jrs->berat<5.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>6.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>6.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==60.0) { ?>

                                    <?php if($jrs->berat<5.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>6.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>6.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==60.5) { ?>

                                    <?php if($jrs->berat<5.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>6.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>6.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==61.0) { ?>

                                    <?php if($jrs->berat<5.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>6.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<5.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>6.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==77) { ?>

                                    <?php if($jrs->berat<9.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>10.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<9.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>10.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==79) { ?>

                                    <?php if($jrs->berat<9.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>11.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<9.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>11.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==85) { ?>

                                    <?php if($jrs->berat<10.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>12.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<10.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>12.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
                                   
 			  	    <?php if ($jrs->tinggi==93) { ?>

                                    <?php if($jrs->berat<12.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<12.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==95) { ?>

                                    <?php if($jrs->berat<12.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<12.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==96) { ?>

                                    <?php if($jrs->berat<13.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>15.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<13.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>15.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==101) { ?>

                                    <?php if($jrs->berat<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==102) { ?>

                                    <?php if($jrs->berat<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==103) { ?>

                                    <?php if($jrs->berat<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>  
 
 			            <?php if ($jrs->tinggi==104) { ?>

                                    <?php if($jrs->berat<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==38) { ?>

                                    <?php if($jrs->berat<13.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<13.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==39) { ?>

                                    <?php if($jrs->berat<13.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>16.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<13.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>16.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==40) { ?>

                                    <?php if($jrs->berat<13.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>16.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<13.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>16.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   
                                   
 				    <?php if ($jrs->tinggi==41) { ?>

                                    <?php if($jrs->berat<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>16.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>16.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==42) { ?>

                                    <?php if($jrs->berat<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>16.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>16.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==43) { ?>

                                    <?php if($jrs->berat<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==44) { ?>

                                    <?php if($jrs->berat<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==45) { ?>

                                    <?php if($jrs->berat<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==46) { ?>

                                    <?php if($jrs->berat<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>  
 
 			            <?php if ($jrs->tinggi==47) { ?>

                                    <?php if($jrs->berat<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==48) { ?>

                                    <?php if($jrs->berat<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==49) { ?>

                                    <?php if($jrs->berat<15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==50) { ?>

                                    <?php if($jrs->berat<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>18.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>18.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   
                                   
				    <?php if ($jrs->tinggi==51) { ?>

                                    <?php if($jrs->berat<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==52) { ?>

                                    <?php if($jrs->berat<15.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>18.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>18.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==53) { ?>

                                    <?php if($jrs->berat<15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>18.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>18.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==54) { ?>

                                    <?php if($jrs->berat<15.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>18.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<15.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>18.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==55) { ?>

                                    <?php if($jrs->berat<16.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>19.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<16.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>19.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==56) { ?>

                                    <?php if($jrs->berat<16.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>19.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<16.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>19.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>  
 
 			            <?php if ($jrs->tinggi==57) { ?>

                                    <?php if($jrs->berat<16.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>19.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<16.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>19.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==58) { ?>

                                    <?php if($jrs->berat<16.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>19.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<16.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>19.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->tinggi==59) { ?>

                                    <?php if($jrs->berat<16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>19.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>19.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->tinggi==60) { ?>

                                    <?php if($jrs->berat<17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->berat>20.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->berat<17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->berat>20.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Berat Badan Menurut Panjang Badan / Berat Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Berat Badan Menurut Panjang Badan / Berat Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   
                                   
                                    
                                    <?php endforeach; ?>
                                    </div>

                                    <div class="table-wrap">
                                        

                                    </div>
                                </div>
                                <!-- END MAP DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

