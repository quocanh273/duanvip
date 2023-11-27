<?php 
function hd_select_all(){
    $sql = "SELECT * FROM hoa_don";
    return pdo_query($sql);
}
function loadone_hoadon($id){
    $sql = "select * from hoa_don where id=".$id;
    $hoadon=pdo_query_one($sql);
    return  $hoadon;
}
function loadone_hoadon_ls($id_user){
    $sql = "select * from hoa_don where id_user=".$id_user;
    $hoadon=pdo_query($sql);
    return  $hoadon;
}


?>