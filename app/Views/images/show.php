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
                            <label> UID Honkai Star Rail </label>
                            <input type="text" name="idserver" id="idserver" class="form-control" placeholder="Masukkan ID Zona tanpa tanda ()" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>