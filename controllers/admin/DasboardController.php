<?php
class DasboardController
{
    public function index()
    {
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
        view('admin/dasboard', ['topProducts' => $topProducts, 'mostRecent'=>$mostRecent]);
    }
}
