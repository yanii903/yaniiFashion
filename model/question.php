<?php
function insert_question($id_san_pham, $ten, $email, $so_dien_thoai, $noi_dung)
{
    $sql = "INSERT INTO `cau_hoi`(`id`, `id_san_pham`, `ten`, `email`, `so_dien_thoai`, `noi_dung`) 
    VALUES (null,'$id_san_pham', '$ten', '$email','$so_dien_thoai','$noi_dung');";
    pdo_execute($sql);
}

function insert_contact($ten, $email, $noi_dung)
{
    $sql = "INSERT INTO `lien_he`(`id`, `ten`, `email`, `noi_dung`) 
    VALUES (null,'$ten','$email','$noi_dung');";
    pdo_execute($sql);
}

function insert_comment($id_khach_hang, $id_san_pham, $tieu_de, $noi_dung, $hai_long)
{
    $sql = "INSERT INTO `binh_luan`(`id`, `id_khach_hang`, `id_san_pham`, `tieu_de`, `noi_dung`, `hai_long`, `ngay_them`)
     VALUES (null,'$id_khach_hang','$id_san_pham','$tieu_de','$noi_dung','$hai_long', CURRENT_TIMESTAMP);";
    pdo_execute($sql);
}

function load_all_comment_product($id_san_pham)
{
    $sql = "SELECT binh_luan.*, tai_khoan.ten_dang_nhap, tai_khoan.hinh_anh 
    FROM binh_luan JOIN tai_khoan ON binh_luan.id_khach_hang = tai_khoan.id 
    WHERE binh_luan.id_san_pham = '$id_san_pham' ORDER BY binh_luan.id DESC;";
    $list_product = pdo_query($sql);
    return $list_product;
}

function count_comment($id_san_pham)
{
    $sql = "SELECT COUNT(*) AS comment_count FROM binh_luan WHERE id_san_pham = '$id_san_pham';";
    $list_product = pdo_query_one($sql);
    return $list_product;
}

function rate_comment($id_san_pham)
{
    $sql = "SELECT 
    COUNT(CASE WHEN hai_long = 5 THEN 1 END) AS five_stars,
    COUNT(CASE WHEN hai_long = 4 THEN 1 END) AS four_stars,
    COUNT(CASE WHEN hai_long = 3 THEN 1 END) AS three_stars,
    COUNT(CASE WHEN hai_long = 2 THEN 1 END) AS two_stars,
    COUNT(CASE WHEN hai_long = 1 THEN 1 END) AS one_star,
    COUNT(*) AS total_reviews
    FROM binh_luan WHERE id_san_pham = '$id_san_pham';";
    $list_product = pdo_query_one($sql);
    return $list_product;
}

function get_average_rating($id_san_pham)
{
    // Xây dựng câu lệnh SQL an toàn
    $sql = "SELECT SUM(hai_long) AS total_score, COUNT(hai_long) AS total_votes FROM binh_luan WHERE id_san_pham = '$id_san_pham';";

    // Gọi hàm thực thi SQL từ hàm xử lý của bạn
    $result = pdo_query_one($sql);

    // Kiểm tra và tính trung bình đánh giá
    if ($result['total_votes'] > 0) {
        $average_rating = $result['total_score'] / $result['total_votes'];
        return number_format($average_rating, 1); // Làm tròn 1 chữ số
    }

    return '0.0'; // Trường hợp không có đánh giá
}
