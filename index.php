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

// if (!isset($_SESSION['nameAccount'])) {
//     if (!empty($_GET['admin']) && empty($_GET['user'] )) {
//         header('location:index.php?admin=login');
//         exit();
//     }
// }

match ($admin) {
    //Product
    'add-product' => (new ProductsController)->addProduct(),
    'edit-product' => (new ProductsController)->editProduct(),
    'list-product' => (new ProductsController)->listProduct(),
    'delete-product' => (new ProductsController)->deleteProduct(),

    //Category
    'add-category' => (new CategoryController)->addCategory(),
    'edit-category' => (new CategoryController)->editCategory(),
    'list-category' => (new CategoryController)->listCategory(),
    'delete-category' => (new CategoryController)->deleteCategory(),

    // Tài khoản:
    'list-accounts' => (new AccountsController)->listAccounts(),
    'delete-accounts' => (new AccountsController)->deleteAccounts(),

    //Auth
    'login' => (new AuthController)->login(),
    'logout' => (new AuthController)->logout(),



    default => "Không tìm thấy file"
};
match ($user) {
    //Home
    'home' => (new HomeController)->home(),
    //Login user
    'login-user' => (new LoginController)->loginUser(),
    // Logout user
    'logout-user' => (new LoginController)->logoutUser(),
    //Register user
    'register-user' => (new RegisterControllers)->registerForm(),

    default => "Không tìm thấy file"
};
