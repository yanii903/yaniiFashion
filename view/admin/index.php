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

$admin = $_GET['admin'] ?? 'home';
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

switch ($admin) {
    case 'home':

        include 'home/home.php';
        break;
    case 'listProduct':
        $list_all_product = load_all_product();
        include 'product/list.php';
        break;
    case 'deleteProduct':
        try {
            delete_product($id); // Hàm xóa sản phẩm
            echo "
                <script>
                    alert('Xóa sản phẩm thành công!');
                    window.location = '?action=admin&admin=listProduct';
                </script>
            ";
        } catch (Exception $e) {
            echo "
                <script>
                    alert('Không thể xóa sản phẩm: {$e->getMessage()}');
                    window.location = '?action=admin&admin=listProduct';
                </script>
            ";
        }
        break;

    case 'addProduct':
        $load_all_category = load_all_category();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload = $_FILES['upload']['name'] ?? '';
            $name = trim($_POST['name'] ?? '');
            $sex = trim($_POST['sex'] ?? '');
            $category = trim($_POST['category'] ?? '0');
            $price = trim($_POST['price'] ?? '');
            $salePrice = trim($_POST['salePrice'] ?? '');
            $quantity = trim($_POST['quantity'] ?? '');
            $stock = 1;
            $description = trim($_POST['description'] ?? '');

            $messAddProduct = $messUpload = $messName = $messCategory = $messPrice = "";
            $messSalePrice = $messQuantity = $messStock = $messDescription = "";
            $check_valid = true;

            // Kiểm tra dữ liệu form
            if (empty($upload)) {
                $check_valid = false;
                $messUpload = "Vui Lòng Chọn Ảnh!";
            }
            if (empty($name)) {
                $check_valid = false;
                $messName = "Vui Lòng Điền Tên Sản Phẩm!";
            }
            if ($category == "0") {
                $check_valid = false;
                $messCategory = "Vui Lòng Chọn Danh Mục!";
            }
            if (empty($price)) {
                $check_valid = false;
                $messPrice = "Vui Lòng Điền Giá Gốc!";
            }
            if (empty($salePrice)) {
                $check_valid = false;
                $messSalePrice = "Vui Lòng Điền Giá Khuyến Mại!";
            }
            if (empty($quantity)) {
                $check_valid = false;
                $messQuantity = "Vui Lòng Điền Số Lượng!";
            }
            if (empty($description)) {
                $check_valid = false;
                $messDescription = "Vui Lòng Điền Mô Tả!";
            }

            // Kiểm tra file upload
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileSizeLimit = 2 * 1024 * 1024; // 2MB

            if (!empty($_FILES['upload']['name'])) {
                $fileExtension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
                $fileSize = $_FILES['upload']['size'];

                if (!in_array($fileExtension, $allowedExtensions)) {
                    $check_valid = false;
                    $messUpload = "Định dạng ảnh không hợp lệ! Chỉ chấp nhận JPG, JPEG, PNG, GIF.";
                } elseif ($fileSize > $fileSizeLimit) {
                    $check_valid = false;
                    $messUpload = "Kích thước ảnh vượt quá 2MB!";
                } else {
                    $image = $_FILES['upload']['tmp_name'];
                    $upload = uniqid() . "_" .  $upload; //đổi tên ảnh để tránh trùng lặp
                    $uploadDir = './view/assets/be/images/products/';
                    $location = $uploadDir . $upload;
                    if (!move_uploaded_file($image, $location)) {
                        $check_valid = false;
                        $messUpload = "Không thể tải ảnh lên. Vui lòng thử lại!";
                    }
                }
            }

            // Nếu không có lỗi, xử lý thêm sản phẩm
            if ($check_valid) {
                $id_san_pham = '#' . mt_rand(100000, 999999);
                insert_product($id_san_pham, $name, $sex, $description, $price, $salePrice, $quantity, $upload, $category, $stock);
                echo "
                    <script>
                        alert('Thêm Sản Phẩm Thành Công!');
                        window.location = '?action=admin&admin=listProduct'
                    </script>
              ";
            }
        }

        include 'product/add.php';
        break;
    case 'updateProduct':
        $load_one_product = load_one_product($id);
        $load_all_category = load_all_category();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload = $_FILES['upload']['name'] ?? '';
            $name = trim($_POST['name'] ?? '');
            $sex = trim($_POST['sex'] ?? '');
            $category = trim($_POST['category'] ?? '0');
            $price = trim($_POST['price'] ?? '');
            $salePrice = trim($_POST['salePrice'] ?? '');
            $quantity = trim($_POST['quantity'] ?? '');

            if ($quantity > 0) {
                $stock = 1;
            } else if ($quantity == 0) {
                $stock = 2;
            }

            $description = trim($_POST['description'] ?? '');

            $check_valid = true;
            $messUpload = $messName = $messCategory = $messPrice = "";
            $messSalePrice = $messStock = $messDescription = "";

            // Validate dữ liệu form
            if (empty($name)) {
                $check_valid = false;
                $messName = "Vui Lòng Điền Tên Sản Phẩm!";
            }
            if ($category == "0") {
                $check_valid = false;
                $messCategory = "Vui Lòng Chọn Danh Mục!";
            }
            if (empty($price)) {
                $check_valid = false;
                $messPrice = "Vui Lòng Điền Giá Gốc!";
            }
            if (empty($salePrice)) {
                $check_valid = false;
                $messSalePrice = "Vui Lòng Điền Giá Khuyến Mại!";
            }
            if (empty($description)) {
                $check_valid = false;
                $messDescription = "Vui Lòng Điền Mô Tả!";
            }

            // Kiểm tra và xử lý file upload
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileSizeLimit = 2 * 1024 * 1024; // 2MB
            $uploaded_image = $load_one_product['hinh_anh']; // Giữ ảnh cũ mặc định

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
                    $image = $_FILES['upload']['tmp_name'];
                    $upload = uniqid() . "_" .  $upload; //đổi tên ảnh để tránh trùng lặp
                    $uploadDir = './view/assets/be/images/products/';
                    $location = $uploadDir . $upload;
                    if (!move_uploaded_file($image, $location)) {
                        $check_valid = false;
                        $messUpload = "Không thể tải ảnh lên. Vui lòng thử lại!";
                    } else {
                        $uploaded_image = $upload; // Cập nhật ảnh mới
                    }
                }
            }

            // Nếu không có lỗi, xử lý cập nhật sản phẩm
            if ($check_valid) {
                update_product($name, $sex, $description, $price, $salePrice, $quantity, $upload, $category, $stock, $id);
                echo "
                        <script>
                            alert('Cập Nhật Sản Phẩm Thành Công!');
                            window.location = '?action=admin&admin=listProduct';
                        </script>
                    ";
            }
        }

        include 'product/update.php';
        break;
    case 'listCategory':
        $load_all_category = load_all_category();
        include 'category/list.php';
        break;
    case 'deleteCategory':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']); // Lấy ID danh mục cần xóa

            try {
                // Gọi hàm xóa danh mục
                delete_category($id);

                // Chuyển hướng sau khi xóa thành công
                header("Location: ?action=admin&admin=listCategory");
                exit();
            } catch (PDOException $e) {
                // Kiểm tra lỗi khóa ngoại
                if ($e->getCode() == 23000) {

                    echo "
                    <script>
                        alert('Không thể xóa danh mục này vì có sản phẩm liên kết!');
                        window.location = '?action=admin&admin=listCategory';
                    </script>
                ";
                } else {

                    echo "
                    <script>
                        alert('Có lỗi xảy ra: {$e->getMessage()}');
                        window.location = '?action=admin&admin=listCategory';
                    </script>
                ";
                }

                // Bao gồm lại trang danh sách danh mục và truyền thông báo lỗi
                include 'category/list.php';
            }
        }
        break;

    case 'addCategory':

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload = $_FILES['upload']['name'] ?? '';
            $name = trim($_POST['name'] ?? '');

            $messName = $messUpload = "";
            $check_valid = true;

            // Kiểm tra tên danh mục
            if (empty($name)) {
                $check_valid = false;
                $messName = "Vui Lòng Điền Tên Danh Mục!";
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
                    $image = $_FILES['upload']['tmp_name'];
                    $upload = uniqid() . "_" . $upload; // Đổi tên ảnh để tránh trùng lặp
                    $uploadDir = './view/assets/be/images/category/';
                    $location = $uploadDir . $upload;

                    // Kiểm tra và tải ảnh lên
                    if (!move_uploaded_file($image, $location)) {
                        $check_valid = false;
                        $messUpload = "Không thể tải ảnh lên. Vui lòng thử lại!";
                    }
                }
            } else {
                $check_valid = false;
                $messUpload = "Vui Lòng Chọn Ảnh!";
            }

            // Xử lý khi hợp lệ
            if ($check_valid) {
                insert_category($name, $upload);
                echo "
                        <script>
                            alert('Thêm Danh Mục Thành Công!');
                            window.location = '?action=admin&admin=listCategory';
                        </script>
                    ";
                exit;
            }
        }

        // Bao gồm tệp giao diện thêm danh mục
        include 'category/add.php';
        break;

    case 'updateCategory':
        $load_one_category = load_one_category($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload = $_FILES['upload']['name'] ?? '';
            $name = trim($_POST['name'] ?? '');

            $messName = $messUpload = "";
            $check_valid = true;

            // Kiểm tra tên danh mục
            if (empty($name)) {
                $check_valid = false;
                $messName = "Vui Lòng Điền Tên Danh Mục!";
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
                    $image = $_FILES['upload']['tmp_name'];
                    $upload = uniqid() . "_" . $upload; // Đổi tên ảnh để tránh trùng lặp
                    $uploadDir = './view/assets/be/images/category/';
                    $location = $uploadDir . $upload;

                    // Kiểm tra và tải ảnh lên
                    if (!move_uploaded_file($image, $location)) {
                        $check_valid = false;
                        $messUpload = "Không thể tải ảnh lên. Vui lòng thử lại!";
                    }
                }
            }

            // Xử lý khi hợp lệ
            if ($check_valid) {
                update_category($name, $upload, $id);
                echo "
                            <script>
                                alert('Cập Nhật Danh Mục Thành Công!');
                                window.location = '?action=admin&admin=listCategory';
                            </script>
                        ";
                exit;
            }
        }

        // Bao gồm tệp giao diện thêm danh mục
        include 'category/update.php';
        break;
    case 'listAccount':
        $load_all_account = load_all_account();
        include 'account/list.php';
        break;
    case 'deleteAccount':
        try {
            delete_account($id); // Hàm xóa sản phẩm
            echo "
                <script>
                    alert('Xóa tài khoản thành công!');
                    window.location = '?action=admin&admin=listAccount';
                </script>
            ";
        } catch (Exception $e) {
            echo "
                <script>
                    alert('Không thể xóa tài khoản: {$e->getMessage()}');
                    window.location = '?action=admin&admin=listAccount';
                </script>
            ";
        }
        break;
    case 'addAccount':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
            $Repassword = trim($_POST['Repassword'] ?? '');
            $role = trim($_POST['role'] ?? '2'); // Mặc định vai trò là 'user'
            $hinh_anh = "user-1.jpg";

            $messName = $messEmail = $messPassword = $messRepassword = $messRegister = "";
            $check_valid = true;

            // Kiểm tra tên đăng nhập
            if (empty($name)) {
                $check_valid = false;
                $messName = "Vui Lòng Điền Tên Đăng Nhập!";
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
            if (empty($Repassword)) {
                $check_valid = false;
                $messRepassword = "Xác nhận mật khẩu không được để trống!";
            } elseif ($password !== $Repassword) {
                $check_valid = false;
                $messRepassword = "Mật khẩu xác nhận không khớp!";
            }

            // Kiểm tra tài khoản và email đã tồn tại
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
                insert_account($name, $email, $password, $role, $hinh_anh, $id_tai_khoan);

                echo "
                        <script>
                            alert('Thêm Tài Khoản Thành Công!');
                            window.location = '?action=admin&admin=listAccount';
                        </script>
                    ";
            }
        }

        include 'account/add.php';
        break;
    case 'updateAccount':
        $load_one_account = load_one_account($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $password = htmlspecialchars(trim($_POST['password'] ?? ''));
            $role = htmlspecialchars(trim($_POST['role'] ?? '2')); // Mặc định là 'user'
            $upload = $_FILES['upload']['name'] ?? '';

            $messName = $messEmail = $messPassword = $messUpload = "";
            $check_valid = true;

            // Kiểm tra tên đăng nhập
            if (empty($name)) {
                $check_valid = false;
                $messName = "Vui Lòng Điền Tên Đăng Nhập!";
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
                    $uploadDir = './view/assets/be/images/avatar/';
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
                update_account($id, $name, $email, $password, $role, $upload);
                echo "
                    <script>
                        alert('Cập Nhật Tài Khoản Thành Công!');
                        window.location = '?action=admin&admin=listAccount';
                    </script>
                    ";
            }
        }

        include 'account/update.php';
        break;
    case 'listOrder':
        $load_all_order = load_all_order();
        include 'order/list.php';
        break;
    case 'detailOrder':
        $load_all_order = load_all_order();

        $load_one_order_user = load_one_order_user($id);
        extract($load_one_order_user);

        $load_product_in_order_detail = load_product_in_order_detail($id);

        include 'order/detail.php';
        break;
    case 'trackOrder':
        $load_all_order = load_all_order();
        $load_product_in_order_detail = load_product_in_order_detail($id);

        $load_one_order_user = load_one_order_user($id);
        extract($load_one_order_user);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hiddenStatus = trim($_POST['hiddenStatus']);

            $check_valid = true;

            if ($check_valid) {
                update_order($id, $hiddenStatus);
                echo "
                <script>
                    alert('Cập Nhật Trạng Thái Thành Công!');
                    window.location = '?action=admin&admin=trackOrder&id=$id';
                </script>
            ";
            }
        }

        include 'order/track.php';
        break;
}
