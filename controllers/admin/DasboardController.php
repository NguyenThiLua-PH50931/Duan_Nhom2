<?php
class DasboardController
{
    public function index()
    {
        $tai_khoan = (new AccountsModels)->getAllAccount();
        $product = (new ProductModels)->getAllProducts();
        $order = (new OrdersModel)->donHoanThanh();
        $sum = 0;
        foreach($order as $value) {
            $sum += $value['tongTien'];
        }  
        // debug($order);      
        $topProducts = (new dasboardModel)->getProductsByViews();
        // echo '<pre>';
        // print_r($topProducts); // Kiểm tra dữ liệu đã sắp xếp chưa
        // echo '</pre>';
        // die;

        // Lấy ra 
        $mostRecent = (new dasboardModel)->mostRecent();
//    echo '<pre>';
//         print_r($mostRecent); // Kiểm tra dữ liệu đã sắp xếp chưa
//         echo '</pre>';
//         die;

// Lấy ra sản phẩm bán chạy nhất:
        $bestSeller = (new dasboardModel)->bestSellerProducts();
        // echo '<pre>';
        //         print_r($bestSeller); // Kiểm tra dữ liệu đã sắp xếp chưa
        //         echo '</pre>';
        //         die;
        view('admin/dasboard', ['topProducts' => $topProducts, 'mostRecent'=>$mostRecent, 'bestSeller'=> $bestSeller,'tai_khoan'=>$tai_khoan, 'product'=>$product,'order'=>$order, 'sum'=>$sum]);
    }
}
