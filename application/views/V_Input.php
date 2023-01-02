
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
    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/Wizard/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/Wizard/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/Wizard/src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/Wizard/vendors/styles/style.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/Wizard/Drapzone.css">
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
     <!-- Wizard area Start-->
    <div class="wizard-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wizard-wrap-int">
                        <div class="wizard-hd">
                            <center><h2>Input Perjalanan Dinas</h2></center>
                        </div>
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container-pro wizard-cts-st">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">Perjalanan Dinas</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Pelaksana</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Dasar dan Persetujuan</a></li>
                                            <li><a href="#tab4" data-toggle="tab">Laporan</a></li>
                                            <li><a href="#tab5" data-toggle="tab">Foto Kegiatan</a></li>
                                            <li><a href="#tab6" data-toggle="tab">Selesai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form action="<?= base_url('C_Input/inputPerjalananDinas') ?>" method="post"
                        enctype="multipart/form-data" name="myForm">
                            <div class="tab-content">
                                <div class="tab-pane wizard-ctn" id="tab1">
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Administrator</label>
											<input type="text" readonly class="form-control"
                                                value="<?= $this->session->nama; ?>" name="admin">
										</div>
                                        <div class="form-group">
											<label>Nomor Surat</label>
                                                <div class="col-sm-15">
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <?= $surat[0]['awal'] ?>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" name="no_surat"
                                                            placeholder="Nomor Surat" required/>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <?= $surat[0]['akhir'] ?></div>
                                                                </div>
                                                            </div>
										            </div>
                                        <div class="form-group">
											<label for="staticEmail" class=" col-form-label">Tanggal Surat</label>
                                            <input type="date" name="tanggal_surat" class="form-control" placeholder="Tanggal Surat" required/>
										</div>
                                        <div class="form-group">
											<label>Kendaraan</label>
											    <select class="form-control" name="kendaraan">
                                                    <option value="" selected>--Pilih--</option>
                                                    <?php foreach($kendaraan as $kd): ?>
                                                    <option value="<?= $kd['nama'] ?>"><?= $kd['nama'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
										    </div>
										</div>
                                        <div class="form-group">
                                                    <label for="staticEmail" class=" col-form-label">Sumber Dana</label>
                                                    <input type="text" readonly class="form-control" 
                                                    name="sumber_dana" value="DIPA Perwakilan BKKBN Provinsi Riau">
                                        </div>
                                        <div class="form-group">
											<label for="staticEmail" class=" col-form-label">DIPA</label>
                                            <select class="form-control" name="dipa" id="dipa">
                                            <option value="" selected>--Pilih--</option>
                                            <?php foreach($dipa as $kd): ?>
                                            <option value="<?= $kd['mak'] ?>"><?= $kd['mak'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Judul Kegiatan</label>
											<textarea class="form-control" name="judul_kegiatan" id="judul_kegiatan"></textarea>
										</div>
                                        <div class="form-group">
                                        <label>Berangkat Dari</label>
                                        <select class="form-control" name="berangkat" id="berangkat">
                                            <option value="" selected>--Pilih--</option>
                                            <?php foreach($keberangkatan as $kd): ?>
                                            <option value="<?= $kd['nama'] ?>"><?= $kd['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
											<label for="staticEmail" class=" col-form-label">Tujuan</label>
                                                <select class="form-control" name="tujuan" required>
                                                    <option value="" selected>--Pilih--</option>
                                                    <?php foreach($tujuan as $kd): ?>
                                                    <option value="<?= $kd['nama'] ?>"><?= $kd['nama'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
										</div>
                                        <div class="form-group">
											<label for="staticEmail" class=" col-form-label">Tanggal Berangkat</label>
                                            <input type="date" name="tanggal_berangkat" class="form-control" required>
										</div>
                                        <div class="form-group">
											<label for="staticEmail" class=" col-form-label">Lama (hari)</label>
                                            <input type="number" name="lama" class="form-control" required>
										</div>
                                    </div>
								</div>
							    </section>
                                </div>
                                <div class="tab-pane wizard-ctn" id="tab2">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="bsc-tbl-st">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 5%">No</th>
                                                                <th style="width: 30%">Nama</th>
                                                                <th style="width: 10%">Uang Harian</th>
                                                                <th style="width: 10%">Uang Transport</th>
                                                                <th style="width: 10%">Transport Lokal</th>
                                                                <th style="width: 10%">Uang Hotel</th>
                                                                <th style="width: 10%">Uang representatif</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbodyPelaksana">
                                                            <tr id="firstRow">
                                                                <td>1</td>
                                                                <td>
                                                                    <select class="form-control" name="nama_pelaksana[]" required>
                                                                        <option value="" selected>--Pilih--</option>
                                                                        <?php foreach($pegawai as $kd): ?>
                                                                        <option
                                                                            value="<?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan']?>">
                                                                            <?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan'] ?>
                                                                        </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="number" name="uang_harian[]" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="number" name="uang_transport[]" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="number" name="transport_lokal[]" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="number" name="uang_hotel[]" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="number" name="uang_representatif[]"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-demo-notika">
                                        <button class="btn btn-success notika-btn-success btn-xs" id="btnTambahPelaksana">Tambah Pelaksana</button>
                                        </div>
                                </div>
                                <div class="tab-pane wizard-ctn" id="tab3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Persetujuan Surat Tugas</label>
                                                <select class="form-control" name="pejabat_persetujuan" required>
                                                    <option value="" selected>--Pilih--</option>
                                                    <?php foreach($pegawai as $kd): ?>
                                                    <option
                                                    value="<?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan']?>">
                                                    <?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan'] ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pejabat Pembuat Komitmen</label>
                                                    <select class="form-control" name="pejabat_komitmen" required>
                                                    <option value="" selected>--Pilih--</option>
                                                    <?php foreach($pegawai as $kd): ?>
                                                    <option
                                                    value="<?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan']?>">
                                                    <?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan'] ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bendahara Pengeluaran</label>
                                                <select class="form-control" name="bendahara" required>
                                                    <option value="" selected>--Pilih--</option>
                                                    <?php foreach($pegawai as $kd): ?>
                                                    <option
                                                        value="<?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan']?>">
                                                        <?= $kd['nama'] . ' / '.$kd['username'] . ' / '.$kd['jabatan'] ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Menimbang</label>
                                                <textarea name="menimbang" class="form-control" id="" rows="5" required></textarea>
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Dasar</label>
                                                    <textarea name="dasar" class="form-control" id="" rows="5" required></textarea>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                <div class="tab-pane wizard-ctn" id="tab4">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <label class="control-label">Upload Laporan
                                            <small> *Tidak Wajib Diisi</small>
                                        </label>
                                        <div class="preview-zone hidden">
                                            <div class="box box-solid">
                                            <div class="box-body"></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                            <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="dokumen" multiple class="dropzone" rows="5" id="">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="tab-pane wizard-ctn" id="tab5">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <label class="control-label">Upload Foto
                                            <small> *Tidak Wajib Diisi</small>
                                        </label>
                                        <div class="preview-zone hidden">
                                            <div class="box box-solid">
                                            <div class="box-body"></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                            <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="foto[]" multiple class="dropzone" rows="5" size="20">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                <div class="tab-pane wizard-ctn" id="tab6">
                                            <div class="dialog-inner mg-t-30">
                                                <div class="contact-hd dialog-hd">
                                                    <center><h2>SELESAI</h2></center>
                                                    <center><p>Pastikan Data Yang Diinput Benar, Silakan Cek Kembali Data.</p></center>
                                                    <p style="font-size:16px;">
                                                        <center><small><i>*Jika Tombol Tidak Bisa Di-Klik, Maka Terdapat Data Kosong!</i></small></center>
                                                    </p>
                                                </div>
                                                <div class="dialog-pro dialog">
                                                    <center><button class="btn btn-info" id="sa-params" onsubmit="validasi()">Submit</button></center>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="wizard-action-pro">
                                    <ul class="wizard-nav-ac">
                                        <li><a class="button-previous a-prevent" href="#"><i class="notika-icon notika-back"></i></a></li>
                                        <li><a class="button-next a-prevent" href="#"><i class="notika-icon notika-next-pro"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Wizard area End-->
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
    <!--  wizard JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/wizard/wizard-active.js"></script>
    <!-- js -->
	<script src="<?php echo base_url() ?>asset/Wizard/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url() ?>asset/Wizard/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url() ?>asset/Wizard/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url() ?>asset/Wizard/vendors/scripts/layout-settings.js"></script>
	<script src="<?php echo base_url() ?>asset/Wizard/src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="<?php echo base_url() ?>asset/Wizard/vendors/scripts/steps-setting.js"></script>
     <!-- dropzone JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/Wizard/Drapzone.js"></script>
    <script>
    $(document).ready(function() {
        $("#btnTambahPelaksana").on('click', function(e) {
            e.preventDefault()

            $.ajax({
                type: "GET",
                url: "<?= base_url('C_Pegawai/get') ?>",
                dataType: 'json',
                success: function(res) {
                    console.log(res)
                    let pegawai = res.pegawai
                    let length = $("#tbodyPelaksana tr").length + 1
                    let newRow = "<tr>"
                    let options = ""
                    options += "<option value='' selected>--Pilih--</option>"
                    for (let i = 0; i < pegawai.length; i++) {
                        options += "<option value='" + pegawai[i].nama + ' / ' + pegawai[i]
                            .username + ' / ' + pegawai[i].jabatan + "'>" + pegawai[i]
                            .nama + ' / ' + pegawai[i]
                            .username + ' / ' + pegawai[i].jabatan + "</option>"
                    }

                    newRow += "<td>" + length + "</td>"
                    newRow += "<td> <select class='form-control' name='nama_pelaksana[]'>"
                    newRow += options
                    newRow += "</select> </td>"
                    newRow +=
                        "<td> <input type='number' name='uang_harian[]' class='form-control'> </td>"
                    newRow +=
                        "<td> <input type='number' name='uang_transport[]' class='form-control'> </td>"
                    newRow +=
                        "<td> <input type='number' name='transport_lokal[]' class='form-control'> </td>"
                    newRow +=
                        "<td> <input type='number' name='uang_hotel[]' class='form-control'> </td>"
                    newRow +=
                        "<td> <input type='number' name='uang_representatif[]' class='form-control'> </td>"
                    newRow += "</tr>"
                    console.log(newRow)
                    $("#tbodyPelaksana").append(newRow)
                }
            })

        })
    })
    </script>
    <script>
            function validasi(){
                var judul_kegiatan = document.getElementById('judul_kegiatan');
                var dipa = document.getElementById('dipa');
                var berangkat = document.getElementById('berangkat');
                var no_surat= document.getElementById('no_surat');

                if (harusDiisi(judul_kegiatan, "nim belum diisi")) {
                    if (harusDiisi(dipa, "nama belum diisi")) {
                        if (harusDiisi(berangkat, "kelas belum diisi")) {
                            if (harusDiisi(no_surat, "kelas belum diisi")) {
                            return true;
                        };
                    };
                };
            };
                return false;
            }

            function harusDiisi(att, msg){
                if (att.value.length == 0) {
                    alert(msg);
                    att.focus();
                    return false;
                }

                return true;
            }
        </script>
</body>

</html>