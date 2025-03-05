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
                                        <h3>Danh Sách Đơn Hàng</h3>
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
                                                <div class="text-tiny">Danh Sách Đơn Hàng</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- order-list -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between gap10 flex-wrap">
                                            <div class="wg-filter flex-grow">
                                                <form class="form-search">
                                                    <fieldset class="name">
                                                        <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                    </fieldset>
                                                    <div class="button-submit">
                                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <a class="tf-button style-1 w208" href="oder-detail.html"><i class="icon-file-text"></i>Export all order</a>
                                        </div>
                                        <div class="wg-table table-all-category">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Đơn Hàng</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -145px;" class="body-title">Mã Khách Hàng</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -80px;" class="body-title">Quốc Gia</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -53px;" class="body-title">Số Điện Thoại</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Email</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -10px;" class="body-title">Tổng Tiền</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -10px;" class="body-title">Thanh Toán</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: 10px;" class="body-title">Trạng Thái</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Thao Tác</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column">
                                                <?php foreach ($load_all_order as $order) {
                                                    extract($order);
                                                ?>
                                                    <li class="wg-product item-row gap20">
                                                        <div class="body-text text-main-dark mt-4"><?= $ma_don_hang; ?> - <?= $ngay_tao; ?></div>
                                                        <div class="body-text text-main-dark mt-4" style="margin-left: -105px;"><?= $id_khach_hang; ?></div>
                                                        <div class="body-text text-main-dark mt-4" style="margin-left: 13px;"><?= $quoc_gia; ?></div>
                                                        <div class="body-text text-main-dark mt-4" style="margin-left: 10px;"><?= $so_dien_thoai; ?></div>
                                                        <div class="body-text text-main-dark mt-4" style="margin-left: -37px;"><?= $email; ?></div>
                                                        <div class="body-text text-main-dark mt-4"><?= number_format($tong_tien, 0, ',', '.'); ?>đ</div>
                                                        <div style="margin-left: -50px;">
                                                            <?php
                                                            if ($loai_thanh_toan == 0) { ?>
                                                                <div class="block-available w-100 bg-1 fw-7">Tiền Mặt</div>
                                                            <?php } else { ?>
                                                                <div class="block-available w-100 bg-1 fw-7 text-danger">Chuyển Khoản</div>
                                                            <?php } ?>
                                                        </div>
                                                        <div>
                                                            <?php if ($trang_thai == "Chờ Xác Nhận") { ?>
                                                                <div class="block-stock w-100 bg-danger text-light bg-1 fw-7">Chờ Xác Nhận</div>
                                                            <?php } else if ($trang_thai ==  "Đã Xác Nhận") { ?>
                                                                <div class="block-stock w-100 bg-danger text-light bg-1 fw-7">Đã Xác Nhận</div>
                                                            <?php } else if ($trang_thai ==  "Đang Giao Hàng") { ?>
                                                                <div class="block-stock w-100 bg-danger text-light bg-1 fw-7">Đang Giao</div>
                                                            <?php } else if ($trang_thai ==  "Giao Hàng Thành Công") { ?>
                                                                <div class="block-stock w-100 bg-success text-light bg-1 fw-7">Đã Giao Hàng</div>
                                                            <?php } else if ($trang_thai ==  "Đã Nhận Hàng") { ?>
                                                                <div class="block-stock w-100 bg-success text-light bg-1 fw-7">Đã Nhận Hàng</div>
                                                            <?php } else if ($trang_thai ==  "Đã Bị Hủy") { ?>
                                                                <div class="block-stock w-100 bg-secondary text-light bg-1 fw-7">Đã Bị Hủy</div>
                                                            <?php } ?>

                                                        </div>

                                                        <div class="list-icon-function">
                                                            <div class="item eye">
                                                                <a href="?action=admin&admin=detailOrder&id=<?= $id; ?>"><i class="icon-eye"></i></a>
                                                            </div>
                                                            <div class="item trash">
                                                                <a href="?action=admin&admin=deleteOrder&id=<?= $id; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?');"><i class="icon-trash-2"></i></a>
                                                            </div>
                                                        </div>

                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                    </div>
                                    <!-- /order-list -->
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