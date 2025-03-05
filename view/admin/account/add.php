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
                                        <h3>Thêm Tài Khoản</h3>
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
                                                    <div class="text-tiny">Tài Khoản</div>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon-chevron-right"></i>
                                            </li>
                                            <li>
                                                <div class="text-tiny">Thêm Tài Khoản</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- add-new-user -->
                                    <form class="form-add-new-user form-style-2" method="POST">
                                        <div class="wg-box">
                                            <div class="left">
                                                <h5 class="mb-4">Thông Tin</h5>
                                                <div class="body-text">Điền thông tin bên cạnh để thêm tài khoản mới</div>
                                            </div>
                                            <div class="right flex-grow">
                                                <fieldset class="name mb-24">
                                                    <div class="body-title mb-10">Tên Đăng Nhập</div>
                                                    <input class="flex-grow" type="text" placeholder="Nhập Tên Đăng Nhập" name="name" tabindex="0" value="<?= $_POST['name'] ?? '' ?>">

                                                    <?php if (!empty($messName)): ?>
                                                        <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messName; ?></i>
                                                    <?php endif; ?>
                                                </fieldset>
                                                <fieldset class="email mb-24">
                                                    <div class="body-title mb-10">Email</div>
                                                    <input class="flex-grow" type="email" placeholder="Nhập Email" name="email" tabindex="0" value="<?= $_POST['email'] ?? '' ?>">

                                                    <?php if (!empty($messEmail)): ?>
                                                        <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messEmail; ?></i>
                                                    <?php endif; ?>
                                                </fieldset>
                                                <fieldset class="password mb-24">
                                                    <div class="body-title mb-10">Mật Khẩu</div>
                                                    <input class="password-input" type="password" placeholder="Nhập Mật Khẩu" name="password" tabindex="0" value="<?= $_POST['password'] ?? '' ?>">
                                                    <span class="show-pass">
                                                        <i class="icon-eye view"></i>
                                                        <i class="icon-eye-off hide"></i>
                                                    </span>

                                                    <?php if (!empty($messPassword)): ?>
                                                        <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messPassword; ?></i>
                                                    <?php endif; ?>
                                                </fieldset>
                                                <fieldset class="password">
                                                    <div class="body-title mb-10">Xác Nhận Mật Khẩu</div>
                                                    <input class="password-input" type="password" placeholder="Nhập Mật Khẩu Xác Nhận" name="Repassword" tabindex="0" value="<?= $_POST['Repassword'] ?? '' ?>">
                                                    <span class="show-pass">
                                                        <i class="icon-eye view"></i>
                                                        <i class="icon-eye-off hide"></i>
                                                    </span>

                                                    <?php if (!empty($messRepassword)): ?>
                                                        <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messRepassword; ?></i>
                                                    <?php endif; ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="wg-box">
                                            <div class="left">
                                                <h5 class="mb-4">Cài Đặt Quyền</h5>
                                                <div class="body-text">Tùy chỉnh tài khoản</div>
                                            </div>
                                            <div class="right flex-grow">
                                                <fieldset class="mb-24">
                                                    <div class="body-title mb-10">Vai Trò</div>

                                                    <div class="radio-buttons">
                                                        <div class="item">
                                                            <input class="" type="radio" name="role" id="add-product1" value="2" checked>
                                                            <label class="" for="add-product1"><span class="body-title-2">Người Dùng</span></label>
                                                        </div>
                                                        <div class="item">
                                                            <input class="" type="radio" name="role" id="add-product2" value="1">
                                                            <label class="" for="add-product2"><span class="body-title-2">Quản Trị</span></label>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="bot">
                                            <button class="tf-button w-full" type="submit" name="btnAddAccount">Thêm Mới</button>
                                            <a href="?action=admin&admin=listProduct" class="tf-button style-3 w380" type="submit">Quay Lại</a>
                                        </div>

                                    </form>
                                    <!-- /add-new-user -->
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