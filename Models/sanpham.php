<?php 
 function loadall_sanpham() {
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id ASC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($tensp,$giasp,$quantity,$description,$product_size
,$mausac,$trangthai,$khuyenmai,$hinh,$iddm){
    $sql= "INSERT INTO sanpham(ten_san_pham,gia,so_luong,mo_ta,loai_sp,mau_sac,trangthai,thong_tin_km,img,id_dm)
     value ('$tensp','$giasp','$quantity','$description','$product_size'
,'$mausac','$trangthai','$khuyenmai','$hinh','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id=".$id;
    $sanpham=pdo_query_one($sql);
    return  $sanpham;
}
function  update_sanpham($id,$tensp,$giasp,$quantity,$description,$product_size
,$mausac,$trangthai,$khuyenmai,$hinh,$iddm){
    if ($hinh!="") 
        $sql = "update sanpham set id_dm='".$iddm."',
     ten_san_pham='".$tensp."',
      gia='".$giasp."',
      so_luong='".$quantity."',
      mo_ta='".$description."',
      loai_sp='".$product_size."',
      mau_sac='".$mausac."',
      trangthai='".$trangthai."',
      thong_tin_km='".$khuyenmai."',
      img='".$hinh."'
      where id=".$id;
    else
    $sql = "update sanpham set id_dm='".$iddm."',
    ten_san_pham='".$tensp."',
     gia='".$giasp."',
     so_luong='".$quantity."',
     mo_ta='".$description."',
     loai_sp='".$product_size."',
     mau_sac='".$mausac."',
     trangthai='".$trangthai."',
     thong_tin_km='".$khuyenmai."'
     
     where id=".$id;   
      pdo_execute($sql);
}
?>