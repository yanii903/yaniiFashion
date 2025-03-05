<?php
function load_all_product()
{
    $sql = "select * from san_pham";
    $list_product = pdo_query($sql);
    return $list_product;
}
// -----------------------------------------------------------------
function load_all_product_new() //8 sản phẩm mới nhất
{
    $sql = "SELECT * FROM san_pham ORDER BY id DESC LIMIT 8;";
    $list_product = pdo_query($sql);
    return $list_product;
}

function load_all_product_promotion() //sản phẩm khuyến mại
{
    $sql = "SELECT * FROM `san_pham` WHERE gia_giam < gia;";
    $list_product = pdo_query($sql);
    return $list_product;
}

function load_all_product_sex($sex) //sản phẩm theo giới tính
{
    $sql = "SELECT * FROM `san_pham` WHERE gioi_tinh = '$sex';";
    $list_product = pdo_query($sql);
    return $list_product;
}
// -----------------------------------------------------------------

function load_category_for_product($id_danh_muc)
{
    $sql = "select ten_danh_muc from danh_muc where id = '$id_danh_muc';";
    $one_category = pdo_query_one($sql);
    return $one_category;
}

function load_one_product($id)
{
    $sql = "select * from san_pham where id = '$id';";
    $one_product = pdo_query_one($sql);
    return $one_product;
}

function insert_product($id_san_pham, $name, $sex, $description, $price, $salePrice, $quantity, $upload, $category, $stock)
{
    $sql = "INSERT INTO `san_pham`(`id`, `id_san_pham`, `ten_san_pham`, `gioi_tinh`, `mo_ta`, `gia`, `gia_giam`, `so_luong`, `hinh_anh`, `id_danh_muc`, `id_co_phieu`, `ngay_tao`) 
    VALUES (null,'$id_san_pham','$name', '$sex', '$description','$price','$salePrice','$quantity','$upload','$category','$stock', CURRENT_TIMESTAMP);";
    pdo_execute($sql);
}

function update_quantity_product($id_don_hang) //cập nhật lại số lượng khi người dùng đặt đơn hàng
{
    $sql = "UPDATE san_pham sp
JOIN (
    SELECT id_san_pham, SUM(so_luong) AS total_quantity
    FROM don_hang_chi_tiet
    WHERE id_don_hang = $id_don_hang
    GROUP BY id_san_pham
) AS temp ON sp.id = temp.id_san_pham
SET sp.so_luong = sp.so_luong - temp.total_quantity;
";
    pdo_execute($sql);
}

function delete_product($id)
{
    $sql = "DELETE FROM `san_pham` WHERE id = '$id';";
    pdo_execute($sql);
}


function update_product($name, $sex, $description, $price, $salePrice, $quantity, $upload, $category, $stock, $id)
{
    // Xây dựng câu lệnh SQL
    if ($upload !== "") {
        // Nếu có upload hình ảnh mới
        $sql = "UPDATE `san_pham` SET 
            `ten_san_pham` = '$name',
            `gioi_tinh` = '$sex',
            `mo_ta` = '$description',
            `gia` = '$price',
            `gia_giam` = '$salePrice',
            `so_luong` = '$quantity',
            `hinh_anh` = '$upload',
            `id_danh_muc` = '$category',
            `id_co_phieu` = '$stock'
        WHERE `id` = '$id'";
    } else {
        // Nếu không upload hình ảnh mới
        $sql = "UPDATE `san_pham` SET 
            `ten_san_pham` = '$name',
            `gioi_tinh` = '$sex',
            `mo_ta` = '$description',
            `gia` = '$price',
            `gia_giam` = '$salePrice',
            `so_luong` = '$quantity',
            `id_danh_muc` = '$category',
            `id_co_phieu` = '$stock'
        WHERE `id` = '$id'";
    }

    // Thực thi câu lệnh SQL
    pdo_execute($sql);
}
