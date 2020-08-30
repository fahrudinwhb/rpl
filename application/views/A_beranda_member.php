<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>part/slick/slick-theme.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>part/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>part/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>part/slick/slick.min.js"></script>
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
                            <ul class="nav navbar-nav navbar-right">
                                <li>

                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
        </div>
        <!--Menu Bar-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding:0px;">
            <nav class="navbar navbar-default" style="background-color:#ecf0f1; width:100%; padding:10px">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url(); ?>/beranda">Beranda</a></li>                        <li role="presentation" class="dropdown">
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

                        <form menthod="GET" action="<?php echo site_url() . '/control_member/SearchData/' ?>" class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input id="search-form" name="search" type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Cari</button>
                        </form>
                        <li>
                        <li style="margin-left: 70px">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo ($this->session->userdata('foto')); ?>" style="width:40px; height:40px;">
                        </li>

                        <li>
                            <a type="button"  href="http://localhost/projekrpl/index.php/profil_member";  >Profil</a>
                        </li>

                        <li>
                            <a href="#" onClick="window.location.href = 'control_member/logout';return false;">Logout</a>
                        </li> 
                    </ul>

            </nav>
        </div>
        <!--Menu Bar End-->

    </nav>
</div>
<!--Header End-->

<diV class="container">
    <!--Content (slider 1)-->
    <div class="container-fluid" style="padding:0px;">
        <div class="judul-bar">
            <center><h3>Ikan Baru</h3></center>
        </div>
        <p><h4>Dibawah ini adalah contoh beberapa ikan yang baru masuk pelelangan</h4></p>
        <div class="multiple-items col-xs-10 col-xs-offset-1">
            <?php foreach ($data as $ikan) { ?>
                <div><img src="<?php echo base_url(); ?>images/<?php echo $ikan['fotoikan'] ?>" style="height:250px;width:100%;">
                    <h4>Nama Ikan  :<?php echo $ikan['nama_ikan'] ?></h4>
                    <p><?php echo substr($ikan['deskripsi'], 0, 50) ?></p>
                    . <a href="<?php echo site_url() . '/beranda/GetDetailIkan/' . $ikan['id_ikan'] ?>">lihat selengkapnya...</a>    
                </div>
            <?php } ?>
        </div>
        <!--SLIDE-->
        <script type="text/javascript">
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows : true,
                dots : true,
            });
        </script>
        <!--SLIDE-->
    </div>
    <!--Content end (slider 1)-->

    <!--Content (slider 2)-->
    <div class="container-fluid">
        <div class="judul-bar">
            <center><h3>Ikan Terlaris</h3></center>
        </div>
        <p><h4>Dibawah ini adalah contoh beberapa ikan yang paling sering terjual</h4></p>
        <div class="multiple-items1 col-xs-10 col-xs-offset-1">
            <?php foreach ($penjualan as $populer) { ?>
                <div>
                    <img src="<?php echo base_url() ?>images/<?php echo $populer['fotoikan'] ?>" style="height:250px;width:100%;">
                    <h4>Nama Ikan  :<?php echo $populer['nama_ikan'] ?></h4>
                    <p><?php echo $populer['deskripsi']; ?></p>
                </div>

            <?php } ?>
        </div>
        <!--SLIDE-->
        <script type="text/javascript">
            $('.multiple-items1').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows : true,
                dots : true,
            });
        </script>
        <!--SLIDE-->
    </div>
    <!--Content end (slider )-->  
    <!--Content end (slider )-->  
</div>
<!--Footer-->
<div>
    <nav class="navbar navbar-default" style="background-color:#ecf0f1; padding:10px; margin:0px;">
        <div class="container-fluid" style="padding:10px; height:30px">
            <h4 style="margin:0px">COPYRIGHT@</h4>
        </div>
    </nav>
</div>
</nav>
<!--Footer end-->

</body>
</html>