<?php if (isset($_SESSION['userName'])) { ?>
    <?php include_once './view/client/home/top.php'; ?>

    <body class="preload-wrapper">
        <!-- RTL -->
        <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
        <!-- /RTL  -->

        <div id="wrapper">
            <!-- Header -->
            <?php include_once "./view/client/home/header.php"; ?>
            <!-- /Header -->

            <!-- page-title -->
            <div class="tf-page-title">
                <div class="container-full">
                    <div class="heading text-center">Thông Tin Tài Khoản</div>
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
                                    <li><span class="my-account-nav-item active">Thông Tin Tài Khoản</span></li>
                                    <li><a href="?client=listOrder&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng</a></li>
                                    <li><a href="?client=listOrderConfirm&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Nhận</a></li>
                                    <li><a href="?client=listOrderDelete&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Hủy</a></li>
                                    <li><a href="?client=wishList&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Yêu Thích</a></li>
                                    <li><a href="?action=logout" class="my-account-nav-item">Đăng Xuất</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-9">
                            <div class="my-account-content account-edit">
                                <div class="">
                                    <form class="" id="form-password-change" method="POST" enctype="multipart/form-data">
                                        <h6 class="mb_20">Hình Ảnh Đại Diện (Kết Hợp Với Đổi Mật Khẩu Để Thay Đổi Ảnh Đại Diện)</h6>

                                        <div class="card text-center mb-3 p-3 border-2" style="display: flex; justify-content: center; align-items: center; border-style: dashed;">

                                            <!-- Ảnh thu nhỏ -->
                                            <div class="text-center">
                                                <img class="mb-3"
                                                    src="/myProject/view/assets/be/images/avatar/<?= $load_one_account['hinh_anh']; ?>"
                                                    alt="my avatar"
                                                    style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%; cursor: pointer;"
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

                                            <input type="file" name="upload" class="form-control">
                                        </div>

                                        <div class="tf-field style-1 mb_15">
                                            <input class="tf-field-input tf-input" value="<?= $ten_dang_nhap; ?>" type="text" id="property1" name="name" readonly>
                                            <label style="margin-left: -7px;" class="tf-field-label fw-4 text_black-2" for="property1">Tên Đăng Nhập</label>
                                        </div>
                                        <div class="tf-field style-1 mb_15">
                                            <input class="tf-field-input tf-input" value="<?= $email; ?>" type="email" id="property3" name="email" readonly>
                                            <label class="tf-field-label fw-4 text_black-2" for="property3">Email</label>
                                        </div>

                                        <h6 class="mb_20">Thay Đổi Mật Khẩu</h6>

                                        <div class="currentPassword">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" value="<?php if (isset($currentPassword) && !empty($currentPassword)) echo $currentPassword; ?>" type="password" id="property4" name="currentPassword">
                                                <label style="margin-left: -7px;" class="tf-field-label fw-4 text_black-2" for="property4">Mật Khẩu Hiện Tại *</label>
                                            </div>

                                            <div class="tf-field style-1 mb_15">
                                                <?php if (!empty($messCurrentPassword)): ?>
                                                    <i style="color: red;"><?php echo $messCurrentPassword; ?></i>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="newPassword">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" value="<?php if (isset($newPassword) && !empty($newPassword)) echo $newPassword; ?>" type="password" id="property4" name="newPassword">
                                                <label style="margin-left: -7px;" class="tf-field-label fw-4 text_black-2" for="property4">Nhập Lại Mật Khẩu *</label>
                                            </div>

                                            <div class="tf-field style-1 mb_15">
                                                <?php if (!empty($messNewPassword)): ?>
                                                    <i style="color: red;"><?php echo $messNewPassword; ?></i>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="reNewPassword">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" value="<?php if (isset($reNewPassword) && !empty($reNewPassword)) echo $reNewPassword; ?>" type="password" id="property4" name="reNewPassword">
                                                <label style="margin-left: -7px;" class="tf-field-label fw-4 text_black-2" for="property4">Nhập Lại Mật Khẩu *</label>
                                            </div>

                                            <div class="tf-field style-1 mb_15">
                                                <?php if (!empty($messReNewPassword)): ?>
                                                    <i style="color: red;"><?php echo $messReNewPassword; ?></i>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="tf-field style-1 mb_15 card border-0 text-center">
                                            <?php if (!empty($messAccount)): ?>
                                                <i style="color: red;"><?php echo $messAccount; ?></i>
                                            <?php endif; ?>
                                        </div>
                                        <div class="mb_20">
                                            <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Lưu Thay Đổi</button>
                                        </div>
                                    </form>
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