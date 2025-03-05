<?php
function insert_wish($id_khach_hang, $id_san_pham)
{
    $sql = "INSERT INTO `yeu_thich`(`id`, `id_khach_hang`, `id_san_pham`, `ngay_them`)
    VALUES (null,'$id_khach_hang','$id_san_pham', CURRENT_TIMESTAMP);";
    pdo_execute($sql);
}

function load_wish_user($id_san_pham, $id_khach_hang)
{
    $sql = "SELECT IF(EXISTS(SELECT 1 FROM yeu_thich WHERE id_san_pham = $id_san_pham AND id_khach_hang = $id_khach_hang), 1, 0) AS is_favorite;";
    $list_order = pdo_query_one($sql);
    return $list_order;
}

function delete_wish($id_khach_hang, $id_san_pham)
{
    $sql = "DELETE FROM `yeu_thich` WHERE id_khach_hang = $id_khach_hang and id_san_pham = $id_san_pham;";
    pdo_execute($sql);
}

function load_all_wish_user($id_khach_hang)
{
    $sql = "SELECT sp.* FROM yeu_thich yt JOIN san_pham sp 
    ON yt.id_san_pham = sp.id WHERE yt.id_khach_hang = $id_khach_hang;";
    $list_order = pdo_query($sql);
    return $list_order;
}
