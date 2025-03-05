<?php
if (isset($_SESSION['userName'])) {
    $userId = intval($_GET['userId']); // Ép kiểu và bảo vệ dữ liệu

    $isFound = false; // Biến kiểm tra xem đã tồn tại hay chưa

    // Duyệt qua giỏ hàng để kiểm tra id_khach_hang
    foreach ($load_all_cart as $cart) {
        extract($cart);
        if ($id_khach_hang == $userId) {
            $isFound = true;
            break; // Nếu tìm thấy id_khach_hang thì ngừng lặp
        }
    }

    if (!$isFound) {
        // Chỉ chèn dữ liệu nếu không tìm thấy
        insert_cart($_SESSION['userId']);
    }
}
?>

<?php include_once 'top.php'; ?>

<body class="preload-wrapper">
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- Announcement Bar -->
        <div class="announcement-bar bg_violet">
            <div class="wrap-announcement-bar">
                <div class="box-sw-announcement-bar speed-1">
                    <div class="announcement-bar-item">
                        <p>MIỄN PHÍ VẬN CHUYỂN VÀ TRẢ HÀNG</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MÙA MỚI, PHONG CÁCH MỚI: SALE THỜI TRANG BẠN KHÔNG THỂ BỎ LỠ</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>ƯU ĐÃI TRONG THỜI GIAN CÓ HẠN: GIẢM GIÁ THỜI TRANG BẠN KHÔNG THỂ CƯỠNG LẠI</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MIỄN PHÍ VẬN CHUYỂN VÀ TRẢ HÀNG</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MÙA MỚI, PHONG CÁCH MỚI: SALE THỜI TRANG BẠN KHÔNG THỂ BỎ LỠ</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>ƯU ĐÃI TRONG THỜI GIAN CÓ HẠN: GIẢM GIÁ THỜI TRANG BẠN KHÔNG THỂ CƯỠNG LẠI</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MIỄN PHÍ VẬN CHUYỂN VÀ TRẢ HÀNG</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MÙA MỚI, PHONG CÁCH MỚI: SALE THỜI TRANG BẠN KHÔNG THỂ BỎ LỠ</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>ƯU ĐÃI TRONG THỜI GIAN CÓ HẠN: GIẢM GIÁ THỜI TRANG BẠN KHÔNG THỂ CƯỠNG LẠI</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MIỄN PHÍ VẬN CHUYỂN VÀ TRẢ HÀNG</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MÙA MỚI, PHONG CÁCH MỚI: SALE THỜI TRANG BẠN KHÔNG THỂ BỎ LỠ</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>ƯU ĐÃI TRONG THỜI GIAN CÓ HẠN: GIẢM GIÁ THỜI TRANG BẠN KHÔNG THỂ CƯỠNG LẠI</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MIỄN PHÍ VẬN CHUYỂN VÀ TRẢ HÀNG</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>MÙA MỚI, PHONG CÁCH MỚI: SALE THỜI TRANG BẠN KHÔNG THỂ BỎ LỠ</p>
                    </div>
                    <div class="announcement-bar-item">
                        <p>ƯU ĐÃI TRONG THỜI GIAN CÓ HẠN: GIẢM GIÁ THỜI TRANG BẠN KHÔNG THỂ CƯỠNG LẠI</p>
                    </div>
                </div>
            </div>
            <span class="icon-close close-announcement-bar"></span>

        </div>
        <!-- /Announcement Bar -->

        <!-- Header -->
        <?php include_once "header.php"; ?>
        <!-- /Header -->

        <!-- Slider -->
        <?php include_once "slider.php"; ?>
        <!-- /Slider -->

        <!-- Category -->
        <?php include_once "category.php"; ?>
        <!-- /Category -->

        <!-- Sale Product -->
        <?php include_once "sale.php"; ?>
        <!-- /Sale Product -->

        <!-- Banner Collection -->
        <?php include_once "banner.php"; ?>
        <!-- /Banner Collection -->

        <!-- Icon box -->
        <?php include_once "icon.php"; ?>
        <!-- /Icon box -->

        <!-- Location -->
        <?php include_once "location.php"; ?>
        <!-- /Location -->

        <!-- brand -->
        <?php include_once "brand.php"; ?>
        <!-- /brand -->

        <!-- Footer -->
        <?php include_once "footer.php"; ?>
        <!-- /Footer -->

    </div>

    <!-- gotop -->
    <?php include_once "goto.php"; ?>
    <!-- /gotop -->

    <!-- ------------------------------------------------------------------------------------ -->

    <!-- toolbar-bottom -->
    <?php include_once "toolbarBottom.php"; ?>
    <!-- /toolbar-bottom -->

    <!-- mobile menu -->
    <?php include_once "mobileMenu.php"; ?>
    <!-- /mobile menu -->

    <!-- toolbarShopmb -->
    <?php include_once "toolbarShopmb.php"; ?>
    <!-- /toolbarShopmb -->

    <!-- modal find_size -->
    <?php include_once "quickFindSize.php"; ?>
    <!-- /modal find_size -->

    <!-- ------------------------------------------------------------------------------------ -->

</body>

<?php include_once 'bot.php'; ?>

<!-- Mirrored from themesflat.co/html/ecomus/home-06.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:43:03 GMT -->

</html>