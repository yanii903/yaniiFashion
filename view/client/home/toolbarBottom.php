<div class="tf-toolbar-bottom type-1150">
    <!-- Menu -->
    <div class="toolbar-item">
        <a href="#toolbarShopmb" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
            <div class="toolbar-icon">
                <i class="icon-shop"></i>
            </div>
            <div class="toolbar-label">Sản Phẩm</div>
        </a>
    </div>

    <!-- Tìm Kiếm -->
    <div class="toolbar-item">
        <a href="?client=search">
            <div class="toolbar-icon">
                <i class="icon-search"></i>
            </div>
            <div class="toolbar-label">Tìm Kiếm</div>
        </a>
    </div>

    <!-- Tài Khoản -->
    <?php if (isset($_SESSION['userName'])) { ?>

        <?php if ($_SESSION['userName'] === "admin") { ?>
            <div class="toolbar-item">
                <a href="?action=admin&admin=home">
                    <img style="width: 45px; height: 45px; object-fit: cover; border-radius: 50%" src="/myProject/view/assets/be/images/avatar/<?php if (isset($load_one_account)) {
                                                                                                                                                    echo $load_one_account['hinh_anh'];
                                                                                                                                                } ?>" alt="">
                </a>
            </div>
        <?php } else { ?>
            <div class="toolbar-item">
                <a href="?client=myAccount&userId=<?= $_SESSION['userId'] ?>">
                    <img style="width: 45px; height: 45px; object-fit: cover; border-radius: 50%" src="/myProject/view/assets/be/images/avatar/<?php if (isset($load_one_account)) {
                                                                                                                                                    echo $load_one_account['hinh_anh'];
                                                                                                                                                } ?>" alt="">
                </a>
            </div>
        <?php } ?>

    <?php } else { ?>
        <div class="toolbar-item">
            <a href="?client=login">
                <div class="toolbar-icon">
                    <i class="icon-account"></i>
                </div>
                <div class="toolbar-label">Tài Khoản</div>
            </a>
        </div>
    <?php } ?>

    <!-- Yêu Thích -->
    <?php if (isset($_SESSION['userName'])) { ?>
        <div class="toolbar-item">
            <a href="?client=wishList&userId=<?= $_SESSION['userId']; ?>">
                <div class="toolbar-icon">
                    <i class="icon-heart"></i>
                </div>
                <div class="toolbar-label">Yêu Thích</div>
            </a>
        </div>
    <?php } else { ?>
        <div class="toolbar-item">
            <a href="?client=login">
                <div class="toolbar-icon">
                    <i class="icon-heart"></i>
                </div>
                <div class="toolbar-label">Yêu Thích</div>
            </a>
        </div>
    <?php } ?>

    <!-- Giỏ Hàng -->
    <?php if (isset($_SESSION['userName'])) { ?>
        <div class="toolbar-item">
            <a href="?client=detailCart&userId=<?= $_SESSION['userId']; ?>">
                <div class="toolbar-icon">
                    <i class="icon-bag"></i>
                </div>
                <div class="toolbar-label">Giỏ Hàng</div>
            </a>
        </div>
    <?php } else { ?>
        <div class="toolbar-item">
            <a href="?client=login">
                <div class="toolbar-icon">
                    <i class="icon-bag"></i>
                </div>
                <div class="toolbar-label">Giỏ Hàng</div>
            </a>
        </div>
    <?php } ?>
</div>