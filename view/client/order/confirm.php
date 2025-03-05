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
                    <div class="heading text-center">Đơn Hàng Đã Nhận</div>
                </div>
            </div>
            <!-- /page-title -->

            <!-- page-cart -->
            <section class="flat-spacing-11">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="wrap-sidebar-account">
                                <ul class="my-account-nav">
                                    <ul class="my-account-nav">
                                        <li><a href="?client=myAccount&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Thông Tin Tài Khoản</a></li>
                                        <li><a href="?client=listOrder&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng</a></li>
                                        <li><span class="my-account-nav-item active">Đơn Hàng Đã Nhận</span></li>
                                        <li><a href="?client=listOrderDelete&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Hủy</a></li>
                                        <li><a href="?client=wishList&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Yêu Thích</a></li>
                                        <li><a href="?action=logout" class="my-account-nav-item">Đăng Xuất</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="my-account-content account-order">
                                <div class="wrap-account-order">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="fw-6">Mã Đơn Hàng</th>
                                                <th class="fw-6">Ngày Tạo</th>
                                                <th class="fw-6">Trạng Thái</th>
                                                <th class="fw-6">Tổng Tiền</th>
                                                <th class="fw-6">Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($load_all_order_user_confirm as $order) {
                                                extract($order);
                                            ?>
                                                <tr class="tf-order-item">
                                                    <td>
                                                        <?= $ma_don_hang; ?>
                                                    </td>
                                                    <td>
                                                        <?= $ngay_tao; ?>
                                                    </td>
                                                    <td>
                                                        <?= $trang_thai; ?>
                                                    </td>
                                                    <td class="text-danger fw-bold">
                                                        <?= number_format($tong_tien, 0, ',', '.'); ?>đ
                                                    </td>
                                                    <td>
                                                        <a href="?client=viewOrder&userId=<?= $_SESSION['userId'] ?>&orderDetailId=<?= $id; ?>" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                                            <span>Xem</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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