<?php
session_start();
include_once './model/quickOrder.php';
include_once './model/wish.php';
include_once './model/productChange.php';
include_once './model/question.php';
include_once './model/address.php';
include_once './model/product.php';
include_once './model/cart.php';
include_once './model/category.php';
include_once './model/account.php';
include_once './model/order.php';
include_once './model/pdo.php';

$client = $_GET['client'] ?? 'home';

$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$userId = "";
if (isset($_GET["userId"])) {
    $userId = $_GET["userId"];
}

switch ($client) {
    case 'home':
        if (isset($_SESSION['userName'])) {
            // Nếu session tồn tại nhưng URL không có 'iduser'

            if (!isset($_GET['userId'])) {
                // Chuyển hướng đến trang đăng xuất hoặc trang xử lý lỗi
                header("Location: ?action=logout");
                exit();
            }
        }

        $list_all_product_new = load_all_product_new();
        $list_all_product_promotion = load_all_product_promotion();

        $list_all_product = load_all_product();
        $list_all_category = load_all_category();
        $load_all_category_count_product = load_all_category_count_product();
        $load_all_cart = load_all_cart();
        $load_one_account = load_one_account($userId);
        include './view/client/home/home.php';
        break;
    case 'login':
        $load_one_account = load_one_account($userId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // login
            if (isset($_POST['login'])) {
                $name = trim(strtolower($_POST['name'] ?? ''));
                $password = trim(strtolower($_POST['password'] ?? ''));

                $messName = $messPassword = $messLogin =  "";
                $check_valid = true;

                // Kiểm tra tên đăng nhập
                if (empty($name)) {
                    $check_valid = false;
                    $messName = "Tên đăng nhập không được để trống!";
                }

                // Kiểm tra mật khẩu
                if (empty($password)) {
                    $check_valid = false;
                    $messPassword = "Mật khẩu không được để trống!";
                } else if (strlen($password) < 6) {
                    $check_valid = false;
                    $messPassword = "Mật khẩu phải có ít nhất 6 ký tự!";
                }

                // Nếu không có lỗi trong tên đăng nhập và mật khẩu
                if ($check_valid) {
                    $account = load_all_account(); // Lấy dữ liệu từ CSDL

                    foreach ($account as $value) {
                        extract($value); // Lấy các biến từ mảng $value, ví dụ $tk_user, $tk_password

                        // Kiểm tra tài khoản và mật khẩu
                        if ($name == $ten_dang_nhap  && $password) {
                            $is_valid_login = true;

                            // Phân quyền và chuyển hướng
                            if ($id_vai_tro  == 1) {
                                $_SESSION['userName'] = $ten_dang_nhap;
                                $_SESSION['userId'] = $id; //lưu id người dùng
                                header("Location: ?action=admin");
                                exit();
                            } else if ($id_vai_tro  == 2) {
                                $_SESSION['userName'] = $ten_dang_nhap;
                                $_SESSION['userId'] = $id; //lưu id người dùng
                                header("Location: ?action=client&userId=$id");
                                exit();
                            }
                            break; // Thoát khỏi vòng lặp ngay khi tìm thấy tài khoản hợp lệ
                        } else {
                            $messLogin = "Tài Khoản Hoặc Mật Khẩu Sai!";
                        }
                    }
                }
            }

            // forgotPassword
            if (isset($_POST['forgotPassword'])) {
                $email = trim($_POST['email'] ?? '');

                $messEmail = "";
                $check_valid = true;

                // Kiểm tra email
                if (empty($email)) {
                    $check_valid = false;
                    $messEmail = "Email không được để trống!";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $check_valid = false;
                    $messEmail = "Địa chỉ email không hợp lệ!";
                }

                if ($check_valid) {
                    $load_all_account = load_all_account();

                    foreach ($load_all_account as $account) {
                        if ($email == $account['email']) {
                            $randomPassword = generateRandomString(10); // Tạo chuỗi ngẫu nhiên dài 16 ký tự
                            $messEmail = "Mật Khẩu Mới Của Bạn Là: " . $randomPassword;
                            update_password($randomPassword, $email);
                        }
                    }
                }
            }
        }
        include './view/client/account/login.php';
        break;
    case 'register':
        $load_one_account = load_one_account($userId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim(strtolower($_POST['name'] ?? ''));
            $email = trim(strtolower($_POST['email'] ?? ''));
            $password = trim(strtolower($_POST['password'] ?? ''));
            $rePassword = trim(strtolower($_POST['rePassword'] ?? ''));
            $id_role = 2; // Quyền người dùng mặc định
            $hinh_anh = "user-1.jpg";

            // Khởi tạo thông báo lỗi
            $messName = $messEmail = $messPassword = $messRePassword = $messRegister = "";
            $check_valid = true;

            // Kiểm tra tên đăng nhập
            if (empty($name)) {
                $check_valid = false;
                $messName = "Tên đăng nhập không được để trống!";
            }

            // Kiểm tra email
            if (empty($email)) {
                $check_valid = false;
                $messEmail = "Email không được để trống!";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $check_valid = false;
                $messEmail = "Địa chỉ email không hợp lệ!";
            }

            // Kiểm tra mật khẩu
            if (empty($password)) {
                $check_valid = false;
                $messPassword = "Mật khẩu không được để trống!";
            } elseif (strlen($password) < 6) {
                $check_valid = false;
                $messPassword = "Mật khẩu phải có ít nhất 6 ký tự!";
            }

            // Kiểm tra xác nhận mật khẩu
            if (empty($rePassword)) {
                $check_valid = false;
                $messRePassword = "Xác nhận mật khẩu không được để trống!";
            } elseif ($password !== $rePassword) {
                $check_valid = false;
                $messRePassword = "Mật khẩu xác nhận không khớp!";
            }

            // Kiểm tra xem tài khoản hoặc email đã tồn tại chưa
            if ($check_valid) {
                $account = load_all_account();
                foreach ($account as $value) {
                    if ($name === $value['ten_dang_nhap']) {
                        $check_valid = false;
                        $messName = "Tên đăng nhập đã tồn tại!";
                        break;
                    }
                    if ($email === $value['email']) {
                        $check_valid = false;
                        $messEmail = "Email đã được sử dụng!";
                        break;
                    }
                }
            }

            // Nếu không có lỗi, thêm tài khoản mới
            if ($check_valid) {
                $id_tai_khoan = '#' . mt_rand(1000000, 9999999);
                insert_account($name, $email, $password, $id_role, $hinh_anh, $id_tai_khoan);
                $messRegister = "Đăng Ký Thành Công";
                header("Refresh: 3.5; url='?client=login'");
                exit();
            }
        }

        include './view/client/account/register.php';
        break;
    case 'detailProduct':
        $load_one_account = load_one_account($userId);

        if (isset($_SESSION['userName'])) {
            $load_one_cart_user = load_one_cart_user($_SESSION['userId']);
        }
        $load_all_comment_product = load_all_comment_product($id);

        $count_comment = count_comment($id);
        extract($count_comment);

        $get_average_rating = get_average_rating($id);

        $rate_comment = rate_comment($id);
        extract($rate_comment);

        // Giả sử bạn đã lấy kết quả từ SQL vào mảng $result
        $five_stars = $rate_comment['five_stars'];
        $four_stars = $rate_comment['four_stars'];
        $three_stars = $rate_comment['three_stars'];
        $two_stars = $rate_comment['two_stars'];
        $one_star = $rate_comment['one_star'];
        $total_reviews = $rate_comment['total_reviews'];

        // Tính tỷ lệ phần trăm cho mỗi mức sao
        $five_stars_percentage = ($total_reviews > 0) ? ($five_stars / $total_reviews) * 100 : 0;
        $four_stars_percentage = ($total_reviews > 0) ? ($four_stars / $total_reviews) * 100 : 0;
        $three_stars_percentage = ($total_reviews > 0) ? ($three_stars / $total_reviews) * 100 : 0;
        $two_stars_percentage = ($total_reviews > 0) ? ($two_stars / $total_reviews) * 100 : 0;
        $one_star_percentage = ($total_reviews > 0) ? ($one_star / $total_reviews) * 100 : 0;


        $load_one_product = load_one_product($id); // Lấy thông tin chi tiết sản phẩm
        $list_all_product = load_all_product(); // Lấy danh sách tất cả sản phẩm
        $tong_tien = 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ POST
            $id_san_pham = $id; // ID sản phẩm từ URL
            $id_nguoi_dung = $userId; // User ID từ URL
            $so_luong = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
            $mau_sac = isset($_POST['color']) ? $_POST['color'] : '';
            $kich_co = isset($_POST['size']) ? $_POST['size'] : '';
            $tong_tien = isset($_POST['price']) ? floatval($_POST['price']) : 0;

            // Kiểm tra hành động "Thêm vào Giỏ Hàng"
            if (isset($_POST['addCart'])) {
                $cart_items = load_one_cart_user($id_nguoi_dung);
                $is_existing = false;

                foreach ($cart_items as $item) {
                    if ($item['mau_sac'] === $mau_sac && $item['kich_co'] === $kich_co && $item['id_san_pham'] == $id_san_pham) {
                        $is_existing = true;
                        $new_so_luong = $item['so_luong'] + $so_luong;
                        $new_tong_tien = $item['gia_chi_tiet'] * $new_so_luong;
                        update_cart_detail($item['id_gio_hang_ct'], $new_so_luong, $new_tong_tien);
                        break;
                    }
                }

                if (!$is_existing) {
                    insert_cartDetail($_SESSION['cartId'], $id_san_pham, $so_luong, $mau_sac, $kich_co, $tong_tien);
                }

                header("Location: ?client=detailCart&userId=$id_nguoi_dung");
                exit();
            }

            // Kiểm tra hành động "Mua Ngay"
            if (isset($_POST['quickOrder'])) {
                // Đảm bảo chuyển hướng sang trang 'quickOrder'
                quick_order_user($_SESSION['userId'], $so_luong, $mau_sac, $kich_co);
                header("Location: ?client=quickOrder&userId=$id_nguoi_dung&id=$id_san_pham");
                exit();
            }

            // Kiểm tra hành động "gửi câu hỏi"
            if (isset($_POST['question'])) {
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                $message = isset($_POST['message']) ? $_POST['message'] : '';

                insert_question($id, $name, $email, $phone, $message);

                header("Location: ?client=detailProduct&userId=$id_nguoi_dung&id=$id_san_pham");
                exit();
            }

            // Kiểm tra hành động "gửi bình luận"
            if (isset($_POST['comment'])) {
                $title = isset($_POST['title']) ? $_POST['title'] : '';
                $content = isset($_POST['content']) ? $_POST['content'] : '';
                $rate = isset($_POST['rate']) ? intval($_POST['rate']) : '1';

                insert_comment($userId, $id, $title, $content, $rate);

                header("Location: ?client=detailProduct&userId=$id_nguoi_dung&id=$id_san_pham");
                exit();
            }
        }

        // Hiển thị trang chi tiết sản phẩm
        include './view/client/product/detail.php';
        break;
    case 'productChange':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        if (isset($_GET['sex'], $_GET['option'])) {
            $sex = "";
            $option =  $_GET['option'];

            if ($_GET['sex'] == "male") {
                $sex = "Nam";
                $load_all_product_option = load_all_product_option($sex, $option);
            } else if ($_GET['sex'] == "female") {
                $sex = "Nữ";
                $load_all_product_option = load_all_product_option($sex, $option);
            }

            if ($_GET['option'] == "Tất Cả Áo Nam" || $_GET['option'] == "Tất Cả Áo Nữ") {
                $option = "Áo";
                $load_all_product_option = load_all_product_option($sex, $option);
            } else if ($_GET['option'] == "Tất Cả Quần Nam" || $_GET['option'] == "Tất Cả Quần Nữ") {
                $option = "Quần";
                $load_all_product_option = load_all_product_option($sex, $option);
            }
        }

        include './view/client/product/productChange.php';
        break;
    case 'categoryChange':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        $load_all_product_category = load_all_product_category($id);

        if (!empty($load_all_product_category)) {
            $ten_danh_muc = $load_all_product_category[0]['ten_danh_muc'];
        }

        if (isset($_GET['option'])) {
            $option = $_GET['option'];

            if ($option == "male") {
                $sex = "Nam";
                $load_all_product_category = load_all_product_sex($sex);
            } else if ($option == "female") {
                $sex = "Nữ";
                $load_all_product_category = load_all_product_sex($sex);
            }
        }

        include './view/client/product/categoryChange.php';
        break;
    case 'detailCart':
        if ($userId == $_SESSION['userId']) {
            update_cart_quantity($userId);
            delete_cart_quantity();
            $load_one_account = load_one_account($userId);

            $load_one_cart_user = load_one_cart_user($userId);
            $total_price = total_price($userId);
            $count_cart_user = count_cart_user($userId);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/cart/detail.php';
        break;
    case 'deleteProductCard':
        $cartDetailId = $_GET['cartDetailId'];
        delete_cart_detail($cartDetailId);

        header("Location: ?client=detailCart&userId=$userId");
        break;
    case 'detailCartDown':
        $load_one_account = load_one_account($userId);

        $cartDetailId = $_GET['cartDetailId'];
        $cartDetail = load_one_cart_user($cartDetailId);

        quantityDown($cartDetailId, $_SESSION['tong_tien']);

        header("Location: ?client=detailCart&userId=$userId");
        break;

    case 'detailCartUp':
        $load_one_account = load_one_account($userId);

        $cartDetailId = $_GET['cartDetailId'];
        $cartDetail = load_one_cart_user($cartDetailId);

        quantityUp($cartDetailId, $_SESSION['tong_tien']);

        header("Location: ?client=detailCart&userId=$userId");
        break;
    case 'detailOrder':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($userId);

            $load_one_cart_user = load_one_cart_user($userId);
            $load_all_address = load_all_address();
            $load_current_address = load_current_address($userId);

            $total_price = total_price($userId);
            extract($total_price);

            $messFirstName = $messLastName = $messCountry = $messCity = "";
            $messAddress = $messPhone = $messEmail = "";

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $first_name = trim(strtolower($_POST['first-name'] ?? ''));
                $last_name = trim(strtolower($_POST['last-name'] ?? ''));
                $country = trim(strtolower($_POST['country'] ?? ''));
                $city = trim(strtolower($_POST['city'] ?? ''));
                $address = trim(strtolower($_POST['address'] ?? ''));
                $phone = trim(strtolower($_POST['phone'] ?? ''));
                $email = trim(strtolower($_POST['email'] ?? ''));
                $note = trim(strtolower($_POST['note'] ?? ''));
                $payment = trim(strtolower($_POST['payment'] ?? '0'));

                $check_valid = true;

                // First Name
                if (empty($first_name)) {
                    $messFirstName = "Vui Lòng Điền Tên!";
                    $check_valid = false;
                }

                // Last Name
                if (empty($last_name)) {
                    $messLastName = "Vui Lòng Điền Họ!";
                    $check_valid = false;
                }

                // Country
                if ($country == "0") {
                    $messCountry = "Vui Lòng Chọn Quốc Gia!";
                    $check_valid = false;
                }

                // City
                if (empty($city)) {
                    $messCity = "Vui Lòng Điền Thành Phố!";
                    $check_valid = false;
                }

                // Address
                if (empty($address)) {
                    $messAddress = "Vui Lòng Điền Địa Chỉ!";
                    $check_valid = false;
                }

                // Phone
                if (empty($phone)) {
                    $messPhone = "Vui Lòng Điền Số Điện Thoại!";
                    $check_valid = false;
                } elseif (!preg_match('/^[0-9]{10,11}$/', $phone)) {
                    $messPhone = "Số Điện Thoại Không Hợp Lệ!";
                    $check_valid = false;
                }

                // Email
                if (empty($email)) {
                    $messEmail = "Vui Lòng Điền Email!";
                    $check_valid = false;
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $messEmail = "Địa chỉ Email Không Hợp Lệ!";
                    $check_valid = false;
                }


                if ($check_valid) {
                    $trang_thai = "Chờ Xác Nhận";
                    $ma_don_hang = '#' . mt_rand(100000, 999999);

                    insert_order(
                        $userId,
                        $first_name,
                        $last_name,
                        $country,
                        $city,
                        $address,
                        $phone,
                        $email,
                        $note,
                        $tong_gia_tat_ca,
                        $payment,
                        $trang_thai,
                        $ma_don_hang
                    );

                    foreach ($load_one_cart_user as $item) {
                        extract($item);
                        $load_current_order = load_current_order($userId);
                        insert_order_detail($load_current_order['id'], $id_san_pham, $so_luong, $mau_sac, $kich_co,  number_format($so_luong * $gia_giam, 2, '.', ''));
                    }
                    update_quantity_product($load_current_order['id']);

                    insert_address($userId, $first_name, $last_name, $country, $city, $address, $phone, $email);

                    header("Location: ?client=payConfirm&userId=$userId");
                    exit();
                }
            }
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/detail.php';
        break;
    case 'quickOrder':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($userId);

            $load_one_product = load_one_product($id);
            $load_one_quick_order = load_one_quick_order($userId);
            extract($load_one_quick_order);

            $load_all_address = load_all_address();
            $load_current_address = load_current_address($userId);

            $messFirstName = $messLastName = $messCountry = $messCity = "";
            $messAddress = $messPhone = $messEmail = "";

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $first_name = trim(strtolower($_POST['first-name'] ?? ''));
                $last_name = trim(strtolower($_POST['last-name'] ?? ''));
                $country = trim(strtolower($_POST['country'] ?? ''));
                $city = trim(strtolower($_POST['city'] ?? ''));
                $address = trim(strtolower($_POST['address'] ?? ''));
                $phone = trim(strtolower($_POST['phone'] ?? ''));
                $email = trim(strtolower($_POST['email'] ?? ''));
                $note = trim(strtolower($_POST['note'] ?? ''));
                $payment = trim(strtolower($_POST['payment'] ?? '0'));

                $check_valid = true;

                // First Name
                if (empty($first_name)) {
                    $messFirstName = "Vui Lòng Điền Tên!";
                    $check_valid = false;
                }

                // Last Name
                if (empty($last_name)) {
                    $messLastName = "Vui Lòng Điền Họ!";
                    $check_valid = false;
                }

                // Country
                if ($country == "0") {
                    $messCountry = "Vui Lòng Chọn Quốc Gia!";
                    $check_valid = false;
                }

                // City
                if (empty($city)) {
                    $messCity = "Vui Lòng Điền Thành Phố!";
                    $check_valid = false;
                }

                // Address
                if (empty($address)) {
                    $messAddress = "Vui Lòng Điền Địa Chỉ!";
                    $check_valid = false;
                }

                // Phone
                if (empty($phone)) {
                    $messPhone = "Vui Lòng Điền Số Điện Thoại!";
                    $check_valid = false;
                } elseif (!preg_match('/^[0-9]{10,11}$/', $phone)) {
                    $messPhone = "Số Điện Thoại Không Hợp Lệ!";
                    $check_valid = false;
                }

                // Email
                if (empty($email)) {
                    $messEmail = "Vui Lòng Điền Email!";
                    $check_valid = false;
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $messEmail = "Địa chỉ Email Không Hợp Lệ!";
                    $check_valid = false;
                }


                if ($check_valid) {
                    $trang_thai = "Chờ Xác Nhận";
                    $ma_don_hang = '#' . mt_rand(100000, 999999);

                    $tong_tien = intval($load_one_quick_order['so_luong'] * $load_one_product['gia_giam']);

                    insert_order(
                        $userId,
                        $first_name,
                        $last_name,
                        $country,
                        $city,
                        $address,
                        $phone,
                        $email,
                        $note,
                        $tong_tien,
                        $payment,
                        $trang_thai,
                        $ma_don_hang
                    );

                    $load_current_order = load_current_order($userId);

                    insert_order_detail($load_current_order['id'], $load_one_product['id'], $so_luong, $mau_sac, $kich_co,  number_format($tong_tien, 2, '.', ''));

                    update_quantity_product($load_current_order['id']);

                    insert_address($userId, $first_name, $last_name, $country, $city, $address, $phone, $email);

                    header("Location: ?client=payConfirm&userId=$userId");
                    exit();
                }
            }
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/quickOrder.php';
        break;
    case 'listOrder':
        if ($userId == $_SESSION['userId']) {
            $load_all_order_user = load_all_order_user($userId);
            $load_one_account = load_one_account($userId);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/list.php';
        break;
    case 'viewOrder':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($userId);

            $load_one_order_user = load_one_order_user($_GET['orderDetailId']);
            extract($load_one_order_user);

            $load_product_in_order_detail = load_product_in_order_detail($_GET['orderDetailId']);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/viewOrder.php';
        break;
    case 'myAccount':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($userId);
            extract($load_one_account);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = trim($_POST['name'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $currentPassword = trim($_POST['currentPassword'] ?? '');
                $newPassword = trim($_POST['newPassword'] ?? '');
                $reNewPassword = trim($_POST['reNewPassword'] ?? '');
                $upload = $_FILES['upload']['name'] ?? '';
                $role = 2;

                $messAccount = $messCurrentPassword = $messNewPassword = $messReNewPassword = "";
                $check_valid = true;

                // ------------------------------------------------------
                if (empty($currentPassword)) {
                    $check_valid = false;
                    $messCurrentPassword = "Mật khẩu không được để trống!";
                } elseif (strlen($currentPassword) < 6) {
                    $check_valid = false;
                    $messCurrentPassword = "Mật khẩu phải có ít nhất 6 ký tự!";
                } else if ($currentPassword !== $mat_khau) {
                    $check_valid = false;
                    $messCurrentPassword = "Mật khẩu sai!";
                }
                // ------------------------------------------------------
                if (empty($newPassword)) {
                    $check_valid = false;
                    $messNewPassword = "Mật khẩu mới không được để trống!";
                } elseif (strlen($newPassword) < 6) {
                    $check_valid = false;
                    $messNewPassword = "Mật khẩu mới phải có ít nhất 6 ký tự!";
                }
                // ------------------------------------------------------
                if (empty($reNewPassword)) {
                    $check_valid = false;
                    $messReNewPassword = "Mật khẩu xác nhận không được để trống!";
                } elseif (strlen($reNewPassword) < 6) {
                    $check_valid = false;
                    $messReNewPassword = "Mật khẩu xác nhận phải có ít nhất 6 ký tự!";
                } else if ($reNewPassword !== $newPassword) {
                    $messReNewPassword = "Mật khẩu xác nhận không khớp!";
                }

                // Kiểm tra tệp upload
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                $fileSizeLimit = 2 * 1024 * 1024; // 2MB
                if (!empty($upload)) {
                    $fileExtension = strtolower(pathinfo($upload, PATHINFO_EXTENSION));
                    $fileSize = $_FILES['upload']['size'];

                    if (!in_array($fileExtension, $allowedExtensions)) {
                        $check_valid = false;
                        $messUpload = "Định dạng ảnh không hợp lệ! Chỉ chấp nhận JPG, JPEG, PNG, GIF.";
                    } elseif ($fileSize > $fileSizeLimit) {
                        $check_valid = false;
                        $messUpload = "Kích thước ảnh vượt quá 2MB!";
                    } else {
                        $upload = uniqid() . "_" . $upload; // Tạo tên file duy nhất
                        $image = $_FILES['upload']['tmp_name'];
                        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/myProject/view/assets/be/images/avatar/';
                        $location = $uploadDir . $upload;

                        if (!move_uploaded_file($image, $location)) {
                            $check_valid = false;
                            $messUpload = "Không thể tải ảnh lên. Vui lòng thử lại!";
                        }
                    }
                } else {
                    $upload = $load_one_account['hinh_anh']; // Giữ nguyên ảnh cũ nếu không tải ảnh mới
                }

                // Nếu không có lỗi, cập nhật tài khoản
                if ($check_valid) {
                    update_account($id, $name, $email, $newPassword, $role, $upload);
                    $messAccount = "Cập Nhật Thành Công! Vui Lòng Tải Lại Trang.";
                }
            }
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/account/myAccount.php';
        break;
    case 'payConfirm':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($userId);
            $load_current_address = load_current_address($userId);
            $load_current_order = load_current_order($userId);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/payConfirm.php';
        break;
    case 'listOrderDelete':
        if ($userId == $_SESSION['userId']) {
            $load_all_order_user_delete = load_all_order_user_delete($userId);
            $load_one_account = load_one_account($userId);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/delete.php';
        break;
    case 'listOrderConfirm':
        if ($userId == $_SESSION['userId']) {
            $load_all_order_user_confirm = load_all_order_user_confirm($userId);
            $load_one_account = load_one_account($userId);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/order/confirm.php';
        break;
    case 'viewOrderUpdate':
        update_order($_GET['orderDetailId'], "Đã Nhận Hàng");

        header("Location: ?client=listOrderConfirm&userId=$userId");
        break;
    case 'deleteOrder':
        update_order($_GET['orderDetailId'], "Đã Bị Hủy");

        header("Location: ?client=listOrderDelete&userId=$userId");
        break;
    case 'contact':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $message = trim($_POST['message'] ?? '');

            $messContact = "";
            $check_valid = true;

            if ($check_valid) {
                insert_contact($name, $email, $message);
                $messContact = "Gửi Thành Công";
            }
        }
        include './view/client/category/contact.php';
        break;
    case 'aboutUs':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        include './view/client/category/aboutUs.php';
        break;
    case 'brand':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        include './view/client/category/brand.php';
        break;
    case 'faq':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        include './view/client/category/faq.php';
        break;
    case 'categoryAll':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        include './view/client/product/categoryAll.php';
        break;
    case 'promotion':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        $load_all_product_promotion = load_all_product_promotion();
        include './view/client/product/promotion.php';
        break;
    case 'search':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        $list_all_product = load_all_product();
        $searchResults = [];  // Đổi tên biến để lưu kết quả tìm kiếm

        if (isset($_POST['btnSearch'], $_POST['inputSearch'])) {
            $inputSearch = trim(strtolower($_POST['inputSearch']));  // Từ khóa tìm kiếm

            foreach ($list_all_product as $value) {
                $nameProduct = strtolower($value['ten_san_pham']);
                $priceProduct = strtolower((string)$value['gia_giam']); // Chuyển giá thành chuỗi để so sánh

                // Kiểm tra nếu từ khóa tìm kiếm xuất hiện trong tên sản phẩm hoặc giá
                if (strpos($nameProduct, $inputSearch) !== false || strpos($priceProduct, $inputSearch) !== false) {
                    array_push($searchResults, $value);
                }
            }
        }

        include './view/client/search/search.php';  // Hiển thị kết quả tìm kiếm
        break;
    case 'addWishList':
        if ($userId == $_SESSION['userId']) {
            insert_wish($userId, $id);
            header("Location: ?client=detailProduct&userId=$userId&id=$id");
            exit();
        } else {
            header("Location: ?action=logout");
            exit();
        }
        break;
    case 'deleteWishList':
        if ($userId == $_SESSION['userId']) {
            delete_wish($userId, $id);
            header("Location: ?client=detailProduct&userId=$userId&id=$id");
            exit();
        } else {
            header("Location: ?action=logout");
            exit();
        }
        break;
    case 'wishList':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($userId);
            $load_all_wish_user = load_all_wish_user($userId);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/wish/list.php';
        break;
    case 'ourStore':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        include './view/client/category/ourStore.php';
        break;
    case 'timeline':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        include './view/client/category/timeline.php';
        break;
    case 'invoice':
        if ($userId == $_SESSION['userId']) {
            $load_one_account = load_one_account($_SESSION['userId']);
            extract($load_one_account);

            $tong_chi_tieu = tong_chi_tieu($userId);
            $tinh_tong_chi_tieu = tinh_tong_chi_tieu($userId);
            extract($tinh_tong_chi_tieu);
        } else {
            header("Location: ?action=logout");
            exit();
        }
        include './view/client/category/invoice.php';
        break;
    case 'privacyPolicy':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        include './view/client/footer/privacyPolicy.php';
        break;
    case 'deliveryReturn':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        include './view/client/footer/deliveryReturn.php';
        break;
    case 'shippingDelivery':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        include './view/client/footer/shippingDelivery.php';
        break;
    case 'termsConditions':
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }
        include './view/client/footer/termsConditions.php';
        break;
    default:
        if (isset($_SESSION['userName'])) {
            $load_one_account = load_one_account($_SESSION['userId']);
        }

        include './view/client/404.php';
        break;
}
