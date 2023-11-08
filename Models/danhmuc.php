<?php
require_once 'connect.php';

function loai_insert($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}
function loai_update($ma_loai, $ten_loai){
    $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
function loai_delete($ma_loai){
    $sql = "DELETE FROM loai WHERE ma_loai=?";
    if(is_array($ma_loai)){
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_loai);
    }
}
function loai_select_all(){
    $sql = "SELECT * FROM loai";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}