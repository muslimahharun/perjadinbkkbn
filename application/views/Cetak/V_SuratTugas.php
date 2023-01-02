<?php

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <table class="garuda" style="width: 100%;">
        <tr>
            <td style="width: 100%;"></td>
            <td style="width: 1%;">

                <img style="width: 150px;height: 75px;" src="<?= base_url('assets/images/bkkbn.png') ?>" alt="">
            </td>
            <td style="width: 1%;"></td>
        </tr>
    </table>
    <div class="tengah" style="text-align: center;margin-bottom: 20px; font-family:Times New Roman;">
        <h3 style="font: size 12px">
            <b>SURAT TUGAS</b>
        </h3>
        <h4 style="font: size 12px">
            Nomor : <?= $datas[0]['no_surat'] ?>
        </h4>
    </div>
    <div class="konten">
        <table id="atas" style="width: 100%; line-height: 0.3em; text-align: justify; font-family:Times New Roman;">
            <tr>
                <td style="width: 15%; line-height: 1.1em">Menimbang</td>
                <td style="width: 5%; line-height: 1.1em">:</td>
                <td style="line-height: 1.5em; ">
                    <?php 
                    
                    echo implode("<br>", explode(PHP_EOL, $datas[0]['menimbang']))
                    
                    ?>
                </td>
            </tr>

            <tr>
                <td style="width: 15%; line-height: 1.1em">Dasar</td>
                <td style="width: 5%; line-height: 1.1em">:</td>
                <td style="line-height: 1.5em; ">
                    <?php 
                    
                    echo implode("<br>", explode(PHP_EOL, $datas[0]['dasar']))
                    
                    ?>
                </td>
            </tr>

            <tr>
                <td style="width: 15%; line-height: 1.1em">Kepada</td>
                <td style="width: 5%; line-height: 1.1em">:</td>
                <td style="line-height: 1.5em; ">
                    <?php foreach($datas as $key => $data): ?>
                    <p>
                        <?= $key + 1 . '. ' ?>
                        <?= $data['nama'] ?>
                    </p>
                    <?php endforeach; ?>
                </td>
            </tr>
             
            <tr>
                <td style="width: 15%; line-height: 1.2em">Untuk</td>
                <td style="width: 5%; line-height: 1.2em">:</td>
                <td style="line-height: 1.5em; ">
                    <?= $datas[0]['judul_kegiatan'] ?>
                </td>
            </tr>

            <tr>
                <td style="width: 15%; line-height: 0.1em">Kendaraan</td>
                <td style="width: 5%; line-height: 0.1em">:</td>
                <td style="">
                    <?= $datas[0]['kendaraan'] ?>
                </td>
            </tr>

            <tr>
                <td style="width: 15%; line-height: 0.3em">Tempat</td>
                <td style="width: 5%; line-height: 0.3em">:</td>
                <td style="">
                    <?= $datas[0]['berangkat'] . ' --> ' . $datas[0]['tujuan'] ?>
                </td>
            </tr>

            <tr>
                <td style="width: 15%; line-height: 0.1em">Selama/hari</td>
                <td style="width: 5%; line-height: 0.1em">:</td>
                <td style="">
                    <?= $datas[0]['lama'] . ' Hari / ' . tgl_indo($datas[0]['tanggal_berangkat']) . ' --> '. tgl_indo(date("Y-m-d", strtotime("+".$datas[0]['lama']." days", strtotime($datas[0]['tanggal_berangkat'])))) ?>
                </td>
            </tr>

            <tr>
                <td style="width: 15%; line-height: 0.2em">Biaya</td>
                <td style="width: 5%; line-height: 0.2em">:</td>
                <td style="">
                    <?= $datas[0]['sumber_dana'] ?>
                </td>
            </tr>
        </table>

        <table style="width: 80%; font-family:Times New Roman; font: size 12px;">
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="font-family:Times New Roman; font: size 12px;">Pekanbaru, <?= tgl_indo(date('Y-m-d')) ?></td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="font-family:Times New Roman; font: size 12px;">Yang Memberi Tugas,</td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="font-family:Times New Roman; font: size 12px;">Kepala</td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 50%;height: 100px;">
                </td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="font-family:Times New Roman; font: size 12px;">Dra. Mardalena Wati Yulia, M.Si
                </td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="font-family:Times New Roman; font: size 12px;">NIP. 19670329 199303 2 001
                </td>
            </tr>
        </table>
    </div>
</body>

</html>