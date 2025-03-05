<?php

function load_all_account()
{
    // Sửa lại truy vấn để JOIN bảng account với bảng role
    $sql = "SELECT account.*, role.ten_vai_tro FROM tai_khoan account JOIN vai_tro role ON account.id_vai_tro  = role.id;";
    $list_account = pdo_query($sql);
    return $list_account;
}

function update_password($newPass, $email)
{
    $sql = "UPDATE `tai_khoan` SET `mat_khau`='$newPass' WHERE email = '$email';";
    pdo_execute($sql);
}

function generateRandomString($length) //hàm tạo ngẫu nhiên mật khẩu
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i <= $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function load_all_role()
{
    $sql = "select * from vai_tro";
    $list_role = pdo_query($sql);
    return $list_role;
}

function load_one_account($id)
{
    $sql = "select * from `tai_khoan` where id = '$id';";
    $one_account = pdo_query_one($sql);
    return $one_account;
}

function insert_account($userName, $emailRegister, $password, $id_role, $hinh_anh, $id_tai_khoan)
{
    $sql = "INSERT INTO `tai_khoan`(`id`, `ten_dang_nhap`, `mat_khau`, `email`, `id_vai_tro`, `ngay_tao`, `hinh_anh`, `id_tai_khoan`) 
    VALUES (null,'$userName', '$password', '$emailRegister', '$id_role', CURRENT_TIMESTAMP, '$hinh_anh', '$id_tai_khoan');";
    pdo_execute($sql);
}

function update_account($id, $name, $email, $password, $id_vai_tro, $hinh_anh)
{
    if ($hinh_anh !== "") {
        $sql = "UPDATE `tai_khoan` 
    SET `ten_dang_nhap`='$name',
    `mat_khau`='$password',
    `email`='$email',
    `hinh_anh`='$hinh_anh',
    `id_vai_tro`='$id_vai_tro' WHERE id = '$id';";
    } else {
        $sql = "UPDATE `tai_khoan` 
    SET `ten_dang_nhap`='$name',
    `mat_khau`='$password',
    `email`='$email',
    `id_vai_tro`='$id_vai_tro' WHERE id = '$id';";
    }
    pdo_execute($sql);
}

function delete_account($id)
{
    $sql = "DELETE FROM `tai_khoan` WHERE id = '$id';";
    pdo_execute($sql);
}

function check_duplicate_account($tk_user)
{
    $sql = "SELECT COUNT(*) AS count FROM tai_khoan WHERE ten_dang_nhap  = ?";
    $result = pdo_query_one($sql, $tk_user); // Truyền tham số trực tiếp, không phải là một mảng
    return $result['count'] > 0;
}
