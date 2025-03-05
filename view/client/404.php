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
            <section class="page-404-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="image">
                                <img src="/myProject/view/assets/fe/images/item/404.svg" alt="">
                            </div>
                            <div class="title">
                                Rất tiếc... Liên kết đã bị hỏng hoặc không tồn tại.
                            </div>
                            <p>Xin lỗi vì sự bất tiện. Truy cập trang chủ của chúng tôi để xem các sản phẩm mới nhất của chúng tôi.</p>
                            <a href="?client=home&userId=<?= $_SESSION['userId']; ?>" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Trang Chủ</a>
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
<?php } else { ?>
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
            <section class="page-404-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="image">
                                <img src="/myProject/view/assets/fe/images/item/404.svg" alt="">
                            </div>
                            <div class="title">
                                Rất tiếc... Liên kết đã bị hỏng hoặc không tồn tại.
                            </div>
                            <p>Xin lỗi vì sự bất tiện. Truy cập trang chủ của chúng tôi để xem các sản phẩm mới nhất của chúng tôi.</p>
                            <a href="?client=home" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Trang Chủ</a>
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
<?php } ?>