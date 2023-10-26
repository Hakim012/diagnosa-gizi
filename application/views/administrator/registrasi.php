<body class="bg-gradient-#ffa831">
<div class="container"><br><br><br>
<center> <img class="img-profile" src="<?php echo base_url() ?>assets/home/images/stunting.jpg" width="180px" height="180px" ><br>
</center>
<!-- Outer Row -->
<div class="row justify-content-center">
<div class="col-xl-5 col-lg-6 col-md-5">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">

<!-- Nested Row within Card Body -->
<div class="row">
<div class="col-lg-12">
<div class="p-5">
<div class="text-center">
<h2 class="h4 text-gray-900 mb-4">Registrasi</h2>
<?php echo $this->session->flashdata('pesan')?>
</div>
<!--tambahkan method post dan action arahkan kepada lokasi folder administrator/auth -->
<form method="post" action="<?php echo base_url('administrator/auth/input_aksi')?>" cla
ss="user">
<div class="form-group">
<input type="text" class="form-control form-control-user" id="exampleInputEmail" ariadescribedby="emailHelp" placeholder="Username Anda" name="username">
<?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="password" class="form-control form-controluser" id="exampleInputPassword" placeholder="Password Anda" name="password">
<?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
</div>
<div class="form-group">
<input type="email" class="form-control form-controluser" id="exampleInputPassword" placeholder="Email Anda" name="email">
<?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
</div>
<input type="hidden" name="level" value="masyarakat">
<input type="hidden" name="blokir" value="N">

<button class="btn btn-primary btn-user btn-block">Daftar</button>
<br>
</p> Sudah punya akun ?
<a href="<?php echo base_url('administrator/auth')?>" class="btn btn-primary btn-warning" > Login  </a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>