<?php 
include "view/header.php";
include "Models/connect.php";
include "Models/sanpham.php";
include "global.php";

$spnew =loadall_sanpham_home();
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
        include "login/dangky.php";
        break;
    case 'dangnhap':
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