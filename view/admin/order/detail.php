<?php if (isset($_SESSION['userName'])) { ?>
    <!DOCTYPE html>
    <!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <!--<![endif]-->


    <!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:29 GMT -->

    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Ecomus - Ultimate Admin Dashboard HTML</title>

        <meta name="author" content="themesflat.com">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="./view/assets/be/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="./view/assets/be/css/animation.css">
        <link rel="stylesheet" type="text/css" href="./view/assets/be/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./view/assets/be/css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="./view/assets/be/css/styles.css">



        <!-- Font -->
        <link rel="stylesheet" href="./view/assets/be/font/fonts.css">

        <!-- Icon -->
        <link rel="stylesheet" href="./view/assets/be/icon/style.css">

        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="./view/assets/be/images/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="./view/assets/be/images/favicon.png">

    </head>

    <body>

        <!-- #wrapper -->
        <div id="wrapper">
            <!-- #page -->
            <div id="page" class="">
                <!-- layout-wrap -->
                <div class="layout-wrap">
                    <!-- preload -->
                    <div id="preload" class="preload-container">
                        <div class="preloading">
                            <span></span>
                        </div>
                    </div>
                    <!-- /preload -->

                    <!-- section-menu-left -->
                    <?php include_once('./view/admin/home/aside.php'); ?>
                    <!-- /section-menu-left -->

                    <!-- section-content-right -->
                    <div class="section-content-right">
                        <!-- header-dashboard -->
                        <?php include_once('./view/admin/home/header.php'); ?>
                        <!-- /header-dashboard -->

                        <!-- main-content -->
                        <div class="main-content">

                            <!-- copy layout từ main-content-inner -->
                            <div class="main-content-inner">
                                <!-- main-content-wrap -->
                                <div class="main-content-wrap">
                                    <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                        <h3>Đơn Hàng <?= $ma_don_hang; ?></h3>
                                        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                            <li>
                                                <a href="index.html">
                                                    <div class="text-tiny">Bảng Điều Khiển</div>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon-chevron-right"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="text-tiny">Đơn Hàng</div>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon-chevron-right"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="text-tiny">Chi Tiết Đơn Hàng</div>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon-chevron-right"></i>
                                            </li>
                                            <li>
                                                <div class="text-tiny"><?= $ma_don_hang; ?></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- order-detail -->
                                    <div class="wg-order-detail">
                                        <div class="left flex-grow">
                                            <div class="wg-box mb-20">
                                                <div class="wg-table table-order-detail">
                                                    <ul class="flex flex-column">
                                                        <?php foreach ($load_product_in_order_detail as $product) {
                                                            extract($product);
                                                        ?>
                                                            <li class="wg-product">
                                                                <div class="name">
                                                                    <div class="image">
                                                                        <img src="./view/assets/be/images/products/<?= $hinh_anh; ?>" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <div class="text-tiny">Tên Sản Phẩm</div>
                                                                        <div class="title">
                                                                            <a href="#" class="body-title-2"><?= $ten_san_pham; ?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="text-tiny">Số Lượng</div>
                                                                    <div class="title">
                                                                        <div class="body-title-2"><?= $so_luong; ?></div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="text-tiny">Tổng Tiền</div>
                                                                    <div class="title">
                                                                        <div class="body-title-2 text-danger"><?= number_format($so_luong * $gia_giam, 0, ',', '.'); ?>đ</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="wg-box">
                                                <div class="wg-table table-cart-totals">
                                                    <ul class="table-title flex mb-24">
                                                        <li>
                                                            <div class="body-title">Các Khoản Cần Thanh Toán</div>
                                                        </li>
                                                        <li>
                                                            <div class="body-title">Tổng Cộng</div>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex flex-column gap14">
                                                        <li class="cart-totals-item">
                                                            <span class="body-title">Thành Tiền:</span>
                                                            <span class="body-title tf-color-1"><?= number_format($tong_tien, 0, ',', '.'); ?>đ</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="wg-box gap10 card">
                                                    <div class="body-title">Ngày Nhận Hàng Dự Kiến</div>
                                                    <div class="body-title-2 tf-color-2">
                                                        <?php $date = new DateTime($ngay_tao);
                                                        $date->modify('+2 days');
                                                        echo $date->format('d-m-Y'); ?>
                                                    </div>
                                                    <a class="tf-button w-full" href="?action=admin&admin=trackOrder&id=<?= $load_one_order_user['id']; ?>"><i class="icon-truck"></i>Kiểm Tra Giao Hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="wg-box mb-10 gap10">
                                                <div class="body-title">Tóm Tắt</div>
                                                <div class="summary-item">
                                                    <div class="body-text">Mã Đơn Hàng</div>
                                                    <div class="body-title-2"><?= $ma_don_hang; ?></div>
                                                </div>
                                                <div class="summary-item">
                                                    <div class="body-text">Ngày Đặt</div>
                                                    <div class="body-title-2"><?= $ngay_tao; ?></div>
                                                </div>
                                                <div class="summary-item">
                                                    <div class="body-text">Tổng Tiền</div>
                                                    <div class="body-title-2 tf-color-1"><?= number_format($tong_tien, 0, ',', '.'); ?>đ</div>
                                                </div>
                                            </div>

                                            <div class="wg-box mb-10 gap10">
                                                <div class="body-title">Địa Chỉ Nhận Hàng</div>
                                                <div class="body-text"><?= $dia_chi; ?></div>
                                            </div>
                                            <div class="wg-box mb-20 gap10">
                                                <div class="body-title">Hình Thức Thanh Toán</div>
                                                <div class="body-text">Thanh toán khi nhận hàng (Tiền mặt/Thẻ). Tiền mặt khi nhận hàng (COD) có sẵn. Chấp nhận thẻ/ngân hàng trực tuyến tùy thuộc vào tình trạng sẵn có của thiết bị.</div>
                                            </div>
                                            <div class="wg-box gap10">
                                                <a href="?action=admin&admin=listOrder" class="tf-button w-full style-3" type="submit">Quay Lại</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /order-detail -->
                                </div>
                                <!-- /main-content-wrap -->
                            </div>
                            <!-- /copy layout từ main-content-inner -->

                            <!-- bottom-page -->
                            <?php include_once('./view/admin/home/footer.php'); ?>
                            <!-- /bottom-page -->
                        </div>
                        <!-- /main-content -->
                    </div>
                    <!-- /section-content-right -->
                </div>
                <!-- /layout-wrap -->
            </div>
            <!-- /#page -->
        </div>
        <!-- /#wrapper -->

        <!-- Javascript -->
        <script src="./view/assets/be/js/jquery.min.js"></script>
        <script src="./view/assets/be/js/bootstrap.min.js"></script>
        <script src="./view/assets/be/js/bootstrap-select.min.js"></script>
        <script src="./view/assets/be/js/zoom.js"></script>
        <script src="./view/assets/be/js/morris.min.js"></script>
        <script src="./view/assets/be/js/raphael.min.js"></script>
        <script src="./view/assets/be/js/morris.js"></script>
        <script src="./view/assets/be/js/jvectormap.min.js"></script>
        <script src="./view/assets/be/js/jvectormap-us-lcc.js"></script>
        <script src="./view/assets/be/js/jvectormap-data.js"></script>
        <script src="./view/assets/be/js/jvectormap.js"></script>
        <script src="./view/assets/be/js/apexcharts/apexcharts.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-1.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-2.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-3.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-4.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-5.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-6.js"></script>
        <script src="./view/assets/be/js/apexcharts/line-chart-7.js"></script>
        <script src="./view/assets/be/js/switcher.js"></script>
        <script defer src="./view/assets/be/js/theme-settings.js"></script>
        <script src="./view/assets/be/js/main.js"></script>

    </body>


    <!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:54 GMT -->

    </html>
<?php } else {
    header("Location: ?action=logout");
    exit();
} ?>