<?php 
function hd_select_all(){
    $sql = "SELECT * FROM hoa_don";
    return pdo_query($sql);
}
?>