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
                        <h2 class="pageheader-title">Dokumentasi </h2>
                        <!-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> -->
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('pages/index') ?>" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dokumentasi</li>
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
        <style>
            * {
                box-sizing: border-box;
            }

            .row {
                display: -ms-flexbox;
                /* IE 10 */
                display: flex;
                -ms-flex-wrap: wrap;
                /* IE 10 */
                flex-wrap: wrap;
                padding: 0 4px;
            }

            /* Create two equal columns that sits next to each other */
            .column {
                -ms-flex: 50%;
                /* IE 10 */
                flex: 50%;
                padding: 0 4px;
            }

            .column img {
                margin-top: 8px;
                margin-left: 15px;
                vertical-align: middle;
            }

            .footer {
                margin-left: 15px;
            }
        </style>
        <div class="row">
            <div class="column">
                <img src="<?= base_url('/assets/images/makanan/makanan1.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/makanan/makanan2.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/makanan/makanan3.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/makanan/makanan4.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/makanan/makanan5.png'); ?>" style="width:100%">
            </div>
            <div class="column">
                <img src="<?= base_url('/assets/images/minuman/minuman1.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/minuman/minuman2.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/minuman/minuman3.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/minuman/minuman4.png'); ?>" style="width:100%">
                <img src="<?= base_url('/assets/images/minuman/minuman5.png'); ?>" style="width:100%">
            </div>

            <!-- <script>
                // Get the elements with class="column"
                var elements = document.getElementsByClassName("column");

                // Declare a loop variable
                var i;

                // Full-width images
                function one() {
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.msFlex = "100%"; // IE10
                        elements[i].style.flex = "100%";
                    }
                }

                // Two images side by side
                function two() {
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.msFlex = "50%"; // IE10
                        elements[i].style.flex = "50%";
                    }
                }

                // Four images side by side
                function four() {
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.msFlex = "25%"; // IE10
                        elements[i].style.flex = "25%";
                    }
                }

                // Add active class to the current button (highlight it)
                var header = document.getElementById("myHeader");
                var btns = header.getElementsByClassName("btn");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script> -->
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