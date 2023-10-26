
	<div class="container">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
                                </div>

                                <div class="card-body">
                                
                               
                                <?php echo anchor('administrator/tamu/reset','<button class="au-btn au-btn-icon bg-danger au-btn--small"><i class="fas fa-trash"></i> Reset Data Tamu</button>')?>

                                <br>
                                
                                <br>
                                <form class="navbar-search" action="<?php echo base_url('administrator/tamu/hasil')?>" action="GET">
                                <div class="input-group">
                                <input type="text" name="cari" class="form-control bg-light border-0 small" value="Search Tamu..." aria-label="Search" require_once>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" value="Cari">
                                    <i class="fas fa-search fa-sm"></i>
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
                                    <th scope="col">Aksi</th>
                                    </tr>
                                    <?php
                                    $no = $this->uri->segment('3') + 1;
                                    foreach ($tamu->result() as $jrs) : ?>
                                    <tr>
                                    <td width="20px"><?php echo $no++ ?></td>
                                    <td><?php echo $jrs->nama ?></td>
                                    <td><?php echo $jrs->instansi ?></td>
                                    <td><?php echo $jrs->tanggal ?></td>
                                    <td><?php echo $jrs->no_hp ?></td>
                                    <td><?php echo $jrs->kepentingan ?></td>
                                    <td width="20px"><?php echo anchor('administrator/tamu/update/'.$jrs->id_tamu,'<div class="btn btn-sm btn-warning">Edit<i class="fa edit"></i></div>') ?><hr>

                                    <?php echo anchor('administrator/tamu/delete/'.$jrs->id_tamu,'<div class="btn btn-sm btn-danger">Delete</div><i class="fa fa trash"></i>') ?></td>


                                    </tr> 
                                    <?php endforeach;?>
                                    </table>
                                    <br>
                                    <?php echo $pagination; ?></br>
                                    </div>


                               
                               
                </div>
                            <!-- Approach -->
        </div>
</div>        