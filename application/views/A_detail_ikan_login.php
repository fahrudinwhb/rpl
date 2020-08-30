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
                            <a type="button"  href="http://localhost/projekrpl/index.php/control_member/Getprofil";  >Profil</a>
                        </li>

                        <li>
                            <a href="#" onClick="window.location.href = 'logout';return false;">Logout</a>
                        </li> 
                    </ul>

            </nav>
        </div>
        <!--Menu Bar End-->





        <?php
        foreach ($data as $detail) {
            $id_ikan = $detail['id_ikan'];
            $nama_ikan = $detail['nama_ikan'];
            $tanggal_masuk = $detail['tanggal_masuk'];
            $sisaberat = $detail['berat'];
            $harga = $detail['harga_jual'];
            $deskripsi = $detail['deskripsi'];
            $foto = $detail['fotoikan'];
            $status = $detail['status'];
        }
        ?>

        <!--Content-->
        <div class="container">
            <div class="right-content">
                <div id="title">
                    <h1><?php echo $nama_ikan ?></h1>
                </div>
                <br><br>
                <div class="content">
                    <center>
                        <img src="<?php echo base_url() ?>images/<?php echo $foto ?>" style="width:600px; height: 300px">
                    </center>
                    <br><br>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><p>Sisa Stok/Kg</p><div><?php echo $sisaberat ?></div>
                        </li>
                        <li><i class="fa fa-calendar"></i><p>Tanggal masuk</p><div><?php echo $tanggal_masuk; ?></div>
                        </li>
                        <li><i class="fa fa-music"></i><p>Harga/Kg</p><div><?php echo $harga ?></div>
                        </li>
                        <li><i class="fa fa-clock-o"></i><p>Status</p><div><?php echo $status ?></div>
                        </li>
                    </ul>

                    <div class="detail">
                        <p><?php echo $deskripsi ?></p>
                    </div>
                    <br><br><br>
                    <div class="container-us">
                        <div class="third-content-a">
                            <form action="<?php echo site_url() . '/control_member/Komentar/' . $id_ikan ?>" method="post" class="formbawah">
                                <table id="concol">
                                    <tr>
                                        <td>
                                            <h3>
                                                Komentar
                                            </h3>
                                        </td>
                                        <td>
                                            <h3>
                                                :
                                            </h3>
                                        </td>
                                        <td>
                                            <textarea type="text" name="komentar" class="kirimin" placeholder="Isi komentar anda"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <?php echo form_submit(array('value' => 'Simpan', 'name' => 'submit', 'id' => 'submit')); ?>
                                        </td>
                                    </tr>

                                </table>


                            </form>
                        </div>
                    </div>


                    <br><br>
                    <div class=" ">
                        <center>
                            <table class=" table table-bordered table-hover" >
                                <thead>
                                    <tr>

                                        <th><center>Post By</center></th>
                                <th><center>Komentar</center></th>
                                <th><center>Tanggal</center></th>

                                </tr>
                                </thead>


                                <tbody>
                                    <?php foreach ($komentar as $komen) { ?>


                                        <tr>

                                            <td><center><?php echo $komen['username']; ?></center></td>
                                    <td><center><?php echo $komen['isi_komentar']; ?></center></td>
                                    <td><center><?php echo $komen['tanggal_komentar']; ?></center></td>

                                <?php } ?>

                                </tbody>
                            </table>
                        </center>	


                    </div>


                </div>
            </div>
        </div>
        <!--Content end-->

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