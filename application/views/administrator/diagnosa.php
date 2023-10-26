
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
<input type="text" name="tinggi" value="<?php echo $jrs->tinggi ?>" class="form-control" readonly>
<?php echo form_error('tinggi','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Berat Badan Anak</label>
<input type="text" name="berat" value="<?php echo $jrs->berat ?>" class="form-control" readonly>
<?php echo form_error('berat','<div class="text-danger small" ml-3>')?>
</div>

<div class="form-group">
<label>Indeks Masa Tubuh (IMT)</label>
<input type="text" name="imt" value="<?php echo $jrs->imt ?>" class="form-control" readonly>
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
                                    
<?php if($jrs->kelamin=="Laki-Laki") {?>

                                    <?php if ($jrs->umur==0) { ?>

                                    <?php if($jrs->berat<2.9){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>3.9){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<48.0){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>51.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<12.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>14.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==1) { ?>

                                    <?php if($jrs->berat<3.9){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>5.1){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<52.8){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>56.7){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<13.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.3){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>


                                    <?php if ($jrs->umur==2) { ?>

                                    <?php if($jrs->berat<4.9){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>6.3){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<56.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>60.4){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.0){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==3) { ?>

                                    <?php if($jrs->berat<5.7){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>7.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<59.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>63.5){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.5){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.4){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>


                                    <?php if ($jrs->umur==5) { ?>

                                    <?php if($jrs->berat<6.7){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>8.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<63.8){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>68.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.9){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==6) { ?>

                                    <?php if($jrs->berat<7.1){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>8.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<65.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>69.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<16.0){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==7) { ?>

                                    <?php if($jrs->berat<7.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>9.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<67.0){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>71.3){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<16.0){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==8) { ?>

                                    <?php if($jrs->berat<7.7){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>9.6){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<68.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>72.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.9){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==9) { ?>

                                    <?php if($jrs->berat<8.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>9.9){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<69.7){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>74.2){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.8){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.6){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==10) { ?>

                                    <?php if($jrs->berat<8.2){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>10.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<71.0){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>75.6){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.7){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.5){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==11) { ?>

                                    <?php if($jrs->berat<8.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>10.5){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<71.0){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>76.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.4){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==12) { ?>

                                    <?php if($jrs->berat<8.6){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>10.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<73.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>78.1){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.5){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.2){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==13) { ?>

                                    <?php if($jrs->berat<8.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>11.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<74.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>79.3){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.4){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==14) { ?>

                                    <?php if($jrs->berat<9.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>11.3){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<75.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>80.5){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.3){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>18.0){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==15) { ?>

                                    <?php if($jrs->berat<9.2){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>11.5){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<76.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>81.7){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==16) { ?>

                                    <?php if($jrs->berat<9.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>11.7){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<77.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>82.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.1){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==17) { ?>

                                    <?php if($jrs->berat<9.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>12.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<78.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>83.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.0){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.6){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==18) { ?>

                                    <?php if($jrs->berat<9.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>12.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<79.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>85.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.9){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.5){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==19) { ?>

                                    <?php if($jrs->berat<10.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>12.5){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<80.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>86.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.9){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.4){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                     <?php if ($jrs->umur==20) { ?>

                                    <?php if($jrs->berat<10.1){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>12.7){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<81.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>87.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.8){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.3){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==21) { ?>

                                    <?php if($jrs->berat<10.3){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>12.9){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<82.3){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>88.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.7){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.2){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==22) { ?>

                                    <?php if($jrs->berat<10.5){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>13.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<83.1){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>89.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.7){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.2){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==23) { ?>

                                    <?php if($jrs->berat<10.7){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>13.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<83.9){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>89.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==24) { ?>

                                    <?php if($jrs->berat<10.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>13.6){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<84.8){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>90.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.0){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==25) { ?>

                                    <?php if($jrs->berat<11.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>13.9){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<84.9){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>91.1){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.8){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.3){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==26) { ?>

                                    <?php if($jrs->berat<11.2){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>14.1){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<85.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>92.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.8){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.3){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==27) { ?>

                                    <?php if($jrs->berat<11.3){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>14.3){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<86.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>92.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.7){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.2){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==28) { ?>

                                    <?php if($jrs->berat<11.5){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>14.5){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<87.1){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>93.7){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.7){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.2){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==29) { ?>

                                    <?php if($jrs->berat<11.7){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>14.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<87.8){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>94.5){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.7){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==30) { ?>

                                    <?php if($jrs->berat<11.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<88.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>95.3){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==30) { ?>

                                    <?php if($jrs->berat<11.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<88.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>95.3){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==31) { ?>

                                    <?php if($jrs->berat<12.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<89.2){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>96.1){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==32) { ?>

                                    <?php if($jrs->berat<12.1){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<89.9){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>96.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.6){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.0){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==33) { ?>

                                    <?php if($jrs->berat<12.3){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.6){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<90.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>97.6){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.5){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.0){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>




                                    <?php if ($jrs->umur==34) { ?>

                                    <?php if($jrs->berat<12.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<91.1){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>98.4){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.5){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.0){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==35) { ?>

                                    <?php if($jrs->berat<12.6){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>16.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<91.8){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>99.1){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.5){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.9){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==36) { ?>

                                    <?php if($jrs->berat<12.7){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>16.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<92.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>99.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.4){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.9){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==37) { ?>

                                    <?php if($jrs->berat<12.9){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>16.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<93.0){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>100.5){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.4){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.9){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==38) { ?>

                                    <?php if($jrs->berat<13.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>16.6){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<93.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>101.2){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.4){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==39) { ?>

                                    <?php if($jrs->berat<13.1){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>16.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<94.2){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>101.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.3){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>





                                    <?php if ($jrs->umur==40) { ?>

                                    <?php if($jrs->berat<13.3){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>17.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<94.7){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>102.5){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.3){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>
                                    <?php } ?>





                                  <?php if ($jrs->umur==41) { ?>

                                    <?php if($jrs->berat<13.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>17.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<95.3){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>103.2){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.3){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                     <?php if ($jrs->umur==42) { ?>

                                    <?php if($jrs->berat<13.6){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>17.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<95.9){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>103.8){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.3){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==43) { ?>

                                    <?php if($jrs->berat<13.6){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>17.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<96.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>104.5){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>







                                    <?php if ($jrs->umur==44) { ?>

                                    <?php if($jrs->berat<13.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>17.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<97.0){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>105.1){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==45) { ?>

                                    <?php if($jrs->berat<14.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>18.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<97.5){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>105.7){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==46) { ?>

                                    <?php if($jrs->berat<14.1){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>18.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<98.1){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>106.3){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <?php if ($jrs->umur==47) { ?>

                                    <?php if($jrs->berat<14.3){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>18.4){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<98.6){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>106.9 ){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>







                                    <?php if ($jrs->umur==48) { ?>

                                    <?php if($jrs->berat<14.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>18.6){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<99.1){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>107.5 ){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.1){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                    <?php if ($jrs->umur==49) { ?>

                                    <?php if($jrs->berat<14.4){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>18.6){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<99.7){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>108.1 ){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.1){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.7){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>






                                      






<?php } ?>


<?php if($jrs->kelamin=="Perempuan") {?>


                                    <?php if ($jrs->umur==60) {?>

                                    <?php if($jrs->berat<15.8){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>21.2){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<104.7){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>114.2){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<13.9){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.9){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==24) {?>

                                    <?php if($jrs->berat<10.2){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>13.0){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<83.2){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>89.6){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.4){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.1){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==36) {?>

                                    <?php if($jrs->berat<12.2){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>15.8){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<91.2){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>98.9){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.2){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==48) {?>

                                    <?php if($jrs->berat<14.0){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>18.5){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<98.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>107.0){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<14.0){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>16.8){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
                                    <?php } ?>

                                    <?php } ?>



                                    <?php if ($jrs->umur==12) {?>

                                    <?php if($jrs->berat<7.9){ 
                                    
                                    $hasil="Beresiko";

                                     }elseif($jrs->berat>10.1){ 

                                    $hasil="Beresiko";

                                     }else{ 

                                    $hasil="Normal";

                                      } ?>

                                    <?php if($jrs->tinggi<71.4){ 
                                        
                                    $hasil1="Beresiko";
                                    
                                    }elseif($jrs->tinggi>76.6){
                                    
                                    $hasil1="Beresiko";
                                    
                                    }else{ 

                                    $hasil1="Normal";

                                     } ?>

                                    <?php if($jrs->imt<15.0){ 
                                        
                                    $hasil2="Beresiko";
                                    
                                    }elseif($jrs->imt>17.9){
                                    
                                    $hasil2="Beresiko";
                                    
                                    }else{ 

                                    $hasil2="Normal";

                                     } ?>

                                    <?php if($hasil=="Normal" && $hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil=="Normal" && $hasil1=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>
                                    
                                    <?php }elseif($hasil=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }elseif($hasil1=="Normal" && $hasil2=="Normal"){ ?>

                                    <div class="alert alert-primary " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Sehat</b> Dan Tidak Terindikasi Stunting
                                    </div> 

                                    <div class="alert alert-primary " role="alert">
                                    Balita Anda Normal Bunda Tetap Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Tetap Ideal.                                    
                                    </div>

                                    <?php }else{ ?>
                                    
                                    <div class="alert alert-danger " role="alert">
                                    Hasil Diagnosa Sistem Menyatakan Anak Anda <b>Beresiko</b> Terkena Stunting.
                                    <p> Harap Pemeriksaan Lebih Lanjut Ke Dokter.</p>
                                    </div> 

                                    <div class="alert alert-danger " role="alert">
                                    Balita Anda Melebihi Standar Nilai Mohon Bunda Berikan Asupan Makanan Yang Mengandung 
                                    Nutrisi dan Gizi Yang Lebih Besar Agar Balita Ideal.
                                    </div>
                                    
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

