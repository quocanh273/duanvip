<?php 
include "header.php";
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
        if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
            $tendn = $_POST['tendn'];
            $pass = $_POST['pass'];
        include "login/dangky.php";
        break;
    case 'dangnhap':
        if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
            $tendn = $_POST['tendn'];
            $pass = $_POST['pass'];
            $checkuser = checkuser($tendn, $pass);
            if(is_array($checkuser)){
                $_SESSION['ten_dang_nhap']=$checkuser;
                // $thongbao="Bạn đã đăng nhập thành công";
                $thongbao="Đã đăng nhập thành công";
                header('location: index.php');

            
            }else{
                $thongbao="Tài khoản không tồn tại, vui lòng kiểm tra lại hoặc đăng ký";
            }
        }
        include "login/dangnhap.php";
        break;
    
        include "login/dangnhap.php";
        break;
        case 'thoat':
            session_unset();
            header('location: index.php');
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
    include "home.php"; 
}

include "footer.php";
?>