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
                    <div class="heading text-center">Danh Sách Đơn Hàng</div>
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
                                    <li><a href="?client=myAccount&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Thông Tin Tài Khoản</a></li>
                                    <li><a class="my-account-nav-item active" href="?client=listOrder&userId=<?= $_SESSION['userId']; ?>">Đơn Hàng</a></li>
                                    <li><a href="?client=listOrderConfirm&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Nhận</a></li>
                                    <li><a href="?client=listOrderDelete&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Hủy</a></li>
                                    <li><a href="my-account-wishlist.html" class="my-account-nav-item">Yêu Thích</a></li>
                                    <li><a href="?action=logout" class="my-account-nav-item">Đăng Xuất</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wd-form-order">
                                <div class="order-head">
                                    <div class="content">
                                        <div class="badge <?php if ($trang_thai == "Đã Nhận Hàng") echo "bg-success"; ?> mb-1" style="font-size: 16px;"><?= $trang_thai; ?></div>
                                        <h6 class="mt-8 fw-5">Mã Đơn Hàng <?= $ma_don_hang; ?></h6>
                                    </div>
                                </div>
                                <div class="tf-grid-layout md-col-2 gap-15">
                                    <div class="item">
                                        <div class="text-2 text_black-2">Vật Phẩm</div>
                                        <div class="text-2 mt_4 fw-6">Thời Trang</div>
                                    </div>
                                    <div class="item">
                                        <div class="text-2 text_black-2">Hình Thức Thanh Toán</div>
                                        <div class="text-2 mt_4 fw-6">
                                            <?php
                                            if ($loai_thanh_toan == 0) {
                                                echo "Thanh Toán Khi Nhận Hàng";
                                            } else {
                                                echo "Thanh Toán Trực Tiếp";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="text-2 text_black-2">Ngày Tạo Đơn Hàng</div>
                                        <div class="text-2 mt_4 fw-6"><?= $ngay_tao; ?></div>
                                    </div>
                                    <div class="item">
                                        <div class="text-2 text_black-2">Địa Chỉ</div>
                                        <div class="text-2 mt_4 fw-6"><?= $dia_chi; ?></div>
                                    </div>
                                </div>
                                <div class="widget-tabs style-has-border widget-order-tab">
                                    <ul class="widget-menu-tab">
                                        <li class="item-title active">
                                            <span class="inner">Lịch sử Giao Hàng</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Chi Tiết Sản Phẩm</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Lời Cam Kết</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Thông Tin</span>
                                        </li>
                                        <?php if ($trang_thai == "Chờ Xác Nhận" || $trang_thai == "Đã Xác Nhận" || $trang_thai == "Đang Giao Hàng") { ?>
                                            <li class="item-title">
                                                <a href="?client=deleteOrder&userId=<?= $_SESSION['userId'] ?>&orderDetailId=<?= $id; ?>" class="inner text-danger">Hủy Đơn Hàng</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <div class="widget-content-tab">
                                        <div class="widget-content-inner active">
                                            <div class="widget-timeline">
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="timeline-badge success"></div>
                                                        <div class="timeline-box">
                                                            <a class="timeline-panel" href="javascript:void(0);">
                                                                <div class="text-2 fw-6">Chờ Xác Nhận</div>
                                                                <span><?= $ngay_tao; ?></span>
                                                            </a>
                                                            <p><strong>Dịch Vụ Chuyển Phát : </strong>Bưu Điện Việt Nam - VNPOST</p>
                                                            <p><strong>Thời Gian Nhận Hàng Dự Kiến : </strong><?php $date = new DateTime($ngay_tao);
                                                                                                                $date->modify('+2 days');
                                                                                                                echo $date->format('d-m-Y'); ?></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge success"></div>
                                                        <div class="timeline-box">
                                                            <a class="timeline-panel" href="javascript:void(0);">
                                                                <div class="text-2 fw-6">Đã Xác Nhận</div>
                                                                <span>10/07/2024 4:30pm</span>
                                                            </a>
                                                            <p><strong>Thông Báo : </strong>Đơn Hàng Đang Được Chuẩn Bị</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger"></div>
                                                        <div class="timeline-box">
                                                            <a class="timeline-panel" href="javascript:void(0);">
                                                                <div class="text-2 fw-6">Đang Giao Hàng</div>
                                                                <span>12/07/2024 4:34pm</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger"></div>
                                                        <div class="timeline-box">
                                                            <a class="timeline-panel" href="javascript:void(0);">
                                                                <div class="text-2 fw-6">Giao Hàng Thành Công</div>
                                                                <span>11/07/2024 2:36pm</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- ------------------------------------------------------------------- -->
                                        <div class="widget-content-inner">
                                            <?php foreach ($load_product_in_order_detail as $productDetail) {
                                                extract($productDetail);
                                            ?>
                                                <div class="order-head">
                                                    <figure class="img-product">
                                                        <img src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="product">
                                                    </figure>
                                                    <div class="content">
                                                        <div class="text-2 fw-6"><?= $ten_san_pham; ?> - </span> <?= $mau_sac; ?> / <?= $kich_co; ?></div>
                                                        <div class="mt_4"><span class="fw-6">Giá Tiền :</span> <span class="text-danger fw-bold"><?= number_format($gia_giam, 0, ',', '.'); ?>đ</span></div>
                                                        <div class="mt_4"><span class="fw-6">Số Lượng :</span> <?= $so_luong; ?></div>
                                                    </div>
                                                </div>
                                                <ul style="margin-top: -20px; padding-bottom: 10px;" class="line mb-4">
                                                    <li class="d-flex justify-content-between text-2">
                                                        <span>Tổng Tiền</span>
                                                        <span class="fw-6 text-danger"><?= number_format($so_luong * $gia_giam, 0, ',', '.'); ?>đ</span>
                                                    </li>
                                                </ul>
                                            <?php } ?>
                                        </div>
                                        <!-- ------------------------------------------------------------------- -->
                                        <div class="widget-content-inner">
                                            <p>Dịch vụ chuyển phát nhanh của chúng tôi tận tâm cung cấp các giải pháp giao hàng nhanh chóng, đáng tin cậy và an toàn phù hợp với nhu cầu của bạn. Cho dù bạn đang gửi tài liệu, bưu kiện hay các lô hàng lớn hơn, nhóm của chúng tôi đảm bảo rằng các mặt hàng của bạn được xử lý cẩn thận nhất và giao đúng hạn. Với cam kết về sự hài lòng của khách hàng, theo dõi thời gian thực và mạng lưới tuyến đường rộng khắp, chúng tôi giúp bạn dễ dàng gửi và nhận gói hàng cả trong nước và quốc tế. Chọn dịch vụ của chúng tôi để có trải nghiệm giao hàng liền mạch và hiệu quả.</p>
                                        </div>
                                        <div class="widget-content-inner">
                                            <p class="text-2 text_success">Thông Tin Đơn Hàng Của Bạn Đã Được Ghi Nhận:</p>
                                            <ul class="mt_20">
                                                <li>Mã Đơn Hàng : <span class="fw-7"><?= $ma_don_hang; ?></span></li>
                                                <li>Ngày Đặt : <span class="fw-7"> <?= $load_one_order_user['ngay_tao']; ?></span></li>
                                                <li>Tổng Tiền : <span class="fw-7 text-danger"><?= number_format($tong_tien, 0, ',', '.'); ?>đ</span></li>
                                                <li>Hình Thức Thanh Toán : <span class="fw-7">
                                                        <?php
                                                        if ($loai_thanh_toan == 0) {
                                                            echo "Thanh Toán Khi Nhận Hàng";
                                                        } else {
                                                            echo "Thanh Toán Trực Tiếp";
                                                        }
                                                        ?>
                                                    </span></li>
                                            </ul>
                                        </div>

                                    </div>
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