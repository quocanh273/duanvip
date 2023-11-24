<?php
require_once 'connect.php';


function loai_insert($ten_loai,$hinh){
    $sql= "INSERT INTO loai(ten_loai,img)
     values ('$ten_loai','$hinh')";
    pdo_execute($sql);
}


function loai_update($ma_loai,$hinh,$ten_loai){
    // var_dump($hinh);
    // die;
    
    if ($hinh==""){
        $sql = "UPDATE `loai`
        SET `ten_loai`='{$ten_loai}'
        WHERE `loai`.`ma_loai`=$ma_loai";
        
    }else{
        $sql = "UPDATE `loai`
        SET `ten_loai`='{$ten_loai}',`img`='{$hinh}'
        WHERE `loai`.`ma_loai`=$ma_loai";   
    }
    pdo_execute($sql);
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

function loadall_danhmuc_home(){
   $sql ="select * from loai order by ma_loai desc";
   $listcategory = pdo_query($sql);
   return $listcategory;
}