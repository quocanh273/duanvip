<?php
include "header.php";
include "home.php";
include "footer.php";
include "taikhoan/dangnhap.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            include "taikhoan/dangnhap.php";
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