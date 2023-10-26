
	<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Stunting</h6>
                                </div>

                                <div class="card-body">
                                
                                <?php echo anchor('administrator/masyarakat/input','<button class="au-btn au-btn-icon bg-primary au-btn--small"><i class="fas fa-plus"></i> Tambah Data Stunting</button>')?>
                               
                                <br>
                                
                                <!-- <form class="navbar-search" action="<?php echo base_url('administrator/stunting/hasil')?>" action="GET">
                                <div class="input-group">
                                <input type="text" name="cari" class="form-control bg-light border-0 small" value="Search Stunting..." aria-label="Search" require_once>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" value="Cari">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                                </div>
                                </form> -->
                                <br>
                                <?php echo $this->session->flashdata('pesan')?>
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Berat Badan</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Indeks Masa Tubuh (IMT)</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                    <?php
                                    $no=+1;
                                    foreach ($stunting as $jrs) : ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td><?php echo $jrs->nik ?></td>
                                    <td><?php echo $jrs->umur ?> Bulan</td>
                                    <td><?php echo $jrs->kelamin ?></td>
                                    <td><?php echo $jrs->berat ?> .Kg</td>
                                    <td><?php echo $jrs->tinggi ?> .Cm</td>
                                    <td><?php echo $jrs->imt ?></td>
                                    <td width="20px">
                                    
                                    <?php echo anchor('administrator/masyarakat/update/'.$jrs->id_stunting,'<div class="btn btn-sm btn-warning">Edit   <i class="fas fa-edit"></i></div>') ?><hr>

                                    <?php echo anchor('administrator/masyarakat/delete/'.$jrs->id_stunting,'<div class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></div>') ?>
                                    </td>


                                    </tr> 
                                    <?php endforeach;?>
                                    </table>
                                    <br>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        