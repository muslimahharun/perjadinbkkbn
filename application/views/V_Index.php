
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
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/notika-custom-icon.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/normalize.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/wave/waves.min.css">
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
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
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
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-house"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Hello, <?php
                                            echo ucwords($this->session->nama);
                                        ?></h2>
										<p>Welcome to Perjalanan Dinas BKKBN Provinsi Riau <span class="bread-ntd"></a></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
  <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?=  $input ?></span></h2>
                            <p>Total Surat</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <?php if($this->session->role == "admin"): ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?=  $pegawai ?></span></h2>
                            <p>Total User</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
  <!-- End Status area-->
  <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Data Perjalanan Dinas</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <?php if($this->session->role == "admin"): ?>
                                        <th>Nama</th>
                                        <?php endif; ?>
                                        <th>Nomor Surat</th>
                                        <th>Judul Kegiatan</th>
                                        <th>Tgl Surat</th>
                                        <th>Tgl Perjalanan</th>
                                        <th>Tujuan</th>
                                        <th>Dokumen</th>
                                        <?php if($this->session->role == "admin"): ?>
                                        <th style="width: 12%;">Aksi</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($datas as $key => $data): ?>
                                    <tr>
                                        <?php if($this->session->role == "admin"): ?>
                                        <td><?= $data['nama'] ?></td>
                                        <?php endif; ?>
                                        <td style="sort"><?= $data['no_surat'] ?></td>
                                        <td><?= $data['judul_kegiatan'] ?></td>
                                        <td><?= $data['tanggal_surat'] ?></td>
                                        <td><?= $data['tanggal_berangkat'] ?></td>
                                        <td><?= $data['tujuan'] ?></td>
                                        <td><a href ="<?php echo base_url(); ?>fileupload/<?php echo $data['dokumen']; ?>">download</a></td>
                                    <?php if($this->session->role == "admin"): ?>
                                        <td><div class="modals-default-cl">
                                                <div class="btn-toolbar" role="toolbar">
                                                    <div class="btn-group notika-tl-btn">
                                                        <button type="button" class="btn btn-primary notika-gp-primary btn-xs" data-toggle="modal"
                                                data-target="#myModalone<?= $data['id_perjalanan'] ?>">Detail</button>
                                                    </div>
                                                </div>
                                                    <div class="modal fade" id="myModalone<?= $data['id_perjalanan'] ?>" role="dialog">
                                                    <div class="modal-dialog modals-default">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <center><h2>Detail Perjalanan Dinas</h2></center>
                                                                <div class="row">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td>Nama</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                 <?= $data['nama'] ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Nomor Surat</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['no_surat'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Judul Kegiatan</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['judul_kegiatan'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tanggal Surat </td>
                                                                            <td>:</td>
                                                                            <td><?= $data['tanggal_surat'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tanggal Berangkat</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['tanggal_berangkat'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Keberangkatan</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['berangkat'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tujuan</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['tujuan'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Lama</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['lama'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kendaraan</td>
                                                                            <td>:</td>
                                                                            <td><?= $data['kendaraan'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>File</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <a href="<?= base_url('C_Cetak/suratTugas/').$data['id_perjalanan'] ?>" class="btn btn-primary notika-btn-primary btn-xs">Surat Tugas</a>
                                                                                <a href="<?= base_url('C_Cetak/spd1/').$data['id_perjalanan'] ?>" class="btn btn-primary notika-btn-primary btn-xs">SPD1</a>
                                                                                <a href="<?= base_url('C_Cetak/spd2/').$data['id_perjalanan'] ?>" class="btn btn-primary notika-btn-primary btn-xs">SPD2</a>
                                                                                <a href="<?= base_url('C_Cetak/kwitansi/').$data['id_perjalanan'] ?>" class="btn btn-primary notika-btn-primary btn-xs">Kwitansi</a>
                                                                                <a href="<?= base_url('C_Cetak/pernyataan/').$data['id_perjalanan'] ?>" class="btn btn-primary notika-btn-primary btn-xs">SPT</a>
                                                                                <a href="<?= base_url('C_Cetak/laporan/').$data['id_perjalanan'] ?>" class="btn btn-primary notika-btn-primary btn-xs">Laporan</a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                     <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php endif; ?>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript"> 
    $(document).ready(function () {
        $('#table-datatables').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'print'],
            "pageLength": 7
        });
    });
    </script>
</body>

</html>