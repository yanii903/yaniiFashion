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
                                        <h3>Kiểm Tra Giao Hàng</h3>
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
                                                <div class="text-tiny">Kiểm Tra Giao Hàng</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- detail -->
                                    <div class="wg-box mb-20">
                                        <div>
                                            <h6 class="mb-10">Tiến Độ Giao Hàng</h6>
                                            <div class="body-text">Các mặt hàng của bạn đang trên đường. Thông tin theo dõi sẽ có sẵn trong vòng 24 giờ.</div>
                                        </div>

                                        <div class="road-map">
                                            <!-- Đã Bị Hủy -->
                                            <div class="road-map-item 
                                            <?php if ($trang_thai == "Đã Bị Hủy") {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">
                                                <div class="icon"><i class="icon-x"></i></div>
                                                <h6>Đã Bị Hủy</h6>
                                            </div>

                                            <!-- Chờ Xác Nhận -->
                                            <div class="road-map-item 
                                            <?php if ($trang_thai == "Chờ Xác Nhận" || $trang_thai == "Đã Xác Nhận" || $trang_thai == "Đang Giao Hàng" || $trang_thai == "Giao Hàng Thành Công" || $trang_thai == "Đã Nhận Hàng") {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">
                                                <div class="icon"><i class="icon-check"></i></div>
                                                <h6>Chờ Xác Nhận</h6>
                                            </div>

                                            <!-- Đã Xác Nhận -->
                                            <div class="road-map-item 
                                            <?php if ($trang_thai == "Đã Xác Nhận" || $trang_thai == "Đang Giao Hàng" || $trang_thai == "Giao Hàng Thành Công" || $trang_thai == "Đã Nhận Hàng") {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">
                                                <div class="icon"><i class="icon-check"></i></div>
                                                <h6>Đã Xác Nhận</h6>
                                            </div>

                                            <!-- Đang Giao Hàng -->
                                            <div class="road-map-item 
                                            <?php if ($trang_thai == "Đang Giao Hàng" || $trang_thai == "Giao Hàng Thành Công" || $trang_thai == "Đã Nhận Hàng") {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">
                                                <div class="icon"><i class="icon-check"></i></div>
                                                <h6>Đang Giao Hàng</h6>
                                            </div>

                                            <!-- Giao Hàng Thành Công -->
                                            <div class="road-map-item 
                                            <?php if ($trang_thai == "Giao Hàng Thành Công" || $trang_thai == "Đã Nhận Hàng") {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">
                                                <div class="icon"><i class="icon-check"></i></div>
                                                <h6>Giao Hàng Thành Công</h6>
                                            </div>
                                            <!-- Đã Nhận Hàng -->
                                            <div class="road-map-item 
                                            <?php if ($trang_thai == "Đã Nhận Hàng") {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">
                                                <div class="icon"><i class="icon-check"></i></div>
                                                <h6>Đã Nhận Hàng</h6>
                                            </div>
                                        </div>

                                        <!-- /detail -->
                                        <form method="POST">
                                            <div class="wg-box mb-20">
                                                <fieldset class="box fieldset">
                                                    <div>
                                                        <h6 class="mb-10">Cập Nhận Trạng Thái Đơn Hàng</h6>
                                                    </div>
                                                    <div class="select-custom">
                                                        <select class="tf-select w-100" id="statusPay_<?= $_GET['id']; ?>" name="statusPay" onchange="checkStatus(<?= $_GET['id'] ?>)">
                                                            <option value="Đã Bị Hủy" <?= ($trang_thai == "Đã Bị Hủy") ? 'selected' : ''; ?> disabled>Đã Bị Hủy</option>
                                                            <option value="Chờ Xác Nhận" <?= ($trang_thai == "Chờ Xác Nhận") ? 'selected' : ''; ?>>Chờ Xác Nhận</option>
                                                            <option value="Đã Xác Nhận" <?= ($trang_thai == "Đã Xác Nhận") ? 'selected' : ''; ?>>Đã Xác Nhận</option>
                                                            <option value="Đang Giao Hàng" <?= ($trang_thai == "Đang Giao Hàng") ? 'selected' : ''; ?>>Đang Giao Hàng</option>
                                                            <option value="Giao Hàng Thành Công" <?= ($trang_thai == "Giao Hàng Thành Công") ? 'selected' : ''; ?>>Giao Hàng Thành Công</option>
                                                            <option value="Đã Nhận Hàng" <?= ($trang_thai == "Đã Nhận Hàng") ? 'selected' : ''; ?> disabled>Đã Nhận Hàng</option>
                                                        </select>
                                                        <input type="hidden" id="hiddenStatus_<?= $_GET['id']; ?>" name="hiddenStatus" value="<?= $trang_thai; ?>">
                                                    </div>
                                                    <script>
                                                        // Hàm kiểm tra trạng thái và ẩn/hiện các tùy chọn tương ứng cho mỗi đơn hàng
                                                        function checkStatus(orderId) {
                                                            var statusSelect = document.getElementById("statusPay_" + orderId); // Lấy select tương ứng với đơn hàng
                                                            var selectedStatus = statusSelect.value;

                                                            var hiddenInput = document.getElementById("hiddenStatus_" + orderId); // Lấy input ẩn tương ứng
                                                            hiddenInput.value = selectedStatus;

                                                            // Lấy tất cả các option trong select
                                                            var options = statusSelect.getElementsByTagName("option");

                                                            // Nếu trạng thái là "Đã Bị Hủy" hoặc "Đã Nhận Hàng", ẩn tất cả các option
                                                            if (selectedStatus == "Đã Bị Hủy" || selectedStatus == "Đã Nhận Hàng") {
                                                                for (var i = 0; i < options.length; i++) {
                                                                    options[i].disabled = true; // Disable tất cả các option
                                                                }
                                                            } else if (selectedStatus == "Chờ Xác Nhận") {
                                                                // Nếu trạng thái là "Chờ Xác Nhận", ẩn "Đã Bị Hủy" và "Đã Nhận Hàng"
                                                                for (var i = 0; i < options.length; i++) {
                                                                    if (options[i].value == "Đã Bị Hủy" || options[i].value == "Đã Nhận Hàng") {
                                                                        options[i].disabled = true; // Ẩn "Đã Bị Hủy" và "Đã Nhận Hàng"
                                                                    } else {
                                                                        options[i].disabled = false; // Kích hoạt các option còn lại
                                                                    }
                                                                }
                                                            } else if (selectedStatus == "Đã Xác Nhận") {
                                                                // Nếu trạng thái là "Đã Xác Nhận", ẩn "Chờ Xác Nhận" và "Đã Bị Hủy", "Đã Nhận Hàng"
                                                                for (var i = 0; i < options.length; i++) {
                                                                    if (options[i].value == "Chờ Xác Nhận" || options[i].value == "Đã Bị Hủy" || options[i].value == "Đã Nhận Hàng") {
                                                                        options[i].disabled = true; // Ẩn "Chờ Xác Nhận", "Đã Bị Hủy", và "Đã Nhận Hàng"
                                                                    } else {
                                                                        options[i].disabled = false; // Kích hoạt các option còn lại
                                                                    }
                                                                }
                                                            } else if (selectedStatus == "Đang Giao Hàng") {
                                                                // Nếu trạng thái là "Đang Giao Hàng", ẩn "Chờ Xác Nhận", "Đã Xác Nhận", và "Đã Bị Hủy", "Đã Nhận Hàng"
                                                                for (var i = 0; i < options.length; i++) {
                                                                    if (options[i].value == "Chờ Xác Nhận" || options[i].value == "Đã Xác Nhận" || options[i].value == "Đã Bị Hủy" || options[i].value == "Đã Nhận Hàng") {
                                                                        options[i].disabled = true; // Ẩn "Chờ Xác Nhận", "Đã Xác Nhận", "Đã Bị Hủy" và "Đã Nhận Hàng"
                                                                    } else {
                                                                        options[i].disabled = false; // Kích hoạt các option còn lại
                                                                    }
                                                                }
                                                            } else if (selectedStatus == "Giao Hàng Thành Công") {
                                                                // Nếu trạng thái là "Giao Hàng Thành Công", ẩn tất cả các option
                                                                for (var i = 0; i < options.length; i++) {
                                                                    options[i].disabled = true; // Disable tất cả các option
                                                                }
                                                            } else {
                                                                // Nếu không thuộc các trạng thái trên, đảm bảo tất cả các option còn lại được kích hoạt
                                                                for (var i = 0; i < options.length; i++) {
                                                                    options[i].disabled = false;
                                                                }
                                                            }
                                                        }

                                                        // Khi trang web được tải, gọi hàm checkStatus để kiểm tra trạng thái hiện tại cho từng đơn hàng
                                                        window.onload = function() {
                                                            var allStatusSelects = document.querySelectorAll('[id^="statusPay_"]'); // Lấy tất cả các select theo ID động
                                                            allStatusSelects.forEach(function(statusSelect) {
                                                                var orderId = statusSelect.id.split('_')[1]; // Lấy id đơn hàng từ ID động
                                                                checkStatus(orderId); // Kiểm tra trạng thái của mỗi đơn hàng
                                                            });
                                                        };
                                                    </script>
                                                </fieldset>
                                            </div>
                                            <div>
                                                <button class="tf-button w-full mb-10" type="submit" name="btnUpdateOrder">Cập Nhật</button>
                                                <a href="?action=admin&admin=detailOrder&id=<?= $_GET['id']; ?>" class="tf-button style-3 w-full" type="submit">Quay Lại</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /main-content-wrap -->
                                </div>
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