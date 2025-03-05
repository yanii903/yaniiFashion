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

                            <!-- main-content-wrap -->
                            <div class="main-content-inner">
                                <!-- main-content-wrap -->
                                <div class="main-content-wrap">
                                    <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                        <h3>Tất Cả Sản Phẩm</h3>
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
                                                    <div class="text-tiny">Sản Phẩm</div>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon-chevron-right"></i>
                                            </li>
                                            <li>
                                                <div class="text-tiny">Danh Sách Sản Phẩm</div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- product-list -->
                                    <div class="wg-box">
                                        <div class="title-box">
                                            <i class="icon-coffee"></i>
                                            <div class="body-text">
                                                Mẹo: tìm kiếm theo ID sản phẩm. Mỗi sản phẩm được cung cấp một ID duy nhất mà bạn có thể dựa vào để tìm chính xác sản phẩm bạn cần.</div>
                                        </div>
                                        <div class="flex items-center justify-between gap10 flex-wrap">
                                            <div class="wg-filter flex-grow">
                                                <form class="form-search">
                                                    <fieldset class="name">
                                                        <input type="text" placeholder="Tìm Kiếm..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                    </fieldset>
                                                    <div class="button-submit">
                                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <a class="tf-button style-1 w208" href="?action=admin&admin=addProduct"><i class="icon-plus"></i>Thêm Sản Phẩm</a>
                                        </div>
                                        <div class="wg-table table-product-list">

                                            <ul class="table-title flex mb-14">
                                                <li>
                                                    <div class="body-title">Sản Phẩm</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -10px;" class="body-title">ID Sản Phẩm</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -5px;" class="body-title">Danh Mục</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -45px;" class="body-title">Giới Tính</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -37px;" class="body-title">Giá Gốc</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -45px;" class="body-title">Giá Giảm</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -63px;" class="body-title">Số Lượng</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -95px;" class="body-title">Cổ Phiếu</div>
                                                </li>
                                                <li>
                                                    <div style="margin-left: -35px;" class="body-title">Ngày Tạo</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Thao Tác</div>
                                                </li>
                                            </ul>

                                            <ul class="flex flex-column">
                                                <?php foreach ($list_all_product as $product) {
                                                    extract($product); ?>

                                                    <li class="wg-product item-row">
                                                        <div class="name">
                                                            <div class="image">
                                                                <img src="<?= './view/assets/be/images/products/' . $hinh_anh; ?>" alt="Image">
                                                            </div>
                                                            <div class="title line-clamp-2 mb-0">
                                                                <a href="#" class="body-text"><?= $ten_san_pham; ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="body-text text-main-dark mt-4"><?= $id_san_pham; ?></div>
                                                        <div class="body-text text-main-dark mt-4">
                                                            <?php $danh_muc = load_category_for_product($id_danh_muc);
                                                            extract($danh_muc);
                                                            echo $ten_danh_muc; ?>
                                                        </div>
                                                        <div style="margin-left: -30px;" class="body-text text-main-dark mt-4"><?= $gioi_tinh; ?></div>
                                                        <div style="margin-left: -10px;" class="body-text text-main-dark mt-4"><?= number_format($gia, 0, ',', '.'); ?></div>
                                                        <div class="body-text text-main-dark mt-4"><?= number_format($gia_giam, 0, ',', '.'); ?></div>
                                                        <div class="body-text text-main-dark mt-4"><?= number_format($so_luong, 0, ',', '.'); ?></div>
                                                        <div>
                                                            <?php if ($id_co_phieu == 1) { ?>
                                                                <div style="margin-left: -60px;" class="block-stock bg-success text-light bg-1 fw-7">Còn Hàng</div>
                                                            <?php } else if ($id_co_phieu == 2) { ?>
                                                                <div style="margin-left: -60px;" class="block-stock bg-danger text-light bg-1 fw-7">Hết Hàng</div>
                                                            <?php } ?>
                                                        </div>
                                                        <div style="margin-left: -40px;" class="body-text text-main-dark mt-4"><?= date('d-m-Y', strtotime($ngay_tao)); ?></div>
                                                        <div class="list-icon-function">
                                                            <div class="item edit">
                                                                <a href="?action=admin&admin=updateProduct&id=<?= $id; ?>"><i class="icon-edit-3"></i></a>
                                                            </div>
                                                            <div class="item trash">
                                                                <a href="?action=admin&admin=deleteProduct&id=<?= $id; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');"><i class="icon-trash-2"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                    </div>
                                    <!-- /product-list -->

                                </div>
                                <!-- /main-content-wrap -->
                            </div>
                            <!-- /main-content-wrap -->

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