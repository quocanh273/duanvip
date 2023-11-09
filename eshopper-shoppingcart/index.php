<?php
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'lssanpham':
            include "view/sanpham.php";
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