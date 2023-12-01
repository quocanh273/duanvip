<?php
session_start();
require "header.php";
require "../Models/connect.php";
require "../Models/danhmuc.php";
require "../Models/sanpham.php";
require "../Models/khachhang.php";
require "../Models/binhluan.php";
require "../Models/thongke.php";
require "../Models/hoadon.php";
require "../Models/cart.php";

$tongdh =calculate_total_gt_hd();
            $tongkh =ds_khachhang_count();
            $tonghd= load_all_hoadon_count();
            $listthongke = loadall_thongke();
            $listsphot = sanpham_buyhot();
            $listuserbuyhot = getTopBuyers();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'home':
<<<<<<< HEAD
            
=======
            $tongdh =calculate_total_gt_hd();
            $tongkh =ds_khachhang_count();
            $tonghd= load_all_hoadon_count();
            $listthongke = loadall_thongke();
            $listsphot = sanpham_buyhot();
            $listuserbuyhot = getTopBuyers();
>>>>>>> dfc9ec42c5b6da5c622eb9f0de72a32571a0c293
            include "home.php";

            break;



// Danh mục
          //create dm
          case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten_dang_nhap = $_POST['ten_dang_nhap'];
                $mat_khau = $_POST['mat_khau'];
                
                $checkuser = checkuser($ten_dang_nhap, $mat_khau);
        
                if ($checkuser && $checkuser['role'] == 1) {
                    // User with role == 1 is authenticated
                    $_SESSION['ten_dang_nhap'] = $checkuser;
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại hoặc bạn không có quyền đăng nhập";
                }
            }
        
            include "login/dangnhap.php";
            break;
        

        case 'thoat':
            session_unset();
            header('location: index.php');
            break;

          case 'createdm':
            if (isset($_POST['submitdm'])&&($_POST['submitdm'])) {
                $ten_loai =$_POST['ten_loai'];  
                
                $thongbao="Them Thanh Cong" ;
                
                $hinh = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                loai_insert($ten_loai,$hinh);
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
                $hinh = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                
                loai_update($ma_loai,$hinh,$ten_loai);
                $thongbao ="Cập nhật thành công";
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
                $ma_loai =$_POST['ma_loai'];
                $tensp =$_POST['tensp'];
                $giasp =$_POST['giasp'];
                $quantity =$_POST['quantity']; // so luong
                $description =$_POST['description'];
                $product_size =$_POST['product_size'];
                // $mausac =$_POST['mausac'];
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
                
                insert_sanpham($ma_loai,$tensp,$giasp,$quantity,$description,$product_size,$trangthai,$khuyenmai,$hinh);
                $thongbao ="Thêm thành công";
                }
                $listdanhmuc = loai_select_all();
                include "Sanpham/create.php";
                break;
        case 'chitiet':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $id = $_GET['id'];
                $sanpham=loadone_sanpham($_GET['id']);
                $binhluan =binhluan_select_all($id);
                include "Sanpham/chitiet.php";}
                else{
                    include "Sanpham/list.php";
                }
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
                        $ma_loai =$_POST['ma_loai'];
                        $id = $_POST['id'];
                        $tensp =$_POST['tensp'];
                        $giasp =$_POST['giasp'];
                        $quantity =$_POST['quantity']; // so luong
                        $description =$_POST['description'];
                        $product_size =$_POST['product_size'];
                       
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
                       ,$trangthai,$khuyenmai,$hinh,$ma_loai);
                        $thongbao ="Cập nhật thành công";
                        }
                        $listdanhmuc =  loai_select_all();
                        
                        $listsanpham =  loadall_sanpham("",0);
                    include "Sanpham/list.php";
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
                $tenkh =$_POST['tenkh'];
                $tendn =$_POST['tendn'];
                $pass =$_POST['pass'];
                $mail =$_POST['mail']; // so luong
                $ngaysinh =$_POST['ngaysinh'];
                $diachi =$_POST['diachi'];
                $sodienthoai =$_POST['sodienthoai'];
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                
                insert_khachhang($tenkh,$tendn,$pass,$mail,$ngaysinh
                ,$diachi,$sodienthoai,$image);

                $thongbao ="Thêm thành công";
                }
               
                $listkhachhang =ds_khachhang();
                include "Khachhang/create.php";
                break;        
        // xóa kh 
        case 'xoakh':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_kh($_GET['id']);
            }
            $listkhachhang =   ds_khachhang();
            include "Khachhang/list.php";
            break;

            case 'suakh':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $nguoi_dung=loadone_kh($_GET['id']);
                
                }
                include "Khachhang/update.php";
                break;
            case 'updatekh':
                    if (isset($_POST['update']) && ($_POST['update'])) {
                        $id = $_POST['id'];
                        $tenkh = $_POST['tenkh'];
                        $tendn = $_POST['tendn'];
                        $pass = $_POST['pass'];
                        $mail = $_POST['mail'];
                        $ngaysinh = $_POST['ngaysinh'];
                        $diachi = $_POST['diachi'];
                        $sodienthoai = $_POST['sodienthoai'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // File upload success
                        } else {
                            // File upload error
                        }
                
                        suakh($id, $tenkh, $tendn, $pass, $mail, $ngaysinh, $diachi, $sodienthoai, $image);
                
                        $thongbao = "Cập nhật thành công";
                    }
                    
                    $listkhachhang = ds_khachhang("", 0);
                    include "Khachhang/list.php";
                    break;
                   

        // Đơn Hàng
        case 'listdonhang':
            $dhchitiet =  hd_select_all();
            include "Qldonhang/list.php";
            break;

       
        case 'donhangchitiet':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $dhchitiet = loadone_hoadon($_GET['id']);
                include "Qldonhang/donhangchitiet.php";
            }
                else{
                    include "Qldonhang/list.php";
                }
            break;

        // dh chi tiết
        case 'order_detail':
            include "Qldonhang/donhangchitiet.php";
            break;

        // case 'update_order':
            // if (isset($_POST['updatedh']) && ($_POST['updatedh'])) {
            //     $id = $_POST['id'];
            //     $trang_thai = $_POST['trang_thai'];

            //     update_dh($id,$trang_thai);
            //     $thongbao = "Cập nhật thành công";
            //     include "Qldonhang/update.php";
            // }
            case 'update_order':
                if (isset($_POST['updatedh']) && ($_POST['updatedh'])) {
                    echo "Form submitted";  // Debugging statement
                    $id = $_POST['id'];
                    $trang_thai = $_POST['trang_thai'];
            
                    update_dh($id, $trang_thai);
                    echo "Update successful";  // Debugging statement
                    $thongbao = "Cập nhật thành công";
                    include "Qldonhang/update.php";
                    exit;
                }
                break;
        
        // Thống Kê
        case 'listthongke':
            $listthongke = loadall_thongke();
            $listsphot = sanpham_buyhot();
            $listuserbuyhot = getTopBuyers();
            include "Thongke/thongke.php";
            break;


        //  Biểu đồ 
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "Thongke/bieudo.php";
            break;

            

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
    $tongdh =calculate_total_gt_hd();
    $tongkh =ds_khachhang_count();
    $tonghd= load_all_hoadon_count();
    $listthongke = loadall_thongke();
    $listsphot = sanpham_buyhot();
    $listuserbuyhot = getTopBuyers();
}
// FOOTER
include "footer.php";
?>