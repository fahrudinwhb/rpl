<!DOCTYPE html>
<html>
    <head>
        <title>FISH-I Admin Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Adm.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>part/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>part/js/bootstrap.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top no-margin scroll-hide" style="overflow:visible;">
            <div class="navbar-header fixed-brand scroll-hide">
                <a class="navbar-brand"href="<?php echo site_url();?>/control_beranda/beranda">
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
                        <a href="kelola_member" class="menu-item">
                            <span class="icon fa fa-database"></span>
                            <span class="menu">&nbsp Data Member</span>
                        </a>
                    </li>

                    <li>
                        <a href="control_admin/datapenjualan" class="menu-item">
                            <span class="icon fa fa-database"></span>
                            <span class="menu">&nbsp Data Penjualan</span>
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

            <div class="centerBar">

                <div class="" style="margin-bottom:30px;"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" type="button" class="btn btn-primary"><i class="fa fa-folder-open"></i>&nbsp Tambah Data Ikan</a>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <img src="<?php echo base_url(); ?>/images/Untitled-1.png" style="width:150px; height:50px;">
                                <h3>Tambah Data Ikan</h3>
                                <?php echo form_open_multipart('control_admin/inputDataIkan', array('method' => 'post')) ?>

                                <table class=" table">
                                    <tr>
                                        <td>Tanggal Masukan</td>
                                        <td>:</td>
                                        <td><input type="datetime" name="Tanggal" id="input" value="<?php echo $tanggal = date("Y-m-d") ?>" required></td>    
                                    </tr>
                                    <tr>
                                        <td>Nama Ikan</td>
                                        <td>:</td>
                                        <td><input type="text" name="NamaIkan" id="input" placeholder="Nama Ikan" required></td>    
                                    </tr>
                                    <tr>
                                        <td>Jenis Ikan</td>
                                        <td>:</td>
                                        <td>
                                            <select name="jenis_ikan">
                                                <option  value="Ikan Laut"  >Ikan Laut</option>
                                                <option  value="Lobster"  >Lobster</option>
                                                <option  value="Cumi"  >Cumi-cumi</option>
                                            </select>
                                                    </td>    
                                    </tr>
                                    <tr>
                                        <td>Berat Ikan</td>
                                        <td>:</td>
                                        <td><input type="text" name="Berat" id="input" placeholder="Berat Ikan" required></td>    
                                    </tr>
                                    <tr>
                                        <td>Harga Ikan</td>
                                        <td>:</td>
                                        <td><input type="text" name="Harga" id="input" placeholder="Harga Ikan" required></td>    
                                    </tr>
                                    <tr>
                                        <td>Descripsi</td>
                                        <td>:</td>
                                        <td><textarea  name="deskripsi" id="input" placeholder="Descripsi" required style="width: 500px; height: 100px;"></textarea> </td>    
                                    </tr>
                                    <tr>
                                        <td>Foto</td>
                                        <td></td>
                                        <td>
                                            <input type="file" name="userfile" />
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <?php echo form_submit(array('value' => 'Tambah Data', 'name' => 'submit', 'id' => 'submit')); ?>
                                        </td>
                                    </tr>

                                </table>

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>  

                <div class=" ">
                    <center>
                        <table class=" table table-bordered table-hover" >
                            <thead>
                                <tr>

                                    <th><center>ID Ikan</center></th>
                            <th><center>Tgl.Masuk</center></th>
                            <th><center>Nama Ikan</center></th>
                            <th><center>Berat</center></th>
                            <th><center>Harga Jual</center></th>
                            <th><center>Deskripsi</center></th>
                            <th><center>Status</center></th>
                            <th><center>Foto Ikan</center></th>


                            <th></th>
                            <th></th>
                            </tr>
                            </thead>


                            <tbody>
                                <?php foreach ($data as $ikan) { ?>


                                    <tr>
                                        <td><center><?php echo $ikan['id_ikan']; ?></center></td>
                                <td><center><?php echo $ikan['tanggal_masuk']; ?></center></td>
                                <td><center><?php echo $ikan['nama_ikan']; ?></center></td>
                                <td><center><?php echo $ikan['berat']; ?></center></td>
                                <td><center><?php echo $ikan['harga_jual']; ?></center> </td>
                                <td><center><?php echo $ikan['deskripsi']; ?></center></td>
                                <td><center><?php echo $ikan['status']; ?></center></td>

                                <td>
                                <center>
                                    <img src="<?php echo base_url(); ?>/images/<?php echo $ikan['fotoikan']; ?>" style="width:50px; height:50px;">

                                </center>
                                </td>

                                <td><center>
                                    <a href="control_admin/updateDataIkan/<?php echo $ikan['id_ikan'] ?>"><button type="button" class="btn btn-warning" style="margin-bottom: 10px"><i class="fa fa-pencil"></i>&nbsp Edit</button></a>

                                </center></td>
                                <td><center>
                                    <a href="control_admin/hapusIkan/<?php echo $ikan['id_ikan'] ?>" onclick="return confirm('Apakah anda yakin ?')" ><button type="button" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp Hapus</button></a>
                                </center>
                                </td>
                                <td><center>
                                    <a href="control_admin/penjualan/<?php echo $ikan['id_ikan'] ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil"></i>&nbsp Beli Ikan</button></a>

                                </center>
                                </td>
                                </tr>
                            <?php } ?>

                            </tbody>




                        </table>
                    </center>	


                </div>

            </div>
    </body>
</html>