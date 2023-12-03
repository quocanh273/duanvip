<?php 
function binhluan_insert($noi_dung,$id_user,$idpro,$ngay_bluan){
    $sql= "INSERT INTO binh_luan(noi_dung,id_user,idpro,ngay_bluan)
     values ('$noi_dung','$id_user','$idpro','$ngay_bluan')";
    pdo_execute($sql);
}

function binhluan_select_all($idpro){
    $sql = "SELECT binh_luan.*, nguoi_dung.ten_nguoi_dung 
            FROM binh_luan 
            JOIN nguoi_dung ON binh_luan.id_user = nguoi_dung.id
            WHERE binh_luan.idpro = '".$idpro."' 
            ORDER BY binh_luan.id_bl DESC";

    $listbl = pdo_query($sql);
    
    
return $listbl;
}
?>

