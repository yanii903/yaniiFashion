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