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
                        <table class=" table table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>
                            <center>TANGGAL</center>
                            </th>
                            <th>
                            <center>No.ID Penjualan</center>
                            </th>
                            <th>
                            <center>ID_IKAN</center>
                            </th>
                            <th>
                            <center>NAMA_IKAN</center>
                            </th>
                            <th>
                            <center>BERAT</center>
                            </th>

                            <th>
                            <center>HARGA/KG</center>
                            </th>
                            <th>
                            <center>TOTAL</center>
                            </th>
                            <th>
                            

                            <th></th>
                            <th></th>
                            </tr>
                            </thead>


                            <tbody>
                                <?php foreach ($data as $penjualan) { ?>


                                    <tr>
                                        <td><center><?php echo $penjualan['tanggal_penjualan']; ?></center></td>
                                <td><center><?php echo $penjualan['id_penjualan']; ?></center></td>
                                <td><center><?php echo $penjualan['id_ikan']; ?></center></td>
                                <td><center><?php echo $penjualan['nama_ikan']; ?></center></td>
                                <td><center><?php echo $penjualan['berat']; ?></center> </td>
                                <td><center><?php echo $penjualan['harga']; ?></center></td>
                                <td><center><?php echo $penjualan['total']; ?></center></td>

                                </tr>
                            <?php } ?>

                            </tbody>




                        </table>
                    </center>	


                </div>

            </div>
    </body>
</html>