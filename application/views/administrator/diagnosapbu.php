
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
<label>Panjang / Tinggi Anak</label>
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

<?php if ($jrs->kelamin=="Laki-Laki") { ?>

                                    <?php if ($jrs->umur==0) { ?>

                                    <?php if($jrs->tinggi<48.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>51.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<48.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>51.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>

                                    
                                     				    <?php if ($jrs->umur==1) { ?>

                                    <?php if($jrs->tinggi<52.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>56.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<52.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>56.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==2) { ?>

                                    <?php if($jrs->tinggi<56.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>60.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<56.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>60.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==3) { ?>

                                    <?php if($jrs->tinggi<59.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>63.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<59.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>63.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==4) { ?>

                                    <?php if($jrs->tinggi<61.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>66.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<61.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>66.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==5) { ?>

                                    <?php if($jrs->tinggi<63.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>68.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<63.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>68.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==6) { ?>

                                    <?php if($jrs->tinggi<65.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>69.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<65.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>69.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   

 				    <?php if ($jrs->umur==7) { ?>

                                    <?php if($jrs->tinggi<67.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>71.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<67.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>71.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==8) { ?>

                                    <?php if($jrs->tinggi<68.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>72.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<68.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>72.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==9) { ?>

                                    <?php if($jrs->tinggi<69.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>74.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<69.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>74.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==10) { ?>

                                    <?php if($jrs->tinggi<71.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>75.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<71.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>75.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==11) { ?>

                                    <?php if($jrs->tinggi<72.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>76.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<72.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>76.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==12) { ?>

                                    <?php if($jrs->tinggi<73.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>78.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<73.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>78.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==13) { ?>

                                    <?php if($jrs->tinggi<74.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>79.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<74.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>79.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==14) { ?>

                                    <?php if($jrs->tinggi<75.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>80.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<75.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>80.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==15) { ?>

                                    <?php if($jrs->tinggi<76.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>81.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<76.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>81.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==16) { ?>

                                    <?php if($jrs->tinggi<77.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>82.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<77.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>82.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==17) { ?>

                                    <?php if($jrs->tinggi<78.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>83.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<78.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>83.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==18) { ?>

                                    <?php if($jrs->tinggi<79.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>85.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<79.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>85.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==19) { ?>

                                    <?php if($jrs->tinggi<80.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>86.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<80.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>86.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==20) { ?>

                                    <?php if($jrs->tinggi<81.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>87.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<81.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>87.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==21) { ?>

                                    <?php if($jrs->tinggi<82.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>88.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<82.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>88.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==22) { ?>

                                    <?php if($jrs->tinggi<83.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<83.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==23) { ?>

                                    <?php if($jrs->tinggi<83.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<83.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->tinggi<84.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<84.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==25) { ?>

                                    <?php if($jrs->tinggi<84.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>91.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<84.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>91.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==26) { ?>

                                    <?php if($jrs->tinggi<85.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>92.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<85.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>92.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   

 				    <?php if ($jrs->umur==27) { ?>

                                    <?php if($jrs->tinggi<86.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>92.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<86.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>92.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==28) { ?>

                                    <?php if($jrs->tinggi<87.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>93.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<87.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>93.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==29) { ?>

                                    <?php if($jrs->tinggi<87.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>94.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<87.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>94.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==30) { ?>

                                    <?php if($jrs->tinggi<88.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>95.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<88.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>95.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==31) { ?>

                                    <?php if($jrs->tinggi<89.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>96.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<89.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>96.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==32) { ?>

                                    <?php if($jrs->tinggi<89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>96.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>96.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==33) { ?>

                                    <?php if($jrs->tinggi<90.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>97.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<90.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>97.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==34) { ?>

                                    <?php if($jrs->tinggi<91.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>98.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<91.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>98.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==35) { ?>

                                    <?php if($jrs->tinggi<91.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>99.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<91.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>99.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==36) { ?>

                                    <?php if($jrs->tinggi<92.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>99.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<92.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>99.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==37) { ?>

                                    <?php if($jrs->tinggi<93.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>100.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<93.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>100.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==38) { ?>

                                    <?php if($jrs->tinggi<93.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<93.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==39) { ?>

                                    <?php if($jrs->tinggi<94.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<94.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==40) { ?>

                                    <?php if($jrs->tinggi<94.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>102.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<94.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>102.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==41) { ?>

                                    <?php if($jrs->tinggi<95.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<95.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==42) { ?>

                                    <?php if($jrs->tinggi<95.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<95.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==43) { ?>

                                    <?php if($jrs->tinggi<96.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>104.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<96.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>104.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==44) { ?>

                                    <?php if($jrs->tinggi<97.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<97.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==45) { ?>

                                    <?php if($jrs->tinggi<97.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<97.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==46) { ?>

                                    <?php if($jrs->tinggi<98.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>106.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<98.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>106.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   

 				    <?php if ($jrs->umur==47) { ?>

                                    <?php if($jrs->tinggi<98.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>106.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<98.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>106.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==48) { ?>

                                    <?php if($jrs->tinggi<99.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>107.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<99.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>107.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==49) { ?>

                                    <?php if($jrs->tinggi<99.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<99.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==50) { ?>

                                    <?php if($jrs->tinggi<100.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<100.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==51) { ?>

                                    <?php if($jrs->tinggi<100.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>109.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<100.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>109.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==52) { ?>

                                    <?php if($jrs->tinggi<101.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>109.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<101.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>109.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==53) { ?>

                                    <?php if($jrs->tinggi<101.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>110.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<101.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>110.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==54) { ?>

                                    <?php if($jrs->tinggi<102.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<102.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==55) { ?>

                                    <?php if($jrs->tinggi<102.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<102.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==56) { ?>

                                    <?php if($jrs->tinggi<103.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>112.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<103.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>112.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==57) { ?>

                                    <?php if($jrs->tinggi<103.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>112.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<103.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>112.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==58) { ?>

                                    <?php if($jrs->tinggi<104.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>113.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<104.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>113.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==59) { ?>

                                    <?php if($jrs->tinggi<104.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>114.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<104.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>114.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==60) { ?>

                                    <?php if($jrs->tinggi<105.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>114.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<105.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>114.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
<?php } ?> 

<!-- <?php if ($jrs->kelamin=="Perempuan") { ?>


                                    <?php if ($jrs->umur==0) { ?>

                                    <?php if($jrs->tinggi<47.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>51.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<47.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>51.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>     

                                    <?php if ($jrs->umur==1) { ?>

                                    <?php if($jrs->tinggi<51.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>55.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<51.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>55.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==2) { ?>

                                    <?php if($jrs->tinggi<55.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>59.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<55.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>59.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==3) { ?>

                                    <?php if($jrs->tinggi<57.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>61.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<57.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>61.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==4) { ?>

                                    <?php if($jrs->tinggi<59.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>64.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<59.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>64.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==5) { ?>

                                    <?php if($jrs->tinggi<61.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>66.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<61.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>66.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==6) { ?>

                                    <?php if($jrs->tinggi<63.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>68.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<63.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>68.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   

 				    <?php if ($jrs->umur==7) { ?>

                                    <?php if($jrs->tinggi<65.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>69.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<65.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>69.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==8) { ?>

                                    <?php if($jrs->tinggi<66.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>71.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<66.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>71.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==9) { ?>

                                    <?php if($jrs->tinggi<67.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>72.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<67.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>72.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==10) { ?>

                                    <?php if($jrs->tinggi<69.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>73.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<69.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>73.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==11) { ?>

                                    <?php if($jrs->tinggi<70.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>75.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<70.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>75.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==12) { ?>

                                    <?php if($jrs->tinggi<71.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>76.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<71.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>76.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==13) { ?>

                                    <?php if($jrs->tinggi<72.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>77.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<72.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>77.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==14) { ?>

                                    <?php if($jrs->tinggi<73.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>79.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<73.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>79.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==15) { ?>

                                    <?php if($jrs->tinggi<74.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>80.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<74.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>80.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==16) { ?>

                                    <?php if($jrs->tinggi<75.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>31.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<75.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>81.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==17) { ?>

                                    <?php if($jrs->tinggi<76.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>82.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<76.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>82.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==18) { ?>

                                    <?php if($jrs->tinggi<77.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>83.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<77.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>83.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==19) { ?>

                                    <?php if($jrs->tinggi<78.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>84.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<78.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>84.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==20) { ?>

                                    <?php if($jrs->tinggi<79.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>85.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<79.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>85.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==21) { ?>

                                    <?php if($jrs->tinggi<80.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>86.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<80.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>86.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==22) { ?>

                                    <?php if($jrs->tinggi<81.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>87.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<81.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>87.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==23) { ?>

                                    <?php if($jrs->tinggi<82.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>88.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<82.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>88.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->tinggi<82.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>88.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<82.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>88.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==25) { ?>

                                    <?php if($jrs->tinggi<83.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<83.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==26) { ?>

                                    <?php if($jrs->tinggi<84.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>90.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<84.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>90.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   

 				    <?php if ($jrs->umur==27) { ?>

                                    <?php if($jrs->tinggi<84.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>91.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<84.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>91.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==28) { ?>

                                    <?php if($jrs->tinggi<85.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>92.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<85.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>92.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==29) { ?>

                                    <?php if($jrs->tinggi<86.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>93.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<86.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>93.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==30) { ?>

                                    <?php if($jrs->tinggi<87.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>94.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<87.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>94.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==31) { ?>

                                    <?php if($jrs->tinggi<87.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>95.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<87.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>95.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==32) { ?>

                                    <?php if($jrs->tinggi<88.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>95.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<88.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>95.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==33) { ?>

                                    <?php if($jrs->tinggi<89.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>96.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<89.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>96.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==34) { ?>

                                    <?php if($jrs->tinggi<89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>97.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<89.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>97.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==35) { ?>

                                    <?php if($jrs->tinggi<90.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>98.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<90.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>98.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==36) { ?>

                                    <?php if($jrs->tinggi<91.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>98.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<91.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>98.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==37) { ?>

                                    <?php if($jrs->tinggi<91.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>99.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<91.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>99.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==38) { ?>

                                    <?php if($jrs->tinggi<92.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>100.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<92.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>100.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==39) { ?>

                                    <?php if($jrs->tinggi<93.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<93.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==40) { ?>

                                    <?php if($jrs->tinggi<93.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<93.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>101.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==41) { ?>

                                    <?php if($jrs->tinggi<94.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>102.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<94.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>102.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==42) { ?>

                                    <?php if($jrs->tinggi<95.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<95.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==43) { ?>

                                    <?php if($jrs->tinggi<95.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<95.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>103.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==44) { ?>

                                    <?php if($jrs->tinggi<96.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>104.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<96.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>104.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==45) { ?>

                                    <?php if($jrs->tinggi<96.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<96.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==46) { ?>

                                    <?php if($jrs->tinggi<97.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<97.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>105.8){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>   

 				    <?php if ($jrs->umur==47) { ?>

                                    <?php if($jrs->tinggi<97.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>106.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<97.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>106.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==48) { ?>

                                    <?php if($jrs->tinggi<98.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>107.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<98.4){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>107.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==49) { ?>

                                    <?php if($jrs->tinggi<99.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>107.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<99.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>107.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==50) { ?>

                                    <?php if($jrs->tinggi<99.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<99.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

 				    <?php if ($jrs->umur==51) { ?>

                                    <?php if($jrs->tinggi<100.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<100.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>108.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==52) { ?>

                                    <?php if($jrs->tinggi<100.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>109.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<100.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>109.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 

				    <?php if ($jrs->umur==53) { ?>

                                    <?php if($jrs->tinggi<101.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>110.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<101.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>110.1){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==54) { ?>

                                    <?php if($jrs->tinggi<101.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>110.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<101.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>110.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==55) { ?>

                                    <?php if($jrs->tinggi<102.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<102.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.3){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==56) { ?>

                                    <?php if($jrs->tinggi<102.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<102.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>111.9){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==57) { ?>

                                    <?php if($jrs->tinggi<103.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>112.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<103.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>112.5){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==58) { ?>

                                    <?php if($jrs->tinggi<103.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>113.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<103.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>113.0){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				<?php if ($jrs->umur==59) { ?>

                                    <?php if($jrs->tinggi<104.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>113.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<104.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>113.6){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?>                                    

                                    <?php if ($jrs->umur==60) { ?>

                                    <?php if($jrs->tinggi<104.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }elseif($jrs->tinggi>114.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda Sehat Dan Tidak Terindikasi Stunting
                                    </div>    
                                    <?php } ?>

                                    <?php if($jrs->tinggi<104.7){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Di Bawah Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }elseif($jrs->tinggi>114.2){ ?>
                                    <div class="alert alert-danger " role="alert">
                                    Panjang Badan Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Ideal.
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-primary " role="alert">
                                    Panjang Badan Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Panjang Badan Balita Tetap Ideal.                                    </div>
                                    <?php } ?>

                                    <?php } ?> 
 				    

<?php } ?>  -->
                                    
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

