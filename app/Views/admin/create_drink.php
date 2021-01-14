<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Minuman</h2>
            <a>
            </a>
            <form action="/admin/save_minuman" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama_minuman" class="col-sm-2 col-form-label">Nama Minuman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga_minuman" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga_minuman" name="harga_minuman">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stock_minuman" class="col-sm-2 col-form-label">Jumlah (stock)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stock_minuman" name="stock_minuman">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar_minuman" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-2">
                        <img src="/assets/images/default.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar_minuman" name="gambar_minuman" onchange="previewImg_minuman()">
                            <label class="custom-file-label" for="gambar_minuman">Pilih foto..</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/pages/minuman" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>