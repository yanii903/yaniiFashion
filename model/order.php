<?php
function load_all_order()
{
    $sql = "SELECT * FROM `don_hang`;";
    $list_order = pdo_query($sql);
    return $list_order;
}

function load_new_order()
{
    $sql = "SELECT * FROM `don_hang` ORDER BY `id` DESC LIMIT 1;";
    $list_order = pdo_query_one($sql);
    return $list_order;
}

function tong_chi_tieu($id_khach_hang)
{
    $sql = "SELECT * FROM `don_hang` WHERE (trang_thai = 'Đã Nhận Hàng' OR trang_thai = 'Giao Hàng Thành Công') AND id_khach_hang = $id_khach_hang;";
    $list_order = pdo_query($sql);
    return $list_order;
}

function tinh_tong_chi_tieu($id_khach_hang)
{
    $sql = "SELECT COALESCE(SUM(tong_tien), 0) AS tong_tien_tich_luy FROM `don_hang`
    WHERE (trang_thai = 'Đã Xác Nhận' OR trang_thai = 'Giao Hàng Thành Công')  AND id_khach_hang = $id_khach_hang;";
    $list_order = pdo_query_one($sql);
    return $list_order;
}

function load_current_order($id_khach_hang) //load đơn hàng mới nhất mà người dùng vừa đặt
{
    $sql = "SELECT * FROM `don_hang` WHERE id_khach_hang = $id_khach_hang order by id desc limit 1";
    $list_cart = pdo_query_one($sql);
    return $list_cart;
}

function load_product_in_order_detail($id_don_hang)
{
    $sql = "SELECT sp.*, dct.* FROM don_hang_chi_tiet dct 
    JOIN san_pham sp ON dct.id_san_pham = sp.id WHERE dct.id_don_hang = '$id_don_hang';";
    $list_order = pdo_query($sql);
    return $list_order;
}

function load_all_order_detail()
{
    $sql = "SELECT * FROM `don_hang_chi_tiet`;";
    $list_order = pdo_query($sql);
    return $list_order;
}
// -------------------------------------------------------------------------
function load_all_order_user($id_khach_hang) // load danh sách đơn hàng theo id người dùng
{
    $sql = "SELECT * FROM `don_hang` WHERE id_khach_hang = $id_khach_hang;";
    $list_order = pdo_query($sql);
    return $list_order;
}

function load_all_order_user_delete($id_khach_hang) // load danh sách đơn hàng theo id người dùng và đơn hàng đã bị hủy
{
    $sql = "SELECT * FROM `don_hang` WHERE id_khach_hang = $id_khach_hang AND trang_thai = 'Đã Bị Hủy';";
    $list_order = pdo_query($sql);
    return $list_order;
}

function load_all_order_user_confirm($id_khach_hang) // load danh sách đơn hàng theo id người dùng và đơn hàng đã bị nhận
{
    $sql = "SELECT * FROM `don_hang` WHERE id_khach_hang = $id_khach_hang AND trang_thai = 'Đã Nhận Hàng';";
    $list_order = pdo_query($sql);
    return $list_order;
}
// -------------------------------------------------------------------------

function load_one_order_user($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE id = $id;";
    $list_order = pdo_query_one($sql);
    return $list_order;
}


function load_one_order($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE id = '$id';";
    $one_order = pdo_query_one($sql);
    return $one_order;
}
function load_one_order_totalamount($dh_totalamount)
{
    $sql = "SELECT * FROM `order` WHERE dh_totalamount = $dh_totalamount;";
    $one_order = pdo_query_one($sql);
    return $one_order;
}

function insert_order($id_khach_hang, $ten, $ho, $quoc_gia, $thanh_pho, $dia_chi, $so_dien_thoai, $email, $ghi_chu, $tong_tien, $loai_thanh_toan, $trang_thai, $ma_don_hang)
{
    $sql = "INSERT INTO `don_hang`(`id`, `id_khach_hang`, `ten`, `ho`, `quoc_gia`, `thanh_pho`, `dia_chi`, `so_dien_thoai`, `email`, `ghi_chu`, `ngay_tao`, `tong_tien`, `loai_thanh_toan`, `trang_thai`, `ma_don_hang`) 
    VALUES (null, '$id_khach_hang','$ten','$ho','$quoc_gia','$thanh_pho','$dia_chi',
    '$so_dien_thoai','$email','$ghi_chu', CURRENT_TIMESTAMP,'$tong_tien','$loai_thanh_toan','$trang_thai', '$ma_don_hang')";
    pdo_execute($sql);
}

function insert_order_detail($id_don_hang, $id_san_pham, $so_luong, $mau_sac, $kich_co, $gia)
{
    $sql = "INSERT INTO `don_hang_chi_tiet`(`id`, `id_don_hang`,`id_san_pham`, `so_luong`, `mau_sac`, `kich_co`, `gia`) 
    VALUES (null, '$id_don_hang','$id_san_pham','$so_luong','$mau_sac','$kich_co','$gia');";
    pdo_execute($sql);
}

function delete_order($dh_id)
{
    $sql = "DELETE FROM `order` WHERE dh_id = $dh_id;";
    pdo_execute($sql); // Thực thi câu lệnh SQL
}

function update_order($id, $statusPay)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='$statusPay'  WHERE id = '$id';";
    pdo_execute($sql);
}

function load_all_orderdetail()
{
    $sql = "SELECT * FROM `orderdetail`;";
    $list_orderdetail = pdo_query($sql);
    return $list_orderdetail;
}

function pdo_execute_return_last_insert_id($sql)
{
    $sql_args = array_slice(func_get_args(), 1); // Lấy các tham số bổ sung
    try {
        $conn = pdo_get_connection(); // Kết nối database
        $stmt = $conn->prepare($sql); // Chuẩn bị câu lệnh SQL
        $stmt->execute($sql_args); // Thực thi câu lệnh
        $lastInsertId = $conn->lastInsertId(); // Lấy ID vừa được thêm
        return $lastInsertId; // Trả về ID
    } catch (PDOException $e) {
        throw $e; // Ném lỗi nếu có
    } finally {
        unset($conn); // Giải phóng kết nối
    }
}
