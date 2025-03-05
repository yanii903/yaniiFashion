<?php

function quick_order_user($id_khach_hang, $so_luong, $mau_sac, $kich_co)
{
    $sql = "INSERT INTO `mua_ngay`(`id`, `id_khach_hang`, `so_luong`, `mau_sac`, `kich_co`) 
    VALUES (null,'$id_khach_hang','$so_luong','$mau_sac','$kich_co')";
    pdo_execute($sql);
}

function load_one_quick_order($id_khach_hang)
{
    $sql = "SELECT * FROM `mua_ngay` WHERE `id_khach_hang` = $id_khach_hang ORDER BY `id` DESC LIMIT 1;";
    $list_order = pdo_query_one($sql);
    return $list_order;
}

