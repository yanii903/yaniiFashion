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
                                        <h3>Cập Nhật Danh Mục</h3>
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
                                                    <div class="text-tiny">Danh Mục</div>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon-chevron-right"></i>
                                            </li>
                                            <li>
                                                <div class="text-tiny">Cập Nhật Danh Mục</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- new-category -->
                                    <div class="wg-box">
                                        <?php if (isset($load_one_category)) {
                                            extract($load_one_category);
                                        ?>
                                            <form class="form-new-product form-style-1" method="POST" enctype="multipart/form-data">
                                                <fieldset class="name">
                                                    <div class="body-title">Tên Danh Mục <span class="tf-color-1">*</span></div>
                                                    <div class="d-block w-full">
                                                        <input class="mb-10 w-full" type="text" placeholder="Nhập Tên Danh Mục" name="name" tabindex="0" value="<?= isset($_POST['name']) ? $_POST['name'] : $ten_danh_muc; ?>">

                                                        <?php if (!empty($messName)): ?>
                                                            <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messName; ?></i>
                                                        <?php endif; ?>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <div class="body-title">Hình Ảnh <span class="tf-color-1">*</span></div>
                                                    <div class="d-block">
                                                        <div class="d-flex justify-content-around w-full flex-wrap">
                                                            <!-- <div class="upload-image mb-16">
                                                            <div class="up-load p-3">
                                                                <img class="rounded" src="../../view/assets/be/images/category/<?= $hinh_anh; ?>" width="400px">
                                                            </div>
                                                        </div> -->

                                                            <div class="upload-image mb-16">
                                                                <div class="up-load bg-black">
                                                                    <img
                                                                        class="rounded-5"
                                                                        src="./view/assets/be/images/category/<?= htmlspecialchars($hinh_anh); ?>"
                                                                        class="w-100 h-100"
                                                                        style="width: 248px; height: 248px; object-fit: cover; border-radius: 10px;"
                                                                        alt="Avatar">
                                                                </div>
                                                            </div>

                                                            <div class="upload-image flex-grow mx-5 mb-10">
                                                                <div class="item up-load">
                                                                    <label class="uploadfile h250" for="myFile">
                                                                        <span class="icon">
                                                                            <i class="icon-upload-cloud"></i>
                                                                        </span>
                                                                        <span class="body-text">Thả hình ảnh bạn muốn thay đổi ở đây hoặc chọn <span class="tf-color">Bấm để duyệt</span></span>
                                                                        <img id="myFile-input" src="#" alt="">
                                                                        <input type="file" id="myFile" name="upload">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php if (!empty($messUpload)): ?>
                                                            <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messUpload; ?></i>
                                                        <?php endif; ?>
                                                    </div>
                                                </fieldset>

                                                <div class="bot">
                                                    <div></div>
                                                    <button class="tf-button w-full" type="submit" name="btnUpdateCategory">Cập Nhật</button>
                                                    <a href="?action=admin&admin=listCategory" class="tf-button w208 style-3" type="submit">Quay Lại</a>
                                                </div>
                                            </form>
                                        <?php } ?>
                                    </div>
                                    <!-- /new-category -->
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