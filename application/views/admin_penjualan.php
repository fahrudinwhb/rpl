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
                        <a href="http://localhost/projekrpl/index.php/control_admin" class="menu-item">
                            <span class="icon fa fa-database"></span>
                            <span class="menu">&nbsp Data Ikan</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout" class="menu-item">
                            <span class="icon fa fa-sign-out"></span>
                            <span class="menu">&nbsp Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="centerBar">
                <div class=" ">
                    <center>
                        <?php
                        foreach ($data as $i) {
                            $id = $i['id_ikan'];
                            $namaikan = $i['nama_ikan'];
                            $berat = $i['berat'];
                            $harga = $i['harga_jual'];

                        }
                        ?>


                        <?php echo form_open_multipart('control_admin/penjualan/' . $id, array('method' => 'post')) ?>

                        <table class=" table table-bordered" >
                            <tr>
                                <td>Tanggal Pembelian</td>
                                <td>:</td>
                                <td><input type="datetime" name="tanggal" id="input" value="<?php echo $tanggal = date("Y-m-d") ?>" required></td>    
                            </tr>
                            <tr>
                                <td>ID ikan</td>
                                <td>:</td>
                                <td><input type="text" name="id"  value="<?php echo $id ?>" required></td>    
                            </tr>
                            <tr>
                                <td>Nama Ikan</td>
                                <td>:</td>
                                <td><input type="text" name="namaikan" value="<?php echo $namaikan ?>" required></td>    
                            </tr>

                            <tr>
                                <td>Harga Ikan / KG</td>
                                <td>:</td>
                                <td><input type="text"  name="harga" id="harga"  value="<?php echo $harga ?>"required readonly=""></td>
                            </tr>
                            <tr>
                                <td>Berat Ikan</td>
                                <td>:</td>
                                <td><input type="text" name="berat" id="berat" class="berat" placeholder="KG"  required></td>    
                            </tr>
                            <tr>
                                <td>Total Biaya</td>
                                <td>:</td>
                                <td><input type="text" name="total" id="nominal" value="" readonly="" required></td>
                            </tr>


                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php echo form_submit(array('value' => 'Beli Ikan', 'name' => 'submit', 'id' => 'submit')); ?>
                                </td>
                            </tr>
                        </table>

                        <?php echo form_close(); ?>
                    </center>
                    </tbody>
                    <!-- jQuery -->
                    <script>
                        $('.berat').focus(function(){
                            // var aydi = $(this).data('id');
                            $(this).keydown(function(){
                                setTimeout(function() {
                                    var harga = $('#harga').val(),
                                    berat = $('#berat').val(),
                                    nominal = parseInt(harga) * parseInt(berat);
                                    $('#nominal').val(nominal);
                                }, 50);
                            });
                        });
                    </script>



                    </table>
                    </center>	


                </div>

            </div>
    </body>
</html>