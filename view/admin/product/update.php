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
                                        <h3>Cập Nhật Sản Phẩm</h3>
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
                                                <div class="text-tiny">Cập Nhật Sản Phẩm</div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- form-add-product -->
                                    <?php if (isset($load_one_product)) extract($load_one_product); ?>
                                    <form class="form-add-product" enctype="multipart/form-data" method="POST">

                                        <div class="wg-box mb-30">
                                            <fieldset>
                                                <div class="body-title mb-10">Ảnh Hiện Tại</div>
                                                <div class="upload-image mb-16">
                                                    <div class="up-load p-3">
                                                        <img class="rounded" src="./view/assets/be/images/products/<?= $hinh_anh; ?>" width="400px">
                                                    </div>
                                                </div>
                                                <?php if (!empty($messUpload)): ?>
                                                    <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messUpload; ?></i>
                                                <?php endif; ?>
                                            </fieldset>
                                        </div>

                                        <div class="wg-box mb-30">
                                            <fieldset>
                                                <div class="body-title mb-10">Tải Ảnh Khác</div>
                                                <div class="upload-image mb-16">
                                                    <div class="up-load">
                                                        <label class="uploadfile" for="myFile">
                                                            <span class="icon">
                                                                <i class="icon-upload-cloud"></i>
                                                            </span>
                                                            <div class="text-tiny">Thả hình ảnh của bạn ở đây hoặc chọn <span class="text-secondary">Nhấp để duyệt</span></div>
                                                            <input type="file" id="myFile" name="upload">
                                                            <img src="#" id="myFile-input" alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                                <?php if (!empty($messUpload)): ?>
                                                    <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messUpload; ?></i>
                                                <?php endif; ?>
                                            </fieldset>
                                        </div>

                                        <div class="wg-box mb-30">
                                            <fieldset class="name">
                                                <div class="body-title mb-10">Tên Sản Phẩm <span class="tf-color-1">*</span></div>
                                                <input class="mb-10" type="text" placeholder="Nhập Tên Sản Phẩm" name="name" tabindex="0" value="<?= isset($_POST['name']) ? $_POST['name'] : $ten_san_pham; ?>">
                                                <?php if (!empty($messName)): ?>
                                                    <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messName; ?></i>
                                                <?php endif; ?>
                                            </fieldset>

                                            <fieldset class="category">
                                                <div class="body-title mb-10">Danh Mục <span class="tf-color-1">*</span></div>
                                                <select name="category">
                                                    <?php foreach ($load_all_category as $category): extract($category) ?>
                                                        <option value="<?= $id; ?>" <?= (isset($_POST['category']) && $_POST['category'] == $id) || ($id == $id_danh_muc) ? 'selected' : '' ?>>
                                                            <?= $ten_danh_muc; ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>

                                                <?php if (!empty($messCategory)): ?>
                                                    <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messCategory; ?></i>
                                                <?php endif; ?>
                                            </fieldset>

                                            <div class="cols-lg gap22">
                                                <fieldset class="price">
                                                    <div class="body-title mb-10">Giá Gốc <span class="tf-color-1">*</span></div>
                                                    <input class="" type="number" placeholder="Nhập Giá Gôc" name="price" tabindex="0" value="<?= isset($_POST['price']) ? $_POST['price'] : intval($gia); ?>">

                                                    <?php if (!empty($messPrice)): ?>
                                                        <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messPrice; ?></i>
                                                    <?php endif; ?>
                                                </fieldset>

                                                <fieldset class="sale-price">
                                                    <div class="body-title mb-10">Giá Giảm </div>
                                                    <input class="" type="number" placeholder="Nhập Giá Khuyến Mại" name="salePrice" tabindex="0" value="<?= isset($_POST['salePrice']) ? $_POST['salePrice'] : intval($gia_giam); ?>">

                                                    <?php if (!empty($messSalePrice)): ?>
                                                        <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messSalePrice; ?></i>
                                                    <?php endif; ?>
                                                </fieldset>

                                                <fieldset class="quantity">
                                                    <div class="body-title mb-10">Số Lượng</div>
                                                    <input type="number" name="quantity" placeholder="Nhập Số Lượng Sản Phẩm" tabindex="0" value="<?= isset($_POST['quantity']) ? $_POST['quantity'] : $so_luong; ?>">
                                                </fieldset>
                                            </div>

                                            <fieldset class="description">
                                                <div class="body-title mb-10">Mô Tả <span class="tf-color-1">*</span></div>
                                                <textarea class="mb-10" name="description" tabindex="0"><?= isset($_POST['description']) ? htmlspecialchars($_POST['description']) : htmlspecialchars($mo_ta); ?></textarea>

                                                <?php if (!empty($messDescription)): ?>
                                                    <i style="color: red; margin: 5px;" class="fs-4"><?php echo $messDescription; ?></i>
                                                <?php endif; ?>
                                            </fieldset>

                                            <div class="wg-box">
                                                <div class="left">
                                                    <h5 class="mb-4">Chọn Giới Tính Phù Hợp</h5>
                                                    <div class="body-text">Tùy chỉnh Giới Tính Phù Hợp Với Sản Phẩm</div>
                                                </div>
                                                <div class="right flex-grow">
                                                    <fieldset class="mb-24">
                                                        <div class="body-title mb-10">Giới Tính</div>

                                                        <div class="radio-buttons">
                                                            <div class="item">
                                                                <input class="" type="radio" name="sex" id="add-product1" value="Nam" <?php echo ($gioi_tinh == "Nam") ? "checked" : ""; ?>>
                                                                <label class="" for="add-product1"><span class="body-title-2">Nam</span></label>
                                                            </div>
                                                            <div class="item">
                                                                <input class="" type="radio" name="sex" id="add-product2" value="Nữ" <?php echo ($gioi_tinh == "Nữ") ? "checked" : ""; ?>>
                                                                <label class="" for="add-product2"><span class="body-title-2">Nữ</span></label>
                                                            </div>
                                                        </div>

                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cols gap10">
                                            <button class="tf-button w380" type="submit" name="btnUpdateProduct">Cập Nhật</button>
                                            <a href="?action=admin&admin=listProduct" class="tf-button style-3 w380" type="submit">Quay Lại</a>
                                        </div>
                                    </form>

                                    <php ?>
                                        <!-- /form-add-product -->
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