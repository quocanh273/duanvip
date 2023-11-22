<?php
require_once 'connect.php';

function insert_bill($ten_nguoi_dung, $email, $so_dien_thoai, $tong_gt_hd, $trang_thai, $dia_chi, $pt_tt, $thong_tin_km, $ngay_thd)
{
    $sql = "INSERT INTO `hoa_don` (`ten_nguoi_dung`, `email`, `so_dien_thoai`, `tong_gt_hd`, `trang_thai`, `dia_chi`, `pt_tt`, `thong_tin_km`, `ngay_thd`) VALUES ('$ten_nguoi_dung', '$email', '$so_dien_thoai', '$tong_gt_hd', '$trang_thai', '$dia_chi', '$pt_tt', '$thong_tin_km', '$ngay_thd')";
    return pdo_execute_return_lastInsertID($sql);
}