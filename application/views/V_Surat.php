
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Perjalanan Dinas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>asset/documentation/img/logo/bkkbn.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation//wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?php echo base_url() ?>asset/documentation/img/logo/logoo.png" alt="" width="200"/></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href="<?= base_url('logout') ?>" class="nav-link">Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('dashboard') ?>">Home</a>
                                </li>
                                <?php if($this->session->role == 'admin'): ?>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Master Data</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('C_Dipa') ?>">DIPA</a></li>
                                        <li><a href="<?= base_url('C_Pegawai') ?>">User</a></li>
                                        <li><a href="<?= base_url('C_Keberangkatan') ?>">Keberangkatan</a></li>
                                        <li><a href="<?= base_url('C_Tujuan') ?>">Tujuan</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="<?= base_url('C_Kendaraan') ?>">Jenis Kendaraan</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="<?= base_url('C_Surat') ?>">Nomor Surat</a>
                                </li>
                                <?php else: ?>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="<?= base_url('C_Input') ?>">Perjalanan Dinas</a>
                                </li>
                                <?php endif; ?>
                                <li><a data-toggle="collapse" data-target="#demo" href="<?= base_url('C_Foto') ?>">Foto</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
   <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="<?= base_url('dashboard') ?>"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <?php if($this->session->role == 'admin'): ?>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Master Data</a>
                        </li>
                        <li><a href="<?= base_url('C_Kendaraan') ?>"><i class="notika-icon notika-edit"></i> Jenis Kendaraan</a>
                        </li>
                        <li><a href="<?= base_url('C_Surat') ?>"><i class="notika-icon notika-bar-chart"></i> Nomor Surat</a>
                        </li>
                        <li><a href="<?= base_url('C_Foto') ?>"><i class="notika-icon notika-form"></i> Dokumen</a>
                        </li>
                        <?php endif; ?>
                        <li><a href="<?= base_url('C_Input') ?>"><i class="notika-icon notika-windows"></i> Perjalanan Dinas</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('C_Dipa') ?>">DIPA</a>
                                </li>
                                <li><a href="<?= base_url('C_Pegawai') ?>">User</a>
                                </li>
                                <li><a href="<?= base_url('C_Keberangkatan') ?>">Keberangkatan</a>
                                </li>
                                <li><a href="<?= base_url('C_Tujuan') ?>">Tujuan</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('C_Foto') ?>">Foto</a>
                                </li>
                                <li><a href="form-components.html">File</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Form Nomor Surat</h2>
                        </div>
                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')"  action="<?= base_url('C_Surat/update/1') ?>" method="post"  enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-example-int form-example-st">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="awal" value="<?= $datas[0]['awal'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-example-int form-example-st">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="akhir" value="<?= $datas[0]['akhir'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                <div class="form-example-int">
                                    <button class="btn btn-success notika-btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2022 . Muslimah Harun (Politeknik Caltex Riau)</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/counterup/counterup-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/sparkline/sparkline-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/knob/knob-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/flot/flot-widget-anatic-active.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/flot/chart-tooltips.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/flot/flot-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/plugins.js"></script>
    <!-- Google map JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/google.maps/google.maps-active.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVOIQ3qXUCmKVVV7DVexPzlgBcj5mQJmQ&callback=initMap"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/main.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/data-table/data-table-act.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/dialog/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/dialog/dialog-active.js"></script>
    <!--  notification JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/notification/bootstrap-growl.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/notification/notification-active.js"></script>
</body>

</html>