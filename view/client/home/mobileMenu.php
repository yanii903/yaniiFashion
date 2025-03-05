<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-one" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                        <span>Trang Chủ</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-one" class="collapse">
                        <ul class="sub-nav-menu sub-menu-level-2">
                            <li>
                                <?php if (isset($_SESSION['userName'])) { ?>
                                    <a href="?client=home&userId=<?= $_SESSION['userId']; ?>" class="sub-nav-link">Trở Về Trang Chủ</i></a>
                                <?php } else { ?>
                                    <a href="?client=home" class="sub-nav-link">Trang Chủ</i></a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-two" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                        <span>Danh Mục</span>
                        <span class="btn-open-sub"></span>
                    </a>

                    <div id="dropdown-menu-two" class="collapse">
                        <ul class="sub-nav-menu sub-menu-level-2">
                            <li><a href="?client=brand" class="sub-nav-link">Thương Hiệu</a></li>
                            <li><a href="?client=faq" class="sub-nav-link">FAQ</a></li>
                            <li><a href="?client=ourStore" class="sub-nav-link">Cửa Hàng Của Chúng Tôi</a></li>
                            <li><a href="?client=timeline" class="sub-nav-link">Dòng Thời Gian</a></li>

                            <?php if (isset($_SESSION['userName'])) { ?>
                                <li><a href="?client=invoice&userId=<?= $_SESSION['userId']; ?>" class="sub-nav-link">Tổng Hóa Đơn</a></li>
                            <?php } else { ?>
                                <li><a href="?client=login" class="sub-nav-link">Tổng Hóa Đơn</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                        <span>Bộ Sưu Tập</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-three" class="collapse">
                        <ul class="sub-nav-menu sub-menu-level-2">
                            <?php
                            $load_all_category_count_product = load_all_category_count_product();
                            foreach ($load_all_category_count_product as $category) {
                                extract($category);
                            ?>
                                <li><a href="?client=categoryChange&id=<?= $danh_muc_id; ?>" class="sub-nav-link"><?= $ten_danh_muc; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-four" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                        <span>Giới Thiệu</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-four" class="collapse">
                        <ul class="sub-nav-menu sub-menu-level-2" id="sub-menu-navigation">
                            <li><a href="?client=aboutUs" class="sub-nav-link">Giới Thiệu Website</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-five">
                        <span>Liên Hệ</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-five" class="collapse">
                        <ul class="sub-nav-menu sub-menu-level-2">
                            <li><a href="?client=contact" class="sub-nav-link">Liên Hệ Với Chúng Tôi</a></li>
                        </ul>
                    </div>

                </li>
                <?php if (isset($_SESSION['userName'])) { ?>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-six" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-six">
                            <span>Tài Khoản</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-six" class="collapse">
                            <ul class="sub-nav-menu sub-menu-level-2">
                                <li><a href="?client=myAccount&userId=<?= $_SESSION['userId'] ?>" class="sub-nav-link">Thông Tin Tài Khoản</a></li>
                                <li><a href="?client=listOrderConfirm&userId=<?= $_SESSION['userId'] ?>" class="sub-nav-link">Đơn Hàng Đã Nhận</a></li>
                                <li><a href="?client=listOrderDelete&userId=<?= $_SESSION['userId'] ?>" class="sub-nav-link">Đơn Hàng Đã Hủy</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="mb-other-content">
                <?php if (isset($_SESSION['userName'])) { ?>
                    <div class="d-flex group-icon">
                        <a href="?client=wishList&userId=<?= $_SESSION['userId'] ?>" class="site-nav-icon"><i class="icon icon-heart"></i>Yêu Thích</a>
                        <a href="?client=listOrder&userId=<?= $_SESSION['userId'] ?>" class="site-nav-icon"><i class="icon-check"></i>Đơn Hàng</a>
                    </div>
                <?php } ?>
                <div class="mb-notice">
                    <a href="?client=contact" class="text-need">Bạn Cần Giúp?</a>
                </div>
                <ul class="mb-info">
                    <li>Địa Chỉ: Tòa nhà FPT Polytechnic, phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội</li>
                    <li>Email: <b>quanpmph51798@gmail.com</b></li>
                    <li>Phone: <b>123456789</b></li>
                </ul>
            </div>
        </div>
        <div class="mb-bottom">
            <?php if (isset($_SESSION['userName'])) { ?>
                <a href="?action=logout" class="site-nav-icon"><i class="icon icon-account"></i>Đăng Xuất</a>
            <?php } else { ?>
                <a href="?client=login" class="site-nav-icon"><i class="icon icon-account"></i>Đăng Nhập</a>
            <?php } ?>
        </div>
    </div>
</div>