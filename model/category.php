<?php

function load_all_category()
{
    $sql = "SELECT * FROM `danh_muc`;";
    $list_category = pdo_query($sql);
    return $list_category;
} 

function load_all_category_count_product()//đếm số lượng sản phâm trong danh mục
{
    $sql = "SELECT dm.id AS danh_muc_id, dm.ten_danh_muc, dm.hinh_anh, COUNT(sp.id) AS so_luong_san_pham 
    FROM danh_muc dm LEFT JOIN san_pham sp ON dm.id = sp.id_danh_muc GROUP BY dm.id, dm.ten_danh_muc;";
    $list_category = pdo_query($sql);
    return $list_category;
} 

function load_one_category($id)
{
    $sql = "SELECT * FROM `danh_muc` WHERE id = '$id';";
    $one_category = pdo_query_one($sql);
    return $one_category;
} 

function insert_category($name, $upload)
{
    $sql = "INSERT INTO `danh_muc`(`id`, `ten_danh_muc`, `hinh_anh`, `ngay_tao`) 
    VALUES (null,'$name','$upload', CURRENT_TIMESTAMP);";
    pdo_execute($sql);
} 

function update_category($name, $upload, $id)
{

    if ($upload !== "") {
        $sql = "UPDATE `danh_muc` 
        SET `ten_danh_muc`='$name',
        `hinh_anh`='$upload' WHERE id = '$id';";
    } else {
        $sql = "UPDATE `danh_muc` 
        SET `ten_danh_muc`='$name'
        WHERE id = '$id';";
    }
    pdo_execute($sql);
} 

function delete_category($id)
{
    $sql = "DELETE FROM `danh_muc` where id = '$id';";
    pdo_execute($sql);
}
