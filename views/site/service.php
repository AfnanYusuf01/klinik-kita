<?php

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-service">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Selamat Datang    <br>Layanan Klinik Kita</h1>  
        <img src="https://png.pngtree.com/png-clipart/20220303/original/pngtree-hospital-logo-pictures-png-image_7389852.png" 
             width="40" 
             height="auto" 
             alt="Hospital Logo" class="logo img-fluid mt-4 mb-4" style="max-width: 50%;">
        <p>
            <a class="btn btn-lg btn-success" href="url-to-more-info">Pelajari lebih lanjut</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php if (!Yii::$app->user->isGuest): ?>
                <div class="col-lg-4 text-center">
                    <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 1" class="img-fluid mb-3">
                    <h2>Wilayah</h2>
                    <p>Deskripsi singkat tentang pelayanan Wilayah yang disediakan oleh klinik.</p>
                    <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/wilayah">Selengkapnya &raquo;</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 2" class="img-fluid mb-3">
                    <h2>Tindakan</h2>
                    <p>Deskripsi singkat tentang pelayanan Tindakan yang disediakan oleh klinik.</p>
                    <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/tindakan">Selengkapnya &raquo;</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 3" class="img-fluid mb-3">
                    <h2>Obat</h2>
                    <p>Deskripsi singkat tentang pelayanan Obat yang disediakan oleh klinik.</p>
                    <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/obat">Selengkapnya &raquo;</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 4" class="img-fluid mb-3">
                    <h2>Pegawai</h2>
                    <p>Deskripsi singkat tentang pelayanan Pegawai yang disediakan oleh klinik.</p>
                    <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/pegawai">Selengkapnya &raquo;</a></p>
                </div>
            <?php endif; ?>
            <div class="col-lg-4 text-center">
                <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 5" class="img-fluid mb-3">
                <h2>Daftar Pasien</h2>
                <p>Deskripsi singkat tentang pelayanan Daftar Pasien yang disediakan oleh klinik.</p>
                <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/pendaftaran-pasien">Selengkapnya &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 6" class="img-fluid mb-3">
                <h2>Transaksi Tindakan</h2>
                <p>Deskripsi singkat tentang pelayanan Transaksi Tindakan yang disediakan oleh klinik.</p>
                <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/transaksi-tindakan">Selengkapnya &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="https://icon2.cleanpng.com/20180711/cow/kisspng-computer-icons-emoticon-medical-icon-5b469bf129aaf8.3200295115313540971707.jpg" alt="Icon 7" class="img-fluid mb-3">
                <h2>Pembayaran</h2>
                <p>Deskripsi singkat tentang pelayanan Pembayaran yang disediakan oleh klinik.</p>
                <p><a class="btn btn-outline-primary" href="http://localhost/aplikasi-kinik/web/pembayaran">Selengkapnya &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
