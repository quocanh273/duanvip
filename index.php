<?php 

session_start();  

include "view/header.php";
include "Models/connect.php";
include "Models/sanpham.php";
include "Models/danhmuc.php";
include "Models/khachhang.php";
include "global.php";


$spnew =loadall_sanpham_home();
$dmnew = loadall_danhmuc_home();
if ((isset($_GET['act']))&&($_GET['act']!="")) {
  $act = $_GET['act'];
  switch ($act) {
    case 'ctsanpham':
        include "view/chitiet.php";
        break;
        
    case 'sanpham':
        include "view/sanpham.php";
        break;
    case 'giohang':
        include "view/giohang.php";
        break;
    case 'thanhtoan':
        include "view/thanhtoan.php";
        break;
    case 'lienhe':
        include "view/lienhe.php";
        break;
    case 'dangky':
        if (isset($_POST['dangky'])&&($_POST['dangky'])) {
            $ten_dang_nhap=$_POST['ten_dang_nhap'];
            $email =$_POST['email'];
            $mat_khau =$_POST['mat_khau'];
            insert_taikhoan($ten_dang_nhap,$email,$mat_khau);
            $thong_bao="Đã đăng ký thành công ! Vui lòng đăng nhập";
        }
        include "login/dangky.php";
        break;
    case 'dangnhap':
        if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
            $ten_dang_nhap=$_POST['ten_dang_nhap'];
            $mat_khau =$_POST['mat_khau'];
           $checkuser = checkuser($ten_dang_nhap,$mat_khau);
           if (is_array($checkuser)) {
            $_SESSION['ten_dang_nhap']= $checkuser ;
            
           include "view/home.php";

           }else{
            $thong_bao="Tài khoản không tồn tại.Vui lòng kiểm tra!";
           }
            
        }
        include "login/dangnhap.php";
        break;
    case 'quenmk':
        include "login/quenmk.php";
        break;
    case 'doimk':
        include "login/doimk.php";

        break;
    default:
        # code...
        break;
  }
}else {
    include "view/home.php"; 
}

include "view/footer.php";
?>