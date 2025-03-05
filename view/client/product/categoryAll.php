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
                <div class="heading text-center">Tất Cả Danh Mục</div>
            </div>
        </div>
        <!-- /page-title -->
        <section class="flat-spacing-1">
            <div class="container">
                <div class="tf-grid-layout lg-col-3 tf-col-2">
                    <!-- Nam -->
                    <div class="collection-item hover-img">
                        <div class="collection-inner">
                            <a href="?client=categoryChange&option=male" class="collection-image img-style">
                                <img class="lazyload" data-src="/myProject/view/assets/fe/images/collections/nam.jpg" src="/myProject/view/assets/fe/images/collections/nam.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="?client=categoryChange&option=male" class="tf-btn collection-title hover-icon"><span>Nam</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Nữ -->
                    <div class="collection-item hover-img">
                        <div class="collection-inner">
                            <a href="?client=categoryChange&option=female" class="collection-image img-style">
                                <img class="lazyload" data-src="/myProject/view/assets/fe/images/collections/nu.jpg" src="/myProject/view/assets/fe/images/collections/nu.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="?client=categoryChange&option=female" class="tf-btn collection-title hover-icon"><span>Nữ</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Khuyến Mại -->
                    <div class="collection-item hover-img">
                        <div class="collection-inner">
                            <a href="?client=promotion" class="collection-image img-style">
                                <img class="lazyload" data-src="/myProject/view/assets/fe/images/collections/khuyen_mai.jpg" src="/myProject/view/assets/fe/images/collections/khuyen_mai.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="?client=promotion" class="tf-btn collection-title hover-icon"><span>Khuyến Mại</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $load_all_category_count_product = load_all_category_count_product();

                    foreach ($load_all_category_count_product as $category) {
                        extract($category); ?>
                        <div class="collection-item hover-img">
                            <div class="collection-inner">
                                <a href="?client=categoryChange&id=<?= $danh_muc_id; ?>" class="collection-image img-style">
                                    <img class="lazyload" data-src="/myProject/view/assets/be/images/category/<?= $hinh_anh; ?>" src="/myProject/view/assets/be/images/category/<?= $hinh_anh; ?>" alt="collection-img">
                                </a>
                                <div class="collection-content">
                                    <a href="?client=categoryChange&id=<?= $danh_muc_id; ?>" class="tf-btn collection-title hover-icon"><span><?= $ten_danh_muc; ?></span><i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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