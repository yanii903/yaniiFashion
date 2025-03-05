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
                    <div class="heading text-center">Sản Phẩm Yêu Thích</div>
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
                                    <li><a href="?client=listOrder&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng</a></li>
                                    <li><a href="?client=listOrderConfirm&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Nhận</a></li>
                                    <li><a href="?client=listOrderDelete&userId=<?= $_SESSION['userId'] ?>" class="my-account-nav-item">Đơn Hàng Đã Hủy</a></li>
                                    <li><span class="my-account-nav-item active">Yêu Thích</span></li>
                                    <li><a href="?action=logout" class="my-account-nav-item">Đăng Xuất</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-9">
                            <section class="flat-spacing-2" style="margin-top: -47px;">
                                <div class="container">
                                    <div class="grid-layout wrapper-shop" data-grid="grid-4">
                                        <?php foreach ($load_all_wish_user as $product) {
                                            extract($product); ?>
                                            <div class="card-product fl-item">
                                                <div class="card-product-wrapper">

                                                    <?php if (isset($_SESSION['userName'])) { ?>
                                                        <a href="?client=detailProduct&userId=<?= $_SESSION['userId']; ?>&id=<?= $id; ?>" class="product-img">
                                                        <?php } else { ?>
                                                            <a href="?client=detailProduct&id=<?= $id; ?>" class="product-img">
                                                            <?php } ?>

                                                            <img class="lazyload img-product" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>">
                                                            <img class="lazyload img-hover" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>">

                                                            <div class="size-list">
                                                                <span>S</span>
                                                                <span>M</span>
                                                                <span>L</span>
                                                                <span>XL</span>
                                                            </div>
                                                            </a>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html" class="title link"><?= $ten_san_pham; ?></a>
                                                    <div class="d-flex mt-2">
                                                        <span class="price text-danger"><?= number_format($gia_giam, 0, ',', '.'); ?>đ</span><br>
                                                        <sup class="price color-black mx-2"><del><?= number_format($gia, 0, ',', '.'); ?>đ</del></sup>
                                                    </div>
                                                </div>
                                                <ul class="list-color-product">
                                                    <li class="list-color-item color-swatch border-gray border-2">
                                                        <span class="tooltip">Be</span>
                                                        <span class="swatch-value bg-color-beige"></span>
                                                    </li>
                                                    <li class="list-color-item color-swatch border-gray border-2">
                                                        <span class="tooltip">Đen</span>
                                                        <span class="swatch-value bg_dark"></span>
                                                    </li>
                                                    <li class="list-color-item color-swatch border-gray border-2">
                                                        <span class="tooltip">Xanh Dương</span>
                                                        <span class="swatch-value bg_blue"></span>
                                                    </li>
                                                    <li class="list-color-item color-swatch border-gray border-2">
                                                        <span class="tooltip">Trắng</span>
                                                        <span class="swatch-value bg_white"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </section>
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