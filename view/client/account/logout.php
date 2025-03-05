<?php
session_start();

// Xóa tất cả các session
session_unset();
session_destroy();

// Chuyển hướng về trang chủ
header("Location: ?action=client");
exit();
