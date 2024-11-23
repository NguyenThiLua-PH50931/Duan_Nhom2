<?php
session_start();
//==========================Controllers========================
//---------------Controllers-Admin-------------
include "controllers/admin/CategoryController.php";
include "controllers/admin/ProductsControllers.php";
include "controllers/admin/AuthController.php";
include "controllers/admin/AccountsController.php";

//---------------Controllers-User-------------
include "controllers/users/LoginControllers.php";
include "controllers/users/HomeControllers.php";
include "controllers/users/RegisterControllers.php";
include "controllers/users/DetailControllers.php";
include "controllers/users/ProductControllers.php";
include "controllers/users/CartControllers.php";

//==========================Models========================
//---------------Model-Admin-------------
include "database/function.php";
include "models/admin/CategoryModels.php";
include "models/admin/ProductModels.php";
include "models/admin/Auth.php";
include "models/admin/AccountsModels.php";

//---------------Model-User-------------
include "models/users/HomeModels.php";
include "models/users/RegisterModels.php";
include "models/users/LoginModels.php";
include "models/users/ProductModel.php";
include "models/users/CartModel.php";

include "commons/helpers.php";

// /Lấy tham số
$admin = $_GET['admin'] ?? "";
$user = $_GET['user'] ?? "";

// Kiểm tra quyền truy cập admin
if (!empty($admin)) {
    if (!isset($_SESSION['nameAccount']) && $admin !== 'login') {
        header('location: index.php?admin=login');
        exit();
    }

    match ($admin) {
        // Sản phẩm
        'list-product' => (new ProductsController())->listProduct(),
        'add-product' => (new ProductsController())->addProduct(),
        'edit-product' => (new ProductsController())->editProduct(),
        'delete-product' => (new ProductsController())->deleteProduct(),

        // Danh mục:
        'list-category' => (new CategoryController())->listCategory(),
        'add-category' => (new CategoryController())->addCategory(),
        'edit-category' => (new CategoryController())->editCategory(),
        'delete-category' => (new CategoryController())->deleteCategory(),

        // Tài khoản:
        'list-accounts' => (new AccountsController)->listAccounts(),
        'delete-accounts' => (new AccountsController)->deleteAccounts(),
        // Đăng nhập
        'login' => (new AuthController())->login(),
        'logout' => (new AuthController())->logout(),
        default => die("Không tìm thấy file"),
    };
}

// Điều hướng user
if (!empty($user)) {
    match ($user) {
        'test' => (new HomeController())->index(),
        'home' => (new HomeController())->home(),
        'login-user' => (new LoginController())->loginUser(),
        'logout-user' => (new LoginController())->logoutUser(),
        'register-user' => (new RegisterControllers())->registerForm(),
        'detail-product' => (new DetailControllers())->show(),
        'filter' => (new HomeController())->filter(),
        'shop' => (new ProductControllers())->shop(),
        'cart' => (new CartControllers())->viewCart(),
        'addCart' => (new CartControllers())->addCart(),
        default => die("Không tìm thấy file"),
    };
}
