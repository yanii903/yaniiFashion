<?php
function load_all_address()
{
    $sql = "SELECT * FROM `dia_chi`;";
    $list_cart = pdo_query($sql);
    return $list_cart;
}

function load_current_address($id_khach_hang)
{
    $sql = "SELECT * FROM `dia_chi` WHERE id_khach_hang = $id_khach_hang ORDER BY id desc LIMIT 1;";
    $list_cart = pdo_query_one($sql);
    return $list_cart;
}

function insert_address($id_khach_hang, $ten, $ho, $quoc_gia, $thanh_pho, $dia_chi, $so_dien_thoai, $email)
{
    $sql = "INSERT INTO `dia_chi`(`id`, `id_khach_hang`, `ten`, `ho`, `quoc_gia`, `thanh_pho`, `dia_chi`, `so_dien_thoai`, `email`) 
    VALUES (null,'$id_khach_hang','$ten','$ho','$quoc_gia','$thanh_pho','$dia_chi','$so_dien_thoai','$email');";
    pdo_execute($sql);
}
