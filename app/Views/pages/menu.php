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
                        <h2 class="pageheader-title">Menu </h2>
                        <!-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> -->
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <!-- <li class="breadcrumb-item"><a href="<?php echo base_url('pages/index') ?>" class="breadcrumb-link">Dashboard</a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
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
                        <th scope="col" colspan="2" style="text-align: center;">Menu</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($makanan as $food) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="<?= base_url('/assets/images/makanan/' . $food->makanan_image); ?>" height=100 width=auto></img></td>
                            <td><?= $food->makanan_nama; ?></td>
                            <td><?= $food->makanan_price; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php foreach ($minuman as $drink) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="<?= base_url('/assets/images/minuman/' . $drink->minuman_image); ?>" height=100 width=auto></img></td>
                            <td><?= $drink->minuman_nama; ?></td>
                            <td><?= $drink->minuman_price; ?></td>
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