<?php 

function ds_khachhang(){
    $sql="select*from nguoi_dung order by id desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang; 
}

function insert_khachhang($tenkh,$tendn,$pass,$mail,$ngaysinh,$diachi,$sodienthoai,$image){
    $sql="INSERT INTO nguoi_dung(ten_nguoi_dung,ten_dang_nhap,mat_khau,email,ngay_sinh,dia_chi,so_dien_thoai,img) 
    values
     (
    '$tenkh',
    '$tendn',
     '$pass',
     '$mail',
     '$ngaysinh',
     '$diachi',
     '$sodienthoai',
     '$image')";
    pdo_execute($sql);
}

function loadone_kh($id){
    $sql = "select * from nguoi_dung where id=".$id;
    $nguoi_dung =pdo_query_one($sql);
    return  $nguoi_dung;
}
function  suakh($id,$tenkh,$tendn,$pass,$mail,$ngaysinh,$diachi,$sodienthoai,$image){
    if ($hinh!="") 
        $sql = "update sanpham set 
        ten_nguoi_dung='".$tenkh."',
        ten_dang_nhap='".$tendn."',
        mat_khau='".$pass."',
        email='".$mail."',
        ngay_sinh='".$ngaysinh."',
        dia_chi='".$diachi."',
        so_dien_thoai='".$sodienthoai."',
      img='".$hinh."'
      where id=".$id;
    else
    $sql = "update sanpham set 
    ten_nguoi_dung='".$tenkh."',
    ten_dang_nhap='".$tendn."',
    mat_khau='".$pass."',
    email='".$mail."',
    ngay_sinh='".$ngaysinh."',
    dia_chi='".$diachi."',
    so_dien_thoai='".$sodienthoai."',
    img='".$hinh."'
  where id=".$id;
}
function delete_kh($id){
    $sql="delete from nguoi_dung where id=".$id;
    pdo_execute($sql);
}

function checkuser($tendn,$pass){
    $sql = "select * from nguoi_dung where ten_dang_nhap='".$tendn."' AND mat_khau='".$pass."'" ;
    $nguoi_dung =pdo_query_one($sql);
    return  $nguoi_dung;
}
?>