<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Makanan </h2>
                        <!-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> -->
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="breadcrumb-link">Stock</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Makanan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
        </div>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <?php if (in_groups('admin')) : ?>
            <a href="/admin/create_food" style="margin-right:15px; margin-bottom:15px; " class="btn btn-primary float-right">Tambah Makanan</a>
        <?php endif ?>
        <div class="table-responsive-sm">
            <table class="table table-striped" style="
  margin-left: auto;
  margin-right: auto;
  margin-top: auto;
  margin-bottom: auto;
  width:98%">
                <thead class="thead-midnightblue" style="color: midnightblue;">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" colspan="2" style="text-align: center;">Makanan</th>
                        <th scope="col">Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($makanan as $food) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="<?= base_url('/assets/images/makanan/' . $food->makanan_image); ?>" height=100 width=auto></img></td>
                            <td><?= $food->makanan_nama; ?></td>
                            <td><?= $food->makanan_stock; ?></td>
                            <?php if (in_groups('admin')) : ?>
                                <td scope="col" colspan="2">
                                    <a href="/admin/edit_food/<?= $food->makanan_id; ?>" class="btn btn-warning text-dark">Edit</a>
                                    <form action="/admin/food/<?= $food->makanan_id; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">Delete</button>
                                    </form>
                                </td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2020 Anonym. All rights reserved. Dashboard by Anonym</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>

<?= $this->endSection('content'); ?>