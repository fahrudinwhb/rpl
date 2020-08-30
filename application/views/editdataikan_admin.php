<!DOCTYPE html>
<html>
    <head>
        <title>FISH-I Admin Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/Adm.css">
        <script type="text/javascript" src="<?php echo base_url();?>part/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>part/js/bootstrap.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top no-margin scroll-hide" style="overflow:visible;">
            <div class="navbar-header fixed-brand scroll-hide">
                <a class="navbar-brand"href="">
                    <span class = "nav-logo">	&nbsp 	&nbsp 	&nbsp 	&nbsp FISH-I</span>
                </a>
            </div>

            <div class="container-fluid">
                <div class="pull-right hidden-xs nav-user-login">
                    <a href="" class="link-gray user-setting">
                        <i class="fa fa-cog"></i>
                    </a>

                </div>

                <div class="col-md-2 pull-right hidden-xs nav-user-login" style="min-width:210px;">
                    <span class="display-name pull-left">
                        admin
                    </span>
                    <span class="logo-user pull-right">
                        <i class="fa fa-user"></i>
                    </span>
                </div>
            </div>
        </nav>



        <div id="wrapper" >
            <div id="sidebar-wrapper">
                <div class="sidebar-nav-tittle">
                    <div class="overlay">NAVIGATION</div>
                </div>
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                    <li>
                        <a href="" class="menu-item">
                            <span class="icon fa fa-line-chart"></span>
                            <span class="menu">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="" class="menu-item">
                            <span class="icon fa fa-database"></span>
                            <span class="menu">&nbsp Data Ikan</span>
                        </a>
                    </li>

                    <li>
                        <a href="control_admin/logout" class="menu-item">
                            <span class="icon fa fa-sign-out"></span>
                            <span class="menu">&nbsp Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class=" ">
                <center>
                    <?php
                    foreach ($data as $i) {
                        $id = $i['id_ikan'];
                        $namaikan = $i['nama_ikan'];
                        $berat = $i['berat'];
                        $harga = $i['harga_jual'];
                        $deskripsi = $i['deskripsi'];
                        $foto = $i['fotoikan'];
                    }
                    ?>
                    <div class=" ">
                        <center>

                            <?php echo form_open_multipart('control_admin/updateDataIkan/' . $id, array('method' => 'post')) ?>

                            <table class=" table table-bordered" >
                                <tr>
                                    <td>Nama Ikan</td>
                                    <td>:</td>
                                    <td><input type="text" name="NamaIkan" id="input" value="<?php echo $namaikan ?>" required></td>    
                                </tr>
                                <tr>
                                    <td>Berat Ikan</td>
                                    <td>:</td>
                                    <td><input type="text" name="Berat" id="input" value="<?php echo $berat ?>" required></td>    
                                </tr>
                                <tr>
                                    <td>Harga Ikan</td>
                                    <td>:</td>
                                    <td><input type="text" name="Harga" id="input" value="<?php echo $harga ?>"required></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>:</td>
                                    <td><textarea type="text" name="Deskripsi" id="input" value="<?php echo $deskripsi ?>"style="width:300px; height:100px;" >
                                        </textarea></td>
                                </tr>

                                <tr>
                                    <td>Foto</td>
                                    <td></td>
                                    <td>
                                        <input type="file" name="userfile"/>
                                    </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><img src="../../../images/<?php echo $foto ?>" style="width:50px; height:50px;"
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

                            <?php echo form_close(); ?>
                        </center>	


                    </div>
            </div>
        </div>

    </body>
</html>