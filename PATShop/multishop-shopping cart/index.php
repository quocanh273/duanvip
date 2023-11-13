<?php 
include "view/header.php";
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
    case 'dangnhap':
        include "view/login/dangnhap.php";
        break;
    case 'quenmk':
        include "view/login/quenmk.php";
        break;
    case 'doimk':
        include "view/login/doimk.php";
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