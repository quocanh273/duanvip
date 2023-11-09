<?php
include "header.php";
include "home.php";

include "taikhoan/dangnhap.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'lssanpham' :
            include "eshopper-shoppingcart/view/sanpham.php";
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