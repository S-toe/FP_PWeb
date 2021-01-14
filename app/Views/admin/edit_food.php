<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Makanan</h2>
            <a>
            </a>
            <form action="/admin/update_makanan/<?= $makanan['makanan_id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="makanan_id" value="<?= $makanan['makanan_id']; ?>">
                <input type="hidden" name="image_lama" value="<?= $makanan['makanan_image']; ?>">
                <div class="row mb-3">
                    <label for="nama_makanan" class="col-sm-2 col-form-label">Nama Makanan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" autofocus value="<?= $makanan['makanan_nama']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga_makanan" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga_makanan" name="harga_makanan" value="<?= $makanan['makanan_price']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stock_makanan" class="col-sm-2 col-form-label">Jumlah (stock)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stock_makanan" name="stock_makanan" value="<?= $makanan['makanan_stock']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar_makanan" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-2">
                        <img src="/assets/images/makanan/<?= $makanan['makanan_image']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar_makanan" name="gambar_makanan" onchange="previewImg_makanan()">
                            <label class="custom-file-label" for="gambar_makanan"><?= $makanan['makanan_image']; ?></label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <a href="/pages/makanan" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>