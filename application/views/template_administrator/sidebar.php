<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo" style="background: #00682c;">
                <a href="#">
                    <h3 style="color: rgb(252, 250, 250);">DIAGNOSA</h3>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                <div class="image img-cir img-120">
                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="John Doe" />
                </div>

                    <h4 class="name"><?php echo $username;?></h4>
                    <a href="#" data-toggle="modal" data-target="#logoutModal">Sign out</a>
                </div>

                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        
                        <li class="has-sub">
                            <a href="<?php echo base_url('administrator/dashboard')?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url('administrator/stunting/informasi') ?>">
                                <i class="fas fa-info-circle"></i> Data Batita</a>
                        </li> -->
                    
                        <?php if($level == "Admin"){ ?>
                        <li>
                            <a href="<?php echo base_url('administrator/stunting') ?>">
                                <i class="fas fa-group"></i>Data Batita</a>
                        </li>

                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Penentuan Status Gizi
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo base_url('administrator/stunting/laporan_diagnosa') ?>">
                                            <i class="fas fa-circle"></i>Hasil Diagnosa</a>
                                    </li>
                                    <!-- <li>
                                        <a href="<?php echo base_url('administrator/stunting/bbu') ?>">
                                            <i class="fas fa-circle"></i>BB/U</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('administrator/stunting/pbu') ?>">
                                            <i class="fas fa-circle"></i>PB/U</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('administrator/stunting/bbpb') ?>">
                                            <i class="fas fa-circle"></i>BB/PB</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('administrator/stunting/imtu') ?>">
                                            <i class="fas fa-circle"></i>IMT/U</a>
                                    </li> -->
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if($level == "Masyarakat"){ ?>
                        <li>
                            <a href="<?php echo base_url('administrator/masyarakat') ?>">
                                <i class="fas fa-group"></i>Data Stunting</a>
                        </li>

                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Laporan
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo base_url('administrator/masyarakat/laporan_diagnosa') ?>">
                                            <i class="fas fa-circle"></i>Hasil Diagnosa</a>
                                    </li>
                                    <!-- <li>
                                        <a href="<?php echo base_url('administrator/masyarakat/bbu') ?>">
                                            <i class="fas fa-circle"></i>BB/U</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('administrator/masyarakat/pbu') ?>">
                                            <i class="fas fa-circle"></i>PB/U</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('administrator/masyarakat/bbpb') ?>">
                                            <i class="fas fa-circle"></i>BB/PB</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('administrator/masyarakat/imtu') ?>">
                                            <i class="fas fa-circle"></i>IMT/U</a>
                                    </li> -->
                                </ul>
                            </li>
                        <?php } ?>



                        <li>
                            <a href="<?php echo base_url('administrator/user/profil') ?>">
                                <i class="fas fa-user"></i>Profil</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-power-off"></i> Logout
                            </a>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2" style="background: green;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                <h3 style="color: rgb(252, 250, 250);">Diagnosa Gizi</h3>
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none" >
                <div class="logo" style="background: blue;">
                    <a href="#">
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="<?php echo base_url('administrator/dashboard')?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/stunting/informasi') ?>">
                                <i class="fas fa-info"></i> Informasi Stunting</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/tamu') ?>">
                                <i class="fas fa-group"></i>Data Stunting</a>
                        </li>
                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="login.html">
                                            <i class="fas fa-sign-in-alt"></i>Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">
                                            <i class="fas fa-user"></i>Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">
                                            <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                        <!-- <li>
                            <a href="<?php echo base_url('administrator/tamu') ?>">
                                <i class="fas fa-group"></i>Data Tamu</a>
                        </li> -->
                        <!-- <li>
                            <a href="<?php echo base_url('administrator/tamu/laporan') ?>">
                                <i class="fas fa-file"></i>Laporan</a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url('administrator/user/profil') ?>">
                                <i class="fas fa-user"></i>Profil</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-power-off"></i> Logout
                            </a>
                        </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item"><?php echo $title;?></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    
                </div>
            </section>
            <!-- END STATISTIC-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah Anda Yakin Ingin "Logout" ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('administrator/auth/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

   

            