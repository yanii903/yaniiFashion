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
                    <div class="heading text-center">Đăng Nhập</div>
                </div>
            </div>
            <!-- /page-title -->

            <!-- main -->
            <section class="flat-spacing-10">
                <div class="container">
                    <div class="tf-grid-layout lg-col-2 tf-login-wrap">
                        <div class="tf-login-form">

                            <!-- invisible -->
                            <div id="recover">
                                <h5 class="mb_24">Đặt lại mật khẩu của bạn</h5>
                                <p class="mb_30">Chúng tôi sẽ gửi cho bạn một mật khẩu mới sau khi bạn nhập email của bạn</p>
                                <div>
                                    <form class="" id="login-form" method="POST" accept-charset="utf-8">
                                        <div class="tf-field style-1 mb_15">
                                            <input class="tf-field-input tf-input" placeholder="" type="text" id="property3" name="email">
                                            <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                                        </div>
                                        <?php if (!empty($messEmail)): ?>
                                            <i style="color: red; margin-left: 5px;"><?php echo $messEmail; ?></i>
                                        <?php endif; ?>
                                        
                                        <div class="mt-2">
                                            <button type="submit" name="forgotPassword" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Đặt Lại Mật Khẩu</button>
                                        </div>
                                        <div class="mt-2">
                                            <a href="#login" class="tf-btn btn-line">Quay Lại</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /invisible -->

                            <div id="login">
                                <h5 class="mb_36">Đăng Nhập</h5>
                                <div>
                                    <form method="POST" id="login-form" accept-charset="utf-8">
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

                                        <div class="password">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" value="<?php if (isset($password) && !empty($password)) echo $password; ?>" type="password" id="property4" name="password">
                                                <label class="tf-field-label fw-4 text_black-2" for="property4">Mật Khẩu *</label>
                                            </div>

                                            <div class="tf-field style-1 mb_30">
                                                <?php if (!empty($messPassword)): ?>
                                                    <i style="color: red;"><?php echo $messPassword; ?></i>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="mb_20">
                                            <a href="#recover" class="tf-btn btn-line">Quên Mật Khẩu?</a>
                                        </div>
                                        <div class="">
                                            <button type="submit" name="login" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Đăng Nhập</button>
                                            <?php if (!empty($messLogin)): ?>
                                                <i style="color: red; margin-left: 5px;"><?php echo $messLogin; ?></i>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tf-login-content">
                            <h5 class="mb_36">Bạn Chưa Có Tài Khoản?</h5>
                            <p class="mb_20">Đăng ký để có quyền truy cập website sớm cùng với các sản phẩm mới, xu hướng và khuyến mãi phù hợp.</p>
                            <a href="?client=register" class="tf-btn btn-line">Đăng Ký<i class="icon icon-arrow1-top-left"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /main -->


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