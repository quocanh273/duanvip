<?php
include "header.php";
// include "home.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'lssanpham' :
            include "view/sanpham.php";
            break;
            case 'ctsanpham' :
                include "view/chitietsanpham.php";
                break;
            case "giohang":
                include "giohang/content.php";
                break;
            case "thanhtoan":
                include "thanhtoan/checkout.php";
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