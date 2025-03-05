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
                        <!-- /header-dashboard -->

                        <!-- main-content -->
                        <div class="main-content">

                            <!-- main-content-wrap -->
                            <div class="main-content-inner">
                                <!-- main-content-wrap -->
                                <div class="main-content-wrap">
                                    <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                        <h3>Cập Nhật Tài Khoản</h3>
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
                                                <div class="text-tiny">Cập Nhật Tài Khoản</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- add-new-user -->
                                    <?php if (isset($load_one_account)) {
                                        extract($load_one_account);
                                    ?>
                                        <form class="form-add-new-user form-style-2" method="POST" enctype="multipart/form-data" action="?action=admin&admin=updateAccount&id=<?= $id ?>">
                                            <div class="wg-box">
                                                <div class="left">
                                                    <h5 class="mb-4">Ảnh Nền</h5>
                                                    <div class="body-text">Cập nhật ảnh đại diện của bạn</div>
                                                </div>
                                                <div class="right flex-grow">
                                                    <fieldset class="name mb-24">
                                                        <fieldset>
                                                            <div class="body-title">Ảnh Hiện Tại <span class="tf-color-1">*</span></div>
                                                            <div class="d-block">
                                                                <div class="d-flex justify-content-around w-full flex-wrap">
                                                                    <div class="upload-image mb-16">
                                                                        <div class="up-load bg-black">
                                                                            <img
                                                                                class="rounded-5"
                                                                                src="./view/assets/be/images/avatar/<?= htmlspecialchars($hinh_anh); ?>"
                                                                                class="w-100 h-100"
                                                                                style="width: 206px; height: 206px; object-fit: cover; border-radius: 10px;"
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
                                                                    <i class="error-message"><?php echo $messUpload; ?></i>
                                                                <?php endif; ?>
                                                            </div>
                                                        </fieldset>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="wg-box">
                                                <div class="left">
                                                    <h5 class="mb-4">Thông Tin</h5>
                                                    <div class="body-text">Điền thông tin bên cạnh để cập nhật tài khoản</div>
                                                </div>
                                                <div class="right flex-grow">
                                                    <fieldset class="name mb-24">
                                                        <div class="body-title mb-10">Tên Đăng Nhập</div>
                                                        <input class="flex-grow" type="text" placeholder="Nhập Tên Đăng Nhập" name="name" tabindex="0" value="<?= htmlspecialchars(isset($_POST['name']) ? $_POST['name'] : $ten_dang_nhap); ?>" readonly>

                                                        <?php if (!empty($messName)): ?>
                                                            <i class="error-message"><?php echo $messName; ?></i>
                                                        <?php endif; ?>
                                                    </fieldset>
                                                    <fieldset class="email mb-24">
                                                        <div class="body-title mb-10">Email</div>
                                                        <input class="flex-grow" type="email" placeholder="Nhập Email" name="email" tabindex="0" value="<?= htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : $email); ?>" readonly>

                                                        <?php if (!empty($messEmail)): ?>
                                                            <i class="error-message"><?php echo $messEmail; ?></i>
                                                        <?php endif; ?>
                                                    </fieldset>
                                                    <fieldset class="password mb-24">
                                                        <div class="body-title mb-10">Mật Khẩu</div>
                                                        <input class="password-input" type="password" placeholder="Nhập Mật Khẩu" name="password" tabindex="0" value="<?= htmlspecialchars(isset($_POST['password']) ? $_POST['password'] : $mat_khau); ?>">
                                                        <span class="show-pass">
                                                            <i class="icon-eye view"></i>
                                                            <i class="icon-eye-off hide"></i>
                                                        </span>

                                                        <?php if (!empty($messPassword)): ?>
                                                            <i class="error-message"><?php echo $messPassword; ?></i>
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
                                                                <input class="" type="radio" name="role" id="add-product1" value="2" <?php echo ($id_vai_tro == "2") ? "checked" : ""; ?>>
                                                                <label class="" for="add-product1"><span class="body-title-2">Người Dùng</span></label>
                                                            </div>

                                                            <div class="item">
                                                                <input class="" type="radio" name="role" id="add-product2" value="1" <?php echo ($id_vai_tro == "1") ? "checked" : ""; ?>>
                                                                <label class="" for="add-product2"><span class="body-title-2">Quản Trị</span></label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="bot">
                                                <button class="tf-button w-full" type="submit" name="btnUpdateAccount">Cập Nhật</button>
                                                <a href="?action=admin&admin=listAccount" class="tf-button style-3 w380">Quay Lại</a>
                                            </div>

                                        </form>
                                    <?php } ?>

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