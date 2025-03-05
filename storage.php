if ($userId == $_SESSION['userId']) {

} else {
header("Location: ?action=logout");
exit();
}

UPDATE gio_hang_chi_tiet ghct
INNER JOIN san_pham sp ON ghct.id_san_pham = sp.id
INNER JOIN gio_hang gh ON gh.id_gio_hang = ghct.id_gio_hang
SET ghct.so_luong = sp.so_luong, ghct.gia = 0
WHERE gh.id_khach_hang = 15
AND ghct.so_luong > sp.so_luong;

<form method="POST">
    <?php if (isset($_SESSION['userName'])) { ?>

        <?php if ($so_luong == 0) { ?>
            <p class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Không Thể Thêm Vào Giỏ Hàng</span> </p>
        <?php } else { ?>
            <button name="addCart" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Thêm Vào Giỏ Hàng -&nbsp;</span>
                <span class="price"><?= number_format(intval($gia_giam), 0, ',', '.'); ?>đ</span></button>
        <?php } ?>

    <?php } else { ?>

        <?php if ($so_luong == 0) { ?>
            <p class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Không Thể Thêm Vào Giỏ Hàng</span> </p>
        <?php } else { ?>
            <a href="?client=login" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"></a>
            <span>Thêm Vào Giỏ Hàng -&nbsp;</span><span class="price"><?= number_format(intval($gia_giam), 0, ',', '.'); ?>đ</span>
        <?php } ?>

    <?php } ?>
    <input type="hidden" name="color" id="color" value="be">
    <input type="hidden" name="size" id="size" value="S">
    <input type="hidden" name="quantity" id="quantity" value="1">
    <input type="hidden" name="price" id="price" value="<?= $gia_giam ?>">
    <!-- <span>Thêm Vào Giỏ Hàng -&nbsp;</span>
    <span class="price"><?= number_format(intval($gia_giam), 0, ',', '.'); ?>đ</span> -->

    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
        <span class="icon icon-heart"></span>
        <span class="tooltip">Thêm Vào Yêu Thích</span>
        <span class="icon icon-delete"></span>
    </a>

    <div class="w-100">
        <button name="quickOrder" class="btns-full border-0">Mua Ngay <img src="/myProject/view/assets/fe/images/payments/paypal.png" alt=""></button>
    </div>
</form>


case 'detailProduct':
$load_one_account = load_one_account($userId);

if (isset($_SESSION['userName'])) {
$load_one_cart_user = load_one_cart_user($_SESSION['userId']);
}

$load_one_product = load_one_product($id); // Lấy thông tin chi tiết sản phẩm
$list_all_product = load_all_product(); // Lấy danh sách tất cả sản phẩm
$tong_tien = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Lấy dữ liệu từ POST
$id_san_pham = $id; // ID sản phẩm từ URL
$id_nguoi_dung = $userId; // User ID từ URL
$so_luong = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1; // Mặc định là 1 nếu không nhập
$mau_sac = isset($_POST['color']) ? $_POST['color'] : ''; // Mặc định là chuỗi rỗng nếu không nhập
$kich_co = isset($_POST['size']) ? $_POST['size'] : ''; // Mặc định là chuỗi rỗng nếu không nhập
$tong_tien = isset($_POST['price']) ? floatval($_POST['price']) : 0; // Mặc định là 0 nếu không nhập

// Lấy danh sách giỏ hàng của người dùng
$cart_items = load_one_cart_user($id_nguoi_dung);

// Biến kiểm tra
$is_existing = false;

foreach ($cart_items as $item) {
if ($item['mau_sac'] === $mau_sac && $item['kich_co'] === $kich_co && $item['id_san_pham'] == $id_san_pham) {
// Nếu sản phẩm đã tồn tại với màu sắc và kích cỡ giống nhau
$is_existing = true;
$new_so_luong = $item['so_luong'] + $so_luong; // Cộng dồn số lượng
$new_tong_tien = $item['gia_chi_tiet'] * $new_so_luong; // Tính lại tổng tiền

// Cập nhật giỏ hàng
update_cart_detail($item['id_gio_hang_ct'], $new_so_luong, $new_tong_tien);
break; // Dừng vòng lặp
}
}

if (!$is_existing) {
// Nếu không tìm thấy sản phẩm trùng, thêm mới sản phẩm vào giỏ hàng
insert_cartDetail($_SESSION['cartId'], $id_san_pham, $so_luong, $mau_sac, $kich_co, $tong_tien);
}

// Chuyển hướng sau khi xử lý
header("Location: ?client=detailCart&userId=$id_nguoi_dung");
exit();
}

// Hiển thị trang chi tiết sản phẩm
include './view/client/product/detail.php';
break;



<!-- Sale Product -->
<section class="flat-spacing-17">
    <div class="container">
        <div class="flat-animate-tab">
            <div class="tab-content">
                <div class="tab-pane active show" role="tabpanel">
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
                        <!-- /card product bestSeller -->
                    </div>
                    <div class="tf-pagination-wrap view-more-button text-center">
                        <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">Thêm</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Sale Product -->


