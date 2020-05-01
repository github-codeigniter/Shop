    <body>
 <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tb_left pull-left">
                                <p>Selamat datang di shop pakaian</p>
                            </div>
                            <div class="tb_center pull-left">
                                <ul>
                                    <li><i class="fa fa-phone"></i> Kontak: <a href="#">(+62) 878-9197-4277</a></li>
                                    <li><i class="fa fa-envelope-o"></i> <a href="#">riswanmobile@gmail.com</a></li>
                                </ul>
                            </div>
                            <div class="tb_right pull-right">
                                <ul>
                                    <li>
                                        <div class="tbr-info">
                                        <?php if ($this->session->userdata('Id_user')){ ?>
                                            <span><?php echo $this->session->userdata('nama_user');?> <i class="fa fa-caret-down"></i></span>
                                            <div class="tbr-inner">
                                                <a href="#">Profile</a>
                                                <a href="<?= base_url("user/web/logOut") ?>">Logout</a>
                                            </div>
                                        <?php }else{?>
                                            <span>Masuk Akun <i class="fa fa-caret-down"></i></span>
                                            <div class="tbr-inner">
                                                <a href="<?= base_url('login');?>">Login</a>
                                            </div>
                                        <?php }?>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
            <!-- HEADER -->
            <header>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                                <a class="navbar-brand" href="<?= base_url("user/web") ?>"><img src="<?php echo base_url(); ?>assets/images/basic/logo.png" class="img-responsive" alt=""/></a>
                            </div>
                            <!-- Cart & Search -->
                            <div class="header-xtra pull-right">
                                <div class="topcart">
                                    <a href="<?= base_url('user/web/keranjang') ?>"><span><i class="fa fa-shopping-cart"></i></span></a>
                                </div>
                                <div class="topsearch">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                    <form class="searchtop">
                                        <input type="text" placeholder="Cari Pakaian">
                                    </form>
                                </div>
                            </div>
                            <!-- Navmenu -->
                        <?php if ($this->session->userdata('Id_user')) 
                        {
                        ?>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- <li class="dropdown">
                                        <a href="<?= base_url('user/web')?>" class="active"  role="button" aria-expanded="false">HOME</a>
                                    </li> -->
                                    <li class="dropdown">
                                        <a href="#">Wanita</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Pria</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="web/kategori_shop">Kategori</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Tentang</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        <?php 
                        }else{ ?>

                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- <li class="dropdown">
                                        <a href="<?= base_url("home")?>" class="active"  role="button" aria-expanded="false">HOME</a>
                                    </li> -->
                                    <li class="dropdown">
                                        <a href="#">WOMEN</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">MAN</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="<?= base_url("home/kategori_shop") ?>">SHOP</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">ABOUT</a>
                                    </li>
                                    
                                </ul>
                            </div> 

                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </nav>
            </header>