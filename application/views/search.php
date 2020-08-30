<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/css1//css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/css1/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/css1/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/css1/slick/slick-theme.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>part/css1/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>part/css1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>part/css1/slick/slick.min.js"></script>
        <title></title>
    </head>
    <body>

        <!--Header-->
        <div>
            <nav class="navbar navbar-default" style="background-color:#01baf0; margin:0px;">
                <div class="container-fluid" style="padding:10px;">
                    <nav class="navbar navbar-default" style="border:none">
                        <div class="container-fluid title">
                            <img alt="<?php echo base_url(); ?>images/logo" src="<?php echo base_url(); ?>images/Untitled-1.png">
                            <img src="<?php echo base_url(); ?>images/slogan.png"  style="width:750px">

                            <!--Login pop-up-->

                        </div>
                    </nav>

                </div>
        </div>

        <!--Menu Bar-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding:0px;">
            <nav class="navbar navbar-default" style="background-color:#ecf0f1; width:100%; padding:10px">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url(); ?>/beranda">Beranda</a></li>                        <!--        <li><a href="#">Tentang Kami</a></li>-->
                        <!--        <li><a href="#">Tentang Kami</a></li>-->
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Profil TPI <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>index.php/beranda/tentangkami">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/beranda/fasilitas">Fasilitas</a></li>
                                <li><a href="#">Kelembagaan</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Data Hasil Laut <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>index.php/beranda/ikanlaut">Ikan Laut</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/beranda/lobster">Lobster</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/beranda/cumi">Cumi-cumi</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="galeri.php">Galeri</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/beranda/hubungikami">Hubungi Kami</a></li>
                    </ul>
                    <form menthod="GET" action="<?php echo site_url() . '/beranda/SearchData/' ?>" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input id="search-form" name="search" type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Cari</button>
                    </form>

                </div>
            </nav>
        </div>



        <!--Content-->
        <div class="container">
            <div class="container-us">
                <div class="row">
                    <?php
                    //error_reporting(0);
                    foreach ($data as $detail) {
                        ?>

                        <!--                row 1-->
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>/images/<?php echo $detail['fotoikan']; ?>" alt="...">
                                <div class="caption">
                                    <h3><?php echo $detail['nama_ikan'] ?></h3>
                                    <p><?php echo $detail['status'] ?></p>
                                    <p><a href="<?php echo base_url(); ?>index.php/beranda/GetDetailIkan/<?php echo $detail['id_ikan']; ?>" class="btn btn-primary" role="button">Lihat Detail</a></p>
                                </div>
                            </div> 
                        </div>

                    <?php } ?>
                </div>    
            </div>
        </div>


        <!--Footer-->
        <div>
            <nav class="navbar navbar-default" style="background-color:#ecf0f1; padding:10px; margin:0px;">
                <div class="container-fluid" style="padding:10px; height:30px">
                    <h4 style="margin:0px">COPYRIGHT@</h4>
                </div>
            </nav>
        </div>

        <!--Footer end-->    
    </body>
</html>