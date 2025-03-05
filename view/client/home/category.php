<!-- Collection -->
<section class="flat-spacing-12 bg_grey-3">
    <div class="container">
        <div class="flat-title flex-row justify-content-between align-items-center px-0 wow fadeInUp" data-wow-delay="0s">
            <h3 class="title">Bộ Sưu Tập Bốn Mùa</h3>
            <a href="?client=categoryAll" class="tf-btn btn-line">Xem Tất Cả Danh Mục<i class="icon icon-arrow1-top-left"></i></a>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div dir="ltr" class="swiper tf-sw-collection" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="50" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                <div class="swiper-wrapper">
                    <?php foreach ($load_all_category_count_product as $category) {
                        extract($category); ?>
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-circle hover-img">
                                <a href="?client=categoryChange&id=<?= $danh_muc_id; ?>" class="collection-image img-style card border-1">
                                    <img class="lazyload" data-src="/myProject/view/assets/be/images/category/<?= $hinh_anh; ?>" alt="Logo Category">
                                </a>
                                <div class="collection-content text-center">
                                    <a href="shop-collection-sub.html" class="link title fw-5"><?= $ten_danh_muc; ?></a>
                                    <div class="count"><?= $so_luong_san_pham; ?> Sản Phẩm</div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="sw-dots style-2 sw-pagination-collection justify-content-center"></div>
            <div class="nav-sw nav-next-slider nav-next-collection"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-collection"><span class="icon icon-arrow-right"></span></div>
        </div>
    </div>
</section>
<!-- /Collection -->