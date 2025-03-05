<!-- Header -->
<header id="header" class="header-default header-style-2">
    <div class="main-header line">
        <div class="container-full px_15 lg-px_40">
            <div class="row wrapper-header align-items-center">
                <div class="col-xl-5 tf-md-hidden">
                    <div class="tf-cur">
                        <div>
                            <select class="image-select center style-default type-currencies">
                                <option data-thumbnail="/myProject/view/assets/fe/images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                            </select>
                        </div>
                        <div>
                            <select class="image-select center style-default type-languages">
                                <option><span>Tiếng Việt</span></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-3 tf-lg-hidden">
                    <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                            <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-6 text-center">

                    <?php if (isset($_SESSION['userName'])) { ?>
                        <a href="?client=home&userId=<?= $_SESSION['userId']; ?>" class="logo-header">
                            <img src="/myProject/view/assets/fe/images/logo/yanii-banner.png" alt="logo" class="logo">
                        </a>
                    <?php } else { ?>
                        <a href="?client=home" class="logo-header">
                            <img src="/myProject/view/assets/fe/images/logo/yanii-banner.png" alt="logo" class="logo">
                        </a>
                    <?php } ?>
                </div>

                <div class="col-xl-5 col-md-4 col-3">
                    <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                        <!-- ---------------------------------------------------------------------------------- -->
                        <?php if (isset($_SESSION['userName'])) { ?>
                            <!-- ---------------------------------------------------------------------------------- -->

                            <?php if ($_SESSION['userName'] === "admin") { ?>
                                <li class="nav-account">
                                    <a href="?action=admin&admin=home">
                                        <div style="width: 30px; height: 30px; border-radius: 50%; overflow: hidden;">
                                            <img style="width: 30px; height: 30px; object-fit: cover;" src="/myProject/view/assets/be/images/avatar/<?php if (isset($load_one_account)) {
                                                                                                                                                        echo $load_one_account['hinh_anh'];
                                                                                                                                                    } ?>" alt="">
                                        </div>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-account">
                                    <a href="?client=myAccount&userId=<?= $_SESSION['userId'] ?>">
                                        <div style="width: 30px; height: 30px; border-radius: 50%; overflow: hidden;">
                                            <img style="width: 30px; height: 30px; object-fit: cover;" src="/myProject/view/assets/be/images/avatar/<?php if (isset($load_one_account)) {
                                                                                                                                                        echo $load_one_account['hinh_anh'];
                                                                                                                                                    } ?>" alt="">
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>

                            <!-- ---------------------------------------------------------------------------------- -->

                            <!-- <li class="nav-account"><a href="?action=logout" class="nav-icon-item"><i class="icon icon-logout"></i></a></li> -->
                        <?php } else { ?>
                            <li class="nav-account"><a href="?action=client&client=login" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                        <?php } ?>
                        <!-- ---------------------------------------------------------------------------------- -->
                        <li class="nav-search"><a href="?client=search" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>

                        <?php if (isset($_SESSION['userName'])) { ?>
                            <li class="nav-wishlist"><a href="?client=wishList&userId=<?= $_SESSION['userId']; ?>" class="nav-icon-item"><i class="icon icon-heart"></i></a></li>
                        <?php } else { ?>
                            <li class="nav-wishlist"><a href="?client=login" class="nav-icon-item"><i class="icon icon-heart"></i></a></li>
                        <?php } ?>
                        <!-- ------------------------------------------------------------------- -->
                        <?php if (isset($_SESSION['userName'])) { ?>
                            <li class="nav-cart"><a href="?client=detailCart&userId=<?= $_SESSION['userId']; ?>" class="nav-icon-item"><i class="icon icon-bag"></i></a></li>
                        <?php } else { ?>
                            <li class="nav-cart"><a href="?client=login" class="nav-icon-item"><i class="icon icon-bag"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom line tf-md-hidden">
        <div class="container-full px_15 lg-px_40">
            <div class="wrapper-header d-flex justify-content-center align-items-center">
                <nav class="box-navigation text-center">
                    <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">
                        <li class="menu-item">
                            <?php if (isset($_SESSION['userName'])) { ?>
                                <a href="?client=home&userId=<?= $_SESSION['userId']; ?>" class="item-link">Trang Chủ</i></a>
                            <?php } else { ?>
                                <a href="?client=home" class="item-link">Trang Chủ</i></a>
                            <?php } ?>
                        </li>
                        <li class="menu-item position-relative">
                            <p class="item-link" style="cursor: pointer;">Danh Mục</p>
                            <div class="sub-menu submenu-default">
                                <ul class="menu-list">
                                    <li><a href="?client=brand" class="menu-link-text link text_black-2 position-relative">Thương Hiệu</a></li>
                                    <li><a href="?client=faq" class="menu-link-text link text_black-2 position-relative">FAQ</a></li>
                                    <li><a href="?client=ourStore" class="menu-link-text link text_black-2 position-relative">Cửa Hàng Của Chúng Tôi</a></li>
                                    <li><a href="?client=timeline" class="menu-link-text link text_black-2 position-relative">Dòng Thời Gian</a></li>

                                    <?php if (isset($_SESSION['userName'])) { ?>
                                        <li><a href="?client=invoice&userId=<?= $_SESSION['userId'] ?>" class="menu-link-text link text_black-2 position-relative">Tổng Chi Tiêu</a></li>
                                    <?php } else { ?>
                                        <li><a href="?client=login" class="menu-link-text link text_black-2 position-relative">Tổng Chi Tiêu</a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <p class="item-link" style="cursor: pointer;">Sản Phẩm</p>
                            <div class="sub-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">Áo Nam</div>
                                                <ul class="menu-list">
                                                    <li><a href="?client=productChange&sex=male&option=Tất Cả Áo Nam" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/tat-ca-ao-nam-png.jpg" alt="" width="40px">Tất Cả Áo</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Thun" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-thun-nam-webp.jpg" alt="" width="40px">Áo Thun</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Polo" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-polo-nam-webp.jpg" alt="" width="40px">Áo Polo</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Sơ Mi" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-somi-nam-1-png-prpc.jpg" alt="" width="40px">Áo Sơ Mi</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Tank Top" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/tanktop-png.jpg" alt="" width="40px">Áo Tank Top</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Len" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-len-png.jpg" alt="" width="40px">Áo Len</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Nỉ" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-ni-nam-png.jpg" alt="" width="40px">Áo Nỉ</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Khoác" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-khoac-nam-png.jpg" alt="" width="40px">Áo Khoác</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Áo Vest" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-vest-nam-png.jpg" alt="" width="40px">Áo Vest</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">Quần Nam</div>
                                                <ul class="menu-list">
                                                    <li><a href="?client=productChange&sex=male&option=Tất Cả Quần Nam" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/tat-ca-quan-nam-png.jpg" alt="" width="40px">Tất Cả Quần</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Quần Jean" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-jean-png.jpg" alt="" width="40px">Quần Jean</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Quần Tây" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-vai-png.jpg" alt="" width="40px">Quần Tây</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Quần Kaki" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-kaki-png.jpg" alt="" width="40px">Quần Kaki</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Quần Jogger" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-jogger-png.jpg" alt="" width="40px">Quần Jogger</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Quần Nỉ" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-jogger-png.jpg" alt="" width="40px">Quần Nỉ</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Quần Short" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-short-nam-png.jpg" alt="" width="40px">Quần Short</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Đồ Lót" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/do-lot-nam-png.jpg" alt="" width="40px">Đồ Lót</a></li>
                                                    <li><a href="?client=productChange&sex=male&option=Phụ Kiện" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/phu-kien-png.jpg" alt="" width="40px">Phụ Kiện</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">Áo Nữ</div>
                                                <ul class="menu-list">
                                                    <li><a href="?client=productChange&sex=female&option=Tất Cả Áo Nữ" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/tat-ca-ao-nu-png.jpg" alt="" width="40px">Tất Cả Áo</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Áo Thun" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-thun-png.jpg" alt="" width="40px">Áo Thun</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Áo Sơ Mi" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-so-mi-png.jpg" alt="" width="40px">Áo Sơ Mi</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Áo Tank Top" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-tank-top-png.jpg" alt="" width="40px">Áo Tank Top</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Áo Len" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-len-nu-png.jpg" alt="" width="40px">Áo Len</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Áo Nỉ" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-sweater-png.jpg" alt="" width="40px">Áo Nỉ</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Áo Vest" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/ao-khoac-nu-png.jpg" alt="" width="40px">Áo Vest</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Đầm" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/dam-nu-png.jpg" alt="" width="40px">Đầm</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">Quần Nữ</div>
                                                <ul class="menu-list">
                                                    <li><a href="?client=productChange&sex=female&option=Tất Cả Quần Nữ" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/tat-ca-quan-nu-png.jpg" alt="" width="40px">Tất Cả Quần</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Quần Jean" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-jean-png.jpg" alt="" width="40px">Quần Jean</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Quần Tây" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-vai-nu-png.jpg" alt="" width="40px">Quần Tây</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Quần Kaki" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-kaki-nu-png.jpg" alt="" width="40px">Quần Kaki</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Quần Nỉ" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-jogger-nu-png.jpg" alt="" width="40px">Quần Nỉ</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Quần Short" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/quan-short-nu-png.jpg" alt="" width="40px">Quần Short</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Chân Váy" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/chan-vay-png.jpg" alt="" width="40px">Chân Váy</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Đồ Lót" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/do-lot-nu-png.jpg" alt="" width="40px">Đồ Lót</a></li>
                                                    <li><a href="?client=productChange&sex=female&option=Phụ Kiện" class="menu-link-text link"><img style="margin-right: 5px;" src="/myProject/view/assets/fe/images/logoChange/phu-kien-png.jpg" alt="" width="40px">Phụ Kiện</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="menu-heading">Giảm Giá</div>

                                            <div class="hover-sw-nav hover-sw-2">
                                                <div dir="ltr" class="swiper tf-product-header">
                                                    <div class="swiper-wrapper">

                                                        <?php
                                                        $list_all_product_promotion = load_all_product_promotion();

                                                        foreach ($list_all_product_promotion as $promotion) {
                                                            extract($promotion);
                                                        ?>
                                                            <div class="swiper-slide" lazy="true">
                                                                <div class="card-product">

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
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <div class="nav-sw nav-next-slider nav-next-product-header box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                                <div class="nav-sw nav-prev-slider nav-prev-product-header box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="?client=aboutUs" class="item-link">Giới Thiệu</i></a>
                        </li>
                        <li class="menu-item">
                            <a href="?client=contact" class="item-link">Liên Hệ</i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
<!-- /Header -->