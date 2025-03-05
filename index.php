<?php
$action = $_GET['action'] ?? 'client';
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
switch ($action) {
    case 'client':
        include './view/client/index.php';
        break;
    case 'admin':
        include './view/admin/index.php';
        break;
    case 'logout':
        include './view/client/account/logout.php';
        break;
    case 'login':
        include './view/client/account/login.php';
        break;
}
