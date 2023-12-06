<?php
require_once 'connect.php';

function insert_bill($id_user,$ten_nguoi_dung, $email, $so_dien_thoai, $tong_gt_hd, $trang_thai,$quan_huyen,$xa_phuong,$tinh_thanhpho, $dia_chi, $pt_tt,$ngay_thd){
    $sql = "INSERT INTO `hoa_don` (`id_user`,`ten_nguoi_dung`, `email`, `so_dien_thoai`, `tong_gt_hd`, `trang_thai`,`quan_huyen`,`xa_phuong`,`tinh_thanhpho`, `dia_chi`, `pt_tt`,`ngay_thd`) VALUES ('$id_user','$ten_nguoi_dung', '$email', '$so_dien_thoai', '$tong_gt_hd', '$trang_thai','$quan_huyen','$xa_phuong','$tinh_thanhpho', '$dia_chi', '$pt_tt','$ngay_thd')";        return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($name_product,$price, $size, $quantity, $id_bill, $id_user)
{
    $sql = "INSERT INTO `cart`(`name_product`, `price`, `size`, `quantity`, `id_hoadon`, `id_nguoidung`) VALUES ('$name_product', '$price', '$size','$quantity', '$id_bill', '$id_user')";
    return pdo_execute($sql);
}
function sanpham_buyhot()
{
    $sql = "SELECT name_product, COUNT(name_product) AS product_count
    FROM cart
    GROUP BY name_product
    ORDER BY product_count DESC";
    return pdo_query($sql);
}
function getTopBuyers() {
    $sql = "SELECT u.ten_dang_nhap,u.email, COUNT(b.id) AS so_luong_hoa_don
            FROM nguoi_dung u
            LEFT JOIN hoa_don b ON u.id = b.id_user
            GROUP BY u.id
            ORDER BY so_luong_hoa_don DESC";

    return pdo_query($sql);
}
function get_cart_items_by_ids($id_hoadon, $id_nguoidung) {
    $sql = "SELECT `name_product`, `price`, `size`, `quantity` FROM `cart` WHERE `id_hoadon` = '$id_hoadon' AND `id_nguoidung` = '$id_nguoidung'";
    return pdo_query($sql);
}

?>
