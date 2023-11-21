<?php 

function binhluan_select_all(){
    $sql = "SELECT * FROM WHERE binh_luan id_sp = $id_sp";
    return pdo_query($sql);
}
?>

