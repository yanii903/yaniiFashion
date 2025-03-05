<!-- Sale Product -->
<section class="flat-spacing-17">
    <div class="container">
        <div class="flat-animate-tab">
            <ul class="widget-tab-3 d-flex justify-content-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                <li class="nav-tab-item" role="presentation">
                    <a href="#bestSeller" class="active" data-bs-toggle="tab">Sản Phẩm Mới</a>
                </li>

                <li class="nav-tab-item" role="presentation">
                    <a href="#onSale" data-bs-toggle="tab">Giảm Giá</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="bestSeller" role="tabpanel">
                    <div class="grid-layout loadmore-item" data-grid="grid-4">
                        <!-- card product bestSeller -->
                        <?php foreach ($list_all_product_new as $product) {
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
                        <!-- /card product bestSeller -->
                    </div>
                    <div class="tf-pagination-wrap view-more-button text-center">
                        <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">Thêm</span></button>
                    </div>
                </div>
                <div class="tab-pane" id="onSale" role="tabpanel">
                    <div class="grid-layout loadmore-item3" data-grid="grid-4">
                        <!-- card product onSale -->
                        <?php foreach ($list_all_product_promotion as $product) {
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
                        <!-- card product onSale -->

                    </div>
                    <div class="tf-pagination-wrap view-more-button3 text-center">
                        <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore3"><span class="text">Thêm</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Sale Product -->