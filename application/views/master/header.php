<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from droitthemes.com/html/makro/demo/home_digital_agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 05:38:31 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nama Project - <?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favourite_icon_5.png">

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">

    <!-- icons - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/fontawesome-all.css">

    <!-- slider & carousel - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/splitting.css">

    <!-- magnific popup - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/magnific-popup.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/sweetalert2.css">

</head>


<body class="home_chat home_digital_agency">


    <div class="body_wrap">


        <!-- backtotop - start -->
        <div id="thetop"></div>
        <div id="backtotop">
            <a href="<?= base_url() ?>#" id="scroll">
                <i class="fal fa-arrow-up"></i>
                <i class="fal fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->
        <!-- header_section - start
			================================================== -->
        <?php if ($header == 1) : ?>
        <header id="header_section" class="header_section sticky_header d-flex align-items-center clearfix">
            <?php else : ?>
            <header id="header_section"
                class="header_section text-white sticky_header d-flex align-items-center clearfix">
                <?php endif; ?>
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-2">
                            <div class="brand_logo">
                                <?php if ($header == 1) : ?>
                                <a href="<?= base_url() ?>" class="brand_link">
                                    <img src="<?= base_url() ?>assets/images/logo/logo_6.png" alt="logo_not_found">
                                    <img src="<?= base_url() ?>assets/images/logo/logo_6.png" alt="logo_not_found">
                                </a>
                                <?php else : ?>
                                <a href="<?= base_url() ?>" class="brand_link">
                                    <img src="<?= base_url() ?>assets/images/logo/logo_1.png" alt="logo_not_found">
                                    <img src="<?= base_url() ?>assets/images/logo/logo_2.png" alt="logo_not_found">
                                </a>
                                <?php endif; ?>
                                <button type="button" class="menu_btn">
                                    <i class="fal fa-bars"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-10">
                            <nav class="main_menu ul_li_right clearfix">
                                <ul class="clearfix">
                                    <?php if ($header == 1) : ?>
                                    <li class="active menu_item_has_child">
                                        <?php else : ?>
                                    <li class="menu_item_has_child">
                                        <?php endif; ?>
                                        <a href="<?= base_url() ?>">Beranda</a>

                                    </li>

                                    <?php if ($header == 2) : ?>
                                    <li class="active menu_item_has_child">
                                        <?php else : ?>
                                    <li class=" menu_item_has_child">
                                        <?php endif; ?>
                                        <a href="#">Layanan</a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url() ?>home/daftar_buku">Daftar Buku Pelajaran</a>
                                            </li>

                                            <li><a href="<?= base_url() ?>home/layanan_konseling">Layanan Konseling</a>
                                            </li>
                                            <li><a href="<?= base_url() ?>home/layanan_belajar">Layanan Belajar</a></li>
                                            <li><a href="<?= base_url() ?>home/layanan_terakhir">Gak Tau Namanya</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php if ($header == 3) : ?>
                                    <li class="active menu_item_has_child">
                                        <?php else : ?>
                                    <li class=" menu_item_has_child">
                                        <?php endif; ?>
                                        <a href="<?= base_url() ?>home/kontak">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- mobile sidebar menu - start -->
            <div class="sidebar-menu-wrapper">
                <div id="mobile_menu" class="mobile_menu">

                    <div class="brand_logo mb-50 clearfix">
                        <a href="<?= base_url() ?>index.html" class="brand_link">
                            <img src="<?= base_url() ?>assets/images/logo/logo_2.png" alt="logo_not_found">
                        </a>
                        <span class="close_btn"><i class="fal fa-times"></i></span>
                    </div>

                    <div class="mobile_menu_dropdown menu_list ul_li_block mp_balancing mb-50 clearfix">
                        <ul class="clearfix">
                            <li>
                                <a href="<?= base_url() ?>">Beranda</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Layanan</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url() ?>home/daftar_buku">Daftar Buku Pelajaran</a></li>
                                    <li><a href="<?= base_url() ?>home/layanan_konseling">Layanan Konseling</a></li>
                                    <li><a href="<?= base_url() ?>home/layanan_belajar">Layanan Belajar</a></li>
                                    <li><a href="<?= base_url() ?>home/layanan_terakhir">Gak Tau Namanya</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>home/kontak">Hubungi Kami</a></li>
                        </ul>
                    </div>

                </div>
                <div class="overlay"></div>
            </div>
            <!-- mobile sidebar menu - end -->

            <!-- header_section - end
			================================================== -->
            <div id="berhasil" data-berhasil="<?= $this->session->flashdata('berhasil') ?>"></div>
            <div id="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>