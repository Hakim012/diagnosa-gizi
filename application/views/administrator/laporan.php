
	<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
                                </div>

                                <div class="card-body">
                                
                               
                                <?php echo anchor('administrator/tamu/export_excel','<button class="au-btn au-btn-icon bg-primary au-btn--small"><i class="fas fa-print"></i> Cetak Semua Data Tamu</button>')?>

                                <br>
                                
                                <br>
                                <form class="navbar-search" action="<?php echo base_url('administrator/tamu/hasil_tahun')?>" action="GET">
                                <div class="input-group">
                                <input type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Cetak Data Tamu Tahun..." aria-label="Search" require_once>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" value="Cari">
                                    <i class="fas fa-print fa-sm"></i>
                                    </button>
                                </div>
                               
                                </div>
                                </form>
                                <br>
                                <?php echo $this->session->flashdata('pesan')?>
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Kepentingan</th>
                                    </tr>
                                    <?php
                                    $no=1;
                                    foreach ($tamu as $jrs) : ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td><?php echo $jrs->instansi ?></td>
                                    <td><?php echo $jrs->tanggal ?></td>
                                    <td><?php echo $jrs->no_hp ?></td>
                                    <td><?php echo $jrs->kepentingan ?></td>
                                    
                                    </tr> 
                                    <?php endforeach;?>
                                    </table>
                                    <br>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        