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
function update_dh($id,$trang_thai){
    // var_dump($hinh);
    // die;
    
        $sql = "update hoa_don set trang_thai='".$trang_thai."' where id='".$id."'";
        

    pdo_execute($sql);
}



function loadone_hoadon_ls($id_user){
    $sql = "select * from hoa_don where id_user=".$id_user;
    $hoadon=pdo_query($sql);
    return  $hoadon;
}
function load_all_hoadon_count(){
    $sql = "SELECT COUNT(*) as hoadon_count FROM hoa_don";
    $result = pdo_query($sql);

    // Lấy giá trị số lượng từ kết quả truy vấn
    $hoadon_count = $result[0]['hoadon_count'];

    return $hoadon_count;
}
function calculate_total_gt_hd() {
    $sql = "SELECT SUM(tong_gt_hd) as total_gt_hd FROM hoa_don";
    $result = pdo_query($sql);

    // Extract the total value from the result
    $total_gt_hd = $result[0]['total_gt_hd'];

    return $total_gt_hd;
}



?>