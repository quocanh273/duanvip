<?php 

session_start();  

include "header.php";
include "Models/connect.php";
include "Models/sanpham.php";
include "Models/danhmuc.php";
include "Models/khachhang.php";


if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];;
$spnew =loadall_sanpham_home();
$dmnew = loadall_danhmuc_home();

if ((isset($_GET['act']))&&($_GET['act']!="")) {
  $act = $_GET['act'];
  switch ($act) {
   
    case 'ctsanpham':
        if($_GET['id'] && $_GET['id']>0){
            $id=$_GET['id'];
            $onesp=loadone_sanpham($id);
            include "view/chitiet.php";
        }
        else{
            include "home.php";
        }
        
    break;
      
    case 'sanphamdm':
        if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
            $ma_loai = $_GET['ma_loai'];
           $dssp =loadall_sanpham_ok("",$ma_loai);
            include "view/sanphamdm.php";
        }else{
            include "home.php";
        }
        break;

    case 'sanpham':
            $dssp =loadall_sanpham();
            include "view/sanpham.php";
        break;

   
    case 'giohang':
        if (isset($_POST['giohang'])) {
        $id = $_POST['id'];   
        $ten_san_pham = $_POST['ten_san_pham'];
        $img = $_POST['img'];      
        $gia = $_POST['gia'];
    
        $soluong = 1;
        $thanhtien = $gia * $soluong; // Add a semicolon here
        $spadd = [$id, $ten_san_pham, $img, $gia, $soluong, $thanhtien];
        
        
        array_push($_SESSION['giohang'], $spadd); 
    }
        include "view/giohang.php";    
        break;
        
    case 'delcard':
        if(isset($_GET['idcard'])) {
            array_splice($_SESSION['giohang'], $_GET['idcard'], 1);
        }
        else{
            $_SESSION['giohang'] = [];
        }
        include "view/giohang.php";
        break;

    case 'thanhtoan':
        include "view/thanhtoan.php";
        break;
    case 'dathang':
        include "view/bill.php";
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

            // header('location:index.php');
            echo '<script>
            window.location.href = "index.php";
            </script>';
          

           }else{
            $thong_bao="Tài khoản không tồn tại.Vui lòng kiểm tra!";
           }
            
        }
        include "login/dangnhap.php";
        break;

    case 'quenmk':
        if (isset($_POST['guiemail'])&&($_POST['guiemail']) ) {           
                        $email = $_POST['email'];
                        $checkemail = checkemail($email);                            
                        }
        include "login/quenmk.php";
        break;
    case 'doimk':
        include "login/doimk.php";
        break;

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