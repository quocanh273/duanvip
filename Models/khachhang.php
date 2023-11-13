<?php 
function ds_khachhang(){
    $sql="select*from nguoi_dung order by id desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang; 
}

function insert_khachhang($tenkh,$giasp,$pass,$mail,$ngaysinh
,$diachi,$sodienthoai,$trangthai,$htaotaihoan,$hcapnhat,$image){
    $sql="INSERT INTO nguoi_dung(ten_nguoi_dung,
    mat_khau,email,
    ngay_sinh,dia_chi,
    img,trang_Thai,
    thoi_gian_tao_tai_khoan,
    thoi_gian_cap_nhat_gan_day) 
    values
     ('$tenkh',
     '$giasp',
     '$pass',
     '$mail',
     '$ngaysinh'
     ,'$diachi',
     '$sodienthoai',
     '$trangthai',
     '$htaotaihoan',
     '$hcapnhat',
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