<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
	<center><h3>SELAMAT DATANG DI PENGADILAN AGAMA NEGERI BENGKALIS</h3></center>

<table border="1" width="100%">

<thead>

<tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">NO HP</th>
                                    <th scope="col">Kepentingan</th>

 </tr>

</thead>

<tbody>

<?php $no=1; foreach($cari as $jrs) { ?>

<tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td><?php echo $jrs->instansi ?></td>
                                    <td><?php echo $jrs->tanggal ?></td>
                                    <td>No. <?php echo $jrs->no_hp ?></td>
                                    <td><?php echo $jrs->kepentingan ?></td>

 </tr>

<?php } ?>

</tbody>

</table>