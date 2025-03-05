<?php
if (isset($_SESSION['userName'])) {
    $cart = load_one_cart($_SESSION['userId']);
    extract($cart);

    if ($id_khach_hang == $_SESSION['userId']) {
        $_SESSION['cartId'] = $id_gio_hang;
    }
}
?>

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

        <!-- main -->
        <!-- breadcrumb -->
        <?php if (isset($load_one_product)) {
            extract($load_one_product); ?>
            <div class="tf-breadcrumb">
                <div class="container">
                    <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                        <div class="tf-breadcrumb-list">
                            <a href="index.html" class="text">Trang Chủ</a>
                            <i class="icon icon-arrow-right"></i>
                            <a href="#" class="text"><?= $ten_san_pham; ?></a>
                            <i class="icon icon-arrow-right"></i>
                            <span class="text">Chi Tiết Sản Phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- default -->
            <section class="flat-spacing-4 pt_0">
                <div class="tf-main-product section-image-zoom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tf-product-media-wrap sticky-top">
                                    <div class="thumbs-slider">
                                        <!-- --------------------------------------------------------------- -->
                                        <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical">
                                            <div class="swiper-wrapper stagger-wrap">
                                                <!-- beige -->
                                                <div class="swiper-slide stagger-item" data-color="beige">
                                                    <div class="item">
                                                        <img class="lazyload" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="img-product">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- --------------------------------------------------------------- -->
                                        <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                            <div class="swiper-wrapper">
                                                <!-- main-image -->
                                                <div class="swiper-slide" data-color="beige">
                                                    <a href="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                                        <img class="tf-image-zoom lazyload" data-zoom="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="">
                                                    </a>
                                                </div>
                                                <!-- /main-image -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- --------------------------------------------------------------- -->
                            <div class="col-md-6">
                                <div class="tf-product-info-wrap position-relative">
                                    <div class="tf-zoom-main"></div>
                                    <div class="tf-product-info-list other-image-zoom">
                                        <div class="tf-product-info-title">
                                            <h5><?= $ten_san_pham; ?></h5>
                                        </div>
                                        <div class="tf-product-info-badges">
                                            <div class="badges">Sản Phẩm Hot</div>
                                            <div class="product-status-content">
                                                <i class="icon-lightning"></i>
                                                <p class="fw-6">Mua nhanh! Số Lượng Có Hạn Chỉ Dành Cho Những Người Nhanh Nhất.</p>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-price">
                                            <div class="text-danger fs-3"><?= number_format($gia_giam, 0, ',', '.'); ?>đ</div>
                                            <div class="compare-at-price"><?= number_format($gia, 0, ',', '.'); ?>đ</div>

                                            <?php if ($gia_giam < $gia) { ?>
                                                <div class="badges-on-sale"><span>Khuyến Mại</span></div>
                                            <?php } ?>

                                        </div>
                                        <div class="tf-product-info-liveview">
                                            <p class="fw-6">Số Lượng Sản Phẩm Còn</p>
                                            <div class="liveview-count"><?= $so_luong; ?></div>
                                        </div>
                                        <div class="tf-product-info-variant-picker">
                                            <div>
                                                Giới Tính: <span class="fw-6"><?= $gioi_tinh; ?></span>
                                            </div>
                                            <!-- --------------------------------------------------------------------------------------------------- -->
                                            <div class="variant-picker-item">
                                                <div class="variant-picker-label">
                                                    Màu: <span class="fw-6 variant-picker-label-value value-currentColor show-color">Be</span>
                                                </div>
                                                <div class="variant-picker-values">
                                                    <input id="values-beige" type="radio" name="color1" checked>
                                                    <label class="hover-tooltip radius-60 color-btn" for="values-beige" value="Be">
                                                        <span class="btn-checkbox bg-color-beige border-black border-1"></span>
                                                        <span class="tooltip">Be</span>
                                                    </label>

                                                    <input id="values-black" type="radio" name="color1">
                                                    <label class="hover-tooltip radius-60 color-btn" for="values-black" value="Đen">
                                                        <span class="btn-checkbox bg-color-black border-black border-1"></span>
                                                        <span class="tooltip">Đen</span>
                                                    </label>

                                                    <input id="values-blue" type="radio" name="color1">
                                                    <label class="hover-tooltip radius-60 color-btn" for="values-blue" value="Xanh Dương">
                                                        <span class="btn-checkbox bg-color-blue border-black border-1"></span>
                                                        <span class="tooltip">Xanh Dương</span>
                                                    </label>

                                                    <input id="values-white" type="radio" name="color1">
                                                    <label class="hover-tooltip radius-60 color-btn" for="values-white" value="Trắng">
                                                        <span class="btn-checkbox bg-color-white border-black border-1"></span>
                                                        <span class="tooltip">Trắng</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- --------------------------------------------------------------------------------------------------- -->
                                            <div class="variant-picker-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="variant-picker-label">
                                                        Kích Cỡ: <span class="fw-6 variant-picker-label-value show-size">S</span>
                                                    </div>
                                                    <a href="#find_size" data-bs-toggle="modal" class="find-size fw-6">Tìm kiếm kích cỡ phù hợp.</a>
                                                </div>
                                                <div class="variant-picker-values">
                                                    <input type="radio" id="values-s" name="size1" value="S">
                                                    <label class="style-text size-btn" for="values-s">
                                                        <p>S</p>
                                                    </label>
                                                    <input type="radio" id="values-m" name="size1" value="M">
                                                    <label class="style-text size-btn" for="values-m">
                                                        <p>M</p>
                                                    </label>
                                                    <input type="radio" id="values-l" name="size1" value="L">
                                                    <label class="style-text size-btn" for="values-l">
                                                        <p>L</p>
                                                    </label>
                                                    <input type="radio" id="values-xl" name="size1" value="XL">
                                                    <label class="style-text size-btn" for="values-xl">
                                                        <p>XL</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tf-product-info-quantity">
                                            <div class="quantity-title fw-6">Số Lượng</div>
                                            <div class="wg-quantity">

                                                <?php if ($so_luong > 0) { ?>
                                                    <span class="btn-quantity btn-down">-</span>
                                                <?php } else { ?>
                                                    <span class="btn-quantity">-</span>
                                                <?php  } ?>

                                                <input type="text" class="quantity-product" name="number" value="<?= $so_luong == 0 ? '0' : '1'; ?>" min="1" max="<?= $so_luong; ?>" <?php if ($so_luong == 0) echo "disabled"; ?>>

                                                <?php if ($so_luong > 0) { ?>
                                                    <span class="btn-quantity btn-up">+</span>
                                                <?php } else { ?>
                                                    <span class="btn-quantity">+</span>
                                                <?php  } ?>

                                            </div>
                                        </div>
                                        <div class="tf-product-info-buy-button">
                                            <form method="POST">
                                                <?php if (isset($_SESSION['userName'])) { ?>
                                                    <?php if ($so_luong == 0) { ?>
                                                        <p class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn">
                                                            <span>Không Thể Thêm Vào Giỏ Hàng</span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <button name="addCart" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn">
                                                            <span>Thêm Vào Giỏ Hàng -&nbsp;</span>
                                                            <span class="price"><?= number_format(intval($gia_giam), 0, ',', '.'); ?>đ</span>
                                                        </button>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if ($so_luong == 0) { ?>
                                                        <p class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn">
                                                            <span>Không Thể Thêm Vào Giỏ Hàng</span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <a href="?client=login" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn">
                                                            <span>Thêm Vào Giỏ Hàng -&nbsp;</span>
                                                            <span class="price"><?= number_format(intval($gia_giam), 0, ',', '.'); ?>đ</span>
                                                        </a>
                                                    <?php } ?>
                                                <?php } ?>

                                                <input type="hidden" name="color" id="color" value="be">
                                                <input type="hidden" name="size" id="size" value="S">
                                                <input type="hidden" name="quantity" id="quantity" value="1">
                                                <input type="hidden" name="price" id="price" value="<?= $gia_giam ?>">

                                                <?php if (isset($_SESSION['userName'])) { ?>

                                                    <?php
                                                    $load_wish_user = load_wish_user($id, $_SESSION['userId']);
                                                    extract($load_wish_user);
                                                    if ($is_favorite == 0) {
                                                    ?>
                                                        <a href="?client=addWishList&userId=<?= $_SESSION['userId'] ?>&id=<?= $id; ?>" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Thêm Vào Yêu Thích</span>
                                                        </a>
                                                    <?php } else if ($is_favorite == 1) { ?>
                                                        <a href="?client=deleteWishList&userId=<?= $_SESSION['userId'] ?>&id=<?= $id; ?>" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist">
                                                            <span class="icon icon-delete"></span>
                                                            <span class="tooltip">Xóa Khỏi Yêu Thích</span>
                                                        </a>
                                                    <?php } ?>

                                                <?php } else { ?>
                                                    <a href="?client=login" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Thêm Vào Yêu Thích</span>
                                                        <span class="icon icon-delete"></span>
                                                    </a>
                                                <?php } ?>

                                                <?php if (isset($_SESSION['userName'])) { ?>
                                                    <?php if ($so_luong == 0) { ?>
                                                        <div class="w-100">
                                                            <p class="btns-full border-0">
                                                                Không Thể Mua <img src="/myProject/view/assets/fe/images/payments/paypal.png" alt="">
                                                            </p>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="w-100">
                                                            <button name="quickOrder" class="btns-full border-0">
                                                                Mua Ngay <img src="/myProject/view/assets/fe/images/payments/paypal.png" alt="">
                                                            </button>
                                                        </div>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if ($so_luong == 0) { ?>
                                                        <div class="w-100">
                                                            <p class="btns-full border-0">
                                                                Không Thể Mua <img src="/myProject/view/assets/fe/images/payments/paypal.png" alt="">
                                                            </p>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="w-100">
                                                            <a href="?client=login" class="btns-full border-0">
                                                                Mua Ngay <img src="/myProject/view/assets/fe/images/payments/paypal.png" alt="">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </form>

                                        </div>

                                        <!-- Script -->
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                var gia_giam = <?= $gia_giam ?>; // Lấy giá từ PHP và gán vào biến gia_giam

                                                // Lấy phần tử hiển thị tên màu và kích cỡ
                                                var colorLabel = document.querySelector('.show-color');
                                                var sizeLabel = document.querySelector('.show-size');

                                                // Lấy thẻ input màu và kích cỡ để lưu giá trị
                                                var colorInput = document.querySelector('input[name="color"]');
                                                var sizeInput = document.querySelector('#size');

                                                // Lấy tất cả các radio button màu sắc và kích cỡ
                                                var colorRadioButtons = document.querySelectorAll('input[name="color1"]');
                                                var sizeRadioButtons = document.querySelectorAll('input[name="size1"]');

                                                // Lặp qua từng radio button màu sắc để gán sự kiện
                                                colorRadioButtons.forEach(function(button) {
                                                    button.addEventListener('change', function() {
                                                        // Lấy giá trị màu sắc từ thuộc tính "value" của label tương ứng
                                                        var selectedColor = document.querySelector('input[name="color1"]:checked').nextElementSibling.getAttribute('value');

                                                        // Cập nhật tên màu vào phần tử có class 'value-currentColor'
                                                        colorLabel.textContent = selectedColor;

                                                        // Gán giá trị vào thẻ input màu
                                                        colorInput.value = selectedColor.toLowerCase(); // Chuyển tên màu thành chữ thường
                                                    });
                                                });

                                                // Lặp qua từng radio button kích cỡ để gán sự kiện
                                                sizeRadioButtons.forEach(function(button) {
                                                    button.addEventListener('change', function() {
                                                        // Lấy giá trị kích cỡ từ thuộc tính "value" của radio button được chọn
                                                        var selectedSize = document.querySelector('input[name="size1"]:checked').value;

                                                        // Cập nhật tên kích cỡ vào phần tử có class 'variant-picker-label-value'
                                                        sizeLabel.textContent = selectedSize;

                                                        // Gán giá trị vào thẻ input kích cỡ
                                                        sizeInput.value = selectedSize;
                                                    });
                                                });


                                                // Thêm sự kiện cho nút tăng số lượng
                                                $(".btn-up").on("click", function() {
                                                    var input = $('.quantity-product');
                                                    var quantity = parseInt(input.val());
                                                    var maxQuantity = parseInt(input.attr('max'));

                                                    if (!isNaN(quantity) && (!maxQuantity || quantity < maxQuantity)) {
                                                        // Nếu không vượt quá max
                                                        input.val(quantity + 1); // Tăng số lượng
                                                        updateTotalPrice(); // Cập nhật tổng tiền
                                                    }
                                                });

                                                // Thêm sự kiện cho nút giảm số lượng
                                                $(".btn-down").on("click", function() {
                                                    var input = $('.quantity-product');
                                                    var quantity = parseInt(input.val());
                                                    var minQuantity = parseInt(input.attr('min')) || 1; // Nếu không có min, mặc định là 1

                                                    if (!isNaN(quantity) && quantity > minQuantity) {
                                                        input.val(quantity - 1); // Giảm số lượng
                                                        updateTotalPrice(); // Cập nhật tổng tiền
                                                    }
                                                });


                                                // Cập nhật tổng tiền
                                                function updateTotalPrice() {
                                                    var quantity = parseInt($('.quantity-product').val());
                                                    var totalPrice = gia_giam * quantity;

                                                    // Cập nhật hiển thị tổng tiền trong thẻ <span class="price">
                                                    $(".price").text(totalPrice.toLocaleString('vi-VN') + "đ");

                                                    // Cập nhật giá trị trong trường hidden để gửi lên server
                                                    $('#quantity').val(quantity); // Cập nhật số lượng vào input hidden
                                                    $('#price').val(totalPrice); // Cập nhật tổng tiền vào input hidden
                                                }
                                            });
                                        </script>

                                        <div class="tf-product-info-extra-link">
                                            <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-question"></i>
                                                </div>
                                                <div class="text fw-6">Đặt câu hỏi</div>
                                            </a>
                                            <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="currentColor">
                                                        <path d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="text fw-6">Giao & Trả hàng</div>
                                            </a>
                                            <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-share"></i>
                                                </div>
                                                <div class="text fw-6">Chia Sẻ</div>
                                            </a>
                                        </div>
                                        <div class="tf-product-info-delivery-return">
                                            <div class="row">
                                                <div class="col-xl-6 col-12">
                                                    <div class="tf-product-delivery">
                                                        <div class="icon">
                                                            <i class="icon-delivery-time"></i>
                                                        </div>
                                                        <p>Ước tính thời gian giao hàng: <span class="fw-7">4-5 ngày</span> (Quốc tế), <span class="fw-7">1-2 ngày</span> (Việt Nam).</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-12">
                                                    <div class="tf-product-delivery mb-0">
                                                        <div class="icon">
                                                            <i class="icon-return-order"></i>
                                                        </div>
                                                        <p>Trả lại trong vòng <span class="fw-7">30 ngày</span> mua hàng. Thuế không được hoàn lại.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-trust-seal">
                                            <div class="tf-product-trust-mess">
                                                <i class="icon-safe"></i>
                                                <p class="fw-6">Đảm bảo an toàn <br> Thanh toán</p>
                                            </div>
                                            <div class="tf-payment">
                                                <img src="/myProject/view/assets/fe/images/payments/visa.png" alt="">
                                                <img src="/myProject/view/assets/fe/images/payments/img-1.png" alt="">
                                                <img src="/myProject/view/assets/fe/images/payments/img-2.png" alt="">
                                                <img src="/myProject/view/assets/fe/images/payments/img-3.png" alt="">
                                                <img src="/myProject/view/assets/fe/images/payments/img-4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        <?php } ?>
        <!-- /default -->

        <!-- tabs -->
        <section class="flat-spacing-17 pt_0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="widget-tabs style-has-border">
                            <ul class="widget-menu-tab">
                                <li class="item-title active">
                                    <span class="inner">Mô Tả</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Đánh Giá</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Vận Chuyển</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Bảo Quản</span>
                                </li>
                            </ul>
                            <div class="widget-content-tab">
                                <div class="widget-content-inner active">
                                    <div class="">
                                        <p class="mb_30">
                                            <?= $mo_ta; ?>
                                        </p>
                                        <div class="tf-product-des-demo">
                                            <div class="d-block">
                                                <h3 class="fs-16 fw-5">Hướng Dẫn Bảo Quản:</h3>
                                                <div class="d-flex gap-10 mb_15 align-items-center">
                                                    <div class="icon">
                                                        <i class="icon-machine"></i>
                                                    </div>
                                                    <span>Giặt máy tối đa 30ºC. Quay ngắn.</span>
                                                </div>
                                                <div class="d-flex gap-10 mb_15 align-items-center">
                                                    <div class="icon">
                                                        <i class="icon-iron"></i>
                                                    </div>
                                                    <span>Bàn ủi tối đa 110ºC.</span>
                                                </div>
                                                <div class="d-flex gap-10 mb_15 align-items-center">
                                                    <div class="icon">
                                                        <i class="icon-bleach"></i>
                                                    </div>
                                                    <span>Không tẩy trắng / tẩy trắng.</span>
                                                </div>
                                                <div class="d-flex gap-10 mb_15 align-items-center">
                                                    <div class="icon">
                                                        <i class="icon-dry-clean"></i>
                                                    </div>
                                                    <span>Không giặt khô.</span>
                                                </div>
                                                <div class="d-flex gap-10 align-items-center">
                                                    <div class="icon">
                                                        <i class="icon-tumble-dry"></i>
                                                    </div>
                                                    <span>Nhào khô, vò trung bình.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <div class="tab-reviews write-cancel-review-wrap">
                                        <div class="tab-reviews-heading">
                                            <div class="top">
                                                <div class="text-center">
                                                    <h1 class="number fw-6"><?= $get_average_rating; ?></h1>
                                                    <div class="list-star">
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                    </div>
                                                    <p>(<?= $comment_count; ?> Lượt Đánh Giá)</p>
                                                </div>
                                                <div class="rating-score">
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">5</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: <?= $five_stars_percentage; ?>%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1"><?= $five_stars; ?></div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">4</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: <?= $four_stars_percentage; ?>%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1"><?= $four_stars; ?></div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">3</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: <?= $three_stars_percentage; ?>%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1"><?= $three_stars; ?></div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">2</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: <?= $two_stars_percentage; ?>%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1"><?= $two_stars; ?></div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">1</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: <?= $one_star_percentage; ?>%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1"><?= $one_star; ?></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div>
                                                <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Quay Lại</div>
                                                <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Đánh Giá</div>
                                            </div>
                                        </div>
                                        <div class="reply-comment cancel-review-wrap">
                                            <div class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                                <h5 class=""><?= $comment_count; ?> Lượt Đánh Giá</h5>
                                            </div>
                                            <div class="reply-comment-wrap">

                                                <?php foreach ($load_all_comment_product as $comment) {
                                                    extract($comment);
                                                ?>
                                                    <div class="reply-comment-item">
                                                        <div class="user">
                                                            <div class="image">
                                                                <img src="/myProject/view/assets/be/images/avatar/<?= $hinh_anh; ?>" alt="">
                                                            </div>
                                                            <div>
                                                                <h6>
                                                                    <a href="#" class="link"><?= $tieu_de; ?></a>
                                                                </h6>
                                                                <div class="day text_black-3"><?= $ngay_tao; ?></div>
                                                            </div>
                                                        </div>
                                                        <p class="text_black-3"><?= $noi_dung; ?></p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <form class="form-write-review write-review-wrap" method="POST">
                                            <div class="heading">
                                                <h5>Mức Độ Hài Lòng:</h5>
                                                <div class="list-rating-check">
                                                    <input type="radio" id="star5" name="rate" value="5" />
                                                    <label for="star5" title="text"></label>
                                                    <input type="radio" id="star4" name="rate" value="4" />
                                                    <label for="star4" title="text"></label>
                                                    <input type="radio" id="star3" name="rate" value="3" />
                                                    <label for="star3" title="text"></label>
                                                    <input type="radio" id="star2" name="rate" value="2" />
                                                    <label for="star2" title="text"></label>
                                                    <input type="radio" id="star1" name="rate" value="1" />
                                                    <label for="star1" title="text"></label>
                                                </div>
                                            </div>
                                            <div class="form-content">
                                                <fieldset class="box-field">
                                                    <label class="label">Tiêu Đề</label>
                                                    <input type="text" placeholder="Viết Tiêu Đề Của Bạn" name="title" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <fieldset class="box-field">
                                                    <label class="label">Nội Dung</label>
                                                    <textarea rows="4" placeholder="Viết Nội Dung Của Bạn Ở Đây" name="content" tabindex="2" aria-required="true" required=""></textarea>
                                                </fieldset>
                                                <div class="box-check">
                                                    <input type="checkbox" name="availability" class="tf-check" id="check1" onchange="toggleSubmitButton()">
                                                    <label class="text_black-3" for="check1">Tôi Đồng Ý Tuân Thủ Quy Tắc Cộng Đồng Và Tôn Trọng Mọi Người.</label>
                                                </div>
                                            </div>

                                            <?php if (isset($_SESSION['userName'])) { ?>
                                                <div class="button-submit">
                                                    <button class="tf-btn btn-fill animate-hover-btn disabled" name="comment" type="submit" id="submitBtn" disabled>Gửi Đi</button>
                                                </div>
                                            <?php } else { ?>
                                                <div class="button-submit">
                                                    <a href="?client=login" class="tf-btn btn-fill animate-hover-btn disabled" id="submitBtn1">Gửi Đi</a>
                                                </div>
                                            <?php } ?>

                                            <style>
                                                .disabled {
                                                    opacity: 0.5;
                                                    /* Làm mờ nút hoặc link */
                                                    pointer-events: none;
                                                    /* Vô hiệu hóa hành động click */
                                                    cursor: not-allowed;
                                                    /* Con trỏ không khả dụng */
                                                }

                                                .enabled {
                                                    opacity: 1;
                                                    /* Hiển thị rõ */
                                                    pointer-events: auto;
                                                    /* Kích hoạt hành động click */
                                                    cursor: pointer;
                                                    /* Con trỏ chỉ tay */
                                                }
                                            </style>

                                            <script>
                                                function toggleSubmitButton() {
                                                    const checkbox = document.getElementById('check1');
                                                    const submitButton = document.getElementById('submitBtn'); // Nút button
                                                    const submitLink = document.getElementById('submitBtn1'); // Link a

                                                    if (checkbox.checked) {
                                                        if (submitButton) {
                                                            submitButton.disabled = false;
                                                            submitButton.classList.remove('disabled');
                                                            submitButton.classList.add('enabled');
                                                        }
                                                        if (submitLink) {
                                                            submitLink.classList.remove('disabled');
                                                            submitLink.classList.add('enabled');
                                                        }
                                                    } else {
                                                        if (submitButton) {
                                                            submitButton.disabled = true;
                                                            submitButton.classList.remove('enabled');
                                                            submitButton.classList.add('disabled');
                                                        }
                                                        if (submitLink) {
                                                            submitLink.classList.remove('enabled');
                                                            submitLink.classList.add('disabled');
                                                        }
                                                    }
                                                }
                                            </script>

                                        </form>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <div class="tf-page-privacy-policy">
                                        <div class="title">Chính sách Công ty TNHH Tư nhân</div>
                                        <p>Công ty TNHH Tư nhân và mỗi công ty con, công ty mẹ và công ty liên kết tương ứng của họ được coi là vận hành Trang web này ("chúng tôi") nhận ra rằng bạn quan tâm đến cách thông tin về bạn được sử dụng và chia sẻ. Chúng tôi đã tạo ra Chính sách Bảo mật này để thông báo cho bạn những thông tin chúng tôi thu thập trên Trang web, cách chúng tôi sử dụng thông tin của bạn và các lựa chọn của bạn về cách thông tin của bạn được thu thập và sử dụng. Vui lòng đọc kỹ Chính sách bảo mật này. Việc bạn sử dụng Trang web cho thấy rằng bạn đã đọc và chấp nhận các thông lệ bảo mật của chúng tôi, như được nêu trong Chính sách Bảo mật này.</p>
                                        <p>Xin lưu ý rằng các thông lệ được mô tả trong Chính sách Bảo mật này áp dụng cho thông tin được thu thập bởi chúng tôi hoặc các công ty con, chi nhánh hoặc đại lý của chúng tôi: (i) thông qua Trang web này, (ii) nếu có, thông qua Bộ phận Dịch vụ Khách hàng của chúng tôi liên quan đến Trang web này, (iii) thông qua thông tin được cung cấp cho chúng tôi tại các cửa hàng bán lẻ miễn phí của chúng tôi và (iv) thông qua thông tin được cung cấp cho chúng tôi cùng với các chương trình khuyến mãi tiếp thị và rút thăm trúng thưởng.</p>
                                        <p>Chúng tôi không chịu trách nhiệm về nội dung hoặc thực tiễn bảo mật trên bất kỳ trang web nào.</p>
                                        <p>Chúng tôi có quyền, theo quyết định riêng của mình, sửa đổi, cập nhật, bổ sung, ngừng lại, loại bỏ hoặc thay đổi bất kỳ phần nào của Chính sách Bảo mật này, toàn bộ hoặc một phần, bất kỳ lúc nào. Khi chúng tôi sửa đổi Chính sách quyền riêng tư này, chúng tôi sẽ sửa đổi ngày "cập nhật lần cuối" nằm ở đầu Chính sách quyền riêng tư này.</p>
                                        <p>Nếu bạn cung cấp thông tin cho chúng tôi hoặc truy cập hoặc sử dụng Trang web theo bất kỳ cách nào sau khi Chính sách bảo mật này đã được thay đổi, bạn sẽ được coi là đã đồng ý và đồng ý vô điều kiện với những thay đổi đó. Phiên bản mới nhất của Chính sách Bảo mật này sẽ có sẵn trên Trang web và sẽ thay thế tất cả các phiên bản trước đó của Chính sách Bảo mật này.</p>
                                        <p>Nếu bạn có bất kỳ câu hỏi nào liên quan đến Chính sách Bảo mật này, bạn nên liên hệ với Bộ phận Dịch vụ Khách hàng của chúng tôi qua email theo địa chỉ quanpmph51798@gmail.com</p>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <ul class="d-flex justify-content-center mb_18">
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="">
                                            <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                                <path fill="currentColor"
                                                    d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z">
                                                </path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <p class="text-center text-paragraph">LT01: 70% wool, 15% polyester, 10% polyamide, 5% acrylic 900 Grms/mt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /tabs -->

        <!-- product -->
        <section class="flat-spacing-1 pt_0">
            <div class="container">
                <div class="flat-title">
                    <span class="title">Cớ Thể Bạn Sẽ Thích</span>
                </div>

                <div class="hover-sw-nav hover-sw-2">
                    <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                        <div class="swiper-wrapper">
                            <?php foreach ($list_all_product as $product) {
                                extract($product); ?>
                                <div class="swiper-slide" lazy="true">
                                    <div class="card-product">
                                        <div class="card-product-wrapper">
                                            <?php if (isset($_SESSION['userName'])) { ?>
                                                <a href="?client=detailProduct&userId=<?= $_SESSION['userId']; ?>&id=<?= $id; ?>" class="product-img">
                                                <?php } else { ?>
                                                    <a href="?client=detailProduct&id=<?= $id; ?>" class="product-img">
                                                    <?php } ?>

                                                    <img class="lazyload img-product" data-src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="image-product">
                                                    <img class="lazyload img-hover" data- src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="image-product">

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
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /product -->
        <!-- /main -->

        <!-- Footer -->
        <?php include_once "./view/client/home/footer.php"; ?>
        <!-- /Footer -->

    </div>

    <!-- modal ask_question -->
    <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="ask_question">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Đặt câu hỏi</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="overflow-y-auto">
                    <form method="POST">
                        <fieldset class="">
                            <label for="">Tên *</label>
                            <input type="text" placeholder="" class="" name="name" tabindex="2" value=""
                                aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <label for="">Email *</label>
                            <input type="email" placeholder="" class="" name="email" tabindex="2" value=""
                                aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <label for="">Số Điện Thoại</label>
                            <input type="number" placeholder="" class="" name="phone" tabindex="2" value=""
                                aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <label for="">Nội Dung</label>
                            <textarea name="message" rows="4" placeholder="" class="" tabindex="2" aria-required="true"
                                required=""></textarea>
                        </fieldset>
                        <button type="submit" name="question" class="tf-btn w-100 btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Gủi Đi</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal ask_question -->

    <!-- modal delivery_return -->
    <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="delivery_return">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Vận chuyển & Giao hàng</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="overflow-y-auto">
                    <div class="tf-product-popup-delivery">
                        <div class="title">Giao hàng</div>
                        <p class="text-paragraph">Tất cả các đơn đặt hàng được vận chuyển bằng VNPOST.</p>
                        <p class="text-paragraph">Luôn miễn phí vận chuyển cho các đơn hàng.</p>
                        <p class="text-paragraph">Tất cả các đơn đặt hàng được vận chuyển với mã đơn hàng.</p>
                    </div>
                    <div class="tf-product-popup-delivery">
                        <div class="title">Trả Hàng</div>
                        <p class="text-paragraph">Các mặt hàng được trả lại trong vòng 14 ngày kể từ ngày giao hàng ban đầu của chúng trong cùng một
                            vì điều kiện mới sẽ đủ điều kiện để được hoàn lại toàn bộ tiền hoặc tín dụng cửa hàng.</p>
                        <p class="text-paragraph">Tiền hoàn lại sẽ được tính lại vào hình thức thanh toán ban đầu được sử dụng cho
                            mua.</p>
                        <p class="text-paragraph">Khách hàng chịu trách nhiệm về phí vận chuyển khi đổi trả và
                            Phí vận chuyển/xử lý của giao dịch mua ban đầu không được hoàn lại.</p>
                        <p class="text-paragraph">Tất cả các mặt hàng giảm giá là mua cuối cùng.</p>
                    </div>
                    <div class="tf-product-popup-delivery">
                        <div class="title">Trợ Giúp</div>
                        <p class="text-paragraph">Hãy liên hệ chúng tôi nếu bạn có bất kỳ câu hỏi hoặc thắc mắc nào khác.</p>
                        <p class="text-paragraph">Email: <a href="mailto:contact@domain.com"
                                aria-describedby="a11y-external-message"><span
                                    class="__cf_email__">quanpmph51798@gmail.com</span></a></p>
                        <p class="text-paragraph mb-0">Số Điện Thoại: +1 (23) 456 789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal delivery_return -->

    <!-- modal share social -->
    <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="share_social">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Chia Sẻ</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="overflow-y-auto" style="margin-top: -30px;">
                    <form class="form-share" method="post" accept-charset="utf-8">
                        <fieldset>
                            <!-- Input chứa link để sao chép -->
                            <input type="text" id="shareLink" value="http://localhost:81/myProject/?client=detailProduct&id=<?= $id; ?>" tabindex="0" aria-required="true" readonly>
                        </fieldset>
                        <div class="button-submit">
                            <!-- Nút sao chép -->
                            <button id="copyButton" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button" onclick="copyToClipboard()">Sao Chép</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal share social -->

    <script>
        function copyToClipboard() {
            // Lấy giá trị từ input
            var copyText = document.getElementById("shareLink");

            // Chọn nội dung trong input
            copyText.select();
            copyText.setSelectionRange(0, 99999); // Cho phép chọn tất cả trên mobile

            // Sao chép vào clipboard
            document.execCommand("copy");

            // Thay đổi nội dung nút thành "Đã Sao Chép"
            var copyButton = document.getElementById("copyButton");
            copyButton.textContent = "Đã Sao Chép"; // Thay đổi nội dung nút
        }
    </script>


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