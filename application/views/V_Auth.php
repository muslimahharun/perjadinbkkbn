
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
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/documentation/css/notika-custom-icon.css">
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
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <div class="breadcomb-ctn">
										<h2>Perjalanan Dinas</h2><br>
									</div>
                <?php
                if(!empty($this->session->flashdata('error'))):
                ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('error') ?>
                </div>
                <?php endif; ?>
                <form action="<?= base_url('auth') ?>" method="post">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <select name="nama" name="username" id="" class="form-control">
                          <?php foreach($users as $dt) : ?>
                            <option
                               value="<?= $dt['nama']?>">
                                <?= $dt['nama'] ?>
                                  </option>
                            <?php endforeach; ?>
                          </select>
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="fm-checkbox">
                    <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
                </div><br>
                <div class="btn-list">
                <button type="submit" class="btn btn-success notika-btn-teal">Masuk</button>
                </div><br>
                <div class="btn-list">
                <a href="http://tiny.cc/SosialisasiSOP" class="btn btn-warning notika-btn-warning">Klik Untuk Melihat Sosialisasi SOP</a>
                </div>                
            </form>
        </div>
    </div>

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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ?>asset/documentation/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url() ?>asset/documentation/js/main.js"></script>
</body>

</html>