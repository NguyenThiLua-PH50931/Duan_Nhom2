<?php
session_start();
// var_dump($_SESSION['vai_tro']);

//==========================Controllers========================
//---------------Controllers-Admin-------------
include "controllers/admin/CategoryController.php";
include "controllers/admin/ProductsControllers.php";
include "controllers/admin/AuthController.php";
include "controllers/admin/AccountsController.php";
include "controllers/admin/CommentController.php";

include "controllers/admin/DasboardController.php";


include "controllers/admin/OrdersController.php";


//---------------Controllers-User-------------
include "controllers/users/LoginControllers.php";
include "controllers/users/HomeControllers.php";
include "controllers/users/RegisterControllers.php";
include "controllers/users/DetailControllers.php";
include "controllers/users/ProductControllers.php";
include "controllers/users/CartControllers.php";
include "controllers/users/WishlistController.php";
include "controllers/users/ShippingController.php";
include "controllers/users/CheckoutController.php";
include "controllers/users/OrderController.php";
include "controllers/users/donMuaController.php";

//==========================Models========================
//---------------Model-Admin-------------
include "database/function.php";
include "models/admin/CategoryModels.php";
include "models/admin/ProductModels.php";
include "models/admin/Auth.php";
include "models/admin/AccountsModels.php";
include "models/admin/CommentModels.php";
include "models/admin/dasboardModel.php";
include "models/admin/OrdersModel.php";
include "models/admin/WishlistModelAdmin.php";

//---------------Model-User-------------
include "models/users/HomeModels.php";
include "models/users/RegisterModels.php";
include "models/users/LoginModels.php";
include "models/users/ProductModel.php";
include "models/users/CartModel.php";
include "models/users/WishlistModel.php";
include "models/users/ShippingModel.php";
include "models/users/CheckoutModel.php";
include "models/users/CommentModel.php";
include "models/users/OrderModel.php";

include "commons/helpers.php";

// /Lấy tham số
$admin = $_GET['admin'] ?? "";
$user = $_GET['user'] ?? "";
$vaiTro = $_GET['vai_tro'] ?? "";
// Kiểm tra quyền truy cập admin
if (!empty($admin)) {
    if (!isset($_SESSION['nameAccount']) && $admin !== 'login') {
        header('location: index.php?admin=login');
        exit();
    }

    match ($admin) {

        // dasboad:
        'dasboard'=>(new DasboardController)->index(),

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
        'add-accounts' => (new AccountsController)->addAccounts(),

        // Thay đổi vai trò:
        'change-role' => (new AccountsController)->changeRole(),

        // Thay đổi trạng thái đơn hàng:
        'change-status' => (new OrdersController)->changeStatus(),
        'change-status1' => (new OrdersController)->changeStatus1(),
        'change-status2' => (new OrdersController)->changeStatus2(),
        // 'change-status3' => (new OrdersController)->changeStatus3(),

        
        // Đăng nhập
        'login' => (new AuthController())->login(),
        'logout' => (new AuthController())->logout(),

        // Bình luận
        'list-comment' => (new CommentController())->listComment(),
        'delete-comment' => (new CommentController())->deleteComment(),

        // Đơn hàng:
        'listOrder' => (new OrdersController())->listOrder(),
        'donXacNhan' => (new OrdersController())->donXacNhan(),
        'donDangGiao' => (new OrdersController())->donDangGiao(),
        'donHoanThanh' => (new OrdersController())->donHoanThanh(),
        'donHuy' => (new OrdersController())->donHuy(),
      

        default => die("Không tìm thấy file")
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
        'updateCart' => (new CartControllers())->updateCart(),
        // 'addCart' => (new CartControllers())->addCart(),
        'deleteCart' => (new CartControllers())->deleteCart(),
        'wishlist' => (new WishlistController())->wishlist(),
        'deleteWishlist' => (new WishlistController())->deleteWishlist(),
        'getShipping' => (new ShippingController())->getShipping(),
        'shipping' => (new ShippingController())->shipping(),
        'checkout' => (new CheckoutController())->getCheckout(),
        'thanhToanSP' => (new CheckoutController())->checkout(),

       'donMua' => (new donMuaController())->getDonMua(),

        'getOrder' => (new OrderController())->getOrder(),
        'huyDon' => (new OrderController())->huyDon(),

        default => die("Không tìm thấy file"),
    };
}
