
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
<label>Umur</label>
<input type="text" name="umur" value="<?php echo $jrs->umur ?>" class="form-control" readonly>
<?php echo form_error('umur','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>
<input type="text" name="kelamin" value="<?php echo $jrs->kelamin ?>" class="form-control" readonly>
<?php echo form_error('kelamin','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Indeks Masa Tubuh (IMT)</label>
<input type="text" name="imt" value="<?php echo $jrs->imt ?> CM" class="form-control" readonly>
<?php echo form_error('imt','<div class="text-danger small" ml-3>')?>
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

<?php if ($jrs->kelamin=="Laki-Laki") { ?>


                                    <?php if ($jrs->umur==0) { ?>

                                    <?php if($jrs->imt<2.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>3.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<2.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>3.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>

                                    
                                   				    <?php if ($jrs->umur==1) { ?>

                                    <?php if($jrs->imt<13.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==2) { ?>

                                    <?php if($jrs->imt<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==3) { ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==4) { ?>

                                    <?php if($jrs->imt<15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==5) { ?>

                                    <?php if($jrs->imt<15.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==6) { ?>

                                    <?php if($jrs->imt<16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==7) { ?>

                                    <?php if($jrs->imt<16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==8) { ?>

                                    <?php if($jrs->imt<15.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==9) { ?>

                                    <?php if($jrs->imt<15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==10) { ?>

                                    <?php if($jrs->imt<15.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==11) { ?>

                                    <?php if($jrs->imt<15.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==12) { ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==13) { ?>

                                    <?php if($jrs->imt<15.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==14) { ?>

                                    <?php if($jrs->imt<15.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==15) { ?>

                                    <?php if($jrs->imt<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==16) { ?>

                                    <?php if($jrs->imt<15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==17) { ?>

                                    <?php if($jrs->imt<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==18) { ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>15.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>15.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==19) { ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==20) { ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==21) { ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==22) { ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==23) { ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==25) { ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==26) { ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==27) { ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==28) { ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==29) { ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==30) { ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==31) { ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==32) { ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==33) { ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==34) { ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==35) { ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==36) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==37) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==38) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==39) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==40) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>

				    <?php if ($jrs->umur==41) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==42) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==43) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==44) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==45) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==46) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==47) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==48) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==49) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==50) { ?>

				    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==51) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==52) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==53) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==54) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>  

				    <?php if ($jrs->umur==55) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==56) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==57) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==58) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==59) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==60) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>  

<?php } ?>  

<?php if ($jrs->kelamin=="Perempuan") { ?>


    				                <?php if ($jrs->umur==0) { ?>

                                    <?php if($jrs->imt<12.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<12.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				                    <?php if ($jrs->umur==1) { ?>

                                    <?php if($jrs->imt<13.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==2) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==3) { ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==4) { ?>

                                    <?php if($jrs->imt<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==5) { ?>

                                    <?php if($jrs->imt<15.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==6) { ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==7) { ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==8) { ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==9) { ?>

                                    <?php if($jrs->imt<15.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==10) { ?>

                                    <?php if($jrs->imt<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==11) { ?>

                                    <?php if($jrs->imt<15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>18.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>18.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==12) { ?>

                                    <?php if($jrs->imt<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<15.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==13) { ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==14) { ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==15) { ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==16) { ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==17) { ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==18) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==19) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==20) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==21) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==22) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==23) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==25) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==26) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==27) { ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==28) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==29) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>17.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==30) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==31) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==32) { ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==33) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==34) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==35) { ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==36) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==37) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==38) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==39) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==40) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>

				    <?php if ($jrs->umur==41) { ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==42) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==43) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==44) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==45) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==46) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==47) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==48) { ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<14.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==49) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==50) { ?>

				    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==51) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==52) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
					
				    <?php if ($jrs->umur==53) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==54) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>  

				    <?php if ($jrs->umur==55) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==56) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==57) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==58) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==59) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==60) { ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->imt<13.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->imt>16.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Indeks Masa Tubuh Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Indeks Masa Tubuh Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Indeks Masa Tubuh Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

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

