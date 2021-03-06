<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
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
        <!--Maps-->
        <style>
            #map-canvas {
                margin: 10px;
                padding: 10px;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>
            function initialize() {
                var myLatlng = new google.maps.LatLng(-8.221979, 111.0738342);
                var mapOptions = {
                    zoom: 13,
                    scrollwheel: false,
                    center: myLatlng
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Hello World!'
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!--Maps end-->
    </head>

    <body>
        <!--Header-->
        <div class="container">
            <nav class="navbar navbar-default" style="background-color:#08a1ff; margin:0px;">
                <div class="container-fluid">
                    <div class="container-fluid title">
                        <div class="col-xs-4 logo-header">
                            <img alt="<?php echo base_url(); ?>images/logo" src="<?php echo base_url(); ?>images/Untitled-1.png">
                        </div>
                        <div class="col-xs-8 judul-header">
                            <p>SISTEM INFORMASI STOCK IKAN</p>
                        </div>
                    </div>
                </div>
        </div>

        <!--Menu Bar-->
        <nav class="navbar navbar-default" style="background-color:#ecf0f1; width:100%; padding:10px; margin:0px;">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url(); ?>/beranda">Beranda</a></li>
                    <li role="presentation" class="dropdown">
                        <!--        <li><a href="#">Tentang Kami</a></li>-->
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Profil TPI <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="<?php echo base_url() ?>index.php/beranda/tentangkami">Tentang Kami</a></li>
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
                        <li><a href="<?php echo base_url() ?>index.php/beranda/galeri">Galeri</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/beranda/hubungikami">Hubungi Kami</a></li>

                </ul>
                <form menthod="GET" action="<?php echo site_url() . '/control_member/SearchData/' ?>" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input id="search-form" name="search" type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Cari</button>
                </form>

                <!--Login pop-up-->
                <ul class="nav navbar-nav navbar-right">
                    <?php if($this->session->userdata('status')){ ?>
                    <li>
                        <img src="<?php echo base_url(); ?>uploads/<?php echo ($this->session->userdata('foto')); ?>" style="width:40px; height:40px;">
                    </li>
                    <li>
                        <a type="button" href="http://localhost/projekrpl/index.php/profil_member" ;><?php echo $this->session->userdata('username') ?></a>
                    </li>

                    <li>
                        <a href="#" onClick="window.location.href = '<?php echo site_url('control_member/logout')?>';return false;">Logout</a>
                    </li>
                    <?php } else{ ?>
                    <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Login</button>
                    </li>
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content login">
                                <div class="judul-pop">
                                    <center>
                                        <h3>Login</h3>
                                    </center>
                                </div>
                                <div class="logo-name">
                                    <center>
                                        <img src="<?php echo base_url(); ?>images/Untitled-1.png" style="width:100px; height:50px;">Fish Information
                                    </center>
                                </div>
                                <div class="form-l">
                                    <?php echo form_open_multipart('beranda/cek_login') ?>
                                    <form method="POST">
                                        <center>
                                            <input type="text" id="input" name="username" placeholder="User Name">
                                            <input type="password" id="input" name="password" placeholder="Password">
                                            <br>
                                            <input type="submit" id="submit" name="Submit" value="Sign In">
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--Register pop-up-->
                    <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Register</button>
                    </li>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content register">
                                <div class="judul-pop">
                                    <center>
                                        <h3>Register</h3>
                                    </center>
                                </div>
                                <div class="logo-name">
                                    <center>
                                        <img src="<?php echo base_url(); ?>images/Untitled-1.png" style="width:100px; height:50px;">Fish Information
                                    </center>
                                </div>
                                <div class="form-r">
                                    <center>
                                        <?php echo form_open_multipart('beranda/control_register', array('method' => 'post')) ?>

                                        <table>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" class="form-control" name="Nama" id="input" placeholder="Nama Anda" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Username</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="Username" id="input" placeholder="Nama User" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="email" name="Email" id="input" placeholder="EmailAnda@mail.com" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="password" name="Password" id="input" placeholder="******" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="date" name="Tanggal" id="input" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. Telp.</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="Hp" id="input" placeholder="08xxxxxxxxx" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" name="Sex" value="Laki-laki" checked>Laki-laki
                                                    <input type="radio" name="Sex" value="Perempuan">Perempuan
                                                </td>
                                                <tr>
                                                    <td>Foto</td>
                                                    <td></td>
                                                    <td>
                                                        <input type="file" name="userfile" size="20" />
                                                </tr>
                                            </tr>
                                        </table>

                                        <?php echo form_submit(array('value' => 'Daftar', 'name' => 'submit', 'id' => 'submit')); ?>
                                    </center>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </ul>


                </div>
        </nav>

        <!--Menu Bar End-->

        </nav>
        </div>
        <!--Header End-->
        <!--Content-->
        <div class="container">

            <div class="col-xs-6">
                <h2 id="map">Foto</h2>
                <center>
                    <img class="foto-lokasi" src="<?php echo base_url() ?>images/foto/lokasi.jpg">
                </center>
                <h2 id="map">Maps</h2>
                <div id="map-canvas"></div>
            </div>

            <div class="col-xs-6">
                <div id="title">
                    <h3>Tentang Kami</h3>
                </div>
                <div class=" ">
                    <p>Pelabuhan Perikanan Pantai (PPP) Tamperan Kabupaten Pacitan adalah pengembangan dari Pangkalan Pendaratan Ikan (PPI) yang kondisinya tidak memenuhi untuk sentra kegiatan usaha perikanan tangkap. Seiiring dengan potensi yang ada di
                        perairan Kabupaten Pacitan (Samudera Hindia) masih cukup besar yang belum dieksploitasi, perkembangan jumlah nelayan di Kabupaten Pacitan semakin meningkat, dan peluang sektor perikanan tangkap yang begitu besar, oleh karenanya
                        pembangunan Pelabuhan Perikanan yang memenuhi standar merupakan kebutuhan yang diprioritaskan.</p>
                    <p>Pelabuhan Perikanan Pantai (PPP) Tamperan diresmikan oleh Presiden RI pada tanggal 29 Desember 2007. Kini masyarakat Kabupaten Pacitan khususnya nelayan Kecamatan Tamperan dan sekitarnya dapat merasakan manfaatnya dengan semakin bersemangatnya
                        mereka dalam melakukan kegiatan usaha penangkapan ikan di laut, hal tersebut terbukti dengan adanya peningkatan jumlah nelayan, bentuk maupun ukuran kapal dan jenis alat tangkap yang digunakan serta hasil produksi yang didaratkan
                        di PPP Tamperan.</p>
                    <p>Komoditas ikan yang terdapat di perairan Kabupaten Pacitan bermacam-macam mulai jenis ikan pelagis besar seperti Tuna, Cakalang, Tongkol, Tengiri, Marlin dan Lemadang, pelagis kecil seperti Kembung, Lemuru, Rebon, Keri, Kuwe, Pisang-pisang,
                        Julung-julung, Layang, Kuniran, Golok-golok, Lencam, dan Cumi-cumi, demersal seperti Pari maupun dari jenis udang-udangan (Crustacea) seperti Lobster dan Rajungan.</p>
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
        </nav>
        <!--Footer end-->

    </body>

    </html>
</body>

</html>
