<?php
session_start();
include "controllers/admin/CategoryController.php";
include "controllers/admin/ProductsControllers.php";
include "controllers/admin/AuthController.php";
include "controllers/admin/AccountsController.php";
include "controllers/users/LoginControllers.php";
include "controllers/users/UsersControllers.php";
include "controllers/users/HomeControllers.php";
include "controllers/users/RegisterControllers.php";
include "database/function.php";
include "models/admin/CategoryModels.php";
include "models/admin/ProductModels.php";
include "models/admin/Auth.php";
include "models/admin/AccountsModels.php";
include "models/users/HomeModels.php";
include "models/users/RegisterModels.php";
include "models/users/LoginModels.php";

include "commons/helpers.php";

//Lấy tham số trên thanh địa chỉ URL
$admin = $_GET['admin'] ?? "";
$user = $_GET['user'] ?? "";

// Kiểm tra quyền truy cập vào khu vực admin
if (!isset($_SESSION['nameAccount']) && $admin !== 'login') {
    header('location: index.php?admin=login');
    exit();
}

if (!empty($admin)) {
    // Điều hướng admin
    match ($admin) {
        'list-product' => (new ProductsController())->listProduct(),
        'add-product' => (new ProductsController())->addProduct(),
        'edit-product' => (new ProductsController())->editProduct(),
        'delete-product' => (new ProductsController())->deleteProduct(),
        'login' => (new AuthController())->login(),
        'logout' => (new AuthController())->logout(),
        default => die("Không tìm thấy file"),
    };
    
}

if (!empty($user)) {
    // Điều hướng user
    match ($user) {
        'home' => (new HomeController())->home(),
        'login-user' => (new LoginController())->loginUser(),
        'logout-user' => (new LoginController())->logoutUser(),
        'register-user' => (new RegisterControllers())->registerForm(),
        default => "Không tìm thấy file",
    };
}


