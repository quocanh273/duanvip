<?php 
<<<<<<< HEAD
include "header.php";
=======

session_start();  

include "view/header.php";
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
include "Models/connect.php";
include "Models/sanpham.php";
include "Models/danhmuc.php";
include "Models/khachhang.php";
<<<<<<< HEAD
include "global.php";

=======
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
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
<<<<<<< HEAD
        if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
            $tendn = $_POST['tendn'];
            $pass = $_POST['pass'];
=======
        if (isset($_POST['dangky'])&&($_POST['dangky'])) {
            $ten_dang_nhap=$_POST['ten_dang_nhap'];
            $email =$_POST['email'];
            $mat_khau =$_POST['mat_khau'];
            insert_taikhoan($ten_dang_nhap,$email,$mat_khau);
            $thong_bao="Đã đăng ký thành công ! Vui lòng đăng nhập";
        }
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
        include "login/dangky.php";
        break;
    case 'dangnhap':
        if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
<<<<<<< HEAD
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
=======
            $ten_dang_nhap=$_POST['ten_dang_nhap'];
            $mat_khau =$_POST['mat_khau'];
           $checkuser = checkuser($ten_dang_nhap,$mat_khau);
           if (is_array($checkuser)) {
            $_SESSION['ten_dang_nhap']= $checkuser ;

            // header('location:index.php');
            echo '<script>
            window.location.href = "index.php";
            </script>';
          

           }else{
            $thong_bao="Tài khoản không tồn tại.Vui lòng kiểm tra!";
           }
            
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
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
    case 'thoat':
        session_unset();
        echo '<script>
        window.location.href = "index.php";
        </script>';
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