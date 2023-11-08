<?php
require "header.php";
require "../Models/connect.php";
require "../Models/danhmuc.php";
require "../Models/sanpham.php";
require "../Models/binhluan.php";
require "../Models/thongke.php";
require "../Models/cart.php";



if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'home':
            include "home.php";
            break;


        // Danh mục
        case 'danhmuc':
            //lấy all danh mục
            $dsdm=loai_select_all();
            include "danhmuc/list.php";
            break;
        
        // case 'danhmuc_add':
        //     $dsdm=loai_select_all();
        //     include "danhmuc/add.php";
        //     break;

        // add dm 
        case "createdm":
            $dsdm=loai_select_all();
            include "Danhmuc/create.php";
            break;

        // // update dm 
        case 'editdm':
            include "Danhmuc/update.php";
            break;

        // case 'updatedm':
        //     $loai_update = loai_update();
        //     include "Danhmuc/update.php";
        //     break;


        // // delete dm 
        // case 'deletedm':
        //     if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
        //         $id_category = $_GET['id_cate'];
        //         delete_categories($_GET['id_cate']);
        //     }
        //     $sellect_categories = sellect_all_categories();
        //     include "Danhmuc/list.php";
        //     break;

                // Danh mục con 
                // case "createdm_items":
                //     if (isset($_POST['submitdm_items']) && $_POST['submitdm_items']) {
                //         $id_category = $_POST['category_id'];
                //         $category_name_items = $_POST['category_name_items'];
                //         insert_categories_items($category_name_items,$id_category);
                //         $Notification = "Thêm Thành Công";
                //     }

                //     include "Danhmuc/Danhmuccon/create.php";
                //     break;
                // case "listdm_items":

                //     // lấy ra tên danh mục cha 
                //     $one_categories_items = sellect_one_categories($_GET['id_cate']);
                    
                //     // tìm trong Danhmuc/danhmuccon/list.php lấy ra tên danh mục con
                //     $sellect_all_categories_item=sellect_all_categories_item($_GET['id_cate']);

                


        // Sản phẩm 
        case 'listsp':
            include "Sanpham/list.php";
            break;

        // add sp 
        case "createsp":
            include "Sanpham/create.php";
            break;

        // edit sp 
        case 'editsp':
            include "Sanpham/update.php";
            break;
        // update sp 
        case 'updatesp':
            include "Sanpham/update.php";
            break;


        // Bình Luận
        case 'listbinhluan':
            include "Binhluan/list.php";
            break;

        // xóa bl 
        case 'deletebl':
            include "Binhluan/delete.php";
            break;



        // Khách Hàng 
        case 'listkhachhang':
            include "Khachhang/list.php";
            break;

        // xóa kh 
        case 'deletekh':
            include "Khachhang/delete.php";
            break;


        // Đơn Hàng
        case 'listdonhang':
            include "Qldonhang/list.php";
            break;

        // dh chi tiết
        case 'order_detail':
            include "Qldonhang/donhangchitiet.php";
            break;

        // Thống Kê
        case 'listthongke':
            include "Thongke/thongke.php";
            break;

        //  Biểu đồ 
        case 'bieudo':
            include "Thongke/bieudo.php";
            break;



        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
// FOOTER
include "footer.php";
?>