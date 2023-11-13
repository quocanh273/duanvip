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
          //create dm


          case 'createdm':
            if (isset($_POST['submitdm'])&&($_POST['submitdm'])) {
                $ten_loai =$_POST['ten_loai'];  
                loai_insert($ten_loai);
                $thongbao="Them Thanh Cong" ;
                
            }
            include "Danhmuc/create.php";
            break;
        // list

        case 'danhmuc':
            //lấy all danh mục
            $dsdm=loai_select_all();
            include "danhmuc/list.php";
            break;

        // xoa dm 
        case "xoadm":
            if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
                loai_delete($_GET['ma_loai']);
            }
            $dsdm=loai_select_all();
            include "Danhmuc/list.php";
            break;

        // sua dm 
        case 'editdm':
            if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
                $dsdm = loai_select_by_id($_GET['ma_loai']);
            }
            include "Danhmuc/update.php";
            break;
        // update dm 
        case 'updatedm':
            if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                $ma_loai = $_POST['ma_loai'];
                $ten_loai = $_POST['ten_loai'];
                loai_update($ma_loai,$ten_loai);
}
            $dsdm=loai_select_all();
            include "Danhmuc/list.php";
            break;
      
  

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