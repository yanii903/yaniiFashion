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