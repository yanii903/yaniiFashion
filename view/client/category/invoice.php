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

            <!-- thả layout ở đây -->
            <!-- page-title -->
            <div class="tf-page-title style-2">
                <div class="container-full">
                    <div class="heading text-center">Tổng Chi Tiêu</div>
                </div>
            </div>
            <!-- /page-title -->

            <section class="invoice-section">
                <div class="cus-container2">
                    <div class="box-invoice">
                        <div class="header">
                            <div class="wrap-top">
                                <div class="box-left">
                                    <!-- Ảnh thu nhỏ -->
                                    <div>
                                        <img class="mb-3"
                                            src="/myProject/view/assets/be/images/avatar/<?= $load_one_account['hinh_anh']; ?>"
                                            alt="my avatar"
                                            style="width: 70px; height: 70px; object-fit: cover; border-radius: 50%; cursor: pointer;"
                                            data-bs-toggle="modal" data-bs-target="#imageModal">
                                    </div>

                                    <!-- Modal hiển thị ảnh -->
                                    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <!-- Ảnh trong modal -->
                                                <div class="modal-body text-center">
                                                    <img src="/myProject/view/assets/be/images/avatar/<?= $load_one_account['hinh_anh']; ?>"
                                                        alt="full image"
                                                        style="width: auto; max-width: 100%; border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-right">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="title"><?= $ten_dang_nhap; ?></div>
                                        <span class="code-num"><?= $id_tai_khoan; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-date">
                                <div class="box-left">
                                    <label for="">Ngày Tạo Tài Khoản:</label>
                                    <span class="date"><?= $ngay_tao; ?></span>
                                </div>
                                <div class="box-right">
                                    <label for="">Tổng Đơn Hàng:</label>
                                    <span class="date">03/10/2024</span>
                                </div>
                            </div>
                            <div class="wrap-table-invoice">
                                <table class="invoice-table">
                                    <thead>
                                        <tr class="title">
                                            <th>Khách Hàng</th>
                                            <th>Tổng Tiền</th>
                                            <th>Trạng Thái</th>
                                            <th>Mã Đơn Hàng</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($tong_chi_tieu)) {
                                            foreach ($tong_chi_tieu  as $invoice) {
                                                extract($invoice);
                                        ?>
                                                <tr class="content">
                                                    <td><?= "$ho " . $ten; ?></td>
                                                    <td><?= number_format($tong_tien, 0, ',', '.'); ?>đ</td>
                                                    <td><?= $trang_thai; ?></td>
                                                    <td><?= $ma_don_hang; ?></td>
                                                </tr>
                                        <?php }
                                        } ?>

                                        <tr class="content">
                                            <td class="total">Tổng Chi Tiêu</td>
                                            <td></td>
                                            <td></td>
                                            <td class="total"><?= number_format($tong_tien_tich_luy, 0, ',', '.'); ?>đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="footer">
                            <ul class="box-contact">
                                <li>yaniifashion.wuaze.com</li>
                                <li><?= $email; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /thả layout ở đây -->

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