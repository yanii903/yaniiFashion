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
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">
                    <?php if ($option == "Áo") {
                        echo "Tất Cả Áo";
                    } else if ($option == "Quần") {
                        echo "Tất Cả Quần";
                    } else {
                        echo $option;
                    }

                    ?>
                    -
                    <?= $sex; ?>
                </div>
            </div>
        </div>

        <section class="flat-spacing-1">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter display-none">
                        <a style="display: none;" href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">
                        <li class="tf-view-layout-switch sw-layout-2" data-value-grid="grid-2">
                            <div class="item"><span class="icon icon-grid-2"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3" data-value-grid="grid-3">
                            <div class="item"><span class="icon icon-grid-3"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4 active" data-value-grid="grid-4">
                            <div class="item"><span class="icon icon-grid-4"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-5" data-value-grid="grid-5">
                            <div class="item"><span class="icon icon-grid-5"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-6" data-value-grid="grid-6">
                            <div class="item"><span class="icon icon-grid-6"></span></div>
                        </li>
                    </ul>

                </div>

                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop"></div>
                    <div class="grid-layout wrapper-shop" data-grid="grid-4">

                        <?php foreach ($load_all_product_option as $product) {
                            extract($product); ?>
                            <div class="card-product fl-item">
                                <div class="card-product-wrapper">

                                    <?php if (isset($_SESSION['userName'])) { ?>
                                        <a href="?client=detailProduct&userId=<?= $_SESSION['userId']; ?>&id=<?= $id; ?>" class="product-img">
                                        <?php } else { ?>
                                            <a href="?client=detailProduct&id=<?= $id; ?>" class="product-img">
                                            <?php } ?>

                                            <img class="lazyload img-product" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="image-product">
                                            <img class="lazyload img-hover" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="image-product">

                                            <div class="size-list">
                                                <span>S</span>
                                                <span>M</span>
                                                <span>L</span>
                                                <span>XL</span>
                                            </div>
                                            </a>
                                </div>
                                <div class="card-product-info">
                                    <?php if (isset($_SESSION['userName'])) { ?>
                                        <a href="?client=detailProduct&userId=<?= $_SESSION['userId']; ?>&id=<?= $id; ?>" class="title link"><?= $ten_san_pham; ?></a>
                                    <?php } else { ?>
                                        <a href="?client=detailProduct&id=<?= $id; ?>" class="title link"> <?= $ten_san_pham; ?></a>
                                    <?php } ?>

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

            </div>
        </section>
        <!-- /page-title -->
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