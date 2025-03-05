<?php
function load_all_cart()
{
    $sql = "select * from gio_hang";
    $list_cart = pdo_query($sql);
    return $list_cart;
}

function load_one_cart($id_nguoi_dung)
{
    $sql = "SELECT * FROM `gio_hang` WHERE id_khach_hang = '$id_nguoi_dung';";
    return pdo_query_one($sql);
}

function load_one_cart_user($id_khach_hang)
{
    $sql = "SELECT gh.id_gio_hang,gh.id_khach_hang, ghct.id AS id_gio_hang_ct, ghct.id_san_pham, ghct.so_luong,
    ghct.mau_sac, ghct.kich_co, ghct.gia AS gia_chi_tiet, sp.id AS id_san_pham, sp.ten_san_pham, 
    sp.so_luong as so_luong_san_pham, sp.gia_giam, sp.hinh_anh
    FROM gio_hang gh INNER JOIN gio_hang_chi_tiet ghct ON gh.id_gio_hang = ghct.id_gio_hang
    INNER JOIN san_pham sp ON ghct.id_san_pham = sp.id WHERE gh.id_khach_hang = $id_khach_hang;";
    $list_cart = pdo_query($sql);
    return $list_cart;
}

function update_cart_quantity($id_khach_hang)
{
    // Thực hiện truy vấn SQL để cập nhật số lượng và tổng tiền của sản phẩm trong giỏ hàng
    $sql = "UPDATE gio_hang_chi_tiet ghct INNER JOIN san_pham sp ON ghct.id_san_pham = sp.id
    INNER JOIN gio_hang gh ON gh.id_gio_hang = ghct.id_gio_hang SET ghct.so_luong = sp.so_luong, ghct.gia = 0
    WHERE gh.id_khach_hang = $id_khach_hang AND ghct.so_luong > sp.so_luong;";
    // Thực thi truy vấn
    pdo_execute($sql);
}

function delete_cart_quantity()
{
    // Thực hiện truy vấn SQL để xoá sản phẩm có số lượng = 0 trong giỏ hàng
    $sql = "DELETE FROM `gio_hang_chi_tiet` WHERE so_luong = 0;";
    // Thực thi truy vấn
    pdo_execute($sql);
}

function count_cart_user($id_khach_hang) //đếm tất cả sản phẩm có trong giỏ hàng
{
    $sql = "SELECT COUNT(ghct.id_san_pham) AS total_products FROM gio_hang gh
    INNER JOIN gio_hang_chi_tiet ghct ON gh.id_gio_hang = ghct.id_gio_hang
    WHERE gh.id_khach_hang = $id_khach_hang;";
    return pdo_query_one($sql);
}

function total_price($id_khach_hang)
{
    $sql = "SELECT 
    SUM(ghct.so_luong * sp.gia_giam) AS tong_gia_tat_ca FROM gio_hang gh INNER JOIN 
    gio_hang_chi_tiet ghct ON gh.id_gio_hang = ghct.id_gio_hang INNER JOIN 
    san_pham sp ON ghct.id_san_pham = sp.id WHERE gh.id_khach_hang = $id_khach_hang;";
    return pdo_query_one($sql);
}

function load_all_cart_detail()
{
    $sql = "SELECT * FROM `gio_hang_chi_tiet`;";
    $list_cart = pdo_query($sql);
    return $list_cart;
}

function quantityUp($id, $tong_tien)
{
    $sql = "UPDATE `gio_hang_chi_tiet` SET so_luong = so_luong + 1, gia = $tong_tien WHERE id = $id";
    pdo_execute($sql);
}

function quantityDown($id, $tong_tien)
{
    $sql = "UPDATE `gio_hang_chi_tiet` SET so_luong = so_luong - 1, gia = $tong_tien WHERE id = $id";
    pdo_execute($sql);
}

function insert_cart($id_khach_hang)
{
    $sql = "INSERT INTO `gio_hang`(`id_gio_hang`, `id_khach_hang`, `ngay_tao`) 
    VALUES (null,'$id_khach_hang',CURRENT_TIMESTAMP)";
    pdo_execute($sql);
}

function insert_cartDetail($id_gio_hang, $id_san_pham, $so_luong, $mau_sac, $kich_co, $gia_giam)
{
    $sql = "INSERT INTO `gio_hang_chi_tiet`(`id`, `id_gio_hang`, `id_san_pham`, `so_luong`, `mau_sac`, `kich_co`, `gia`) 
    VALUES (null,'$id_gio_hang','$id_san_pham','$so_luong','$mau_sac','$kich_co','$gia_giam')";
    pdo_execute($sql);
}

//  kiểm tra xem sản phẩm tồn tại trong giỏ hàng chưa, nếu có thì cộng số lượng, tổng tiền
function update_cart_detail($id, $new_so_luong, $new_tong_tien)
{
    // Thực hiện truy vấn SQL để cập nhật số lượng và tổng tiền của sản phẩm trong giỏ hàng
    $sql = "UPDATE gio_hang_chi_tiet SET so_luong = '$new_so_luong', gia = '$new_tong_tien' WHERE id = '$id';";
    // Thực thi truy vấn
    pdo_execute($sql);
}
// ---------------------------------------------------------

function delete_cart_detail($cartDetailId)
{
    $sql = "DELETE FROM `gio_hang_chi_tiet` WHERE id = '$cartDetailId';";
    pdo_execute($sql);
}
