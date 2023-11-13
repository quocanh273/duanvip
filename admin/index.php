<?php
require "header.php";
require "../Models/connect.php";
require "../Models/danhmuc.php";
require "../Models/sanpham.php";
require "../Models/khachhang.php";
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
            $listsanpham =  loadall_sanpham();
            include "Sanpham/list.php";
            break;

        // add sp 
        case "createsp":
       
                // kiểm tra xem người dùng có click vào nút add hay ko
                if (isset($_POST['themmoi'])&&($_POST['themmoi']) ) {
                $iddm =$_POST['iddm'];
                $tensp =$_POST['tensp'];
                $giasp =$_POST['giasp'];
                $quantity =$_POST['quantity']; // so luong
                $description =$_POST['description'];
                $product_size =$_POST['product_size'];
                $mausac =$_POST['mausac'];
                $trangthai =$_POST['trangthai'];
                $khuyenmai =$_POST['khuyenmai'];
                
                $hinh = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                
                insert_sanpham($tensp,$giasp,$quantity,$description,$product_size
                ,$mausac,$trangthai,$khuyenmai,$hinh,$iddm);
                $thongbao ="Thêm thành công";
                }
                $listdanhmuc = loai_select_all();
                include "Sanpham/create.php";
                break;

                case 'xoasp':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham =  loadall_sanpham("",0);;
                    include "sanpham/list.php";
                    break;
            
                case 'suasp':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc =  loai_select_all();
                    include "Sanpham/update.php";
                    break;

                case 'updatesp':
                    if (isset($_POST['sua'])&&($_POST['sua']) ) {
                        $id = $_POST['id'];
                        $iddm =$_POST['iddm'];
                        $tensp =$_POST['tensp'];
                        $giasp =$_POST['giasp'];
                        $quantity =$_POST['quantity']; // so luong
                        $description =$_POST['description'];
                        $product_size =$_POST['product_size'];
                        $mausac =$_POST['mausac'];
                        $trangthai =$_POST['trangthai'];
                        $khuyenmai =$_POST['khuyenmai'];
                        
                        $hinh = $_FILES['image']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        update_sanpham($id,$tensp,$giasp,$quantity,$description,$product_size
                        ,$mausac,$trangthai,$khuyenmai,$hinh,$iddm);
                        $thongbao ="Cập nhật thành công";
                        }
                        $listdanhmuc =  loai_select_all();
                        
                        $listsanpham =  loadall_sanpham("",0);
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
                $listkhachhang = ds_khachhang();
                include "Khachhang/list.php";
                break;


        case 'createkh':
            if (isset($_POST['themmoi'])&&($_POST['themmoi']) ) {
                $tenkh =$_POST['ten_nguoi_dung'];
                $pass =$_POST['mat_khau'];
                $mail =$_POST['email']; // so luong
                $ngaysinh =$_POST['ngay_sinh'];
                $diachi =$_POST['dia_chi'];
                $sodienthoai =$_POST['mausac'];
                $trangthai =$_POST['trang_Thai'];
                $htaotaihoan =$_POST['thoi_gian_tao_tai_khoan'];
                $hcapnhat =$_POST['thoi_gian_cap_nhat_gan_day'];
                
                
                $image = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                
                insert_khachhang($tenkh,$giasp,$pass,$mail,$ngaysinh
                ,$diachi,$sodienthoai,$trangthai,$htaotaihoan,$hcapnhat,$image);

                $thongbao ="Thêm thành công";
                }
               
                $listkhachhang =   ds_khachhang();
                include "Khachhang/create.php";
                break;        
        // xóa kh 
        case 'xoakh':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_kh($_GET['id']);
            }
            $listkhachhang =   ds_khachhang();
            include "sanpham/list.php";
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