<?php if (isset($_SESSION['userName'])) { ?>
    <?php include_once './view/client/home/top.php'; ?>

    <body class="preload-wrapper">
        <!-- RTL -->
        <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
        <!-- /RTL  -->
        <!-- preload -->
        <div class="preload preload-container">
            <div class="preload-logo">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- /preload -->
        <div id="wrapper">
            <!-- Header -->
            <?php include_once "./view/client/home/header.php"; ?>
            <!-- /Header -->


            <!-- page-title -->
            <div class="tf-page-title">
                <div class="container-full">
                    <div class="heading text-center">Thanh Toán Thành Công</div>
                </div>
            </div>
            <!-- /page-title -->

            <!-- page-cart -->
            <section class="flat-spacing-11">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h5 class="fw-5 mb_20">Thông Tin Đơn Hàng</h5>
                            <div class="tf-page-cart-checkout">
                                <div class="d-flex align-items-center justify-content-between mb_15">
                                    <div class="fs-18">Mã Đơn Hàng</div>
                                    <p><?= $load_current_order['ma_don_hang']; ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb_15">
                                    <div class="fs-18">Ngày Đặt</div>
                                    <p><?= $load_current_order['ngay_tao']; ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb_15">
                                    <div class="fs-18">Hình Thức Thanh Toán</div>
                                    <p>
                                        <?php
                                        if ($load_current_order['loai_thanh_toan'] == 0) {
                                            echo "Sau khi Nhận Hàng";
                                        } else {
                                            echo "Thanh Toán Trực Tiếp";
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb_15">
                                    <div class="fs-18">Địa Chỉ</div>
                                    <p><?= $load_current_order['dia_chi']; ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb_15">
                                    <div class="fs-18">Email</div>
                                    <p><?= $load_current_order['email']; ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb_15">
                                    <div class="fs-18">Số Điện Thoại</div>
                                    <p><?= $load_current_order['so_dien_thoai']; ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb_24">
                                    <div class="fs-22 fw-6">Tổng Tiền</div>
                                    <span class="total-value"><?= number_format($load_current_order['tong_tien'], 0, ',', '.'); ?>đ</span>
                                </div>
                                <div class="d-flex gap-10">
                                    <a href="?client=home&userId=<?= $_SESSION['userId'] ?>" class="tf-btn w-100 btn-outline animate-hover-btn rounded-0 justify-content-center">
                                        <span>Về Trang Chủ</span>
                                    </a>
                                    <a href="?client=listOrder&userId=<?= $_SESSION['userId'] ?>" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center">
                                        <span>Xem Đơn Hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page-cart -->

            <!-- Footer -->
            <?php include_once "./view/client/home/footer.php"; ?>
            <!-- /Footer -->

        </div>

        <!-- gotop -->
        <?php include_once "./view/client/home/goto.php"; ?>
        <!-- /gotop -->

        <!-- ------------------------------------------------------------------------------------ -->

        <!-- toolbar-bottom -->
        <?php include_once "./view/client/home/toolbarBottom.php"; ?>
        <!-- /toolbar-bottom -->

        <!-- mobile menu -->
        <?php include_once "./view/client/home/mobileMenu.php"; ?>
        <!-- /mobile menu -->


        <!-- toolbarShopmb -->
        <?php include_once "./view/client/home/toolbarShopmb.php"; ?>
        <!-- /toolbarShopmb -->

        <!-- modal find_size -->
        <?php include_once "./view/client/home/quickFindSize.php"; ?>
        <!-- /modal find_size -->

        <!-- ------------------------------------------------------------------------------------ -->

    </body>

    <?php include_once './view/client/home/bot.php'; ?>

    <!-- Mirrored from themesflat.co/html/ecomus/home-06.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:43:03 GMT -->

    </html>
<?php } else {
    header("Location: ?client=login");
    exit();
} ?>