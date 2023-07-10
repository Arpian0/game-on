<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Gambar
                    <a href="<?= base_url('image') ?>" class="btn btn-success btn-sm float-right">
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= base_url('uploads/' . $image['path']) ?>" class="img-fluid" alt="Image">
                        </div>
                        <div class="col-md-6">
                            <h4>Tranfer Dengan Nama Tersebut</h4>
                            <p>: <?= $image['name'] ?></p>
                            <h4>Transfer Dengan Nomor Rekening Tersebut</h4>
                            <p>: <?= $image['nim'] ?></p>
                        </div>
                        <div style="padding-left: 480px;padding-top: 50px;">
                            <a class="btn btn-warning" href="<?php echo base_url('topup'); ?>" onclick="return confirm('Apakah kamu sudah melakukan pembayaran? kalau sudah pencet OK')">Apa Kamu Mau Topup Lagi?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>