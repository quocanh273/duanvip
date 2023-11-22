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


?>