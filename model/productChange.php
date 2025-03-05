<?php
function load_all_product_option($sex, $option) //hiển thị danh sách sản phẩm mà người dùng chọn ở menu
{
    $sql = "SELECT * FROM `san_pham` WHERE gioi_tinh = '$sex' AND ten_san_pham LIKE '%$option%';";
    $list_product = pdo_query($sql);
    return $list_product;
}

function load_all_product_category($id) //hiển thị danh sách sản phẩm có trong danh mục
{
    $sql = "SELECT dm.ten_danh_muc, sp.* FROM danh_muc dm
    JOIN san_pham sp ON dm.id = sp.id_danh_muc WHERE sp.id_danh_muc = '$id';";
    $list_product = pdo_query($sql);
    return $list_product;
}
