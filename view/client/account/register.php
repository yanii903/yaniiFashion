<?php if (!isset($_SESSION['userName'])) { ?>
    <?php include_once './view/client/home/top.php'; ?>

    <body class="preload-wrapper">
        <!-- RTL -->
        <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
        <!-- /RTL  -->

        <div id="wrapper">
            <!-- header -->
            <?php include_once './view/client/home/header.php'; ?>
            <!-- /header -->

            <!-- page-title -->
            <div class="tf-page-title style-2">
                <div class="container-full">
                    <div class="heading text-center">Đăng Kí</div>
                </div>
            </div>
            <!-- /page-title -->

            <section class="flat-spacing-10">
                <div class="container">
                    <div class="form-register-wrap">
                        <div class="flat-title align-items-start gap-0 mb_30 px-0">
                            <h5 class="mb_18">Đăng Kí</h5>
                            <p class="text_black-2">Đăng ký để có quyền truy cập website sớm cùng với các sản phẩm mới, xu hướng và khuyến mãi phù hợp.</p>
                        </div>
                        <div>
                            <form method="post" accept-charset="utf-8">
                                <div class="user">
                                    <div class="tf-field style-1">
                                        <input class="tf-field-input tf-input" value="<?php if (isset($name) && !empty($name)) echo $name; ?>" type="text" id="property3" name="name">
                                        <label style="margin-left: -7px;" class="tf-field-label fw-4 text_black-2" for="property3">Tên Đăng Nhập *</label>
                                    </div>

                                    <div class="tf-field style-1 mb_15">
                                        <?php if (!empty($messName)): ?>
                                            <i style="color: red;"><?php echo $messName; ?></i>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="email">
                                    <div class="tf-field style-1">
                                        <input class="tf-field-input tf-input" value="<?php if (isset($email) && !empty($email)) echo $email; ?>" type="text" id="property3" name="email">
                                        <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                                    </div>

                                    <div class="tf-field style-1 mb_15">
                                        <?php if (!empty($messEmail)): ?>
                                            <i style="color: red;"><?php echo $messEmail; ?></i>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="password">
                                    <div class="tf-field style-1">
                                        <input class="tf-field-input tf-input" value="<?php if (isset($password) && !empty($password)) echo $password; ?>" type="password" id="property4" name="password">
                                        <label class="tf-field-label fw-4 text_black-2" for="property4">Mật Khẩu *</label>
                                    </div>

                                    <div class="tf-field style-1 mb_15">
                                        <?php if (!empty($messPassword)): ?>
                                            <i style="color: red;"><?php echo $messPassword; ?></i>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="rePassword">
                                    <div class="tf-field style-1">
                                        <input class="tf-field-input tf-input" value="<?php if (isset($rePassword) && !empty($rePassword)) echo $rePassword; ?>" type="password" id="property4" name="rePassword">
                                        <label style="margin-left: -7px;" class="tf-field-label fw-4 text_black-2" for="property4">Nhập Lại Mật Khẩu *</label>
                                    </div>

                                    <div class="tf-field style-1 mb_15">
                                        <?php if (!empty($messRePassword)): ?>
                                            <i style="color: red;"><?php echo $messRePassword; ?></i>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="tf-field style-1 mb_15 card border-0 text-center">
                                    <?php if (!empty($messRegister)): ?>
                                        <i style="color: red;"><?php echo $messRegister; ?></i>
                                    <?php endif; ?>
                                </div>
                                <div class="mb_20">
                                    <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Đăng Kí</button>
                                </div>
                                <div class="text-center">
                                    <a href="?client=login" class="tf-btn btn-line">Bạn đã có tài khoản? Đăng nhập tại đây<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <?php include_once './view/client/home/footer.php'; ?>
            <!-- /Footer -->

        </div>

        <!-- gotop -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
            </svg>
        </div>
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

    <!-- Mirrored from themesflat.co/html/ecomus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:45:26 GMT -->

    </html>
<?php } else if (isset($_SESSION['userName'])) {
    $userId = $_SESSION['userId'];
    header("Location: ?client=home&userId=$userId");
    exit();
} ?>