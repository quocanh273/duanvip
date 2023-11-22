<?php 
function binhluan_insert($noi_dung,$id_user,$idpro,$ngay_bluan){
    $sql= "INSERT INTO binh_luan(noi_dung,id_user,idpro,ngay_bluan)
     values ('$noi_dung','$id_user','$idpro','$ngay_bluan')";
    pdo_execute($sql);
}

function binhluan_select_all($idpro){
    $sql = "SELECT * FROM binh_luan where idpro='".$idpro."' order by id_bl desc";
    $listbl =pdo_query($sql);
    return $listbl;
}
?>

