<?php 
function ds_khachhang(){
    $sql="select*from nguoi_dung order by id desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang; 
}

function insert_khachhang($tenkh,$pass,$mail,$ngaysinh,$diachi,$sodienthoai,$image){
    $sql="INSERT INTO nguoi_dung(ten_nguoi_dung,mat_khau,email,ngay_sinh,dia_chi,so_dien_thoai,img) 
    values
     (
    '$tenkh',
     '$pass',
     '$mail',
     '$ngaysinh',
     '$diachi',
     '$sodienthoai',
     '$image')";
    pdo_execute($sql);
}

function update_khachhang($id,$user,$pass,$email,$address,$tel){
   
    $sql = "update khachhang set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
function delete_kh($id){
    $sql="delete from nguoi_dung where id=".$id;
    pdo_execute($sql);
}
?>