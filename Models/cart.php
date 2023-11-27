<?php
require_once 'connect.php';

function insert_bill($id_user,$ten_nguoi_dung, $email, $so_dien_thoai, $tong_gt_hd, $trang_thai, $dia_chi, $pt_tt)
{
    $sql = "INSERT INTO `hoa_don` (`id_user`,`ten_nguoi_dung`, `email`, `so_dien_thoai`, `tong_gt_hd`, `trang_thai`, `dia_chi`, `pt_tt`) VALUES ('$id_user','$ten_nguoi_dung', '$email', '$so_dien_thoai', '$tong_gt_hd', '$trang_thai', '$dia_chi', '$pt_tt')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($name_product,$price, $size, $quantity, $id_bill, $id_user)
{
    $sql = "INSERT INTO `cart`(`name_product`, `price`, `size`, `quantity`, `id_hoadon`, `id_nguoidung`) VALUES ('$name_product', '$price', '$size','$quantity', '$id_bill', '$id_user')";
    return pdo_execute($sql);
}
